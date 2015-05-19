<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Convenia extends CI_Controller {

    // Abduzidos definition
    protected $abduzidos = [
        [
            'cometa'    => 'Halley',
            'grupo'     => 'Amarelo',
            'abduzido'  => false,
            'feedback'  => null,
            'info'      => [],
        ], [
            'cometa'    => 'Encke',
            'grupo'     => 'Vermelho',
            'abduzido'  => false,
            'feedback'  => null,
            'info'      => [],
        ], [
            'cometa'    => 'Wolf',
            'grupo'     => 'Preto',
            'abduzido'  => false,
            'feedback'  => null,
            'info'      => [],
        ], [
            'cometa'    => 'Kushida',
            'grupo'     => 'Azul',
            'abduzido'  => false,
            'feedback'  => null,
            'info'      => [],
        ],
    ];


    // Ferias difinition
    protected $ferias = [
        [
            'nome'      => 'José Silva',
            'data'      => '01/01/2014',
            'status'    => null,
            'info'      => null,
            'periodo'   => [],
        ], [
            'nome'      => 'João Souza',
            'data'      => '11/07/2013',
            'status'    => null,
            'info'      => null,
            'periodo'   => [],
        ], [
            'nome'      => 'Pedro Fernandes',
            'data'      => '15/06/2014',
            'status'    => null,
            'info'      => null,
            'periodo'   => [],
        ], [
            'nome'      => 'Paulo Pereira',
            'data'      => '01/07/2015',
            'status'    => null,
            'info'      => null,
            'periodo'   => [],
        ], [
            'nome'      => 'Sebastião Oliveira',
            'data'      => '01/02/2015',
            'status'    => null,
            'info'      => null,
            'periodo'   => [],
        ],
    ];

    public function index()
	{

        // Calculate abduzidos
        $this->calcularAbduzidos();

        // Calculate ferias
        $this->calcularFerias();

        // Encapsulate variables for send to view
        $data = [
            'abduzidos' => $this->abduzidos,
            'ferias'    => $this->ferias,
        ];

        $this->load->view('convenia', $data);
	}

    private function calcularAbduzidos() {

        foreach($this->abduzidos as $k => $v) {

            // Calculate the product of cometa and grupo indexes
            $cometa = $this->converterString($v['cometa']);
            $grupo  = $this->converterString($v['grupo']);

            $produto_cometa  = array_product($cometa);
            $produto_grupo   = array_product($grupo);

            // Check if the module of division is equal
            if(($produto_cometa % 45) == ($produto_grupo % 45)) {

                // If module is equal, set true to array of class
                $this->abduzidos[$k]['abduzido'] = true;

            }

            // Set the difference to give feedback
            $this->abduzidos[$k]['feedback']        = abs(($produto_cometa % 45) - ($produto_grupo % 45));

            // Create info to demonstrate how the code has calculated the product
            $this->abduzidos[$k]['info']['cometa']  = implode('-', $cometa);
            $this->abduzidos[$k]['info']['grupo']   = implode('-', $grupo);

            // Create info to demonstrate how the difference between two product sentences
            $this->abduzidos[$k]['info']['razao']   = sprintf('%d : %d', $produto_cometa, $produto_grupo);
        }

    }

    private function converterString($str) {

        if(is_string($str)) {

            // Using slugify to avoid errors with special chars
            $slugify = new Cocur\Slugify\Slugify();

            // The slugify remove all glyphs and separators
            $str = $slugify->slugify($str, '');

            // Split each letter of string to array
            $arr = str_split($str, 1);

            foreach($arr as $k => $v) {

                // Convert char to relative ascii int
                $arr[$k] = ord($v) - 96;

            }

            return $arr;

        }

        // Case $str type is not string, return false
        return false;
    }

    private function calcularFerias() {

        foreach($this->ferias as $k => $v) {

            $hoje               = new \DateTime('now');
            $admissao           = \DateTime::createFromFormat('d/m/Y', $v['data']);

            $aquisitivo_inicio  = clone $admissao;

            $aquisitivo_fim     = clone $admissao;
            $aquisitivo_fim->add(new \DateInterval('P12M'));

            $concessivo_inicio  = clone $aquisitivo_fim;

            $concessivo_fim     = clone $aquisitivo_fim;
            $concessivo_fim->add(new \DateInterval('P12M'));

            $this->ferias[$k]['periodo']['aquisitivo'] = sprintf('%s a %s', $aquisitivo_inicio->format('d/m/Y'), $aquisitivo_fim->format('d/m/Y'));
            $this->ferias[$k]['periodo']['concessivo'] = sprintf('%s a %s', $concessivo_inicio->format('d/m/Y'), $concessivo_fim->format('d/m/Y'));

            if($hoje < $admissao) {

                $interval = $hoje->diff($admissao);
                $this->ferias[$k]['status'] = sprintf('Deverá ser contratado em %d dias.', $interval->days);
                $this->ferias[$k]['info']   = sprintf('Estas informações foram provavelmente fornecidas por Marty McFly ou Mãe Diná.');

            }
            elseif($hoje >= $aquisitivo_inicio && $hoje < $aquisitivo_fim) {

                $interval_inicio    = $hoje->diff($aquisitivo_inicio);
                $interval_fim       = $hoje->diff($aquisitivo_fim);

                if($interval_inicio->days < 90) {
                    $this->ferias[$k]['status'] = sprintf('Primeiros 90 dias de experiência.');
                    $this->ferias[$k]['info']   = sprintf('Você pode renovar o contrato em até 90 dias.');
                }
                elseif($interval_fim->days < 30) {
                    $this->ferias[$k]['status'] = sprintf('Menos de 30 dias para o início do período concessivo.');
                    $this->ferias[$k]['info']   = sprintf('O período concessivo de férias é o prazo que a Lei estabelece para que o empregador conceda as férias ao empregado. Este prazo equivale aos 12 (doze) meses subsequentes a contar da data do período aquisitivo completado.');
                }
                else {
                    $this->ferias[$k]['status'] = sprintf('Dentro do período aquisitivo.');
                    $this->ferias[$k]['info']   = sprintf('O período aquisitivo de férias é o período de 12 (doze) meses a contar da data de admissão do empregado que, uma vez completados, gera o direito ao empregado de gozar os 30 (trinta) dias de férias.');
                }

            }
            elseif($hoje >= $concessivo_inicio && $hoje < $concessivo_fim) {

                $interval       = $hoje->diff($aquisitivo_fim);

                if($interval->days < 30) {
                    $this->ferias[$k]['status'] = sprintf('Menos de 30 dias para o fim do período concessivo.');
                    $this->ferias[$k]['info']   = sprintf('Embora a lei estabeleça que as férias devam ser concedidas nos 12 (doze) meses subsequentes ao período aquisitivo, o entendimento jurisprudencial é que devam ser concedidas antes que vença o 2º período aquisitivo, ou seja, o término de gozo deve ser antes do vencimento dos 12 meses de concessão.');
                }
                else {
                    $this->ferias[$k]['status'] = sprintf('Direito a gozar férias.');
                    $this->ferias[$k]['info']   = sprintf('De acordo com a CLT, o empregador que não conceder as férias para o empregado ou que o fizer fora do período concessivo, é obrigado a pagar o valor equivalente em dobro, conforme o disposto nos artigos 134 e 137, podendo ainda sofrer sanções administrativas impostas pelo Ministério do Trabalho quando da fiscalização.');
                }

            }
            elseif($hoje >= $concessivo_fim) {

                $interval_aquisitivo       = $hoje->diff($aquisitivo_fim);
                $interval_concessivo       = $hoje->diff($concessivo_fim);

                if($interval_aquisitivo->y > 0) {
                    $this->ferias[$k]['status'] = sprintf('Férias de %d ano(s) vencidas. Direito a gozar férias de %d ano(s).', $interval_concessivo->y + 1, $interval_aquisitivo->y + 1);
                }
                else {
                    $this->ferias[$k]['status'] = sprintf('Férias de %d ano(s) vencidas.', $interval_concessivo->y + 1);
                }
                $this->ferias[$k]['info']   = sprintf('Todos os valores a que o empregado tem direito como o salário, as médias de variáveis, os adicionais previstos na legislação (noturno, insalubridade, periculosidade e etc.) e o 1/3 constitucional, devem ser considerados para o pagamento em dobro.');

            }

        }

    }
}
