<?php
date_default_timezone_set('Asia/Jakarta');

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';

class Broadcast extends REST_Controller {
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

      if ($token != '') {
          $mem = $this->mymodel->getbywhere('user','token',$token,"row");
          if (isset($mem)) {

            $page = $this->get('page');
            if ( $page < 1) { $page=1; }
            $total = $this->get('total');
            $start = ($page - 1) * $total;
            $data = $this->mymodel->getbywherelimitsort('broadcast','1','1',$start,$total,'created_at','desc');
            if (!empty($data)) {
              $msg = array('status' => 1, 'message'=>'Berhasil ambil data' ,'data'=>$data);
            }else {
              $msg = array('status' => 0, 'message'=>'Data tidak ditemukan' ,'data'=>array());
            }
          }else {
              $msg = array('status' => 0, 'message'=>'Token Tidak Ditemukan ');
          }

          $this->response($msg);
      }else {
        $data = array();
        $msg = array('status' => 0, 'message'=>'Token anda kosong');
        $this->response($msg);
      }
    }
}
