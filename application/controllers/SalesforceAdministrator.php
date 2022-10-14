<?php
defined('BASEPATH') or exit('No direct script access allowed');

class SalesforceAdministrator extends CI_Controller
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
        //$this->load->view('header');
        $this->load->view('salesforceAdministrator/index');
        //$this->load->view('footer');
    }
    
    public function downloadSyllabus(){
        $this->load->helper('download');
        $routeFile = "assets/course/syllabus/syllabusAdministrator.pdf";
        force_download(FCPATH.$routeFile,NULL);
    }
}