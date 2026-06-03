<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('auth_model');
        $this->load->library('session');
        $this->load->helper('url'); // 🔥 WAJIB biar redirect aman
    }

    public function index()
    {
        // kalau sudah login, langsung lempar
        if ($this->session->userdata('login') == TRUE) {
            redirect('admin');
        }

        $this->load->view('auth/login');
    }

    public function login()
{
    $username = $this->input->post('username', TRUE);
    $password = $this->input->post('password', TRUE);

    if (empty($username) || empty($password)) {
        $this->session->set_flashdata('error', 'Username & Password wajib diisi');
        redirect('auth');
    }

    $user = $this->auth_model->cek_login($username, $password);

    if ($user) {

        $data = [
            'id_user'  => $user->id,
            'username' => $user->username,
            'role'     => $user->role,
            'login'    => TRUE
        ];

        $this->session->set_userdata($data);

        // 🔥 redirect setelah login
        redirect('admin');

    } else {
        $this->session->set_flashdata('error', 'Username atau password salah');
        redirect('auth');
    }
}
    public function logout()
    {
        $this->session->sess_destroy();
        redirect('auth');
    }
}