<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Progress extends CI_Controller {


    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_progress');
        $this->load->model('M_home');
    }

    public function index(){
if ($this->session->userdata('logged_in')) {
    $data =[
        "data" => $this->M_home->getAllData("progress"),
        "main_view" => "v_progress"
    ];
    $this->load->view('v_layout',$data);
        }else{
            $this->session->set_flashdata('notif', 'Anda belum login');
            redirect('auth');
            
          }
    }


 



    public function tambah(){
        if ($this->session->userdata('logged_in')) {
        $data =[
            "main_view" => "v_tambah_progress"
        ];
        $this->load->view('v_layout',$data);
        }else{
            $this->session->set_flashdata('notif', 'Anda belum login');
            redirect('auth');
            
          }
    }

    public function ubah($id){
        if ($this->session->userdata('logged_in')) {
      
        $data =[
            "data" => $this->M_home->getData(array("idProgress" => $id),"progress")->row(),
            "main_view" => "v_ubah_progress"
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
                    $initialize = $this->upload->initialize(array(
                        'upload_path' => './assets/file/',
                        'allowed_types' => 'jpg|jpeg|png|pdf'
                    ));
                    $this->upload->do_upload('fileUpload');
                        $file = $this->upload->data();
                            if ($this->M_progress->add($file)) {
                            $this->session->set_flashdata('type', 'success');
                            $this->session->set_flashdata('notif', 'Sukses tambah data');
                            redirect('progress'); /* need to modified */
                            
                            } else {
                            $this->session->set_flashdata('notif', 'Gagal tambah data');
                            redirect('progress'); /* need to modified */
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
                    $initialize = $this->upload->initialize(array(
                        'upload_path' => './assets/file/',
                        'allowed_types' => 'jpg|jpeg|png|pdf'
                    ));
                    $this->upload->do_upload('fileUpload');
                    $file = $this->upload->data();
                            if ($this->M_progress->edit($id, $file)) {
                            $this->session->set_flashdata('type', 'success');
                            $this->session->set_flashdata('notif', 'Sukses ubah data');
                            redirect('progress'); /* need to modified */
                            
                            } else {
                            $this->session->set_flashdata('notif', 'Gagal ubah data');
                            redirect('progress'); /* need to modified */
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
      if($this->M_progress->delete($id)){
        $this->session->set_flashdata('type', 'success');
        $this->session->set_flashdata('notif', 'Sukses hapus data');
      } else{
        $this->session->set_flashdata('notif', 'Gagal hapus data');
      }
      
      redirect('progress'); /* need to modified */
      }else{
            $this->session->set_flashdata('notif', 'Anda belum login');
            redirect('auth');
            
          }
    }

    public function getProgress(){
        if ($this->session->userdata('logged_in')) {
       
        echo json_encode($this->M_home->getAllData("progress"));
        }else{
            echo "anda tidak punya akses.";
            
          }
    }

}

/* End of file Progress.php */


?>