<?php

date_default_timezone_set('Asia/Jakarta');
defined('BASEPATH') OR exit('No direct script access allowed');
require_once('admin/sms/api_sms_class_reguler_json.php'); // class
ob_start();

class Help extends CI_Controller {

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

	}
	public function showimg($file_name="")
	{
		if (isset($_REQUEST['img'])) {
			$show = base_url('assets/img/chat/'.$file_name);
			redirect($show);
			//echo "<img src='$show'>";
		}else {
			$show = base_url('assets/img/chat/tumbnail/'.$file_name);
			//echo "<img src='$show'>";
			redirect($show);
		}
	}
	public function ketentuanlayanan()
	{
		$data = $this->mymodel->getbywhere('ketentuanlayanan','1','1','row');
		echo nl2br($data->deskripsi);
	}
	public function kebijakanprivasi()
	{
		$data = $this->mymodel->getbywhere('kebijakanprivasi','1','1','row');
		echo nl2br($data->deskripsi);
	}
}
?>
