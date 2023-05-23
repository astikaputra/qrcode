<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_Doctor extends CI_Model{
 
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    function get_all_doctor(){
        //$this->db->where('status',$status);
       // $hasil=$this->db->get('doctor_master');
       $hasil = $this->db->query("SELECT  b.id, b.code, b.name, b.specialist, a.procedure_room_rental AS surgery, a.drugs, a.laboratory, a.radiology, b.join_date, b.sip_exp_date AS sip, b.credential_valid, b.status, c.opd, c.ipd, d.total_practice_hour, e.ontime, e.walkin FROM doctor_contribution a, doctor_master b, doctor_throughput c, doctor_status d, doctor_waiting_time e where a.`code` = b.`code` and  b.`code`= c.`code` and  b.`code`= d.`code` and  b.`code`= e.`code`");
      return $hasil;
    }
     
    function simpan_doctor($nip,$nama_pegawai,$url,$image_name){
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

    function getDoctorDetail($id){
       // $this->db->where('id',$id);
        $query = $this->db->query("SELECT  b.id, b.code, b.name, b.specialist, a.procedure_room_rental AS surgery, a.drugs, a.laboratory, a.radiology, b.join_date, b.sip_exp_date AS sip, b.credential_valid, b.status, c.opd, c.ipd, d.total_practice_hour, e.ontime, e.walkin FROM doctor_contribution a, doctor_master b, doctor_throughput c, doctor_status d, doctor_waiting_time e where a.`code` = b.`code` and  b.`code`= c.`code` and  b.`code`= d.`code` and  b.`code`= e.`code` and  b.`id` = '".$id."' ");
        return $query->row();
    }

    function getDoctorDetail1($id){
        $this->db->where('id',$id);
        $query = $this->db->get('doctor_master');
        return $query->row();
    }

    function getDoctorContribution($id){
        $this->db->where('id',$id);
        $query = $this->db->get('doctor_contribution');
        return $query->row();
    }



    
      function getTablename($id){
        $this->db->where('pegawai_id',$id);
        $query = $this->db->get('doctor_master');
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