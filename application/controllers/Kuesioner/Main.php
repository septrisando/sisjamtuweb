<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {

        $this->load->view('kuesioner/kuesioner_header');
        $this->load->view('kuesioner/main_view');
        $this->load->view('kuesioner/kuesioner_footer');
    }

}