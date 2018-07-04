<div class="right_col" role="main" >
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Data Pegawai</h3>
      </div>
    </div>
    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Form Edit Pegawai</h2>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <br>
            <?php foreach ($pegawai as $p) { ?>
              <form class="form-horizontal form-label-left" action="<?php echo base_url(). 'index.php/Keuangan/update_data_pegawai'; ?> " method="post" enctype="multipart/form-data" role="form">
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Nama<span class="required">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="hidden" name="id" value="<?php echo $p->id ?>">
                    <input type="text" required="required" name="nama" class="form-control col-md-7 col-xs-12" value="<?php echo $p->nama ?>">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Nomor KTP<span class="required">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" required="required" name="ktp" class="form-control col-md-7 col-xs-12" value="<?php echo $p->ktp ?>">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Jabatan<span class="required">*</span></label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <select class="form-control" name="id_jabatan">
                      <?php 
                      foreach($jabatan as $j){
                      ?>
                      <option  value="<?php echo $j->jabatan?>"><?php echo $j->jabatan?></option>
                      <?php } ?>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Pangkat <span class="required">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <select name="pangkat" class="form-control col-md-7 col-xs-12"  required>
                      <option <?php if($p->pangkat=="1A"){echo "selected";} ?> value="1A">1A</option>
                      <option <?php if($p->pangkat=="4B"){echo "selected";} ?> value="4B">4B</option>
                      <option <?php if($p->pangkat=="4AS"){echo "selected";} ?> value="4AS">4AS</option>
                      <option <?php if($p->pangkat=="5BA"){echo "selected";} ?> value="5BA">5BA</option>
                      <option <?php if($p->pangkat=="5BD"){echo "selected";} ?> value="5BD">5BD</option>
                      <option <?php if($p->pangkat=="3A"){echo "selected";} ?> value="3A">3A</option>
                    </select>
                  </div>
                </div>
                <div class="item form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Alamat</label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <textarea name="alamat" class="form-control col-md-7 col-xs-12"><?php echo $p->alamat ?></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">No. Telpon
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" name="telpon" class="form-control col-md-7 col-xs-12" value="<?php echo $p->telpon ?>">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Tempat Lahir
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" name="tempat_lahir" class="form-control col-md-7 col-xs-12" value="<?php echo $p->tempat_lahir ?>">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Tanggal Lahir
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="date" name="tanggal_lahir" class="form-control col-md-7 col-xs-12" value="<?php echo $p->tanggal_lahir ?>">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Agama
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <select name="agama" class="form-control col-md-7 col-xs-12"  required>
                      <option <?php if($p->agama=="Islam"){echo "selected";} ?> value="Islam">Islam</option>
                      <option <?php if($p->agama=="Kristen Katolik"){echo "selected";} ?> value="Kristen Katolik">Kristen Katolik</option>
                      <option <?php if($p->agama=="Kristen Protestan"){echo "selected";} ?> value="Kristen Protestan">Kristen Protestan</option>
                      <option <?php if($p->agama=="Hindu"){echo "selected";} ?> value="Hindu">Hindu</option>
                      <option <?php if($p->agama=="Buddha"){echo "selected";} ?> value="Buddha">Buddha</option>
                      <option <?php if($p->agama=="Konghucu"){echo "selected";} ?> value="Konghucu">Konghucu</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Pendidkan Terakhir
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <select name="pendidikan" class="form-control col-md-7 col-xs-12"  required>
                      <option <?php if($p->pendidikan=="SMA/Sederajat"){echo "selected";} ?> value="SMA/Sederajat">SMA/Sederajat</option>
                      <option <?php if($p->pendidikan=="D1"){echo "selected";} ?> value="D1">D1</option>
                      <option <?php if($p->pendidikan=="D3"){echo "selected";} ?> value="D3">D3</option>
                      <option <?php if($p->pendidikan=="S1"){echo "selected";} ?> value="S1">S1</option>
                      <option <?php if($p->pendidikan=="S2"){echo "selected";} ?> value="S2">S2</option>
                      <option <?php if($p->pendidikan=="S3"){echo "selected";} ?> value="S3">S3</option>
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
            <?php } ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>