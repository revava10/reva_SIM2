<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pasien_model extends CI_Model {

    private $table = 'tb_pasien';

    public function get_all()
    {
        return $this->db->get($this->table)->result();
    }

    public function get_by_id($id_pasien)
    {
        return $this->db->get_where($this->table, [
            'id_pasien' => $id_pasien
        ])->row();
    }

    public function insert($data)
    {
        return $this->db->insert($this->table, $data);
    }

    public function update($id_pasien, $data)
    {
        $this->db->where('id_pasien', $id_pasien);
        return $this->db->update($this->table, $data);
    }

  public function delete($id_pasien)
{
    $this->db->where('id_pasien', $id_pasien);
    return $this->db->delete($this->table);
}

public function count_all()
{
    return $this->db->count_all($this->table);
}
}
