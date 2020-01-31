<?php
header("Access-Control-Allow-Origin: https://bnwbarbershop.com");
date_default_timezone_set('Asia/Jakarta');

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';

class Cek_member extends REST_Controller {
    function __construct()
    {
        parent::__construct();
    }
    public function index_get()
    {
      $token = "";
      $headers=array();
      foreach (getallheaders() as $name => $value) {
          $headers[$name] = $value;
      }
      if(isset($headers['token']))
        $token =  $headers['token'];

        $notelp = $this->get('notelp');

        $mem = $this->mymodel->getbywhere('member',"notelp='".$notelp."' and status=",'0','result');
        
        if (!empty($mem)) {
          $msg = array('status' => 1, 'message'=>'Data Sudah Terdaftar' ,'data'=>$mem);
        }else{
          $msg = array('status' => 0, 'message'=>'Data Masih Kosong');
        }
        $this->response($msg);
    }
}
