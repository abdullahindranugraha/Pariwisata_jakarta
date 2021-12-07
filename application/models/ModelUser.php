<?php
defined('BASEPATH') or exit('No direct script access allowed');
class ModelUser extends CI_Model
{
    public function simpanData($data = null)
    {
        $this->db->insert('user', $data);
    }

    public function cekData($where = null)
    {
        return $this->db->get_where('user', $where);
    }

    public function getUser()
    {
        return $this->db->get('user');
    }

    public function beli_ticket($data = null)
    {
        $this->db->insert('tiket', $data);
    }

    public function tiketWhere($where = null)
    {
        return $this->db->get_where('tiket', $where);
    }

    public function getTiket()
    {
        return $this->db->get('tiket');
    }

    public $total_bayar;

    public function total()
    {
        $jumlah_beli = $this->input->post('jumlah_beli', true);
        $harga = $this->input->post('harga', true);
        $this->total_bayar = $jumlah_beli * $harga;
        return $this->total_bayar;
    }
}
