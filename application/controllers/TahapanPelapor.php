<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class TahapanPelapor extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_tahapanPelapor');
        $this->load->model('M_home');
    }

    public function index(){
        $tipe_ = "laporanharian";
        redirect('/tahapanpelapor/data/'.$tipe_);
    }

    public function data($tipe_)
	{
        if($tipe_ == "laporanharian"){
            $tipe = "Laporan Harian";
        } else if($tipe_ == "laporanmingguan"){
            $tipe = "Laporan Mingguan";
        } else if($tipe_ == "laporanbulanan"){
            $tipe = "Laporan Bulanan";
        } 
        $data =[
            "tipe_" => $tipe_,
            "tipe"  => $tipe,
            "data" => $this->M_home->getAllDataTahapan($tipe,"tahapanPelapor"),
            "main_view" => "v_tahapanPelapor"
        ];
		$this->load->view('v_layout',$data);
    }

 



    public function tambah($tipe_){
        $formatFile = "";
        $tipe = "";
        
       if($tipe_ == "laporanharian"){
            $formatFile = "1.docx";
            $tipe = "Laporan Harian";
        } else if($tipe_ == "laporanmingguan"){
            $formatFile = "2.docx";
            $tipe = "Laporan Mingguan";
        } else if($tipe_ == "laporanbulanan"){
            $formatFile = "3.docx";
            $tipe = "Laporan Bulanan";
        }  

        $data =[
            "tipe_" => $tipe_,
            "tipe"  => $tipe, // untuk input hidden
            "formatFile" => $formatFile, // untuk format file
            "main_view" => "v_tambah_tahapanPelapor"
        ];
		$this->load->view('v_layout',$data);
    }

    public function ubah($tipe_,$id){
        $formatFile = "";
        $tipe = "";
        
        if($tipe_ == "laporanharian"){
            $formatFile = "1.docx";
            $tipe = "Laporan Harian";
        } else if($tipe_ == "laporanmingguan"){
            $formatFile = "2.docx";
            $tipe = "Laporan Mingguan";
        } else if($tipe_ == "laporanbulanan"){
            $formatFile = "3.docx";
            $tipe = "Laporan Bulanan";
        }  

        $data =[
            "tipe_" => $tipe_,
            "tipe"  => $tipe, // untuk input hidden
            "formatFile" => $formatFile, // untuk format file
            "data" => $this->M_home->getData(array("idPelapor" => $id),"tahapanPelapor")->row(),
            "main_view" => "v_ubah_tahapanPelapor"
        ];
		$this->load->view('v_layout',$data);       
    }
    public function add($tipe_)
    {
    //   $this->form_validation->set_rules('', '', '');
    //   if ($this->form_validation->run() == TRUE) {
                
                    $initialize = $this->upload->initialize(array(
                        'upload_path' => './assets/file/',
                        'allowed_types' => 'jpg|jpeg|png|pdf'
                    ));
                    $this->upload->do_upload('fileUpload');
                        $file = $this->upload->data();
                            if ($this->M_tahapanPelapor->add($file)) {
                            $this->session->set_flashdata('type', 'success');
                            $this->session->set_flashdata('notif', 'Sukses tambah data');
                            redirect('tahapanPelapor/data/'.$tipe_); /* need to modified */
                            
                            } else {
                            $this->session->set_flashdata('notif', 'Gagal tambah data');
                            redirect('tahapanPelapor/data/'.$tipe_); /* need to modified */
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
                
                    $initialize = $this->upload->initialize(array(
                        'upload_path' => './assets/file/',
                        'allowed_types' => 'jpg|jpeg|png|pdf'
                    ));
                    $this->upload->do_upload('fileUpload');
                    $file = $this->upload->data();
                            if ($this->M_tahapanPelapor->edit($id, $file)) {
                            $this->session->set_flashdata('type', 'success');
                            $this->session->set_flashdata('notif', 'Sukses ubah data');
                            redirect('tahapanPelapor/data/'.$tipe_); /* need to modified */
                            
                            } else {
                            $this->session->set_flashdata('notif', 'Gagal ubah data');
                            redirect('tahapanPelapor/data/'.$tipe_); /* need to modified */
                            }
                    
    //   } else {
    //           $this->session->set_flashdata('notif', 'One of required input is empty');
    //           redirect(''); /* need to modified */
    //   }
    }

    public function delete($tipe_, $id)
    {
      if($this->M_tahapanPelapor->delete($id)){
        $this->session->set_flashdata('type', 'success');
        $this->session->set_flashdata('notif', 'Sukses hapus data');
      } else{
        $this->session->set_flashdata('notif', 'Gagal hapus data');
      }
      
      redirect('tahapanPelapor/data/'.$tipe_); /* need to modified */
    }

    public function getTahapanPelapor($tipe_){
        if($tipe_ == "laporanharian"){
            $tipe = "Laporan Harian";
        } else if($tipe_ == "laporanmingguan"){
            $tipe = "Laporan Mingguan";
        } else if($tipe_ == "laporanbulanan"){
            $tipe = "Laporan Bulanan";
        } 
        echo json_encode($this->M_home->getAllDataTahapan($tipe,"tahapanPelapor"));
    }
}



/* End of file TahapanPelapor.php */

?>