<div class="modal-header" style="padding:15px;">
  <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: #00B4CF;opacity:1;"><i class="fa fa-close fa-2x"></i>
  </button>
  <div class="col-lg-5" style="border-bottom: 4px solid #00B4CF;font-size:16px;">
    <p>EDIT DATA</p>
  </div>
</div>
<form class="form-horizontal form-label-left" action="<?php echo site_url('admin/user/update_data') ?>" method="post" enctype="multipart/form-data">
  <input type="hidden" name="id_data" value="<?php echo $data->id_user ?>">
  <div class="modal-body" style="font-size:12px;">
    <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-md col-xs" >
              <div class="row">
                <div class="col-md col-xs" style="text-align:left;">
                  <p style="margin-left:-10px;font-weight:bold;">Nama Depan</p>
                </div>
                <div class="col-md col-xs" style="color:#CACACA;text-align:right;">
                  
                </div>
              </div>
              <div class="row">
                <input type="text" id="nama_depan" class="form-control"
                style="background:#EFEFEF;width:100%;" name="nama_depan" value="<?php echo $data->nama_depan ?>"
                placeholder="Ahmad" maxlength="100" >
              </div>
            </div>
            <div class="col-md col-xs" >
              <div class="row">
                <div class="col-md col-xs" style="text-align:left;">
                  <p style="margin-left:-10px;font-weight:bold;">Nama Belakang</p>
                </div>
                <div class="col-md col-xs" style="color:#CACACA;text-align:right;">
                  
                </div>
              </div>
              <div class="row">
                <input type="text" id="nama_belakang" class="form-control"
                style="background:#EFEFEF;width:100%;" name="nama_belakang" value="<?php echo $data->nama_belakang ?>"
                placeholder="Syauqi Albana" maxlength="100" >
              </div>
            </div>
          </div>
          <br>
          <div class="row">
            <div class="col-md col-xs" >
              <div class="row">
                <div class="col-md col-xs" style="text-align:left;">
                  <p style="margin-left:-10px;font-weight:bold;">Status Aktif</p>
                </div>
                <div class="col-md col-xs" style="color:#CACACA;text-align:right;">
                  
                </div>
              </div>
              <div class="row">
                <select class="form-control"
                style="background:#EFEFEF;width:100%;" name="status_aktif" id="status_aktif">
                  <option value="">Pilih Status</option>
                  <option value="1" <?php if($data->status_aktif==1) echo "selected" ?>>Aktif</option>
                  <option value="0" <?php if($data->status_aktif==0) echo "selected" ?>>Tidak Aktif</option>
                </select>
              </div>
            </div>
            <div class="col-md col-xs" >
              <div class="row">
                <div class="col-md col-xs" style="text-align:left;">
                  <p style="margin-left:-10px;font-weight:bold;">Nomer Handphone</p>
                </div>
                <div class="col-md col-xs" style="color:#CACACA;text-align:right;">
                  
                </div>
              </div>
              <div class="row">
                <input type="number" id="nowa" class="form-control"
                style="background:#EFEFEF;width:100%;" name="phone" value="<?php echo $data->phone ?>"
                placeholder="082255427915"   maxlength="20">
              </div>
            </div>
            
          </div>
          <br>
          <div class="row">
            <div class="col-md col-xs" >
              <div class="row">
                <div class="col-md col-xs" style="text-align:left;">
                  <p style="margin-left:-10px;font-weight:bold;">Email</p>
                </div>
                <div class="col-md col-xs" style="color:#CACACA;text-align:right;">
                  
                </div>
              </div>
              <div class="row">
                <input type="email" id="email" class="form-control"
                style="background:#EFEFEF;width:100%;" name="email" value="<?php echo $data->email ?>"
                placeholder="asyauqialbana@gmail.com">
              </div>
            </div>
            <div class="col-md col-xs" >
              <div class="row">
                <div class="col-md col-xs" style="text-align:left;">
                  <p style="margin-left:-10px;font-weight:bold;">Jenis Kelamin</p>
                </div>
                <div class="col-md col-xs" style="color:#CACACA;text-align:right;">
                  
                </div>
              </div>
              <div class="row">
                <select class="form-control"
                style="background:#EFEFEF;width:100%;" name="jenis_kelamin" id="jenis_kelamin">
                  <option value="0"
                  <?php if ($data->jenis_kelamin==0)echo "selected"; ?>>Laki - Laki</option>
                  <option value="1"
                  <?php if ($data->jenis_kelamin!=0)echo "selected"; ?>>Perempuan</option>
                </select>
              </div>
            </div>
          </div>
          <br>
          <div class="row">
            <div class="col-md col-xs" >
              <div class="row">
                <div class="col-md col-xs" style="text-align:left;">
                  <p style="margin-left:-10px;font-weight:bold;">Tanggal Lahir</p>
                </div>
                <div class="col-md col-xs" style="color:#CACACA;text-align:right;">
                  
                </div>
              </div>
              <div class="row">
                <input type="date" id="" class="form-control"
                style="background:#EFEFEF;width:100%;" name="tanggal_lahir" value="<?php echo $data->tanggal_lahir ?>"
                >
              </div>
            </div>
            
          </div>
          <br>
          
          <div class="row">
            <div class="col-md col-xs" >
              <div class="row">
                <div class="col-md col-xs" style="text-align:left;">
                  <p style="margin-left:-10px;font-weight:bold;">Password</p>
                </div>
                <div class="col-md col-xs" style="color:#CACACA;text-align:right;">
                </div>
              </div>
              <div class="row">
                <input type="password"class="form-control"
                style="background:#EFEFEF;width:100%;" name="password" value=""
                 maxlength="255" >
              </div>
            </div>
            <div class="col-md col-xs" >
                <div class="row">
                  <div class="col-md col-xs" style="text-align:left;">
                    <p style="margin-left:-10px;font-weight:bold;">Konfirmasi Password </p>
                  </div>
                  <div class="col-md col-xs" style="color:#CACACA;text-align:right;">
                  </div>
                </div>
                <div class="row">
                  <input type="password"  class="form-control"
                  style="background:#EFEFEF;width:100%;" name="password1" value=""
                   maxlength="255">
                </div>
            </div>
          </div>
          <br>
          <div class="row">
            <div class="col-md col-xs" >
                  <div class="row">
                    <div class="col-md col-xs" style="text-align:left;">
                      <p style="margin-left:-10px;font-weight:bold;">Paket Member</p>
                    </div>
                    <div class="col-md col-xs" style="color:#CACACA;text-align:right;">
                      
                    </div>
                  </div>
                  <div class="row">
                    <select class="form-control"
                    style="background:#EFEFEF;width:100%;" name="id_paket" id="id_paket">
                      <option value="">Pilih Paket RSB</option>
                      <?php foreach ($this->mymodel->getall('paket') as $key => $value): ?>
                        <?php 
                        if ($value->id_paket==$this->mymodel->getbywhere('user','id_user',$data->id_user,'row')->id_paket) {
                          echo "<option selected='selected' value='".$value->id_paket."'>".$value->nama_paket." (".$value->periode." Bulan - Rp. ".number_format($value->harga_paket,0,'.','.').")</option>";
                        }else{
                         ?>
                        <option value="<?php echo $value->id_paket ?>"><?php echo $value->nama_paket.' ('.$value->periode.' Bulan - Rp. '.number_format($value->harga_paket,0,'.','.').' )'?></option>
                      <?php } endforeach; ?>
                    </select>
                  </div>
                </div>
            <div class="col-md col-xs" >
              <div class="row">
                <div class="col-md col-xs" style="text-align:left;">
                  <p style="margin-left:-10px;font-weight:bold;">Provinsi</p>
                </div>
                <div class="col-md col-xs" style="color:#CACACA;text-align:right;">
                  
                </div>
              </div>
              <div class="row">
                <select class="form-control"
                style="background:#EFEFEF;width:100%;" name="id_prov1" id="id_prov1">
                  <option value="">Pilih Provinsi</option>
                  <?php foreach ($this->mymodel->getall('provinsi') as $key => $value): ?>
                        <option value="<?php echo $value->id_prov ?>"
                          <?php if ($value->id_prov==$data->id_prov): ?>
                            selected
                          <?php endif; ?>
                          ><?php echo $value->nama ?></option>
                  <?php endforeach; ?>
                </select>
              </div>
            </div>

          </div>
          <br>
          <div class="row">
            <div class="col-md col-xs" >
              <div class="row">
                <div class="col-md col-xs" style="text-align:left;">
                  <p style="margin-left:-10px;font-weight:bold;">Kabupaten</p>
                </div>
                <div class="col-md col-xs" style="color:#CACACA;text-align:right;">
                  
                </div>
              </div>
              <div class="row">
                <select class="form-control"
                style="background:#EFEFEF;width:100%;" name="id_kab1" id="id_kab1">
                  <option value="">Pilih Kabupaten</option>
                  <?php foreach ($this->mymodel->getbywhere('kabupaten','id_prov',$data->id_prov) as $key => $value): ?>
                        <option value="<?php echo $value->id_kab ?>"
                          <?php if ($value->id_kab==$data->id_kab): ?>
                            selected
                          <?php endif; ?>
                          ><?php echo ucwords(strtolower($value->nama)) ?></option>
                  <?php endforeach; ?>
                </select>
              </div>
            </div>
            <div class="col-md col-xs" >
              <div class="row">
                <div class="col-md col-xs" style="text-align:left;">
                  <p style="margin-left:-10px;font-weight:bold;">Kecamatan</p>
                </div>
                <div class="col-md col-xs" style="color:#CACACA;text-align:right;">
                  
                </div>
              </div>
              <div class="row">
                <select class="form-control"
                style="background:#EFEFEF;width:100%;" name="id_kec1" id="id_kec1">
                  <option value="">Pilih Kecamatan</option>
                  <?php foreach ($this->mymodel->getbywhere('kecamatan','id_kab',$data->id_kab) as $key => $value): ?>
                        <option value="<?php echo $value->id_kec ?>"
                          <?php if ($value->id_kec==$data->id_kec): ?>
                            selected
                          <?php endif; ?>
                          ><?php echo ucwords(strtolower($value->nama)) ?></option>
                  <?php endforeach; ?>
                </select>
              </div>
            </div>

          </div>

          <br>
          <div class="row">
            <div class="col-md col-xs" >
              <div class="row">
                <div class="col-md col-xs" style="text-align:left;">
                  <p style="margin-left:-10px;font-weight:bold;">Jalan</p>
                </div>
                <div class="col-md col-xs" style="color:#CACACA;text-align:right;">
                  
                </div>
              </div>
              <div class="row">
                <input type="text" class="form-control"
                style="background:#EFEFEF;width:100%;" name="jalan" value="<?php echo $data->jalan ?>"
                 maxlength="255">
              </div>
            </div>
            <div class="col-md col-xs" >
              <div class="row">
                <div class="col-md col-xs" style="text-align:left;">
                  <p style="margin-left:-10px;font-weight:bold;">Barcode</p>
                </div>
                <div class="col-md col-xs" style="color:#CACACA;text-align:right;">
                  
                </div>
              </div>
              <div class="row">
                <?php if (empty($data->barcode)): ?>
                  <select class="form-control"
                  style="background:#EFEFEF;width:100%;" name="barcode" id="barcode">
                    <option value="">Pilih Barcode</option>
                    <?php foreach ($this->mymodel->withquery('SELECT * FROM `barcode` WHERE code not in (SELECT barcode from user) limit 0,10','result') as $key => $value): ?>
                          <option value="<?php echo $value->code ?>"><?php echo $value->code ?></option>
                    <?php endforeach; ?>
                  </select>
                  <?php else: ?>

                    <input type="text" class="form-control" readonly
                    style="background:#EFEFEF;width:100%;" name="barcode" value="<?php echo $data->barcode ?>"
                     maxlength="255">
                <?php endif; ?>
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
<script type="text/javascript">
$("#id_prov1").change(function(){
    $.post("<?php echo site_url('admin/utils/ambilkab') ?>",{id_prov:$("#id_prov1").val()},function(msg){
      $("#id_kab1").html(msg);
      $("#id_kec1").html('<option value="">Pilih Kabupaten</option>');
    });

 });
 $("#id_kab1").change(function(){
     $.post("<?php echo site_url('admin/utils/ambilkec') ?>",{id_kab:$("#id_kab1").val()},function(msg){
       $("#id_kec1").html(msg);
     });
  });
</script>
