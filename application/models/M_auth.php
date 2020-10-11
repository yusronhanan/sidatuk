<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class M_auth extends CI_Model {


    public function addUser()
    {
        /* Register, create account for client only */

        $data = array(
            'nip' => $this->input->post('nip'),
            'name' => $this->input->post('name'),
            'email' => $this->input->post('email'),
            'password' => $this->input->post('password'),
            'role' => $this->input->post('role')
        );

        $this->db->insert('user', $data);
		return ($this->db->affected_rows() > 0); /* if success return true, false otherwise  */
    }

    public function login()
    {
        $data = array(
            'email' => $this->input->post('email'),
            'password' => $this->input->post('password')
        );
        $query = $this->db->where($data)->get('user');
		return ($query->num_rows() > 0); /* if exist return true, false otherwise  */
    }

    public function checkEmail($email)
    {
        $query = $this->db->where('email',$email)->get('user');
		return ($query->num_rows() > 0); /* if exist return true, false otherwise  */
    }
}

/* End of file M_auth.php */


?>