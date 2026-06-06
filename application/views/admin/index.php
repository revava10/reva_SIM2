<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pasien extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        // cek login
        if (!$this->session->userdata('login')) {
            redirect('login');
        }

        $this->load->model('Pasien_model');
    }

    // ✅ HALAMAN UTAMA (dashboard pasien)
    public function index()
    {
        $data['pasien'] = $this->Pasien_model->get_all();
        $data['total_pasien'] = $this->Pasien_model->count_all();

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('pasien/index', $data);
        $this->load->view('templates/footer');
    }

    // ✅ TAMBAH PASIEN
    public function tambah()
    {
        if ($this->input->post()) {

            $data = [
                'no_rm' => $this->input->post('no_rm'),
                'nama_pasien' => $this->input->post('nama_pasien'),
                'jenis_kelamin' => $this->input->post('jenis_kelamin'),
                'alamat' => $this->input->post('alamat'),
                'no_hp' => $this->input->post('no_hp')
            ];

            $this->Pasien_model->insert($data);
            $this->session->set_flashdata('success', 'Data berhasil ditambahkan');
            redirect('pasien');
        }

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('pasien/tambah');
        $this->load->view('templates/footer');
    }

    // ✅ EDIT PASIEN
    public function edit($id)
    {
        $data['pasien'] = $this->Pasien_model->get_by_id($id);

        if ($this->input->post()) {

            $update = [
                'no_rm' => $this->input->post('no_rm'),
                'nama_pasien' => $this->input->post('nama_pasien'),
                'jenis_kelamin' => $this->input->post('jenis_kelamin'),
                'alamat' => $this->input->post('alamat'),
                'no_hp' => $this->input->post('no_hp')
            ];

            $this->Pasien_model->update($id, $update);
            $this->session->set_flashdata('success', 'Data berhasil diubah');
            redirect('pasien');
        }

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('pasien/edit', $data);
        $this->load->view('templates/footer');
    }

    // ✅ HAPUS PASIEN
    public function hapus($id)
    {
        $this->Pasien_model->delete($id);
        $this->session->set_flashdata('success', 'Data berhasil dihapus');
        redirect('pasien');
    }
}