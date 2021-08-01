<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_Pegawai extends CI_Model{
 
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    function get_all_pegawai(){
        $hasil=$this->db->get('pegawai');
        return $hasil;
    }
     
    function simpan_pegawai($nip,$nama_pegawai,$url,$image_name){
        $data = array(
            'nip'       => $nip,
            'nama_pegawai'      => $nama_pegawai,
            'url'      => $url,
            'qr_code'   => $image_name
        );
        $this->db->insert('pegawai',$data);
    }

    // function edit_data($where,$table){      
    //     return $this->db->get_where($table,$where);
    // }
    
        function tampil_data(){
        return $this->db->get('pegawai');
    }

    function getPegawaiDetail($pegawai_id){
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