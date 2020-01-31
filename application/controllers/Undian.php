<?php

date_default_timezone_set('Asia/Jakarta');
defined('BASEPATH') OR exit('No direct script access allowed');
ob_start();
define( 'API_ACCESS_KEY', 'AAAABMMsQoY:APA91bFjHzOanAUv3_lju701o8nrlLo5TG9wXXxchECcOY7DrKex6ugX3c3Hv5Y0Hdcrlb9tM5nVKAWSzX3BIV32xJuRaP0A3VWkoHtq-CSi4aE62HQP7xg4fJInNkann50m5zlM76uw' );

class Undian extends CI_Controller {

	public function index()
	{
		$data['title'] = "UNDIAN RSB";
		$data['pemenang_kategori'] = $this->mymodel->getbywhere('undian','id_hadiah','9','result');
		$this->load->view('undian/Undian_pulsa',$data);
	}

	public function daftar_pemenang($category_hadiah='',$putaran='')
	{
		$data['title'] = "DAFTAR PEMENANG UNDIAN RSB";
		$data['syarat'] = "*Syarat dan Ketentuan berlaku.";
		//$kategori = $_REQUEST['id_hadiah_category'];
		$kategori = $this->input->get('category_hadiah');
		$total_putar = $this->input->get('putaran');
		if ($kategori == 1) {
			$data['kategori'] = $this->mymodel->getbywhere('hadiah_category','id_hadiah_category',$kategori,'row')->nama_category;
			$data['pemenang'] = $this->mymodel->getbywhere('undian','id_hadiah',$kategori,'result');
			$this->load->view('undian/Pemenang_rumah',$data);
		}
		if ($kategori == 2) {
			$data['kategori'] = $this->mymodel->getbywhere('hadiah_category','id_hadiah_category',$kategori,'row')->nama_category;
			$data['pemenang'] = $this->mymodel->getbywhere('undian','id_hadiah',$kategori,'result');
			$this->load->view('undian/Pemenang_mobil',$data);
		}
		if ($kategori == 3) {
			$data['kategori'] = $this->mymodel->getbywhere('hadiah_category','id_hadiah_category',$kategori,'row')->nama_category;
			if ($total_putar==1) {
				$data['pemenang'] = $this->mymodel->getbywherelimit('undian','id_hadiah',$kategori,'0','10');
			}else {
				$data['pemenang'] = $this->mymodel->getbywherelimit('undian','id_hadiah',$kategori,'10','10');
			}
			$data['total_putar'] = $total_putar;
			$this->load->view('undian/Pemenang_umroh',$data);
		}
		if ($kategori == 4) {
			$data['kategori'] = $this->mymodel->getbywhere('hadiah_category','id_hadiah_category',$kategori,'row')->nama_category;
			if ($total_putar==1) {
				$data['pemenang'] = $this->mymodel->getbywherelimit('undian','id_hadiah',$kategori,'0','1');
					$data['pemenang1'] = $this->mymodel->getbywherelimit('undian','id_hadiah',$kategori-1,'0','5');
			}else if ($total_putar==2) {
				$data['pemenang'] = $this->mymodel->getbywherelimit('undian','id_hadiah',$kategori,'1','1');
					$data['pemenang1'] = $this->mymodel->getbywherelimit('undian','id_hadiah',$kategori-1,'5','5');
			}else if ($total_putar==3) {
				$data['pemenang'] = $this->mymodel->getbywherelimit('undian','id_hadiah',$kategori,'2','1');
					$data['pemenang1'] = $this->mymodel->getbywherelimit('undian','id_hadiah',$kategori-1,'10','5');
			}else {
				$data['pemenang'] = $this->mymodel->getbywherelimit('undian','id_hadiah',$kategori,'3','2');
					$data['pemenang1'] = $this->mymodel->getbywherelimit('undian','id_hadiah',$kategori-1,'15','5');
			}
			$data['total_putar'] = $total_putar;
			$this->load->view('undian/Pemenang_motor_umrah',$data);
		}
		if ($kategori == 5) {
			$data['kategori'] = $this->mymodel->getbywhere('hadiah_category','id_hadiah_category',$kategori,'row')->nama_category;
			$data['pemenang'] = $this->mymodel->getbywhere('undian','id_hadiah',$kategori,'result');
			$this->load->view('undian/Pemenang_kulkas',$data);
		}
		if ($kategori == 6) {
			$data['kategori'] = $this->mymodel->getbywhere('hadiah_category','id_hadiah_category',$kategori,'row')->nama_category;
			$data['pemenang'] = $this->mymodel->getbywhere('undian','id_hadiah',$kategori,'result');
			$this->load->view('undian/Pemenang_mesin_cuci',$data);
		}
		if ($kategori == 7) {
			$data['kategori'] = $this->mymodel->getbywhere('hadiah_category','id_hadiah_category',$kategori,'row')->nama_category;
			if ($total_putar==1) {
				$data['pemenang'] = $this->mymodel->getbywherelimit('undian','id_hadiah',$kategori,'0','5');
				$data['pemenang1'] = $this->mymodel->getbywherelimit('undian','id_hadiah',$kategori-1,'0','7');
				$data['pemenang2'] = $this->mymodel->getbywherelimit('undian','id_hadiah',$kategori-2,'0','8');
			}else {
					$data['pemenang'] = $this->mymodel->getbywherelimit('undian','id_hadiah',$kategori,'5','5');
					$data['pemenang1'] = $this->mymodel->getbywherelimit('undian','id_hadiah',$kategori-1,'7','8');
					$data['pemenang2'] = $this->mymodel->getbywherelimit('undian','id_hadiah',$kategori-2,'8','7');
			}

			$data['total_putar'] = $total_putar;
			$this->load->view('undian/Pemenang_elektronik',$data);
		}
		if ($kategori == 8) {
			$data['kategori'] = $this->mymodel->getbywhere('hadiah_category','id_hadiah_category',$kategori,'row')->nama_category;
			if ($total_putar==1) {
				$data['pemenang'] = $this->mymodel->getbywherelimit('undian','id_hadiah',$kategori,'0','25');
			}else {
				$data['pemenang'] = $this->mymodel->getbywherelimit('undian','id_hadiah',$kategori,'25','25');
			}
			$data['total_putar'] = $total_putar;
			$this->load->view('undian/Pemenang_smartphone',$data);
		}
		if ($kategori == 9) {
			$data['kategori'] = $this->mymodel->getbywhere('hadiah_category','id_hadiah_category',$kategori,'row')->nama_category;
			$data['pemenang'] = "Pemenang undian pulsa akan ditampilkan pada Aplikasi.";
			$data['total_putar'] = $total_putar;
			$this->load->view('undian/Pemenang_pulsa',$data);
		}

		/*$data['pemenang_kategori'] = $this->mymodel->withquery("select u.* from undian u,hadiah h,hadiah_category hc where u.id_hadiah = h.id_hadiah
			and hc.id_hadiah_category = '".$kategori."'
			and hc.id_hadiah_category = h.id_hadiah_category
			order by u.id_undian ASC",'result');*/

	}
	public function cobainsert(){

 	for ($i=0;$i<count($_POST['nomer_kartu']);$i++) {
 		$title = "- Selamat Anda Menang Undian RSB -"
 		$hadiah = $this->mymodel->getbywhere('hadiah_category','id_hadiah_category',$_POST['category_hadiah'][$i],'row')->nama_category;
 		$desc = "Selamat, nomor kartu ".$_POST['nomer_kartu'][$i]."menang undian ".$hadiah;
 		
 		$barcode = $this->mymodel->getbywhere('barcode','nomer_kode',$_POST['nomer_kartu'][$i],'row')->code;
 		$member = $this->mymodel->getbywhere('user','barcode',$barcode,'row');
 		$pesan = "RSB - ".$title.$desc;
 		if ($member->phone != "" && $member->id_fcm != "") {
 			$this->send_user($title,$desc,$member->id_fcm,$_POST['nomer_kartu'][$i]);
 			$this->send_sms($member->phone,$pesan);
 		}else if($member->phone != ""){
 			$this->send_sms($member->phone,$pesan);
 		}

		$data = array(
		"id_undian" => "",
		"nama_depan" => "",
		"nama_belakang" => "",
		"nomer_kartu" => $_POST['nomer_kartu'][$i],
		"id_hadiah" => $_POST['category_hadiah'],
		"created_at" => date('Y-m-d H:i:s')
		);
		$this->mymodel->insert("undian",$data);

		}
		/*
 		$title = "Selamat Anda Menang Undian ";
 		$hadiah = $this->mymodel->getbywhere('hadiah_category','id_hadiah_category',$_POST['category_hadiah'],'row')->nama_category;
 		$desc = "Selamat, nomor kartu ".$_POST['nomer_kartu']."menang undian ".$hadiah;
 		
 		$barcode = $this->mymodel->getbywhere('barcode','nomer_kode',$_POST['nomer_kartu'],'row')->code;
 		$member = $this->mymodel->getbywhere('user','barcode',$barcode,'row');
 		$pesan = "RSB - ".$title.$desc;
 		if ($member->phone != "" && $member->id_fcm != "") {
 			$this->send_user($title,$desc,$member->id_fcm,$_POST['nomer_kartu']);
 			$this->send_sms($member->phone,$pesan);
 		}else if($member->phone != ""){
 			$this->send_sms($member->phone,$pesan);
 		}

		$data = array(
		"id_undian" => "",
		"nama_depan" => "",
		"nama_belakang" => "",
		"nomer_kartu" => $_POST['nomer_kartu'],
		"id_hadiah" => $_POST['category_hadiah'],
		"created_at" => date('Y-m-d H:i:s')
		);
		$this->mymodel->insert("undian",$data);
		*/
		
	}
	public function insertdata(){
		$nomer_kartu = $this->input->post('nomer_kartu');
		$barcode = $this->mymodel->getbywhere("barcode","nomer_kode",$nomer_kartu,"row")->code;
		$hadiah = $this->input->post('category_hadiah');
		$user = $this->mymodel->getbywhere("user",'barcode',$barcode,"result");
		$nama_depan="";$nama_belakang="";
		foreach ($user as $key => $value) {
			$nama_depan = $value->nama_depan;
			$nama_belakang = $value->nama_belakang;
		}
		$data = array(
		"id_undian" => "",
		"nama_depan" => $nama_depan,
		"nama_belakang" => $nama_belakang,
		"nomer_kartu" => $nomer_kartu,
		"id_hadiah" => $hadiah,
		"created_at" => date('Y-m-d H:i:s')
		);
		$this->mymodel->insert("undian",$data);
		echo json_encode(array('status'=>$data));
		//$this->load->view('undian/daftar_pemenang', $get_data, TRUE);
	}
    public function reset(){
        $this->mymodel->delete("undian","1","1");
        echo "data berhasil direset";
    }
	public function import_peserta(){
	if (($handle = fopen("base_url() assets/undian/list_peserta.csv", "r")) !== FALSE) {
    while (($row = fgetcsv($handle, 1000, ",")) !== FALSE) {
        echo $row[0] . "\n"; // Will output  data contained in the first column
    }
    fclose($handle);
}
	}

