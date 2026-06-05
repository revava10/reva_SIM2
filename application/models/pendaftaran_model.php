<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pendaftaran_model extends CI_Model {

    private $table = 'tb_pendaftaran';

    public function get_all()
    {
        $this->db->select('tb_pendaftaran.*');
        $this->db->from('tb_pendaftaran');
        return $this->db->get()->result();
    }
    public function get_by_id($id)
{
    return $this->db->get_where(
        'tb_pendaftaran',
        ['id_pendaftaran' => $id]
    )->row();
}

    public function insert($data)
    {
        return $this->db->insert($this->table, $data);
    }

    public function update($id, $data)
    {
        $this->db->where('id_pendaftaran', $id);
        return $this->db->update($this->table, $data);
    }

    public function delete($id)
    {
        $this->db->where('id_pendaftaran', $id);
        return $this->db->delete($this->table);
    }

    public function update_status($id, $status)
    {
        $this->db->where('id_pendaftaran', $id);
        return $this->db->update($this->table, [
            'status' => $status
        ]);
    }

    public function count_all()
    {
        return $this->db->count_all($this->table);
    }

    public function count_by_status($status)
    {
        return $this->db
            ->where('status', $status)
            ->count_all_results($this->table);
    }
}