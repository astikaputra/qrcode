<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Ctesting extends CI_Controller{
    
    function __construct(){
        parent::__construct();
        $this->load->model(array('M_Ctesting'  => 'm_ctesting'));
    }
 
    function index(){
      $this->load->view('v_ctesting');
    }
 
   

}