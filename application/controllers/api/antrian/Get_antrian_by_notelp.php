<?php
header("Access-Control-Allow-Origin: *");
date_default_timezone_set('Asia/Jakarta');

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';

class Get_antrian_by_notelp extends REST_Controller {
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

        $notelp = $this->get('notelp');
        $antrian = $this->mymodel->getbywhere('antrian','notelp',$notelp,'result');
        if (!empty($antrian)) {
          foreach ($antrian as $key => $value) {
            if ($value->status_antrian == "0") {
             $value->status_pelanggan =  "Menunggu";
            }else if($value->status_antrian == "1"){
              $value->status_pelanggan = "Dikerjakan";
            }else if ($value->status_antrian=="2") {
              $value->status_pelanggan = "Selesai";
            }
          }
        }
        
        if (!empty($antrian)) {
         $msg = array('status' => 1, 'message'=>'Berhasil ambil data' ,'data'=>$antrian);
        }else{
          $msg = array('status' => 0, 'message'=>'Antrian Tidak Ditemukan' ,'data'=>"");
        }

        $this->response($msg);
    }
}