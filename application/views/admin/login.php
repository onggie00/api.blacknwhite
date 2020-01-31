<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from minimal-art-admin-templates.multipurposethemes.com/pages/examples/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 13 Sep 2018 18:08:49 GMT -->
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Admin Rejeki Sejuta Bintang</title>
    <link rel="icon" type="image/png" href="<?php echo base_url('assets/img/logo.ico') ?>">
	<!-- Bootstrap 4.1.3-->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/assets/vendor_components/bootstrap/css/bootstrap.css">

	<!-- Bootstrap-extend-->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/css/bootstrap-extend.css">

	<!-- Font Awesome -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/assets/vendor_components/font-awesome/css/font-awesome.min.css">

	<!-- Ionicons -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/assets/vendor_components/Ionicons/css/ionicons.min.css">

	<!-- Theme style -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/css/master_style.css">

	<!-- Minimal-art Admin Skins. Choose a skin from the css/skins
	   folder instead of downloading all of them to reduce the load. -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/css/skins/_all-skins.css">

      <!-- Alert Style -->
      <link href="<?php echo base_url() ?>assets/css/alertify.css" rel="stylesheet">
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

	<!-- google font -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

</head>
<body class="hold-transition" style="background: #f5f5f5f5">
<div class="login-box">
  <div class="login-logo">
      <img src="<?php echo base_url('assets/img/logo.png') ?>" alt="" width="300px">
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Sign in to start your session</p>

    <form action="<?php echo base_url() ?>assets/admin/index.html" method="post" class="form-element">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Username"
        name="username" required id="username" onkeyup="dologin(event)"/>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Password"
        name="password" required id="password"  onkeyup="dologin(event)"/>
      </div>
      <div class="row">
        <!-- /.col -->
        <div class="col-12 text-center">
          <button type="button" id="login" class="btn btn-lg btn-info btn-block btn-flat margin-top-10">SIGN IN</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->


	<!-- jQuery 3 -->
	<script src="<?php echo base_url() ?>assets/admin/assets/vendor_components/jquery-3.3.1/jquery-3.3.1.js"></script>

	<!-- popper -->
	<script src="<?php echo base_url() ?>assets/admin/assets/vendor_components/popper/dist/popper.min.js"></script>

	<!-- Bootstrap 4.1.3-->
	<script src="<?php echo base_url() ?>assets/admin/assets/vendor_components/bootstrap/js/bootstrap.min.js"></script>
      <script src="<?php echo base_url() ?>assets/js/alertify.js" charset="utf-8"></script>

      <script type="text/javascript">
      function dologin(e) {
          if (e.keyCode == 13) {
            $("#login").click();
        }
      }
      $("#login").click(function(){
        var cek1 =0,cek2=0;
        if ($("#username").val()!="") {
          cek1 =1;
        }
        if ($("#password").val()!="") {
          cek2 =1;
        }
        if (cek1 == 1 && cek2 == 1) {
          $.post('<?php echo site_url('admin/login/do_login') ?>',{username:$("#username").val(),password:$("#password").val()},function(data){
            if (data=="err1") {
              alertify.error('Username tidak terdaftar');
            }else if (data=="err2") {
              alertify.error('Password anda salah');
            }else if(data=="cs"){
              alertify.notify('Login CS Success', 'success', 1, function(){
                document.location = '<?php echo site_url('admin/login_cs/') ?>';
              });
            }else {
              alertify.notify('Login Success', 'success', 1, function(){
                  document.location = '<?php echo site_url('admin/login/') ?>';
               });
            }
          });
        }else {
          alertify.error('Username dan password tidak boleh kosong');
        }
      });
      </script>
</body>

</html>
