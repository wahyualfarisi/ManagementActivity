<div class="content-wrapper">
  <div class="container-fluid">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <legend>
      <a href="<?= base_url('komputer') ?>" class="fa fa-home"> Back To Beranda</a>
      </legend>
      <!--- alert message input -->
      <?php
      foreach($editunit as $keyedit):
       ?>
            <div class="formData box box-danger">
                  <div class="box-header with-border">
                    <h2 class="box-title">Edits Data Komputer</h2>
                  </div>
                  <div class="box-body">
                    <form class="" action="<?= base_url('komputer/updateunit') ?>" method="post">
                      <input type="hidden" name="id_unit" value="<?= $keyedit->id_unit ?>">
                    <!--------->
                    <div class="row">
                      <div class="col-xs-4">
                        <label>Ruangan</label>
                        <select class="form-control" name="penempatan">
                          <option value="0"> -- Pilih -- </option>
                          <?php
                          foreach($ruangan as $keyruangan){
                            if($keyruangan->id_penempatan == $keyedit->id_penempatan){
                                echo "<option value='$keyruangan->id_penempatan' selected> $keyruangan->nama_penempatan </option>";
                            }else{
                                echo "<option value='$keyruangan->id_penempatan'> $keyruangan->nama_penempatan </option>";
                            }

                          }
                           ?>
                        </select>
                      </div>
                      <div class="col-xs-4">
                        <label>Nama User</label>
                        <select class="form-control" name="pegawai">
                          <option value="">--Pilih--</option>
                          <?php
                          foreach($pegawai as $keypegawai){
                            if($keypegawai->id_pegawai == $keyedit->id_pegawai){
                              echo "<option value='$keypegawai->id_pegawai' selected> $keypegawai->nama_depan </option>";
                            }else{
                              echo "<option value='$keypegawai->id_pegawai'> $keypegawai->nama_depan </option>";
                            }
                          }
                           ?>
                        </select>

                      </div>
                      <div class="col-xs-4">
                        <label>Gedung/Lokasi</label>
                        <select class="form-control" name="gedung">
                          <option value="">--Pilih--</option>
                          <?php
                          foreach($gedung as $keygedung){
                            if($keygedung->id_gedung == $keyedit->id_gedung){
                              echo "<option value='$keygedung->id_gedung' selected> $keygedung->gedung </option>";
                            }else{
                              echo "<option value='$keygedung->id_gedung'> $keygedung->gedung </option>";
                            }
                          }
                           ?>
                        </select>
                      </div>

                    </div>
                    <!-------->

                    <h3 class="box-title">CPU/Dektop PC</h3>
                    <div class="row">
                      <div class="col-xs-2">
                          <label>Merk CPU/Dektop PC</label>
                          <select class="form-control" name="pc">
                            <option value="">--pilih--</option>
                            <?php
                            foreach($cpu as $keycpu){
                              if($keycpu->id_pc == $keyedit->id_pc){
                                echo "<option value='$keycpu->id_pc' selected> $keycpu->nama_brand</option>";
                              }
                              echo "<option value='$keycpu->id_pc' > $keycpu->nama_brand</option>";
                            }
                             ?>
                          </select>
                      </div>
                      <div class="col-xs-2">
                          <label>No. Inventaris PC </label>
                        <input type="text" class="form-control" name="inven_pc" placeholder="No. Inventaris" value="<?= $keyedit->no_inventaris_pc ?>" >
                      </div>
                      <div class="col-xs-2">
                          <label>Tahun</label>
                        <input type="text" class="form-control" name="thn_pc" placeholder="Tahun PC" value="<?= $keyedit->thn_pc  ?>" >
                      </div>
                      <div class="col-xs-2">
                          <label>RAM</label>
                        <input type="text" class="form-control" name="ram" placeholder="RAM" value="<?= $keyedit->ram  ?>" >
                      </div>
                      <div class="col-xs-2">
                          <label>HARDISK</label>
                        <input type="text" class="form-control" name="hardisk" placeholder="Hardisk" value="<?= $keyedit->hardisk ?>" >
                      </div>
                    </div>
                    <!----------->
                    <h3 class="box-title">Monitor</h3>
                    <div class="row">
                      <div class="col-xs-2">
                          <label>Merk Monitor</label>
                        <select class="form-control" name="monitor">
                          <option value="">--pilih--</option>
                          <?php
                          foreach($monitor as $keymonitor){
                            if($keymonitor->id_monitor == $keyedit->id_monitor){
                              echo "<option value='$keymonitor->id_monitor' selected> $keymonitor->nama_brand_monitor </option>";
                            }else{
                              echo "<option value='$keymonitor->id_monitor'> $keymonitor->nama_brand_monitor </option>";
                            }
                          }

                           ?>
                        </select>
                      </div>
                      <div class="col-xs-2">
                          <label>No. Inventaris Monitor</label>
                        <input type="text" class="form-control" name="inven_monitor" placeholder="Merk Monitor" value="<?= $keyedit->no_inventaris_monitor ?>" >
                      </div>
                      <div class="col-xs-2">
                          <label>Tahun Monitor</label>
                        <input type="text" class="form-control" name="thn_monitor" placeholder="Tahun Monitor" value="<?= $keyedit->thn_monitor ?>" >
                      </div>
                    </div>
                    <!------------>
                    <h3 class="box-title">Printer  & Scanner</h3>
                    <div class="row">
                      <div class="col-xs-2">
                          <label>Merk Printer</label>
                          <select class="form-control" name="printer">
                            <option value="">--pilih--</option>
                            <?php
                            foreach($printer as $keyprinter){
                              if($keyprinter->id_printer == $keyedit->id_printer){
                                echo "<option value='$keyprinter->id_printer' selected> $keyprinter->nama_brand_printer </option>";
                              }
                              echo "<option value='$keyprinter->id_printer' > $keyprinter->nama_brand_printer </option>";
                            }

                             ?>
                          </select>
                      </div>
                      <div class="col-xs-2">
                          <label>No. Inventaris Printer</label>
                        <input type="text" class="form-control" name="inven_printer" placeholder="Merk Monitor" value="<?= $keyedit->no_inventaris_printer ?>" >
                      </div>
                      <div class="col-xs-2">
                          <label>Tahun Printer</label>
                        <input type="text" class="form-control" name="thn_printer" placeholder="Tahun Monitor" value="<?= $keyedit->thn_printer  ?>" >
                      </div>
                      <div class="col-xs-2">
                          <label>Merk Scanner</label>
                          <select class="form-control" name="scanner">
                            <option value="">--pilih--</option>
                            <?php
                            foreach($scanner as $keyscanner){
                              if($keyscanner->id_scanner == $keyedit->id_scanner){
                                echo "<option value='$keyscanner->id_scanner' selected> $keyscanner->nama_brand_scanner </option>";
                              }else{
                                echo "<option value='$keyscanner->id_scanner' > $keyscanner->nama_brand_scanner </option>";
                              }
                            }
                             ?>
                          </select>
                      </div>
                      <div class="col-xs-2">
                          <label>No. Inventaris Scanner</label>
                        <input type="text" class="form-control" name="inven_scanner" placeholder="Merk Monitor" value="<?= $keyedit->no_inventaris_scanner ?>" >
                      </div>
                      <div class="col-xs-2">
                          <label>Tahun Scanner</label>
                        <input type="text" class="form-control" name="thn_scanner" placeholder="Tahun Monitor" value="<?= $keyedit->thn_scanner  ?>">
                      </div>
                    </div>
                    <!------------>
                    <h3 class="box-title">Status Komputer</h3>
                    <div class="row">
                      <div class="col-xs-2">
                          <label>Status</label>
                          <select class="form-control" name="status">
                            <option value="aktif">Aktif</option>
                            <option value="nonaktif">Tidak Aktif</option>
                          </select>
                      </div>
                    </div>
                    <!------------->
                    <div class="row">
                      <br>
                      <div class="col-xs-2">
                        <input type="Submit" name="Save" class="btn btn-info btn-lg" value="Update">
                        <a href="dataKomputer.php" class="btn btn-danger btn-lg">Cancel</a>
                      </div>
                    </div>

                  </div>
                </form>
            <?php endforeach; ?>
                  <!-- /.box-body -->
                </div>
                <!-- /.box -->
              <!-- /.box -->
        </section>
            <!-- /.content -->
    </div>
          <!-- /.container -->
</div>
          <!-- /.content-wrapper -->
