<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    /* 
    Home Controller provides all pages of the website. 
    */

    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_home');
        
    }
    
	public function index()
	{
        if ($this->session->userdata('logged_in')) {
            $data =[ 
                "jml_paket" => count($this->M_home->getAllData("irigasi")) +count($this->M_home->getAllData("sundawapan")) + count($this->M_home->getAllData("sarpras")),
                "jml_tahapan" => count($this->M_home->getAllData("tahapanpersiapan")) + count($this->M_home->getAllData("tahapanpelaksanaan")) + count($this->M_home->getAllData("tahapanpenyelesaian")) + count($this->M_home->getAllData("tahapanpelapor")),
                // "jml_progress" => count($this->M_home->getAllData("progress")),
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