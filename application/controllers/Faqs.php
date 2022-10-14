<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Faqs extends CI_Controller
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
        $this->load->view('header');
        $this->load->view('faqs/index');
        $this->load->view('footer');
    }
}