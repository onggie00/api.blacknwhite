<?php
header('Access-Control-Allow-Origin: *');
date_default_timezone_set('Asia/Jakarta');
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';

class Ambil_antrian extends REST_Controller {

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

      $nama_lengkap = "";
      $notelp = "";
      $stylist = "";
      $member_id =$this->post('member');
      $style_id = $this->post('style_id');
      $keterangan = $this->post('keterangan');
      $nomor = $this->mymodel->getbywhere('antrian',"status_antrian='1' or status_antrian=",'0','result');
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
      $hitung_antrian = $this->mymodel->withquery("select count(*) as total_antrian from antrian where status_antrian='0'",'result');
      $total_antri = "";
      foreach ($hitung_antrian as $key => $value) {
        $total_antri = $value->total_antrian;
      }
      if ($total_antri >=6 ) {
        $msg = array('status' => 0, 'message'=>'Antrian Sedang Penuh, Mohon mencoba beberapa saat lagi.','data' => $total_antri );
      
      }else{
        if (empty($notelp) || empty($nama_lengkap)) {
          $msg = array('status' => 0, 'message'=>'Gagal, Silahkan isi semua kolom form.' );          
        }else{
          if (empty($nomor)) {
          $nomor=0;
        }else{
          foreach ($nomor as $key => $value) {
            $nomor = $value->nomor;
          }
        }
          $nomor++;
          if ($keterangan == "") {
            $keterangan = "kosong";
          }
          $data = array(
            "notelp" => $notelp,
            "nama_lengkap" => $nama_lengkap,
            "status_antrian" => "0",
            "created_at" => date("Y-m-d H:i:s"),
            "nomor" => $nomor,
            "stylist_id" => $stylist,
            "style_id" => $style_id,
            "keterangan" => $keterangan
            );
          if (!empty($data)) {
            //insert query antrian
            $this->mymodel->insert('antrian',$data);
            $msg = array('status' => 1, 'message'=>'Antrian telah ditambahkan', 'data'=>$data);
          }else{
            $msg = array('status' => 0, 'message'=>'Data kosong, Silahkan mengisi semua kolom' );
          }
        }
      }
        $this->response($msg);

        
  }


}