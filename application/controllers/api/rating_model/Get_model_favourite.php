<?php
header("Access-Control-Allow-Origin: *");
date_default_timezone_set('Asia/Jakarta');

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';

class Get_model_favourite extends REST_Controller {
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

      $id = $this->get('member_id');

      $get_all_model = $this->mymodel->getbywhere('model_rambut','status','0','result');
      //$rating_model = $this->mymodel->getbywhere('rating_model','member_id',$id,'result');
      $data = array();
      foreach ($get_all_model as $key => $value) {
        $fav = $this->mymodel->getbywhere('rating_model',"member_id='".$id."' and style_id=",$value->id,'result');
        if (!empty($fav)) {
          $value->status_fav = "1";
        }else{
          $value->status_fav = "0";
        }
        $value->nama_kategori = $this->mymodel->getbywhere('category_model','id',$value->category_id,'row')->nama;
      }
        $msg = array('status' => 1, 'message'=>'Berhasil ambil data' ,'data'=>$get_all_model);
        
        $this->response($msg);
    }
}
