<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <form class="form-horizontal form-label-left" action="<?php echo site_url('admin/hadiah_category/delete') ?>" method="post" enctype="multipart/form-data">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
            </button>
            <h4 class="modal-title" id="myModalLabel2">Konfirmasi Hapus</h4>
          </div>
          <div class="modal-body">
            <h4>Anda Yakin Ingin menghapus Data ini ? </h4>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
            <input type="hidden" name="id_data" value="" id="id_data">
            <button type="submit" class="btn btn-default" style="background: #e01a32;color:#fff;"
            id="btn_delete">Hapus</button>
          </div>
      </form>
    </div>
  </div>
</div>