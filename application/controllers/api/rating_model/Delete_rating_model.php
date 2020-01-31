<?php
header('Access-Control-Allow-Origin: *');
date_default_timezone_set('Asia/Jakarta');
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';

class Delete_rating_model extends REST_Controller {

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
        $id = $this->post('style_id');
        $member_id = $this->post('member_id');
            
        $up = $this->mymodel->delete('rating_model',"member_id='".$member_id."' and style_id=",$id);

        if ($up) {
          $msg = array('status' => 1, 'message'=>'Berhasil Unfavorite');
        }else {
          $msg = array('status' => 0, 'message'=>'Data tidak ditemukan');
        }
        $this->response($msg);
  }


}
