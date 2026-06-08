<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        if (!$this->session->userdata('login')) {
            redirect('auth');
        }
    }

    public function index()
    {
        redirect('laporan/pendaftaran');
    }

    // ================= LAPORAN PENDAFTARAN =================
    public function pendaftaran()
    {
        $bulan = $this->input->get('bulan');

        $this->db->select('tb_pendaftaran.*, tb_pasien.nama, tb_dokter.nama_dokter');
        $this->db->from('tb_pendaftaran');
        $this->db->join('tb_pasien', 'tb_pasien.id_pasien = tb_pendaftaran.id_pasien');
        $this->db->join('tb_dokter', 'tb_dokter.id_dokter = tb_pendaftaran.id_dokter');

        if (!empty($bulan)) {
            $this->db->where("DATE_FORMAT(tanggal_daftar,'%Y-%m') =", $bulan);
        }

        $data['data'] = $this->db->get()->result();
        $data['bulan'] = $bulan;

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('laporan/pendaftaran', $data);
        $this->load->view('templates/footer');
    }

    // ================= LAPORAN PASIEN =================
    public function pasien()
    {
        $data['pasien'] = $this->db->get('tb_pasien')->result();

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('laporan/pasien', $data);
        $this->load->view('templates/footer');
    }

    // ================= LAPORAN DOKTER =================
    public function dokter()
    {
        $data['dokter'] = $this->db->get('tb_dokter')->result();

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('laporan/dokter', $data);
        $this->load->view('templates/footer');
    }

    // ================= CETAK PENDAFTARAN =================
    public function cetak_pendaftaran()
    {
        $this->db->select('tb_pendaftaran.*, tb_pasien.nama, tb_dokter.nama_dokter');
        $this->db->from('tb_pendaftaran');
        $this->db->join('tb_pasien', 'tb_pasien.id_pasien = tb_pendaftaran.id_pasien');
        $this->db->join('tb_dokter', 'tb_dokter.id_dokter = tb_pendaftaran.id_dokter');

        $data['data'] = $this->db->get()->result();

        $this->load->view('laporan/cetak_pendaftaran', $data);
    }

    // ================= CETAK PASIEN =================
    public function cetak_pasien()
    {
        $data['pasien'] = $this->db->get('tb_pasien')->result();

        $this->load->view('laporan/cetak_pasien', $data);
    }

    // ================= CETAK DOKTER =================
    public function cetak_dokter()
    {
        $data['dokter'] = $this->db->get('tb_dokter')->result();

        $this->load->view('laporan/cetak_dokter', $data);
    }
}