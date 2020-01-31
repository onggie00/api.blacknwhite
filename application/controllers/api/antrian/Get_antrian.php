<?php
header("Access-Control-Allow-Origin: *");
date_default_timezone_set('Asia/Jakarta');

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';

class Get_antrian extends REST_Controller {
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

        //$get_stylist_aktif = $this->mymodel->getbywhere('stylist','status_aktif','AKTIF','result');
        $antrian = $this->mymodel->getbywhere('antrian','status_antrian',"1",'result');
        if (empty($antrian)) {
          $msg = array('status' => 0, 'message'=>'Kosong');
        }else{
          foreach ($antrian as $key => $value) {
            if ($value->stylist_id == "0") {
              $value->nama_stylist = "";
            }else{
              $value->nama_stylist = $this->mymodel->getbywhere('stylist','id',$value->stylist_id,'row')->nama_lengkap;
            }

            if (empty($this->mymodel->getbywhere('antrian','status_antrian','0','row'))) {
              $value->selanjutnya = "kosong";
            }else{
              $value->selanjutnya = $this->mymodel->getbywhere('antrian','status_antrian','0','row')->nomor;
            }
            $value->antrian_terkini = $this->mymodel->getlast('antrian','id')->nomor;
            if (!empty($value->antrian_terkini)) {
              $value->antrian_terkini++;
            }else{
              $value->antrian_terkini = "1";
            }
          }
          $msg = array('status' => 1, 'message'=>'Berhasil ambil data' ,'data'=>$antrian);
        }
        $this->response($msg);
    }
}
