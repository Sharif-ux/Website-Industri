<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dashboard extends CI_Controller

{

  public function __construct()
    {
        parent::__construct();
        $this->load->model("dashboard_model");
        $this->load->library('form_validation');
    }

	public function dashboard()
	{
		$data['title'] = 'Dashboard';
		$data['user'] = $this->db->get_where('karyawan',['email' =>
		$this->session->userdata('email')])->row_array();
		$data["dashboard"] = $this->dashboard_model->getAll();
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('admin/dashboard', $data);
		$this->load->view('templates/footer');
	}
         public function edit_dashboard($id)
     {
        
        $judul['title'] = 'edit_dashboard';
        $session['user'] = $this->db->get_where('karyawan',['email' =>
        $this->session->userdata('email')])->row_array();
        $data['pengiriman'] = $this ->dashboard_model->getbyid($id);
        $this->load->view('templates/header', $judul);
        $this->load->view('templates/sidebar', $session);
        $this->load->view('templates/topbar', $session);
        $this->load->view('admin/edit_dashboard',$data);
        $this->load->view('templates/footer');
    }
     
	 public function edit_karyawan()
    {
     
        $product = $this->dashboard_model;
        $validation = $this->form_validation;
        $validation->set_rules($product->rules());
        // var_dump($validation->run());

        // if ($validation->run()) {
            $id_karyawan = $this->input->post('id');
        	$nama = $this->input->post('nama_karyawan');
        	$role_id = $this->input->post('role_id');
        	$email = $this->input->post('email');
        	$shift_kerja = $this->input->post('shift_kerja');
        	$data = [
                'id_karyawan' => $id_karyawan,
        		'nama' => $nama,
        		'role_id' => $role_id,
        		'email' => $email,
        		'shift_kerja' => $shift_kerja
        	];
            $product->update($data, $id_karyawan);
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        // }


        // $data['id_karyawan'] = $product->getById($id_karyawan);
            $data['pengiriman'] = $this ->dashboard_model->getbyid($id_karyawan);
        if (!$data['id_karyawan']) show_404();
        $judul['title'] = 'edit_dashboard';
        $session['user'] = $this->db->get_where('karyawan',['email' =>
        $this->session->userdata('email')])->row_array();
        // $data['pengiriman'] = $this ->dashboard_model->getbyid($id);
        $this->load->view('templates/header', $judul);
        $this->load->view('templates/sidebar', $session);
        $this->load->view('templates/topbar', $session);
        $this->load->view('admin/edit_dashboard',$data);
        $this->load->view('templates/footer');
        
        
        $this->load->view("admin/edit_dashboard", $data);
    } 
      
    //     public function edit_karyawan($id = null)
    // {
    //     if (!isset($id)) redirect('admin/dashboard');

    //     $barang = $this->dashboard_model;
    //     $validation = $this->form_validation;
    //     $validation->set_rules($barang->rules());

    //     if($validation->run()){
    //         $barang->update();
    //         // var_dump($barang);
    //         $this->session->set_flashdata('success', 'Berhasil disimpan');
    //     }

    //         $data["barang"] = $barang->getbyid($id);
    //         if(!$data["barang"]) show_404();

    //         $this->load->view("dashboard/edit_dashboard", $data);
    // }



    public function delete($id)
    {
        if (!isset($id)) show_404();
        
        if ($this->dashboard_model->delete($id)) {
            redirect(site_url('admin/dashboard'));
        }
    }

    

}

