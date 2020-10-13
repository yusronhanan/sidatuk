<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    /* 
    Home Controller provides all pages of the website. 
    */
	public function index()
	{
        if ($this->session->userdata('logged_in')) {
            $data =[
                "main_view" => "v_dashboard"
            ];
            $this->load->view('v_layout',$data);
        }else{
            $this->session->set_flashdata('notif', 'Anda belum login');
            redirect('auth');
            
          }
    }
    
    
}
?>