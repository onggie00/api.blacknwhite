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
      <form class="form-horizontal form-label-left" action="<?php echo site_url('admin/event/insert_data') ?>" method="post" enctype="multipart/form-data">
        <div class="modal-body" style="font-size:12px;">
            <div class="row">
                <div class="col-lg-12">
                  <div class="row">
                    <div class="col-md col-xs" >
                      <div class="row">
                        <div class="col-md col-xs" style="text-align:left;">
                          <p style="margin-left:-10px;font-weight:bold;">Nama event</p>
                        </div>
                        <div class="col-md col-xs" style="color:#CACACA;text-align:right;">
                          <p>*Required</p>
                        </div>
                      </div>
                      <div class="row">
                        <input type="text" id="title" required="required" class="form-control"
                        style="background:#EFEFEF;width:100%;" name="title" value=""
                        placeholder="Event 1" maxlength="100" >
                      </div>
                    </div>
                    <div class="col-md col-xs" >
                      <div class="row">
                        <div class="col-md col-xs" style="text-align:left;">
                          <p style="margin-left:-10px;font-weight:bold;">Foto Event</p>
                        </div>
                        <div class="col-md col-xs" style="color:#CACACA;text-align:right;">
                        </div>
                      </div>
                      <div class="row">
                        <input type="file" id="img" class="form-control" required
                        style="background:#EFEFEF;width:100%;" name="img" value=""  accept="image/jpg, image/jpeg, image/png">
                      </div>
                    </div>

                  </div>
                  <br>
                  <div class="row">
                    <div class="col-md col-xs" >
                      <div class="row">
                        <div class="col-md col-xs" style="text-align:left;">
                          <p style="margin-left:-10px;font-weight:bold;">Zona Waktu</p>
                        </div>
                        <div class="col-md col-xs" style="color:#CACACA;text-align:right;">
                        </div>
                      </div>
                      <div class="row">
                        <select class="form-control" required
                        style="background:#EFEFEF;width:100%;" name="date_zone">
                          <option value="">Pilih Zona Waktu</option>
                          <option value="WIB">WIB</option>
                          <option value="WITA">WITA</option>
                          <option value="WIT">WIT</option>
                        </select>
                      </div>
                    </div>

                      <div class="col-md col-xs" >
                        <div class="row">
                          <div class="col-md col-xs" style="text-align:left;">
                            <p style="margin-left:-10px;font-weight:bold;">Tanggal Mulai</p>
                          </div>
                          <div class="col-md col-xs" style="color:#CACACA;text-align:right;">
                            <p>*Required</p>
                          </div>
                        </div>
                        <div class="row">
                          <input type="datetime-local" id="start_event" required="required" class="form-control"
                          style="background:#EFEFEF;width:100%;" name="start_event" value="">
                        </div>
                      </div>
                  </div>
                  <br>
                  <div class="row">
                    <div class="col-md col-xs" >
                      <div class="row">
                        <div class="col-md col-xs" style="text-align:left;">
                          <p style="margin-left:-10px;font-weight:bold;">Tanggal Selesai</p>
                        </div>
                        <div class="col-md col-xs" style="color:#CACACA;text-align:right;">
                        </div>
                      </div>
                      <div class="row">
                        <input type="datetime-local" id="end_event" class="form-control" required
                        style="background:#EFEFEF;width:100%;" name="end_event" value="">
                      </div>
                    </div>
                    <div class="col-md col-xs" >
                      <div class="row">
                        <div class="col-md col-xs" style="text-align:left;">
                          <p style="margin-left:-10px;font-weight:bold;">Lokasi event</p>
                        </div>
                        <div class="col-md col-xs" style="color:#CACACA;text-align:right;">
                          <p>*Required</p>
                        </div>
                      </div>
                      <div class="row">
                        <input type="text" id="pac-input" required="required" class="form-control"
                        style="background:#EFEFEF;width:100%;" name="location_event" value=""
                        placeholder="Pantai Losari, Makasar" >
                      </div>
                    </div>
                  </div>
                  <br>
                  <div class="row">
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
                  </div>
                  <br>
                  <div class="row">
                    <div class="col-md col-xs" style="width:99%;">
                      <div class="row">
                        <div class="col-md col-xs" style="text-align:left;">
                          <p style="margin-left:-10px;font-weight:bold;">Ember Maps</p>
                        </div>
                        <div class="col-md col-xs" style="color:#CACACA;text-align:right;">
                          <p>*Required</p>
                        </div>
                      </div>
                      <div class="row">
                        <textarea name="embed_maps" class="form-control" required
                        placeholder='<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3973.751376723794!2d119.40739915465204!3d-5.14367540344363!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dbee2bac603ef01%3A0x5fd47a3a79f13491!2sLosari+Beach+Platform!5e0!3m2!1sid!2sid!4v1535976093291" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>'
                        style="background:#EFEFEF;width:100%;" rows="5" cols="80"></textarea>
                      </div>
                    </div>
                  </div>
                  <br>
                  <div class="row">
                    <div class="col-md col-xs" style="width:99%;">
                      <div class="row">
                        <div class="col-md col-xs" style="text-align:left;">
                          <p style="margin-left:-10px;font-weight:bold;">Deskripsi Event</p>
                        </div>
                        <div class="col-md col-xs" style="color:#CACACA;text-align:right;">
                          <p>*Required</p>
                        </div>
                      </div>
                      <div class="row">
                        <textarea name="description" class="form-control" required
                        style="background:#EFEFEF;width:100%;" rows="8" cols="80"></textarea>
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
