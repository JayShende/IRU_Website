<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class patient_contr extends CI_Controller {
	
	
	public function save_img() {

$data = $this->input->post($hid_img);
    $file = md5(uniqid()) . '.png';

    // remove "data:image/png;base64,"
    $uri =  substr($data,strpos($data,",")+1);

    // save to file in uploads folder of codeigniter
    file_put_contents('./uploads'.$file, base64_decode($uri));

}
}
	?>