	public function mobil(){
		$data['title'] = "UNDIAN RSB";
		$data['syarat'] = "*Syarat dan Ketentuan berlaku.";
		$data['pemenang_kategori'] = $this->mymodel->getall('undian');
		$this->load->view('undian/Undian_mobil',$data);
	}
	public function umroh(){
		$data['title'] = "UNDIAN RSB";
		$this->load->view('undian/Undian_umroh',$data);
	}
	public function motor(){
		$data['title'] = "UNDIAN RSB";
		$this->load->view('undian/Undian_motor',$data);
	}
	public function kulkas(){
		$data['title'] = "UNDIAN RSB";
		$this->load->view('undian/Undian_kulkas',$data);
	}
	public function mesin_cuci(){
		$data['title'] = "UNDIAN RSB";
		$this->load->view('undian/Undian_mesin_cuci',$data);
	}
	public function tvled(){
		$data['title'] = "UNDIAN RSB";
		$this->load->view('undian/Undian_tvled',$data);
	}
	public function smartphone(){
		$data['title'] = "UNDIAN RSB";
		$data['pemenang_kategori'] = $this->mymodel->getall('undian');
		$this->load->view('undian/Undian_smartphone',$data);
	}
	public function pulsa(){
		$data['title'] = "UNDIAN RSB";
		$data['pemenang_kategori'] = $this->mymodel->getall('undian');
		$this->load->view('undian/Undian_pulsa',$data);
	}
	public function rumah(){
		$data['title'] = "UNDIAN RSB";
		$data['syarat'] = "*Syarat dan Ketentuan berlaku.";
		$data['pemenang_kategori'] = $this->mymodel->getall('undian');
		$this->load->view('undian/Undian_rumah',$data);
	}
	public function elektronik(){
		$data['title'] = "UNDIAN RSB";
		$data['pemenang_kategori'] = $this->mymodel->getall('undian');
		$this->load->view('undian/Undian_elektronik',$data);
	}
	public function motor_umrah(){
		$data['title'] = "UNDIAN RSB";
		$data['pemenang_kategori'] = $this->mymodel->getall('undian');
		$this->load->view('undian/Undian_motor_umrah',$data);
	}

