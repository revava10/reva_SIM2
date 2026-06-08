<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('auth_model');
        $this->load->library('session');
        $this->load->helper('url');
    }

    public function index()
    {
        if ($this->session->userdata('login')) {

            if ($this->session->userdata('role') == 'admin') {
                redirect('admin');
            }

            if ($this->session->userdata('role') == 'pasien') {
                redirect('dashboard_pasien');
            }
        }

        $this->load->view('auth/login');
    }

    public function login()
    {
        $username = $this->input->post('username', TRUE);
        $password = $this->input->post('password', TRUE);

        if (empty($username) || empty($password)) {
            $this->session->set_flashdata(
                'error',
                'Username dan Password wajib diisi'
            );
            redirect('auth');
        }

        $user = $this->auth_model->cek_login($username, $password);

        if (!$user) {
            $this->session->set_flashdata(
                'error',
                'Username atau Password salah'
            );
            redirect('auth');
        }

        if ($user->role == 'admin') {

            $this->session->set_userdata([
                'id_user'  => $user->id,
                'username' => $user->username,
                'role'     => 'admin',
                'login'    => TRUE
            ]);

            redirect('admin');

        } elseif ($user->role == 'pasien') {

            $this->session->set_userdata([
                'id_user'  => $user->id,
                'username' => $user->username,
                'role'     => 'pasien',
                'login'    => TRUE
            ]);

            redirect('dashboard_pasien');
        }

        redirect('auth');
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('auth');
    }
}