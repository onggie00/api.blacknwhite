<?php
header("Access-Control-Allow-Origin: *");
date_default_timezone_set('Asia/Jakarta');

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';

class Get_model_rambut_by_category extends REST_Controller {
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

        $category_id = $this->get('category_id');
        $model_rambut = $this->mymodel->getbywhere('model_rambut',"category_id='".$category_id."' and status=",'0','result');
        foreach ($model_rambut as $key => $value) {
          if ($value->img_file =="") {
            $value->img_file = "kosong.png";
          }
          $value->category_name = $this->mymodel->getbywhere('category_model','id',$value->category_id,'row')->nama;
        }
        
        $msg = array('status' => 1, 'message'=>'Berhasil ambil data' ,'data'=>$model_rambut);
        $this->response($msg);
    }
}
