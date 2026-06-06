<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dokter_model extends CI_Model {

    private $table = 'tb_dokter';

    // ambil semua data dokter
    public function get_all()
    {
        return $this->db->get($this->table)->result();
    }

    // ambil data dokter berdasarkan id
    public function get_by_id($id_dokter)
    {
        return $this->db->get_where($this->table, [
            'id_dokter' => $id_dokter
        ])->row();
    }

    // simpan data dokter
    public function insert($data)
    {
        return $this->db->insert($this->table, $data);
    }

    // update data dokter
    public function update($id_dokter, $data)
    {
        $this->db->where('id_dokter', $id_dokter);
        return $this->db->update($this->table, $data);
    }

    // hapus data dokter
    public function delete($id_dokter)
    {
        $this->db->where('id_dokter', $id_dokter);
        return $this->db->delete($this->table);
    }

    // hitung total dokter
    public function count_dokter()
    {
        return $this->db->count_all($this->table);
    }

    // ambil data dokter terbaru
    public function get_dokter_terbaru($limit = 5)
    {
        $this->db->order_by('id_dokter', 'DESC');
        return $this->db->get($this->table, $limit)->result();
    }
}