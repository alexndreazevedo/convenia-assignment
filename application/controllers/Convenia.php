<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Convenia extends CI_Controller {

    // Abduzidos definition
    protected $abduzidos = array(
        array(
            'cometa'    => 'Halley',
            'grupo'     => 'Amarelo',
            'abduzido'  => false,
        ),
        array(
            'cometa'    => 'Encke',
            'grupo'     => 'Vermelho',
            'abduzido'  => false,
        ),
        array(
            'cometa'    => 'Wolf',
            'grupo'     => 'Preto',
            'abduzido'  => false,
        ),
        array(
            'cometa'    => 'Kushida',
            'grupo'     => 'Azul',
            'abduzido'  => false,
        ),
    );

    // Ferias difinition
    protected $ferias = array(
        array(
            'nome'  => 'José Silva',
            'data'  => '01/01/2014',
        ),
        array(
            'nome'  => 'João Souza',
            'data'  => '11/07/2013',
        ),
        array(
            'nome'  => 'Pedro Fernandes',
            'data'  => '15/06/2014',
        ),
        array(
            'nome'  => 'Paulo Pereira',
            'data'  => '1/07/2015',
        ),
        array(
            'nome'  => 'Sebastião Oliveira',
            'data'  => '01/02/2015',
        ),
    );

    public function index()
	{

        // Calculate abduzidos
        $this->calcularAbduzidos();

        // Calculate ferias
        $this->calcularFerias();

        $this->load->view('convenia');
	}

    private function calcularAbduzidos() {

        foreach($this->abduzidos as $k => $v) {

            // Calculate the product of cometa and grupo indexes
            $cometa = $this->calcularProduto($v['cometa']);
            $grupo  = $this->calcularProduto($v['grupo']);

            // Check if the module of division is equal
            if(($cometa % 45) == ($grupo % 45)) {

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
