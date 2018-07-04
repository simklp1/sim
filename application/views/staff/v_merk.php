        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Data Merk</h3>
              </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_content">
                    <div class="row">
                      <a type="button" href="<?=base_url('index.php/Staff/tambah_data_merk'); ?> " class="btn btn-round btn-primary"><i class="fa fa-plus">
                       Tambah</i></a>
                      <table id="datatable" class="table table-striped table-bordered" >
                        <thead>
                          <tr>
                            <th width="50">No.</th>
                            <th width="200">Kode Merk</th> 
                            <th width="200">Nama Merk</th> 
                            <th width="200">Deskripsi</th> 
                            <th width="100"></th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php $no=1; ?>
                        <?php
                        foreach ($merk as $m) {
                        $kalimat = $m->deskripsi;
                        $jumlahkarakter = 30;
                        $cetak = substr($kalimat,$jumlahkarakter,1);
                        
                        $cetak=substr($kalimat,0,$jumlahkarakter);
                      
                        ?>
                          <tr>
                            <td><?php echo $no++ ?></td>
                            <td><?php echo $m->kode ?></td>
                            <td><?php echo $m->nama ?></td>
                            <td><?php echo $cetak ?></td>
                            <td>
                                      <a type="button" class="btn btn-danger" href="<?php echo base_url()."index.php/staff/hapus_data_merk/".$m->id ?>"><i class="fa fa-trash-o"></i></a>
                                      <a type="button" class="btn btn-primary" href="<?php echo base_url()."index.php/staff/edit_data_merk/".$m->id ?>"><i class="fa fa-pencil"></i></a>
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