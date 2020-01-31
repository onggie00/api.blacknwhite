<?php
date_default_timezone_set('Asia/Jakarta');
defined('BASEPATH') OR exit('No direct script access allowed');
define( 'API_ACCESS_KEY', 'AAAABMMsQoY:APA91bFjHzOanAUv3_lju701o8nrlLo5TG9wXXxchECcOY7DrKex6ugX3c3Hv5Y0Hdcrlb9tM5nVKAWSzX3BIV32xJuRaP0A3VWkoHtq-CSi4aE62HQP7xg4fJInNkann50m5zlM76uw' );
class Curl_news extends CI_Controller {
	public function index()
	{
	}
	public function notif()
	{
		$date = date("Y-m-d H:i:s");
		$date_1 = date('Y-m-d H:i:s', strtotime('-1 hour'));
		foreach ($this->mymodel->getall('user') as $key => $value) {
			$jum = $this->mymodel->withquery("SELECT count(*) as jumlah FROM `news` WHERE
			(`created_at` BETWEEN '".$date_1."' and '".$date ."' )",'row')->jumlah;
			if ($jum>0) {
				echo $this->sendd("Pemberitahuan Berita Terbaru","Ada $jum Berita Terbaru",$value->id_fcm)."<br>";
			}
			// echo "Pemberitahuan Berita Terbaru Ada $jum Berita Terbaru ".$value->id_fcm;
			// echo $this->db->last_query();
			echo "<hr>";
		}
	}
	public function sendd($title,$desc,$id_fcm)
	{
		// $member = $this->member_model->getbyid($id_member);
		$Msg = array(
			'body' => $desc,
			'title' => $title,
			'click_action'=> 'detail_notif'
		);
		// $data = array(
		// 	'bundle.rate.trans_id' => $id_trans,
		// 	'bundle.rate.package_id'=> $idpaket
		// );
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
		echo $result . "\n\n";
	}
	public function notif_user()
	{
		$date = date("Y-m-d H:i:s");
		$date_1 = date('Y-m-d H:i:s', strtotime('-1 hour'));

			// echo "Pemberitahuan Berita Terbaru Ada $jum Berita Terbaru ".$value->id_fcm;
			// echo $this->db->last_query();
			//echo $this->send_user("Notifikasi Pengguna Aktif RSB","Terima Kasih Telah Menginstall Aplikasi RSB.",'dNDWQW_Ux40:APA91bHv3StL-_fNQcen4m5GXL91cztHGLDIN0QxWlv6W-qyg-byaMGg0wbahSyQbzeM0nKDw5XX0KPxEI9mzOZH3mmikdc-lB35nNN6IMCEcg_CHEnxCkrYO75vJaG4_THjWh2GdSdx','3348')."<br>";
			//echo "<hr>";
			echo $this->send_user("Notifikasi Pengguna Aktif RSB","Terima Kasih Telah Menginstall Aplikasi RSB.",'dNDWQW_Ux40:APA91bHv3StL-_fNQcen4m5GXL91cztHGLDIN0QxWlv6W-qyg-byaMGg0wbahSyQbzeM0nKDw5XX0KPxEI9mzOZH3mmikdc-lB35nNN6IMCEcg_CHEnxCkrYO75vJaG4_THjWh2GdSdx','3348','Onggie','Danny','260000')."<br>";
			echo "<hr>";
		foreach ($this->mymodel->getall('user') as $key => $value) {
			//$nomer = $this->mymodel->getbywhere('barcode','code',$value->barcode);
			if ($value->id_fcm!='') {
				//echo $this->send_user("Notifikasi Pengguna Aktif RSB","Terima Kasih Telah Menginstall Aplikasi RSB.",$value->id_fcm,$value->id_user)."<br>";


			}

		}
	}
	public function send_user($title,$desc,$id_fcm,$id_user,$nama_depan,$nama_belakang,$nomer)
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
		$cek_penampung = $this->mymodel->getbywhere('penampung','id_user',$id_user,'row');
		if ($berhasil=='1') {
			$data = array(
				'id_user' => $id_user,
				'nama_depan' => $nama_depan,
				'nama_belakang' => $nama_belakang,
				'nomer_kode' => $nomer,
				'berhasil' => 1,
				'belum' => 0
				);
				if ($cek_penampung->id_user==$id_user) {
					$this->mymodel->update('penampung',$data,'id_user',$id_user);
					echo $id_user.' Update<br>';
				}
				else{
					$this->mymodel->insert('penampung',$data);
					echo $id_user.' Insert<br>';
				}

		}
		else if($berhasil=='0'){
			$data = array(
				'id_user' => $id_user,
				'nama_depan' => $nama_depan,
				'nama_belakang' => $nama_belakang,
				'nomer_kode' => $nomer,
				'berhasil' => 0,
				'belum' => 1
				);

				if ($cek_penampung->id_user==$id_user) {
					$this->mymodel->update('penampung',$data,'id_user',$id_user);
					echo $id_user.' Update<br>';
				}
				else{
					$this->mymodel->insert('penampung',$data);
					echo $id_user.' Insert<br>';
				}

		}
		echo $result . "\n\n";
	}

