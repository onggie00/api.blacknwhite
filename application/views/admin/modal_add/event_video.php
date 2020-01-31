<div class="modal" id="modal_add_data" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-md">
    <div class="modal-content Roboto" style="color: #000;border-radius: 0px;margin-top: 10%;">
      <div class="modal-header" style="padding:15px;">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: #00B4CF;opacity:1;"><i class="fa fa-close fa-2x"></i>
        </button>
        <div class="col-lg-5" style="border-bottom: 4px solid #00B4CF;font-size:16px;">
          <p>TAMBAH DATA</p>
        </div>
      </div>
      <form class="form-horizontal form-label-left" action="<?php echo site_url('admin/event_video/insert_data') ?>" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id_event" value="<?php echo $mydata->id_event ?>">
        <div class="modal-body" style="font-size:12px;">
          <div class="row">
            <div class="col-md col-xs" >
              <div class="row">
                <div class="col-md col-xs" style="text-align:left;">
                  <p style="margin-left:-10px;font-weight:bold;">Tumbnail</p>
                </div>
                <div class="col-md col-xs" style="color:#CACACA;text-align:right;">
                  *required
                </div>
              </div>
              <div class="row">
                <input type="file" id="img" class="form-control" required
                style="background:#EFEFEF;width:100%;" name="img" value=""  accept="image/jpg, image/jpeg, image/png">
              </div>
            </div>
            <div class="col-md col-xs" >
              <div class="row">
                <div class="col-md col-xs" style="text-align:left;">
                  <p style="margin-left:-10px;font-weight:bold;">Video</p>
                </div>
                <div class="col-md col-xs" style="color:#CACACA;text-align:right;">
                  *required
                </div>
              </div>
              <div class="row">
                <input type="file" id="vid" class="form-control"required
                style="background:#EFEFEF;width:100%;" name="video" value=""  accept="video/mp4">
              </div>
            </div>
          </div>

          </div>


          <div class="modal-footer">
            <button type="submit" class="btn btn-default" style="background: #00B4CF;color:#fff;"
            id="add_jpp">TAMBAH DATA</button>
          </div>
      </form>

    </div>
  </div>
</div>
