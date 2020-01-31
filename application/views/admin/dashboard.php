<?php 
//Cek Saldo SMS Dashboard dan simpan di db
//Zenziva
$userkey = "6pne9t"; //userkey lihat di zenziva
$passkey = "k8u609ds0y"; // set passkey di zenziva

$bulan = array (1 =>   'Januari',
        'Februari',
        'Maret',
        'April',
        'Mei',
        'Juni',
        'Juli',
        'Agustus',
        'September',
        'Oktober',
        'November',
        'Desember'
      );

$url = "https://reguler.zenziva.net/apps/smsapibalance.php?userkey=$userkey&passkey=$passkey";
$curlHandle = curl_init();
curl_setopt($curlHandle, CURLOPT_URL, $url);
curl_setopt($curlHandle, CURLOPT_POSTFIELDS, 'userkey='.$userkey.'&passkey='.$passkey);
curl_setopt($curlHandle, CURLOPT_HEADER, 0);
curl_setopt($curlHandle, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curlHandle, CURLOPT_SSL_VERIFYHOST, 2);
curl_setopt($curlHandle, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($curlHandle, CURLOPT_TIMEOUT,30);
curl_setopt($curlHandle, CURLOPT_POST, 1);
$results = curl_exec($curlHandle);
curl_close($curlHandle);

$XMLdata = new SimpleXMLElement($results);
$status_saldo = $XMLdata->message[0]->value;
$status = $XMLdata->message[0]->text;
$split1 = explode(' ',$status);
foreach ($bulan as $key => $value) {
  if ($value==$split1[1]) {
    $split1[1] = $key;
    $gabung = $split1[2].'-'.$split1[1].'-'.$split1[0];
    //echo $gabung;
  }
}

$data1 = array(
  "saldo" => (int)$status_saldo,
  "masa_aktif" =>  $gabung
  );
$this->mymodel->update('saldo_sms',$data1,'id_saldo',2);

//RajaSMS
//Cek saldo RajaSMS melalui controller dashboard/main
 ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="breadcrumb-item active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xl-3 col-md-6 col-12">
          <div class="info-box">
            <span class="info-box-icon push-bottom bg-blue"><i class="fa fa-user"></i></span>
            <div class="info-box-content">
              <span class="info-box-text">User</span>
              <?php $md= $this->mymodel->getall('user'); ?>
              <span class="info-box-number"><?php echo count($md); ?> </span>
              <div class="progress">
                <div class="progress-bar bg-blue" style="width: 100%"></div>
              </div>
              <span class="progress-description text-muted">
              </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-xl-3 col-md-6 col-12">
          <div class="info-box">
            <span class="info-box-icon push-bottom bg-blue"><i class="fa  fa-newspaper-o"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Total Artikel</span>
              <?php $md= $this->mymodel->getall('article'); ?>
              <span class="info-box-number"><?php echo count($md); ?> </span>
              <div class="progress">
                <div class="progress-bar bg-blue" style="width: 100%"></div>
              </div>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-xl-3 col-md-6 col-12">
          <div class="info-box">
            <span class="info-box-icon push-bottom bg-blue"><i class="fa fa-book"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Total Ebook</span>
              <?php $md= $this->mymodel->getall('ebook'); ?>
              <span class="info-box-number"><?php echo count($md); ?> </span>
              <div class="progress">
                <div class="progress-bar bg-blue" style="width: 100%"></div>
              </div>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-xl-3 col-md-6 col-12">
          <div class="info-box">
            <span class="info-box-icon push-bottom bg-blue"><i class="ion-ios-chatbubble-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Total Chat</span>
              <?php $md= $this->mymodel->getall('chat'); ?>
              <span class="info-box-number"><?php echo count($md); ?> </span>
              <div class="progress">
                <div class="progress-bar bg-blue" style="width: 100%"></div>
              </div>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
      </div>
      <div class="row">
        <div class="col-xl-6 col-md-12 col-12">
          <div class="info-box">
            <span class="info-box-icon push-bottom bg-blue"><i class="fa fa-envelope"></i></span>
            <div class="info-box-content">
              <span class="info-box-text">Raja SMS</span>
              <?php 
$sms1 = $this->mymodel->getbywhere('saldo_sms','id_saldo',1,'row');
$split = explode('-', $sms1->masa_aktif);
echo "Berlaku Sampai : ".$split[2].' '.$bulan[(int)$split[1]].' '.$split[0];
               ?>
              <span class="info-box-number"><?php echo 'Saldo : '.$sms1->saldo; ?> </span>
              <div class="progress">
                <div class="progress-bar bg-blue" style="width: 100%"></div>
              </div>
              <span class="progress-description text-muted">
              </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-xl-6 col-md-12 col-12">
          <div class="info-box">
            <span class="info-box-icon push-bottom bg-blue"><i class="fa fa-envelope"></i></span>
            <div class="info-box-content">
              <span class="info-box-text">Zenziva SMS</span>
              <?php 
$sms2 = $this->mymodel->getbywhere('saldo_sms','id_saldo',2,'row');
$split2 = explode('-',$sms2->masa_aktif);
echo 'Berlaku Sampai : '.$split2[2].' '.$bulan[(int)$split2[1]].' '.$split2[0];
              ?>
              <span class="info-box-number"><?php echo 'Jumlah SMS : '.$sms2->saldo; ?> </span>
              <div class="progress">
                <div class="progress-bar bg-blue" style="width: 100%"></div>
              </div>
              <span class="progress-description text-muted">
              </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
      </div>


      <!-- /.row -->
      <div class="row">
        <div class="col connectedSortable">
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Pendaftaran User</h3>
            </div>
            <div class="box-body chart-responsive">
              <div class="chart" id="user-regist" style="height: 200px;"></div>
            </div>
            <!-- /.box-body -->
                </div>
              <!-- /.box -->
            </div>
            <!-- /.col -->
       </div>
      <!-- /.row -->

	   <div class="row">
        <div class="col">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Artikel, Ebook, dan Video</h3>
            </div>

            <!-- /.box-header -->
            <div class="box-body">
              <div class="row">
                <div class="col-md-12 col-lg-12">
                  <p class="text-center">
                  </p>
                  <div class="chart">
                    <!-- Sales Chart Canvas -->
                    <div id="bar-chart1" style="height: 200px;"></div>
                  </div>
                  <!-- /.chart-responsive -->
                </div>
              </div>
              <!-- /.row -->
            </div>
            <!-- ./box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

	</section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
