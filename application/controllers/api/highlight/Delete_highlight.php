<?php
header('Access-Control-Allow-Origin: *');
date_default_timezone_set('Asia/Jakarta');
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';

class Delete_highlight extends REST_Controller {

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
        $msg="";

      $get_gambar = $this->mymodel->getbywhere('highlight','id',$id,'row');
      if ($get_gambar->img_file!="kosong.png") {
        unlink('./assets/img/highlight/'.$get_gambar->img_file);
      }
      $data= array(
        "status" => "1"
        );
      $this->mymodel->update('highlight',$data, 'id',$id);
      $this->response($msg);        
  }


}
?>
