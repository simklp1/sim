        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Data Pegawai</h3>
              </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Form Input Pegawai</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br>
                    <form class="form-horizontal form-label-left" action="<?php echo base_url('index.php/Keuangan/tambah_aksi_pegawai') ?>" method="post" enctype="multipart/form-data" role="form" >
                     <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Nama <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="hidden"  name="id" required="required" class="form-control col-md-7 col-xs-12">
                          <input type="text" required="required" name="nama" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Nomor KTP <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" required="required" name="ktp" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Jabatan <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="form-control" name="id_jabatan">
                            <?php 
                            foreach($jabatan as $j){
                            ?>
                            <option value="<?php echo $j->jabatan?>"><?php echo $j->jabatan?></option>
                            <?php } ?>
                          </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Pangkat <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <select id="pangkat" name="pangkat" class="date-picker form-control col-md-7 col-xs-12"  required>
                              <option value="1A">1A</option>
                              <option value="4B">4B</option>
                              <option value="4AS">4AS</option>
                              <option value="5BA">5BA</option>
                              <option value="5BD">5BD</option>
                              <option value="3A">3A</option>
                            </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Alamat
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea id="alamat" class="form-control col-md-7 col-xs-12" type="text" name="alamat" ></textarea>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">No. Telpon
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="telpon" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Tempat Lahir
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="tempat_lahir" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Tanggal Lahir
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="date" name="tanggal_lahir" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Agama
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <select id="agama" name="agama" class="date-picker form-control col-md-7 col-xs-12"  required>
                              <option value="Islam">Islam</option>
                              <option value="Kristen Katolik">Kristen Katolik</option>
                              <option value="Kristen Protestan">Kristen Protestan</option>
                              <option value="Hindu">Hindu</option>
                              <option value="Budha">Budha</option>
                              <option value="Konghucu">Konghucu</option>
                            </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Pendidikan Terakhir
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <select id="pendidikan" name="pendidikan" class="date-picker form-control col-md-7 col-xs-12"  required>
                              <option value="SMA/Sederajat">SMA/Sederajat</option>
                              <option value="D1">D1</option>
                              <option value="D3">D3</option>
                              <option value="S1">S1</option>
                              <option value="S2">S2</option>
                              <option value="S3">S3</option>
                            </select>
                        </div>
                      </div>
                      <div class="ln_solid"></div>
                        <div class="form-group">
                          <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                            <button class="btn btn-round btn-primary" type="submit">Simpan</button>
                            <button class="btn btn-round btn-danger" type="reset">Reset</button>
                            <a type="button" href="<?=base_url('index.php/Keuangan/tampil_pegawai'); ?> " class="btn btn-round btn-warning">Kembali</a>
                          </div>
                        </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
  