<div class="row">
        <div class="col-md-12">
          <div class="box">
            <center><h3> <b>Dasboard</b> </h3></center>
            <div class="box-header with-border">
              <h3 class="box-title">
                <a href="<?= base_url('komputer?TombolAdd') ?>" class="btn btn-block btn-social btn-bitbucket">
                  <i class="fa fa-plus"></i> Tambah Data
               </a>
              </h3>
              <div class="pull-right">
                <a href="<?= base_url('laporan')  ?>"  class="btn btn-block btn-social btn-google">
                   <i class="fa fa-print"></i> Buat Laporan
                </a>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-footer">
              <?php
              if($title == 'Data Komputer') {
                $class = 'btn btn-danger';
                $active = '<i class="fa fa-caret-square-o-up fa-2x"> </i>';
              }else{
                $class = 'btn btn-info';
                $active = '';
              }
               ?>
              <div class="row">
                <div class="col-sm-3 col-xs-6">
                  <div class="description-block border-right">
                    <h5 class="description-header"><?= $total_all ?></h5>
                    <span class="description-text">TOTAL KOMPUTER <a href="<?= base_url('komputer') ?>" class="<?= $class ?> btn-xs">Lihat Data</a> </span><br>
                      <span class="description-percentage text-red"><?= $active ?></span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-3 col-xs-6">
                  <?php
                  if($title == 'Data Komputer Merdeka Selatan') {
                    $class = 'btn btn-danger';
                    $active = '<i class="fa fa-caret-square-o-up fa-2x"> </i>';
                  }else{
                    $class = 'btn btn-info';
                    $active = '';
                  }
                   ?>
                  <div class="description-block border-right">
                    <h5 class="description-header"><?= $total_mersel ?> Unit</h5>
                    <span class="description-text">KOMPUTER MERSEL <a href="<?= base_url('komputer/mersel') ?>" class="<?= $class ?> btn-xs">Lihat Data</a> </span><br>
                    <span class="description-percentage text-red"><?= $active ?></span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-3 col-xs-6">
                  <?php
                  if($title == 'Data Komputer Merdeka Utara') {
                    $class = 'btn btn-danger';
                    $active = '<i class="fa fa-caret-square-o-up fa-2x"> </i>';
                  }else{
                    $class = 'btn btn-info';
                    $active = '';
                  }
                   ?>
                  <div class="description-block border-right">
                    <h5 class="description-header"><?= $total_merut ?> Unit</h5>
                    <span class="description-text">KOMPUTER MERUT <a href="<?= base_url('komputer/merut') ?>" class="<?= $class ?> btn-xs">Lihat Data</a> </span><br>
                      <span class="description-percentage text-red"><?= $active ?></span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-3 col-xs-6">
                  <?php
                  if($title == 'Data Tidak Terpakai') {
                    $class = 'btn btn-danger';
                    $active = '<i class="fa fa-caret-square-o-up fa-2x"> </i>';
                  }else{
                    $class = 'btn btn-info';
                    $active = '';
                  }
                   ?>
                  <div class="description-block">
                    <h5 class="description-header"><?= $total_nonaktif ?></h5>
                    <span class="description-text">Komputer Tidak Terpakai <a href="<?= base_url('komputer/tidakterpakai')  ?>" class="<?= $class ?> btn-xs">Lihat Data</a> </span><br>
                        <span class="description-percentage text-red"><?= $active ?></span>
                  </div>
                  <!-- /.description-block -->
                </div>
              </div>
              <!-- /.row -->
            </div>
            <!-- /.box-footer -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
