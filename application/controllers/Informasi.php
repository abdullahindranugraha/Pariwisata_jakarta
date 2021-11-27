<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Informasi extends CI_Controller
{
    public function index()
    {
        $data['judul'] = 'Home';
        $this->load->view('templates/header', $data);
        $this->load->view('home', $data);
        $this->load->view('templates/footer');
    }

    public function wisata()
    {
        $data['judul'] = 'Wisata';
        $this->load->view('templates/header', $data);
        $this->load->view('wisata', $data);
        $this->load->view('templates/footer');
    }
}
