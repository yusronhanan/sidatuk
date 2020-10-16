<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class TahapanPelaksanaan extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_tahapanPelaksanaan');
        $this->load->model('M_home');
    }

    public function index(){
if ($this->session->userdata('logged_in')) {
        $tipe_ = "pemeriksaanbersama";
        redirect('/tahapanPelaksanaan/data/'.$tipe_);
        }else{
            $this->session->set_flashdata('notif', 'Anda belum login');
            redirect('auth');
            
          }
    }

    public function data($tipe_)
	{
        if ($this->session->userdata('logged_in')) {
        if($tipe_ == "pemeriksaanbersama"){
            $tipe = "Pemeriksaan Bersama";
        } else if($tipe_ == "pengajuanpersyaratan"){
            $tipe = "Pengajuan Persyaratan untuk Material Kegiatan";
        } else if($tipe_ == "pengawasmutu"){
            $tipe = "Pengawasan Mutu Konstruksi";
        } else if($tipe_ == "penerimaandanpembayaran"){
            $tipe = "Penerimaan dan Pembayaran Hasil Kerja";
        } else if($tipe_ == "kontrakkritis"){
            $tipe = "Kontrak Kritis";
        }
        $data =[
            "tipe_" => $tipe_,
            "tipe"  => $tipe,
            "data" => $this->M_home->getAllDataTahapan($tipe,"tahapanpelaksanaan"),
            "main_view" => "v_tahapanPelaksanaan"
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
        
       if($tipe_ == "pemeriksaanbersama"){
            $formatFile = "1.docx";
            $tipe = "Pemeriksaan Bersama";
        } else if($tipe_ == "pengajuanpersyaratan"){
            $formatFile = "2.docx";
            $tipe = "Pengajuan Persyaratan untuk Material Kegiatan";
        } else if($tipe_ == "pengawasmutu"){
            $formatFile = "3.docx";
            $tipe = "Pengawasan Mutu Konstruksi";
        } else if($tipe_ == "penerimaandanpembayaran"){
            $formatFile = "4.docx";
            $tipe = "Penerimaan dan Pembayaran Hasil Kerja";
        } else if($tipe_ == "kontrakkritis"){
            $formatFile = "5.docx";
            $tipe = "Kontrak Kritis";
        }

        $data =[
            "tipe_" => $tipe_,
            "tipe"  => $tipe, // untuk input hidden
            "formatFile" => $formatFile, // untuk format file
            "main_view" => "v_tambah_tahapanPelaksanaan"
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
        
        if($tipe_ == "pemeriksaanbersama"){
            $formatFile = "1.docx";
            $tipe = "Pemeriksaan Bersama";
        } else if($tipe_ == "pengajuanpersyaratan"){
            $formatFile = "2.docx";
            $tipe = "Pengajuan Persyaratan untuk Material Kegiatan";
        } else if($tipe_ == "pengawasmutu"){
            $formatFile = "3.docx";
            $tipe = "Pengawasan Mutu Konstruksi";
        } else if($tipe_ == "penerimaandanpembayaran"){
            $formatFile = "4.docx";
            $tipe = "Penerimaan dan Pembayaran Hasil Kerja";
        } else if($tipe_ == "kontrakkritis"){
            $formatFile = "5.docx";
            $tipe = "Kontrak Kritis";
        }

        $data =[
            "tipe_" => $tipe_,
            "tipe"  => $tipe, // untuk input hidden
            "formatFile" => $formatFile, // untuk format file
            "data" => $this->M_home->getData(array("idPelaksanaan" => $id),"tahapanpelaksanaan")->row(),
            "main_view" => "v_ubah_tahapanPelaksanaan"
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
                            if ($this->M_tahapanPelaksanaan->add($file)) {
                            $this->session->set_flashdata('type', 'success');
                            $this->session->set_flashdata('notif', 'Sukses tambah data');
                            redirect('tahapanPelaksanaan/data/'.$tipe_); /* need to modified */
                            
                            } else {
                            $this->session->set_flashdata('notif', 'Gagal tambah data');
                            redirect('tahapanPelaksanaan/data/'.$tipe_); /* need to modified */
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
                            if ($this->M_tahapanPelaksanaan->edit($id, $file)) {
                            $this->session->set_flashdata('type', 'success');
                            $this->session->set_flashdata('notif', 'Sukses ubah data');
                            redirect('tahapanPelaksanaan/data/'.$tipe_); /* need to modified */
                            
                            } else {
                            $this->session->set_flashdata('notif', 'Gagal ubah data');
                            redirect('tahapanPelaksanaan/data/'.$tipe_); /* need to modified */
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
      if($this->M_tahapanPelaksanaan->delete($id)){
        $this->session->set_flashdata('type', 'success');
        $this->session->set_flashdata('notif', 'Sukses hapus data');
      } else{
        $this->session->set_flashdata('notif', 'Gagal hapus data');
      }
      
      redirect('tahapanPelaksanaan/data/'.$tipe_); /* need to modified */
      }else{
            $this->session->set_flashdata('notif', 'Anda belum login');
            redirect('auth');
            
          }
    }

    public function getTahapanPelaksanaan($tipe_){
if ($this->session->userdata('logged_in')) {
        if($tipe_ == "pemeriksaanbersama"){
            $tipe = "Pemeriksaan Bersama";
        } else if($tipe_ == "pengajuanpersyaratan"){
            $tipe = "Pengajuan Persyaratan untuk Material Kegiatan";
        } else if($tipe_ == "pengawasmutu"){
            $tipe = "Pengawasan Mutu Konstruksi";
        } else if($tipe_ == "penerimaandanpembayaran"){
            $tipe = "Penerimaan dan Pembayaran Hasil Kerja";
        } else if($tipe_ == "kontrakkritis"){
            $tipe = "Kontrak Kritis";
        }
        echo json_encode($this->M_home->getAllDataTahapan($tipe,"tahapanpelaksanaan"));
        }else{
            echo "anda tidak punya akses.";
            
          }
    }
}



/* End of file TahapanPelaksanaan.php */

?>