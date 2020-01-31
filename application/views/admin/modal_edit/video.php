<div class="modal-header" style="padding:15px;">
  <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: #00B4CF;opacity:1;"><i class="fa fa-close fa-2x"></i>
  </button>
  <div class="col-lg-5" style="border-bottom: 4px solid #00B4CF;font-size:16px;">
    <p>EDIT DATA</p>
  </div>
</div>
<form class="form-horizontal form-label-left" action="<?php echo site_url('admin/video/update_data') ?>" method="post" enctype="multipart/form-data">
  <input type="hidden" name="id_data" value="<?php echo $data->id_video ?>">
  <div class="modal-body">
      <div class="row">
          <div class="col-lg-12">
            <div class="row">
              <div class="col-md col-xs" >
                <div class="row">
                  <div class="col-md col-xs" style="text-align:left;">
                    <p style="margin-left:-10px;font-weight:bold;">Nama Video</p>
                  </div>
                  <div class="col-md col-xs" style="color:#CACACA;text-align:right;">
                    
                  </div>
                </div>
                <div class="row">
                  <input type="text" id="title" class="form-control"
                  style="background:#EFEFEF;width:100%;" name="title" value="<?php echo $data->title ?>"
                  placeholder="video 1" maxlength="100" >
                </div>
              </div>
              <div class="col-md col-xs" >

                  <div class="row">
                    <div class="col-md col-xs" style="text-align:left;">
                      <p style="margin-left:-10px;font-weight:bold;">Kategori Video</p>
                    </div>
                    <div class="col-md col-xs" style="color:#CACACA;text-align:right;">
                      
                    </div>
                  </div>
                  <div class="row">
                    <select class="form-control"
                    style="background:#EFEFEF;width:100%;"  name="id_video_category">
                    <?php foreach ($this->mymodel->getall('video_category') as $key => $value): ?>
                      <option value="<?php echo $value->id_video_category ?>"
                        <?php if ($value->id_video_category==$data->id_video_category): ?>
                          selected
                        <?php endif; ?>
                        ><?php echo $value->name ?></option>
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
                  <p style="margin-left:-10px;font-weight:bold;">Tipe Video</p>
                </div>
                <div class="col-md col-xs" style="color:#CACACA;text-align:right;">
                </div>
              </div>
              <div class="row">
                <select id="tip" class="form-control" onchange="tiip(this)"
                style="background:#EFEFEF;width:100%;" name="tipe_video">
                <option value="1" <?php if ($data->tipe_video==1): ?>
                  selected
                <?php endif; ?>>Upload</option>
                <option value="2"
                <?php if ($data->tipe_video==2): ?>
                  selected
                <?php endif; ?>
                >Youtube</option>
                </select>
              </div>
            </div>
            <div class="col-md col-xs" >
              <div class="row">
                <div class="col-md col-xs" style="text-align:left;">
                  <p style="margin-left:-10px;font-weight:bold;">Video</p>
                </div>
                <div class="col-md col-xs" style="color:#CACACA;text-align:right;">
                </div>
              </div>
              <div class="row" id="v">
                <?php if ($data->tipe_video==1): ?>
                  <input type="file" id="" class="form-control"
                  style="background:#EFEFEF;width:100%;height:100%;" name="video" value=""  accept="video/mp4">
                <?php else: ?>
                  <input type="text" id="url" class="form-control"
                  style="background:#EFEFEF;width:100%;" name="url_vid" value="<?php echo $data->url_video ?>">
                <?php endif; ?>
              </div>
            </div>

            </div>
            <br>
            <?php if ($data->tipe_video==1): ?>

              <div class="row">
                <div class="col-md col-xs"  id="tumb1">
                  <div class="row">
                    <div class="col-md col-xs" style="text-align:left;">
                      <p style="margin-left:-10px;font-weight:bold;">Thumbnail Video</p>
                    </div>
                    <div class="col-md col-xs" style="color:#CACACA;text-align:right;">
                    </div>
                  </div>
                  <div class="row" >
                    <input type="file" id="" class="form-control"
                    style="background:#EFEFEF;width:100%;height:100%;" name="img" value=""  accept="image/jpg, image/jpeg, image/png">
                  </div>
                </div>
              </div>
              <br>
            <?php endif; ?>
            <div class="row">
                <div class="col-md col-xs"  id="tumb2">
                  <div class="row">
                    <div class="col-md col-xs" style="text-align:left;">
                      <p style="margin-left:-10px;font-weight:bold;">Thumbnail Home</p>
                    </div>
                    <div class="col-md col-xs" style="color:#CACACA;text-align:right;">
                    </div>
                  </div>
                  <div class="row" >
                    <input type="file" id="" class="form-control"
                    style="background:#EFEFEF;width:100%;height:100%;" name="img2" value=""  accept="image/jpg, image/jpeg, image/png">
                  </div>
                </div>
              </div>
              <br>

            <div class="row">
              <div class="col-md col-xs" style="width:99%;">
                <div class="row">
                  <div class="col-md col-xs" style="text-align:left;">
                    <p style="margin-left:-10px;font-weight:bold;">Deskripsi Video</p>
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
  function tiip(e) {
    if (e.value==1) {
      $('#v').html('<input type="file"  class="form-control"style="background:#EFEFEF;width:100%;" name="video" value=""  accept="video/mp4">');
      $('#tumb1').removeClass('hidden');
    }else {
      $('#tumb1').addClass('hidden');
      $('#v').html('<input type="text"  class="form-control"style="background:#EFEFEF;width:100%;" name="url_vid" value="">');
    }


  }
</script>
