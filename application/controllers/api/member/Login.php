<?php
header("Access-Control-Allow-Origin: https://bnwbarbershop.com");
date_default_timezone_set('Asia/Jakarta');

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';

class Login extends REST_Controller {
    function __construct()
    {
        parent::__construct();
    }
    public function index_post()
    {
      $token = "";
      $headers=array();
      foreach (getallheaders() as $name => $value) {
          $headers[$name] = $value;
      }
      if(isset($headers['token']))
        $token =  $headers['token'];

        $notelp = $this->post('notelp');
        $password = md5($this->post('password'));
        $data = "";
        $msg="kosong";

        $mem = $this->mymodel->getbywhere('member',"notelp='".$notelp."' and status=",'0','row');
        if (!empty($mem)) {
          $login = $this->mymodel->getbywhere('member',"notelp='".$notelp."' and password=",$password,'row');
          if (!empty($login)) {
            $data_login = array(
              "last_login" => date("Y-m-d H:i:s")
              );
              $up = $this->mymodel->update('member',$data_login,'notelp',$notelp);
              $msg = array('status' => 1, 'message'=>'Login Sukses' ,'data'=>$login);  
          }else{
            $msg = array('status' => 0, 'message'=>'Password Salah');
          }
        }else{
          $msg = array('status' => 0, 'message'=>'Nomor Telepon Tidak Terdaftar.');
        }
        $this->response($msg);
    }
}
