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

    public function tiket()
    {
        cek_login();
        $data['judul'] = 'Form Pembelian Tiket';
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['pariwisata'] = $this->Model_pariwisata->pariwisataWhere(['id_pariwisata' => $this->uri->segment(3)])->result_array();
        $this->form_validation->set_rules('tanggal', 'tanggal', 'required', [
            'required' => 'tanggal harus diisi',
        ]);
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('informasi/beli_tiket', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'nama_pariwisata' => $this->input->post('nama_pariwisata', true),
                'harga' => $this->input->post('harga', true),
                'nama' => $this->input->post('nama', true),
                'id_pengguna' => $this->input->post('id_pengguna', true),
                'email' => $this->input->post('email', true),
                'tanggal' => $this->input->post('tanggal', true),
                'jumlah_beli' => $this->input->post('jumlah_beli', true),
                'total_bayar' => $this->ModelUser->total()
            ];

            $this->ModelUser->beli_ticket($data);
            redirect('informasi/e_tiket');
        }
    }

    public function e_tiket()
    {
        $data['judul'] = 'E-Ticket';
        $data['tiket'] = $this->ModelUser->tiketWhere(['email' => $this->session->userdata('email')])->result_array();
        $this->load->view('templates/header', $data);
        $this->load->view('informasi/e_ticket', $data);
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
