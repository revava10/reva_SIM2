<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_model extends CI_Model {

    // cek login user (admin / pasien)
    public function cek_login($username, $password)
    {
        $this->db->where('username', $username);
        $this->db->where('password', md5($password));

        // ambil data user (termasuk role)
        $query = $this->db->get('users');

        return $query->row(); // mengembalikan 1 data user
    }

    // update terakhir login
   
}