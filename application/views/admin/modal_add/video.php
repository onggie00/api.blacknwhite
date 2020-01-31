<div class="modal" id="modal_add_data" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content Roboto" style="color: #000;">
      <div class="modal-header" style="padding:15px;">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: #00B4CF;opacity:1;"><i class="fa fa-close fa-2x"></i>
        </button>
        <div class="col-lg-5" style="border-bottom: 4px solid #00B4CF;font-size:16px;">
          <p>TAMBAH DATA</p>
        </div>
      </div>
      <form class="form-horizontal form-label-left" action="<?php echo site_url('admin/video/insert_data') ?>" method="post" enctype="multipart/form-data">
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
                          <p>*Required</p>
                        </div>
                      </div>
                      <div class="row">
                        <input type="text" id="title" required="required" class="form-control"
                        style="background:#EFEFEF;width:100%;" name="title" value=""
                        placeholder="video 1" maxlength="100" >
                      </div>
                    </div>
                    <div class="col-md col-xs" >

                        <div class="row">
                          <div class="col-md col-xs" style="text-align:left;">
                            <p style="margin-left:-10px;font-weight:bold;">Kategori Video</p>
                          </div>
                          <div class="col-md col-xs" style="color:#CACACA;text-align:right;">
                            <p>*Required</p>
                          </div>
                        </div>
                        <div class="row">
                          <select required="required" class="form-control"
                          style="background:#EFEFEF;width:100%;"  name="id_video_category">
                          <?php foreach ($this->mymodel->getall('video_category') as $key => $value): ?>
                            <option value="<?php echo $value->id_video_category ?>"><?php echo $value->name ?></option>
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
                        <select id="" class="form-control" onchange="tiipp(this)"
                        style="background:#EFEFEF;width:100%;" name="tipe_video">
                        <option value="1">Upload</option>
                        <option value="2">Youtube</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md col-xs" >
                    <div class="row">
                      <div class="col-md col-xs" style="text-align:left;">
                        <p style="margin-left:-10px;font-weight:bold;">Video</p>
                      </div>
                      <div class="col-md col-xs" style="color:#CACACA;text-align:right;">
                        <p>*Required</p>
                      </div>
                    </div>
                    <div class="row" id="vv">
                      <input type="file" id="video" class="form-control" required
                      style="background:#EFEFEF;width:100%;" name="video" value=""  accept="video/mp4">
                    </div>
                  </div>
                  </div>
                  <br>
                  <div class="row">
                    <div class="col-md col-xs"  id="tumb">
                      <div class="row">
                       <div class="col-md col-xs" style="text-align:left;">
                          <p style="margin-left:-10px;font-weight:bold;">Thumbnail Video</p>
                        </div>
                        <div class="col-md col-xs" style="color:#CACACA;text-align:right;">
                        </div>
                      </div>
                      <div class="row" >
                        <input type="file" id="" class="form-control"
                        style="background:#EFEFEF;width:100%;" name="img" value=""  accept="image/jpg, image/jpeg, image/png">
                      </div>
                    </div>
                  </div>
                  <br>
                  <div class="row">
                    <div class="col-md col-xs"  id="tumb">
                      <div class="row">
                       <div class="col-md col-xs" style="text-align:left;">
                          <p style="margin-left:-10px;font-weight:bold;">Thumbnail Home</p>
                        </div>
                        <div class="col-md col-xs" style="color:#CACACA;text-align:right;">
                        </div>
                      </div>
                      <div class="row" >
                        <input type="file" id="" class="form-control"
                        style="background:#EFEFEF;width:100%;" name="img2" value=""  accept="image/jpg, image/jpeg, image/png">
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

<script type="text/javascript">
  function tiipp(e) {
    if (e.value==1) {
      $('#vv').html('<input type="file" id="v" required class="form-control"style="background:#EFEFEF;width:100%;" name="video" value=""  accept="video/mp4">');
      $('#tumb').html('<div class="row"><div class="col-md col-xs" style="text-align:left;"><p style="margin-left:-10px;font-weight:bold;">Tumbnail Video</p></div><div class="col-md col-xs" style="color:#CACACA;text-align:right;">    </div>      </div>      <div class="row" >        <input type="file" id="" class="form-control"        style="background:#EFEFEF;width:100%;" name="img" value=""  accept="image/jpg, image/jpeg, image/png">      </div>');
    }else {
      $('#tumb').html('');
      $('#vv').html('<input type="text" required id="url" class="form-control"style="background:#EFEFEF;width:100%;" name="url_vid" value="">');
    }


  }
</script>
