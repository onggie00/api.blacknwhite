<!-- page content -->
  <div class="col-md-9 right_col" role="main">
    <!-- top tiles -->
    <div class="col-lg-12 roboto" style="color: #000;">
        <h3><?php echo $tittle ?> </h3>
        <div class="row" style="margin-top:40px;">
          <div class="col-lg-3" style="border-bottom: 4px solid #ff0000;">
            <p><i class="fa fa-table" ></i> <b>DATA</b> </p>
          </div>
          <div class="col-lg-3" style="cursor:pointer;border-bottom: 4px solid #00ff00;" onclick="add_data()">
            <p><i class="fa fa-plus" ></i> <b>TAMBAH DATA</b>  </p>
          </div>
        </div>
        <hr style="margin-top: 0px;margin-bottom: 20px;">

        <center><h4><p class="color-red"><?php echo $this->session->flashdata('msg'); ?></p></h4> </center>

        <br>
       <div  id="data_admin"></div>
       <div align="right" id="pagination_link"></div>
    </div>
    <!-- /top tiles -->
  </div>
<button type="button" class="hidden" data-toggle="modal" data-target="#modal_add_data" id="add_data">de</button>
<?php $this->load->view('admin/modal_add/notification') ?>

</div>
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
  $.post('<?php echo site_url('admin/notification/getdataedit') ?>',
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
<script>
$(document).ready(function(){

 function load_country_data(page)
 {
  $.ajax({
   url:"<?php echo site_url(); ?>admin/notification/pagination/"+page,
   method:"GET",
   dataType:"json",
   success:function(data)
   {
    $('#data_admin').html(data.data_admin);
    $('#pagination_link').html(data.pagination_link);
   }
  });
 }

 load_country_data(1);

 $(document).on("click", ".pagination li a", function(event){
  event.preventDefault();
  var page = $(this).data("ci-pagination-page");
  load_country_data(page);
 });

});
</script>
</body>
</html>
