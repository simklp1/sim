        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Data Kategori</h3>
              </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Form Input Kategori</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br>
                    <form class="form-horizontal form-label-left" action="<?php echo base_url('index.php/Staff/tambah_aksi_kategori') ?>" method="post" enctype="multipart/form-data" role="form" >
                     <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Kode Kategori <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="hidden"  name="id" required="required" class="form-control col-md-7 col-xs-12">
                          <input type="text" required="required" name="kode" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Nama Kategori <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" required="required" name="nama" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Deskripsi
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea id="deskripsi" class="form-control col-md-7 col-xs-12" type="text" name="deskripsi" ></textarea>
                        </div>
                      </div>
                      <div class="ln_solid"></div>
                        <div class="form-group">
                          <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                            <button class="btn btn-round btn-primary" type="submit">Simpan</button>
                            <button class="btn btn-round btn-danger" type="reset">Reset</button>
                            <a type="button" href="<?=base_url('index.php/Staff/tampil_kategori'); ?> " class="btn btn-round btn-warning">Kembali</a>
                          </div>
                        </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
  