<?php
date_default_timezone_set('Asia/Jakarta');

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';

class About_img extends REST_Controller {
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

        $mem = $this->mymodel->getall('about_img');
        foreach ($mem as $key => $value) {
          $value->img = base_url('assets/img/about_rsb_img/'.$value->img);
        }
        $msg = array('status' => 1, 'message'=>'Berhasil ambil data' ,'data'=>$mem);
        $this->response($msg);
    }
}
