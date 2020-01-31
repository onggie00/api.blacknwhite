
<div class="modal" id="modal_add_data" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content Roboto" style="color: #000;width: 700px;border-radius: 0px;margin-top: 10%;margin-left: -5%;">
      <div class="modal-header" style="padding:15px;">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: #00B4CF;opacity:1;"><i class="fa fa-close fa-2x"></i>
        </button>
        <div class="col-lg-5" style="border-bottom: 4px solid #00B4CF;font-size:16px;">
          <p>TAMBAH DATA</p>
        </div>
      </div>
      <form class="form-horizontal form-label-left" action="<?php echo site_url('admin/notification/insert_data') ?>" method="post">
      <div class="modal-body">
        <div class="row">
            <div class="col-lg-12">
              <div class="row">
                <div class="col-lg-6" style="width:49%;">
                  <div class="row">
                    <div class="col-lg-6" style="text-align:left;">
                      <p style="margin-left:-10px;font-weight:bold;">judul Broadcast</p>
                    </div>
                    <div class="col-lg-6" style="color:#CACACA;text-align:right;">
                      <p>*Required</p>
                    </div>
                  </div>
                  <div class="row">
                    <input type="text" id="name" required="required" class="form-control"
                    style="background:#EFEFEF;width:100%;" name="title" value="" autocomplete="off">
                  </div>
                </div>
              </div>
              <br>
              <div class="row">
                <div class="col-lg-6" style="width:99%;">
                  <div class="row">
                    <div class="col-lg-6" style="text-align:left;">
                      <p style="margin-left:-10px;font-weight:bold;">Deskripsi Broadcast</p>
                    </div>
                    <div class="col-lg-6" style="color:#CACACA;text-align:right;">
                      <p>*Required</p>
                    </div>
                  </div>
                  <div class="row">
                    <textarea required="required" class="form-control"
                    style="background:#EFEFEF;width:100%;" name="description" rows="8" cols="80"></textarea>
                  </div>
                </div>
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
