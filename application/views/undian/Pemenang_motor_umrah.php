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
 <input type="hidden" id="putaran" value="<?php echo $total_putar; ?>">
 <div class="main-area">
   <div class="full-height position-static">

     <section class="left-section-kiri full-height">
       <div class="konten-kiri" >
         <div class="logo-daftar">
            <img src="<?php echo base_url('assets/undian/'); ?>images/gelaplogo.png" alt="Logo1">
         </div>
         <div class="layout_tabel_pemenang_kiri">
       <?php
           echo "<div class='kolom_pemenang' style='background-color:hsl(0, 0%, 90%);padding-left:20px;border-radius:5px;'>";
           echo "<h5>Nomor Kartu Hadiah Umrah</h5>";
           $ctr = 1;
         foreach ($pemenang1 as $key => $value) {
           if ($value->nomer_kartu>100 && $value->nomer_kartu<1000) {
             $value->nomer_kartu = "000".$value->nomer_kartu;
           }else if ($value->nomer_kartu>1000 && $value->nomer_kartu<10000) {
             $value->nomer_kartu = "00".$value->nomer_kartu;
           }else if ($value->nomer_kartu>10000 && $value->nomer_kartu<100000) {
             $value->nomer_kartu = "0".$value->nomer_kartu;
           }
           if ($value->nama_depan == "" && $value->nama_belakang =="") {
             $value->nama_depan = "Data tidak ditemukan";
           }
           //echo "<h4>".$value->nama_depan." ".$value->nama_belakang."</h4>";
           if ($ctr <=4) {
           echo "<div style='float:left;padding:5px 20px 10px 0px;font-size:13pt;font-weight:bold;'> ".$value->nomer_kartu."</div>";
           $ctr++;
           }else{
             echo "<div style='padding:5px 20px 10px 0px;font-size:13pt;font-weight:bold;'> ".$value->nomer_kartu."</div>";
             $ctr=1;
           }
         }
           echo "</div>";
        ?>
        <?php
            echo "<div class='kolom_pemenang' style='background-color:hsl(0, 0%, 90%);padding-left:20px;border-radius:5px;'>";
            echo "<h5>Nomor Kartu Hadiah Motor</h5>";
            $ctr = 1;
            $hitung = count($pemenang);
          foreach ($pemenang as $key => $value) {
            if ($value->nomer_kartu>100 && $value->nomer_kartu<1000) {
              $value->nomer_kartu = "000".$value->nomer_kartu;
            }else if ($value->nomer_kartu>1000 && $value->nomer_kartu<10000) {
              $value->nomer_kartu = "00".$value->nomer_kartu;
            }else if ($value->nomer_kartu>10000 && $value->nomer_kartu<100000) {
              $value->nomer_kartu = "0".$value->nomer_kartu;
            }
            if ($value->nama_depan == "" && $value->nama_belakang =="") {
              $value->nama_depan = "Data tidak ditemukan";
            }
            //echo "<h4>".$value->nama_depan." ".$value->nama_belakang."</h4>";
            if ($hitung >1) {
              if ($ctr <2) {
              echo "<div style='float:left;padding:5px 20px 10px 0px;font-size:13pt;font-weight:bold;'> ".$value->nomer_kartu."</div>";
              $ctr++;
              }else{
                echo "<div style='padding:5px 20px 10px 0px;font-size:13pt;font-weight:bold;'> ".$value->nomer_kartu."</div>";
                $ctr=1;
              }
            }
            else{
              if ($ctr <1) {
              echo "<div style='float:left;padding:5px 20px 10px 0px;font-size:13pt;font-weight:bold;'> ".$value->nomer_kartu."</div>";
              $ctr++;
              }else{
                echo "<div style='padding:5px 20px 10px 0px;font-size:13pt;font-weight:bold;'> ".$value->nomer_kartu."</div>";
                $ctr=1;
              }
            }
              
            
            
          }
            echo "</div>";
         ?>

     </div>


             <div id="undian_selanjutnya2" class="btn_undian" onclick="mobil()">
               <a class="btn btn-default" >
               <h5><span ><i class="ion-arrow-forward"> &nbsp;&nbsp; </i></span> Lanjutkan</h5>
              </a>
             </div>
             <div id="undian_selanjutnya4" class="btn_undian" onclick="motor_umrah()">
               <a class="btn btn-default" >
               <h5><span ><i class="ion-arrow-forward"> &nbsp;&nbsp; </i></span> Lanjutkan</h5>
              </a>
             </div>
<div class="ketentuan">
    <p><?php echo $syarat; ?></p>
</div>

     <div class="table_pemenang hidden" id="pemenang">
               <table>
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

        </div>


     <div class="footer_social hidden">
       <ul class="footer-icons">
         <li >Stay in touch : </li>
         <li ><a href="#"><i class="ion-social-facebook" style="color: #777777;" ></i></a></li>
         <li ><a href="#"><i class="ion-social-twitter" style="color: #777777;" ></i></a></li>
         <li ><a href="#"><i class="ion-social-googleplus" style="color: #777777;" ></i></a></li>
         <li ><a href="#"><i class="ion-social-instagram-outline" style="color: #777777;" ></i></a></li>
         <li ><a href="#"><i class="ion-social-pinterest" style="color: #777777;" ></i></a></li>
       </ul>
     </div>

     <div class="tabel-kiri"></div>
     </section><!-- left-section -->

<!--Right Section-->
     <section class="right-section right-section-umroh" style="">

       <div class="display-table">
         <div class="display-table-cell">
           <div class="main-content">
             <h2 class="title">PEMENANG UNDIAN RSB<?php //echo $kategori; ?></h2>

<!--simpan data hidden-->

           </div><!-- main-content -->
         </div><!-- display-table-cell -->
       </div><!-- display-table -->

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
 var audio = new Audio('../assets/undian/sounds/sound_winner.mp3');
 audio.play();
 var d = 0;
 var d1 = 9;
 var d2 = 2;
 var d3 = 4;
 var d4 = 2;
 var d5 = 6;
 var ctr = 0;
 var wkt_lagu=0;
//hidden button daftar

 document.getElementById("undian_selanjutnya"+2).style.display = "none";
//cek daftar
var alamat = window.location.href;
var cek_kategori = <?php echo $_REQUEST['category_hadiah'] ?>;
var total_putar = <?php echo $_REQUEST['putaran'] ?>;
console.log(cek_kategori);
console.log("total putar"+total_putar);
if(total_putar==4){

   document.getElementById("undian_selanjutnya"+cek_kategori).style.display = "none";
 cek_kategori--;
 console.log(cek_kategori);
 if (cek_kategori !=0) {
     document.getElementById("undian_selanjutnya"+2).innerHTML = "Lanjut Hadiah Selanjutnya";
     document.getElementById("undian_selanjutnya"+2).style.width = "auto";
     document.getElementById("undian_selanjutnya"+2).style.padding = "16px";
     document.getElementById("undian_selanjutnya"+2).style.display = "block";
 };
}else{
  document.getElementById("undian_selanjutnya"+cek_kategori).style.display = "block";
}



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
function motor_umrah(){
 total_putar++;
 window.location.assign("<?php echo base_url(); ?>undian/motor_umrah?putaran="+total_putar);
}

 </script>
</body>
</html>
