<?php defined('BASEPATH') OR exit('No direct script access allowed');

class barang_model extends CI_Model
{
    private $_barang = "barang";

    public $id;
    public $nama_barang;
    public $id_gudang;


    public function rules()
    {
        return [
            ['field' => 'nama_barang', 
            'label' => 'nama_barang',
            'rules' => 'required']

        ];
    } 

    public function getAll()
    {
        return $this->db->get($this->_barang)->result();
    }
    
    public function get_barang(){
        $this->db->select('*');
        $this->db->from('barang');
        $query = $this->db->get()->result();

        return $query;

    }
     public function getById($id)
    {
        $this->db->select('*');
        $this->db->from('barang');
        $this->db->where('id', $id);
        $query = $this->db->get()->row();
        return $query;
        // return $this->db->get_where($this->_kendaraan, ["id" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
       // $this->id = uniqid();
        $this->nama_barang = $post["nama_barang"];
        return $this->db->insert($this->barang, $this);
    }

    public function update($id, $data)
    {
         return $this->db->update('barang', $data, array('id' => $id)); 
        // $post = $this->input->post('id');
        // $this->id = $post["id"];
        // $this->nama_barang = $post["nama_barang"];
        // $this->id_gudang = $post["id_gudang"];        
        // $this->db->update($this->_barang, $this, array('id' => $post['id']));

    }

    public function delete($id)
    {
        return $this->db->delete($this->_barang, array("id" => $id));
    }
    // public function add($data){
    //     $this ->db-> query ("INSERT INTO barang (nama_barang) VALUES ('$data')");
    //     $this ->db-> query ("INSERT INTO barang (id_gudang) VALUES ('$data')");
    // }
     public function add_barang($data){
        $this->db->insert('barang', $data);
    }
     public function get_all_barang(){
     return  $data = $this -> db -> query("SELECT * FROM Gudang")->result_array();
    }
     public function get_byid_barang(){
        return  $data = $this -> db -> query("SELECT * FROM GUDANG WHERE ID")->result_array();
    }
    public function getById1($id){

        return $this->db->get_where($this->_barang, ["id" => $id])->row();
    }
    //
}
