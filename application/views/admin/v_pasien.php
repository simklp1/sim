          <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Data Pasien</h3>
              </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_content">
                    <div class="row">
                      <a type="button" href="<?=base_url('index.php/Admin/tambah_data_pasien'); ?> " class="btn btn-round btn-primary"><i class="fa fa-plus">
                       Tambah</i></a>
                      <table id="datatable" class="table table-striped table-bordered" >
                        <thead>
                          <tr>
                            <th width="50">No.</th>
                            <th width="200">Nomor Rekamedis</th> 
                            <th width="250">Nama Pasien</th>
                            <th width="300">Jenis Kelamin</th>
                            <th width="350">Golongan Darah</th>
                            <th width="300">Kota/Kab. Lahir</th>
                            <th width="180">Tanggal Lahir</th>
                            <th width="250">Nama Ibu</th>
                            <th width="300">Alamat</th>
                            <th width="100">Agama</th>
                            <th width="150">Nomor Telpon</th>
                            <th width="300">Pekerjaan</th>
                            <th width="300">Status Menikah</th>
                            <th width="100"></th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php $no=1; ?>
                        <?php
                        foreach ($pasien as $p) {
                        ?>
                          <tr>
                            <td><?php echo $no++ ?></td>
                            <td><?php echo $p->no_rekamedis ?></td>
                            <td><?php echo $p->nama_pasien ?></td>
                            <td><?php echo $p->jk ?></td>
                            <td><?php echo $p->goldar ?></td>
                            <td><?php echo $p->tempat_lahir ?></td>
                            <td><?php echo $p->tanggal_lahir ?></td>
                            <td><?php echo $p->nama_ibu ?></td>
                            <td><?php echo $p->alamat ?></td>
                            <td><?php echo $p->agama ?></td>
                            <td><?php echo $p->telpon ?></td>
                            <td><?php echo $p->pekerjaan ?></td>
                            <td><?php echo $p->status_menikah ?></td>
                            <td>
                                      <a type="button" class="btn btn-danger" href="<?php echo base_url()."index.php/Admin/hapus_data_pasien/".$p->id ?>"><i class="fa fa-trash-o"></i></a>
                                      <a type="button" class="btn btn-primary" href="<?php echo base_url()."index.php/Admin/edit_data_pasien/".$p->id ?>"><i class="fa fa-pencil"></i></a>
                            </td>
                          </tr>
                        <?php } ?>
                        </tbody>
                      </table> 
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>