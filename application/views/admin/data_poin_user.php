<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <?php echo $tittle ?>
      </h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="breadcrumb-item active"><a href="#"><?php echo $tittle ?></a></li>
      </ol>
    </section>
    <!-- modal add -->
    <!--<button type="button" class="d-none" data-toggle="modal" data-target="#modal_add_data" id="add_data">de</button>-->
    <?php $this->load->view('admin/modal_add/poin_khusus_ajak_user') ?>
    <!-- delete -->
    <!--<button type="button" class="d-none" data-toggle="modal" data-target=".bs-example-modal-sm" id="del">de</button>-->
    <?php $this->load->view('admin/modal_delete/poin_khusus_ajak_user') ?>
    <!-- edit -->
    <!--<button type="button" class="d-none" data-toggle="modal" data-target="#modal_edit" id="btn_modal_edit">de</button>-->
    <div class="modal fade" id="modal_edit" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content Roboto" style="color: #000;border-radius: 0px;margin-top: 10%;" id="isi_modal_edit">
        </div>
      </div>
    </div>
    <!-- end-modal -->
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="box">
            <div class="box-header">
              <div class="col-lg-3" style="cursor:pointer;border-bottom: 4px solid #dd4124;" onclick="add_data()">
                <p><i class="fa fa-plus" ></i> <b>TAMBAH DATA</b>  </p>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <?php
              $msg=$this->session->flashdata('msg');
              if (isset($msg )): ?>
              <div class="alert alert-info alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-info"></i> <?php echo $this->session->flashdata('msg'); ?></h4>
              </div>
              <?php endif; ?>
              <div class="table-responsive">
                <?php $this->load->view('admin/table_data/table_poin_user') ?>
              </div>

            </div>
            <!-- /.box-body -->
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

  <footer class="main-footer">
    <div class="pull-right d-none d-sm-inline-block">
      <b>Version</b> 1.1
    </div>Copyright &copy; 2018 <a href="https://www.namagz.com/">Namagz</a>. All Rights Reserved.
  </footer>
</div>
<!-- ./wrapper -->

	<!-- jQuery 3 -->
	<script src="<?php echo base_url() ?>assets/admin/assets/vendor_components/jquery-3.3.1/jquery-3.3.1.js"></script>

	<!-- popper -->
	<script src="<?php echo base_url() ?>assets/admin/assets/vendor_components/popper/dist/popper.min.js"></script>

	<!-- Bootstrap 4.1.3-->
	<script src="<?php echo base_url() ?>assets/admin/assets/vendor_components/bootstrap/js/bootstrap.min.js"></script>

	<!-- DataTables -->
	<script src="<?php echo base_url() ?>assets/admin/assets/vendor_components/datatables.net/js/jquery.dataTables.min.js"></script>
	<script src="<?php echo base_url() ?>assets/admin/assets/vendor_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>

	<!-- SlimScroll -->
	<script src="<?php echo base_url() ?>assets/admin/assets/vendor_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>

	<!-- FastClick -->
	<script src="<?php echo base_url() ?>assets/admin/assets/vendor_components/fastclick/lib/fastclick.js"></script>

	<!-- Miidal-art Admin App -->
	<script src="<?php echo base_url() ?>assets/admin/js/template.js"></script>

	<!-- Miidal-art Admin for demo purposes -->
	<script src="<?php echo base_url() ?>assets/admin/js/demo.js"></script>

	<!-- This is data table -->
    <script src="<?php echo base_url() ?>assets/admin/assets/vendor_plugins/DataTables-1.10.15/media/js/jquery.dataTables.min.js"></script>

    <!-- start - This is for export functionality only -->
    <script src="<?php echo base_url() ?>assets/admin/assets/vendor_plugins/DataTables-1.10.15/extensions/Buttons/js/dataTables.buttons.min.js"></script>
    <script src="<?php echo base_url() ?>assets/admin/assets/vendor_plugins/DataTables-1.10.15/extensions/Buttons/js/buttons.flash.min.js"></script>
    <script src="<?php echo base_url() ?>assets/admin/assets/vendor_plugins/DataTables-1.10.15/ex-js/jszip.min.js"></script>
    <script src="<?php echo base_url() ?>assets/admin/assets/vendor_plugins/DataTables-1.10.15/ex-js/pdfmake.min.js"></script>
    <script src="<?php echo base_url() ?>assets/admin/assets/vendor_plugins/DataTables-1.10.15/ex-js/vfs_fonts.js"></script>
    <script src="<?php echo base_url() ?>assets/admin/assets/vendor_plugins/DataTables-1.10.15/extensions/Buttons/js/buttons.html5.min.js"></script>
    <script src="<?php echo base_url() ?>assets/admin/assets/vendor_plugins/DataTables-1.10.15/extensions/Buttons/js/buttons.print.min.js"></script>
    <!-- end - This is for export functionality only -->

	<!-- Miidal-art Admin for Data Table -->
	<script>
  $(document).ready(function(){
       var dataTable = $('#data').DataTable({
            "processing":true,
            "serverSide":true,
            "order":[],
            oLanguage: {
              sProcessing: "<center><img style='margin:0 auto;' src='<?php echo base_url() ?>/assets/img/loader/Facebook.gif'></center>"
            }, 
            "ajax":{
                 url:"<?php echo base_url() .'admin/poin_user/alldata'; ?>",
                 type:"POST"
            },
            "columnDefs":[
                 {
                      "targets":[1,2],
                      "orderable":false,
                 },
            ],
       });

   $(document).on("click", ".delete", function(e) {
            var id = $(this).attr("id");
            e.preventDefault();
            $('#del').click();
            $('#id_data').val(id);
        });

        $(document).on('click', '.update', function(){
            var a = $(this).attr("id");
            $.post('<?php echo site_url('admin/poin_user/getdataedit') ?>',
            {id :a},function (data) {
              if (data!="" || data != null) {
                $('#isi_modal_edit').html(data);
                $('#btn_modal_edit').click();
              }
            });
       });

  });

  </script>
  <script type="text/javascript">
  function edit_data(a) {
    $.post('<?php echo site_url('admin/poin_user/getdataedit') ?>',
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
