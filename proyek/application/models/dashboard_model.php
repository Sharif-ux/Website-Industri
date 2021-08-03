<?php defined('BASEPATH') OR exit('No direct script access allowed');

class dashboard_model extends CI_Model
{
    private $_karyawan = "karyawan";

    public $id;
    public $nama_karyawan;
    public $role_id;
    public $email;
    public $shift_kerja;

    public function rules()
    {
        return [
            ['field' => 'nama',
            'label' => 'nama', 
            'rules' => 'required'],
        

         ['field' => 'role_id',
            'label' => 'role_id', 
            'rules' => 'required'],
        

         ['field' => 'email',
            'label' => 'email', 
            'rules' => 'required'],
        

         ['field' => 'shift_kerja',
            'label' => 'shift_kerja', 
            'rules' => 'required']
        ];

    


    }
    
    public function getAll()
    {
        $this->db->select('*');
        $this->db->from('karyawan');
        $query = $this->db->get()->result();
        return $query;
        // return $this->db->get($this->_gudang)->result();
    }
    
    public function getById($id)
    {
        $this->db->select('*');
        $this->db->from('karyawan');
        $this->db->where('id_karyawan', $id);
        $query = $this->db->get()->row();
        return $query;
        // return $this->db->get_where($this->_kendaraan, ["id" => $id])->row();
    }

     public function update($data ,$id)
    {
        return $this->db->update('karyawan', $data, array('id_karyawan' => $id));
        // $post = $this->input->post('id');
        // $this->id_kendaraan = $post["id"];
        // $this->name = $post["nama_gudang"];
        // $data = $this->input->post('nama_gudang');
        // return $this->db->update($this->_kendaraan, $data , array('id_kendaraan' => $post));

    }
    public function save($id)
    {
        $post = $this->input->post();
       // $this->id = uniqid();
        $this->nama = $post["nama"];
        $this->role_id = $post["role_id"];
        $this->email = $post["email"];
        $this->shift_kerja = $post["shift_kerja"];
        return $this->db->insert($this->_karyawan, $this);
    }


    public function delete($id)
    {
        return $this->db->delete($this->_karyawan, array("id_karyawan" => $id));
    }

}