<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['url'] = $this->uri->segment(2);
        $data['title'] = 'Menu';

        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar_admin', $data);
        $this->load->view('templates/sidebar_admin', $data);
        $this->load->view('admin/index');
        $this->load->view('templates/footer');
    }

    public function list_menu()
    {
        $data['url'] = $this->uri->segment(2);
        $data['title'] = 'Daftar Menu';
        $data['menu'] = $this->db->get('menu')->result_array();
        $data['kategori'] = $this->db->get('kategori')->result_array();
        $this->form_validation->set_rules('id_kategori', 'Id_Kategori', 'required|trim');
        $this->form_validation->set_rules('nama_menu', 'Nama Menu', 'required|trim');
        $this->form_validation->set_rules('harga', 'Harga', 'required|trim');
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar_admin', $data);
            $this->load->view('templates/topbar_admin', $data);
            $this->load->view('admin/list_menu', $data);
            $this->load->view('templates/footer');
        } else {
            $upload_image = $_FILES['image']['name'];

            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png|jpeg';
                $config['max_size']     = '2048';
                $config['max_width'] = '3000';
                $config['max_height'] = '3000';
                $config['upload_path'] = './assets/img/menu/';
                $this->load->library('upload', $config);

                if ($this->upload->do_upload('image')) {
                    $new_image = $this->upload->data('file_name');
                } else {
                    echo $this->upload->display_errors();
                }
            }
            $data = [
                'id_kategori' => htmlspecialchars($this->input->post('id_kategori', true)),
                'nama_menu' => htmlspecialchars($this->input->post('nama_menu', true)),
                'harga' => htmlspecialchars($this->input->post('harga', true)),
                'image_menu' => $new_image,
                'desk' => htmlspecialchars($this->input->post('deskripsi', true)),
            ];

            $this->db->insert('menu', $data);


            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Menu berhasil ditambahkan !</div>');
            redirect('admin/list_menu');
        }
    }

    public function list_kategori()
    {
        $data['url'] = $this->uri->segment(2);
        $data['title'] = 'Daftar Kategori';
        $data['kategori'] = $this->db->get('kategori')->result_array();
        $this->form_validation->set_rules('nama_kategori', 'Nama Kategori', 'required|trim');
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar_admin', $data);
            $this->load->view('templates/topbar_admin', $data);
            $this->load->view('admin/list_kategori', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'nama_kategori' => htmlspecialchars($this->input->post('nama_kategori', true)),
            ];

            $this->db->insert('kategori', $data);


            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Kategori berhasil ditambahkan !</div>');
            redirect('admin/list_kategori');
        }
    }
}
