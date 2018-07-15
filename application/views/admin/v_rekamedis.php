          <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Data Rekam Medis</h3>
              </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_content">
                    <div class="row">
                    
                      <table id="datatable" class="table table-striped table-bordered" >
                        <thead>
                          <tr>
                            <th width="50">No.</th> 
                            <th width="50">ID</th> 
                            <th width="250">Nama Pasien</th>
                            <th width="300">Jenis Kelamin</th>
                            <th width="300">Tempat Lahir</th>
                            <th width="180">Tanggal Lahir</th>
                            <th width="250">Nomor BPJS</th>
                            <th width="300">Alamat</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php $no=1; ?>
                        <?php
                        foreach ($pasien as $r) {
                        ?>
                          <tr>
                            <td><?php echo $no++ ?></td>
                            <td><?php echo $r->id ?></td>
                            <td><?php echo $r->nama_pasien ?></td>
                            <td><?php echo $r->jk ?></td>
                            <td><?php echo $r->tempat_lahir ?></td>
                            <td><?php echo $r->tanggal_lahir ?></td>
                            <td><?php echo $r->no_bpjs ?></td>
                            <td><?php echo $r->alamat ?></td>
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