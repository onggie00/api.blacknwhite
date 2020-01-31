<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Place favicon.ico in the root directory -->
    <link rel="icon" href="<?php echo base_url('assets/web/') ?>favicon.ico">
    <!-- Title -->
    <title>Rejeki Sejuta Bintang</title>
    <!-- Favicon -->
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/web/') ?>assets/css/bootstrap.min.css%2bfont-awesome.min.css.pagespeed.cc.VIIzPid8zJ.css">
    <!-- Font awesome CSS -->

    <!-- Animate CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/web/') ?>assets/css/animate.min.css">
</head>

<body class="backgroundf3f3f3">
    <div id="hasil">
      
    </div>
    <button onclick="random()">Random</button>

<script>
var cek=0;
var arr = [];
var ctr2= 0;

  while(arr.length < 10){
  cek = Math.floor(Math.random() * 7100) + 101;
  hasil = cek.toString();
  if(arr.indexOf(hasil) > -1) {
    continue;
  }
  else{
        arr[arr.length] = hasil;
      }
  }
console.log(arr);

 function random(){
  if (arr[ctr2].length == 3) {
    document.getElementById("hasil").innerHTML = "000" + arr[ctr2];
  }
  else if(arr[ctr2].length == 4){
    document.getElementById("hasil").innerHTML = "00" + arr[ctr2];
  }
ctr2++;

  console.log(arr);
}

</script>
</body>
</html>
