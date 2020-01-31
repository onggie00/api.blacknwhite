<div class="modal-header" style="padding:15px;">
  <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: #00B4CF;opacity:1;"><i class="fa fa-close fa-2x"></i>
  </button>
  <div class="col-lg-5" style="border-bottom: 4px solid #00B4CF;font-size:16px;">
    <p>BALAS PESAN MEMBER</p>
  </div>
</div>
<form class="form-horizontal form-label-left" action="<?php echo site_url('admin/admin_message2/reply') ?>" method="post" enctype="multipart/form-data">
  <input type="hidden" name="id_data" value="<?php echo $data->id_admin_message ?>">
  <div class="modal-body" style="font-size:12px;">
      <div class="row">
          <div class="col-lg-12">
                  <div class="row">
                    <div class="col-md col-xs" >
                      <div class="row">
                        <div class="col-md col-xs" style="text-align:left;">
                          <p style="margin-left:-10px;font-weight:bold;">Nama Member</p>
                        </div>
                        <div class="col-md col-xs" style="color:#CACACA;text-align:right;">
                          
                        </div>
                      </div>
                      <div class="row">
                        <input type="text" id="name" class="form-control"
                        style="background:#EFEFEF;width:100%;" name="name1" value="<?php echo $data->name; ?>"
                        placeholder="" maxlength="100" disabled>
                        <input type="hidden" name="name" value="<?php echo $data->name; ?>">
                      </div>
                    </div>
                    <br>
                  </div>
                  <br>
                  <div class="row">
                    <div class="col-md col-xs" >
                      <div class="row">
                        <div class="col-md col-xs" style="text-align:left;">
                          <p style="margin-left:-10px;font-weight:bold;">E-Mail Member</p>
                        </div>
                        <div class="col-md col-xs" style="color:#CACACA;text-align:right;">
                          
                        </div>
                      </div>
                      <div class="row">
                        <input type="text" id="email" class="form-control"
                        style="background:#EFEFEF;width:100%;" name="email1" value="<?php echo $data->email; ?>"
                        placeholder="" maxlength="100" disabled>
                        <input type="hidden" name="email" value="<?php echo $data->email; ?>">
                      </div>
                    </div>
                    <br>
                  </div>
                  <br>
                  <div class="row">
                    <div class="col-md col-xs" >
                      <div class="row">
                        <div class="col-md col-xs" style="text-align:left;">
                          <p style="margin-left:-10px;font-weight:bold;">No. Hp</p>
                        </div>
                        <div class="col-md col-xs" style="color:#CACACA;text-align:right;">
                          
                        </div>
                      </div>
                      <div class="row">
                        <input type="text" id="phone" class="form-control"
                        style="background:#EFEFEF;width:100%;" name="phone1" value="<?php echo $data->phone; ?>"
                        placeholder="" maxlength="100" disabled>
                        <input type="hidden" name="phone" value="<?php echo $data->phone; ?>">
                      </div>
                    </div>
                    <br>
                  </div>
                  <br>
                  <div class="row">
                    <div class="col-md col-xs" >
                      <div class="row">
                        <div class="col-md col-xs" style="text-align:left;">
                          <p style="margin-left:-10px;font-weight:bold;">Subjek</p>
                        </div>
                        <div class="col-md col-xs" style="color:#CACACA;text-align:right;">
                          
                        </div>
                      </div>
                      <div class="row">
                        <input type="text" id="subject" class="form-control"
                        style="background:#EFEFEF;width:100%;" name="subject1" value="<?php echo $data->subject; ?>"
                        placeholder="" maxlength="100" disabled>
                        <input type="hidden" name="subject" value="<?php echo $data->subject; ?>">
                      </div>
                    </div>
                    <br>
                  </div>
                  <br>
                  <div class="row">
                    <div class="col-md col-xs" >
                      <div class="row">
                        <div class="col-md col-xs" style="text-align:left;">
                          <p style="margin-left:-10px;font-weight:bold;">Deskripsi Pertanyaan</p>
                        </div>
                        <div class="col-md col-xs" style="color:#CACACA;text-align:right;">
                          
                        </div>
                      </div>
                      <div class="row">
                        <input type="text" id="description" class="form-control"
                        style="background:#EFEFEF;width:100%;" name="description1" value="<?php echo $data->description; ?>"
                        placeholder="" maxlength="100" disabled>
                        <input type="hidden" name="description" value="<?php echo $data->description; ?>">
                      </div>
                    </div>
                    <br>
                  </div>
                  <br>
                  <div class="row">
                    <div class="col-md col-xs" >
                      <div class="row">
                        <div class="col-md col-xs" style="text-align:left;">
                          <p style="margin-left:-10px;font-weight:bold;">Jawaban</p>
                        </div>
                        <div class="col-md col-xs" style="color:#CACACA;text-align:right;">
                          
                        </div>
                      </div>
                      <div class="row">
                        <textarea name="reply" id="reply" style="background:#EFEFEF;" class="form-control" placeholder="jawab disini"><?php echo $data->reply; ?></textarea>
                      </div>
                    </div>
                    <br>
                  </div>
                  <br>
                  
                  
          </div>
      </div>
    </div>
  <div class="modal-footer">
    <button type="submit" class="btn btn-default" style="background: #00B4CF;color:#fff;"
    id="add_jpp">REPLY</button>
  </div>
</form>
