<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminController extends CI_Controller {
	
	public function index()
{
$this->load->helper('url');
if($this->sessionexist())
{
    

header('location:homepage');

}
$this->load->view('adminpage');
}
	
public function sessionexist() {

if(isset($this->session->userdata['logged_in']))
{
return 1;
}
else
{
return 0;
}
}	

	
	public function homepage()
{$this->load->helper('url');
if(!$this->sessionexist())
{
    
header('location:adminpage');
//exit;
}

header('location:admindash');
}
	

	
	public function admindash(){
		$this->load->helper('url');
		if(!isset($this->session->userdata['logged_in']))
{
    
    	header('location:index');
    	
    	
    	
		}
		else{
			$this->load->view('admindash');
		}
		
	}
	public function adminpage(){
		
		$this->load->view('adminpage');
	
	}
	
	public function login(){
	//	echo "asdf";
	//	$this->load->helper('url');
		


	
if(!isset($this->session->userdata['logged_in']))
{
	    $username= $this->input->post('email');
	 	$password= $this->input->post('password');
		$this->load->model("Adminmodel");
		$data= $this->Adminmodel->login($username,$password);
		
	//	print_r($data);exit;
		if($data== false||$data=="")
		{   
		    header('location:adminpage');
		    
		    
		}
		else
		{
		  $userdata=array
				    (
				    $Admin_Id = $data[0]->Admin_Id,
				    $Email = $data[0]->username,
					$password = $data[0]->password,
				    'authenticated' => TRUE
					);
			
                $this->session->set_userdata('logged_in',$userdata);
		        $loginid= $this->session->userdata('logged_in');
		}
			header('location:admindash');
		
	}
	else
	{
	    
	   		header('location:admindash');
	}
	
	
	
	
	}
	
	
/*public function logout(){
	if(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true)
		{
		$data=$this->session->userdata('logged_in');
	    $this->load->model('Adminmodel');
		$result = $this->Adminmodel->logincheck($data);
		if($result){
			$this->session->unset_userdata('logged_in');
		 $this->session->sess_destroy();
		  $this->cache->clean();	
		}
		redirect('AdminController/index');
	}
		
}*/
	
	
	public function logout() {
$this->load->helper('url');
if(!isset($this->session->userdata['logged_in']))
{
echo  "user logged out";

	header('location:homepage');
	
	
}

$data = $this->session->userdata['logged_in'];
	
if ($data)
{
$data=$this->session->unset_userdata('logged_in');
	//print_r($data);echo "logout"; exit;
$sdata['message']='You are Successfully Logout !';
   $this->load->view('adminpage');
}
       }
	
	
	
	public function startup(){
			if(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true)
		{
		$this->load->model("Adminmodel");
		$data['login']= $this->Adminmodel->getstartup();
		$this->load->view("startup_tbl",$data);
	}
		else{
			$this->load->view('adminpage');
		}
	}
	
	
	
	public function innovation(){
		if(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true)
		{
		
		$this->load->model("Adminmodel");
		$data['login']= $this->Adminmodel->getinnovation();
		$this->load->view("innovation_tbl",$data);
	}
		
		else{
			$this->load->view('adminpage');
		
	}
	}
}