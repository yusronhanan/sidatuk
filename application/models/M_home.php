<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class M_home extends CI_Model {

    public function getAllData($table)
    {
        return $this->db->get($table)->result();
    }
    
    public function getData($where,$table)
    {
        return $this->db->where($where)
                        ->get($table);
    }

    public function getAllDataTahapan($tipe,$table)
    {
        return $this->db->where("tipe",$tipe)
                        ->get($table)->result();
    }

}

/* End of file M_home.php */


?>