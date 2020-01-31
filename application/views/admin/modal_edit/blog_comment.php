<div class="modal-header" style="padding:15px;">
  <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: #00B4CF;opacity:1;"><i class="fa fa-close fa-2x"></i>
  </button>
  <div class="col-lg-5" style="border-bottom: 4px solid #00B4CF;font-size:16px;">
    <p>EDIT DATA</p>
  </div>
</div>
<form class="form-horizontal form-label-left" action="<?php echo site_url('admin/blog_comment/update_data') ?>" method="post" enctype="multipart/form-data">
  <input type="hidden" name="id_data" value="<?php echo $data->id_blog; ?>">
  <div class="modal-body" style="font-size:12px;">
      <div class="row">
          <div class="col-lg-12">
            <div class="row">
                    <div class="col-md col-xs" >
                      <div class="row">
                        <div class="col-md col-xs" style="text-align:left;">
                          <p style="margin-left:-10px;font-weight:bold;">Nomor Kartu</p>
                        </div>
                        <div class="col-md col-xs" style="color:#CACACA;text-align:right;">
                          
                        </div>
                      </div>
                      <div class="row">
                        <input type="text" id="nomer_kartu" class="form-control"
                        style="background:#EFEFEF;width:100%;" name="nomer_kartu" value="<?php echo $data->nomer_kartu ?>"
                        placeholder="123456" maxlength="100" >
                      </div>
                    </div>
                    

                  </div>
                  <br>
                  <div class="row">
                    <div class="col-md col-xs" >
                      <div class="row">
                        <div class="col-md col-xs" style="text-align:left;">
                          <p style="margin-left:-10px;font-weight:bold;">Blog Pilihan</p>
                        </div>
                        <div class="col-md col-xs" style="color:#CACACA;text-align:right;">
                          
                        </div>
                      </div>
                      <div class="row">
                        <select class="form-control"
                        style="background:#EFEFEF;width:100%;"  name="id_blog">
                        <?php 
                        foreach ($this->mymodel->getall('blog') as $key => $value){
                          $get_blog = $this->mymodel->getbywhere('blog_comment','id_blog',$value->id_blog,'row');
                        if ($get_blog->id_blog == $value->id_blog) {
                          echo "<option value='".$value->id_blog."' selected='selected'>".$value->title."</option>";
                        }else{
                          echo "<option value='".$value->id_blog."'>".$value->title."</option>";
                        }
                      }
                         ?>
                        </select>
                      </div>
                    </div>

                  </div>
                  <br>
                  <div class="row">
                    <div class="col-md col-xs" >
                      <div class="row">
                        <div class="col-md col-xs" style="text-align:left;">
                          <p style="margin-left:-10px;font-weight:bold;">Komentar</p>
                        </div>
                        <div class="col-md col-xs" style="color:#CACACA;text-align:right;">
                        </div>
                      </div>
                      <div class="row">
                        <textarea name="comment" style="background:#EFEFEF;width:100%;" id="comment" class="form-control" required><?php echo $data->comment ?></textarea>
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


