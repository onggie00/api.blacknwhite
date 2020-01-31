 <!DOCTYPE HTML>
<html lang="en">
<head>
	<title><?php echo $title; ?></title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8">


	<!-- Font -->

	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700%7CPoppins:400,500" rel="stylesheet">

	<!-- Stylesheets -->

	<link href="<?php echo base_url('assets/undian/'); ?>common-css/bootstrap.css" rel="stylesheet">


	<link href="<?php echo base_url('assets/undian/'); ?>common-css/ionicons.css" rel="stylesheet">


	<link rel="stylesheet" href="<?php echo base_url('assets/undian/'); ?>common-css/jquery.classycountdown.css" />

	<link href="<?php echo base_url('assets/undian/'); ?>01-comming-soon/css/styles.css" rel="stylesheet">

	<link href="<?php echo base_url('assets/undian/'); ?>01-comming-soon/css/responsive.css" rel="stylesheet">

	<link rel="stylesheet" href="<?php echo base_url('assets/undian/'); ?>style.css">

</head>
<body style="overflow:scroll;">

	<div class="main-area">
		<div class="container full-height position-static">

			<section class="left-section full-height">
				<div class="logo_rsb">
					<img src="<?php echo base_url('assets/undian/'); ?>images/gelaplogo.png" alt="Logo1">
				</div>

				<div class="display-table">
					<div class="display-table-cell">
						<div class="main-content">
							<h2 class="title" style>PEMENANG UNDIAN RSB</h2>
							<p >Kategori <?php echo $kategori; ?></p>
							
							<div class="clear"></div>

							<div class="table_pemenang" id="pemenang">
                <table border=1>
                  <tr>
                    <th>Nomor Urut</th>
                    <th>Nama Pemenang</th>
                    <th>Nomor Kartu</th>
                  </tr>
                  <?php 
                  $nmr = 1;
                  foreach ($pemenang as $key => $value) {
                    if ($value->nomer_kartu>100 && $value->nomer_kartu<1000) {
                      $value->nomer_kartu = "000".$value->nomer_kartu;
                    }else if ($value->nomer_kartu>1000 && $value->nomer_kartu<10000) {
                      $value->nomer_kartu = "00".$value->nomer_kartu;
                    }else if ($value->nomer_kartu>10000 && $value->nomer_kartu<100000) {
                      $value->nomer_kartu = "0".$value->nomer_kartu;
                    }

                    echo "<tr>";
                    echo "<td>".$nmr."</td>";
                    echo "<td>".$value->nama_depan." ".$value->nama_belakang."</td>";
                    echo "<td>".$value->nomer_kartu."</td>";
                    echo "</tr>";
                    $nmr++;
                  }
                   ?>
                </table>
              </div>
              
              <div id="undian_selanjutnya1" class="btn_undian" >
                <a class="btn btn-default" >
                <h5><span ><i class="ion-arrow-forward"> &nbsp;&nbsp; </i></span> Lanjutkan</h5>
               </a>
              </div>
							<div id="undian_selanjutnya2" class="btn_undian" onclick="mobil()">
								<a class="btn btn-default" >
								<h5><span ><i class="ion-arrow-forward"> &nbsp;&nbsp; </i></span> Lanjutkan</h5>
							 </a>
							</div>
              <div id="undian_selanjutnya3" class="btn_undian" onclick="umroh()">
                <a class="btn btn-default" >
                <h5><span ><i class="ion-arrow-forward"> &nbsp;&nbsp; </i></span> Lanjutkan</h5>
               </a>
              </div>
              <div id="undian_selanjutnya4" class="btn_undian" onclick="motor()">
                <a class="btn btn-default" >
                <h5><span ><i class="ion-arrow-forward"> &nbsp;&nbsp; </i></span> Lanjutkan</h5>
               </a>
              </div>
              <div id="undian_selanjutnya5" class="btn_undian" onclick="kulkas()">
                <a class="btn btn-default" >
                <h5><span ><i class="ion-arrow-forward"> &nbsp;&nbsp; </i></span> Lanjutkan</h5>
               </a>
              </div>
              <div id="undian_selanjutnya6" class="btn_undian" onclick="mesin_cuci()">
                <a class="btn btn-default" >
                <h5><span ><i class="ion-arrow-forward"> &nbsp;&nbsp; </i></span> Lanjutkan</h5>
               </a>
              </div>
              <div id="undian_selanjutnya7" class="btn_undian" onclick="tvled()">
                <a class="btn btn-default" >
                <h5><span ><i class="ion-arrow-forward"> &nbsp;&nbsp; </i></span> Lanjutkan</h5>
               </a>
              </div>
              <div id="undian_selanjutnya8" class="btn_undian" onclick="smartphone()">
                <a class="btn btn-default" >
                <h5><span ><i class="ion-arrow-forward"> &nbsp;&nbsp; </i></span> Lanjutkan</h5>
               </a>
              </div>
              <div id="undian_selanjutnya9" class="btn_undian" onclick="pulsa()">
                <a class="btn btn-default" >
                <h5><span ><i class="ion-arrow-forward"> &nbsp;&nbsp; </i></span> Lanjutkan</h5>
               </a>
              </div>


