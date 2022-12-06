<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Innovationmodel extends CI_Model {
	
	
	
	public function innovation($data){
		$this->db->insert('innovation',$data);
		$id = $this->db->insert_id();
		$q = $this->db->get_where('innovation', array('inn_id' => $id));
		return $q->row();
	}
	public function startup($data)
    {
		$this->db->insert('startupform',$data);
		$id = $this->db->insert_id();
		$q = $this->db->get_where('startupform', array('Startup_id' => $id));
		return $q->row();
	}
	
	public function save_startup($dataaa,$order_id,$datar)
    {
		$this->db->set($dataaa);
		 $this->db->where('Startup_id',$order_id);
	     return $this->db->update('startupform');
	}
	
	
	public function save_innov($dataaa,$order_id,$datar)
    {
		$this->db->set($dataaa);
		 $this->db->where('inn_id',$order_id);
	     return $this->db->update('innovation');
	}
	
	
	
	
	public function getdetails(){
	$this->db->SELECT('*');
	$this->db->FROM('innovation');
	$query = $this->db->get();	
		$row = $query->result();
        return $row;	
	
		
	}
	
	
	public function getdetailsstbyid($a){
$q = $this->db->get_where('startupform', array('Startup_id' => $a));
		return $q->row();
	}
	
	
	
	public function getdetailsinbyid($a,$id){

$q = $this->db->get_where('innovation', array('inn_id' => $a, 'Email_id' => $id));

		return $q->row();
	}
	
	
	
	
	
	public function getdetailsinbyidst($a,$id){
$q = $this->db->get_where('startupform', array('Startup_id' => $a, 'LeaderEmail' => $id));
return $q->row();
	}
	
	
	
	
	//public function checkstartup($a,$b){
//		//print_r($a);exit;
//	$this->db->SELECT('*');
//	$this->db->FROM('startupform');
//	$this->db->where('Startup_id',$a);
//		$this->db->where('LeaderEmail',$b);
//	$query = $this->db->get();	
//		$row = $query->result();
//        return $row;	
//	
//		
//	}
	public function checkinnovation($a,$b){
		//print_r($b);exit;
	$this->db->SELECT('*');
	$this->db->FROM('innovation');
	$this->db->where('inn_id',$a);
	$this->db->where('Email_id',$b);
	$query = $this->db->get();	
		$row = $query->result();
	//	print_r($row);exit;
        return $row;	
	
		
	}
	
	public function checkstartup($a,$b){
		//print_r($b);exit;
	$this->db->SELECT('*');
	$this->db->FROM('startupform');
	$this->db->where('Startup_id',$a);
	$this->db->where('LeaderEmail',$b);
	$query = $this->db->get();	
		$row = $query->result();
	//	print_r($row);exit;
        return $row;	
	
		
	}
	
}