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

  <div class="main-area">
    <div class="container full-height position-static">

      <section class="left-section full-height">
        <div class="logo_rsb">
          <img src="<?php echo base_url('assets/undian/'); ?>images/gelaplogo.png" alt="Logo1">
        </div>

        <div class="display-table">
          <div class="display-table-cell">
            <div class="main-content">
              <h1 class="title">UNDIAN MOTOR 
                <span id="counter">
                    
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

              <div id="play" class="btn_undian" onclick="random()" style="width:auto;">
                <a class="btn btn-default" >
                <h5><span ><i class="ion-play"> &nbsp;&nbsp; </i></span> Putar Undian Untuk 10 Nomor</h5>
               </a>
              </div>
              <div id="stop" class="btn_stop_undian" onclick="stopundian()" style="width:auto;">
                <a class="btn btn-default" >
                <h5><span ><i class="ion-stop"> &nbsp;&nbsp; </i></span> Stop Undian</h5>
               </a>
              </div>
              <div id="pemenang" class="btn_pemenang" onclick="pemenangundian()" style="width:auto;">
                <a class="btn btn-default" >
                <h5> Tunggu sebentar. . .</h5>
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

      <section class="right-section" >
      <img src="<?php echo base_url('assets/undian/'); ?>images/bg-motor.png" style="width:100%;height:100%">

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


  <script type='application/javascript' src="https://unpkg.com/ionicons@4.5.1/dist/ionicons.js"></script>
  <script type='application/javascript' src="<?php echo base_url(); ?>/assets/undian/common-js/jquery-3.1.1.min.js"></script>

  <script type='application/javascript' src="<?php echo base_url(); ?>/assets/undian/common-js/tether.min.js"></script>

  <script type='application/javascript' src="<?php echo base_url(); ?>/assets/undian/common-js/bootstrap.js"></script>

  <script type='application/javascript' src="<?php echo base_url(); ?>/assets/undian/common-js/jquery.classycountdown.js"></script>

  <script type='application/javascript' src="<?php echo base_url(); ?>/assets/undian/common-js/jquery.knob.js"></script>

  <script type='application/javascript' src="<?php echo base_url(); ?>/assets/undian/common-js/jquery.throttle.js"></script>

  <script type='application/javascript' src="<?php echo base_url(); ?>/assets/undian/common-js/scripts.js"></script>

  <script >
  var cek;
  var cek2;
  var arr =[];
  var ctr2=0;
  var myVar;
  var pencet = 0;
  var nomor = 1;
  
  
  /*
  var audio = new Audio('../rsb/assets/undian/sounds/sound_drum30.mp3');
  var audio2 = new Audio('../rsb/assets/undian/sounds/sound_winner.mp3');
  */
  
  var audio = new Audio('<?php echo base_url(); ?>/assets/undian/sounds/sound_drum30.mp3');
  

  var d = 0;
  var d1 = 9;
  var d2 = 2;
  var d3 = 4;
  var d4 = 2;
  var d5 = 6;
  var ctr = 0;
  var alamat = window.location.href;
  var total_putar;
  if (alamat.indexOf('=') == -1) {
    total_putar = 0;
  }else{
    total_putar = alamat.substr(alamat.indexOf('=')+1,1);  
  }
  console.log(total_putar);

//isi array random unique number
  var lines = [];
  var baris_pemenang =[];
  var arr =[];
  var nomer_kartu = [];
      
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
                tarr.push(data[j]);
            }
            lines.push(tarr);
        }
    }
    //var acak1 = Math.floor(Math.random() * 250);
    //baris_pemenang = lines[acak1];
    for (var i = 0; i < lines.length; i++) {
        var acak1 = Math.floor(Math.random() * 250);
        var acak2 = Math.floor(Math.random() * baris_pemenang.length);
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
    if (total_putar!=2) {
    total_putar++;
    };
  }

//stop
  function stopundian(){
    pencet=0;
    audio.pause();
    audio.currentTime = 0;
    //play();
    var x = document.getElementById("play");
    var y = document.getElementById("stop");
    var z = document.getElementById("pemenang");
    console.log(total_putar);
    
      if(pencet==0) {
        y.style.display = "none";
        x.style.display = "none";
        z.style.display = "block";
        clearInterval(myVar);
      }
      for (var i = 0; i < 10; i++) {
        nomer_kartu.push(arr[i]);
      };
      console.log(nomer_kartu);
        $.ajax({
            url : "<?php echo base_url(); ?>undian/cobainsert",
            type : "POST",
            data : { nomer_kartu:nomer_kartu, "category_hadiah" : 4},
            success : function(data) {
                // do something
                console.log(data);
                window.location = "<?php echo base_url(); ?>undian/daftar_pemenang?category_hadiah=4&putaran="+total_putar;
               
            },
            error : function(data) {
                // do something
                console.log(data);
            }
        });
    
      nomorundian();
      ctr2++;
  }

  function pemenangundian(){
    window.location.assign("<?php echo base_url(); ?>undian/daftar_pemenang?category_hadiah=4&putaran="+total_putar);
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
