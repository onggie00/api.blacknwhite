<?php $admin= $this->admin->checkusername( $this->session->userdata('admin')); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="icon" href="<?php echo base_url('assets/img/logo.ico') ?>">
    <title><?php echo $tittle ?></title>

	<!-- Bootstrap 4.1.3-->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/assets/vendor_components/bootstrap/css/bootstrap.css">

	<!-- Bootstrap-extend-->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/css/bootstrap-extend.css">

	<!-- font awesome -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/assets/vendor_components/font-awesome/css/font-awesome.css">

	<!-- ionicons -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/assets/vendor_components/Ionicons/css/ionicons.css">

	<!-- theme style -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/css/master_style.css">

	<!-- Minimal-art Admin skins. choose a skin from the css/skins folder instead of downloading all of them to reduce the load. -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/css/skins/_all-skins.css">

	<!-- jvectormap -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/assets/vendor_components/jvectormap/jquery-jvectormap.css">

	<!-- Morris charts -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/assets/vendor_components/morris.js/morris.css">

	<!-- google font -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">


  </head>

<body class="hold-transition skin-blue-light sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="<?php echo site_url('admin/login_cs/') ?>" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini">ADM</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b></b>Admin CS</span>
    </a>
    <!-- Header Navbar-->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
		  <!-- User Account-->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                Welcome, <?php echo $this->admin->checkusername( $this->session->userdata('admin'))->username; ?>
            </a>
            <ul class="dropdown-menu scale-up">
              <!-- User image -->
              <li class="user-header">
				        <div class="pull-right">
                  <a href="<?php echo site_url('admin/login/logout') ?>" class="btn btn-block btn-danger"><i class="ion ion-power"></i> Log Out</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>

  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar -->
    <section class="sidebar">
      <!-- sidebar menu -->
      <ul class="sidebar-menu" data-widget="tree">

        <li class="<?php if ($menu==1) echo "active"; ?>">
          <a href="<?php echo site_url('admin/dashboard_cs/') ?>">
            <i class="fa fa-dashboard"></i>
            <span>Dashboard</span>
          </a>
        </li>
        <?php if ($admin->level==4): ?>

        <li class="<?php if ($menu==8) echo "active "; ?>"><a href="<?php echo site_url('admin/admin_message2/data') ?>"><i class="fa fa-envelope-o"></i>Pesan Masuk</a>
        </li>
        <li class="<?php if ($menu==9) echo "active "; ?>"><a href="<?php echo site_url('admin/verifikasi_member/data') ?>"><i class="fa fa-check"></i>Kode Verifikasi Member</a>
        </li>
        <?php endif; ?>
      </ul>
    </section>
    <!-- /.sidebar -->
    <div class="sidebar-footer">
		<a href="<?php echo site_url('admin/login/logout') ?>" class="link " data-toggle="tooltip" title="" data-original-title="Logout"><i class="fa fa-power-off"></i></a>
	</div>
  </aside>
