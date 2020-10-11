<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class M_tahapanPersiapan extends CI_Model {

    public function add($file){
         
        $data = array(
           'tipe' => $this->input->post('tipe'), //jgn lupa tambah input hidden di form
           'uraian' => $this->input->post('uraian'),
           'status' => $this->input->post('status'),
           'keterangan' => $this->input->post('keterangan')
        );
        if($file['file_name']!=""){
            $data['fileName'] = $file['file_name'];
        }
       $this->db->insert('tahapanpersiapan', $data);
       return ($this->db->affected_rows() > 0); /* if success return true, false otherwise  */
   }

   public function edit($id, $file){
         
    $data = array(
       'uraian' => $this->input->post('uraian'),
       'status' => $this->input->post('status'),
       'keterangan' => $this->input->post('keterangan')
    );
    
    if($this->input->post('status') == "Ya"){
        $data['keterangan'] = null;
        if($file['file_name']!=""){
            $data['fileName'] = $file['file_name'];
        }
    } else{
        $data['keterangan'] = $this->input->post('keterangan');
        $data['fileName'] = null;
    }
    
    $this->db->where('idPersiapan',$id)->update('tahapanpersiapan', $data);
    return ($this->db->affected_rows() > 0); /* if success return true, false otherwise  */
    }

    public function delete($id){
        $this->db->where('idPersiapan',$id)
                ->delete('tahapanpersiapan');
                
        return ($this->db->affected_rows() > 0); /* if success return true, false otherwise  */
    }

}

/* End of file M_tahapanPersiapan.php */


?>