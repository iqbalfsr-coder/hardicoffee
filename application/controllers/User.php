<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function index()
    {
        $data['url'] = $this->uri->segment(1);
        $data['title'] = 'Home';
        $data['menu'] = $this->db->get('menu')->result_array();
        $data['kat1'] = $this->db->get_where('kategori', ['id_kategori' => 1])->result_array();
        $data['menu1'] = $this->db->get_where('menu', ['id_kategori' => 1])->result_array();
        $data['kat2'] = $this->db->get_where('kategori', ['id_kategori' => 2])->result_array();
        $data['menu2'] = $this->db->get_where('menu', ['id_kategori' => 2])->result_array();
        $data['kat3'] = $this->db->get_where('kategori', ['id_kategori' => 3])->result_array();
        $data['menu3'] = $this->db->get_where('menu', ['id_kategori' => 3])->result_array();
        $this->load->view('user/index', $data);
    }
}
