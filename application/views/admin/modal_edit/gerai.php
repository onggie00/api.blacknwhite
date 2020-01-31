<div class="modal-header" style="padding:15px;">
  <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: #00B4CF;opacity:1;"><i class="fa fa-close fa-2x"></i>
  </button>
  <div class="col-lg-5" style="border-bottom: 4px solid #00B4CF;font-size:16px;">
    <p>EDIT DATA</p>
  </div>
</div>
<form class="form-horizontal form-label-left" action="<?php echo site_url('admin/gerai/update_data') ?>" method="post" enctype="multipart/form-data">
  <input type="hidden" name="id_data" value="<?php echo $data->id_gerai ?>">
  <div class="modal-body" style="font-size:12px;">
      <div class="row">
                <div class="col-lg-12">
                  <div class="row">
                    <div class="col-md col-xs" >
                      <div class="row">
                        <div class="col-md col-xs" style="text-align:left;">
                          <p style="margin-left:-10px;font-weight:bold;">Nama Gerai</p>
                        </div>
                        <div class="col-md col-xs" style="color:#CACACA;text-align:right;">
                          <p>*Required</p>
                        </div>
                      </div>
                      <div class="row">
                        <input type="text" id="nama_gerai" required="required" class="form-control"
                        style="background:#EFEFEF;width:100%;" name="nama_gerai" value="<?php echo $data->nama_gerai; ?>"
                        placeholder="Gerai RSB" maxlength="100" >
                      </div>
                    </div>
                    <br>
                  </div>
                  <br>
                  <div class="row">
                    <div class="col-md col-xs" >
                        <div class="row">
                          <div class="col-md col-xs" style="text-align:left;">
                            <p style="margin-left:-10px;font-weight:bold;">Longitude</p>
                          </div>
                          <div class="col-md col-xs" style="color:#CACACA;text-align:right;">
                            <p>*Required</p>
                          </div>
                        </div>
                        <div class="row">
                          <input type="text" id="lng" required="required" class="form-control"
                          style="background:#EFEFEF;width:100%;" name="lng" value="<?php echo $data->lng; ?>"
                          placeholder="100.1000000" maxlength="100" >
                         </div>
                    </div>
                    <div class="col-md col-xs" >
                        <div class="row">
                          <div class="col-md col-xs" style="text-align:left;">
                            <p style="margin-left:-10px;font-weight:bold;">Latitude</p>
                          </div>
                          <div class="col-md col-xs" style="color:#CACACA;text-align:right;">
                            <p>*Required</p>
                          </div>
                        </div>
                        <div class="row">
                          <input type="text" id="ltd" required="required" class="form-control"
                          style="background:#EFEFEF;width:100%;" name="ltd" value="<?php echo $data->ltd; ?>"
                          placeholder="100.1000000" maxlength="100" >
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
