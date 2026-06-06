<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        if (!$this->session->userdata('login')) {
            redirect('login');
        }
    }

    public function index()
    {
        redirect('laporan/pendaftaran');
    }

    public function pendaftaran()
    {
        $bulan = $this->input->get('bulan');

        $this->db->select('pendaftaran.*, pasien.nama AS nama_pasien, dokter.nama_dokter');
        $this->db->from('pendaftaran');
        $this->db->join('pasien', 'pasien.id_pasien = pendaftaran.id_pasien');
        $this->db->join('dokter', 'dokter.id_dokter = pendaftaran.id_dokter');

        if (!empty($bulan)) {
            $this->db->where('DATE_FORMAT(tanggal_daftar,"%Y-%m") =', $bulan);
        }

        $data['data'] = $this->db->get()->result();
        $data['bulan'] = $bulan;

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('laporan/pendaftaran', $data);
        $this->load->view('templates/footer');
    }

    public function pasien()
    {
        $data['pasien'] = $this->db->get('pasien')->result();

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('laporan/pasien', $data);
        $this->load->view('templates/footer');
    }

    public function dokter()
    {
        $data['dokter'] = $this->db->get('dokter')->result();

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('laporan/dokter', $data);
        $this->load->view('templates/footer');
    }

    public function cetak_pendaftaran()
{
    $this->db->select('pendaftaran.*, pasien.nama AS nama_pasien, dokter.nama_dokter');
    $this->db->from('pendaftaran');
    $this->db->join('pasien', 'pasien.id_pasien = pendaftaran.id_pasien');
    $this->db->join('dokter', 'dokter.id_dokter = pendaftaran.id_dokter');

    $data['data'] = $this->db->get()->result();

    $this->load->view('laporan/cetak_pendaftaran', $data);
}

    public function cetak_pasien()
    {
        $data['pasien'] = $this->db->get('pasien')->result();
        $this->load->view('laporan/cetak_pasien', $data);
    }

    public function cetak_dokter()
    {
        $data['dokter'] = $this->db->get('dokter')->result();
        $this->load->view('laporan/cetak_dokter', $data);
    }
}