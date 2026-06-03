<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pasien extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('pasien_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['pasien'] = $this->pasien_model->get_all();
    
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('pasien/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('pasien/tambah');
        $this->load->view('templates/footer');
    }

    public function simpan()
    {
        $data = [
            'id_pendaftaran'     => $this->input->post('id_pendaftaran'),
            'id_pasien'         => $this->input->post('id_pasien'),
            'id_dokter'         => $this->input->post('id_dokter'),
            'nama_pasien'       => $this->input->post('nama_pasien'),
            'keluhan'           => $this->input->post('keluhan'),
            'tanggal_kunjungan' => $this->input->post('tanggal_kunjungan'),
            'jam_kunjungan'     => $this->input->post('jam_kunjungan'),
            'status'            => $this->input->post('status'),
            'tanggal_daftar'    => $this->input->post('tanggal_daftar')
        ];

        $this->pasien_model->insert($data);
        redirect('pasien');
    }

    public function hapus($no_pasien)
    {
        $this->pasien_model->delete($no_pasien);
        redirect('pasien');
    }

    public function edit($no_pasien)
    {
        $data['pasien'] = $this->pasien_model->get_by_id($no_pasien);

        if (!$data['pasien']) {
            show_404();
        }

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('pasien/edit', $data);
        $this->load->view('templates/footer');
    }

    public function update($no_pasien)
    {
        $data = [
            'id_pendaftaran'    => $this->input->post('id_pendaftaran'),
            'id_pasien'         => $this->input->post('id_pasien'),
            'id_dokter'         => $this->input->post('id_dokter'),
            'nama_pasien'       => $this->input->post('nama_pasien'),
            'keluhan'           => $this->input->post('keluhan'),
            'tanggal_kunjungan' => $this->input->post('tanggal_kunjungan'),
            'jam_kunjungan'     => $this->input->post('jam_kunjungan'),
            'status'            => $this->input->post('status'),
            'tanggal_daftar'    => $this->input->post('tanggal_daftar')
        ];

        $this->pasien_model->update($no_pasien, $data);
        redirect('pasien');
    }
}