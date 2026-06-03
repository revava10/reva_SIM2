<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pasien_model extends CI_Model {

    // ambil semua data pasien
    public function get_all()
    {
        return $this->db->get('pasien')->result();
    }

    // ambil data pasien berdasarkan id
    public function get_by_id($no_pasien)
    {
        return $this->db->get_where('pasien', [
            'no_pasien' => $no_pasien
        ])->row();
    }

    // simpan data pasien
    public function insert($data)
    {
        return $this->db->insert('pasien', $data);
    }

    // update data pasien
    public function update($no_pasien, $data)
    {
        $this->db->where('no_pasien', $no_pasien);
        return $this->db->update('pasien', $data);
    }

    // hapus data pasien
    public function delete($no_pasien)
    {
        $this->db->where('no_pasien', $no_pasien);
        return $this->db->delete('pasien');
    }

    // hitung total pasien
    public function count_pasien()
    {
        return $this->db->count_all('pasien');
    }

    // ambil data pasien terbaru
    public function get_pasien_terbaru($limit = 5)
    {
        $this->db->order_by('tgl_daftar', 'DESC');
        return $this->db->get('pasien', $limit)->result();
    }
}