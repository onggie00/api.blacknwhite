<div class="modal-header" style="padding:15px;">
  <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: #00B4CF;opacity:1;"><i class="fa fa-close fa-2x"></i>
  </button>
  <div class="col-lg-5" style="border-bottom: 4px solid #00B4CF;font-size:16px;">
    <p>EDIT DATA</p>
  </div>
</div>
<form class="form-horizontal form-label-left" action="<?php echo site_url('admin/hadiah/update_data') ?>" method="post" enctype="multipart/form-data">
  <input type="hidden" name="id_data" value="<?php echo $data->id_hadiah; ?>">
  <div class="modal-body" style="font-size:12px;">
      <div class="row">
          <div class="col-lg-12">
            <div class="row">
                    <div class="col-md col-xs" >
                      <div class="row">
                        <div class="col-md col-xs" style="text-align:left;">
                          <p style="margin-left:-10px;font-weight:bold;">Nama Hadiah</p>
                        </div>
                        <div class="col-md col-xs" style="color:#CACACA;text-align:right;">
                          
                        </div>
                      </div>
                      <div class="row">
                        <input type="text" id="nama_hadiah" class="form-control"
                        style="background:#EFEFEF;width:100%;" name="nama_hadiah" value="<?php echo $data->nama_hadiah; ?>"
                        placeholder="hadiah 1" maxlength="100" >
                      </div>
                    </div>
                    
                  </div>
                  <br>
                  
                  <div class="row">
                    <div class="col-md col-xs" >
                      <div class="row">
                        <div class="col-md col-xs" style="text-align:left;">
                          <p style="margin-left:-10px;font-weight:bold;">Kategori Hadiah</p>
                        </div>
                        <div class="col-md col-xs" style="color:#CACACA;text-align:right;">
                        </div>
                      </div>
                      <div class="row">
                        <select class="form-control"
                        style="background:#EFEFEF;width:100%;"  name="id_hadiah_category">
                        <?php 
                        foreach ($this->mymodel->getall('hadiah_category') as $key => $value){
                          $get_category = $this->mymodel->getbywhere('hadiah','id_hadiah_category',$value->id_hadiah_category,'row');
                        if ($get_category->id_hadiah_category == $value->id_hadiah_category) {
                          echo "<option value='".$value->id_hadiah_category."' selected='selected'>".$value->nama_category."</option>";
                        }else{
                          echo "<option value='".$value->id_hadiah_category."'>".$value->nama_category."</option>";
                        }
                      }
                         ?>
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