	public function send_user($title,$desc,$id_fcm,$nomer)
  {   
    $Msg = array(
      'body' => $desc,
      'title' => $title
    );
    $fcmFields = array(
      'to' => $id_fcm,
      'notification' => $Msg
      // 'data'=>$data
    );
    $headers = array(
      'Authorization: key=' . API_ACCESS_KEY,
      'Content-Type: application/json'
    );
    $ch = curl_init();
    curl_setopt( $ch,CURLOPT_URL, 'https://fcm.googleapis.com/fcm/send' );
    curl_setopt( $ch,CURLOPT_POST, true );
    curl_setopt( $ch,CURLOPT_HTTPHEADER, $headers );
    curl_setopt( $ch,CURLOPT_RETURNTRANSFER, true );
    curl_setopt( $ch,CURLOPT_SSL_VERIFYPEER, false );
    curl_setopt( $ch,CURLOPT_POSTFIELDS, json_encode( $fcmFields ) );
    $result = curl_exec($ch );
    curl_close( $ch );
    
    $cek_respon = explode(',',$result);
    $berhasil = substr($cek_respon[1],strpos($cek_respon[1],':')+1);
    
    echo $result . "\n\n";
  }
  public function send_sms($no,$msg){
$userkey = "6pne9t"; //userkey lihat di zenziva
$passkey = "k8u609ds0y"; // set passkey di zenziva
$telepon = $no;
$message = $msg;
$url = "https://reguler.zenziva.net/apps/smsapi.php";
$curlHandle = curl_init();
curl_setopt($curlHandle, CURLOPT_URL, $url);
curl_setopt($curlHandle, CURLOPT_POSTFIELDS, 'userkey='.$userkey.'&passkey='.$passkey.'&nohp='.$telepon.'&pesan='.urlencode($message));
curl_setopt($curlHandle, CURLOPT_HEADER, 0);
curl_setopt($curlHandle, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curlHandle, CURLOPT_SSL_VERIFYHOST, 2);
curl_setopt($curlHandle, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($curlHandle, CURLOPT_TIMEOUT,30);
curl_setopt($curlHandle, CURLOPT_POST, 1);
$results = curl_exec($curlHandle);
curl_close($curlHandle);

$XMLdata = new SimpleXMLElement($results);
$status = $XMLdata->message[0]->text;
echo $status;
    }

}
?>
