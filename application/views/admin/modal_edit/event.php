<div class="modal-header" style="padding:15px;">
  <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: #00B4CF;opacity:1;"><i class="fa fa-close fa-2x"></i>
  </button>
  <div class="col-lg-5" style="border-bottom: 4px solid #00B4CF;font-size:16px;">
    <p>EDIT DATA</p>
  </div>
</div>
<form class="form-horizontal form-label-left" action="<?php echo site_url('admin/event/update_data') ?>" method="post" enctype="multipart/form-data">
  <input type="hidden" name="id_data" value="<?php echo $data->id_event ?>">
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
                    
                  </div>
                </div>
                <div class="row">
                  <input type="text" id="title" class="form-control"
                  style="background:#EFEFEF;width:100%;" name="title" value="<?php echo $data->title ?>"
                  placeholder="Event 1" maxlength="100" >
                </div>
              </div>
              <div class="col-md col-xs" >
                <div class="row">
                  <div class="col-md col-xs" style="text-align:left;">
                    <p style="margin-left:-10px;font-weight:bold;">Foto Event</p>
                  </div>
                  <div class="col-md col-xs" style="color:#CACACA;text-align:right;">
                    <p>*Optional</p>
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
                    <option value="WIB" <?php if ($data->date_zone=="WIB") echo "selected"  ?>>WIB</option>
                    <option value="WITA"<?php if ($data->date_zone=="WITA") echo "selected" ?>>WITA</option>
                    <option value="WIT" <?php if ($data->date_zone=="WIT") echo "selected"  ?>>WIT</option>
                  </select>
                </div>
              </div>
              <div class="col-md col-xs" >

                <div class="row">
                  <div class="col-md col-xs" style="text-align:left;">
                    <p style="margin-left:-10px;font-weight:bold;">Tanggal Mulai</p>
                  </div>
                  <div class="col-md col-xs" style="color:#CACACA;text-align:right;">
                    
                  </div>
                </div>
                <div class="row">
                  <input type="datetime-local" id="start_event1" class="form-control"
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
                  <input type="datetime-local" id="end_event1" class="form-control" required
                  style="background:#EFEFEF;width:100%;" name="end_event" value="">
                </div>
              </div>
              <div class="col-md col-xs" >

                <div class="row">
                  <div class="col-md col-xs" style="text-align:left;">
                    <p style="margin-left:-10px;font-weight:bold;">Lokasi event</p>
                  </div>
                  <div class="col-md col-xs" style="color:#CACACA;text-align:right;">
                    
                  </div>
                </div>
                <div class="row">
                  <input type="text" id="" class="form-control"
                  style="background:#EFEFEF;width:100%;" name="location_event" value="<?php echo $data->location_event ?>"
                  placeholder="Pantai Losari, Makasar" maxlength="100" >
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
                    
                  </div>
                </div>
                <div class="row">
                  <?php $loc = $this->mymodel->getbywhere('event_location','id_event',$data->id_event,'row') ?>
                  <select class="form-control"
                  style="background:#EFEFEF;width:100%;" name="id_prov" id="id_prov1">
                    <option value="">Pilih Provinsi</option>
                    <?php foreach ($this->mymodel->getall('provinsi') as $key => $value): ?>
                          <option value="<?php echo $value->id_prov ?>"
                            <?php if ($value->id_prov==$loc->id_prov): ?>
                              selected
                            <?php endif; ?>
                            ><?php echo $value->nama ?></option>
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
                    
                  </div>
                </div>
                <div class="row">
                  <select class="form-control"
                  style="background:#EFEFEF;width:100%;" name="id_kab" id="id_kab1">
                  <option value="">Pilih Kabupaten</option>
                  <?php foreach ($this->mymodel->getbywhere('kabupaten','id_prov',$loc->id_prov) as $key => $value): ?>
                        <option value="<?php echo $value->id_kab ?>"
                          <?php if ($value->id_kab==$loc->id_kab): ?>
                            selected
                          <?php endif; ?>
                          ><?php echo ucwords(strtolower($value->nama)) ?></option>
                  <?php endforeach; ?>
                </select>
                  </select>
                </div>
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col-md col-xs" style="width:99%;">
                <div class="row">
                  <div class="col-md col-xs" style="text-align:left;">
                    <p style="margin-left:-10px;font-weight:bold;">Embed Maps</p>
                  </div>
                  <div class="col-md col-xs" style="color:#CACACA;text-align:right;">
                    
                  </div>
                </div>
                <div class="row">
                  <textarea name="embed_maps" class="form-control" required
                  placeholder='<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3973.751376723794!2d119.40739915465204!3d-5.14367540344363!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dbee2bac603ef01%3A0x5fd47a3a79f13491!2sLosari+Beach+Platform!5e0!3m2!1sid!2sid!4v1535976093291" width="150" height="150" frameborder="0" style="border:0" allowfullscreen></iframe>'
                  style="background:#EFEFEF;width:100%;" rows="5" cols="80"><iframe src="<?php echo $data->embed_maps ?>" width="150" height="150" frameborder="0" style="border:0" allowfullscreen></iframe></textarea>
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
                    
                  </div>
                </div>
                <div class="row">
                  <textarea name="description" class="form-control"
                  style="background:#EFEFEF;width:100%;" rows="8" cols="80"><?php echo $data->description ?></textarea>
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
<?php $dt= explode(' ',date('Y-m-d H:i:s',strtotime($data->start_event)));
$time = explode(':',$dt[1]);  ?>
document.getElementById("start_event1").value = "<?php echo $dt[0] ?>"+"T"+"<?php echo $time[0].":".$time[1].":".$time[2] ?>";
<?php $dt= explode(' ',date('Y-m-d H:i:s',strtotime($data->end_event)));
$time = explode(':',$dt[1]);  ?>
document.getElementById("end_event1").value = "<?php echo $dt[0] ?>"+"T"+"<?php echo $time[0].":".$time[1].":".$time[2] ?>";
</script>
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
