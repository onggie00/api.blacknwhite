<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="google-site-verification"
             content="<meta name='google-site-verification' content='QcXS8zCgtoeA0TnRwfqFOTne2PwnVmJ8MpTYCLD29cY' />" />

    <!-- Place favicon.ico in the root directory -->
    <link rel="icon" href="<?php echo base_url('assets/web/') ?>favicon.ico">
    <!-- Title -->
    <title>Rejeki Sejuta Bintang</title>
    <!-- Favicon -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/web/') ?>assets/css/bootstrap.min.css%2bfont-awesome.min.css.pagespeed.cc.VIIzPid8zJ.css">
    <!-- Font awesome CSS -->

    <!-- Animate CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/web/') ?>assets/css/animate.min.css">
    <!-- OwlCarousel CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/web/') ?>assets/css/owl.carousel.css">
    <!-- Magnific popup CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/web/') ?>assets/css/magnific-popup.css">
    <!-- Main Menu CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/web/') ?>assets/css/meanmenu.css">
    <!-- Main CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/web/') ?>style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/web/') ?>assets/css/responsive.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/web/') ?>assets/css/customsyauqi.css">
    <!-- jQuery -->
    <script src="<?php echo base_url('assets/web/') ?>assets/js/jquery-1.11.3.min.js"></script>
    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
    <!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body class="backgroundf3f3f3">
    <!-- prelaoder start -->
    <div id="preloader-wrapper1">
        <div class="preloader-wave-effect"></div>
    </div>
    <!-- prelaoder end -->
    <!--   header area start -->
    <header>
        <div class="menu-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="logo">
                            <a href="<?php echo site_url() ?>"><img src="<?php echo base_url('assets/web/') ?>assets/img/logo/white-logo.png.pagespeed.ce._GkBbUTSDz.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-md-6 col-md-offset-2">
                        <!-- main menu start-->
                        <div class="main-menu font-opensans">
                            <nav>
                                <ul>
                                    <li><a href="#home">Beranda</a></li>
                                    <li><a href="#about">About</a></li>
                                    <li><a href="#event">Event</a></li>
                                    <li><a href="#pemateri">Pemateri</a></li>
                                    <li><a href="#program">Program</a></li>
                                    <li><a href="#sponsor">Sponsor</a></li>
                                </ul>
                            </nav>
                        </div>
                        <!-- main menu end-->
                        <div class="mobile-menu"></div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="apps-area font-opensans " id="home" style="background-image: url(<?php echo base_url('assets/web/') ?>assets/img/bg/slider-bg.png);">
        <div class="container-fluid" style="padding:0 ! important;">
            <div class="col-md-12 padding0 col-xs-12" style="padding-top:6.2% !important;">
              <div class="col-xs-12">
                <div class="row paddingright60 paddingleft60">
                  <div class="row box-apps box-apps-mobile">
                    <div class="col-md-12 " style="">
                      <?php $about_rsb_apps = $this->mymodel->getlast('about_rsb_apps','id_about_rsb_apps') ?>
                        <div class="col-md-12 col-xs-12" >
                          <div class="col-md-4 col-md-offset-2 col-xs-12 " >
                            <center>
                                <img src="<?php echo base_url('assets/web/') ?>assets/img/app/slider-app.png" alt="" class=" img-responsive" >
                            </center>
                          </div>
                          <div class="col-md-6 col-xs-12 app-caption center-mobile">
                            <div class="col-md-12 col-xs-12" style="padding-top: 18px;">
                                <img src="<?php echo base_url('assets/web/') ?>assets/img/logo/logo.png" alt="" class="img-responsive  center-mobile">
                            </div>
                            <div class="col-md-12 margintop20 color333333 fontsize11 col-xs-12">
                              <p><?php echo nl2br($about_rsb_apps->description) ?></p>
                            </div>
                            <div class="col-md-12 margintop20 padding0 col-xs-12">
                              <div class="col-md-3 col-xs-6">
                                <a href="<?php echo $about_rsb_apps->link_playstore ?>" target="_blank">
                                  <img src="<?php echo base_url('assets/web/') ?>assets/img/app/download-gp.png" alt="" class="img-responsive" width="150px">
                                </a>
                              </div>
                              <div class="col-md-3 col-xs-6">
                                <a href="<?php echo $about_rsb_apps->link_appstore ?>" target="_blank">
                                <img src="<?php echo base_url('assets/web/') ?>assets/img/app/download-as.png" alt="" class="img-responsive" width="150px">
                                </a>
                              </div>
                            </div>
                          </div>
                        </div>
                    </div>
                  </div>
                </div>

              </div>
            </div>
        </div>
    </div>
    <div class="about-area font-opensans" id="about" style="background-image: url(<?php echo base_url('assets/web/') ?>assets/img/bg/bg1.png);">
        <div class="container" style="padding:0 ! important;">
            <div class="col-md-12 padding0 col-xs-12" style="padding-top:6.2% !important;">
              <div class="col-xs-12">
                <div class="row">
                    <div class="col-md-12 col-xs-12" >
                      <?php $about_rsb = $this->mymodel->getlast('about_rsb','id_about_rsb') ?>
                      <div class="row">
                        <div class="col-md-6 col-md-offset-1 col-xs-12 " >
                          <center>
                            <img src="<?php echo base_url('assets/web/') ?>assets/img/app/about.png" alt="" class=" img-responsive center-mobile">
                          </center>
                        </div>
                        <div class="col-md-4 col-xs-12 margintop10">
                          <div class="col-md-11 color777777 fontsize12 col-xs-12 center-mobile" style="">
                            <p><?php echo substr($about_rsb->description,0 ,400) ?>...</p>
                          </div>
                          <div class="col-md-11 color777777 margintop10 col-xs-12 center-mobile">
                            <button type="button" class="btn backgrounddd4124 colorffffff fontsize11 padding10 paddingleft30 paddingright30" name="button" style="border-radius:30px;"
                              data-toggle="modal" data-target="#myModal">Read More</button>


                          </div>
                        </div>
                      </div>
                    </div>
                </div>
              </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Tentang Rezeki Sejuta Bintang</h4>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col-md-12">
                <center>
                  <img src="<?php echo base_url('assets/web/') ?>assets/img/app/about.png" alt="" class=" img-responsive center-mobile">
                </center>
              </div>
              <div class="col-md-12 text-center margintop20">
                <p><?php echo nl2br($about_rsb->description) ?></p>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>

      </div>
    </div>
    <div class="event-area font-opensans " id="event"  style="background-image: url(<?php echo base_url('assets/web/') ?>assets/img/bg/bg2.png);">
        <div class="container-fluid" style="padding:0 ! important;">
          <div class="col-md-12 padding0 col-xs-12" >
            <div class="col-xs-12">
              <div class="row paddingright60 paddingleft60">
                  <div class="row box-apps box-apps-mobile">
                    <div class="col-md-12 " style="">
                        <div class="col-md-12 col-xs-12">
                          <div class="col-md-12 col-xs-12">
                            <center><h1 class="font-Montserrat color235459"><b>EVENT</b> </h1>
                              <hr style=" border: 0;height: 1px;background: #235459;width:100px;">
                            </center>
                          </div>
                        </div>
                        <div class="col-md-12 col-xs-12">
                          <div class="col-md-4 col-md-offset-4 col-xs-12">
                            <center>
                              <p class="fontsize11 color777777 hidden">Event yang akan berlangsung</p>
                            </center>
                          </div>
                        </div>
                        <div class="col-md-12 col-xs-12 margintop20">
                            <div class="col-md-10 col-md-offset-1">
                              <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                <!-- Wrapper for slides -->
                                <div class="carousel-inner">
                                  <?php $query0 = $this->mymodel->getbywherelimitsort
                                  ('event',"1","1",0,3,'start_event','desc');
                                  $query = $query0?>
                                  <div class="item active">
                                    <div class="row">
                                      <?php foreach ($query as $key => $value): ?>
                                       <div class="col-md-4">
                                         <div class="row">
                                           <div class="col-md-12 text-center " >
                                             <center>
                                               <p class="backgroundcc9c52 colorffffff paddingtop20 "
                                               style="border-radius: 200px ;height:80px;width:80px">
                                                 <?php echo date('d',strtotime($value->start_event)) ?> <br><b>
                                                 <?php echo convert_bulan(date('F',strtotime($value->start_event))); ?></b>
                                               </p>
                                               <hr style=" border: 0;height: 1px;background: #235459;width:20px;">
                                               <h5 class="font-Montserrat"><b><?php echo $value->title ?></b> </h5>
                                               <?php

                                               $tanggal_event = converttgl(date("l, d F Y",strtotime($value->start_event)));
                                               $start_event= date("H.i",strtotime($value->start_event))." ".$value->date_zone;
                                               $end_event  =  date("H.i",strtotime($value->end_event))." ".$value->date_zone; ?>
                                               <p class="font-opensans color777777 fontsize10"><?php echo $tanggal_event." - ".$start_event ?>
                                                 <br>
                                                 <?php echo $value->location_event ?></p>
                                             </center>
                                           </div>
                                         </div>
                                       </div>
                                      <?php endforeach; ?>
                                    </div>
                                  </div>
                                  <?php $query1 = $this->mymodel->getbywherelimitsort
                                  ('event',"1","1",3,3,'start_event','desc');
                                    $query = $query1?>
                                  <?php if (!empty($query)): ?>
                                    <div class="item">
                                    <div class="row">
                                      <?php foreach ($query as $key => $value): ?>
                                       <div class="col-md-4">
                                         <div class="row">
                                           <div class="col-md-12 text-center " >
                                             <center>
                                               <p class="backgroundcc9c52 colorffffff paddingtop20 "
                                               style="border-radius: 200px ;height:80px;width:80px">
                                                 <?php echo date('d',strtotime($value->start_event)) ?> <br><b>
                                                 <?php echo convert_bulan(date('F',strtotime($value->start_event))); ?></b>
                                               </p>
                                               <hr style=" border: 0;height: 1px;background: #235459;width:20px;">
                                               <h5 class="font-Montserrat"><b><?php echo $value->title ?></b> </h5>
                                               <?php

                                               $tanggal_event = converttgl(date("l, d F Y",strtotime($value->start_event)));
                                               $start_event= date("H.i",strtotime($value->start_event))." ".$value->date_zone;
                                               $end_event  =  date("H.i",strtotime($value->end_event))." ".$value->date_zone; ?>
                                               <p class="font-opensans color777777 fontsize10"><?php echo $tanggal_event." - ".$start_event ?>
                                                 <br>
                                                 <?php echo $value->location_event ?></p>
                                             </center>
                                           </div>
                                         </div>
                                       </div>
                                      <?php endforeach; ?>
                                    </div>
                                  </div>
                                  <?php endif; ?>
                                  <?php $query2 = $this->mymodel->getbywherelimitsort
                                  ('event',"1","1",6,3,'start_event','desc');
                                  $query = $query2?>
                                  <?php if (!empty($query)): ?>
                                    <div class="item">
                                    <div class="row">
                                      <?php foreach ($query as $key => $value): ?>
                                       <div class="col-md-4">
                                         <div class="row">
                                           <div class="col-md-12 text-center " >
                                             <center>
                                               <p class="backgroundcc9c52 colorffffff paddingtop20 "
                                               style="border-radius: 200px ;height:80px;width:80px">
                                                 <?php echo date('d',strtotime($value->start_event)) ?> <br><b>
                                                 <?php echo convert_bulan(date('F',strtotime($value->start_event))); ?></b>
                                               </p>
                                               <hr style=" border: 0;height: 1px;background: #235459;width:20px;">
                                               <h5 class="font-Montserrat"><b><?php echo $value->title ?></b> </h5>
                                               <?php

                                               $tanggal_event = converttgl(date("l, d F Y",strtotime($value->start_event)));
                                               $start_event= date("H.i",strtotime($value->start_event))." ".$value->date_zone;
                                               $end_event  =  date("H.i",strtotime($value->end_event))." ".$value->date_zone; ?>
                                               <p class="font-opensans color777777 fontsize10"><?php echo $tanggal_event." - ".$start_event ?>
                                                 <br>
                                                 <?php echo $value->location_event ?></p>
                                             </center>
                                           </div>
                                         </div>
                                       </div>
                                      <?php endforeach; ?>
                                    </div>
                                  </div>
                                  <?php endif; ?>

                                </div>
                              </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-xs-12 hidden-xs">
                            <div class="col-md-10 col-md-offset-1 padding0" style="min-height:150px;">
                              <center>
                                <ol class="carousel-indicators">
                                  <li data-target="#myCarousel" data-slide-to="0" class="background235459"></li>
                                  <?php if (!empty($query1)): ?>
                                    <li data-target="#myCarousel" data-slide-to="1" class="background235459"></li>
                                  <?php endif; ?>
                                  <?php if (!empty($query2)): ?>
                                    <li data-target="#myCarousel" data-slide-to="2" class="background235459"></li>
                                  <?php endif; ?>
                                </ol>
                              </center>
                            </div>
                        </div>
                    </div>
                  </div>
                </div>

              </div>
            </div>
        </div>
    </div>
    <div class="pemateri-area font-opensans " id="pemateri"  style="background-image: url(<?php echo base_url('assets/web/') ?>assets/img/bg/bg3.png);">
          <div class="container" style="padding:0 ! important;">
              <div class="col-md-12 padding0 col-xs-12">
                <div class="col-xs-12">
                  <div class="row padding0-mobile ">
                    <div class="row box-apps-mobile ">
                      <div class="col-xs-12">
                        <div class="col-md-12 paddingleft60 padding0-mobile col-xs-12 center-mobile" style="margin-top:5%;">
                          <div class="col-md-3 col-md-offset-1 padding0 col-xs-12" >
                                  <h1 class="font-Montserrat color235459"><b>PEMATERI</b> </h1>
                                  <hr style="border: 1px solid #235459;width:40px;float:left;">
                          </div>
                          <div class="col-md-5 padding0 col-xs-12">
                            <div class="col-md-11 color777777 fontsize11 hidden">
                              <p>Pemateri yang pernah mengisi Event di Rezeki Sejuta Bintang
                              </p>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-10 col-md-offset-1 col-xs-12 paddingleft60 padding0-mobile">
                      <div class="home-doctors ">
        					        <div class="row ">
                            <?php 
                            //$query0 = $this->mymodel->getbywherelimitsort
                            //('event_pemateri',"1","1",0,4,'id_event_pemateri','desc');
                            //$query = $query0;
                            $query = $this->mymodel->withquery("select distinct nama_pemateri from event_pemateri","result");
                            ?>
                            <?php foreach ($query as $key => $value): ?>
                              <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12  text-center doc-item">
                                  <div class="common-doctor clearfix ae-animation-fadeInUp text-center">
                                        <ul class="list-inline social-lists animate">
                                          <li><a href="#"><?php echo $value->nama_pemateri ?></a></li>
                                        </ul>
                                        <figure>
                                           <img src="<?php 
                                           $gambar = $this->mymodel->getbywhere('event_pemateri','nama_pemateri',$value->nama_pemateri,'row')->img;
                                           echo base_url('assets/img/event-pemateri/'.$gambar) 
                                           ?>" class="doc-img animate attachment-gallery-post-single ">
                                        </figure>
                                  </div>
                              </div>
                            <?php endforeach; ?>
        						      </div>
                          
            					</div>

                    </div>
                      </div>
                    </div>
                </div>
              </div>
            </div>
        </div>
    </div>
    <div class="membership-area font-opensans " id="program"style="background-image: url(<?php echo base_url('assets/web/') ?>assets/img/bg/bg4.png);">
        <div class="container-fluid" style="padding:0 ! important;">
            <div class="col-md-12 padding0 col-xs-12" >
              <div class="col-xs-12">
                <div class="row paddingright60 paddingleft60">
                  <div class="row box-apps box-apps-mobile paddingbottom30">
                    <?php $program = $this->mymodel->getlast('program','id_program') ?>
                    <div class="col-md-12 " style="">
                        <div class="col-md-12 col-xs-12">
                          <div class="col-md-12 col-xs-12">
                            <center><h1 class="font-Montserrat color235459"><b>Program</b> </h1>
                              <hr style=" border: 0;height: 1px;background: #235459;width:100px;">
                            </center>
                          </div>
                        </div>
                        <div class="col-md-12 col-xs-12 " style="padding-bottom:6%;margin-top:5%;">
                          <div class="row">
                            <div class="col-md-5 col-md-offset-1 col-xs-12 " >
                              <center>
                                <div class="col-md-11 col-md-offset-1 col-xs-12">
                                  <img src="<?php echo base_url('assets/img/program/'.$program->img) ?>" alt="" class=" img-responsive center-mobile">
                                </div>
                              </center>
                            </div>
                            <div class="col-md-4 col-xs-12 margintop10">
                              <div class="col-md-11 color777777 fontsize12 col-xs-12 center-mobile" style="">
                                <p><?php echo substr($program->description,0 ,400) ?>...</p>
                              </div>
                              <div class="col-md-11 color777777 margintop10 col-xs-12 center-mobile">
                                <button type="button" class="btn backgrounddd4124 colorffffff fontsize11 padding10 paddingleft30 paddingright30" name="button" style="border-radius:30px;"
                                data-toggle="modal" data-target="#myModal1">Read More</button>
                              </div>
                            </div>
                          </div>
                        </div>
                    </div>
                  </div>
                </div>

              </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="myModal1" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title"><?php echo $program->title ?></h4>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col-md-12">
                <center>
                  <img src="<?php echo base_url('assets/img/program/'.$program->img) ?>" alt="" class=" img-responsive center-mobile">
                </center>
              </div>
              <div class="col-md-12 text-center margintop20">
                <p><?php echo nl2br($program->description) ?></p>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>

      </div>
    </div>

    <div class="support-area font-opensans" id="sponsor" style=" background-image: url(<?php echo base_url('assets/web/') ?>assets/img/bg/bg5.png);background-repeat: no-repeat">
      <div class="container" style="padding:0 ! important;">
            <div class="col-md-12 padding0 col-xs-12">
            </div>
        </div>
    </div>
    <div class="footer-area font-opensans " style="background-image: url(<?php echo base_url('assets/web/') ?>assets/img/bg/bg6.png);">
        <div class="container-fluid" style="padding:0 ! important;">
          <div class="col-md-12 padding0 col-xs-12" >
            <div class="col-xs-12">
              <div class="row paddingright60 paddingleft60">
                  <div class="row box-footer box-apps-mobile">
                    <div class="col-md-12 paddingtop30 paddingbottom10" style="">
                        <div class="col-md-3 hidden-xs hidden-sm text-right center-mobile">
                          <img src="<?php echo base_url('assets/web/') ?>assets/img/logo/white-logo.png" alt="">
                        </div>
                        <div class="col-xs-12 hidden-md hidden-lg  text-right center-mobile">
                          <img src="<?php echo base_url('assets/web/') ?>assets/img/logo/black-logo.png" alt="">
                        </div>
                        <div class="col-md-4 col-md-offset-1 col-xs-12 text-center paddingtop20 font-Montserrat">
                          <div class="col-md-3"><a href="#about"><b class="color235459">About</b> </a></div>
                          <div class="col-md-3"><a href="#event"><b class="color235459">Event</b> </a></div>
                          <div class="col-md-3"><a href="#pemateri"><b class="color235459">Pemateri</b> </a></div>
                          <div class="col-md-3"><a href="#sponsor"><b class="color235459">Sponsor</b> </a></div>
                        </div>
                        <div class="col-md-4 col-xs-12 text-center paddingtop10 font-Montserrat">
                          <?php $sosmed_website = $this->mymodel->getlast('sosmed_website','id_sosmed_website') ?>
                          <a href="<?php echo $sosmed_website->youtube ?>" target="_blank"><img src="<?php echo base_url('assets/web/') ?>assets/img/logo/yt.png" alt=""> </a>
                          <a href="<?php echo $sosmed_website->instagram ?>" target="_blank"><img src="<?php echo base_url('assets/web/') ?>assets/img/logo/ig.png" alt=""> </a>
                          <a href="<?php echo $sosmed_website->twitter ?>" target="_blank"><img src="<?php echo base_url('assets/web/') ?>assets/img/logo/twit.png" alt=""> </a>
                          <a href="<?php echo $sosmed_website->facebook ?>" target="_blank"><img src="<?php echo base_url('assets/web/') ?>assets/img/logo/fb.png" alt=""> </a>
                        </div>
                    </div>
                  </div>
                </div>

              </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="<?php echo base_url('assets/web/') ?>assets/js/bootstrap.min.js"></script>
    <!-- Magnific Popup JS -->
    <script src="<?php echo base_url('assets/web/') ?>assets/js/jquery.magnific-popup.min.js"></script>
    <!-- OwlCarousel JS -->
    <script src="<?php echo base_url('assets/web/') ?>assets/js/owl.carousel.min.js"></script>
    <!-- WOW JS -->
    <script src="<?php echo base_url('assets/web/') ?>assets/js/wow-1.3.0.min.js"></script>
    <!-- Waypoint JS -->
    <script src="<?php echo base_url('assets/web/') ?>assets/js/waypoints.js"></script>
    <!-- Ajaxchimp JS -->
    <script src="<?php echo base_url('assets/web/') ?>assets/js/ajaxchimp.js"></script>
    <!-- Ajax Mail JS -->
    <script src="<?php echo base_url('assets/web/') ?>assets/js/ajax-mail.js"></script>
    <!-- Counter Up  JS -->
    <script>(function(e){"use strict";e.fn.counterUp=function(t){var n=e.extend({time:400,delay:10},t);return this.each(function(){var t=e(this),r=n,i=function(){var e=[],n=r.time/r.delay,i=t.text(),s=/[0-9]+,[0-9]+/.test(i);i=i.replace(/,/g,"");var o=/^[0-9]+$/.test(i),u=/^[0-9]+\.[0-9]+$/.test(i),a=u?(i.split(".")[1]||[]).length:0;for(var f=n;f>=1;f--){var l=parseInt(i/n*f);u&&(l=parseFloat(i/n*f).toFixed(a));if(s)while(/(\d+)(\d{3})/.test(l.toString()))l=l.toString().replace(/(\d+)(\d{3})/,"$1,$2");e.unshift(l)}t.data("counterup-nums",e);t.text("0");var c=function(){t.text(t.data("counterup-nums").shift());if(t.data("counterup-nums").length)setTimeout(t.data("counterup-func"),r.delay);else{delete t.data("counterup-nums");t.data("counterup-nums",null);t.data("counterup-func",null)}};t.data("counterup-func",c);setTimeout(t.data("counterup-func"),r.delay)};t.waypoint(i,{offset:"100%",triggerOnce:!0})})}})(jQuery);</script>
    <!-- google map api -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBy3tyin_u6qIdt1Z82yv3mOUcgjaVtRi0"></script>
    <!-- gmap js-->
    <script src="<?php echo base_url('assets/web/') ?>assets/js/map.js"></script>
    <!-- main menu js-->
    <script src="<?php echo base_url('assets/web/') ?>assets/js/jquery.meanmenu.js"></script>
    <!-- scrollUp js-->
    <script src="<?php echo base_url('assets/web/') ?>assets/js/jquery.scrollUp.js"></script>
    <!-- easing js-->
    <script src="<?php echo base_url('assets/web/') ?>assets/js/easing-min.js.pagespeed.jm._RpEYtiAIi.js"></script>
    <!-- Active JS -->
    <script src="<?php echo base_url('assets/web/') ?>assets/js/active.js"></script>
</body>
</html>
