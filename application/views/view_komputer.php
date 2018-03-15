<div class="content-wrapper">
  <div class="container-fluid">
    <!-- Content Header (Page header) -->
  <? $this->load->view('include/front/dashboard') ?>
              <!-- /.row -->
    <section class="content-header">
      <legend>
      <a href="<?= base_url('home') ?>" class="fa fa-home"> Back To Home</a>
      </legend>
      <!--- alert message input -->
        <?php
        if($this->session->flashdata('notifinsert') ):?>
         <div class="alert alert-warning" id="notifications">
           <?php echo $this->session->flashdata('notifinsert') ?>
         </div>
       <?php endif ?>
       <?php
       if($this->session->flashdata('notifdelete') ):?>
        <div class="alert alert-danger" id="notifications">
          <?php echo $this->session->flashdata('notifdelete') ?>
        </div>
      <?php endif ?>

      <?php if(isset($_GET['TombolAdd'])): ?>
            <div class="formData box box-danger">
                  <div class="box-header with-border">
                    <h2 class="box-title">Tambah Data Komputer</h2>
                  </div>
                  <div class="box-body">
                    <form class="" action="<?= base_url('komputer/addunit') ?>" method="post">
                    <!--------->
                    <div class="row">
                      <div class="col-xs-4">
                        <label>Ruangan</label>
                        <select class="form-control" name="penempatan" required>
                          <option value="0"> -- Pilih -- </option>
                          <?php
                          foreach($ruangan as $keyruangan){
                            echo "<option value='$keyruangan->id_penempatan'> $keyruangan->nama_penempatan </option>";
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
                            echo "<option value='$keypegawai->id_pegawai'> $keypegawai->nama_depan $keypegawai->nama_belakang </option>";
                          }
                           ?>
                        </select>

                      </div>
                      <div class="col-xs-4">
                        <label>Gedung</label>
                        <select class="form-control" name="gedung" required>
                          <option value="">--Pilih--</option>
                          <?php
                          foreach($gedung as $keygedung){
                            echo "<option value='$keygedung->id_gedung'> $keygedung->gedung </option>";
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
                               echo "<option value='$keycpu->id_pc' > $keycpu->nama_brand </option>";
                             }
                             ?>
                          </select>
                      </div>
                      <div class="col-xs-2">
                          <label>No. Inventaris PC </label>
                        <input type="text" class="form-control" name="inven_pc" placeholder="No. Inventaris" required>
                      </div>
                      <div class="col-xs-2">
                          <label>Tahun</label>
                        <input type="text" class="form-control" name="thn_pc" placeholder="Tahun PC" >
                      </div>
                      <div class="col-xs-2">
                          <label>RAM</label>
                        <input type="text" class="form-control" name="ram" placeholder="RAM" >
                      </div>
                      <div class="col-xs-2">
                          <label>HARDISK</label>
                        <input type="text" class="form-control" name="hardisk" placeholder="Hardisk" >
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
                            echo "<option value='$keymonitor->id_monitor'> $keymonitor->nama_brand_monitor </option>";
                          }
                           ?>

                        </select>
                      </div>
                      <div class="col-xs-2">
                          <label>No. Inventaris Monitor</label>
                        <input type="text" class="form-control" name="inven_monitor" placeholder="Merk Monitor">
                      </div>
                      <div class="col-xs-2">
                          <label>Tahun Monitor</label>
                        <input type="text" class="form-control" name="thn_monitor" placeholder="Tahun Monitor">
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
                              echo "<option value='$keyprinter->id_printer' > $keyprinter->nama_brand_printer $keyprinter->type_printer </option>";
                            }
                             ?>
                          </select>
                      </div>
                      <div class="col-xs-2">
                          <label>No. Inventaris Printer</label>
                        <input type="text" class="form-control" name="inven_printer" placeholder="Merk Monitor">
                      </div>
                      <div class="col-xs-2">
                          <label>Tahun Printer</label>
                        <input type="text" class="form-control" name="thn_printer" placeholder="Tahun Monitor">
                      </div>
                      <div class="col-xs-2">
                          <label>Merk Scanner</label>
                          <select class="form-control" name="scanner">
                            <option value="">--pilih--</option>
                            <?php
                            foreach($scanner as $keyscanner){
                              echo "<option value='$keyscanner->id_scanner' > $keyscanner->nama_brand_scanner </option>";
                            }
                             ?>

                          </select>
                      </div>
                      <div class="col-xs-2">
                          <label>No. Inventaris Scanner</label>
                        <input type="text" class="form-control" name="inven_scanner" placeholder="Merk Monitor">
                      </div>
                      <div class="col-xs-2">
                          <label>Tahun Scanner</label>
                        <input type="text" class="form-control" name="thn_scanner" placeholder="Tahun Monitor">
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
                        <input type="Submit" name="Save" class="btn btn-info btn-lg" value="Save">
                        <a href="<?= base_url('komputer') ?>" class="btn btn-danger btn-lg">Cancel</a>
                      </div>
                    </div>

                  </div>
                </form>
                  <!-- /.box-body -->
                </div>
                <!-- /.box -->
              <!-- /.box -->
            <?php endif; ?>
            <center>
            <p class="margin">note: <code>untuk mendapatkan lebih detail jumlah komputer yang digunakan oleh pengguna</code></p>
              <!-- /btn-group -->
              <form action="" method="post">

              <div class="input-group input-group-lg">
                <select class="form-control" name="nama_pengguna" required>
                  <option value="">--Pilih--</option>

                </select>
                <div class="input-group-btn">
                  <input type="submit" class="btn btn-info" name="cari" value="Cari Nama Pengguna">
                    <span class="fa fa-user"></span></button>
                </div>
             </div>
            <!-- /input-group -->
          </center>
        </form>
          <br>
          <h1>
              Semua Data Komputer
            <small>Sekretariat Wakil Presiden</small>
          </h1>
      <br>
    </section>
      <div class="box">
          <div class="box-header">
            <h3 class="box-title"></h3>
      </div>
          <!-- /.box-header -->
          <div class="box-body w3-animate-zoom ">
            <table id="example1" class="w3-left table table-bordered table-striped">
              <thead>
              <tr>
                <th>NO</th>
                <th>RUANGAN  </th>
                <th>NAMA PEGAWAI </th>
                <th>CPU</th>
                <th>MONITOR</th>
                <th>PRINTER</th>
                <th>HARDISK</th>
                <th>RAM</th>
                <th>Lokasi</th>
                <th></th>
              </tr>
              </thead>
              <tbody id="show_data">
                <?php
                $no = 1;
                foreach($unitpegawai as $keyunit):

                 ?>
                 <tr>
                   <td><b><?= $no++ ?></b></td>

                   <td><b><?= $keyunit->nama_penempatan ?><br><br>
                          <?= $keyunit->gedung ?></b></td>

                   <td><b><?= $keyunit->nama_depan.' '.$keyunit->nama_belakang ?></b></td>

                   <td><b><?= $keyunit->nama_brand ?><br><br>
                          <?= $keyunit->no_inventaris_pc ?></b></td>

                   <td><b><?= $keyunit->nama_brand_monitor ?><br><br>
                          <?= $keyunit->no_inventaris_monitor ?></b></td>

                   <td><b><?= $keyunit->nama_brand_printer ?><br><br>
                          <?= $keyunit->no_inventaris_printer ?></b></td>

                   <td><b><?= $keyunit->hardisk ?></b> </td>

                   <td><b><?= $keyunit->ram ?></b> </td>
                   <td> <b><?= $keyunit->lokasi ?></b> </td>

                   <td>
                     <a href="<?= base_url('komputer/detailunit/'.$keyunit->id_unit) ?>" class="btn btn-warning" >Detail</a>
                   </td>
                 </tr>

              </tbody>
           <?php endforeach; ?>
            </table>

          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>
      <!-- /.col -->
      </div>
      <!-- /.row -->
      <!----------------------------------->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.container -->
</div>
<!-- /.content-wrapper -->
