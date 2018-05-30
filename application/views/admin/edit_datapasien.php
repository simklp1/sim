<div class="right_col" role="main" >
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Data Pasien</h3>
      </div>
    </div>
    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Form Edit Data Pasien</h2>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <br>
            <?php foreach ($pasien as $p) { ?>
              <form class="form-horizontal form-label-left" action="<?php echo base_url(). 'index.php/Admin/update_data_pasien'; ?> " method="post" enctype="multipart/form-data" role="form">
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Nomor Rekamedis <span class="required">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="hidden" name="id" value="<?php echo $p->id ?>">
                    <input type="text" required="required" name="no_rekamedis" class="form-control col-md-7 col-xs-12" value="<?php echo $p->no_rekamedis ?>">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Nama Pasien <span class="required">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" required="required" name="nama_pasien" class="form-control col-md-7 col-xs-12" value="<?php echo $p->nama_pasien ?>">
                  </div>
                </div>
                <div class="form-group">
                  <label class=" control-label col-md-3 col-sm-3 col-xs-12">Jenis Kelamin<span class="required">*</span></label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <div id="gender" class="btn-group" data-toggle="buttons">
                      <label>
                        <input type="radio" name="jk" value="Laki-Laki" <?php if($p->jk == 'Laki-Laki') echo "checked"?> required > Laki-Laki 
                      </label>
                      <br>
                      <label>
                        <input type="radio" name="jk" value="Perempuan" <?php if($p->jk == 'Perempuan') echo "checked" ?> required > Perempuan
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Golongan Darah
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" name="goldar" class="form-control col-md-7 col-xs-12" value="<?php echo $p->goldar ?>">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Tempat Lahir<span class="required">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" name="tempat_lahir" class="form-control col-md-7 col-xs-12" value="<?php echo $p->tempat_lahir ?>" required="required" >
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Tanggal Lahir <span class="required">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="date" required="required" name="tanggal_lahir" class="form-control col-md-7 col-xs-12" value="<?php echo $p->tanggal_lahir ?>">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Nama Ibu<span class="required">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" name="nama_ibu" class="form-control col-md-7 col-xs-12" value="<?php echo $p->nama_ibu ?>" required="required">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Alamat<span class="required">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" name="alamat" class="form-control col-md-7 col-xs-12" value="<?php echo $p->alamat ?>" required="required">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Agama <span class="required">*</span>
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
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Nomor Telpon<span class="required">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" name="telpon" class="form-control col-md-7 col-xs-12" value="<?php echo $p->telpon ?>" required="required">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Pekerjaan<span class="required">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" name="pekerjaan" class="form-control col-md-7 col-xs-12" value="<?php echo $p->pekerjaan ?>" required="required">
                  </div>
                </div>
                <div class="form-group">
                  <label class=" control-label col-md-3 col-sm-3 col-xs-12">Status Menikah<span class="required">*</span></label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="btn-group" data-toggle="buttons">
                      <label>
                        <input type="radio" name="status_menikah" value="Menikah" <?php if($p->status_menikah == 'Menikah') echo "checked"?> required > Menikah
                      </label>
                      <br>
                      <label>
                        <input type="radio" name="status_menikah" value="Belum Menikah" <?php if($p->status_menikah == 'Belum Menikah') echo "checked" ?> required > Belum Menikah
                      </label>
                    </div>
                  </div>
                </div>
                <div class="ln_solid"></div>
                <div class="form-group">
                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                  <button class="btn btn-round btn-primary" type="submit">Simpan</button>
                  <button class="btn btn-round btn-danger" type="reset">Reset</button>
                  <a type="button" href="<?=base_url('index.php/Admin/tampil_pasien'); ?> " class="btn btn-round btn-warning">Kembali</a>
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