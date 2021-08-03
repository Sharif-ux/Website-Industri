<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user extends CI_Controller

{
    public function __construct()
    {
        parent::__construct();
		$this->load->model("pengiriman_model");
		$this->load->model("kendaraan_model");
		$this->load->model("barang_model");
        $this->load->library('form_validation');
    }


	public function index()
	{
		$data['title'] = 'Profil karyawan';
		$data['user'] = $this->db->get_where('karyawan',['email' =>
		$this->session->userdata('email')])->row_array();
		
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar1', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('user/index', $data);
		$this->load->view('templates/footer');
	}

	public function baranguser()
	{
		$judul['title'] = 'Barang user';
		$session['user'] = $this->db->get_where('karyawan',['email' =>
		$this->session->userdata('email')])->row_array();
		$data["barang"] = $this->barang_model->getAll();
		$this->load->view('templates/header', $judul);
		$this->load->view('templates/sidebar1', $session);
		$this->load->view('templates/topbar', $session);
		$this->load->view('user/baranguser', $data);
		$this->load->view('templates/footer');
	}
	public function pengirimanuser()
	{
		$judul['title'] = 'Barang user';
		$session['user'] = $this->db->get_where('karyawan',['email' =>
		$this->session->userdata('email')])->row_array();
		$data["pengiriman"] = $this->pengiriman_model->get_kendaraan();
		$this->load->view('templates/header', $judul);
		$this->load->view('templates/sidebar1', $session);
		$this->load->view('templates/topbar', $session);
		$this->load->view('user/pengirimanuser', $data);
		$this->load->view('templates/footer');
	}
	 public function profileuser()
	{
		$data['title'] = 'Profil karyawan';
		$data['user'] = $this->db->get_where('karyawan',['email' =>
		$this->session->userdata('email')])->row_array();
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar1', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('user/index');
		$this->load->view('templates/footer');
	}
	function map(){
		$this->load->library('googlemaps');
        $config=array();
        $config['center']="53.476863, -2.244414";
        $config['zoom']=17;
        $config['map_height']="400px";
        $this->googlemaps->initialize($config);
        $marker=array();
        $marker['position']="37.4419, -122.1419";
        $this->googlemaps->add_marker($marker);
        $data['map']=$this->googlemaps->create_map();
        $judul['title'] = 'Profil karyawan';
		$session['user'] = $this->db->get_where('karyawan',['email' =>
		$this->session->userdata('email')])->row_array();
		$this->load->view('templates/header', $judul);
		$this->load->view('templates/sidebar1', $session);
		$this->load->view('templates/topbar', $session);
		$this->load->view('user/v_map', $data);
		$this->load->view('templates/footer');
	}
}