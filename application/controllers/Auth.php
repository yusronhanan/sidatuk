<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_auth');
        $this->load->model('M_home');
    }
    
    public function index()
	{
        // $data =[
        //     "" => ""
        // ];
    // $this->load->view('v_layout',$data);
            if (!$this->session->userdata('logged_in')) {
		            $this->load->view('v_login');
            } else{
              $this->session->set_flashdata('notif', 'Anda sudah login');
              redirect('');
              
            }
    }

    public function login(){
        $this->form_validation->set_rules('nip', 'NIP', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        
        
        if ($this->form_validation->run() == TRUE) {
          if($this->M_auth->login()){
                 $user = $this->M_home->getData(array("nip"=>$this->input->post("nip")), "user")->row();
                  $session_data = array(
                    'id' => $user->idUser,
                    'nip' => $user->nip,
                    'nama' => $user->nama,
                    'jabatan' => $user->jabatan,
                    'role' => $user->role,
                    'logged_in' => true /* logged in means, the user success logged_in = true */
                  );
                  $this->session->set_userdata($session_data);
                  $this->session->set_flashdata('type', 'success');
                
                $this->session->set_flashdata('notif', 'Login sukses');
  
                  redirect('/');
          } else {
                $this->session->set_flashdata('notif', 'E-mail atau Password salah');
                redirect('auth'); /* need to modified */
          }
        
        } else {
                $this->session->set_flashdata('notif', 'Salah satu inputan kosong');
                redirect('auth'); /* need to modified */
        }
        
  
      }
    
      public function logout()
    {
      $this->session->sess_destroy();
      redirect('auth');
    }
}

/* End of file Auth.php */

?>