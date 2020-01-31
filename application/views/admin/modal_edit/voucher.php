<div class="modal-header" style="padding:15px;">
  <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: #00B4CF;opacity:1;"><i class="fa fa-close fa-2x"></i>
  </button>
  <div class="col-lg-5" style="border-bottom: 4px solid #00B4CF;font-size:16px;">
    <p>EDIT DATA</p>
  </div>
</div>
<form class="form-horizontal form-label-left" action="<?php echo site_url('admin/voucher/update_data') ?>" method="post" enctype="multipart/form-data">
      <input type="hidden" name="id_data" value="<?php echo $data->id_voucher ?>">
        <div class="modal-body" style="font-size:12px">
            <div class="row">
                <div class="col-lg-12">
                  <div class="row">
                    <div class="col-md col-xs" >
                      <div class="row">
                        <div class="col-md col-xs" style="text-align:left;">
                          <p style="margin-left:-10px;font-weight:bold;">Nama Merchant</p>
                        </div>
                        <div class="col-md col-xs" style="color:#CACACA;text-align:right;">
                          
                        </div>
                      </div>
                      <div class="row">
                        <select class="form-control"
                        style="background:#EFEFEF;width:100%;"  name="id_merchant">
                        <?php foreach ($this->mymodel->getall('merchant') as $key => $value): ?>
                        <?php if ($value->id_merchant==$this->mymodel->getbywhere('voucher','id_merchant',$value->id_merchant,'row')->id_merchant) {
                          echo "<option selected='selected' value='".$value->id_merchant."''>".$value->merchant_name."</option>";
                        }else { ?>
                          <option value="<?php echo $value->id_merchant ?>"><?php echo $value->merchant_name ?></option>
                        <?php } endforeach; ?>
                        </select>

                    </div>
                    </div>
                  </div>
                  <br>
                  <div class="row">
                    <div class="col-md col-xs" >
                      <div class="row">
                        <div class="col-md col-xs" style="text-align:left;">
                          <p style="margin-left:-10px;font-weight:bold;">Batas Waktu</p>
                        </div>
                        <div class="col-md col-xs" style="color:#CACACA;text-align:right;">
                          
                        </div>
                      </div>
                      <div class="row">
                        <input type="text" id="batas_waktu" class="form-control"
                        style="background:#EFEFEF;width:100%;" name="batas_waktu" value="<?php echo $data->batas_waktu ?>"
                        placeholder="01 Januari 2000" maxlength="100" >
                      </div>
                    </div>
                    <div class="col-md col-xs" >
                      <div class="row">
                        <div class="col-md col-xs" style="text-align:left;">
                          <p style="margin-left:-10px;font-weight:bold;">Gambar</p>
                        </div>
                        <div class="col-md col-xs" style="color:#CACACA;text-align:right;">
                        </div>
                      </div>
                      <div class="row">
                        <input type="file" id="img" class="form-control" required
                        style="background:#EFEFEF;width:100%;height:100%;" name="img" value=""  accept="image/jpg, image/jpeg, image/png">
                      </div>
                    </div>
                  </div>
                  
                  <br>
                  <div class="row">
                    <div class="col-md col-xs" style="width:99%;">
                      <div class="row">
                        <div class="col-md col-xs" style="text-align:left;">
                          <p style="margin-left:-10px;font-weight:bold;">Deskripsi Voucher</p>
                        </div>
                        <div class="col-md col-xs" style="color:#CACACA;text-align:right;">
                          
                        </div>
                      </div>
                      <div class="row">
                        <textarea name="deskripsi_diskon" class="form-control" required
                        style="background:#EFEFEF;width:100%;" rows="8" cols="80"><?php echo $data->deskripsi_diskon;  ?></textarea>
                      </div>
                    </div>

                  </div>
                  <br>
                  <div class="row">
                    <div class="col-md col-xs" style="width:99%;">
                      <div class="row">
                        <div class="col-md col-xs" style="text-align:left;">
                          <p style="margin-left:-10px;font-weight:bold;">Syarat &amp; Ketentuan</p>
                        </div>
                        <div class="col-md col-xs" style="color:#CACACA;text-align:right;">
                          
                        </div>
                      </div>
                      <div class="row">
                        <textarea name="syarat_ketentuan" class="form-control" required
                        style="background:#EFEFEF;width:100%;" rows="8" cols="80"><?php echo $data->syarat_ketentuan; ?></textarea>
                      </div>
                    </div>
                  </div>
                  <br>
                  <div class="row">
                    <div class="col-md col-xs" style="width:99%;">
                      <div class="row">
                        <div class="col-md col-xs" style="text-align:left;">
                          <p style="margin-left:-10px;font-weight:bold;">Cara Pemakaian Voucher</p>
                        </div>
                        <div class="col-md col-xs" style="color:#CACACA;text-align:right;">
                          
                        </div>
                      </div>
                      <div class="row">
                        <textarea name="cara_pakai" class="form-control" required
                        style="background:#EFEFEF;width:100%;" rows="8" cols="80"><?php echo $data->cara_pakai; ?></textarea>
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


