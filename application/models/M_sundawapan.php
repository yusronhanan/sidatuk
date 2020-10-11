<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_sundawapan extends CI_Model {

    public function add(){
         
        $data = array(
           'kodeTender' => $this->input->post('kodeTender'), // 2
           'namaPaket' => $this->input->post('namaPaket'),
           'metodePengadaan' => $this->input->post('metodePengadaan'),
           'nilaiPagu' => $this->input->post('nilaiPagu'),
           
           'nilaiHPS' => $this->input->post('nilaiHPS'), //6
           'nilaiKontrak' => $this->input->post('nilaiKontrak'),
           'tanggalPermohonanLelang' => $this->input->post('tanggalPermohonanLelang'),
           'nomorPermohonanLelang' => $this->input->post('nomorPermohonanLelang'),
           'rencanaProsesPengadaan' => $this->input->post('rencanaProsesPengadaan'),

           'tahapTender' => $this->input->post('tahapTender'), //11
           'mulaiLelangRencana' => $this->input->post('mulaiLelangRencana'),
           'selesaiLelangRencana' => $this->input->post('selesaiLelangRencana'),
           'mulaiLelangRealisasi' => $this->input->post('mulaiLelangRealisasi'),
           'selesaiLelangRealisasi' => $this->input->post('selesaiLelangRealisasi'),

           'alasanPerubahanJadwal' => $this->input->post('alasanPerubahanJadwal'), //16
           'gagalLelang1' => $this->input->post('gagalLelang1'),
           'alasanGagalLelang1' => $this->input->post('alasanGagalLelang1'),
           'mulaiJadwalLelangUlangRencana' => $this->input->post('mulaiJadwalLelangUlangRencana'),
           'selesaiJadwalLelangUlangRencana' => $this->input->post('selesaiJadwalLelangUlangRencana'),

           'mulaiJadwalLelangUlangRealisasi' => $this->input->post('mulaiJadwalLelangUlangRealisasi'), //21
           'selesaiJadwalLelangUlangRealisasi' => $this->input->post('selesaiJadwalLelangUlangRealisasi'),
           'alasanPerubahanJadwalLelangUlang' => $this->input->post('alasanPerubahanJadwalLelangUlang'),
           'gagalLelang2' => $this->input->post('gagalLelang2'),
           'alasanGagalLelang2' => $this->input->post('alasanGagalLelang2'),

           'penunjukanLangsung' => $this->input->post('penunjukanLangsung'), //26
           'nomorSPPBJTanggal' => $this->input->post('nomorSPPBJTanggal'),
           'alasanSPPBJUndur' => $this->input->post('alasanSPPBJUndur'),
           'nomorSPKTanggal' => $this->input->post('nomorSPKTanggal'),
           'alasanSPKUndur' => $this->input->post('alasanSPKUndur')
       );

       $this->db->insert('sundawapan', $data);
       return ($this->db->affected_rows() > 0); /* if success return true, false otherwise  */
   }

   public function edit($id){
         
    $data = array(
       'kodeTender' => $this->input->post('kodeTender'), // 2
       'namaPaket' => $this->input->post('namaPaket'),
       'metodePengadaan' => $this->input->post('metodePengadaan'),
       'nilaiPagu' => $this->input->post('nilaiPagu'),
       
       'nilaiHPS' => $this->input->post('nilaiHPS'), //6
       'nilaiKontrak' => $this->input->post('nilaiKontrak'),
       'tanggalPermohonanLelang' => $this->input->post('tanggalPermohonanLelang'),
       'nomorPermohonanLelang' => $this->input->post('nomorPermohonanLelang'),
       'rencanaProsesPengadaan' => $this->input->post('rencanaProsesPengadaan'),

       'tahapTender' => $this->input->post('tahapTender'), //11
       'mulaiLelangRencana' => $this->input->post('mulaiLelangRencana'),
       'selesaiLelangRencana' => $this->input->post('selesaiLelangRencana'),
       'mulaiLelangRealisasi' => $this->input->post('mulaiLelangRealisasi'),
       'selesaiLelangRealisasi' => $this->input->post('selesaiLelangRealisasi'),

       'alasanPerubahanJadwal' => $this->input->post('alasanPerubahanJadwal'), //16
       'gagalLelang1' => $this->input->post('gagalLelang1'),
       'alasanGagalLelang1' => $this->input->post('alasanGagalLelang1'),
       'mulaiJadwalLelangUlangRencana' => $this->input->post('mulaiJadwalLelangUlangRencana'),
       'selesaiJadwalLelangUlangRencana' => $this->input->post('selesaiJadwalLelangUlangRencana'),

       'mulaiJadwalLelangUlangRealisasi' => $this->input->post('mulaiJadwalLelangUlangRealisasi'), //21
       'selesaiJadwalLelangUlangRealisasi' => $this->input->post('selesaiJadwalLelangUlangRealisasi'),
       'alasanPerubahanJadwalLelangUlang' => $this->input->post('alasanPerubahanJadwalLelangUlang'),
       'gagalLelang2' => $this->input->post('gagalLelang2'),
       'alasanGagalLelang2' => $this->input->post('alasanGagalLelang2'),

       'penunjukanLangsung' => $this->input->post('penunjukanLangsung'), //26
       'nomorSPPBJTanggal' => $this->input->post('nomorSPPBJTanggal'),
       'alasanSPPBJUndur' => $this->input->post('alasanSPPBJUndur'),
       'nomorSPKTanggal' => $this->input->post('nomorSPKTanggal'),
       'alasanSPKUndur' => $this->input->post('alasanSPKUndur')
   );

   $this->db->where('idSundawapan',$id)->update('sundawapan', $data);
   return ($this->db->affected_rows() > 0); /* if success return true, false otherwise  */
}

    public function delete($id){
        $this->db->where('idSundawapan',$id)
                ->delete('sundawapan');
                
        return ($this->db->affected_rows() > 0); /* if success return true, false otherwise  */
    }
}



/* End of file M_sundawapan.php */


?>