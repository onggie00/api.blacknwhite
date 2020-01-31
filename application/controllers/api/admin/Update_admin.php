<?php
header('Access-Control-Allow-Origin: *');
date_default_timezone_set('Asia/Jakarta');
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';

class Update_admin extends REST_Controller {

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
        $nama_lengkap = $this->post('nama_lengkap');
        $notelp = $this->post('notelp');
        $username = $this->post('username');
        $password = md5($this->post('password'));
        $updated_at = date("Y-m-d H:i:s");

        $data = array(
          "nama_lengkap" => $nama_lengkap,
          "notelp" => $notelp,
          "username" => $username,
          "password" => $password,
          "updated_at" => $updated_at
        );
            
        $this->mymodel->update('admin',$data,'id',$id);

        if (!empty($data)) {
          $msg = array('status' => 1, 'message'=>'Berhasil Ubah data');
        }else {
          $msg = array('status' => 0, 'message'=>'Data tidak ditemukan');
        }
        $this->response($msg);

        
  }


}
