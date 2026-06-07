<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cetak extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        // load semua model sekali saja
        $this->load->model('Dokter_model');
        $this->load->model('pasien_model');
        $this->load->model('pendaftaran_model');
    }

    // ================= CETAK DOKTER =================
    public function dokter()
    {
        $data['dokter'] = $this->Dokter_model->get_all();

        if (!$data['dokter']) {
            $data['dokter'] = [];
        }

        $this->load->view('cetak/dokter', $data);
    }

    // ================= CETAK PASIEN =================
    public function pasien()
    {
        $data['pasien'] = $this->pasien_model->get_all();

        if (!$data['pasien']) {
            $data['pasien'] = [];
        }

        $this->load->view('cetak/pasien', $data);
    }

    // ================= CETAK PENDAFTARAN =================
    public function pendaftaran()
    {
        $data['pendaftaran'] = $this->pendaftaran_model->get_all();

        if (!$data['pendaftaran']) {
            $data['pendaftaran'] = [];
        }

        $this->load->view('cetak/pendaftaran', $data);
    }
}