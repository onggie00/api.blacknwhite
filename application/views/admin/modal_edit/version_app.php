<div class="modal-header" style="padding:15px;">
  <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: #00B4CF;opacity:1;"><i class="fa fa-close fa-2x"></i>
  </button>
  <div class="col-lg-5" style="border-bottom: 4px solid #00B4CF;font-size:16px;">
    <p>EDIT DATA</p>
  </div>
</div>
<form class="form-horizontal form-label-left" action="<?php echo site_url('admin/version_app/update_data') ?>" method="post" enctype="multipart/form-data">
  <input type="hidden" name="id_data" value="<?php echo $data->id_version_app ?>">
  <div class="modal-body" style="font-size:12px;">
      <div class="row">
                  <div class="row">
                    <div class="col-md col-xs" >
                        <div class="row" style="margin-left:2%;">
                          <div class="col-md col-xs" style="text-align:left;">
                            <p style="margin-left:-10px;font-weight:bold;">Android Version</p>
                          </div>
                          <div class="col-md col-xs" style="color:#CACACA;text-align:right;">
                            
                          </div>
                        </div>
                        <div class="row">
                          <input type="text" id="android" class="form-control"
                          style="background:#EFEFEF;width:90%;margin-left:5%;" name="android" value="<?php echo $data->android; ?>"
                          placeholder="Version" maxlength="100" >
                         </div>
                    </div>
                    <div class="col-md col-xs" >
                        <div class="row" style="margin-left:2%;">
                          <div class="col-md col-xs" style="text-align:left;">
                            <p style="margin-left:-10px;font-weight:bold;">Ios Version</p>
                          </div>
                          <div class="col-md col-xs" style="color:#CACACA;text-align:right;">
                            
                          </div>
                        </div>
                        <div class="row">
                          <input type="text" id="ios" class="form-control"
                          style="background:#EFEFEF;width:90%;margin-left:5%;" name="ios" value="<?php echo $data->ios; ?>"
                          placeholder="Version" maxlength="100" >
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
