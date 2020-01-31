<?php
header("Access-Control-Allow-Origin: *");
date_default_timezone_set('Asia/Jakarta');

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';

class Get_highlight_by_id extends REST_Controller {
    function __construct()
    {
        parent::__construct();
    }

    public function get_bulan($bulan){
    $bln = "";
    if ($bulan == 1) {
      $bln = "Januari";
    }else if ($bulan == 2) {
      $bln = "Februari";
    }else if ($bulan == 3) {
      $bln = "Maret";
    }else if ($bulan == 4) {
      $bln = "April";
    }else if ($bulan == 5) {
      $bln = "Mei";
    }else if ($bulan == 6) {
      $bln = "Juni";
    }else if ($bulan == 7) {
      $bln = "Juli";
    }else if ($bulan == 8) {
      $bln = "Agustus";
    }else if ($bulan == 9) {
      $bln = "September";
    }else if ($bulan == 10) {
      $bln = "Oktober";
    }else if ($bulan == 11) {
      $bln = "November";
    }else if ($bulan == 12) {
      $bln = "Desember";
    }
    return $bln;
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

      $id = $this->get('id');

        $highlight = $this->mymodel->getbywhere('highlight',"id='".$id."' and status=",'0','result');
        foreach ($highlight as $key => $value) {
          if ($value->img_file == "") {
            $value->img_file = "kosong.png";
          }
          $convert = date("d m Y",strtotime($value->created_at));
          $convert = explode(" ", $convert);
          $tgl = $convert[0];
          $bln = $this->get_bulan($convert[1]);
          $thn = $convert[2];
          $value->created_at = $tgl." ".$bln." ".$thn;
        }
        
        $msg = array('status' => 1, 'message'=>'Berhasil ambil data' ,'data'=>$highlight);
        $this->response($msg);
    }
}
?>
