<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Informasi extends CI_Controller
{
    public function index()
    {
        $data['judul'] = 'Home';
        $this->load->view('templates/header', $data);
        $this->load->view('informasi/home', $data);
        $this->load->view('templates/footer');
    }

    public function wisata()
    {
        $data['pariwisata'] = $this->Model_pariwisata->getPariwisata()->result_array();
        $data['judul'] = 'Wisata';
        $this->load->view('templates/header', $data);
        $this->load->view('informasi/wisata', $data);
        $this->load->view('templates/footer');
    }

    public function sejarah()
    {
        $data['judul'] = 'Sejarah';
        $this->load->view('templates/header', $data);
        $this->load->view('informasi/sejarah', $data);
        $this->load->view('templates/footer');
    }

    public function kuliner()
    {
        $data['judul'] = 'Kuliner';
        $this->load->view('templates/header', $data);
        $this->load->view('informasi/kuliner', $data);
        $this->load->view('templates/footer');
    }
}
