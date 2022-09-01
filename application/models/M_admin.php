<?php
class M_admin extends CI_Model{
    public function index(){

    } 
    public function add($table,$data) {
        $this->db->insert($table,$data);
    }
    public function get_data_petugas(){
        return $this->db->get('petugas')->result();
    }
    public function delete_petugas($where,$table){
        $this->db->where($where);
        $this->db->delete($table);
     }   
     public function get_data_petugas_where($id){
        $this->db->where_in('id_petugas', $id);
        return $this->db->get('petugas')->result();
    } 
    public function update_petugas($where,$table,$data){
        $this->db->where($where);
        $this->db->update($table,$data);
     }
}