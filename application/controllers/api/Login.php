<?php
date_default_timezone_set('Asia/Jakarta');
require APPPATH . '/libraries/REST_Controller.php';
require_once('sms/api_sms_class_reguler_json.php');
ob_start();
class Login extends REST_Controller {

    function __construct($config = 'rest') {
        parent::__construct($config);
    }

    public function send_sms($no,$msg)
    {
      $apikey      = '9ecc2b4ba4bff47bbb1660021f922263'; // api key
      $ipserver    = 'http://45.76.156.114/'; // url server sms
      $callbackurl = 'http://your_url_for_get_auto_update_status_sms'; // url callback get status sms

      // create header json
      $senddata = array(
        'apikey' => $apikey,
        'callbackurl' => $callbackurl,
        'datapacket'=>array()
      );

      // create detail data json
      // data 1
      $date=new DateTime();
      $jam = $date->format('Y-m-d H:i:s');
      //$jam = date('Y-m-d H:i:s',strtotime( $jam ) + 10);
      $msg = str_replace("-"," ",$msg);
      $number1= $no;
      $message1=$msg;
      $sendingdatetime1 = "";
      array_push($senddata['datapacket'],array(
        'number' => trim($number1),
        'message' => urlencode(stripslashes(utf8_encode($message1))),
        'sendingdatetime' => $sendingdatetime1
      ));
      // class sms
      $sms = new sms_class_reguler_json();
      $sms->setIp($ipserver);
      $sms->setData($senddata);
      $responjson = $sms->send();

      header('Content-Type: application/json');
      $json = json_decode($responjson, true);
      $ms= "";
      if (strtolower($json['sending_respon'][0]['globalstatustext'])=='success') {
       return 'Silahkan Aktifkan akun dengan Kode yang telah dikirimkan melalui sms ke no '.$no;
     }else {
       return 'Sms gagal terkirim';
     }
    }// insert new data to account
    function index_post() {
      $email = strtolower($this->post('email'));
      $password = $this->post('password');
      $from = $this->post('from');
      $status_barcode = $this->post('status_barcode');
      if ($from==0) {

        if ($email != ''&&$password!='')
        {
          $cek = $this->mymodel->getbywhere('user',"email='$email' or phone='$email'",null,"row");
          if(count($cek)>0)
          {
            $token = $this->mymodel->getbywhere('user',"(email='$email' or phone='$email') and password=",md5($password),"row");
            $success=0;
            $message='Password Salah';
            $st = "";
            $phone = "";
            $username = "";
            if(isset($token)){
              if (!empty($cek->barcode)) {
                if (empty($cek->nama_depan)||empty($cek->nama_belakang)||empty($cek->phone)) {
                  $message='Belum mengisi data diri';
                  $st = 'Silahkan verifikasi kode anda';
                }else if ($cek->status_aktif!=1) {
                  $success=0;
                  $message='Belum Aktif Silahkan verifikasi kode anda';
                  $st = 'Silahkan verifikasi kode anda';
                  $phone = $token->phone;
                  $kd = $this->mymodel->getbywhere('kode_verifikasi','type=1 and id_user='.$cek->id_user,'','row');
                  $send = $this->send_sms($phone,'Kode Verifikasi Rezeki Sejuta Bintang '.$kd->kode);
                  $username = $token->nama_depan." $token->nama_belakang";
                }else {
                  $phone = $token->phone;
                  $username = $token->nama_depan." $token->nama_belakang";
                  $success=1;
                  $message='Login Berhasil';
                  $st = 'Akun Anda Mempunyai Barcode';
                }
              }else {

                if (empty($cek->nama_depan)||empty($cek->nama_belakang)||empty($cek->phone)) {
                  $success=0;
                  $message='Belum mengisi data diri';
                  $st = 'Silahkan verifikasi kode anda';
                }else if ($cek->status_aktif!=1) {
                  $success=0;
                  $message='Belum Aktif Akun Anda Belum Mempunyai Barcode';
                  $st = 'Akun Anda Belum Mempunyai Barcode';
                }else {
                  $phone = $token->phone;
                  $username = $token->nama_depan." $token->nama_belakang";
                  $success=1;
                  $message='Login Berhasil';
                  $st = 'Akun Anda Mempunyai Barcode';
                }
              }
              $token=$token->token;
              // $data = array('last_login' =>date('Y-m-d h:i:s'));
              // $this->mymodel->update('user',$data,'token',$token);
            }else {
              $token= '';
            }
            $msg = array('status'=>$success,'message'=>$message,'token' => $token,'nama'=>$username,"phone"=>"$phone");
          }else {
            $msg = array('status'=>0,'message'=>"Email / Nomor Telepon tidak terdaftar",'token' => "","nama"=>"","phone"=>"");
          }
        }else{
            $success=0;
            $message='Semua field harus diisi';
            $msg = array('status'=>$success,'message'=>$message,'token' => '',"nama"=>"","phone"=>"");
        }
      }else {
        $cek = $this->mymodel->getbywhere('user',"email='$email' or phone='$email'",null,"row");
        if(count($cek)>0)
        {
          $token = $cek;
          $success=1;
          $message='Login Berhasil';
          $st = "";
          $phone = "";
          $username = "";
          if(isset($token)){
            if (!empty($cek->barcode)) {
              if (empty($cek->nama_depan)||empty($cek->nama_belakang)||empty($cek->phone)) {
                $message='Belum mengisi data diri';
                $st = 'Silahkan verifikasi kode anda';
              }else if ($cek->status_aktif!=1) {
                $success=0;
                $message='Belum Aktif Silahkan verifikasi kode anda';
                $st = 'Silahkan verifikasi kode anda';
                $phone = $token->phone;
                $username = $token->nama_depan." $token->nama_belakang";
                $kd = $this->mymodel->getbywhere('kode_verifikasi','type=1 and id_user='.$cek->id_user,'','row');
                $send = $this->send_sms($phone,'Kode Verifikasi Rezeki Sejuta Bintang '.$kd->kode);
              }else {
                $phone = $token->phone;
                $username = $token->nama_depan." $token->nama_belakang";
                $success=1;
                $message='Login Berhasil';
                $st = 'Akun Anda Mempunyai Barcode';
              }
            }else {
              if (empty($cek->nama_depan)||empty($cek->nama_belakang)||empty($cek->phone)) {
                $success=0;
                $message='Belum mengisi data diri';
                $st = 'Silahkan verifikasi kode anda';
              }else if ($cek->status_aktif!=1) {
                $success=0;
                $message='Belum Aktif Akun Anda Belum Mempunyai Barcode';
                $st = 'Akun Anda Belum Mempunyai Barcode';
              }else {
                $phone = $token->phone;
                $username = $token->nama_depan." $token->nama_belakang";
                $success=1;
                $message='Login Berhasil';
                $st = 'Akun Anda Mempunyai Barcode';
              }
            }
            $token=$token->token;
          }else {
            $token= '';
          }
          $msg = array('status'=>$success,'message'=>$message,'token' => $token,'nama'=>$username,"phone"=>"$phone");
        }else {
          $msg = array('status'=>0,'message'=>"Email / Nomor Telepon tidak terdaftar",'token' => "","nama"=>"","phone"=>"");
        }
      }
      $this->response($msg);
    }


}
?>
