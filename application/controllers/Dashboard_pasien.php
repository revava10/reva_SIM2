<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_pasien extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        if (!$this->session->userdata('login')) {
            redirect('auth');
        }

        if ($this->session->userdata('role') != 'pasien') {
            redirect('dashboard');
        }
    }

    public function index()
    {
        $this->load->view('pasien2/frontend');
    }
}