	public function berita_sulsel()
	{
		$object = array();
    $c = 0;
    $kodeHTML =  bacaHTML('http://berita-sulsel.com/');

    //echo $kodeHTML;
    $url = explode('<div class="content-thumbnail">', $kodeHTML);
    //print_r( $url);
    //echo "<br>";
    for($i =1;$i<count($url);$i++){
          //echo $url[$i];
          $vurl = explode('<a href="', $url[$i]);
          $a=  $vurl;
          $vurl = explode('" itemprop="url" title="Tautan ke: ', $vurl[1]);
          $vtitle = explode('" rel="bookmark">', $vurl[1]);
          $vimg = explode('<img width="148" height="111" src="', $vtitle[1]);
          $vimg1 = explode('" class="attachment-medium size-medium wp-post-image"', $vimg[1]);
          $vcat = explode('rel="category tag">', $a[3]);
          $vcat = explode('</a></span>', $vcat[1]);

          $kodeHTML_ =  bacaHTML( $vurl[0]);
          $desc = explode('<div class="entry-content entry-content-single" itemprop="text">', $kodeHTML_);
          $vdesc = explode('</div>',   $desc[1]);
          $v = explode('<div',   $vdesc[1]);
          $dd = $vdesc;

          if (!empty($vurl[0]) && !empty($vtitle[0])&& !empty($vcat[0])
          &&!empty($vimg1[0])&&!empty($vdesc[0])) {
						$cek_news = $this->mymodel->getbywhere('news','news_url',$vurl[0],'row');
						if (empty($cek_news)) {
							$data = array(
							 "title"=>strip_tags($vtitle[0]),
							 "category"=>ucwords(strtolower($vcat[0])),
							 "photo_url"=>$vimg1[0],
							 "description"=>strip_tags($vdesc[0]),
							 "news_url"=>$vurl[0],
							 "sumber"=>'http://berita-sulsel.com/',
							 "created_at"=>date('Y-m-d H:i:s')
							);
							$in = $this->mymodel->insert('news',$data);
							if ($in>0) {
								echo $vurl[0]."<br>";
								echo $vtitle[0]."<br>";
								echo $vcat[0]."<br>";
								echo $vimg1[0]."<br>";
								echo strip_tags($vdesc[0]);
								echo "<hr>";
							}
						}
          }
    }
	}
	public function celebesonline()
	{
		$object = array();
		$c = 0;
		$kodeHTML =  bacaHTML('https://celebesonline.com/');
    //echo $kodeHTML;
    $url = explode('<div id="post-topic">', $kodeHTML);
    //print_r( $url);
    //echo "<br>";
    for($i =1;$i<count($url);$i++){
          //echo $url[$i];
          $vurl = explode('<a href="', $url[$i]);
          $vurl = explode('"', $vurl[1]);
          $vtitle = explode('>', $vurl[1]);
          $vtitle = explode('<', $vtitle[1]);
          $vcat = explode('rel="category tag">', $url[$i]);
					$vcat = explode('</a>', $vcat[1]);
          $vimg = explode('<img src="',  $url[$i]);
          $vimg1 = explode('" data-hidpi="', $vimg[1]);
          $vimg1 = explode('"', $vimg1[1]);

          $kodeHTML_ =  bacaHTML( $vurl[0]);
          $desc = explode('<div class="entry-content-data ">', $kodeHTML_);
          $vdesc = explode('<div class="clearfix"></div>',   $desc[1]);
          $v = explode('<div',   $vdesc[1]);
          $dd = $vdesc;

					if (!empty($vurl[0]) && !empty($vtitle[0])&& !empty($vcat[0])
					&&!empty($vimg1[0])&&!empty($vdesc[0])) {
						//

						$cek_news = $this->mymodel->getbywhere('news','news_url',$vurl[0],'row');
						if (empty($cek_news)) {
							$data = array(
							 "title"=>strip_tags($vtitle[0]),
							 "category"=>ucwords(strtolower($vcat[0])),
							 "photo_url"=>$vimg1[0],
							 "description"=>strip_tags($vdesc[0]),
							 "news_url"=>$vurl[0],
							 "sumber"=>'https://celebesonline.com/',
							 "created_at"=>date('Y-m-d H:i:s')
							);
							$in = $this->mymodel->insert('news',$data);
							if ($in>0) {
								echo $vurl[0]."<br>";
								echo $vtitle[0]."<br>";
								echo $vcat[0]."<br>";
								echo $vimg1[0]."<br>";
								echo strip_tags($vdesc[0]);
								echo "<hr>";
							}
						}
					}
		}
	}
	public function fajaronline()
	{
		$object = array();
		$c = 0;
		$kodeHTML =  bacaHTML('http://fajaronline.co.id/');
    //echo $kodeHTML;
    $url = explode('<span class="icon-block">', $kodeHTML);
    //print_r( $url);
    //echo "<br>";
    for($i =1;$i<count($url);$i++){
          //echo $url[$i];
          $vurl = explode('<a href="', $url[$i]);
          $vurl = explode('" title="', $vurl[1]);
          $vcat = explode('<a class="white" href="', $url[$i]);
          $vcat = explode('">', $vcat[1]);
          $vcat = explode('</a>', $vcat[1]);
          $vimg = explode('<img src="', $vurl[1]);
          $vimg1 = explode('" class="setborder"', $vimg[1]);
          $vtitle = explode('<h3 class="fajar-title-news"><a class="gold" href="', $vurl[1]);
          $vtitle = explode('">', $vtitle[1]);
          $vtitle = explode('</a></h3>', $vtitle[1]);

          $kodeHTML_ =  bacaHTML( $vurl[0]);
          $desc = explode('<div class="shortcode-content">', $kodeHTML_);
          $vdesc = explode('<p style="font-size: 12px;font-weight: 500">',   $desc[1]);
          $v = explode('<div',   $vdesc[1]);
          $dd = $vdesc;

					if (!empty($vurl[0]) && !empty($vtitle[0])&& !empty($vcat[0])
					&&!empty($vimg1[0])&&!empty($vdesc[0])) {
						//

						$cek_news = $this->mymodel->getbywhere('news','news_url',$vurl[0],'row');
						if (empty($cek_news)) {
							$data = array(
							 "title"=>strip_tags($vtitle[0]),
							 "category"=>ucwords(strtolower($vcat[0])),
							 "photo_url"=>$vimg1[0],
							 "description"=>strip_tags($vdesc[0]),
							 "news_url"=>$vurl[0],
							 "sumber"=>'http://fajaronline.co.id/',
							 "created_at"=>date('Y-m-d H:i:s')
							);
							// print_r($data);
							// echo "<hr>";
							$in = $this->mymodel->insert('news',$data);
							if ($in>0) {
								echo $vurl[0]."<br>";
								echo $vtitle[0]."<br>";
								echo $vcat[0]."<br>";
								echo $vimg1[0]."<br>";
								echo strip_tags($vdesc[0]);
								echo "<hr>";
							}
						}
					}
		}
	}

