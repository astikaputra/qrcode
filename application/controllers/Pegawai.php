<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Pegawai extends CI_Controller{
    
    function __construct(){
        parent::__construct();
        $this->load->model(array('M_Pegawai'  => 'pegawai'));
    }
 
    function index(){
        $data['data']=$this->pegawai->get_all_pegawai();
        $this->load->view('v_pegawai',$data);
    }
 
    function simpan(){
        $nip=$this->input->post('nip');
        $nama_pegawai=$this->input->post('nama_pegawai');
        $url=$this->input->post('url');
 
        $this->load->library('ciqrcode'); //pemanggilan library QR CODE
 
        $config['cacheable']    = true; //boolean, the default is true
        $config['cachedir']     = './assets/'; //string, the default is application/cache/
        $config['errorlog']     = './assets/'; //string, the default is application/logs/
        $config['imagedir']     = './assets/images/'; //direktori penyimpanan qr code
        $config['quality']      = true; //boolean, the default is true
        $config['size']         = '1024'; //interger, the default is 1024
        $config['black']        = array(224,255,255); // array, default is array(255,255,255)
        $config['white']        = array(70,130,180); // array, default is array(0,0,0)
        $this->ciqrcode->initialize($config);
 
        $image_name=$nip.'.png'; //buat name dari qr code sesuai dengan nip
 
        $params['data'] = $url; //data yang akan di jadikan QR CODE
        $params['level'] = 'H'; //H=High
        $params['size'] = 10;
        $params['savename'] = FCPATH.$config['imagedir'].$image_name; //simpan image QR CODE ke folder assets/images/
        $this->ciqrcode->generate($params); // fungsi untuk generate QR CODE
 
        $this->pegawai->simpan_pegawai($nip,$nama_pegawai,$url,$image_name); //simpan ke database
        redirect('pegawai'); //redirect ke pegawai usai simpan data
    }

     function pdf(){
      

        $this->load->library('dompdf_gen');
        $data['pegawai'] = $this->pegawai->tampil_data("pegawai")->result();
        //$this->load->view('print_pegawai', $data);

        $this->load->view('laporan_pdf',$data);


        $paper_size = 'A4';
        $orientation = 'potrait';
        $dompdf     = new Dompdf(array('enable_remote' => true));

        $html = $this->output->get_output();
        
        $this->dompdf->set_paper($paper_size, $orientation);

        $this->dompdf->load_html($html);

        $this->dompdf->render();
        $this->dompdf->stream("data_pegawai.pdf", array('Attachment' =>0));
    }

      function print_pegawai(){

        $data['pegawai'] = $this->pegawai->tampil_data("pegawai")->result();

        $this->load->view('v_print',$data);
    }

    function print_pegawai_detail($pegawai_id){
        // $queryPegawaiDetail = $this->pegawai->getPegawaiDetail($pegawai_id);
        // $DATA =  array('queryPgwDetail' => $queryPegawaiDetail);
        // // echo "<pre>";
        // // print_r($queryPegawaiDetail);
        // // echo"</pre>";
        // $this->load->view('v_detail_pegawai_pdf', $DATA);


        $this->load->library('dompdf_gen');
        $queryPegawaiDetail = $this->pegawai->getPegawaiDetail($pegawai_id);
        $data =  array('queryPgwDetail' => $queryPegawaiDetail);

        //Mengambil data url untuk di jadikan barcode
        $dataBarcode = current_url();

        // echo "<pre>";
        // print_r($dataBarcode);
        // echo"</pre>";


        $this->load->library('ciqrcode'); //pemanggilan library QR CODE
 
        $config['cacheable']    = true; //boolean, the default is true
        $config['cachedir']     = './assets/'; //string, the default is application/cache/
        $config['errorlog']     = './assets/'; //string, the default is application/logs/
        $config['imagedir']     = './assets/images/'; //direktori penyimpanan qr code
        $config['quality']      = true; //boolean, the default is true
        $config['size']         = '1024'; //interger, the default is 1024
        $config['black']        = array(224,255,255); // array, default is array(255,255,255)
        $config['white']        = array(70,130,180); // array, default is array(0,0,0)
        $this->ciqrcode->initialize($config);
 
        $image_name=$pegawai_id.'.png'; //buat name dari qr code sesuai dengan nip
 
        $params['data'] = $dataBarcode; //data yang akan di jadikan QR CODE
        $params['level'] = 'H'; //H=High
        $params['size'] = 10;
        $params['savename'] = FCPATH.$config['imagedir'].$image_name; //simpan image QR CODE ke folder assets/images/
        $this->ciqrcode->generate($params); // fungsi untuk generate QR CODE

        $this->load->view('v_detail_pegawai_pdf',$data);


        $paper_size = 'A4';
        $orientation = 'potrait';
        $dompdf     = new Dompdf(array('enable_remote' => true));

        $html = $this->output->get_output();
        
        $this->dompdf->set_paper($paper_size, $orientation);

        $this->dompdf->load_html($html);

        $this->dompdf->render();
        $this->dompdf->stream("data_pegawai.pdf", array('Attachment' =>0));

    }



}