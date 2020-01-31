<?php

date_default_timezone_set('Asia/Jakarta');
defined('BASEPATH') OR exit('No direct script access allowed');
ob_start();

class Peserta_undian extends CI_Controller {

	public function index()
	{
		$row = 1;
		if (($handle = fopen("list.csv", "r")) !== FALSE) {
		    while (($data = fgetcsv($handle, 62000, ";")) !== FALSE) {
		        $num = count($data);
		        echo "<p> $num fields in line $row: <br /></p>\n";
		        $row++;
		        for ($c=0; $c < $num; $c++) {
		            echo $data[$c] . "<br />\n";
		        }
		    }
		    fclose($handle);
		}
	}

	public function daftar_pemenang()
	{
		$data['title'] = "DAFTAR PEMENANG UNDIAN RSB";
		//$kategori = $_REQUEST['id_hadiah_category'];
		$kategori = 2;
		$data['kategori'] = $this->mymodel->getbywhere('hadiah_category','id_hadiah_category',$kategori,'row')->nama_category;
		$data['pemenang_kategori'] = $this->mymodel->withquery("select u.* from undian u,hadiah h,hadiah_category hc where u.id_hadiah = h.id_hadiah 
			and hc.id_hadiah_category = '".$kategori."' 
			and hc.id_hadiah_category = h.id_hadiah_category 
			order by u.id_undian ASC",'result');
		$this->load->view('undian/daftar_pemenang',$data);
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
	}
}
?>
