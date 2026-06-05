<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pasien_model extends CI_Model {

    private $table = 'tb_pasien';

    // ambil semua data pasien
    public function get_all()
    {
        return $this->db->get($this->table)->result();
    }

    // ambil data pasien berdasarkan id
    public function get_by_id($id_pasien)
    {
        return $this->db->get_where($this->table, [
            'id_pasien' => $id_pasien
        ])->row();
    }

    // simpan data pasien
    public function insert($data)
    {
        return $this->db->insert($this->table, $data);
    }

    // update data pasien
    public function update($id_pasien, $data)
    {
        $this->db->where('id_pasien', $id_pasien);
        return $this->db->update($this->table, $data);
    }

    // hapus data pasien
    public function delete($id_pasien)
    {
        $this->db->where('id_pasien', $id_pasien);
        return $this->db->delete($this->table);
    }

    // hitung total pasien
    public function count_pasien()
    {
        return $this->db->count_all($this->table);
    }

    // ambil data pasien terbaru
    public function get_pasien_terbaru($limit = 5)
    {
        $this->db->order_by('id_pasien', 'DESC');
        return $this->db->get($this->table, $limit)->result();
    }
}