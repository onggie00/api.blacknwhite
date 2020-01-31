<?php
header('Access-Control-Allow-Origin: *');
date_default_timezone_set('Asia/Jakarta');
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';

class Insert_rating_model extends REST_Controller {

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
        $member_id = $this->post('member_id');
        $style_id = $this->post('style_id');

        $data = array(
          "member_id" => $member_id,
          "style_id" => $style_id
        );
            
        $this->mymodel->insert('rating_model',$data);

        if (!empty($data)) {
          $msg = array('status' => 1, 'message'=>'Berhasil Tambah Model Favorit');
        }else {
          $msg = array('status' => 0, 'message'=>'Data tidak valid');
        }
        $this->response($msg);
  }


}
