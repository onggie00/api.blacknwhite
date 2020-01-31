<?php
header('Access-Control-Allow-Origin: *');
date_default_timezone_set('Asia/Jakarta');
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';

class Update_antrian extends REST_Controller {

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

      $id = $this->post('antrian_id');
      $member_id =$this->post('member');
      $style_id = $this->post('style_id');
      $keterangan = $this->post('keterangan');
      $nomor = $this->post('nomor');
      $status_antrian = $this->post('status_antrian');
      //cek nomor telepon / member id
      if ($member_id != 0) {
        $nama_lengkap = $this->mymodel->getbywhere('member','id',$member_id,'row')->nama_lengkap;
        $notelp = $this->mymodel->getbywhere('member','id',$member_id,'row')->notelp;
        $stylist = $this->post('stylist_id');
      }else{
        $notelp = $this->post('notelp');
        $nama_lengkap = $this->post('nama_lengkap');
        $stylist = 0;
      }

      //get jumlah antrian
      //cek available / lagi rame
      $data = array(
          "notelp" => $notelp,
          "nama_lengkap" => $nama_lengkap,
          "status_antrian" => $status_antrian,
          "created_at" => date("Y-m-d H:i:s"),
          "nomor" => $nomor,
          "stylist_id" => $stylist,
          "style_id" => $style_id,
          "keterangan" => $keterangan
          );
      if (!empty($data)) {
        $up = $this->mymodel->update('antrian',$data,'id',$id);
        $msg = array('status' => 1, 'message'=>'Antrian Telah Diubah', 'data'=>$data);
      }else{
        $msg = array('status' => 0, 'message'=>'Ubah Antrian Gagal.');
      }
        $this->response($msg);

        
  }


}
