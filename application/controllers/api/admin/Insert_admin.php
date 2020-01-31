<?php
header('Access-Control-Allow-Origin: *');
date_default_timezone_set('Asia/Jakarta');
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';

class Insert_admin extends REST_Controller {

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
        $nama_lengkap = $this->post('nama_lengkap');
        $notelp = $this->post('notelp');
        $username = $this->post('username');
        $password = md5($this->post('password'));
        $created_at = date("Y-m-d H:i:s");
        $status = "0";

        $data = array(
          "nama_lengkap" => $nama_lengkap,
          "notelp" => $notelp,
          "username" => $username,
          "password" => $password,
          "created_at" => $created_at,
          "status" => $status
        );
            
        $this->mymodel->insert('admin',$data);

        if (!empty($data)) {
          $msg = array('status' => 1, 'message'=>'Berhasil Tambah data');
        }else {
          $msg = array('status' => 0, 'message'=>'Data tidak valid');
        }
        $this->response($msg);

        
  }


}
