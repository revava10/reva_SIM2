<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Frontend extends CI_Controller {

    public function index()
    {
        $this->load->view('frontend/home');
    }

    public function daftar()
    {
        $data['dokter'] = $this->db->get('tb_dokter')->result();
        $this->load->view('frontend/daftar', $data);
    }

    public function cek_status()
    {
        $this->load->view('frontend/cek_status');
    }

    public function simpan()
    {
        $data_pasien = array(
    'nama'           => $this->input->post('nama'),
    'tanggal_lahir'  => $this->input->post('tanggal_lahir'),
    'alamat'         => $this->input->post('alamat'),
    'no_telp'        => $this->input->post('no_telp')
);

$this->db->insert('tb_pasien', $data_pasien);

$id_pasien = $this->db->insert_id();
        // Nomor pendaftaran
        $nomor_pendaftaran = 'REG' . date('YmdHis');

    $data_pendaftaran = [
    'nomor_pendaftaran' => $nomor_pendaftaran,
    'id_pasien'         => $id_pasien,
    'nama_pasien'       => $this->input->post('nama'),
    'id_dokter'         => $this->input->post('id_dokter'),
    'keluhan'           => $this->input->post('keluhan'),
    'tanggal_kunjungan' => $this->input->post('tanggal_kunjungan'),
    'jam_kunjungan'     => $this->input->post('jam_kunjungan'),
    'tanggal_daftar'    => date('Y-m-d H:i:s'),
    'status'            => 'Proses'
];

        $this->db->insert('tb_pendaftaran', $data_pendaftaran);

        $this->session->set_flashdata(
            'nomor_pendaftaran',
            $nomor_pendaftaran
        );

        redirect('frontend/berhasil');
    }

    public function berhasil()
    {
        $this->load->view('frontend/berhasil');
    }

   public function proses_cek_status()
{
    $nomor = $this->input->post('nomor_pendaftaran');

    $this->db->select('tb_pendaftaran.*, tb_dokter.nama_dokter');
    $this->db->from('tb_pendaftaran');
    $this->db->join(
        'tb_pasien',
        'tb_pasien.id_pasien = tb_pendaftaran.id_pasien'
    );
    $this->db->join(
        'tb_dokter',
        'tb_dokter.id_dokter = tb_pendaftaran.id_dokter'
    );

    $this->db->where(
        'tb_pendaftaran.nomor_pendaftaran',
        $nomor
    );

    $data['hasil'] = $this->db->get()->row();

    $this->load->view('frontend/cek_status', $data);
}
}