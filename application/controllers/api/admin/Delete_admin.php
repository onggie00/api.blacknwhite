<?php
header('Access-Control-Allow-Origin: *');
date_default_timezone_set('Asia/Jakarta');
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';

class Delete_admin extends REST_Controller {

  function __construct($config = 'rest') {
      parent::__construct($config);
  }

  function index_post() {
      $token = "";
      $headers=array();
      foreach (getallheaders() as $name => $value) {
          $headers[$name] = $value;
      }
      if(isset($headers['token']))
        $token =  $headers['token'];

        //$mem = $this->mymodel->getbywhere('user','token',$token,"row");
        $id = $this->post('id');
        $status = "1";

        $data = array(
          "status" => $status
        );
            
        $this->mymodel->update('admin',$data,'id',$id);

        if (!empty($data)) {
          $msg = array('status' => 1, 'message'=>'Berhasil Hapus data');
        }else {
          $msg = array('status' => 0, 'message'=>'Data tidak ditemukan');
        }
        $this->response($msg);

        
  }


}
