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
    <a href="<?php echo site_url('admin/login/') ?>" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini">ADM</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b></b>Admin</span>
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
                Welcome, <?php //$cek = $this->admin->checkusername( $this->session->userdata('admin'));
                $cek = $this->mymodel->getbywhere('admin','username',$this->session->userdata('admin'),'result');
                foreach ($cek as $key => $value) {
                    echo $value->username;
                }
                //echo $cek;
                 ?>
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

        <li class="treeview <?php if ($menu==1) echo "active"; ?>">
          <a href="<?php echo site_url('admin/dashboard/') ?>">
            <i class="fa fa-dashboard"></i>
            <span>Dashboard</span>
          </a>
        </li>
        <?php if ($admin->level==3): ?>
        <li class="<?php if ($menu==2) echo "active"; ?>"><a href="<?php echo site_url('admin/myadmin/data') ?>"><i class="fa fa-unlock"></i> Admin</a>
        </li>
        <?php endif; ?>
        <li class="<?php if ($menu==3) echo "active"; ?>"><a href="<?php echo site_url('admin/user/data') ?>"><i class="fa fa-user"></i> User</a>
        </li>
        <li class="<?php if ($menu==4) echo "active "; ?>"><a href="<?php echo site_url('admin/event/data') ?>"><i class="fa fa-calendar"></i>Event</a>
        </li>
        <li class="<?php if ($menu==9) echo "active "; ?>"><a href="<?php echo site_url('admin/news/data') ?>"><i class="fa fa-newspaper-o"></i>Berita</a>
        </li>
        <li class="<?php if ($menu==11) echo "active "; ?>"><a href="<?php echo site_url('admin/barcode/data') ?>"><i class="fa fa-barcode"></i>Barcode</a>
        </li>
        <li class="<?php if ($menu==18) echo "active "; ?>"><a href="<?php echo site_url('admin/broadcast/data') ?>"><i class="fa fa-bullhorn"></i>Broadcast</a>
        </li>
        <li class="<?php if ($menu==12) echo "active "; ?> d-none"><a href="<?php echo site_url('admin/notification/data') ?>"><i class="fa fa-envelope-o"></i>Notification</a>
        </li>
        <li class="<?php if ($menu==14) echo "active "; ?>"><a href="<?php echo site_url('admin/infografis/data') ?>"><i class="fa fa-info"></i>Info Grafis</a>
        </li>
        <li class="<?php if ($menu==16) echo "active "; ?>"><a href="<?php echo site_url('admin/merchant/data') ?>"><i class="fa fa-suitcase"></i>Merchant</a>
        </li>
        <li class="<?php if ($menu==21) echo "active "; ?>"><a href="<?php echo site_url('apiv2/admin/paket/data') ?>"><i class="fa fa-cube"></i>Paket RSB</a>
        </li>
        <li class="<?php if ($menu==22) echo "active "; ?>"><a href="<?php echo site_url('apiv2/admin/pengumuman/data') ?>"><i class="fa fa-bell"></i>Pengumuman</a>
        </li>
        <li class="<?php if ($menu==8) echo "active "; ?>"><a href="<?php echo site_url('admin/admin_message/data') ?>"><i class="fa fa-envelope-o"></i>Pesan Masuk</a>
        </li>
        <li class="<?php if ($menu==20) echo "active "; ?>"><a href="<?php echo site_url('admin/undian/data') ?>"><i class="fa fa-gift"></i>Undian</a>
        </li>
        <!--<li class="<?php if ($menu==19) echo "active "; ?>"><a href="<?php echo site_url('admin/gerai/data') ?>"><i class="fa fa-building"></i>Gerai</a>
        </li>-->
        <li class="treeview <?php if ($menu==5) echo "active "; ?>">
          <a href="">
            <i class="fa fa-book"></i>
            <span>Artikel</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo site_url('admin/article_category/data') ?>">Pengaturan Kategori Artikel </a></li>
            <li><a href="<?php echo site_url('admin/article/data') ?>">Data Artikel </a></li>
          </ul>
        </li>
        <li class="treeview <?php if ($menu==24) echo "active "; ?>">
          <a href="">
            <i class="fa fa-pencil"></i>
            <span>Blog</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo site_url('admin/blog_category/data') ?>">Pengaturan Kategori Blog </a></li>
            <li><a href="<?php echo site_url('admin/blog/data') ?>">Data Blog </a></li>
            <li><a href="<?php echo site_url('admin/blog_comment/data') ?>">Komentar Blog </a></li>
          </ul>
        </li>
        <li class="treeview <?php if ($menu==23) echo "active "; ?>">
          <a href="">
            <i class="fa fa-tasks"></i>
            <span>Poin User</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo site_url('admin/poin_user/data') ?>">Data Poin</a></li>
            <li><a href="<?php echo site_url('admin/poin_khusus_ajak_user/data') ?>">Poin Ajak User </a></li>
            <li><a href="<?php echo site_url('admin/poin_khusus_hadir_event/data') ?>">Poin Hadir Event </a></li>
          </ul>
        </li>
        <li class="treeview <?php if ($menu==25) echo "active "; ?>">
          <a href="">
            <i class="fa fa-gift"></i>
            <span>Hadiah</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo site_url('admin/hadiah_category/data') ?>">Pengaturan Kategori Hadiah </a></li>
            <li><a href="<?php echo site_url('admin/hadiah/data') ?>">Data Hadiah </a></li>
          </ul>
        </li>
        <li class="treeview <?php if ($menu==6) echo "active "; ?>">
          <a href="">
            <i class="fa fa-book"></i>
            <span>Ebook</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
              <li><a href="<?php echo site_url('admin/ebook_category/data') ?>">Pengaturan Kategori Ebook </a></li>
              <li><a href="<?php echo site_url('admin/ebook/data') ?>">Data Ebook </a></li>
          </ul>
        </li>
        <li class="treeview <?php if ($menu==7) echo "active "; ?>">
          <a href="">
            <i class="fa fa-video-camera"></i>
            <span>Video</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
              <li><a href="<?php echo site_url('admin/video_category/data') ?>">Pengaturan Kategori Video </a></li>
              <li><a href="<?php echo site_url('admin/video/data') ?>">Data Video </a></li>
          </ul>
        </li>
        <li class="treeview <?php if ($menu==10) echo "active "; ?>">
          <a href="">
            <i class="fa fa-wechat"></i>
            <span>Obrolan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
              <li><a href="<?php echo site_url('admin/chat_category/data') ?>">Pengaturan Kategori Obrolan</a></li>
              <li><a href="<?php echo site_url('admin/obrolan/data') ?>">Data Obrolan </a></li>
          </ul>
        </li>
        <!--<li class="treeview <?php if ($menu==15) echo "active "; ?>">
          <a href="">
            <i class="fa fa-usd"></i>
            <span>Voucher</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
              <li><a href="<?php echo site_url('admin/voucher_category/data') ?>">Pengaturan Kategori Voucher</a></li>
              <li><a href="<?php echo site_url('admin/voucher/data') ?>">Data Voucher </a></li>
          </ul>
        </li>-->
        <li class="treeview <?php if ($menu==13) echo "active "; ?>">
          <a href="">
            <i class="fa fa-gear"></i>
            <span>Pengaturan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
          <li>
            <ul>
              <li class="treeview <?php if ($menu==13) echo "active "; ?>">
          <a href="">

            <span>Tentang RSB &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
          <li><a href="<?php echo site_url('admin/about_rsb/data') ?>">Deskripsi</a></li>
          <li><a href="<?php echo site_url('admin/about_img/data') ?>">Gambar</a></li>

          </ul>
        </li>
            </ul>
          </li>

          <li><a href="<?php echo site_url('admin/about_rsb_apps/data') ?>">Tentang Aplikasi RSB</a></li>
          <li><a href="<?php echo site_url('admin/program/data') ?>">Program </a></li>
          <!-- <li ><a href="<?php echo site_url('admin/official_sponsor/data') ?>">Official Merchant</a></li> -->
          <li><a href="<?php echo site_url('admin/sosmed_website/data') ?>">Sosial Media</a></li>
          <li><a href="<?php echo site_url('admin/kebijakanprivasi/data') ?>">Kebijakan Privasi</a></li>
          <li><a href="<?php echo site_url('admin/ketentuanlayanan/data') ?>">Ketentuan Layanan</a></li>
          <li><a href="<?php echo site_url('admin/faq/data') ?>">Faq</a></li>
          <li><a href="<?php echo site_url('admin/version_app/data') ?>">Versi Aplikasi</a></li>
          </ul>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
    <div class="sidebar-footer">
		<a href="<?php echo site_url('admin/login/logout') ?>" class="link " data-toggle="tooltip" title="" data-original-title="Logout"><i class="fa fa-power-off"></i></a>
	</div>
  </aside>
