<?php 
 
class M_biodata extends CI_Model{	

 public function getall($where){
        $this->db->select('*');
        $this->db->from('tb_user');
        $this->db->where('id_user',$where);
         $query = $this->db->get()->result();

        return $query;
      
	}
	public function get(){
		return $this->db->get('tb_user')->result();
	 }
}