	public function rakyatku()
	{
		$object = array();
		$c = 0;
		$kodeHTML =  bacaHTML('http://rakyatku.com/');
		$img = explode('<div class="wp-conten-terkini">', $kodeHTML);
		//echo "<br>";
		for($i =1;$i<count($img);$i++){
					//echo $url[$i];
					$vimg = explode('<div class="img-ct"><img class="lazy"', $img[$i]);
					$vimg = explode('data-original="', $vimg[1]);
					$vimg = explode('" alt="', $vimg[1]);
					$vimg1 = $vimg;
					$vurl = explode('<h3><a href="', $vimg[1]);
					$vurl = explode('" rel="tooltip" title="', $vurl[1]);
					$vtitle = explode('"', $vurl[1]);
					$vcat = explode('<div class="nm-kanal"><a href="', $vimg[1]);
					$vcat = explode('">', $vcat[1]);
          $vcat = explode('</a></div>', $vcat[1]);
					// echo "$vcat[0]";
					$kodeHTML_ =  bacaHTML( $vurl[0]);
					$desc = explode('<div class="content-detail" style="width:660px;">', $kodeHTML_);
					if (!empty($desc[1])) {
						$vdesc = explode('<div class="clear"></div><div class="tag_read"><div class="tag_title">',   $desc[1]);
						//googlescript
						$g_sebelum = explode('<div style="width:300px; height:auto; margin-right:10px; float:left;">',   $vdesc[0]);
						$g_sesudah = explode('</div>',   $vdesc[0]);
						//echo strip_tags($g_sebelum[0]);
						// echo strip_tags($g_sesudah[2]);
						//baca juga
						$b_setelah = explode('</a></li></ul></div>',   $vdesc[0]);
						// echo strip_tags($b_setelah[1]);
						// echo "<hr>";
						if (!empty($g_sebelum[0])&&!empty($g_sesudah[2])&&!empty($b_setelah[1])) {
							$vdesc[0] = strip_tags($g_sebelum[0]).strip_tags($g_sesudah[2]).strip_tags($b_setelah[1]);
						}
					}
					$dd = $vdesc;
					// echo $vurl[0]."<br>";
					// echo $vtitle[0]."<br>";
					// echo $vcat[0]."<br>";
					// echo $vimg1[0]."<br>";
					// echo strip_tags($vdesc[0]);
					// echo "<hr>";
					if (!empty($vurl[0]) && !empty($vtitle[0])&& !empty($vcat[0])
					&&!empty($vimg1[0])&&!empty($vdesc[0])) {
						//

						$cek_news = $this->mymodel->getbywhere('news','news_url',$vurl[0],'row');
						if (empty($cek_news)) {
							$data = array(
							 "title"=>strip_tags($vtitle[0]),
							 "category"=>ucwords(strtolower($vcat[0])),
							 "photo_url"=>$vimg1[0],
							 "description"=>strip_tags($vdesc[0]),
							 "news_url"=>$vurl[0],
							 "sumber"=>'http://rakyatku.com/',
							 "created_at"=>date('Y-m-d H:i:s')
							);
							//  print_r($data);
							// echo "<hr>";
							$in = $this->mymodel->insert('news',$data);
							if ($in>0) {
								echo $vurl[0]."<br>";
								echo $vtitle[0]."<br>";
								echo $vcat[0]."<br>";
								echo $vimg1[0]."<br>";
								echo strip_tags($vdesc[0]);
								echo "<hr>";
							}
						}
					}
		}
	}

