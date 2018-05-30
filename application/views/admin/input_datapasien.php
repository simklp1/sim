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
            <h2>Form Tambah Data Pasien</h2>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <br>
            <form id="demo-form2" data-parsley-validate="" class="form-horizontal form-label-left" novalidate="" action="<?php echo base_url(). 'index.php/Admin/tambah_aksi_pasien'; ?> " method="post" enctype="multipart/form-data" role="form">

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Nomor Rekamedis <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="no_rekamedis" required="required" name="no_rekamedis" class="form-control col-md-7 col-xs-12">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Nama Pasien <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="nama_pasien" name="nama_pasien" required="required" class="form-control col-md-7 col-xs-12">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Jenis Kelamin<span class="required">*</span></label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="radio" checked="" value="Laki-Laki" id="jk" name="jk">Laki-Laki
                <br>
                  <input type="radio" checked="" value="Perempuan" id="jk" name="jk">Perempuan
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Golongan Darah
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="goldar" name="goldar" class="form-control col-md-7 col-xs-12">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Tempat Lahir<span class="required">*</span></label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input id="tempat_lahir" required="required" class="date-picker form-control col-md-7 col-xs-12" type="text" name="tempat_lahir">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Tanggal Lahir<span class="required">*</span></label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input id="tanggal_lahir" required="required" class="date-picker form-control col-md-7 col-xs-12" type="date" name="tanggal_lahir">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Nama Ibu<span class="required">*</span></label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input id="nama_ibu" required="required" class="date-picker form-control col-md-7 col-xs-12" type="text" name="nama_ibu">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Alamat<span class="required">*</span></label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input id="alamat" required="required" class="date-picker form-control col-md-7 col-xs-12" type="text" name="alamat">
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
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Nomor Telpon<span class="required">*</span></label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input id="telpon" required="required" class="date-picker form-control col-md-7 col-xs-12" type="text" name="telpon">
                </div>
              </div>
               <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Pekerjaan<span class="required">*</span></label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input id="pekerjaan" required="required" class="date-picker form-control col-md-7 col-xs-12" type="text" name="pekerjaan">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Status Menikah<span class="required">*</span></label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="radio" checked="" value="Menikah" id="status_menikah" name="status_menikah">Menikah
                <br>
                  <input type="radio" checked="" value="Belum Menikah" id="status_menikah" name="status_menikah">Belum Menikah
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
          </div>
        </div>
      </div>
    </div>
  </div>
</div>