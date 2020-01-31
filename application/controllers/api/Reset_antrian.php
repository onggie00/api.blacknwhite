<?php 
date_default_timezone_set('Asia/Jakarta');

defined('BASEPATH') OR exit('No direct script access allowed');

class Reset_antrian extends CI_Controller{

	public function resetnomor(){
		
		$get_antrian = $this->mymodel->getbywhere('antrian','status_antrian',"2",'result');
		$data = array();
		foreach ($get_antrian as $key => $value) {
			$data = array(
				"notelp" => $value->notelp,
				"style_id" => $value->style_id,
				"stylist_id" => $value->stylist_id,
				"nama" => $value->nama_lengkap,
				"keterangan" => $value->keterangan,
				"nomor" => $value->nomor,
				"created_at" => date("Y-m-d H:i:s")
				);
			$in = $this->mymodel->insert('trans_pelanggan',$data);
		}
		
		$del = $this->mymodel->delete('antrian',"status_antrian='0' or status_antrian='2' or status_antrian=",1,'result');
		echo $this->db->last_query();
	}
}
?>