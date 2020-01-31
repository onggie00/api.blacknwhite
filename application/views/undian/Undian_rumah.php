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
<body>
<div id="pemenang_kategori" class="hidden">
  <?php 
  foreach ($pemenang_kategori as $key => $value) {
    echo $value->nomer_kartu.';';
  }
  ?>
</div>
	<div class="main-area">
		<div class="container full-height position-static">

			<section class="left-section full-height">
				<div class="logo_rsb">
					<img src="<?php echo base_url('assets/undian/'); ?>images/gelaplogo.png" alt="Logo1">
				</div>

				<div class="display-table">
					<div class="display-table-cell">
						<div class="main-content">
							<h1 class="title">UNDIAN RUMAH <span id="counter">
                
              </span>
            </h1>
							
							<p >Rezeki Sejuta Bintang (RSB) adalah sebuah jaringan yang
mempertemukan semua individu yang ingin sukses dan bahagia.</p>
							<div class="nomor_undian">
								<center>
									<h2 id="angka1">0</h2>
								</center>
							</div>
							<div class="nomor_undian">
								<center>
									<h2 id="angka2">0</h2>
								</center>
							</div>

							<div class="nomor_undian">
								<center>
									<h2 id="angka3">0</h2>
								</center>
							</div>

							<div class="nomor_undian">
								<center>
									<h2 id="angka4">0</h2>
								</center>
							</div>

							<div class="nomor_undian">
								<center>
									<h2 id="angka5">0</h2>
								</center>
							</div>

							<div class="nomor_undian">
								<center>
									<h2 id="angka6">0</h2>
								</center>
							</div>
							<div class="clear"></div>

							<div id="play" class="btn_undian" onclick="random()">
								<a class="btn btn-default" >
								<h5><span ><i class="ion-play"> &nbsp;&nbsp; </i></span> Putar Undian</h5>
							 </a>
							</div>
              <div id="stop" class="btn_stop_undian" onclick="stopundian()">
                <a class="btn btn-default" >
                <h5><span ><i class="ion-stop"> &nbsp;&nbsp; </i></span> Stop Undian</h5>
               </a>
              </div>
              <div id="pemenang" class="btn_pemenang" onclick="pemenangundian()">
                <a class="btn btn-default" >
                <h5> Lihat Pemenang</h5>
               </a>
              </div>
<div class="ketentuan">
    <p><?php echo $syarat; ?></p>
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

			<section class="right-section" >
				 <img src="<?php echo base_url('assets/undian/'); ?>images/bg-rumah.png" style="width:100%;height:100%">
			</section><!-- right-section -->

		</div><!-- container -->
	</div><!-- main-area -->

	<!-- SCIPTS -->

<!--
  <script src="../rsb/assets/undian/common-js/jquery-3.1.1.min.js"></script>

  <script src="../rsb/assets/undian/common-js/tether.min.js"></script>

  <script src="../rsb/assets/undian/common-js/bootstrap.js"></script>

  <script src="../rsb/assets/undian/common-js/jquery.classycountdown.js"></script>

  <script src="../rsb/assets/undian/common-js/jquery.knob.js"></script>

  <script src="../rsb/assets/undian/common-js/jquery.throttle.js"></script>

  <script src="../rsb/assets/undian/common-js/scripts.js"></script>
-->


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
  var nomor = 1;
  document.getElementById("counter").innerHTML = "Ke- "+nomor;
  /*
  var audio = new Audio('../rsb/assets/undian/sounds/sound_drum30.mp3');
  var audio2 = new Audio('../rsb/assets/undian/sounds/sound_winner.mp3');
  */
 
  var audio = new Audio('../assets/undian/sounds/sound_drum30.mp3');
  var audio2 = new Audio('../assets/undian/sounds/sound_winner.mp3');
 
  var d = 0;
  var d1 = 9;
  var d2 = 2;
  var d3 = 4;
  var d4 = 2;
  var d5 = 6;
  var ctr = 0;
  var total_putar = 0;

//isi array random unique number
  var lines = [];
  var baris_pemenang =[];
  var arr =[];


  //get data dalam database berdasarkan kategori 
    var database_pemenang = [];
    database_pemenang = document.getElementById('pemenang_kategori').innerHTML;
    database_pemenang = database_pemenang.split(';');
    database_pemenang.pop();
    //remove \n
    database_pemenang = database_pemenang.filter(function(item) {
    return item !== "\n";
    }).map(function(item) {
      return item.replace(/\n/g,'');
    });
    //remove whitespace
    database_pemenang = database_pemenang.map(str => 
      str.replace(/\s/g, '')
    );

