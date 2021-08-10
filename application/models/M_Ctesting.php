<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_Ctesting extends CI_Model{
 
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    function get_all_screening(){
        $hasil=$this->db->get('screening');
        return $hasil;
    }
     
   function simpan_screening($status_pasien,$jenis_kelamin,$nama,$jenis_identitas,$nomor_identitas,$tempat_lahir,$tanggal_lahir,$umur,$no_tel,$alamat,$suhu,$gejala,$diagnosa,$type_bayar,$status,$update_on,$update_by){
    // function simpan_screening($status_pasien,$jenis_kelamin,$nama,$jenis_identitas,$nomor_identitas,$tempat_lahir,$tanggal_lahir,$umur,$no_tel,$alamat,$gejala,$suhu,$diagnosa,$type_bayar,$status){
        $data = array(
            'status_pasien'       => $status_pasien,
            'jenis_kelamin'      => $jenis_kelamin,
            'nama'      => $nama,
            'jenis_identitas'   => $jenis_identitas,
            'nomor_identitas'       => $nomor_identitas,
            'tempat_lahir'      => $tempat_lahir,
            'tanggal_lahir'      => $tanggal_lahir,
            'umur'   => $umur,
            'no_tel'      => $no_tel,
            'alamat'   => $alamat,
            'suhu'       => $suhu,
            'gejala'      => $gejala,
            'diagnosa'      => $diagnosa,
            'type_bayar'   => $type_bayar,
            'status'   => $status,
            'update_on'       => $update_on,
            'update_by'      => $update_by
        );
        $this->db->insert('screening',$data);
    }

    // function edit_data($where,$table){      
    //     return $this->db->get_where($table,$where);
    // }
    
    function tampil_data(){
        return $this->db->get('screening');
    }

    function getScreeningDetail($pegawai_id){
        $this->db->where('pegawai_id',$pegawai_id);
        $query = $this->db->get('pegawai');
        return $query->row();
    }

      function getTablename($pegawai_id){
        $this->db->where('pegawai_id',$pegawai_id);
        $query = $this->db->get('pegawai');
        return $query->row();
    }

    function proses_edit_qrcode($pegawai_id, $image_name) 
    {
       $data = array(
       'qr_code' => $image_name
       );

        $this->db->where('pegawai_id', $pegawai_id);
        $this->db->update('pegawai', $data);

  //  return;
    }
}