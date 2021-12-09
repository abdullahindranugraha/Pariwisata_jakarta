<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        cek_login();
        cek_user();
    }

    public function index()
    {
        $data['pariwisata'] = $this->Model_pariwisata->getPariwisata()->result_array();
        $data['anggota'] = $this->ModelUser->getUser()->result_array();
        $data['tiket'] = $this->ModelUser->getTiket()->result_array();
        $data['judul'] = 'Admin';
        $this->form_validation->set_rules('nama_pariwisata', 'Nama Pariwisata', 'required|min_length[3]', [
            'required' => 'Nama Pariwisata harus diisi',
            'min_length' => 'Nama Pariwisata terlalu pendek'
        ]);
        $this->form_validation->set_rules('alamat', 'alamat', 'required', [
            'required' => 'alamat harus diisi',
        ]);
        $this->form_validation->set_rules('harga', 'harga', 'required', [
            'required' => 'harga harus diisi'
        ]);
        $this->form_validation->set_rules('kategori', 'kategori', 'required|min_length[3]', [
            'required' => 'kategori harus diisi',
            'min_length' => 'kategori terlalu pendek'
        ]);
        $this->form_validation->set_rules('deskripsi', 'deskripsi', 'required|min_length[3]', [
            'required' => 'deskripsi harus diisi',
            'min_length' => 'deskripsi terlalu pendek'
        ]);
        //konfigurasi sebelum gambar diupload
        $config['upload_path'] = './assets/img/upload/';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['max_size'] = '3000';
        $config['max_width'] = '2000';
        $config['max_height'] = '2000';
        $config['file_name'] = 'img' . time();
        $this->load->library('upload', $config);
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/admin_header', $data);
            $this->load->view('admin/index', $data);
            $this->load->view('templates/admin_footer');
        } else {
            if ($this->upload->do_upload('gambar')) {
                $gambar = $this->upload->data();
                $image = $gambar['file_name'];
            } else {
                $image = '';
            }
            $data = [
                'nama_pariwisata' => $this->input->post('nama_pariwisata', true),
                'alamat' => $this->input->post('alamat', true),
                'harga' => $this->input->post('harga', true),
                'kategori' => $this->input->post('kategori', true),
                'Deskripsi' => $this->input->post('deskripsi', true),
                'gambar' => $image
            ];
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">Data Pariwisata Berhasil Ditambahkan<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>');
            $this->Model_pariwisata->tambah_pariwisata($data);
            redirect('admin');
        }
    }

    public function editpariwisata()
    {
        $data['judul'] = 'Ubah Data Pariwisata';
        $data['pariwisata'] = $this->Model_pariwisata->pariwisataWhere(['id_pariwisata' => $this->uri->segment(3)])->result_array();
        $this->form_validation->set_rules('nama_pariwisata', 'Nama Pariwisata', 'required|min_length[3]', [
            'required' => 'Nama Pariwisata harus diisi',
            'min_length' => 'Nama Pariwisata terlalu pendek'
        ]);
        $this->form_validation->set_rules('alamat', 'alamat', 'required', [
            'required' => 'alamat harus diisi',
        ]);
        $this->form_validation->set_rules('harga', 'harga', 'required', [
            'required' => 'harga harus diisi'
        ]);
        $this->form_validation->set_rules('kategori', 'kategori', 'required|min_length[3]', [
            'required' => 'kategori harus diisi',
            'min_length' => 'kategori terlalu pendek'
        ]);
        $this->form_validation->set_rules('deskripsi', 'deskripsi', 'required|min_length[3]', [
            'required' => 'deskripsi harus diisi',
            'min_length' => 'deskripsi terlalu pendek'
        ]);
        //konfigurasi sebelum gambar diupload
        $config['upload_path'] = './assets/img/upload/';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['max_size'] = '3000';
        $config['max_width'] = '1024';
        $config['max_height'] = '1000';
        $config['file_name'] = 'img' . time();
        //memuat atau memanggil library upload
        $this->load->library('upload', $config);
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/admin_header', $data);
            $this->load->view('admin/ubah_pariwisata', $data);
            $this->load->view('templates/admin_footer');
        } else {
            if ($this->upload->do_upload('gambar')) {
                $gambar = $this->upload->data();
                unlink('assets/img/upload/' . $this->input->post('old_pict', TRUE));
                $image = $gambar['file_name'];
            } else {
                $image = $this->input->post('old_pict', TRUE);
            }
            $data = [
                'nama_pariwisata' => $this->input->post('nama_pariwisata', true),
                'alamat' => $this->input->post('alamat', true),
                'harga' => $this->input->post('harga', true),
                'kategori' => $this->input->post('kategori', true),
                'deskripsi' => $this->input->post('deskripsi', true),
                'gambar' => $image
            ];

            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">Data Pariwisata Berhasil Diubah !!<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>');
            $this->Model_pariwisata->update_pariwisata($data, ['id_pariwisata' => $this->input->post('id_pariwisata')]);
            redirect('admin');
        }
    }

    public function hapus_pariwisata()
    {
        $where = ['id_pariwisata' => $this->uri->segment(3)];
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">Data Pariwisata Berhasil Di Hapus !!<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>');
        $this->Model_pariwisata->hapuspariwisata($where);
        redirect('admin');
    }
}
