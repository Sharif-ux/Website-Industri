<?php defined('BASEPATH') OR exit('No direct script access allowed');

class pengiriman_model extends CI_Model
{
    private $_pengiriman = "pengiriman";

    public $id;
    public $alamat;

    public function rules()
    {
        return [
            ['field' => 'alamat',
            'label' => 'alamat',
            'rules' => 'required']
        ];
    }
 
    public function getAll()
    {
        return $this->db->get($this->_pengiriman)->result();
    }
    
    public function getById($id)
    {
        $this->db->select('*');
        $this->db->from('pengiriman');
        $this->db->where('id', $id);
        $query = $this->db->get()->row();
        return $query;
        // return $this->db->get_where($this->_pengiriman, ["id" => $id])->row();
    }

    public function get_kendaraan(){
        $this->db->select('*');
        $this->db->from('pengiriman');
         // $this->db->join('kendaraan', 'kendaraan.id = pengiriman.id_kendaraan','inner');
         // $this->db->join('karyawan', 'karyawan.id_karyawan = pengiriman.id_supir','inner');
         // $this->db->join('barang', 'barang.id = pengiriman.id_barang','inner');
        $query = $this->db->get()->result();

        return $query;

    }

    public function update($data, $id)
    {
        return $this->db->update('pengiriman', $data, array('id' => $id));
        // $post = $this->input->post('id');
        // $this->id_kendaraan = $post["id"];
        // $this->name = $post["nama_kendaraan"];
        // $data = $this->input->post('nama_kendaraan');
        // return $this->db->update($this->_pengiriman, $data , array('id_kendaraan' => $post));

    } 
    //     public function getById($id)
    // {
    //     return $this->db->get_where($this->_pengiriman, ["id" => $id])->row();
    // }

    //     public function update()
    // {
    //     $post = $this->input->post();
    //     $this->id           = $post["id"];
    //     $this->id_kendaraan = $post["id_kendaraan"];
    //     $this->id_supir     = $post["id_supir"];
    //     $this->id_barang    = $post["id_barang"];
    //     $this->alamat       = $post["alamat"];
    //     $this->db->update($this->_pengiriman, $this, array('id' => $post['id']));
    // }

    public function save()
    {
        $post = $this->input->post();
       // $this->id = uniqid();
        $this->alamat = $post["alamat"];
        return $this->db->insert($this->_pengiriman, $this);
    }

   /* public function delete($id)
    {
        return $this->db->delete($this->_pengiriman, array("id" => $id));
    } */
//     public function delete($id)
// {
//     $this->db->where('kendraan.id =pengiriman.id_kendaraan');
//     $this->db->where('karyawan.id_karyawan=pengiriman.id_supir');
//     $this->db->where('barang.id=pengiriman.id_barang');
//     $this->db->where('pengiriman.id',$id);
//     $this->db->delete('kendaraan','karyawan','barang', 'pengiriman');
// }
   public function delete($id) 
{
        return $this->db->delete($this->_pengiriman, array("id" => $id));
}
    // mengambil semua data kendaraan
    public function get_all_kendaraan(){
     return  $data = $this -> db -> query("SELECT * FROM KENDARAAN")->result_array();
    }
    // mengambil semua data supir
    public function get_all_supir(){
        return  $data = $this -> db -> query("SELECT * FROM KARYAWAN")->result_array();
    }
    // mengambil semua data barang
    public function get_all_barang(){
        return  $data = $this -> db -> query("SELECT * FROM BARANG")->result_array();
    }
    public function add_pengiriman($data){
        $this->db->insert('pengiriman', $data);
    }
    public function get_byid_kendaraan(){
     return  $data = $this -> db -> query("SELECT * FROM KENDARAAN WHERE ID")->result_array();
    }
      public function get_byid_supir(){
        return  $data = $this -> db -> query("SELECT * FROM KARYAWAN WHERE ID")->result_array();
    }
      public function get_byid_barang(){
        return  $data = $this -> db -> query("SELECT * FROM BARANG WHERE ID")->result_array();
    }

       
}