	public function gosulsel()
	{
		$object = array();
		$c = 0;
		$kodeHTML =  bacaHTML('https://gosulsel.com');
    $img = explode('<div class="col-md-3 col-sm-3"><img width="170" height="170" src="', $kodeHTML);
    //echo "<br>";
    for($i =1;$i<count($img);$i++){
          //echo $url[$i];
          $vimg = explode('" class="img-responsive wp-post', $img[$i]);
					$vimg1 = $vimg;
          $vurl = explode('<h4 class="news-list-title"><a href="', $vimg[1]);
          $vurl = explode('">', $vurl[1]);
          $vtitle = explode('</a></h4>', $vurl[1]);
          $vcat = explode('<span class="kategori">', $vimg1[1]);
					$vcat = explode('<a href="', $vcat[1]);
          $vcat = explode('">', $vcat[1]);
          $vcat = explode('</a>', $vcat[1]);

          $kodeHTML_ =  bacaHTML( $vurl[0]);
          $desc = explode('<div class="related-post">', $kodeHTML_);
          $vdesc = explode('<div class="test"></div>',   $desc[1]);
          $v = explode('<div',   $vdesc[1]);
          $dd = $vdesc;
					// echo $vurl[0]."<br>";
					// echo $vtitle[0]."<br>";
					// echo $vcat[0]."<br>";
					// echo $vimg1[0]."<br>";
					// echo strip_tags($vdesc[0]);
					// echo "<hr>";
					if (!empty($vurl[0]) && !empty($vtitle[0])&& !empty($vcat[0])
					&&!empty($vimg1[0])&&!empty($vdesc[0])) {
						//

						$cek_news = $this->mymodel->getbywhere('news','news_url',$vurl[0],'row');
						if (empty($cek_news)) {
							$data = array(
							 "title"=>strip_tags($vtitle[0]),
							 "category"=>ucwords(strtolower($vcat[0])),
							 "photo_url"=>$vimg1[0],
							 "description"=>strip_tags($vdesc[0]),
							 "news_url"=>$vurl[0],
							 "sumber"=>'https://gosulsel.com',
							 "created_at"=>date('Y-m-d H:i:s')
							);
							 //print_r($data);
							// echo "<hr>";
							$in = $this->mymodel->insert('news',$data);
							if ($in>0) {
								echo $vurl[0]."<br>";
								echo $vtitle[0]."<br>";
								echo $vcat[0]."<br>";
								echo $vimg1[0]."<br>";
								echo strip_tags($vdesc[0]);
								echo "<hr>";
							}
						}
					}
		}
	}
	public function inikata()
	{
		$object = array();
		$c = 0;
		$kodeHTML =  bacaHTML('http://www.inikata.com/');
    //echo $kodeHTML;
    $url = explode('<div class="content-thumbnail">', $kodeHTML);
    //print_r( $url);
    //echo "<br>";
    for($i =1;$i<count($url);$i++){
          //echo $url[$i];
          $vurl = explode('<div class="content-thumbnail"><a href="', $url[$i]);
          $vurl = explode('" itemprop="url"', $vurl[1]);
          $a=  $vurl;
          $vtitle = explode('title="', $vurl[1]);
          $vtitle = explode('" rel="bookmark">', $vtitle[1]);
          $vimg = explode('<img width="150" height="150" src="', $vurl[1]);
          $vimg1 = explode('" class="attachment-medium ', $vimg[1]);
          $vcat = explode('<div class="gmr-metacontent"><span class="cat-links">', $url[$i]);
					$vcat = explode('" rel="category tag">', $vcat[1]);
          $vcat = explode('</a></span>', $vcat[1]);

          $kodeHTML_ =  bacaHTML( $vurl[0]);
          $desc = explode('<div class="entry-content entry-content-single" itemprop="text">', $kodeHTML_);
          $vdesc = explode('</div><!-- .entry-content -->',   $desc[1]);
          $v = explode('<div',   $vdesc[1]);
          $dd = $vdesc;
					// echo $vurl[0]."<br>";
					// echo $vtitle[0]."<br>";
					// echo $vcat[0]."<br>";
					// echo $vimg1[0]."<br>";
					// echo strip_tags($vdesc[0]);
					// echo "<hr>";
					if (!empty($vurl[0]) && !empty($vtitle[0])&& !empty($vcat[0])
					&&!empty($vimg1[0])&&!empty($vdesc[0])) {
						//

						$cek_news = $this->mymodel->getbywhere('news','news_url',$vurl[0],'row');
						if (empty($cek_news)) {
							$data = array(
							 "title"=>strip_tags($vtitle[0]),
							 "category"=>ucwords(strtolower($vcat[0])),
							 "photo_url"=>$vimg1[0],
							 "description"=>strip_tags($vdesc[0]),
							 "news_url"=>$vurl[0],
							 "sumber"=>'http://www.inikata.com/',
							 "created_at"=>date('Y-m-d H:i:s')
							);
							 //print_r($data);
							// echo "<hr>";
							$in = $this->mymodel->insert('news',$data);
							if ($in>0) {
								echo $vurl[0]."<br>";
								echo $vtitle[0]."<br>";
								echo $vcat[0]."<br>";
								echo $vimg1[0]."<br>";
								echo strip_tags($vdesc[0]);
								echo "<hr>";
							}
						}
					}
		}
	}
	public function kabarnews()
	{
		$object = array();
		$c = 0;
		$kodeHTML =  bacaHTML('https://kabar.news/');
    //echo $kodeHTML;
    $url = explode('<div class="gva-carousel-5">', $kodeHTML);
    //print_r( $url);
    //echo "<br>";
    for($i =1;$i<count($url);$i++){
          //echo $url[$i];
          $vurl = explode('<a href="', $url[$i]);
          $vurl = explode('"', $vurl[1]);
          $vtitle = explode('<div class="post-title">', $url[$i]);
          $vtitle = explode('hreflang="en">', $vtitle[1]);
          $vtitle = explode('</a>', $vtitle[1]);
          $vimg = explode('<img src="',  $url[$i]);
          $vimg1 = explode('" width="', $vimg[1]);

          $kodeHTML_ =  bacaHTML( "https://kabar.news".$vurl[0]);
          $desc = explode('</em></h6>', $kodeHTML_);
          $vdesc = explode('<span class="a2a_kit a2a_kit_size_34 ',   $desc[1]);
					$vcat = explode('<div class="post-categories " >', $kodeHTML_);
					$vcat = explode('hreflang="en">', $vcat[1]);
          $vcat = explode('</a></div>', $vcat[1]);
          $v = explode('<div',   $vdesc[1]);
          $dd = $vdesc;
					// echo $vurl[0]."<br>";
					// echo $vtitle[0]."<br>";
					// echo $vcat[0]."<br>";
					// echo $vimg1[0]."<br>";
					// echo strip_tags($vdesc[0]);
					// echo "<hr>";
					if (!empty($vurl[0]) && !empty($vtitle[0])&& !empty($vcat[0])
					&&!empty($vimg1[0])&&!empty($vdesc[0])) {
						//

						$cek_news = $this->mymodel->getbywhere('news','news_url',$vurl[0],'row');
						if (empty($cek_news)) {
							$data = array(
							 "title"=>strip_tags($vtitle[0]),
							 "category"=>ucwords(strtolower($vcat[0])),
							 "photo_url"=>"https://kabar.news".$vimg1[0],
							 "description"=>strip_tags($vdesc[0]),
							 "news_url"=>"https://kabar.news".$vurl[0],
							 "sumber"=>'https://kabar.news',
							 "created_at"=>date('Y-m-d H:i:s')
							);
							 //print_r($data);
							// echo "<hr>";
							$in = $this->mymodel->insert('news',$data);
							if ($in>0) {
								echo $vurl[0]."<br>";
								echo $vtitle[0]."<br>";
								echo $vcat[0]."<br>";
								echo $vimg1[0]."<br>";
								echo strip_tags($vdesc[0]);
								echo "<hr>";
							}
						}
					}
		}
	}
	public function lintasterkini()
	{
		$object = array();
		$c = 0;
		$kodeHTML =  bacaHTML('http://lintasterkini.com/');
    //echo $kodeHTML;
    $url = explode('<div class="wp-thumb-news">', $kodeHTML);
    //print_r( $url);
    //echo "<br>";
    for($i =1;$i<count($url);$i++){
          //echo $url[$i];
          $vurl = explode('<a class="ga_BreakingMore" href="', $url[$i]);
          $vurl = explode('" title="', $vurl[1]);
          $vtitle = explode('">', $vurl[1]);
          $vimg = explode('<div class="thumb-news img-responsive lazy" data-original="', $vtitle[1]);
          $vimg1 = explode('" style="', $vimg[1]);


          $kodeHTML_ =  bacaHTML( $vurl[0]);
          $desc = explode('<div id="contentx" class="read entry-content" itemprop="articleBody">', $kodeHTML_);
          $vdesc = explode('<script async src="',   $desc[1]);
          $vcat = explode('<li typeof="v:Breadcrumb"><a property="v:title" rel="v:url" href="', $kodeHTML_);
					$vcat = explode('">', $vcat[1]);
          $vcat = explode('</a></li>', $vcat[1]);
          $v = explode('<div',   $vdesc[1]);
          $dd = $vdesc;
					// echo $vurl[0]."<br>";
					// echo $vtitle[0]."<br>";
					// echo $vcat[0]."<br>";
					// echo $vimg1[0]."<br>";
					// echo strip_tags($vdesc[0]);
					// echo "<hr>";
					if (!empty($vurl[0]) && !empty($vtitle[0])&& !empty($vcat[0])
					&&!empty($vimg1[0])&&!empty($vdesc[0])) {
						//

						$cek_news = $this->mymodel->getbywhere('news','news_url',$vurl[0],'row');
						if (empty($cek_news)) {
							$data = array(
							 "title"=>strip_tags($vtitle[0]),
							 "category"=>ucwords(strtolower($vcat[0])),
							 "photo_url"=>$vimg1[0],
							 "description"=>strip_tags($vdesc[0]),
							 "news_url"=>$vurl[0],
							 "sumber"=>'http://lintasterkini.com/',
							 "created_at"=>date('Y-m-d H:i:s')
							);
							 //print_r($data);
							// echo "<hr>";
							$in = $this->mymodel->insert('news',$data);
							if ($in>0) {
								echo $vurl[0]."<br>";
								echo $vtitle[0]."<br>";
								echo $vcat[0]."<br>";
								echo $vimg1[0]."<br>";
								echo strip_tags($vdesc[0]);
								echo "<hr>";
							}
						}
					}
		}
	}
	public function makassartoday()
	{
		$object = array();
		$c = 0;
		$kodeHTML =  bacaHTML('http://makassartoday.com/');
    //echo $kodeHTML;
    $url = explode('<li class="mvp-blog-story-wrap left relative infinite-post">', $kodeHTML);
    //print_r( $url);
    //echo "<br>";
    for($i =1;$i<count($url);$i++){
          //echo $url[$i];
          $vurl = explode('<a href="', $url[$i]);
          $vurl = explode('" rel="bookmark">', $vurl[1]);
          $vimg = explode('<img width="400" height="240" src="', $vurl[1]);
          $vimg1 = explode('" class="mvp-reg-img lazy wp-post-image" alt=', $vimg[1]);
          $vtitle = explode('<h2>', $vimg1[1]);
          $vtitle = explode('</h2>', $vtitle[1]);


          $kodeHTML_ =  bacaHTML( $vurl[0]);
          $desc = explode('<div class="theiaPostSlider_preloadedSlide">', $kodeHTML_);
          $vdesc = explode('</div></div>',   $desc[1]);
          $v = explode('<div',   $vdesc[1]);
          $dd = $vdesc;
          $vcat = explode('<h3 class="mvp-post-cat left relative"><a class="mvp-post-cat-link" href="', $kodeHTML_);
					$vcat = explode('"><span class="mvp-post-cat left">', $vcat[1]);
          $vcat = explode('</span></a></h3>', $vcat[1]);
					// echo $vurl[0]."<br>";
					// echo $vtitle[0]."<br>";
					// echo $vcat[0]."<br>";
					// echo $vimg1[0]."<br>";
					// echo strip_tags($vdesc[0]);
					// echo "<hr>";
					if (!empty($vurl[0]) && !empty($vtitle[0])&& !empty($vcat[0])
					&&!empty($vimg1[0])&&!empty($vdesc[0])) {
						//

						$cek_news = $this->mymodel->getbywhere('news','news_url',$vurl[0],'row');
						if (empty($cek_news)) {
							$data = array(
							 "title"=>strip_tags($vtitle[0]),
							 "category"=>ucwords(strtolower($vcat[0])),
							 "photo_url"=>$vimg1[0],
							 "description"=>strip_tags($vdesc[0]),
							 "news_url"=>$vurl[0],
							 "sumber"=>'http://makassartoday.com/',
							 "created_at"=>date('Y-m-d H:i:s')
							);
							 //print_r($data);
							// echo "<hr>";
							$in = $this->mymodel->insert('news',$data);
							if ($in>0) {
								echo $vurl[0]."<br>";
								echo $vtitle[0]."<br>";
								echo $vcat[0]."<br>";
								echo $vimg1[0]."<br>";
								echo strip_tags($vdesc[0]);
								echo "<hr>";
							}
						}
					}
		}
	}
	public function online24()
	{
		$object = array();
		$c = 0;
		$kodeHTML =  bacaHTML('http://online24jam.com/');
    //echo $kodeHTML;
    $url = explode('<div class="td_module_16 td_module_wrap td-animation-stack">', $kodeHTML);
    //print_r( $url);
    //echo "<br>";
    for($i =1;$i<count($url);$i++){
          //echo $url[$i];
          $vurl = explode('<a href="', $url[$i]);
          $vurl = explode('" rel="bookmark', $vurl[1]);
          $vtitle = explode('" title="', $vurl[1]);
          $vtitle = explode('">', $vtitle[1]);
          $vimg = explode('src="', $vtitle[1]);
          $vimg1 = explode('"', $vimg[1]);


          $kodeHTML_ =  bacaHTML( $vurl[0]);
          $desc = explode('<!-- end A --> ', $kodeHTML_);
          $vdesc = explode('<script ',   $desc[1]);
          $v = explode('<script ',   $vdesc[1]);
          $dd = $vdesc;

          $vcat = explode('class="entry-crumb" itemscope itemprop="item" itemtype="http://schema.org/Thing" href="', $kodeHTML_);
					$vcat = explode('<span itemprop="name">', $vcat[1]);
          $vcat = explode('</span>', $vcat[1]);
					// echo $vurl[0]."<br>";
					// echo $vtitle[0]."<br>";
					// echo $vcat[0]."<br>";
					// echo $vimg1[0]."<br>";
					// echo strip_tags($vdesc[0]);
					// echo "<hr>";
					if (!empty($vurl[0]) && !empty($vtitle[0])&& !empty($vcat[0])
					&&!empty($vimg1[0])&&!empty($vdesc[0])) {
						//

						$cek_news = $this->mymodel->getbywhere('news','news_url',$vurl[0],'row');
						if (empty($cek_news)) {
							$data = array(
							 "title"=>strip_tags($vtitle[0]),
							 "category"=>ucwords(strtolower($vcat[0])),
							 "photo_url"=>$vimg1[0],
							 "description"=>strip_tags($vdesc[0]),
							 "news_url"=>$vurl[0],
							 "sumber"=>'http://online24jam.com/',
							 "created_at"=>date('Y-m-d H:i:s')
							);
							print_r($data);
							// echo "<hr>";
							$in = $this->mymodel->insert('news',$data);
							if ($in>0) {
								echo $vurl[0]."<br>";
								echo $vtitle[0]."<br>";
								echo $vcat[0]."<br>";
								echo $vimg1[0]."<br>";
								echo strip_tags($vdesc[0]);
								echo "<hr>";
							}
						}
					}
		}
	}
	public function sulselsatu()
	{
		$object = array();
		$c = 0;
		$kodeHTML =  bacaHTML('https://www.sulselsatu.com/');
    //echo $kodeHTML;
    $url = explode('<div class="post-image-bg">', $kodeHTML);
    //print_r( $url);
    //echo "<br>";
    for($i =1;$i<count($url);$i++){
          //echo $url[$i];
          $vurl = explode('<a href="', $url[$i]);
          $vurl = explode('">', $vurl[1]);
          $vtitle = explode('" alt="', $vurl[1]);
          $vtitle = explode('"', $vtitle[1]);
          $vimg =  explode('data-src="', $vurl[1]);
          $vimg1 = explode('" alt=', $vimg[1]);


          $kodeHTML_ =  bacaHTML( $vurl[0]);
          $desc = explode('<div class="col-md-8">', $kodeHTML_);
          $vdesc = explode('<div id="bsa-html"',   $desc[1]);
          $vdesc = explode('<style type="text/css">',   $vdesc[0]);
          $v = explode('<div',   $vdesc[1]);
          $dd = $vdesc;


          $vcat = explode('<ul class="td-category"><li class="entry-category"><a href="', $kodeHTML_);
					$vcat = explode('">', $vcat[1]);
          $vcat = explode('</a>', $vcat[1]);
					// echo $vurl[0]."<br>";
					// echo $vtitle[0]."<br>";
					// echo $vcat[0]."<br>";
					// echo $vimg1[0]."<br>";
					// echo strip_tags($vdesc[0]);
					// echo "<hr>";
					if (!empty($vurl[0]) && !empty($vtitle[0])&& !empty($vcat[0])
					&&!empty($vimg1[0])&&!empty($vdesc[0])) {
						//

						$cek_news = $this->mymodel->getbywhere('news','news_url',$vurl[0],'row');
						if (empty($cek_news)) {
							$data = array(
							 "title"=>strip_tags($vtitle[0]),
							 "category"=>ucwords(strtolower($vcat[0])),
							 "photo_url"=>$vimg1[0],
							 "description"=>strip_tags($vdesc[0]),
							 "news_url"=>$vurl[0],
							 "sumber"=>'https://www.sulselsatu.com/',
							 "created_at"=>date('Y-m-d H:i:s')
							);
							//print_r($data);
							// echo "<hr>";
							//$in = $this->mymodel->insert('news',$data);
							if ($in>0) {
								echo $vurl[0]."<br>";
								echo $vtitle[0]."<br>";
								echo $vcat[0]."<br>";
								echo $vimg1[0]."<br>";
								echo strip_tags($vdesc[0]);
								echo "<hr>";
							}
						}
					}
		}
	}
	public function bacapesan()
	{
		$object = array();
		$c = 0;
		$kodeHTML =  bacaHTML('https://bacapesan.com/');
    //echo $kodeHTML;
    $url = explode('<div class="gmr-box-content hentry gmr-archive clearfix">', $kodeHTML);
    //print_r( $url);
    //echo "<br>";
    for($i =1;$i<count($url);$i++){
          //echo $url[$i];
          $vurl = explode('<a href="', $url[$i]);
          $a=  $vurl;
          $vurl = explode('" itemprop="url" title="Tautan ke: ', $vurl[1]);
          $vtitle = explode('" rel="bookmark">', $vurl[1]);
          $vimg = explode('<img width="148" height="111" src="', $vtitle[0]);
          $vimg1 = explode('" class="attachment-medium size-medium wp-post-image"', $vimg[0]);
          $vcat = explode('rel="category tag">', $a[3]);
          $vcat = explode('</a></span>', $vcat[1]);

          $kodeHTML_ =  bacaHTML( $vurl[0]);
          $desc = explode('<div class="entry-content entry-content-single" itemprop="text">', $kodeHTML_);
          $vdesc = explode('</div>',   $desc[1]);
          $v = explode('<div',   $vdesc[1]);
          $dd = $vdesc;

          if (!empty($vurl[0]) && !empty($vtitle[0])&& !empty($vcat[0])
          &&!empty($vimg1[0])&&!empty($vdesc[0])) {
		  $cek_news = $this->mymodel->getbywhere('news','news_url',$vurl[0],'row');
						if (empty($cek_news)) {
							$data = array(
							 "title"=>strip_tags($vtitle[0]),
							 "category"=>ucwords(strtolower($vcat[0])),
							 "photo_url"=>$vimg1[0],
							 "description"=>strip_tags($vdesc[0]),
							 "news_url"=>$vurl[0],
							 "sumber"=>'http://bacapesan.com/',
							 "created_at"=>date('Y-m-d H:i:s')
							);
							$in = $this->mymodel->insert('news',$data);
							if ($in>0) {
								echo $vurl[0]."<br>";
								echo $vtitle[0]."<br>";
								echo $vcat[0]."<br>";
								echo $vimg1[0]."<br>";
								echo strip_tags($vdesc[0]);
								echo "<hr>";
							}
						}
         	 }
    	}
	}
	public function rakyatsulsel()
	{
		$object = array();
		$c = 0;
		$kodeHTML =  bacaHTML('https://rakyatsulsel.com/');
    //echo $kodeHTML;
    $url = explode('<div class="wrapper listterbaru">', $kodeHTML);
    print_r( $url);
    //echo "<br>";
    /*for($i =1;$i<count($url);$i++){
          //echo $url[$i];
          $vurl = explode('<a href="', $url[$i]);
          $vurl = explode('">', $vurl[1]);
          $vtitle = explode('" title="', $vurl[1]);
          $vtitle = explode('"', $vtitle[1]);
          $vimg =  explode('data-src="', $vurl[1]);
          $vimg1 = explode('" alt=', $vimg[1]);


          $kodeHTML_ =  bacaHTML( $vurl[0]);
          $desc = explode('<div class="col-md-8">', $kodeHTML_);
          $vdesc = explode('<div id="bsa-html"',   $desc[1]);
          $vdesc = explode('<style type="text/css">',   $vdesc[0]);
          $v = explode('<div',   $vdesc[1]);
          $dd = $vdesc;


          $vcat = explode('<ul class="td-category"><li class="entry-category"><a href="', $kodeHTML_);
					$vcat = explode('">', $vcat[1]);
          $vcat = explode('</a>', $vcat[1]);
					// echo $vurl[0]."<br>";
					// echo $vtitle[0]."<br>";
					// echo $vcat[0]."<br>";
					// echo $vimg1[0]."<br>";
					// echo strip_tags($vdesc[0]);
					// echo "<hr>";
					if (!empty($vurl[0]) && !empty($vtitle[0])&& !empty($vcat[0])
					&&!empty($vimg1[0])&&!empty($vdesc[0])) {
						//

						$cek_news = $this->mymodel->getbywhere('news','news_url',$vurl[0],'row');
						if (empty($cek_news)) {
							$data = array(
							 "title"=>strip_tags($vtitle[0]),
							 "category"=>ucwords(strtolower($vcat[0])),
							 "photo_url"=>$vimg1[0],
							 "description"=>strip_tags($vdesc[0]),
							 "news_url"=>$vurl[0],
							 "sumber"=>'https://www.sulselsatu.com/',
							 "created_at"=>date('Y-m-d H:i:s')
							);
							//print_r($data);
							// echo "<hr>";
							//$in = $this->mymodel->insert('news',$data);
							//if ($in>0) {
								echo $vurl[0]."<br>";
								echo $vtitle[0]."<br>";
								echo $vcat[0]."<br>";
								echo $vimg1[0]."<br>";
								echo strip_tags($vdesc[0]);
								echo "<hr>";
							//}
						}
					}
		}*/
	}
}
?>
