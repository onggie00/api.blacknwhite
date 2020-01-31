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
          <a href="<?php echo site_url("admin/user/exportexcel"); ?>">
            <div class="col-lg-3" style="cursor:pointer;color:#000;border-bottom: 4px solid #0000ff;">
              <p><i class="fa fa-download" ></i> <b> Export to Excel</b>  </p>
            </div>
          </a>

        </div>
        <hr style="margin-top: 0px;margin-bottom: 20px;">

        <center><h4><p class="color-red"><?php echo $this->session->flashdata('msg'); ?></p></h4> </center>

        <br>
        
       <div class="row">
          <div class="col-md-12">
            <form action="<?php echo site_url("admin/user/data"); ?>" method="get">
                <?php if(isset($_REQUEST['by'])) { ?>
                  <div class="col-lg-2">
                    <select  id="by"name="by" value="" class="form-control" required style="border-radius:5px 0px 0px 5px;">
                      <option value="nama" <?php if($_REQUEST['by']=="nama") echo "selected" ?>>Nama</option>
                      <option value="email" <?php if($_REQUEST['by']=="email") echo "selected" ?>>Email</option>
                      <option value="phone" <?php if($_REQUEST['by']=="phone") echo "selected" ?>>No Telp</option>
                    </select>
                  </div>
                  <div class="col-lg-4" style="margin-left:-20px;" id="txtsc">
                    <input type="text" id="q"  name="q" value="<?php echo $_REQUEST['q'] ?>" class="form-control" required>
                  </div>
                  <?php }else{ ?>
                  <div class="col-lg-2">
                    <select  id="by"name="by" value="" class="form-control" required style="border-radius:5px 0px 0px 5px;">
                      <option value="nama" >Nama</option>
                      <option value="email">Email</option>
                      <option value="phone">No Telp</option>
                    </select>
                  </div>
                  <div class="col-lg-4" style="margin-left:-20px;" id="txtsc">
                    <input type="text" id="q"  name="q" value="" class="form-control" required>
                  </div>
                  <?php } ?>
                
                <div class="col-lg-1" style="margin-left:-20px;">
                  <button type="submit"  class="btn btn-default" style="border-radius:0px 5px 5px 0px;float:left">
                    <i class="fa fa-search"></i>
                  </button>
                </div>
            </form>
          </div>
        </div>
        <br>
       <div  id="data_admin" ></div>
       <div align="right" id="pagination_link"></div>
       <div>
          <table id="example" class="display" style="width:100%" class="display dataTable table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Tanggal</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
         </table>
       </div>
    </div>
    <!-- /top tiles -->
  </div>
<button type="button" class="hidden" data-toggle="modal" data-target="#modal_add_data" id="add_data">de</button>
<?php $this->load->view('admin/modal_add/user') ?>
<!-- Small modal -->
<button type="button" class="hidden" data-toggle="modal" data-target=".bs-example-modal-sm" id="del">de</button>
<?php $this->load->view('admin/modal_delete/user') ?>
<!-- /modals -->
<button type="button" class="hidden" data-toggle="modal" data-target="#modal_edit" id="btn_modal_edit">de</button>
<div class="modal fade" id="modal_edit" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content Roboto" style="color: #000;width: 700px;border-radius: 0px;margin-top: 10%;margin-left: -5%;" id="isi_modal_edit">
    </div>
  </div>
</div>

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
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    $('#example').DataTable({ 
                  "processing": true, //Feature control the processing indicator.
                  "serverSide": true, //Feature control DataTables' server-side processing mode.
                  "order": [], //Initial no order.
                  // Load data for the table's content from an Ajax source
                  "ajax": {
                      "url": '<?php echo site_url('admin/user/alldata'); ?>',
                      "type": "POST"
                  }
            });
} );
$("#id_prov").change(function(){
    $.post("<?php echo site_url('admin/utils/ambilkab') ?>",{id_prov:$("#id_prov").val()},function(msg){
      $("#id_kab").html(msg);
      $("#id_kec").html('<option value="">Pilih Kabupaten</option>');
    });
 });
 $("#id_kab").change(function(){
     $.post("<?php echo site_url('admin/utils/ambilkec') ?>",{id_kab:$("#id_kab").val()},function(msg){
       $("#id_kec").html(msg);
     });
  });
  
</script>
<script type="text/javascript">

function edit_data(a) {
  $.post('<?php echo site_url('admin/user/getdataedit') ?>',
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
  <?php $param = (isset($_GET['by'])) ? "?".http_build_query($_GET, '', "&") : "" ; ?>
  $.ajax({
   url:"<?php echo site_url(); ?>admin/user/pagination/"+page+"<?= $param ?>",
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
