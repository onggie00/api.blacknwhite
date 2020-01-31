<?php
header('Access-Control-Allow-Origin: *');
date_default_timezone_set('Asia/Jakarta');
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';

class Insert_highlight extends REST_Controller {

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

        //$mem = $this->mymodel->getbywhere('user','token',$token,"row");
        $judul_highlight = $this->post('judul_highlight');
        $deskripsi_highlight = $this->post('deskripsi_highlight');
        $keterangan = $this->post('keterangan');
        $status = "0";
        $msg="";

        $data = array(
          "judul_highlight" => $judul_highlight,
          "deskripsi_highlight" => $deskripsi_highlight,
          "keterangan" => $keterangan,
          "status" => $status
        );

        if(!empty($_FILES['img']['name'])){
          $this->load->library('upload');
          $config['upload_path'] = './assets/img/highlight/'; //path folder
          $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
          $config['encrypt_name'] = TRUE; //Enkripsi nama yang terupload
          $this->upload->initialize($config);
          if ($this->upload->do_upload('img')){
              $gbr = $this->upload->data();
              //Compress Image
              $config['image_library']='gd2';
              $config['source_image']='./assets/img/highlight/'.$gbr['file_name'];
              $config['create_thumb']= FALSE;
              $config['maintain_ratio']= FALSE;
              $config['quality']= '100%';
              $config['width']= 1000;
              $config['height']= 400;
              $config['new_image']= './assets/img/highlight/'.$gbr['file_name'];
              $this->load->library('image_lib', $config);
              $this->image_lib->resize();

              $gambar=$gbr['file_name'];
              $data['img_file'] = $gambar;
              $in = $this->mymodel->insert('highlight',$data_highlight);
              $msg = array('status' => 0, 'message'=>'Data berhasil ditambahkan');
        }else {
          $er = $this->upload->display_errors();
          $msg = array('status' => 1, 'message'=>'Image gagal di upload');
        }
      }
        $this->response($msg);        
  }


}
?>