<!--simpan data hidden-->
							
						</div><!-- main-content -->
					</div><!-- display-table-cell -->
				</div><!-- display-table -->
				
			<div class="footer_social">
				<ul class="footer-icons">
					<li >Stay in touch : </li>
					<li ><a href="#"><i class="ion-social-facebook" style="color: #777777;" ></i></a></li>
					<li ><a href="#"><i class="ion-social-twitter" style="color: #777777;" ></i></a></li>
					<li ><a href="#"><i class="ion-social-googleplus" style="color: #777777;" ></i></a></li>
					<li ><a href="#"><i class="ion-social-instagram-outline" style="color: #777777;" ></i></a></li>
					<li ><a href="#"><i class="ion-social-pinterest" style="color: #777777;" ></i></a></li>
				</ul>
			</div>
				

			</section><!-- left-section -->

			<section class="right-section slider_layout" >
				 <!-- Slideshow container -->
<div class="slideshow-container">

  <!-- Full-width images with number and caption text -->
  <div class="mySlides fade">
    <div class="caption_text">Event RSB</div>
    <img src="<?php echo base_url('assets/undian/'); ?>images/bg1-min.png" style="width:100%">
    
  </div>

  <div class="mySlides fade">
    <div class="caption_text">Event RSB</div>
    <img src="<?php echo base_url('assets/undian/'); ?>images/bg2-min.png" style="width:100%">
    
  </div>

  <div class="detail_event">
    <h4>Kumpul Akbar RSB</h4>
    <p><span class="icon_event"><i class="ion-calendar"></i></span>Sabtu, 26 Januari 2019 - 15.30 WITA</p>
    <p><span class="icon_event"><i class="ion-map"></i></span>Lapangan Karebosi Makassar </p>
  </div>

  <!-- Next and previous buttons -->
  <div class="layout-button">
    <a class="prev" onclick="plusSlides(-1)" style="color:#FFFFFF;right:55px;font-weight: lighter;">&#10094;</a>
    <a class="next" onclick="plusSlides(1)" style="color:#FFFFFF;font-weight: lighter;">&#10095;</a>
  </div>
</div>
<br>

			</section><!-- right-section -->

		</div><!-- container -->
	</div><!-- main-area -->

	<!-- SCIPTS -->

	<script src="https://unpkg.com/ionicons@4.5.1/dist/ionicons.js"></script>
  <script src="../assets/undian/common-js/jquery-3.1.1.min.js"></script>

  <script src="../assets/undian/common-js/tether.min.js"></script>

  <script src="../assets/undian/common-js/bootstrap.js"></script>

  <script src="../assets/undian/common-js/jquery.classycountdown.js"></script>

  <script src="../assets/undian/common-js/jquery.knob.js"></script>

  <script src="../assets/undian/common-js/jquery.throttle.js"></script>

  <script src="../assets/undian/common-js/scripts.js"></script>

  <script>
  var cek;
  var cek2;
  var arr =[];
  var ctr2=0;
  var myVar;
  var pencet = 0;
  //var audio = new Audio('assets/undian/sounds/roulette_roll_effect.mp3');
  
  var d = 0;
  var d1 = 9;
  var d2 = 2;
  var d3 = 4;
  var d4 = 2;
  var d5 = 6;
  var ctr = 0;
  var wkt_lagu=0;
//hidden button daftar
for (var i = 1; i < 10; i++) {
  document.getElementById("undian_selanjutnya"+i).style.display = "none";
};

//cek daftar
var alamat = window.location.href;
var cek_kategori = alamat.substring(alamat.indexOf('=')+1);
cek_kategori--;
console.log(cek_kategori);
if (cek_kategori !=0) {
    document.getElementById("undian_selanjutnya"+cek_kategori).style.display = "block";
  };



function rumah(){
  window.location.assign("<?php echo base_url(); ?>undian/rumah");
}
function mobil(){
  window.location.assign("<?php echo base_url(); ?>undian/mobil");
}
function umroh(){
  window.location.assign("<?php echo base_url(); ?>undian/umroh");
}
function motor(){
  window.location.assign("<?php echo base_url(); ?>undian/motor");
}
function kulkas(){
  window.location.assign("<?php echo base_url(); ?>undian/kulkas");
}
function mesin_cuci(){
  window.location.assign("<?php echo base_url(); ?>undian/mesin_cuci");
}
function tvled(){
  window.location.assign("<?php echo base_url(); ?>undian/tvled");
}
function smartphone(){
  window.location.assign("<?php echo base_url(); ?>undian/smartphone");
}
function pulsa(){
  window.location.assign("<?php echo base_url(); ?>undian/pulsa");
}

   
//Slider
var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  
  slides[slideIndex-1].style.display = "block";
 
} 

  </script>
</body>
</html>
