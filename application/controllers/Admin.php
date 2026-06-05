<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Admin_model');
        $this->load->model('pasien_model');
        $this->load->model('pendaftaran_model');
        $this->load->library('form_validation');

        // cek login admin
        if(!$this->session->userdata('login')){
            redirect('auth');
        }
    }

    // ================= DASHBOARD =================
    public function index()
    {
        $data['total_pendaftar'] = $this->Admin_model->count_all();
        $data['diterima']        = $this->Admin_model->count_by_status('disetujui');
        $data['ditolak']         = $this->Admin_model->count_by_status('ditolak');

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('admin/index', $data);
        $this->load->view('templates/footer');
    }

    // ================= DATA PENDAFTARAN =================
    public function pendaftaran()
    {
        $data['pendaftaran'] = $this->pendaftaran_model->get_all();

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('pendaftaran/index', $data);
        $this->load->view('templates/footer');
    }

    public function setujui($id)
    {
        $this->pendaftaran_model->update_status($id, 'disetujui');
        redirect('admin/pendaftaran');
    }

    public function tolak($id)
    {
        $this->pendaftaran_model->update_status($id, 'ditolak');
        redirect('admin/pendaftaran');
    }

    // ================= DATA PASIEN =================
    public function pasien()
    {
        $data['pasien'] = $this->pasien_model->get_all();

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('pasien/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah_pasien()
{
    $this->load->view('templates/header');
    $this->load->view('templates/sidebar');
    $this->load->view('templates/topbar');
    $this->load->view('pasien/tambah');
    $this->load->view('templates/footer');
}
    public function simpan_pasien()
{
    $data = [
        'nama'           => $this->input->post('nama'),
        'tanggal_lahir'  => $this->input->post('tanggal_lahir'),
        'alamat'         => $this->input->post('alamat'),
        'no_telp'        => $this->input->post('no_telp'),
        'username'       => $this->input->post('username')
    ];

    $this->pasien_model->insert($data);

    $this->session->set_flashdata('success', 'Data pasien berhasil ditambahkan');

    redirect('admin/pasien');
}
    public function edit_pasien($id)
    {
        $data['pasien'] = $this->pasien_model->get_by_id($id);

        if(!$data['pasien']){
            show_404();
        }

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('pasien/edit', $data);
        $this->load->view('templates/footer');
    }

    public function update_pasien($id)
    {
        $data = [
            'nama'           => $this->input->post('nama'),
            'tanggal_lahir'  => $this->input->post('tanggal_lahir'),
            'alamat'         => $this->input->post('alamat'),
            'no_telp'        => $this->input->post('no_telp')
        ];

        $this->pasien_model->update($id, $data);
        redirect('admin/pasien');
    }

    public function hapus_pasien($id)
    {
        $this->pasien_model->delete($id);
        redirect('admin/pasien');
    }

}