<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class barang extends CI_Controller

{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("barang_model");
        $this->load->library('form_validation');
    }
	public function barang()
	{
		$data['title'] = 'Barang';
		$data['user'] = $this->db->get_where('karyawan',['email' =>
		$this->session->userdata('email')])->row_array();
		$data["dashboard"] = $this->barang_model->getbyid($id);
		$this->load->view('templates/header', $data); 
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('admin/barang', $data);
		$this->load->view('templates/footer');
	}
	 public function edit_data()
    {
       
        if (!isset($id)) redirect('admin/barang');
       
        $product = $this->kendaraan_model;
         $validation = $this->form_validation;
        // $validation->set_rules($product->rules());

        // if ($validation->run()) {
        //  $nama = $this->input->post('nama_kendaraan');
        //  $id_kendaraan = $this->input->post('id');
        //  $data = [
        //      'nama_kendaraan' => $nama
        //  ];
        //     $product->update($data, $id_kendaraan);
        //     $this->session->set_flashdata('success', 'Berhasil disimpan');
        // }

        $data['nama'] = $product->getById($id);
        if (!$data['nama']) show_404();
        
        $this->load->view("admin/edit_barang", $data);
    }
        public function edit_barang()
    {
       
        $product = $this->barang_model;
        $validation = $this->form_validation;
        $validation->set_rules($product->rules());
        // var_dump($validation->run());
        // if ($validation->run()) {
            $id = $this->input->post('id');
            $nama_barang = $this->input->post('nama_barang');
            $id_gudang = $this->input->post('id_gudang');
            $data = [
                'id' => $id,
                'nama_barang' => $nama_barang,
                'id_gudang' => $id_gudang,
            ];
     
            $product->update($id, $data);
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        // }

         $data['nama'] = $this ->barang_model->getbyid($id);
        if (!$data['id']) show_404();
        $judul['title'] = 'edit_barang';
        $session['user'] = $this->db->get_where('karyawan',['email' =>
        $this->session->userdata('email')])->row_array();
        $data['barang'] = $this ->barang_model->getbyid($id);
        $this->load->view('templates/header', $judul);
        $this->load->view('templates/sidebar', $session);
        $this->load->view('templates/topbar', $session);
        $this->load->view('admin/Edit_barang', $data);
        $this->load->view('templates/footer');
        $this->load->view("admin/edit_barang", $data);
    }
        public function edit_barang1($id)
    {
        $judul['title'] = 'edit_barang';
        $session['user'] = $this->db->get_where('karyawan',['email' =>
        $this->session->userdata('email')])->row_array();
        $data['barang'] = $this ->barang_model->getById($id);
        $this->load->view('templates/header', $judul);
        $this->load->view('templates/sidebar', $session);
        $this->load->view('templates/topbar', $session);
        $this->load->view('admin/Edit_barang', $data);
        $this->load->view('templates/footer');
    }

    // public function edit_barang($id = null)
    // {
    //     if (!isset($id)) redirect('admin/barang');

    //     $barang = $this->barang_model;
    //     $validation = $this->form_validation;
    //     $validation->set_rules($barang->rules());

    //     if($validation->run()){
    //         $barang->update();
    //         $this->session->set_flashdata('success', 'Berhasil disimpan');
    //     }

    //         $data["barang"] = $barang->getbyid1($id);
    //         if(!$data["barang"]) show_404();

    //         $this->load->view("barang/edit_barang1", $data);
    // }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->barang_model->delete($id)) {
            redirect(site_url('admin/barang'));
        }
    }

            public function input_barang()
    {

} 
}