$(document).ready(function() {
    $.ajax({
        type: "GET",
        url: "<?php echo base_url(); ?>assets/list_peserta.txt",
        dataType: "text",
        success: function(data) {processData(data);}
     });
});

function processData(allText) {
    var allTextLines = allText.split(/\r\n|\n/);
    var headers = allTextLines[0].split(',');
    

    for (var i=0; i<allTextLines.length; i++) {
        var data = allTextLines[i].split(',');
        if (data.length == headers.length) {

            var tarr = [];
            for (var j=0; j<headers.length; j++) {
                //insert +cek data sudah ada di database (Unique)
              if (database_pemenang.indexOf(data[j]) > -1) {
              continue;
              }else{
                tarr.push(data[j]);
              }
            }
            lines.push(tarr);
        }
    }
    //var acak1 = Math.floor(Math.random() * 250);
    //baris_pemenang = lines[acak1];
    for (var i = 0; i < lines.length; i++) {
        var acak1 = Math.floor(Math.random() * 250);
        var acak2 = Math.floor(Math.random() * 200);
        var cek = lines[acak1][acak2].toString();
        if (arr.indexOf(cek) > -1) {
          continue;
        }else{
          arr.push(lines[acak1][acak2]);
        }
    };
    //console.log(baris_pemenang);
    // alert(lines);
}
console.log(database_pemenang);
console.log(arr);
//close random unique angka

   function random(){
		if (pencet==0) {

  		clearInterval(myVar);
  		myVar = setInterval(myTimer ,80);

      audio.play();
      pencet = 1;
      var x = document.getElementById("play");
      var y = document.getElementById("stop");
      if (pencet==1) {
            y.style.display = "block";
            x.style.display = "none";
      }
//Mulai timer berjalan

    var x = document.getElementById("play");
    var y = document.getElementById("stop");
    /*if (x.style.display == "none") {
      y.style.display = "block";
    } else {
      x.style.display = "none";
    }*/
    if (pencet==1) {
      y.style.display = "block";
      x.style.display = "none";
    }

    document.getElementById("angka1").innerHTML = d;
    document.getElementById("angka2").innerHTML = d1;
    document.getElementById("angka3").innerHTML = d2;
    document.getElementById("angka4").innerHTML = d3;
    document.getElementById("angka5").innerHTML = d4;
    document.getElementById("angka6").innerHTML = d5;
    d++; d1++;
    d2++; d3++; d4++; d5++;
    if(d>9)d=0; if(d1>9)d1=0;
    if(d2>9)d2=0; if(d3>9)d3=0;
    if(d4>9)d4=0; if(d5>9)d5=0;

    }
    total_putar++;
  }
