<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function __construct()
    {
        header('Access-Control-Allow-Origin: *');
        parent::__construct();

        //Zona horaria
        date_default_timezone_set('America/Mexico_City');
    }

    public function index()
    {
        $linkJsVista = base_url('assets/js/home/home.js');
        $footer = array(
            'scriptVista' => '<script src="' . $linkJsVista . '"></script>'
        );
        $this->load->view('header');
        $this->load->view('home/index');
        $this->load->view('footer', $footer);
    }
}