<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <title>Pendaftaran</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">


  <!-- Bootstrap -->
  <link href="<?php echo base_url() ?>vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="<?php echo base_url() ?>vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
      <!-- Alert Style -->
      <link href="<?php echo base_url() ?>assets/css/alertify.css" rel="stylesheet">
      <style media="screen">
      .myradio {
      border: 1px solid #bfbfbf;
      background: #fff;
      padding: 0.5em;
      -webkit-appearance: none;
      height: 20px;
      width: 20px;
      }
      .myradio:checked {
      //background: url(data:image/gif;base64,R0lGODlhAQABAPAAAP///////yH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==) no-repeat center center;
      background: #000;
      background-size: 9px 9px;
      }

      .myradio:focus {
      outline-color: transparent;
      }
      </style>
    </head>
  <body style="background:#D4C8BD;">
    <!-- page content -->
    <div class="col-xs-12">
        <div class="row">
          <div class="col-xs-12" style="background: #D4C8BD;padding:0px;">
            <div class="row">
              <div class="col-xs-4" style="text-align:center;">
                <?php foreach ($this->other_model->getalllogoformulir() as $key => $value): ?>
                  <img src="<?php echo base_url('assets/img/logo/').$value->img ?>" alt=""
                  class="img-responsive" width="100%">
                  <br>
                <?php endforeach; ?>
              </div>
              <div class="col-xs-4" style="font-size: 11px;color:#3E5F4D;font-weight:bold;margin-top:20px;line-height:1">
                <?php
                $ab = $this->other_model->getaboutformulir();
                 ?>
                  <p style="margin-top:-10px;"><?php echo $ab->nama ?></p>
                    <p style="margin-top:-15px;"><?php echo $ab->alamat ?></p>
                  <p style="margin-top:-15px;"><?php echo $ab->kecamatan ?></p>
                  <p style="margin-top:-15px;"><?php echo $ab->kota ?></p>
                  <p style="margin-top:-15px;">Telp : <?php echo $ab->telp ?></p>
                  <p style="margin-top:-15px;">Email : <?php echo $ab->email ?></p>
                  <p style="margin-top:-15px;">Website : <?php echo $ab->website ?></p>
              </div>
              <div class="col-xs-2" >
                <div style="font-size:11px;color:#9E9184  ;font-weight:bold;
                width:3cm;height:4cm; border:1px solid black;text-align:center;">
                    <br><br><br><br>
                    Ukuran Pas <br>foto 3x4
                </div>
              </div>
            </div>
            <div class="row" style="margin-top:25px;">
                <div class="col-xs-1">
                  <b>Reff. ID :</b>
                </div>
                <div class="col-xs-3">
                     <input id="nama" class="form-control"  name="nama" required type="text" value="">
                </div>
                <div class="col-xs-2" style="margin-left:10%;">
                  <b>Customer. ID :</b>
                </div>
                <div class="col-xs-3" style="margin-left:-5%;">
                     <input id="nama" class="form-control"  name="nama" required type="text" value="">
                </div>
            </div>
            <div class="col-xs-12" style="margin-top:25px;background:#55acee;border-radius:20px;">
              <div class="col-xs-4 col-xs-offset-3" style="margin-top:-10px;background:#416253;color:#ffffff;border-radius:20px;text-align:center;font-size:16pt;width:300px;">
                 <b>Formulir Pendaftaran Umroh</b>
              </div>
              <div class="col-xs-12" style="margin-top:15px;text-align:center;">
                <h3><b> بِسْمِ اللّهِ الرَّحْمَنِ الرَّحِيْمِ </b> </h3>
              </div>
              <div class="col-xs-12" style="margin-top:35px;text-align:left;">
                <?php if (isset($jemaah)): ?>
                  <form class="form-horizontal form-label-left" action="<?php echo site_url('admin/jemaah/update_data') ?>" method="post">
                    <input type="hidden" name="id_jemaah" value="<?php echo $jemaah->id_jemaah ?>">
                  <?php else: ?>
                    <form class="form-horizontal form-label-left" action="<?php echo site_url('admin/jemaah/insert_data') ?>" method="post">
                <?php endif; ?>
                <div class="col-xs-5">
                  <div class="item form-group">
                    <div class="col-xs-11" style="color:#fff;">
                      <label class="pull-left" for="nama">Nama Lengkap :</label>
                      <?php if (isset($jemaah)): ?>
                        <input id="nama" class="form-control"  name="nama"
                         placeholder="Ahmad Syauqi Albana" required type="text" value="<?php echo $jemaah->nama ?>">
                         <?php else: ?>
                           <input id="nama" class="form-control"  name="nama" required type="text" value="">
                      <?php endif; ?>
                    </div>
                    <div class="col-xs-11" style="color:#fff;">
                      <label class="pull-left" for="nama">Bin / Binti :</label>
                      <?php if (isset($jemaah)): ?>
                        <input id="orang_tua" class="form-control"  name="orang_tua" required type="text" value="<?php echo $jemaah->orang_tua ?>">
                         <?php else: ?>
                           <input id="orang_tua" class="form-control"  name="orang_tua" required type="text">
                      <?php endif; ?>
                    </div>
                    <div class="col-xs-11" style="color:#fff;">
                      <label class="pull-left" for="nama">Tempat, Tanggal Lahir :</label>
                      <?php if (isset($jemaah)): ?>
                      <input id="ttl" class="form-control "  name="ttl" required type="text" value="<?php echo $jemaah->ttl ?>">
                       <?php else: ?>
                       <input id="ttl" class="form-control "  name="ttl"  required type="text">
                      <?php endif; ?>
                    </div>
                    <div class="col-xs-11" style="color:#fff;">
                      <label class="pull-left" for="nama">Jenis Kelamin :</label>
                    </div>
                  <div style="width:100%;margin-top:5px;text-align:center;font-size:12px;">
                    <div style="color:#fff;width:48%;float:left;">
                      <div style="color:#fff;float:left;width:20%;margin-left:20px">
                         <input id="ttl" class="form-control "  name="ttl"  required type="text" >
                      </div>
                      <div style="color:#fff;float:left;width:50%;text-align:center;">
                         <label class="" for="nama">Laki-Laki</label>
                      </div>
                    </div>
                    <div style="color:#fff;width:50%;float:left;">
                      <div style="color:#fff;float:left;width:20%;">
                         <input id="ttl" class="form-control "  name="ttl"  required type="text">
                      </div>
                      <div style="color:#fff;float:left;width:60%;text-align:center;">
                         <label class="" for="nama">Perempuan</label>
                      </div>
                    </div>
                  </div>
                    <div class="col-xs-11" style="color:#fff;">
                      <label class="pull-left" for="nama">Usia Pernikahan :</label>
                    </div>
                    <div style="width:100%;margin-top:5px;text-align:center;font-size:12px;">
                      <div style="color:#fff;width:48%;float:left;">
                        <div style="color:#fff;float:left;width:20%;margin-left:20px">
                           <input id="ttl" class="form-control "  name="ttl"  required type="text" >
                        </div>
                        <div style="color:#fff;float:left;width:50%;text-align:center;">
                           <label class="" for="nama">< 5 tahun</label>
                        </div>
                      </div>
                      <div style="color:#fff;width:50%;float:left;">
                        <div style="color:#fff;float:left;width:20%;">
                           <input id="ttl" class="form-control "  name="ttl"  required type="text">
                        </div>
                        <div style="color:#fff;float:left;width:60%;text-align:center;">
                           <label class="" for="nama">10 - 20 tahun</label>
                        </div>
                      </div>
                    </div>
                    <div style="width:100%;margin-top:5px;text-align:center;font-size:12px;">
                      <div style="color:#fff;width:48%;float:left;">
                        <div style="color:#fff;float:left;width:20%;margin-left:20px">
                           <input id="ttl" class="form-control "  name="ttl"  required type="text" >
                        </div>
                        <div style="color:#fff;float:left;width:60%;text-align:center;">
                           <label class="" for="nama">5 - 10 tahun</label>
                        </div>
                      </div>
                      <div style="color:#fff;width:50%;float:left;">
                        <div style="color:#fff;float:left;width:20%;">
                           <input id="ttl" class="form-control "  name="ttl"  required type="text">
                        </div>
                        <div style="color:#fff;float:left;width:60%;text-align:center;">
                           <label class="" for="nama">> 20 tahun</label>
                        </div>
                      </div>
                    </div>
                    <div class="col-xs-11" style="color:#fff;">
                      <label class="pull-left" for="nama">No. KTP :</label>
                      <input type="tel" id="ktp" name="ktp" required class="form-control ">
                    </div>
                    <div class="col-xs-11" style="color:#fff;">
                      <label class="pull-left" for="alamatktp">Alamat Sesuai KTP :</label>
                      <input type="text" id="alamatktp" name="alamatktp" required class="form-control "
                      style="margin-top:5px">
                    </div>
                    <div style="width:100%;margin-top:5px;text-align:center;font-size:10px;">
                      <div style="color:#fff;width:45%;float:left;">
                        <div style="color:#fff;float:left;width:20%;margin-left:10px">
                           <label class="" for="nama">No.</label>
                        </div>
                        <div style="color:#fff;float:left;width:20%;text-align:center;">
                           <input id="ttl" class="form-control "  name="ttl"  required type="text" >
                        </div>
                      </div>
                      <div style="color:#fff;width:45%;float:left;margin-left:-30%;">
                        <div style="color:#fff;float:left;width:40%;margin-left:20px">
                           <label class="" for="nama">RT/RW.</label>
                        </div>
                        <div style="color:#fff;float:left;width:30%;text-align:center;">
                           <input id="ttl" class="form-control "  name="ttl"  required type="text" >
                        </div>
                      </div>
                      <div style="color:#fff;width:48%;float:left;margin-left:-16%;">
                        <div style="color:#fff;float:left;width:50%;margin-left:20px">
                           <label class="" for="nama">Kode Pos.</label>
                        </div>
                        <div style="color:#fff;float:left;width:33%;text-align:center;">
                           <input id="ttl" class="form-control "  name="ttl"  required type="text" >
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xs-5 col-xs-offset-1">
                  <div class="item form-group">
                    <div class="col-xs-11" style="color:#fff;margin-left:-15px;">
                      <label class="pull-left" for="alamatktp">Alamat Sesuai KTP :</label>
                      <input type="text" id="alamatktp" name="alamatktp" required class="form-control "
                      style="margin-top:5px">
                    </div>
                    <div style="width:100%;margin-top:5px;text-align:center;font-size:10px;">
                      <div style="color:#fff;width:45%;float:left;">
                        <div style="color:#fff;float:left;width:20%;margin-left:10px">
                           <label class="" for="nama">No.</label>
                        </div>
                        <div style="color:#fff;float:left;width:20%;text-align:center;">
                           <input id="ttl" class="form-control "  name="ttl"  required type="text" >
                        </div>
                      </div>
                      <div style="color:#fff;width:45%;float:left;margin-left:-30%;">
                        <div style="color:#fff;float:left;width:40%;margin-left:20px">
                           <label class="" for="nama">RT/RW.</label>
                        </div>
                        <div style="color:#fff;float:left;width:30%;text-align:center;">
                           <input id="ttl" class="form-control "  name="ttl"  required type="text" >
                        </div>
                      </div>
                      <div style="color:#fff;width:48%;float:left;margin-left:-16%;">
                        <div style="color:#fff;float:left;width:50%;margin-left:20px">
                           <label class="" for="nama">Kode Pos.</label>
                        </div>
                        <div style="color:#fff;float:left;width:33%;text-align:center;">
                           <input id="ttl" class="form-control "  name="ttl"  required type="text" >
                        </div>
                      </div>
                    </div>
                    <div class="col-xs-11" style="color:#fff;margin-left:-15px;">
                      <label class="pull-left" for="alamatktp">No. Telpon Rumah :</label>
                          <input type="tel" id="telp" name="telp" required  class="form-control " >
                    </div>
                    <div class="col-xs-11" style="color:#fff;margin-left:-15px;">
                      <label class="pull-left" for="alamatktp">No. Handphone :</label>
                         <input type="tel" id="phone" name="phone" required  class="form-control ">
                    </div>
                    <div class="col-xs-11" style="color:#fff;margin-left:-15px;">
                      <label class="pull-left" for="alamatktp">Pendidikan Terakhir :</label>
                           <input id="pendidikan" class="form-control "  name="pendidikan"
                            required type="text">
                    </div>
                    <div class="col-xs-11" style="color:#fff;margin-left:-15px;">
                      <label class="pull-left" for="alamatktp">Pekerjaan :</label>
                           <input id="pekerjaan" class="form-control "  name="pekerjaan"
                            required type="text">
                    </div>
                    <div class="col-xs-11" style="color:#fff;margin-left:-15px;">
                      <label class="pull-left" for="alamatktp">Golongan Darah :</label>
                    </div>
                    <div style="width:100%;margin-top:5px;text-align:left;font-size:9px;">
                      <div style="color:#fff;float:left;width:10%;">
                        <input id="ttl" class="form-control "  name="ttl"  required type="text"  style="width:80%">
                      </div>
                      <div style="color:#fff;float:left;width:10%;text-align:center;margin-left:-5px">
                        A
                      </div>
                      <div style="color:#fff;float:left;width:10%;">
                        <input id="ttl" class="form-control "  name="ttl"  required type="text"  style="width:80%">
                      </div>
                      <div style="color:#fff;float:left;width:10%;text-align:center;margin-left:-5px">
                        B
                      </div>
                      <div style="color:#fff;float:left;width:10%;">
                        <input id="ttl" class="form-control "  name="ttl"  required type="text"  style="width:80%">
                      </div>
                      <div style="color:#fff;float:left;width:10%;text-align:center;margin-left:-5px">
                        AB
                      </div>
                      <div style="color:#fff;float:left;width:10%;">
                        <input id="ttl" class="form-control "  name="ttl"  required type="text"  style="width:80%">
                      </div>
                      <div style="color:#fff;float:left;width:10%;text-align:center;margin-left:-5px">
                        O
                      </div>
                    </div>
                    <div class="col-xs-11" style="color:#fff;margin-left:-15px;">
                      <label class="pull-left" for="alamatktp">Ukuran Baju :</label>
                    </div>
                    <div style="width:100%;margin-top:5px;text-align:left;font-size:9px;">
                      <div style="color:#fff;float:left;width:10%;">
                        <input id="ttl" class="form-control "  name="ttl"  required type="text"  style="width:80%">
                      </div>
                      <div style="color:#fff;float:left;width:10%;text-align:center;margin-left:-5px">
                        S
                      </div>
                      <div style="color:#fff;float:left;width:10%;">
                        <input id="ttl" class="form-control "  name="ttl"  required type="text"  style="width:80%">
                      </div>
                      <div style="color:#fff;float:left;width:10%;text-align:center;margin-left:-5px">
                        M
                      </div>
                      <div style="color:#fff;float:left;width:10%;">
                        <input id="ttl" class="form-control "  name="ttl"  required type="text"  style="width:80%">
                      </div>
                      <div style="color:#fff;float:left;width:10%;text-align:center;margin-left:-5px">
                        L
                      </div>
                      <div style="color:#fff;float:left;width:10%;">
                        <input id="ttl" class="form-control "  name="ttl"  required type="text"  style="width:80%">
                      </div>
                      <div style="color:#fff;float:left;width:10%;text-align:center;margin-left:-5px">
                        XL
                      </div>
                      <div style="color:#fff;float:left;width:10%;">
                        <input id="ttl" class="form-control "  name="ttl"  required type="text"  style="width:80%">
                      </div>
                      <div style="color:#fff;float:left;width:10%;text-align:center;margin-left:-5px">
                        XXL
                      </div>
                    </div>
                    <div class="col-xs-11" style="color:#fff;margin-left:-15px;">
                      <label class="pull-left" for="paketumroh">Pilihan Paket Umroh :</label>
                      <input type="text" id="paketumroh" name="paketumroh" required class="form-control "
                      style="margin-top:5px">
                    </div>
                    <div style="width:100%;margin-top:5px;text-align:left;font-size:10px;display:none;">
                      <div style="color:#fff;width:45%;float:left;margin-left:5px">
                        <div style="color:#fff;float:left;width:20%;text-align:center;">
                           <input id="ttl" class="form-control "  name="ttl"  required type="text" >
                        </div>
                        <div style="color:#fff;float:left;width:50%;text-align:left;margin-left:5px">
                           QUAD
                        </div>
                      </div>
                      <div style="color:#fff;width:45%;float:left;margin-left:-20%;">
                        <div style="color:#fff;float:left;width:20%;text-align:center;">
                           <input id="ttl" class="form-control "  name="ttl"  required type="text" >
                        </div>
                        <div style="color:#fff;float:left;width:50%;text-align:left;margin-left:5px">
                           TRIPLE
                        </div>
                      </div>
                      <div style="color:#fff;width:45%;float:left;margin-left:-20%;">
                        <div style="color:#fff;float:left;width:20%;text-align:center;">
                           <input id="ttl" class="form-control "  name="ttl"  required type="text" >
                        </div>
                        <div style="color:#fff;float:left;width:50%;text-align:left;margin-left:5px">
                           DOBULE
                        </div>
                      </div>
                    </div>

                  </div>
                </div>

                </form>
              </div>
            </div>
            <div class="col-xs-12" style="font-size:11px;">
              <br>
            <div class="col-xs-6" style="color: #000;line-height:100%;">
              <p><b>Catatan *</b> </p>
              <?php foreach ($this->other_model->getallcatatanformulir() as $key => $value): ?>
                <p><b>* <?php echo $value->description ?></b> </p>
              <?php endforeach; ?>
            </div>
            <div class="col-xs-4 col-xs-offset-2">
              <p style="text-align:center"><b>___________________,...../....../......</b> </p>
              <p style="text-align:center"><b>Calon Jemaah</b> </p>
              <br><br><br>
              <p style="text-align:center"><b>(.............................)</b> </p>
            </div>
            </div>
          </div>
        </div>
    </div>
    <!-- /page content -->
  </body>
</html>
