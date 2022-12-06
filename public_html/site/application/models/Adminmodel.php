<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adminmodel extends CI_Model {
	
	public function login($a,$b)
	{
	$this->db->SELECT('*');
	$this->db->FROM('admin_tbl');
	$this->db->WHERE('username',$a);
	$this->db->WHERE('password',$b);
	$query = $this->db->get();	
		$row = $query->result();
		if ($query->num_rows() == 1) {
return $row;
} else {
return false;
}
       // return $row;
	}
	
	
	public function logincheck($data){
		 $condition =  "Admin_Id =" . "'" .  $data['login'][0]->Admin_Id . "' AND " . "username =" . "'" .  $data['login'][0]->username . "'AND " . "password =" . "'" .  $data['login'][0]->password . "'";
	  
		$this->db->from('admin_tbl');
$this->db->where($condition);
$this->db->limit(1);
$query = $this->db->get();
 $row = $query->result();
if ($query->num_rows() == 1) {
return true;
} else {
return false;
}
	
	}
	public function getstartup(){
		$this->db->SELECT('*');
	$this->db->FROM('startupform');
	$query = $this->db->get();	
		$row = $query->result();
        return $row;	
	}
	public function getinnovation(){
		$this->db->SELECT('*');
	$this->db->FROM('innovation');
	$query = $this->db->get();	
		$row = $query->result();
        return $row;	
	}
	
	public function startupdata(){
		$this->db->SELECT('*');
	$this->db->FROM('startupform');
	$query = $this->db->get();	
		$row = $query->result();
        return $row;	
	}
}