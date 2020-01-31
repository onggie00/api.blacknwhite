<div class="modal-header" style="padding:15px;">
  <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: #00B4CF;opacity:1;"><i class="fa fa-close fa-2x"></i>
  </button>
  <div class="col-lg-5" style="border-bottom: 4px solid #00B4CF;font-size:16px;">
    <p>EDIT DATA</p>
  </div>
</div>
<form class="form-horizontal form-label-left" action="<?php echo site_url('admin/official_sponsor/update_data') ?>" method="post" enctype="multipart/form-data">
  <input type="hidden" name="id_data" value="<?php echo $data->id_official_sponsor ?>">
  <div class="modal-body">
      <div class="row">
          <div class="col-lg-12">
            <div class="row">
              <div class="col-lg-6" style="width:49%;">
                <div class="row">
                  <div class="col-lg-6" style="text-align:left;">
                    <p style="margin-left:-10px;font-weight:bold;">Nama Sponsor</p>
                  </div>
                  <div class="col-lg-6" style="color:#CACACA;text-align:right;">
                    <p>*Required</p>
                  </div>
                </div>
                <div class="row">
                  <input type="text" id="title" required="required" class="form-control"
                  style="background:#EFEFEF;width:100%;" name="name" value="<?php echo $data->name ?>"
                  placeholder="official_sponsor 1" maxlength="100" >
                </div>
              </div>
              <div class="col-lg-6" style="width:49%;margin-left:2%;">
                <div class="row">
                  <div class="col-lg-6" style="text-align:left;">
                    <p style="margin-left:-10px;font-weight:bold;">Gambar</p>
                  </div>
                  <div class="col-lg-6" style="color:#CACACA;text-align:right;">
                  </div>
                </div>
                <div class="row">
                  <input type="file" id="img" class="form-control"
                  style="background:#EFEFEF;width:100%;" name="img" value=""  accept="image/jpg, image/jpeg, image/png">
                </div>
              </div>

            </div>
            <br>
            <div class="row">
              <div class="col-lg-6" style="width:49%;">
                <div class="row">
                  <div class="col-lg-6" style="text-align:left;">
                    <p style="margin-left:-10px;font-weight:bold;">Url Website Sponsor</p>
                  </div>
                  <div class="col-lg-6" style="color:#CACACA;text-align:right;">
                    <p>*Required</p>
                  </div>
                </div>
                <div class="row">
                  <input type="text" id="title" required="required" class="form-control"
                  style="background:#EFEFEF;width:100%;" name="url" value="<?php echo $data->url ?>"
                   maxlength="100" >
                </div>
              </div>
            </div>
            <br>
          </div>
      </div>
    </div>
  <div class="modal-footer">
    <button type="submit" class="btn btn-default" style="background: #00B4CF;color:#fff;"
    id="add_jpp">EDIT DATA</button>
  </div>
</form>
