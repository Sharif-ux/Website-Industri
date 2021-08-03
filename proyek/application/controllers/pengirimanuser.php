<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pengirimanuser extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model("pengiriman_model");
        $this->load->library('form_validation');
    }

public function index()
    {
        $judul['title'] = 'Dashboard admin';
        $session['user'] = $this->db->get_where('karyawan',['email' =>
        $this->session->userdata('email')])->row_array();
        $data["pengiriman"] = $this->pengiriman_model->get_kendaraan();
        $this->load->view('templates/header', $judul);
        $this->load->view('templates/sidebar1',$session);
        $this->load->view('templates/topbar',$session);
        $this->load->view('user/pengirimanuser', $data);
        $this->load->view('templates/footer');
    }
}