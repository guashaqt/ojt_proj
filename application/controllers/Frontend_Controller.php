<?php
defined ('BASEPATH') OR exit('No direct script across allowed');

class Frontend_Controller extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
    }

    public function index ()
    {
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/pages/about');
        $this->load->view('frontend/include/footer');
    }
} 