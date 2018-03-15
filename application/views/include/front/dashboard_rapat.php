<div class="row">
        <div class="col-md-12">
          <div class="box">
            <center><h3> <b>Dasboard</b> </h3></center>
            <div class="box-header with-border">
              <h3 class="box-title">
                <div><a href="#" class="btn btn-sm btn-info" data-toggle="modal" data-target="#ModalaAdd">
                  <span class="fa fa-plus"></span> Tambah Rapat</a>
                </div>
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
              if($title == 'Data Rapat') {
                $class = 'btn btn-danger';
                $active = '<i class="fa fa-caret-square-o-down fa-2x"> </i>';
              }else{
                $class = 'btn btn-info';
                $active = '';
              }
               ?>
              <div class="row">
                <div class="col-sm-3 col-xs-6">
                  <div class="description-block border-right">
                    <span class="description-percentage text-red"><?= $active ?></span>
                    <h5 class="description-header"></h5>
                    <span class="description-text">SEMUA RAPAT <br><a href="<?= base_url('rapat') ?>" class="<?= $class; ?> btn-xs">Lihat Data</a> </span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-3 col-xs-6">
                  <?php
                  if($title == 'Data Rapat Mersel') {
                    $class = 'btn btn-danger';
                    $active = '<i class="fa fa-caret-square-o-down fa-2x"> </i>';
                  }else{
                    $class = 'btn btn-info';
                    $active = '';
                  }
                   ?>
                  <div class="description-block border-right">
                    <span class="description-percentage text-red"><?= $active ?></span>
                    <h5 class="description-header"></h5>
                    <span class="description-text"> MERDEKA SELATAN <br> <a href="<?= base_url('rapat/mersel') ?>" class="<?= $class ?> btn-xs">Lihat Data</a> </span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-3 col-xs-6">
                  <?php
                  if($title == 'Data Rapat Merut') {
                    $class = 'btn btn-danger';
                    $active = '<i class="fa fa-caret-square-o-down fa-2x"> </i>';
                  }else{
                    $class = 'btn btn-info';
                    $active = '';
                  }
                   ?>
                  <div class="description-block border-right">
                    <span class="description-percentage text-red"><?= $active ?></span>
                    <h5 class="description-header"></h5>
                    <span class="description-text"> MERDEKA UTARA <br> <a href="<?= base_url('rapat/merut') ?>" class="<?= $class ?> btn-xs">Lihat Data</a> </span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-3 col-xs-6">
                  <div class="description-block">
                    <span class="description-percentage text-red"></span>
                    <h5 class="description-header"></h5>
                    <span class="description-text">BUAT LAPORAN <br><a href="<?= base_url('komputer/tidakterpakai')  ?>" class="btn btn-info btn-xs">Lihat Data</a> </span>
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

<!-- modal add rapat -->
      <div class="modal fade" id="ModalaAdd" role="dialog">
        <div class="modal-dialog">

          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Tambah Data Rapat</h4>
            </div>
            <form class="" action="<?= base_url('rapat/addaction') ?>" method="post">

            <div class="modal-body">
              <div class="form-group">
                <label>Lokasi</label>
                <select class="form-control" name="lokasi" required>
                  <option value="">--pilih--</option>
                  <?php
                  foreach($lokasi as $keylokasi){
                    echo "<option value='$keylokasi->id_lokasi'> $keylokasi->tempat - $keylokasi->lokasi </option>";
                  }
                   ?>
                </select>
              </div>
              <div class="form-group">
                <label>Pengguna</label>
                <select class="form-control" name="pengguna">
                  <?php
                  foreach($bagian as $keypengguna){
                    echo "<option value='$keypengguna->id_pengguna'> $keypengguna->bagian </option>";
                  }
                   ?>
                </select>
              </div>
              <div class="form-group">
                <label>Hari</label>
                <input type="text" class="form-control" name="hari" value="">
              </div>
              <div class="form-group">
                <label>Tanggal</label>
                <input type="date" class="form-control" name="tanggal" value="">
              </div>
              <div class="form-group">
                <label>Waktu</label>
                <input type="text" class="form-control" name="waktu" value="">
              </div>
              <div class="form-group">
                <label>uraian kegiatan</label>
                <input type="text" class="form-control" name="uraian_kegiatan" value="">
              </div>
              <div class="form-group">
                <label>Keterangans</label>
                <input type="text" class="form-control" name="keterangan" value="">
              </div>
              <div class="form-group">
                <input type="hidden" name="add_by" value="<?= $this->session->userdata('email')?>">
              </div>


            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <input type="submit" name="submit"  value="Simpan" class="btn btn-info">
            </div>
          </div>

        </form>

        </div>
      </div>
