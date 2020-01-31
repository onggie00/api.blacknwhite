<?php
header('Access-Control-Allow-Origin: *');
date_default_timezone_set('Asia/Jakarta');
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';

class Rekap_antrian extends REST_Controller {

  function __construct($config = 'rest') {
      parent::__construct($config);
  }

  function index_post() {
      $token = "";
      $headers=array();
      foreach (getallheaders() as $name => $value) {
          $headers[$name] = $value;
      }
      $get_antrian = $this->mymodel->getall('antrian');
      foreach ($get_antrian as $key => $value) {
        $data = array(
              "notelp" => $value->notelp,
              "style_id" => $value->style_id,
              "nama" => $value->nama_lengkap,
              "keterangan" => $value->keterangan,
              "stylist_id" => $value->stylist_id
        );  
        $this->insert('trans_pelanggan',$data);
        $this->mymodel->delete('antrian','id',$value->id);
      }
      $this->response($msg);

        
  }


}
