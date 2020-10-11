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
		$this->load->view('v_login');
    
    }

    public function login(){
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        
        
        if ($this->form_validation->run() == TRUE) {
          if($this->M_auth->login()){
                 $user = $this->M_home->getData(array("email"=>$this->input->post("email")), "user")->row();
                  $session_data = array(
                    'id' => $user->idUser,
                    'nip' => $user->nip,
                    'nama' => $user->nama,
                    'email' => $user->email,
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