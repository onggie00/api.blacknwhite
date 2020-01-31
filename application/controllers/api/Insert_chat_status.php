<?php
date_default_timezone_set('Asia/Jakarta');
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';

class Insert_chat_status extends REST_Controller {

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

        if ($token != '') {
            $mem = $this->mymodel->getbywhere('user','token',$token,"row");
            $id_chat = $this->post('id_chat');
            $id_chat_category = $this->post('id_chat_category');
            $id_user = $mem->id_user;

            if (isset($mem)) {
            $data = array(
              "id_chat" => $id_chat,
              "id_chat_category" => $id_chat_category,
              "id_user" =>  $mem->id_user
              );
            
            $this->mymodel->insert('chat_status',$data);

              if (!empty($data)) {
                $msg = array('status' => 1, 'message'=>'Berhasil ambil data');
              }else {
                $msg = array('status' => 0, 'message'=>'Data tidak ditemukan');
              }
            }else {
                $msg = array('status' => 0, 'message'=>'Token Tidak Ditemukan ');
            }
              header('token: '.$token);
            $this->response($msg);

        }else {
          $data = array();
          $msg = array('status' => 0, 'message'=>'Token anda kosong','data'=>'');
          $this->response($msg);
        }
  }


}
