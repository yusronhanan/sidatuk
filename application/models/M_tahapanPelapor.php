<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class M_tahapanPelapor extends CI_Model {

    public function add($file){
         
        $data = array(
           'tipe' => $this->input->post('tipe'), //jgn lupa tambah input hidden di form
           'uraian' => $this->input->post('uraian')
        );
        if($file['file_name']!=""){
            $data['fileName'] = $file['file_name'];
        }
       $this->db->insert('tahapanpelapor', $data);
       return ($this->db->affected_rows() > 0); /* if success return true, false otherwise  */
   }

   public function edit($id, $file){
         
    $data = array(
       'uraian' => $this->input->post('uraian')
    );
    
    if($file['file_name']!=""){
        $data['fileName'] = $file['file_name'];
    }
    
    $this->db->where('idPelapor',$id)->update('tahapanpelapor', $data);
    return ($this->db->affected_rows() > 0); /* if success return true, false otherwise  */
    }

    public function delete($id){
        $this->db->where('idPelapor',$id)
                ->delete('tahapanpelapor');
                
        return ($this->db->affected_rows() > 0); /* if success return true, false otherwise  */
    }

}

/* End of file M_tahapanPelapor.php */


?>