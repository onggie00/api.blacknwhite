<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');
require 'phpmailer/PHPMailerAutoload.php';

require APPPATH . '/libraries/REST_Controller.php';
require_once('sms/api_sms_class_reguler_json.php');
ob_start();
class Lupa_password extends REST_Controller {

    function __construct($config = 'rest') {
        parent::__construct($config);
    }
    // insert new data to account
    function index_post() {
       $email = $this->post('phone');
       if (isset($email)) {
         $cekphone = $this->mymodel->getbywhere('user','phone',$email,'row');
         if (isset($cekphone)) {
           $newpass = rand( 100000, 1000000);
           $dt = array('password' => md5($newpass) );
           $this->mymodel->update('user',$dt,'token',$cekphone->token);
           //$this->send_email_file('',urlencode($email),$newpass);
           $this->send_sms($cekphone->phone,$newpass);
           $this->send_email_file("",$cekphone->email,$newpass);
           $msg = array('status' => 1, 'message'=>'Password Berhasil di reset' );
         }else {
           $msg = array('status' => 0, 'message'=>'Nomer Tidak Terdaftar' );
         }
       }else {
         $msg = array('status' => 0, 'message'=>'Email tidak boleh kosong' );
       }
      $this->response($msg);

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
  		$message1="Password Baru Rezeki Sejuta Bintang Anda adalah : ".$msg;
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
  		 return 'SMS dari Rezeki Sejuta Bintang telah dikirim ke nomer '.$no;
  	 }else {
  		 return 'Sms gagal terkirim';
  	 }
  	}

    public function send_email_file($file="",$to='',$data)
    {
      $to = urldecode($to);
      $mail = new PHPMailer;
      // Konfigurasi SMTP
      $mail->isSMTP();
      $mail->SMTPDebug =0;
      // $mail->Host = 'mail.namagz.com';
      $mail->Host = 'smtp.gmail.com';
      $mail->SMTPOptions = array(
         'ssl' => array(
           'verify_peer' => false,
           'verify_peer_name' => false,
           'allow_self_signed' => true
          )
      );
      $mail->SMTPAuth = true;
      // $mail->Username = 'syauqi@namagz.com';
      // $mail->Password = 'koroko11';
      $mail->Username = 'dev.rejekisejutabintang@gmail.com';
      $mail->Password = '{[rezekisejutabintang]}';
      $mail->SMTPSecure = 'ssl';
      $mail->Port = 465;

      $mail->addReplyTo('no-reply@rezekisejutabintang.com', 'Rezeki Sejuta Bintang');
      $mail->setFrom('no-reply@rezekisejutabintang.com', 'Rezeki Sejuta Bintang');

      // Menambahkan penerima
      $mail->addAddress($to);

      // Menambahkan beberapa penerima
      //$mail->addAddress('penerima2@contoh.com');
      //$mail->addAddress('penerima3@contoh.com');

      // Menambahkan cc atau bcc
      //$mail->addCC('syauqiragi06@gmail.com@contoh.com');
      //$mail->addBCC('syauqiragi06@gmail.com@contoh.com');

      // Subjek email
      $mail->Subject = '[No Reply] Reset Password Rezeki Sejuta Bintang';

      // Mengatur format email ke HTML
      $mail->isHTML(true);

      // Konten/isi
       $data_['msg'] = "Selamat Password anda berhasil di reset, Password baru anda berada dibawah ini.";
       $data_['code'] = "$data";
       $data_['title'] = "Lupa Password";
       $mailContent = $this->load->view('email_lupas',$data_,true);
      $mail->Body = $mailContent;
      // Menambahakn lampiran
        //$mail->addAttachment('assets/pdf/'.$file);
      //$mail->addAttachment('lmp/file2.png', 'nama-baru-file2.png'); //atur nama baru

      // Kirim email
      if(!$mail->send()){
        //  echo 'Pesan tidak dapat dikirim.';
        //  echo 'Mailer Error: ' . $mail->ErrorInfo;
      }else{
        //  echo 'Pesan telah terkirim ';
      }
    }

}
?>
