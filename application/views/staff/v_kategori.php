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
                  <div class="x_content">
                    <div class="row">
                      <a type="button" href="<?=base_url('index.php/Staff/tambah_data_kategori'); ?> " class="btn btn-round btn-primary"><i class="fa fa-plus">
                       Tambah</i></a>
                      <table id="datatable" class="table table-striped table-bordered" >
                        <thead>
                          <tr>
                            <th width="50">No.</th>
                            <th width="200">Kode Kategori</th> 
                            <th width="200">Nama Kategori</th> 
                            <th width="200">Deskripsi</th> 
                            <th width="100"></th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php $no=1; ?>
                        <?php
                        foreach ($kategori as $k) {
                        $kalimat = $k->deskripsi;
                        $jumlahkarakter = 30;
                        $cetak = substr($kalimat,$jumlahkarakter,1);
                        
                        $cetak=substr($kalimat,0,$jumlahkarakter);
                      
                        ?>
                          <tr>
                            <td><?php echo $no++ ?></td>
                            <td><?php echo $k->kode ?></td>
                            <td><?php echo $k->nama ?></td>
                            <td><?php echo $cetak ?></td>
                            <td>
                                      <a type="button" class="btn btn-danger" href="<?php echo base_url()."index.php/staff/hapus_data_kategori/".$k->id ?>"><i class="fa fa-trash-o"></i></a>
                                      <a type="button" class="btn btn-primary" href="<?php echo base_url()."index.php/staff/edit_data_kategori/".$k->id ?>"><i class="fa fa-pencil"></i></a>
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