<?php
header("Access-Control-Allow-Origin: *");
date_default_timezone_set('Asia/Jakarta');

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';

class Get_barbershop extends REST_Controller {
    function __construct()
    {
        parent::__construct();
    }
    public function index_get(){
      $token = "";
      $headers=array();
      foreach (getallheaders() as $name => $value) {
          $headers[$name] = $value;
      }
      if(isset($headers['token']))
        $token =  $headers['token'];

        $barbershop = $this->mymodel->getall('barbershop');
        foreach ($barbershop as $key => $value) {
          if ($value->updated_at==null) {
            $value->updated_at = "Kosong";
          }
        }
        
        $msg = array('status' => 1, 'message'=>'Berhasil ambil data' ,'data'=>$barbershop);
        $this->response($msg);
    }
}
