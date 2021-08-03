<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin extends CI_Controller

{

	    public function __construct()
    {
        parent::__construct();
        $this->load->model("kendaraan_model");
		$this->load->model("gudang_model");
		$this->load->model("pengiriman_model");
		$this->load->model("dashboard_model");
		$this->load->model("barang_model");
        $this->load->library('form_validation');
    }

	public function index()
	{
		$data['title'] = 'Dashboard admin';
		$data['user'] = $this->db->get_where('karyawan',['email' =>
		$this->session->userdata('email')])->row_array();
		
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('admin/index', $data);
		$this->load->view('templates/footer');
	}


	public function kendaraan()
	{
		$judul['title'] = 'Dashboard admin';
		$session['user'] = $this->db->get_where('karyawan',['email' =>
		$this->session->userdata('email')])->row_array();
		$data["kendaraan"] = $this->kendaraan_model->getAll();

		$this->load->view('templates/header', $judul);
		$this->load->view('templates/sidebar',$session);
		$this->load->view('templates/topbar',$session);
		$this->load->view('admin/kendaraan', $data);
		$this->load->view('templates/footer');
	}

 	
    public function profile()
	{
		$data['title'] = 'Profil karyawan';
		$data['user'] = $this->db->get_where('karyawan',['email' =>
		$this->session->userdata('email')])->row_array();
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('user/index');
		$this->load->view('templates/footer');
	}


	public function barang()
	{
		$judul['title'] = 'Barang admin';
		$session['user'] = $this->db->get_where('karyawan',['email' =>
		$this->session->userdata('email')])->row_array();
		$data["barang"] = $this->barang_model->get_barang();
		$this->load->view('templates/header', $judul);
		$this->load->view('templates/sidebar', $session);
		$this->load->view('templates/topbar', $session);
		$this->load->view('admin/barang', $data);
		$this->load->view('templates/footer');
	}

	public function pengiriman()
	{
		$judul['title'] = 'Pengiriman admin';
		$session['user'] = $this->db->get_where('karyawan',['email' =>
		$this->session->userdata('email')])->row_array();
		$data["pengiriman"] = $this->pengiriman_model->get_kendaraan();
		$this->load->view('templates/header', $judul);
		$this->load->view('templates/sidebar', $session);
		$this->load->view('templates/topbar', $session);
		$this->load->view('admin/pengiriman', $data);
		$this->load->view('templates/footer');
	}
	public function pengirimanuser()
	{
		$judul['title'] = 'Pengiriman  user';
		$session['user'] = $this->db->get_where('karyawan',['email' =>
		$this->session->userdata('email')])->row_array();
		$data["pengiriman"] = $this->pengiriman_model->get_kendaraan();
		$this->load->view('templates/header', $judul);
		$this->load->view('templates/sidebar1', $session);
		$this->load->view('templates/topbar', $session);
		$this->load->view('user/pengirimanuser', $data);
		$this->load->view('templates/footer');
	}

	public function gudang()
	{
		$judul['title'] = 'Gudang admin';
		$session['user'] = $this->db->get_where('karyawan',['email' =>
		$this->session->userdata('email')])->row_array();
		$data["gudang"] = $this->gudang_model->getAll();
		$this->load->view('templates/header', $judul);
		$this->load->view('templates/sidebar', $session);
		$this->load->view('templates/topbar', $session);
		$this->load->view('admin/gudang', $data);
		$this->load->view('templates/footer');
	}
	public function dashboard()
	{
		$judul['title'] = 'Dashboard';
		$session['user'] = $this->db->get_where('karyawan',['email' =>
		$this->session->userdata('email')])->row_array();
		$data["dashboard"] = $this->dashboard_model->getAll();
		$this->load->view('templates/header', $judul);
		$this->load->view('templates/sidebar', $session);
		$this->load->view('templates/topbar', $session);
		$this->load->view('admin/dashboard', $data);
		$this->load->view('templates/footer');
	}

	public function input_kendaraan()
	{
		$judul['title'] = 'input_kendaraaan';
		$session['user'] = $this->db->get_where('karyawan',['email' =>
		$this->session->userdata('email')])->row_array();
		$this->load->view('templates/header', $judul);
		$this->load->view('templates/sidebar', $session);
		$this->load->view('templates/topbar', $session);
		$this->load->view('admin/input_kendaraan');
		$this->load->view('templates/footer');
	}

	public function edit_kendaraan()
	{
		$judul['title'] = 'edit_kendaraaan';
		$session['user'] = $this->db->get_where('karyawan',['email' =>
		$this->session->userdata('email')])->row_array();
		$this->load->view('templates/header', $judul);
		$this->load->view('templates/sidebar', $session);
		$this->load->view('templates/topbar', $session);
		$this->load->view('admin/edit_kendaraan');
		$this->load->view('templates/footer');
	}

	public function edit_barang()
	{
		$judul['title'] = 'edit_barang';
		$session['user'] = $this->db->get_where('karyawan',['email' =>
		$this->session->userdata('email')])->row_array();
		$data['barang'] = $this ->barang_model->getbyid($id);
		$this->load->view('templates/header', $judul);
		$this->load->view('templates/sidebar', $session);
		$this->load->view('templates/topbar', $session);
		$this->load->view('admin/Edit_barang', $data);
		$this->load->view('templates/footer');
	}

	public function input_gudang()
	{
		$judul['title'] = 'input_gudang';
		$session['user'] = $this->db->get_where('karyawan',['email' =>
		$this->session->userdata('email')])->row_array();
		$this->load->view('templates/header', $judul);
		$this->load->view('templates/sidebar', $session);
		$this->load->view('templates/topbar', $session);
		$this->load->view('admin/input_gudang');
		$this->load->view('templates/footer');
	}
	public function input_pengiriman()
	{
	// panggil function yang buat 
		$data['kendaraan'] = $this -> pengiriman_model -> get_all_kendaraan();
		$data['supir'] = $this -> pengiriman_model -> get_all_supir();
		$data['barang'] = $this -> pengiriman_model -> get_all_barang();
		$judul['title'] = 'input_pengiriman';
		$session['user'] = $this->db->get_where('karyawan',['email' =>
		$this->session->userdata('email')])->row_array();
		$this->load->view('templates/header', $judul);
		$this->load->view('templates/sidebar', $session);
		$this->load->view('templates/topbar', $session);
		$this->load->view('admin/input_pengiriman',$data);
		$this->load->view('templates/footer');
	}
		public function input_barang()
	{
	// panggil function yang buat 
		$data['gudang'] = $this->barang_model->get_all_barang();
		$judul['title'] = 'input_pengiriman';
		$session['user'] = $this->db->get_where('karyawan',['email' =>
		$this->session->userdata('email')])->row_array();
		$this->load->view('templates/header', $judul);
		$this->load->view('templates/sidebar', $session);
		$this->load->view('templates/topbar', $session);
		$this->load->view('admin/input_barang',$data);
		$this->load->view('templates/footer');
	}
	 public function edit_pengiriman($id)
	 {
	 	$judul['title'] = 'edit_pengiriman';
	 	$session['user'] = $this->db->get_where('karyawan',['email' =>
	 	$this->session->userdata('email')])->row_array();
	 	$data['pengiriman'] = $this ->pengiriman_model->getbyid($id);
	 	$this->load->view('templates/header', $judul); 
	 	$this->load->view('templates/sidebar', $session);
		$this->load->view('templates/topbar', $session);
	 	$this->load->view('admin/edit_pengiriman',$data);
	 	$this->load->view('templates/footer');
	 }


	public function edit_gudang($id)
	{
		$judul['title'] = 'edit_gudang';
		$session['user'] = $this->db->get_where('karyawan',['email' =>
		$this->session->userdata('email')])->row_array();
		$data['gudang'] = $this -> gudang_model ->getgudangbyid($id);
		$this->load->view('templates/header', $judul);
		$this->load->view('templates/sidebar', $session);
		$this->load->view('templates/topbar', $session);
		$this->load->view('admin/edit_gudang',$data);
		$this->load->view('templates/footer');
	}

	 public function edit_data($id = null)
    {
        if (!isset($id)) redirect('admin/gudang');
       
        $product = $this->dashboard_model;
         $validation = $this->form_validation;
     }


	public function gudang_add(){
		$data = $this -> input -> post("nama_gudang");
		$this ->gudang_model -> add($data);
		redirect ('admin/gudang');
	} 
	public function kendaraan_add(){
		$data = $this -> input -> post("nama_kendaraan");
		$this ->kendaraan_model -> add($data);
		redirect ('admin/kendaraan');
	} 
	public function add_pengiriman(){
		$data = array(
			"id_kendaraan" => $this -> input -> post ('id_kendaraan'),
			"id_supir" => $this -> input -> post ('supir'),
			"id_barang" => $this -> input -> post ('barang'),
			"alamat" => $this -> input -> post ('alamat')
		);
		$this -> pengiriman_model -> add_pengiriman($data);
		redirect('admin/pengiriman');
	}

	public function add_barang(){
		$data = array(
			"nama_barang" => $this -> input -> post ('nama_barang'),
			"id_gudang" => $this -> input -> post ('id_gudang'),
		);
		$this -> barang_model -> add_barang($data);
		redirect('admin/barang');
	} 

}



