<div class="modal-header" style="padding:15px;">
  <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: #00B4CF;opacity:1;"><i class="fa fa-close fa-2x"></i>
  </button>
  <div class="col-lg-5" style="border-bottom: 4px solid #00B4CF;font-size:16px;">
    <p>EDIT DATA</p>
  </div>
</div>
<form class="form-horizontal form-label-left" action="<?php echo site_url('admin/myadmin/update_data') ?>" method="post">
  <input type="hidden" name="id_data" value="<?php echo $data->id_admin ?>">
<div class="modal-body" style="font-size:12px;">
  <div class="row">
      <div class="col-lg-12">
        <div class="row">
          <div class="col-md col-xs" >
            <div class="row">
              <div class="col-md col-xs" style="text-align:left;">
                <p style="margin-left:-10px;font-weight:bold;">Username</p>
              </div>
              <div class="col-md col-xs" style="color:#CACACA;text-align:right;">
                
              </div>
            </div>
            <div class="row">
              <input type="text" id="username" class="form-control"
              style="background:#EFEFEF;width:100%;" name="username" value="<?php echo $data->username ?>"
              placeholder="admin_albana"  autocomplete="off" readonly>
            </div>
          </div>
          <div class="col-md col-xs" >
            <div class="row">
              <div class="col-md col-xs" style="text-align:left;">
                <p style="margin-left:-10px;font-weight:bold;">Password</p>
              </div>
              <div class="col-md col-xs" style="color:#CACACA;text-align:right;">
                
              </div>
            </div>
            <div class="row">
              <input type="password"  class="form-control"
              style="background:#EFEFEF;width:100%;" name="password" value=""
              placeholder="" autocomplete="off">
            </div>
          </div>

        </div>
        <br>
        <div class="row">
          <div class="col-md col-xs" >
            <div class="row">
              <div class="col-md col-xs" style="text-align:left;">
                <p style="margin-left:-10px;font-weight:bold;">Konfirmasi Password</p>
              </div>
              <div class="col-md col-xs" style="color:#CACACA;text-align:right;">
                
              </div>
            </div>
            <div class="row">
              <input type="password"  class="form-control"
              style="background:#EFEFEF;width:100%;" name="password1" value=""
              placeholder="" autocomplete="off">
            </div>
          </div>
          <div class="col-md col-xs" >
            <div class="row">
              <div class="col-md col-xs" style="text-align:left;">
                <p style="margin-left:-10px;font-weight:bold;">Level Admin</p>
              </div>
              <div class="col-md col-xs" style="color:#CACACA;text-align:right;">
                
              </div>
            </div>
            <div class="row">

              <select  class="form-control"
              style="background:#EFEFEF;width:100%;" name="level">
                <option value="">Pilih Level</option>
               <?php for ($i=1; $i <= 3; $i++) { ?>
                 <option value="<?php echo $i ?>" <?php if($data->level==$i) echo "selected" ?>>Level <?php echo $i ?></option>
               <?php } ?>
              </select>
            </div>
          </div>

        </div>
      </div>
  </div>
</div>
<div class="modal-footer">
  <button type="submit" class="btn btn-default" style="background: #00B4CF;color:#fff;"
  id="add_jpp">EDIT DATA</button>
</div>
</form>
