<?php
header('Access-Control-Allow-Origin: *');
date_default_timezone_set('Asia/Jakarta');
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';

class Edit_profile extends REST_Controller {

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
        $alamat = $this->post('alamat');
        $updated_at = date("Y-m-d H:i:s");
        $data = array();

        if (!empty($this->post('password'))) {
          $data = array(
          "nama_lengkap" => $nama_lengkap,
          "notelp" => $notelp,
          "alamat" => $alamat,
          "password" => md5($this->post('password')),
          "updated_at" => $updated_at
          );
        }else{
          $data = array(
          "nama_lengkap" => $nama_lengkap,
          "notelp" => $notelp,
          "alamat" => $alamat,
          "updated_at" => $updated_at
        );
        }
            
        $this->mymodel->update('member',$data,'id',$id);
        $get_member = $this->mymodel->getbywhere("member",'id',$id,'row');

        if (!empty($data)) {
          $msg = array('status' => 1, 'message'=>'Berhasil Edit Profile','data'=>$get_member);
        }else {
          $msg = array('status' => 0, 'message'=>'Update Profile Gagal');
        }
        $this->response($msg);

        
  }


}
