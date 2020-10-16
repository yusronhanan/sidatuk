<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class TahapanPersiapan extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_tahapanPersiapan');
        $this->load->model('M_home');
    }

    public function index(){
        if ($this->session->userdata('logged_in')) {
        $tipe_ = "penyerahanlokasi";
        redirect('/tahapanPersiapan/data/'.$tipe_);
        }else{
            $this->session->set_flashdata('notif', 'Anda belum login');
            redirect('auth');
            
          }
    }

    public function data($tipe_)
	{
        if ($this->session->userdata('logged_in')) {
        if($tipe_ == "penyerahanlokasi"){
            $tipe = "Penyerahan Lokasi";
        } else if($tipe_ == "spmk"){
            $tipe = "SPMK (Surat Perintah Mulai Kerja)";
        } else if($tipe_ == "rapatpersiapan"){
            $tipe = "Rapat Persiapan";
        } else if($tipe_ == "pembayaranuangmuka"){
            $tipe = "Pembayaran Uang Muka";
        } else if($tipe_ == "mobilisasi"){
            $tipe = "Mobilisasi";
        }
        $data =[
            "tipe_" => $tipe_,
            "tipe"  => $tipe,
            "data" => $this->M_home->getAllDataTahapan($tipe,"tahapanpersiapan"),
            "main_view" => "v_tahapanPersiapan"
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
        
        if($tipe_ == "penyerahanlokasi"){
            $formatFile = "1.docx";
            $tipe = "Penyerahan Lokasi";
        } else if($tipe_ == "spmk"){
            $formatFile = "2.docx";
            $tipe = "SPMK (Surat Perintah Mulai Kerja)";
        } else if($tipe_ == "rapatpersiapan"){
            $formatFile = "3.docx";
            $tipe = "Rapat Persiapan";
        } else if($tipe_ == "pembayaranuangmuka"){
            $formatFile = "4.docx";
            $tipe = "Pembayaran Uang Muka";
        } else if($tipe_ == "mobilisasi"){
            $formatFile = "5.docx";
            $tipe = "Mobilisasi";
        }

        $data =[
            "tipe_" => $tipe_,
            "tipe"  => $tipe, // untuk input hidden
            "formatFile" => $formatFile, // untuk format file
            "main_view" => "v_tambah_tahapanPersiapan"
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
        
        if($tipe_ == "penyerahanlokasi"){
            $formatFile = "1.docx";
            $tipe = "Penyerahan Lokasi";
        } else if($tipe_ == "spmk"){
            $formatFile = "2.docx";
            $tipe = "SPMK (Surat Perintah Mulai Kerja)";
        } else if($tipe_ == "rapatpersiapan"){
            $formatFile = "3.docx";
            $tipe = "Rapat Persiapan";
        } else if($tipe_ == "pembayaranuangmuka"){
            $formatFile = "4.docx";
            $tipe = "Pembayaran Uang Muka";
        } else if($tipe_ == "mobilisasi"){
            $formatFile = "5.docx";
            $tipe = "Mobilisasi";
        }

        $data =[
            "tipe_" => $tipe_,
            "tipe"  => $tipe, // untuk input hidden
            "formatFile" => $formatFile, // untuk format file
            "data" => $this->M_home->getData(array("idPersiapan" => $id),"tahapanpersiapan")->row(),
            "main_view" => "v_ubah_tahapanPersiapan"
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
                            if ($this->M_tahapanPersiapan->add($file)) {
                            $this->session->set_flashdata('type', 'success');
                            $this->session->set_flashdata('notif', 'Sukses tambah data');
                            redirect('tahapanPersiapan/data/'.$tipe_); /* need to modified */
                            
                            } else {
                            $this->session->set_flashdata('notif', 'Gagal tambah data');
                            redirect('tahapanPersiapan/data/'.$tipe_); /* need to modified */
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
                            if ($this->M_tahapanPersiapan->edit($id, $file)) {
                            $this->session->set_flashdata('type', 'success');
                            $this->session->set_flashdata('notif', 'Sukses ubah data');
                            redirect('tahapanPersiapan/data/'.$tipe_); /* need to modified */
                            
                            } else {
                            $this->session->set_flashdata('notif', 'Gagal ubah data');
                            redirect('tahapanPersiapan/data/'.$tipe_); /* need to modified */
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
      if($this->M_tahapanPersiapan->delete($id)){
        $this->session->set_flashdata('type', 'success');
        $this->session->set_flashdata('notif', 'Sukses hapus data');
      } else{
        $this->session->set_flashdata('notif', 'Gagal hapus data');
      }
      
      redirect('tahapanPersiapan/data/'.$tipe_); /* need to modified */
      }else{
            $this->session->set_flashdata('notif', 'Anda belum login');
            redirect('auth');
            
          }
    }

    public function getTahapanPersiapan($tipe_){
        if ($this->session->userdata('logged_in')) {
        if($tipe_ == "penyerahanlokasi"){
            $tipe = "Penyerahan Lokasi";
        } else if($tipe_ == "spmk"){
            $tipe = "SPMK (Surat Perintah Mulai Kerja)";
        } else if($tipe_ == "rapatpersiapan"){
            $tipe = "Rapat Persiapan";
        } else if($tipe_ == "pembayaranuangmuka"){
            $tipe = "Pembayaran Uang Muka";
        } else if($tipe_ == "mobilisasi"){
            $tipe = "Mobilisasi";
        }
        echo json_encode($this->M_home->getAllDataTahapan($tipe,"tahapanpersiapan"));
        }else{
            echo "anda tidak punya akses";
            
          }
    }
}



/* End of file TahapanPersiapan.php */
// public function penyerahanlokasi() //1
// {
//     $tipe = "Penyerahan Lokasi"
    
//     $data =[
//         "tipe"  => $tipe,
         
//         "data" => $this->M_home->getAllDataTahapan($tipe,"tahapanPersiapan"),
//         "main_view" => "v_tahapanPersiapan"
//     ];
//     $this->load->view('v_layout',$data);
// }
    // public function spmk() //2
	// {
    //     $tipe = "SPMK (Surat Perintah Mulai Kerja)"
        
    //     $data =[
    //         "tipe"  => $tipe,
             
    //         "data" => $this->M_home->getAllDataTahapan($tipe,"tahapanPersiapan"),
    //         "main_view" => "v_tahapanPersiapan"
    //     ];
	// 	$this->load->view('v_layout',$data);
    // }

    // public function rapatpersiapan() //3
	// {
    //     $tipe = "Rapat Persiapan"
        
    //     $data =[
    //         "tipe"  => $tipe,
             
    //         "data" => $this->M_home->getAllDataTahapan($tipe,"tahapanPersiapan"),
    //         "main_view" => "v_tahapanPersiapan"
    //     ];
	// 	$this->load->view('v_layout',$data);
    // }

    // public function pembayaranuangmuka() //4
	// {
    //     $tipe = "Pembayaran Uang Muka"
        
    //     $data =[
    //         "tipe"  => $tipe,
             
    //         "data" => $this->M_home->getAllDataTahapan($tipe,"tahapanPersiapan"),
    //         "main_view" => "v_tahapanPersiapan"
    //     ];
	// 	$this->load->view('v_layout',$data);
    // }

    // public function mobilisasi() //5
	// {
    //     $tipe = "Mobilisasi"
        
    //     $data =[
    //         "tipe"  => $tipe,
             
    //         "data" => $this->M_home->getAllDataTahapan($tipe,"tahapanPersiapan"),
    //         "main_view" => "v_tahapanPersiapan"
    //     ];
	// 	$this->load->view('v_layout',$data);
    // }
?>