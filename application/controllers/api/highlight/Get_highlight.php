<?php
header("Access-Control-Allow-Origin: *");
date_default_timezone_set('Asia/Jakarta');

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';

class Get_highlight extends REST_Controller {
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

        $highlight = $this->mymodel->getbywhere('highlight','status','0','result');
        foreach ($highlight as $key => $value) {
          if ($value->img_file == "") {
            $value->img_file = "kosong.png";
          }
        }
        
        $msg = array('status' => 1, 'message'=>'Berhasil ambil data' ,'data'=>$highlight);
        $this->response($msg);
    }
}
