<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    /* 
    Home Controller provides all pages of the website. 
    */
	public function index()
	{
        $data =[
            "main_view" => "v_dashboard"
        ];
		$this->load->view('v_layout',$data);
    }
    
    
}
?>