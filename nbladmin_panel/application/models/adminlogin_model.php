<?php
class Adminlogin_model extends CI_Model {

	function __construct(){
		parent::__construct();
		$this->load->database();
	}
	
	public	function get_userdetail($user_name){
		$query = $this->db->get_where('user_detail',array('user_name '=>$user_name));
		return $query->row_array();
	}
	public	function  update_userdetail($user,$id){
	       $this->db->where('user_name', $id);
		$this->db->update('user_detail', $user);
	}
	
}
?>