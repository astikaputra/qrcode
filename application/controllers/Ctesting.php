<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Ctesting extends CI_Controller{
    
    function __construct(){
        parent::__construct();
       $this->load->model(array('M_Ctesting'  => 'screening'));
    }
 
    function index(){
      $this->load->view('v_home');
    }
    function simpan(){
        $status_pasien=$this->input->post('status_pasien');
        $jenis_kelamin=$this->input->post('jenis_kelamin');
        $nama=$this->input->post('nama');
        $jenis_identitas=$this->input->post('jenis_identitas');
        $nomor_identitas=$this->input->post('nomor_identitas');
        $tempat_lahir=$this->input->post('tempat_lahir');
        $tanggal_lahir=$this->input->post('tanggal_lahir');
        $umur=$this->input->post('umur');
        $no_tel=$this->input->post('no_tel');        
        $alamat=$this->input->post('alamat');
        $suhu=$this->input->post('suhu');
        $gejala=$this->input->post('gejala');
        $diagnosa=$this->input->post('diagnosa');
        $type_bayar=$this->input->post('type_bayar');
        $status=$this->input->post('status');
        $update_on=$this->input->post('update_on');
        $update_by=$this->input->post('update_by');

        $this->screening->simpan_screening($status_pasien,$jenis_kelamin,$nama,$jenis_identitas,$nomor_identitas,$tempat_lahir,$tanggal_lahir,$umur,$no_tel,$alamat,$suhu,$gejala,$diagnosa,$type_bayar,$status,$update_on,$update_by); //simpan ke database
        redirect('ctesting'); //redirect ke pegawai usai simpan data
    }
   

}