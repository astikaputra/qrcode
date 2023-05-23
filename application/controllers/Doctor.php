<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Doctor extends CI_Controller{
    
    function __construct(){
        parent::__construct();
        $this->load->model(array('M_Doctor'  => 'MD'));
    }
 
    function index(){
        $data['data']=$this->MD->get_all_Doctor();
        $this->load->view('v_doctor',$data);
    }
 
    function simpan(){
        $nip=$this->input->post('nip');
        $nama_Doctor=$this->input->post('nama_Doctor');
        $url=$this->input->post('url');
 
        // $this->load->library('ciqrcode'); //pemanggilan library QR CODE
 
        // $config['cacheable']    = true; //boolean, the default is true
        // $config['cachedir']     = './assets/'; //string, the default is application/cache/
        // $config['errorlog']     = './assets/'; //string, the default is application/logs/
        // $config['imagedir']     = './assets/images/'; //direktori penyimpanan qr code
        // $config['quality']      = true; //boolean, the default is true
        // $config['size']         = '1024'; //interger, the default is 1024
        // $config['black']        = array(224,255,255); // array, default is array(255,255,255)
        // $config['white']        = array(70,130,180); // array, default is array(0,0,0)
        // $this->ciqrcode->initialize($config);
 
        // $image_name=$nip.'.png'; //buat name dari qr code sesuai dengan nip
 
        // $params['data'] = $url; //data yang akan di jadikan QR CODE
        // $params['level'] = 'H'; //H=High
        // $params['size'] = 10;
        // $params['savename'] = FCPATH.$config['imagedir'].$image_name; //simpan image QR CODE ke folder assets/images/
        // $this->ciqrcode->generate($params); // fungsi untuk generate QR CODE
 
        $this->Doctor->simpan_Doctor($nip,$nama_Doctor,$url,$image_name); //simpan ke database
        redirect('Doctor'); //redirect ke Doctor usai simpan data
         }

        // function proses_edit_qrcode($Doctor_id){
        //     $this->Doctor->proses_edit_qrcode($image_name);
        // }

        function pdf(){    

        $this->load->library('dompdf_gen');
        $data['Doctor'] = $this->Doctor->tampil_data("Doctor")->result();
        //$this->load->view('print_Doctor', $data);

        $this->load->view('laporan_pdf',$data);


        $paper_size = 'A4';
        $orientation = 'potrait';
        $dompdf     = new Dompdf(array('enable_remote' => true));

        $html = $this->output->get_output();
        
        $this->dompdf->set_paper($paper_size, $orientation);

        $this->dompdf->load_html($html);

        $this->dompdf->render();
        $this->dompdf->stream("data_Doctor.pdf", array('Attachment' =>0));
    }

      function print_Doctor(){

        $data['Doctor'] = $this->Doctor->tampil_data("Doctor")->result();

        $this->load->view('v_print',$data);
    }

    function print_doctor_detail($id){


        $queryDoctorDetail = $this->Doctor->getDoctorDetail($id);
        $DATA =  array('queryDocDetail' => $queryDoctorDetail);
        // echo "<pre>";
        // print_r($queryDoctorDetail);
        // echo"</pre>";
        $this->load->view('v_detail_doctor_pdf', $DATA);


        $this->load->library('dompdf_gen');
        // $queryDoctorDetail = $this->Doctor->getDoctorDetail($Doctor_id);
        // $data =  array('queryPgwDetail' => $queryDoctorDetail);

        //Mengambil data url untuk di jadikan barcode
        //$dataBarcode = current_url();

        // echo "<pre>";
        // print_r($dataBarcode);
        // echo"</pre>";


        // $this->load->library('ciqrcode'); //pemanggilan library QR CODE
 
        // $config['cacheable']    = true; //boolean, the default is true
        // $config['cachedir']     = './assets/'; //string, the default is application/cache/
        // $config['errorlog']     = './assets/'; //string, the default is application/logs/
        // $config['imagedir']     = './assets/images/'; //direktori penyimpanan qr code
        // $config['quality']      = true; //boolean, the default is true
        // $config['size']         = '1024'; //interger, the default is 1024
        // $config['black']        = array(224,255,255); // array, default is array(255,255,255)
        // $config['white']        = array(70,130,180); // array, default is array(0,0,0)
        // $this->ciqrcode->initialize($config);
 
        // $image_name=$Doctor_id.'.png'; //buat name dari qr code sesuai dengan nip
 
        // $params['data'] = $dataBarcode; //data yang akan di jadikan QR CODE
        // $params['level'] = 'H'; //H=High
        // $params['size'] = 10;
        // $params['savename'] = FCPATH.$config['imagedir'].$image_name; //simpan image QR CODE ke folder assets/images/
        // $this->ciqrcode->generate($params); // fungsi untuk generate QR CODE

       // $this->load->view('v_detail_Doctor_pdf',$data);


        $paper_size = 'A4';
        $orientation = 'potrait';
        $dompdf     = new Dompdf(array('enable_remote' => true));

        $html = $this->output->get_output();
        
        $this->dompdf->set_paper($paper_size, $orientation);

        $this->dompdf->load_html($html);

        $this->dompdf->render();
        $this->dompdf->stream("data_Doctor.pdf", array('Attachment' =>0));

    }


    function generate_barcode($Doctor_id){
        $queryDoctorDetail = $this->Doctor->getDoctorDetail($Doctor_id);
        $DATA =  array('queryPgwDetail' => $queryDoctorDetail);

        //mengambil link url saat digenerate jadi qrcode
        $dataBarcode = current_url();

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
 
        $image_name=$Doctor_id.'.png'; //buat name dari qr code sesuai dengan nip
 
        $params['data'] = $dataBarcode; //data yang akan di jadikan QR CODE
        $params['level'] = 'H'; //H=High
        $params['size'] = 10;
        $params['savename'] = FCPATH.$config['imagedir'].$image_name; //simpan image QR CODE ke folder assets/images/
        $this->ciqrcode->generate($params); // fungsi untuk generate QR CODE

        //Edit table qrcode setelah generate barcode
        $this->Doctor->proses_edit_qrcode($Doctor_id, $image_name);
      

        $this->load->view('v_view', $DATA);

    }
    function detail_doctor($id){
        $queryDoctorDetail = $this->MD->getDoctorDetail($id);
        
        $DATA =  array('queryDocDetail' => $queryDoctorDetail);
       
        // $queryDoctorContribution = $this->Doctor->getDoctorContribution($id);

        // $DATA =  array('queryDocContribution' => $queryDoctorContribution);

        
        $this->load->view('v_detail_doctor', $DATA);

    }


}