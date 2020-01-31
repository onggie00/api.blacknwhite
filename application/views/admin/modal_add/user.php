<div class="modal" id="modal_add_data" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content Roboto" style="color: #000;border-radius: 0px;margin-top: 10%;">
      <div class="modal-header" style="padding:15px;">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: #00B4CF;opacity:1;"><i class="fa fa-close fa-2x"></i>
        </button>
        <div class="col-lg-5" style="border-bottom: 4px solid #00B4CF;font-size:16px;">
          <p>TAMBAH DATA</p>
        </div>
      </div>
      <form class="form-horizontal form-label-left" action="<?php echo site_url('admin/user/insert_data') ?>" method="post" enctype="multipart/form-data">
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
                      <p>*Required</p>
                    </div>
                  </div>
                  <div class="row">
                    <input type="text" id="nama_depan" required="required" class="form-control"
                    style="background:#EFEFEF;width:100%;" name="nama_depan" value=""
                    placeholder="Ahmad" maxlength="100" >
                  </div>
                </div>
                <div class="col-md col-xs" >
                  <div class="row">
                    <div class="col-md col-xs" style="text-align:left;">
                      <p style="margin-left:-10px;font-weight:bold;">Nama Belakang</p>
                    </div>
                    <div class="col-md col-xs" style="color:#CACACA;text-align:right;">
                      <p>*Required</p>
                    </div>
                  </div>
                  <div class="row">
                    <input type="text" id="nama_belakang" required="required" class="form-control"
                    style="background:#EFEFEF;width:100%;" name="nama_belakang" value=""
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
                      <p>*Required</p>
                    </div>
                  </div>
                  <div class="row">
                    <select required="required" class="form-control"
                    style="background:#EFEFEF;width:100%;" name="status_aktif" id="status_aktif">
                      <option value="">Pilih Status</option>
                      <option value="1">Aktif</option>
                      <option value="0">Tidak Aktif</option>
                    </select>
                  </div>
                </div>
                <div class="col-md col-xs" >
                  <div class="row">
                    <div class="col-md col-xs" style="text-align:left;">
                      <p style="margin-left:-10px;font-weight:bold;">Nomer Handphone</p>
                    </div>
                    <div class="col-md col-xs" style="color:#CACACA;text-align:right;">
                      <p>*Required</p>
                    </div>
                  </div>
                  <div class="row">
                    <input type="number" id="nowa" required="required" class="form-control"
                    style="background:#EFEFEF;width:100%;" name="phone" value=""
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
                      <p>*Required</p>
                    </div>
                  </div>
                  <div class="row">
                    <input type="email" id="email" required="required" class="form-control"
                    style="background:#EFEFEF;width:100%;" name="email" value=""
                    placeholder="asyauqialbana@gmail.com" >
                  </div>
                </div>
                <div class="col-md col-xs" >
                  <div class="row">
                    <div class="col-md col-xs" style="text-align:left;">
                      <p style="margin-left:-10px;font-weight:bold;">Jenis Kelamin</p>
                    </div>
                    <div class="col-md col-xs" style="color:#CACACA;text-align:right;">
                      <p>*Required</p>
                    </div>
                  </div>
                  <div class="row">
                    <select required="required" class="form-control"
                    style="background:#EFEFEF;width:100%;" name="jenis_kelamin" id="jenis_kelamin">
                      <option value="">Pilih Jenis Kelamin</option>
                      <option value="0">Laki - Laki</option>
                      <option value="1">Perempuan</option>
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
                      <p>*Required</p>
                    </div>
                  </div>
                  <div class="row">
                    <input type="date" id="" required="required" class="form-control"
                    style="background:#EFEFEF;width:100%;" name="tanggal_lahir" value="">
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
                      <p>*Required</p>
                    </div>
                  </div>
                  <div class="row">
                    <input type="password" required="required" class="form-control"
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
                        <p>*Required</p>
                      </div>
                    </div>
                    <div class="row">
                      <input type="password" required="required" class="form-control"
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
                      <p>*Required</p>
                    </div>
                  </div>
                  <div class="row">
                    <select required="required" class="form-control"
                    style="background:#EFEFEF;width:100%;" name="id_paket" id="id_paket">
                      <option value="">Pilih Paket RSB</option>
                      <?php foreach ($this->mymodel->getall('paket') as $key => $value): ?>
                            <option value="<?php echo $value->id_paket ?>"><?php echo $value->nama_paket.' ('.$value->periode.' Bulan - Rp. '.number_format($value->harga_paket,0,'.','.').' )'?></option>
                      <?php endforeach; ?>
                    </select>
                  </div>
                </div>
                <div class="col-md col-xs" >
                  <div class="row">
                    <div class="col-md col-xs" style="text-align:left;">
                      <p style="margin-left:-10px;font-weight:bold;">Provinsi</p>
                    </div>
                    <div class="col-md col-xs" style="color:#CACACA;text-align:right;">
                      <p>*Required</p>
                    </div>
                  </div>
                  <div class="row">
                    <select required="required" class="form-control"
                    style="background:#EFEFEF;width:100%;" name="id_prov" id="id_prov">
                      <option value="">Pilih Provinsi</option>
                      <?php foreach ($this->mymodel->getall('provinsi') as $key => $value): ?>
                            <option value="<?php echo $value->id_prov ?>"><?php echo $value->nama ?></option>
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
                      <p>*Required</p>
                    </div>
                  </div>
                  <div class="row">
                    <select required="required" class="form-control"
                    style="background:#EFEFEF;width:100%;" name="id_kab" id="id_kab">
                      <option value="">Pilih Provinsi</option>
                    </select>
                  </div>
                </div>
                <div class="col-md col-xs" >
                  <div class="row">
                    <div class="col-md col-xs" style="text-align:left;">
                      <p style="margin-left:-10px;font-weight:bold;">Kecamatan</p>
                    </div>
                    <div class="col-md col-xs" style="color:#CACACA;text-align:right;">
                      <p>*Required</p>
                    </div>
                  </div>
                  <div class="row">
                    <select required="required" class="form-control"
                    style="background:#EFEFEF;width:100%;" name="id_kec" id="id_kec">
                      <option value="">Pilih Kabupaten</option>
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
                      <p>*Required</p>
                    </div>
                  </div>
                  <div class="row">
                    <input type="text" required="required" class="form-control"
                    style="background:#EFEFEF;width:100%;" name="jalan" value=""
                     maxlength="255">
                  </div>
                </div>
                <div class="col-md col-xs" >
                  <div class="row">
                    <div class="col-md col-xs" style="text-align:left;">
                      <p style="margin-left:-10px;font-weight:bold;">Barcode</p>
                    </div>
                    <div class="col-md col-xs" style="color:#CACACA;text-align:right;">
                      <p>*Required</p>
                    </div>
                  </div>
                  <div class="row">
                    <select required="required" class="form-control"
                    style="background:#EFEFEF;width:100%;" name="barcode" id="barcode">
                      <option value="">Pilih Barcode</option>
                      <?php foreach ($this->mymodel->withquery('SELECT * FROM `barcode` WHERE code not in (SELECT barcode from user) limit 0,10','result') as $key => $value): ?>
                            <option value="<?php echo $value->code ?>"><?php echo $value->code ?></option>
                      <?php endforeach; ?>
                    </select>
                  </div>
                </div>

              </div>
            </div>
        </div>
      </div>
        <div class="modal-footer text-right">
          <button type="submit" class="btn btn-default btn-lg" style="background: #00B4CF;color:#fff;"
          id="add_jpp">TAMBAH DATA</button>
        </div>
      </form>

    </div>
  </div>
</div>
