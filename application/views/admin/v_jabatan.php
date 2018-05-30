        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Data Jabatan</h3>
              </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_content">
                    <div class="row">
                      <a type="button" href="<?=base_url('index.php/Admin/tambah_data_jabatan'); ?> " class="btn btn-round btn-primary"><i class="fa fa-plus">
                       Tambah</i></a>
                      <table id="datatable" class="table table-striped table-bordered" >
                        <thead>
                          <tr>
                            <th width="50">No.</th>
                            <th width="200">Nama Jabatan</th> 
                            <th width="100"></th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php $no=1; ?>
                        <?php
                        foreach ($jabatan as $j) {
                        ?>
                          <tr>
                            <td><?php echo $no++ ?></td>
                            <td><?php echo $j->jabatan ?></td>
                            <td>
                                      <a type="button" class="btn btn-danger" href="<?php echo base_url()."index.php/Admin/hapus_data_jabatan/".$j->id ?>"><i class="fa fa-trash-o"></i></a>
                                      <a type="button" class="btn btn-primary" href="<?php echo base_url()."index.php/Admin/edit_data_jabatan/".$j->id ?>"><i class="fa fa-pencil"></i></a>
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