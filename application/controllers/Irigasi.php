<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Irigasi extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_irigasi');
        $this->load->model('M_home');
    }

    public function index()
	{
      if ($this->session->userdata('logged_in')) {
        $data =[
            "data" => $this->M_home->getAllData("irigasi"),
            "main_view" => "v_irigasi"
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
            "main_view" => "v_tambah_irigasi"
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
            "data" => $this->M_home->getData(array("idIrigasi" => $id), "irigasi")->row(),
            "main_view" => "v_ubah_irigasi"
        ];
    $this->load->view('v_layout',$data);
    }else{
            $this->session->set_flashdata('notif', 'Anda belum login');
            redirect('auth');
            
          }
    }

    public function add()
    {
    //   $this->form_validation->set_rules('', '', '');
    //   if ($this->form_validation->run() == TRUE) {
                if ($this->session->userdata('logged_in')) {
                    if ($this->M_irigasi->add()) {
                      $this->session->set_flashdata('type', 'success');
                      $this->session->set_flashdata('notif', 'Sukses tambah data');
                      redirect('irigasi'); /* need to modified */
                    
                    } else {
                      $this->session->set_flashdata('notif', 'Gagal tambah data');
                      redirect('irigasi'); /* need to modified */
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

    public function edit($id)
    {
    //   $this->form_validation->set_rules('', '', '');
    //   if ($this->form_validation->run() == TRUE) {
                if ($this->session->userdata('logged_in')) {
                    if ($this->M_irigasi->edit($id)) {
                      $this->session->set_flashdata('type', 'success');
                      $this->session->set_flashdata('notif', 'Sukses ubah data');
                      redirect('irigasi'); /* need to modified */
                    
                    } else {
                      $this->session->set_flashdata('notif', 'Gagal ubah data');
                      redirect('irigasi'); /* need to modified */
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
      if($this->M_irigasi->delete($id)){
        $this->session->set_flashdata('type', 'success');
        $this->session->set_flashdata('notif', 'Sukses hapus data');
      } else{
        $this->session->set_flashdata('notif', 'Gagal hapus data');
      }
      
      redirect('irigasi');
      }else{
            $this->session->set_flashdata('notif', 'Anda belum login');
            redirect('auth');
            
          }
    }
}

/* End of file Irigasi.php */

?>