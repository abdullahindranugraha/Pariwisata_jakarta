<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Model_pariwisata extends CI_Model
{
    public function getPariwisata()
    {
        return $this->db->get('pariwisata');
    }

    public function tambah_pariwisata($data = null)
    {
        $this->db->insert('pariwisata', $data);
    }

    public function pariwisataWhere($where)
    {
        return $this->db->get_where('pariwisata', $where);
    }

    public function update_pariwisata($data = null, $where = null)
    {
        $this->db->update('pariwisata', $data, $where);
    }

    public function hapuspariwisata($where = null)
    {
        $this->db->delete('pariwisata', $where);
    }
}
