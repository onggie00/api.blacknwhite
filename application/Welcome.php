<?php

date_default_timezone_set('Asia/Jakarta');
defined('BASEPATH') OR exit('No direct script access allowed');
require_once('admin/sms/api_sms_class_reguler_json.php'); // class
ob_start();

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		redirect('admin/login/signin/');
	}
	public function v($value='')
	{
		$this->load->view('admin/waiting_send_firebase');
	}
	public function testdb($value='')
	{
		for ($i=0; $i <3 ; $i++) {
			$d['userdata'] = md5($i);
			$this->load->view('admin/add_to_fb',$d);
			sleep(5);
		}
	}
	public function send_sms($value='')
	{
		$apikey      = '6938e27b7417e728d554349dd4129867'; // api key
		$ipserver    = 'http://45.32.107.195/'; // url server sms
		$callbackurl = 'http://your_url_for_get_auto_update_status_sms'; // url callback get status sms

		// create header json
		$senddata = array(
			'apikey' => $apikey,
			'callbackurl' => $callbackurl,
			'datapacket'=>array()
		);

		// create detail data json
		$date=new DateTime();
		$jam = $date->format('Y-m-d H:i:s');
		// data 1
		$number1='082255427915';
		$message1='SMS MASUK';
		$sendingdatetime1 ="$jam";
		array_push($senddata['datapacket'],array(
			'number' => trim($number1),
			'message' => urlencode(stripslashes(utf8_encode($message1))),
			'sendingdatetime' => $sendingdatetime1));
		// class sms
		$sms = new sms_class_reguler_json();
		$sms->setIp($ipserver);
		$sms->setData($senddata);
		$responjson = $sms->send();
		header('Content-Type: application/json');

		echo $responjson;
	}
	public function check_saldo($value='')
	{
		$apikey      = '6938e27b7417e728d554349dd4129867'; // api key
		$ipserver    = 'http://45.32.107.195/'; // url server sms

		// create header json
		$senddata = array(
			'apikey' => $apikey
		);
		$sms = new sms_class_reguler_json();
		$sms->setIp($ipserver);
		$sms->setData($senddata);
		$resnponjson = $sms->balance();
		header('Content-Type: application/json');
		echo $resnponjson;
	}
	public function sendnotifall($value='')
	{
		//$registrationIds = array( TOKENS );
		// prep the bundle
			$msg = array
			(
			    'body'  => "INI Body",
			    'title'     => "Ini title"
			);

			$fields = array
			(
			    'to'  => '/topics/message',
			    'notification'          => $msg
			);

			$headers = array
			(
			    'Authorization: key=AAAAa9zaPvw:APA91bHFgW_R9wTJr2-hsEdihh7Gfup9YtkNUeF4qy3ottaUv2d1u7BWhRQI3_o7HU6bxGyNPUA1Abqt5OC2E8iyZ_el5o0TmBtLiGLAKbpT-h5UTUUUdKI0hB8hRwcUYy1Ly6lDUY0F' ,
			    'Content-Type: application/json'
			);

			$ch = curl_init();
			curl_setopt( $ch,CURLOPT_URL, 'https://fcm.googleapis.com/fcm/send' );
			curl_setopt( $ch,CURLOPT_POST, true );
			curl_setopt( $ch,CURLOPT_HTTPHEADER, $headers );
			curl_setopt( $ch,CURLOPT_RETURNTRANSFER, true );
			curl_setopt( $ch,CURLOPT_SSL_VERIFYPEER, false );
			curl_setopt( $ch,CURLOPT_POSTFIELDS, json_encode( $fields ) );
			$result = curl_exec($ch );
			curl_close( $ch );
			echo $result;
	}
}
?>