//stop
  function stopundian(){
    nomor++;
    if (nomor<=20) {
        if(nomor >= 2){
            document.getElementById("counter").innerHTML = "Ke- 2";
        }else{
            document.getElementById("counter").innerHTML = "Ke- "+nomor;
        }
    }
    pencet=0;
    audio.pause();
    audio.currentTime = 0;
    audio2.play();
    var x = document.getElementById("play");
    var y = document.getElementById("stop");
    var z = document.getElementById("pemenang");
    console.log(total_putar);
    if(total_putar<2){
    
      if(pencet==0) {
        y.style.display = "none";
        x.style.display = "block";
        clearInterval(myVar);
      }
      $.ajax({
          url : "<?php echo base_url(); ?>undian/cobainsert",
          type : "POST",
          dataType : "json",
          data : {"nomer_kartu" : arr[ctr2], "category_hadiah" : 1},
          success : function(data) {
              // do something
              console.log("tersimpan "+arr[ctr2-1]);
              
          },
          error : function(data) {
              // do something
              console.log("tidak tersimpan "+arr[ctr2-1]);
          }
        });

       nomorundian();
       ctr2++; 
       
     }else if (total_putar==2) {
        y.style.display = "none";
        x.style.display = "none";
        z.style.display = "none";
        $.ajax({
          url : "<?php echo base_url(); ?>undian/cobainsert",
          type : "POST",
          dataType : "json",
          data : {"nomer_kartu" : arr[ctr2], "category_hadiah" : 1},
          success : function(data) {
              // do something
              console.log("tersimpan "+arr[ctr2-1]);
              
          },
          error : function(data) {
              // do something
              console.log("tidak tersimpan "+arr[ctr2-1]);
          }
        });

        clearInterval(myVar);
        nomorundian();
        ctr2++;

/*      for (var i = 0; i < total_putar; i++) {
          $.ajax({
          url : "<?php echo base_url(); ?>undian/insertdata",
          type : "POST",
          dataType : "json",
          data : {"nomer_kartu" : arr[i], "category_hadiah" : 1},
          success : function(data) {
              // do something
              console.log("tersimpan "+arr[i]);
              
          },
          error : function(data) {
              // do something
              console.log("tidak tersimpan "+arr[i]);
          }
        });
      };*/
      //close loop
    }
  }

  function pemenangundian(){
    window.location.assign("<?php echo base_url(); ?>undian/daftar_pemenang?category_hadiah=1");
  }
  function nomorundian(){
    if (arr[ctr2].length == 3) {

         //document.getElementById("hasil").innerHTML = "000" + hasil;
         document.getElementById("angka1").innerHTML = 0;
         document.getElementById("angka2").innerHTML = 0;
         document.getElementById("angka3").innerHTML = 0;
         document.getElementById("angka4").innerHTML = arr[ctr2].substr(0, 1);
         document.getElementById("angka5").innerHTML = arr[ctr2].substr(1, 1);
         document.getElementById("angka6").innerHTML = arr[ctr2].substr(2, 1);
       }
       else if(arr[ctr2].length == 4){
         document.getElementById("angka1").innerHTML = 0;
         document.getElementById("angka2").innerHTML = 0;
         document.getElementById("angka3").innerHTML = arr[ctr2].substr(0, 1);
         document.getElementById("angka4").innerHTML = arr[ctr2].substr(1, 1);
         document.getElementById("angka5").innerHTML = arr[ctr2].substr(2, 1);
         document.getElementById("angka6").innerHTML = arr[ctr2].substr(3, 1);
       }
       else if(arr[ctr2].length == 5){
         document.getElementById("angka1").innerHTML = 0;
         document.getElementById("angka2").innerHTML = arr[ctr2].substr(0, 1);
         document.getElementById("angka3").innerHTML = arr[ctr2].substr(1, 1);
         document.getElementById("angka4").innerHTML = arr[ctr2].substr(2, 1);
         document.getElementById("angka5").innerHTML = arr[ctr2].substr(3, 1);
         document.getElementById("angka6").innerHTML = arr[ctr2].substr(4, 1);
       }
       else if(arr[ctr2].length == 6){
         document.getElementById("angka1").innerHTML = arr[ctr2].substr(0, 1);
         document.getElementById("angka2").innerHTML = arr[ctr2].substr(1, 1);
         document.getElementById("angka3").innerHTML = arr[ctr2].substr(2, 1);
         document.getElementById("angka4").innerHTML = arr[ctr2].substr(3, 1);
         document.getElementById("angka5").innerHTML = arr[ctr2].substr(4, 1);
         document.getElementById("angka6").innerHTML = arr[ctr2].substr(5, 1);
       }
  }

function myTimer() {
    
    var x = document.getElementById("play");
    var y = document.getElementById("stop");
    /*if (x.style.display == "none") {
      y.style.display = "block";
    } else {
      x.style.display = "none";
    }*/
    if (pencet==1) {
      y.style.display = "block";
      x.style.display = "none";
    }

    document.getElementById("angka1").innerHTML = d;
    document.getElementById("angka2").innerHTML = d1;
    document.getElementById("angka3").innerHTML = d2;
    document.getElementById("angka4").innerHTML = d3;
    document.getElementById("angka5").innerHTML = d4;
    document.getElementById("angka6").innerHTML = d5;
    d++; d1++;
    d2++; d3++; d4++; d5++;
    if(d>9)d=0; if(d1>9)d1=0;
    if(d2>9)d2=0; if(d3>9)d3=0;
    if(d4>9)d4=0; if(d5>9)d5=0;
    
    

    ctr++; 
}


  </script>
</body>
</html>
