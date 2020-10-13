<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class TahapanPenyelesaian extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_tahapanPenyelesaian');
        $this->load->model('M_home');
    }

    public function index(){
        if ($this->session->userdata('logged_in')) {
        $tipe_ = "serahterimapertama";
        redirect('/tahapanpenyelesaian/data/'.$tipe_);
        }else{
            $this->session->set_flashdata('notif', 'Anda belum login');
            redirect('auth');
            
          }
    }

    public function data($tipe_)
	{
        if ($this->session->userdata('logged_in')) {
        if($tipe_ == "serahterimapertama"){
            $tipe = "Serah Terima Pertama";
        } else if($tipe_ == "pemeliharaanhasilkerja"){
            $tipe = "Pemeliharaan Hasil Kerja";
        } else if($tipe_ == "serahterimaakhir"){
            $tipe = "Serah Terima Akhir Pekerjaan";
        } else if($tipe_ == "serahterimapekerjaanselesai"){
            $tipe = "Serah Terima Pekerajaan Selesai Terhadap Pemilik";
        } 
        $data =[
            "tipe_" => $tipe_,
            "tipe"  => $tipe,
            "data" => $this->M_home->getAllDataTahapan($tipe,"tahapanPenyelesaian"),
            "main_view" => "v_tahapanPenyelesaian"
        ];
        $this->load->view('v_layout',$data);
        }else{
            $this->session->set_flashdata('notif', 'Anda belum login');
            redirect('auth');
            
          }
    }

 



    public function tambah($tipe_){
        
        if ($this->session->userdata('logged_in')) {
        $formatFile = "";
        $tipe = "";
        
       if($tipe_ == "serahterimapertama"){
            $formatFile = "1.docx";
            $tipe = "Serah Terima Pertama";
        } else if($tipe_ == "pemeliharaanhasilkerja"){
            $formatFile = "2.docx";
            $tipe = "Pemeliharaan Hasil Kerja";
        } else if($tipe_ == "serahterimaakhir"){
            $formatFile = "3.docx";
            $tipe = "Serah Terima Akhir Pekerjaan";
        } else if($tipe_ == "serahterimapekerjaanselesai"){
            $formatFile = "4.docx";
            $tipe = "Serah Terima Pekerajaan Selesai Terhadap Pemilik";
            
        } 

        $data =[
            "tipe_" => $tipe_,
            "tipe"  => $tipe, // untuk input hidden
            "formatFile" => $formatFile, // untuk format file
            "main_view" => "v_tambah_tahapanPenyelesaian"
        ];
        $this->load->view('v_layout',$data);  
        }else{
            $this->session->set_flashdata('notif', 'Anda belum login');
            redirect('auth');
            
          }     
    }

    public function ubah($tipe_,$id){
        if ($this->session->userdata('logged_in')) {
        $formatFile = "";
        $tipe = "";
        
        if($tipe_ == "serahterimapertama"){
            $formatFile = "1.docx";
            $tipe = "Serah Terima Pertama";
        } else if($tipe_ == "pemeliharaanhasilkerja"){
            $formatFile = "2.docx";
            $tipe = "Pemeliharaan Hasil Kerja";
        } else if($tipe_ == "serahterimaakhir"){
            $formatFile = "3.docx";
            $tipe = "Serah Terima Akhir Pekerjaan";
        } else if($tipe_ == "serahterimapekerjaanselesai"){
            $formatFile = "4.docx";
            $tipe = "Serah Terima Pekerajaan Selesai Terhadap Pemilik";
        } 

        $data =[
            "tipe_" => $tipe_,
            "tipe"  => $tipe, // untuk input hidden
            "formatFile" => $formatFile, // untuk format file
            "data" => $this->M_home->getData(array("idPenyelesaian" => $id),"tahapanPenyelesaian")->row(),
            "main_view" => "v_ubah_tahapanPenyelesaian"
        ];
        $this->load->view('v_layout',$data);    
        }else{
            $this->session->set_flashdata('notif', 'Anda belum login');
            redirect('auth');
            
          }   
    }
    public function add($tipe_)
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
                            if ($this->M_tahapanPenyelesaian->add($file)) {
                            $this->session->set_flashdata('type', 'success');
                            $this->session->set_flashdata('notif', 'Sukses tambah data');
                            redirect('tahapanPenyelesaian/data/'.$tipe_); /* need to modified */
                            
                            } else {
                            $this->session->set_flashdata('notif', 'Gagal tambah data');
                            redirect('tahapanPenyelesaian/data/'.$tipe_); /* need to modified */
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

    public function edit($tipe_, $id)
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
                            if ($this->M_tahapanPenyelesaian->edit($id, $file)) {
                            $this->session->set_flashdata('type', 'success');
                            $this->session->set_flashdata('notif', 'Sukses ubah data');
                            redirect('tahapanPenyelesaian/data/'.$tipe_); /* need to modified */
                            
                            } else {
                            $this->session->set_flashdata('notif', 'Gagal ubah data');
                            redirect('tahapanPenyelesaian/data/'.$tipe_); /* need to modified */
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

    public function delete($tipe_, $id)
    {
        if ($this->session->userdata('logged_in')) {
      if($this->M_tahapanPenyelesaian->delete($id)){
        $this->session->set_flashdata('type', 'success');
        $this->session->set_flashdata('notif', 'Sukses hapus data');
      } else{
        $this->session->set_flashdata('notif', 'Gagal hapus data');
      }
      
      redirect('tahapanPenyelesaian/data/'.$tipe_); /* need to modified */
      }else{
            $this->session->set_flashdata('notif', 'Anda belum login');
            redirect('auth');
            
          }
    }

    public function getTahapanPenyelesaian($tipe_){
        if ($this->session->userdata('logged_in')) {
        if($tipe_ == "serahterimapertama"){
            $tipe = "Serah Terima Pertama";
        } else if($tipe_ == "pemeliharaanhasilkerja"){
            $tipe = "Pemeliharaan Hasil Kerja";
        } else if($tipe_ == "serahterimaakhir"){
            $tipe = "Serah Terima Akhir Pekerjaan";
        } else if($tipe_ == "serahterimapekerjaanselesai"){
            $tipe = "Serah Terima Pekerajaan Selesai Terhadap Pemilik";
        } 
        echo json_encode($this->M_home->getAllDataTahapan($tipe,"tahapanPenyelesaian"));
        }else{
            echo "anda tidak punya akses.";
            
          }
    }
}



/* End of file TahapanPenyelesaian.php */

?>