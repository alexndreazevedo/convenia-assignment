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
        ], [
            'cometa'    => 'Encke',
            'grupo'     => 'Vermelho',
            'abduzido'  => false,
            'feedback'  => null,
        ], [
            'cometa'    => 'Wolf',
            'grupo'     => 'Preto',
            'abduzido'  => false,
            'feedback'  => null,
        ], [
            'cometa'    => 'Kushida',
            'grupo'     => 'Azul',
            'abduzido'  => false,
            'feedback'  => null,
        ],
    ];

    // Ferias difinition
    protected $ferias = [
        [
            'nome'  => 'José Silva',
            'data'  => '01/01/2014',
        ], [
            'nome'  => 'João Souza',
            'data'  => '11/07/2013',
        ], [
            'nome'  => 'Pedro Fernandes',
            'data'  => '15/06/2014',
        ], [
            'nome'  => 'Paulo Pereira',
            'data'  => '01/07/2015',
        ], [
            'nome'  => 'Sebastião Oliveira',
            'data'  => '01/02/2015',
        ],
    ];

    public function index()
	{

        // Calculate abduzidos
        $this->calcularAbduzidos();

        // Calculate ferias
        $this->calcularFerias();

        $data = [
            'abduzidos' => $this->abduzidos,
            'ferias'    => $this->ferias,
        ];

        $this->load->view('convenia', $data);
	}

    private function calcularAbduzidos() {

        foreach($this->abduzidos as $k => $v) {

            // Calculate the product of cometa and grupo indexes
            $cometa = $this->calcularProduto($v['cometa']);
            $grupo  = $this->calcularProduto($v['grupo']);

            $module_cometa  = ($cometa % 45);
            $module_grupo   = ($grupo % 45);

            // Set the difference to give feedback
            $this->abduzidos[$k]['feedback'] = abs(($cometa % 45) - ($grupo % 45));

            // Check if the module of division is equal
            if($module_cometa == $module_grupo) {

                // If module is equal, set true to array of class
                $this->abduzidos[$k]['abduzido'] = true;

            }

        }

    }

    private function calcularProduto($str) {

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

            // Calculate the product of array and return the value
            return array_product($arr);

        }

        // Case $str type is not string, return false
        return false;
    }

    private function calcularFerias() {

        foreach($this->ferias as $k => $v) {

            //@TODO

        }

    }
}
