<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function pay_status()
	{
		$this->load->view('payment_status');
	}
	public function startupstatus()
	{
	$this->load->view('startupstatus');
		
	}
	public function innovationstatus()
	{
		$this->load->view('innovationstatus');
	}
	public function dummy()
	{
		$this->load->view('dummy2');
	} 
	public function index()
	{
		$this->load->view('main');
	}
	public function forms()
	{
		$this->load->view('form-link');
	}
	public function startup()
	{
		$this->load->view('startup');
	}
	public function innovation()
	{
		$this->load->view('innovation');
	}
	
	public function save_startup(){
		
        $data = $this->input->post('a');
		$datar = json_decode($data);
		$order_id=($datar[0]);
		$dataaa=array(
		'order_detail' => $data,
		'tracking_id'=>($datar[1]),
		'Bank_ref_no'=>($datar[2]),
		'Payment_status'=>($datar[3]),
		'Billing_Pincode'=>($datar[15]),
		'Billing_Address'=>($datar[12]),
		'Billing_City'=>($datar[13]),
		'Billing_State'=>($datar[14]));
		 
		//print_r($dataaa);
		//exit;
		$this->load->model('Innovationmodel');
		$insert['a']=$this->Innovationmodel->save_startup($dataaa,$order_id,$datar);
	}
	
	
	
	
	
	public function save_innov(){
		
        $data = $this->input->post('a');
		$datar = json_decode($data);
		$order_id=($datar[0]);
		
		$dataaa=array(
		'order_detail' => $data,
		'tracking_id'=>($datar[1]),
		'Bank_ref_no'=>($datar[2]),
		'Payment_status'=>($datar[3]),
		'Billing_Pincode'=>($datar[15]),
		'Billing_Address'=>($datar[12]),
		'Billing_City'=>($datar[13]),
		'Billing_State'=>($datar[14]));
		//print_r($dataaa);
		$this->load->model('Innovationmodel');
		$insert['a']=$this->Innovationmodel->save_innov($dataaa,$order_id,$datar);
		//print_r($insert);
		//exit;
	}
	
	
	public function detailsinnov()
	{
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$this->load->view('successinnov');
	}
	
	
	
	public function detailsst()
	{
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$this->load->view('successst');
	}
	
	
	
	
	public function payment()
	{
		
		$this->load->view('payment');
	}
	public function startupinsert(){
		$data=array(
			'TeamName'=>$this->input->post('startupname'),
			'Category'=>$this->input->post('cars'),
			'StartupName'=>$this->input->post('startupname'),
			'LeaderName'=>$this->input->post('teamleadname'),
			'Contact'=>$this->input->post('conatct'),
			'AltContact'=>$this->input->post('alternatecontact'),
			'LeaderEmail'=>$this->input->post('eamil'),
			//'Billing_Address'=>$this->input->post('Billing_Address'),
			//'Billing_City'=>$this->input->post('Billing_City'),
			//'Billing_State'=>$this->input->post('Billing_State'),
			//'Billing_Pincode'=>$this->input->post('Billing_Pincode'),
			'Name1'=>$this->input->post('membername1'),
			'Name2'=>$this->input->post('membername2'),
			'Name3'=>$this->input->post('membername3'),
			'Incubator'=>$this->input->post('incubator'),
			'GovtFund'=>$this->input->post('govermentfunding'),
			'GovtDetail'=>$this->input->post('fundinfamount'),
			'Investment'=>$this->input->post('investors'),
			'InvestmentDetail'=>$this->input->post('fundinfamount'),
			'Desc_Startup'=>$this->input->post('message'),
			'Udyam_Cert_Registration'=>$_FILES['filename1']['name'],
			'DPIIT_RegNo'=>$this->input->post('DPIIT'),
			'DPIIT_Certificate'=>$_FILES['DPIITCertificate']['name'],
			'Revenue_generated'=>$this->input->post('Revenue'),
			'Startup_Certificate'=>$_FILES['filename2']['name'],
			'Payment_status'=>'Pending'
		);
		
		$this->load->model('Innovationmodel');
		$insert['a']=$this->Innovationmodel->startup($data);
		//print_r($data);
		//exit;
	//header("Location: details?insert=".$insert);
		$send = $insert['a']->LeaderEmail;
		//print_r($send);exit;
	//$this->load->library('sendmail');
	//$insert['b'] = $this->sendmail->sendstartup($send);
		
    //$this->load->view('detail',$insert);





		$Orderfile = "uploadsstartup/".$insert['a']->Startup_id;
		mkdir($Orderfile);



		
		
		  $ucr=$_FILES['filename1']['name'];
          $ucr_tem_loc=$_FILES['filename1']['tmp_name'];
          $ucr_store=$Orderfile."/".$ucr;
		 move_uploaded_file($ucr_tem_loc,$ucr_store);
		
		
		
		$DPI=$_FILES['DPIITCertificate']['name'];
          $DPI_tem_loc=$_FILES['DPIITCertificate']['tmp_name'];
          $DPI_store=$Orderfile."/".$DPI;
		move_uploaded_file($DPI_tem_loc,$DPI_store);
		
		
		
		$stc=$_FILES['filename2']['name'];
          $stc_tem_loc=$_FILES['filename2']['tmp_name'];
          $stc_store=$Orderfile."/".$stc;
		move_uploaded_file($stc_tem_loc,$stc_store);




		
	$this->load->view('paymentst',$insert);
}
	
	public function inno_insert(){
		
		$nos = 0;
		$All_values = '';
		for($i=1;$i<=11;$i++)
		{
			$valuef = "Field".$i;
			$field_value = $this->input->post($valuef);
			
			
			if($field_value != '')
			{
				$nos++;
				if(!$All_values)
				$All_values = $field_value;
				else
				{
				$All_values = $All_values.",".$field_value;	
				}
			}
				
			
		}
		
		$data=array(
			'Category'=>$this->input->post('cars'),
			'Title_Innovation'=>$this->input->post('TitleofInnovation'),
			'Field'=>$All_values,
			'TeamLeader'=>$this->input->post('teamleadname'),
			'Contact_no'=>$this->input->post('conatctnoteamlead'),
			'AltContact_no'=>$this->input->post('altconatct'),
			'Email_id'=>$this->input->post('leademailid'),
			'AltEmail_id'=>$this->input->post('altemailid'),
		//	'Billing_Address'=>$this->input->post('Billing_Address'),
		//	'Billing_City'=>$this->input->post('Billing_City'),
		//	'Billing_State'=>$this->input->post('Billing_State'),
		//	'Billing_Pincode'=>$this->input->post('Billing_Pincode'),
			'Name1'=>$this->input->post('membername1'),
			'Name2'=>$this->input->post('membername2'),
			'Name3'=>$this->input->post('membername3'),
			'MentorName'=>$this->input->post('mentorname'),
			'Mentor_contact'=>$this->input->post('conatctnoofmentor'),
			'Mentor_email'=>$this->input->post('eamilofmentor'),
			'Description'=>$this->input->post('message'),
			'Video_link'=>$this->input->post('videolink'),
			'Patent'=>$this->input->post('filedpatent'),
			'Patent_ApplicationNo'=>$this->input->post('fundinfamount'),
			'GrantPatent'=>$this->input->post('investors'),
			'PatentCertificate'=>$_FILES['patentcertificate']['name'],
			'AwardsDetail'=>$this->input->post('awardsdetails'),
			'Payment_status'=>'Pending'
		);
		
		$this->load->model('Innovationmodel');
		$insert['a']=$this->Innovationmodel->innovation($data);
	//	print_r($insert);
		//exit;
		$send = $insert['a']->Email_id;
		//print_r($insert);
		//print_r($data);
		//exit;
	//$this->load->library('sendmail');
	//$insert['b'] = $this->sendmail->sendmaildata($send);




		$Orderfile = "uploadinnovation/".$insert['a']->inn_id;
		    mkdir($Orderfile);



		
		
		  $ptc=$_FILES['patentcertificate']['name'];
          $ptc_tem_loc=$_FILES['patentcertificate']['tmp_name'];
          $ptc_store=$Orderfile."/".$ptc;
	//	echo $ptc_tem_loc;
	//		echo $ptc_store;
		
		$stats =  move_uploaded_file($ptc_tem_loc,$ptc_store);
		//echo $stats;
	//	exit;




		
		 $this->load->view('paymentinnov',$insert);
	}
	
	
	
	
		
	
	public function innopendingpayments(){

		
		$Email_id = $this->input->get('email');
		$order_id = $this->input->get('order_id');
		//exit;
		$this->load->model('Innovationmodel');
   $insert['a'] =$this->Innovationmodel->getdetailsinbyid($order_id,$Email_id);
    $this->load->view('paymentpendinginnov',$insert);
	}
	
	
	public function startuppendingpayments(){

		
		$Email_id = $this->input->get('email');
		$order_id = $this->input->get('order_id');
		//exit;
		$this->load->model('Innovationmodel');
   $insert['a'] =$this->Innovationmodel->getdetailsinbyidst($order_id,$Email_id);
    $this->load->view('paymentpendingst',$insert);
	}
	
	
	
	
	
	
	
	public function sendmail(){
		$this->load->library('sendmail');
		
	}
	public function checkstartup(){
	//$response = array("status"=>1,"return_data"=>$insert);
		
			$a=$this->input->get('order_id');
			$b=$this->input->get('email');
		
		$this->load->model('Innovationmodel');
		//$modelret = 0;
		$insert['a']=$this->Innovationmodel->checkstartup($a,$b);
		//echo json_encode($insert['a']);
		//exit;
		//if($insert['a'][0])
		
			//$datar = json_decode($data);
			$this->load->view('status_viewstartup',$insert);
		
	}
	public function checkinnovation(){
		
		//$response = array("status"=>1,"return_data"=>$insert);
		
			$a=$this->input->get('order_id');
			$b=$this->input->get('email');
		
		$this->load->model('Innovationmodel');
		//$modelret = 0;
		$insert['a']=$this->Innovationmodel->checkinnovation($a,$b);
		//echo json_encode($insert['a']);
		//exit;
		//if($insert['a'][0])
		
			//$datar = json_decode($data);
			//print_r($insert);
			$this->load->view('status_viewinnov',$insert);
		
	}
	
	
}
