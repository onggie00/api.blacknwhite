<div class="modal-header" style="padding:15px;">
  <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: #00B4CF;opacity:1;"><i class="fa fa-close fa-2x"></i>
  </button>
  <div class="col-lg-5" style="border-bottom: 4px solid #00B4CF;font-size:16px;">
    <p>EDIT DATA</p>
  </div>
</div>
<form class="form-horizontal form-label-left" action="<?php echo site_url('admin/poin_khusus_hadir_event/update_data') ?>" method="post" enctype="multipart/form-data">
  <input type="hidden" name="id_data" value="<?php echo $data->id_poin_event ?>">
  <div class="modal-body" style="font-size:12px;">
      <div class="row">
          <div class="col-lg-12">
            <div class="row">
                <div class="col-lg-12">
                  <div class="row">
                    <div class="col-md col-xs" >
                      <div class="row">
                        <div class="col-md col-xs" style="text-align:left;">
                          <p style="margin-left:-10px;font-weight:bold;">Nomor Peserta</p>
                        </div>
                        <div class="col-md col-xs" style="color:#CACACA;text-align:right;">
                          
                        </div>
                      </div>
                      <div class="row">
                        <input type="text" id="kartu_peserta"  class="form-control"
                        style="background:#EFEFEF;width:100%;" name="kartu_peserta" disabled value="<?php echo $data->nomer_kartu; ?>"
                        placeholder="123456" maxlength="100" >

                      </div>
                    </div>
                    <div class="col-md col-xs" >
                      <div class="row">
                        <div class="col-md col-xs" style="text-align:left;">
                          <p style="margin-left:-10px;font-weight:bold;">Nama Peserta</p>
                        </div>
                        <div class="col-md col-xs" style="color:#CACACA;text-align:right;">
                          
                        </div>
                      </div>
                      <div class="row">
                        <input type="text" id="nama_peserta"  class="form-control"
                        style="background:#EFEFEF;width:100%;" name="nama_peserta" disabled value="<?php echo $data->nama_peserta; ?>"
                        placeholder="123456" maxlength="100" >

                      </div>
                    </div>
                  </div>
                  <br>
                  <div class="row">
                    <div class="col-md col-xs" >
                      <div class="row">
                        <div class="col-md col-xs" style="text-align:left;">
                          <p style="margin-left:-10px;font-weight:bold;">Daftar Event yang dihadiri</p>
                        </div>
                        <div class="col-md col-xs" style="color:#CACACA;text-align:right;">
                          
                        </div>
                      </div>
                      <div class="row">
                        <select  class="form-control"
                        style="background:#EFEFEF;width:100%;"  name="nama_event">
                        <?php foreach ($this->mymodel->getall('event') as $key => $value): 
                        $cek = $this->mymodel->getbywhere('poin_event','id_poin_event',$data->id_poin_event,'row');
                        if ($value->title ==  $cek->nama_event) {
                          echo "<option value='".$value->title."' selected='selected'>".$value->start_event." ".$value->title."</option>";
                        }else{
                          echo "<option value='".$value->title."'>".$value->start_event." ".$value->title."</option>";                          
                        }
                        ?>
                        <?php endforeach; ?>
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
    id="add_jpp">EDIT DATA</button>
  </div>
</form>
