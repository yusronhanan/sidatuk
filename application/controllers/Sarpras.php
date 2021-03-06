<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Sarpras extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_sarpras');
        $this->load->model('M_home');
    }

    public function index()
	{
if ($this->session->userdata('logged_in')) {
        $data =[
            "data" => $this->M_home->getAllData("sarpras"),
            "main_view" => "v_sarpras"
        ];
    $this->load->view('v_layout',$data);
    }else{
            $this->session->set_flashdata('notif', 'Anda belum login');
            redirect('auth');
            
          }
    }

    public function tambah()
	{
if ($this->session->userdata('logged_in')) {
        $data =[
            "main_view" => "v_tambah_sarpras"
        ];
    $this->load->view('v_layout',$data);
    }else{
            $this->session->set_flashdata('notif', 'Anda belum login');
            redirect('auth');
            
          }
  }

    public function ubah($id)
	{
    if ($this->session->userdata('logged_in')) {
        $data =[
            "data" => $this->M_home->getData(array("idSarpras" => $id), "sarpras")->row(),
            "main_view" => "v_ubah_sarpras"
        ];
    $this->load->view('v_layout',$data);
    }else{
            $this->session->set_flashdata('notif', 'Anda belum login');
            redirect('auth');
            
          }
    }

    public function add()
    {
if ($this->session->userdata('logged_in')) {
    //   $this->form_validation->set_rules('', '', '');
    //   if ($this->form_validation->run() == TRUE) {
                
                    if ($this->M_sarpras->add()) {
                      $this->session->set_flashdata('type', 'success');
                      $this->session->set_flashdata('notif', 'Sukses tambah data');
                      redirect('sarpras'); /* need to modified */
                    
                    } else {
                      $this->session->set_flashdata('notif', 'Gagal tambah data');
                      redirect('sarpras'); /* need to modified */
                    }
    //   } else {
    //           $this->session->set_flashdata('notif', 'One of required input is empty');
    //           redirect(''); /* need to modified */
    //   }
    }else{
            $this->session->set_flashdata('notif', 'Anda belum login');
            redirect('auth');
            
          }
    }

    public function edit($id)
    {

    //   $this->form_validation->set_rules('', '', '');
    //   if ($this->form_validation->run() == TRUE) {
                if ($this->session->userdata('logged_in')) {
                    if ($this->M_sarpras->edit($id)) {
                      $this->session->set_flashdata('type', 'success');
                      $this->session->set_flashdata('notif', 'Sukses ubah data');
                      redirect('sarpras'); /* need to modified */
                    
                    } else {
                      $this->session->set_flashdata('notif', 'Gagal ubah data');
                      redirect('sarpras'); /* need to modified */
                    }
                    }else{
            $this->session->set_flashdata('notif', 'Anda belum login');
            redirect('auth');
            
          }
    //   } else {
    //           $this->session->set_flashdata('notif', 'One of required input is empty');
    //           redirect(''); /* need to modified */
    //   }
    }

    public function delete($id)
    {
if ($this->session->userdata('logged_in')) {
      if($this->M_sarpras->delete($id)){
        $this->session->set_flashdata('type', 'success');
        $this->session->set_flashdata('notif', 'Sukses hapus data');
      } else{
        $this->session->set_flashdata('notif', 'Gagal hapus data');
      }
      
      redirect('sarpras');
      }else{
            $this->session->set_flashdata('notif', 'Anda belum login');
            redirect('auth');
            
          }
    }
}

/* End of file sarpras.php */

?>