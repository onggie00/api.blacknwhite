
<div class="modal" id="modal_add_data" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content Roboto" style="color: #000;border-radius: 0px;">
      <div class="modal-header" style="padding:15px;">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: #00B4CF;opacity:1;"><i class="fa fa-close fa-2x"></i>
        </button>
        <div class="col-lg-5" style="border-bottom: 4px solid #00B4CF;font-size:16px;">
          <p>TAMBAH DATA</p>
        </div>
      </div>
      <form class="form-horizontal form-label-left" action="<?php echo site_url('admin/myadmin/insert_data') ?>" method="post">
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
                      <p>*Required</p>
                    </div>
                  </div>
                  <div class="row">
                    <input type="text" id="username" required="required" class="form-control"
                    style="background:#EFEFEF;width:100%;" name="username" value=""
                    placeholder="admin_albana"  autocomplete="off">
                  </div>
                </div>
                <div class="col-md col-xs" >
                  <div class="row">
                    <div class="col-md col-xs" style="text-align:left;">
                      <p style="margin-left:-10px;font-weight:bold;">Password</p>
                    </div>
                    <div class="col-md col-xs" style="color:#CACACA;text-align:right;">
                      <p>*Required</p>
                    </div>
                  </div>
                  <div class="row">
                    <input type="password" id="password" required="required" class="form-control"
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
                      <p>*Required</p>
                    </div>
                  </div>
                  <div class="row">
                    <input type="password" id="password1" required="required" class="form-control"
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
                      <p>*Required</p>
                    </div>
                  </div>
                  <div class="row">
                    <select required="required" class="form-control"
                    style="background:#EFEFEF;width:100%;" name="level">
                      <option value="">Pilih Level</option>
                     <?php for ($i=1; $i <= 4; $i++) { ?>
                       <option value="<?php echo $i ?>">Level <?php echo $i ?></option>
                     <?php } ?>
                    </select>
                  </div>
                </div>

              </div>
              <br>

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
