<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {

    private $table = 'admin';

    public function login($username, $password)
    {
        $this->db->where('username', $username);
        $admin = $this->db->get($this->table)->row();

        if($admin){
            // cek password (pakai md5 / password_hash sesuai database)
            if(password_verify($password, $admin->password)){
                return $admin;
            }
        }

        return false;
    }
    public function count_all()
{
    return $this->db->count_all('tb_pendaftaran');
}

public function count_by_status($status)
{
    return $this->db->where('status', $status)
                    ->count_all_results('tb_pendaftaran');
}

public function get_all_pendaftaran()
{
    return $this->db->get('tb_pendaftaran')->result();
}

    public function get_by_username($username)
    {
        return $this->db->get_where($this->table, ['username' => $username])->row();
    }
}