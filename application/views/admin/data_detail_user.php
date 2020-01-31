<!-- page content -->
  <div class="col-md-9 right_col" role="main">
    <!-- top tiles -->
    <div class="col-lg-12 roboto" style="color: #000;">
      <a href="<?php echo site_url('admin/user/data') ?>"  style="background: #55acee;color: #fff;border-radius:20px;padding:5px"
        ><i class="fa fa-arrow-left"></i> Kembali Data User </a>
        <h3><?php echo $tittle ?>  </h3>
        <div class="row" style="margin-top:40px;border:1px solid #bfbfbf;padding:20px;">
            <div class="col-lg-12">
              <center>
                <img src="<?php echo base_url('account/user/img/'.$mydata->img) ?>" alt="" width="100px" class="img-responsive" style="">
                <h3><?php echo $mydata->nama_depan. " ".$mydata->nama_belakang ?> </h3>
                <h5>No Handphone : <?php echo $mydata->phone ?> </h5>
                <h5>Email  : <?php echo $mydata->email ?> </h5>
                <h5>Tanggal Lahir : <?php echo converttgl(date('d F Y',strtotime($mydata->tanggal_lahir)))  ?> </h5>
                <h5>Jenis Kelamin : <?php if ($mydata->jenis_kelamin==0) echo "Laki-laki"; else echo "Perempuan"; ?> </h5>
                <h5>Tanggal Daftar : <?php echo converttgl(date('d F Y',strtotime($mydata->created_at)))  ?> </h5>
                <h5>Token  : <?php echo $mydata->token ?> </h5>
                <h5>FCM ID  : <?php echo $mydata->id_fcm ?> </h5>
                <h5>Barcode  : <?php echo $mydata->barcode ?> </h5>
                <h5>Jalan  : <?php echo $mydata->jalan ?> </h5>
                <h5>RT/RW  : <?php echo $mydata->rt ?>/<?php echo $mydata->rw ?> </h5>
                <h5>Kode Pos  : <?php echo $mydata->kodepos ?> </h5>
                <h5>Kecamatan : <?php echo $this->mymodel->getbywhere('kecamatan','id_kec',$mydata->id_kec,'row')->nama ?></h5>
                <h5>Kabupaten : <?php echo ucwords(strtolower($this->mymodel->getbywhere('kabupaten','id_kab',$mydata->id_kab,'row')->nama)) ?></h5>
                <h5>Provinsi : <?php echo ucwords(strtolower($this->mymodel->getbywhere('provinsi','id_prov',$mydata->id_prov,'row')->nama)) ?></h5>
                <h5>Status Aktif : <?php if ($mydata->status_aktif==1) echo "Aktif"; else echo "Tidak Aktif"; ?> </h5>
                <hr>
              </center>
            </div>
        </div>
    </div>
    <!-- /top tiles -->
  </div>

<!-- jQuery -->
<script src="<?php echo base_url() ?>vendors/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="<?php echo base_url() ?>vendors/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->

<!-- NProgress -->
<script src="<?php echo base_url() ?>vendors/nprogress/nprogress.js"></script>
<!-- iCheck -->
<script src="<?php echo base_url() ?>vendors/iCheck/icheck.min.js"></script>
<!-- Datatables -->

<!-- Custom Theme Scripts -->
<script src="<?php echo base_url() ?>build/js/custom.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/alertify.js" charset="utf-8"></script>
<script type="text/javascript">
function edit_data(a) {

  $.post('<?php echo site_url('admin/Usaha/getdataedit') ?>',
  {id :a},function (data) {
    if (data!="" || data != null) {
      $('#isi_modal_edit').html(data);
      $('#btn_modal_edit').click();
    }
  });

}
function add_data() {
  $('#add_data').click();
}
  function delete_data(a) {
    $('#del').click();
    $('#id_data').val(a);
  }
</script>
</body>
</html>
