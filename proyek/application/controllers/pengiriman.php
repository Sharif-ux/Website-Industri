<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pengiriman extends CI_Controller{

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
        $this->load->view('templates/sidebar',$session);
        $this->load->view('templates/topbar',$session);
        $this->load->view('admin/pengiriman', $data);
        $this->load->view('templates/footer');
    }


    public function edit()
    {
       $product = $this->pengiriman_model;
        $validation = $this->form_validation;
        $validation->set_rules($product->rules());
        // var_dump($validation->run());

        // if ($validation->run()) {
          $id = $this->input->post('id');
          $id_kendaraan = $this->input->post('id_kendaraan');
          $id_supir= $this->input->post('id_supir');
          $id_barang= $this->input->post('id_barang');
          $Alamat = $this->input->post('alamat');
          $data = [
           'id' => $id,
            'id_kendaraan' => $id_kendaraan,
            'id_supir' => $id_supir,
            'id_barang' => $id_barang,
            'alamat' => $Alamat
          ];
            $product->update($data,$id);
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        // }


        // $data['id_karyawan'] = $product->getById($id_karyawan);
            $data['pengiriman'] = $this ->pengiriman_model->getbyid($id);
        if (!$data['id']) show_404();
         $judul['title'] = 'Dashboard admin';
        $session['user'] = $this->db->get_where('karyawan',['email' =>
        $this->session->userdata('email')])->row_array();
        $data["pengiriman"] = $this->pengiriman_model->getById($id);
        $this->load->view('templates/header', $judul);
        $this->load->view('templates/sidebar',$session);
        $this->load->view('templates/topbar',$session);
        $this->load->view('admin/edit_pengiriman', $data);
        $this->load->view('templates/footer');
        $this->load->view("admin/edit_pengiriman", $data);
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->pengiriman_model->delete($id)) {
            redirect(site_url('admin/pengiriman'));
        }
}
// function delete($id)
// {
//     $this->db->where('kendraan.id=pengiriman.id_kendaraan');
//     $this->db->where('karyawan.id_karyawan=pengiriman.id_supir');
//     $this->db->where('barang.id=pengiriman.id_barang');
//     $this->db->where('pengiriman.id',$id);
//     $this->db->delete(array('kendaraan','karyawan','barang', 'pengiriman'));
// }

}