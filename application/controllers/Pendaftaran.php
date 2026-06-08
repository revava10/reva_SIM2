<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pendaftaran extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('pendaftaran_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['pendaftaran'] = $this->pendaftaran_model->get_all();

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('pendaftaran/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('pendaftaran/tambah');
        $this->load->view('templates/footer');
    }

    public function simpan()
    {
        $data = [
            'nomor_pendaftaran' => $this->input->post('nomor_pendaftaran'),
            'id_pasien'         => $this->input->post('id_pasien'),
            'id_dokter'         => $this->input->post('id_dokter'),
            'nama_pasien'       => $this->input->post('nama_pasien'),
            'keluhan'           => $this->input->post('keluhan'),
            'tanggal_kunjungan' => $this->input->post('tanggal_kunjungan'),
            'jam_kunjungan'     => $this->input->post('jam_kunjungan'),
            'status'            => $this->input->post('status'),
            'tanggal_daftar'    => $this->input->post('tanggal_daftar')
        ];

        $this->pendaftaran_model->insert($data);

        $this->session->set_flashdata('success', 'Data pendaftaran berhasil ditambahkan');
        redirect('pendaftaran');
    }

    public function edit($id)
    {
        $data['pendaftaran'] = $this->pendaftaran_model->get_by_id($id);

        if (!$data['pendaftaran']) {
            show_404();
        }

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('pendaftaran/edit', $data);
        $this->load->view('templates/footer');
    }

    public function update($id_pendaftaran)
    {
        $data = [
            'id_pasien'         => $this->input->post('id_pasien'),
            'id_dokter'         => $this->input->post('id_dokter'),
            'nama_pasien'       => $this->input->post('nama_pasien'),
            'keluhan'           => $this->input->post('keluhan'),
            'tanggal_kunjungan' => $this->input->post('tanggal_kunjungan'),
            'jam_kunjungan'     => $this->input->post('jam_kunjungan'),
            'status'            => $this->input->post('status'),
            'tanggal_daftar'    => $this->input->post('tanggal_daftar')
        ];

        $this->pendaftaran_model->update($id_pendaftaran, $data);

        $this->session->set_flashdata('success', 'Data pendaftaran berhasil diubah');
        redirect('pendaftaran');
    }

    public function hapus($id_pendaftaran)
    {
        $this->pendaftaran_model->delete($id_pendaftaran);

        $this->session->set_flashdata('success', 'Data pendaftaran berhasil dihapus');
        redirect('pendaftaran');
    }
}