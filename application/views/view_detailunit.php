<div class="content-wrapper">
  <div class="container-fluid">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <legend>
      <a href="<?= base_url('komputer') ?>" class="fa fa-home" > Back To Data Komputer</a>
      </legend>
      <br>
<!----------------------------------------------->
<?php
if($this->session->flashdata('notifdelete') ):?>
 <div class="alert alert-success" id="notifications">
   <?php echo $this->session->flashdata('notifdelete') ?>
 </div>
<?php endif ?>
<?php
foreach($unitdetail as $key):?>
<section class="invoice">
      <!-- title row -->
      <div class="row">
        <div class="col-xs-12">
          <h2 class="page-header">
            <i class="fa fa-user"></i> Detail Data Komputer <?= $key->nama_depan.' '.$key->nama_belakang ?>
            <small class="pull-right"><b class="fa fa-location-arrow"></b></small>
          </h2>
        </div>
        <!-- /.col -->
      </div>
      <!-- info row -->
      <!-- /.row -->
      <br><br>
      <!-- Table row -->
      <div class="row">
        <div class="col-xs-12 table-responsive">
          <table class="table table-striped">
            <thead>
            <tr>
              <th>ID UNIT</th>
              <th>Nama Pegawai</th>
              <th>Ruangan</th>
              <th>Merk CPU/Dekstop PC</th>
              <th>Merk Monitor</th>
              <th>Merk Printer</th>
              <th>Merk Scanner</th>
              <th>Hardisk</th>
              <th>Ram</th>
              <th>Status</th>
            </tr>
            </thead>
            <tbody>

            <tr>
              <td><?= $key->id_unit ?></td>
              <td><?= $key->nama_depan.' '.$key->nama_belakang ?></td>
              <td><?= $key->nama_penempatan ?></td>
              <td><?= $key->nama_brand ?></td>
              <td><?= $key->nama_brand_monitor ?></td>
              <td><?= $key->nama_brand_printer ?></td>
              <td><?= $key->nama_brand_scanner ?></td>
              <td><?= $key->hardisk ?></td>
              <td><?= $key->ram ?></td>
              <td><?= $key->status ?></td>
            </tr>
            </tbody>
          </table>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
      <br>
      <div class="row">
        <!-- accepted payments column -->
        <div class="col-xs-6">
          <p class="lead">Detail PC</p>

          <div class="table-responsive">
            <table class="table table-striped">
              <tr>
                <th style="width:50%">No. Inventaris CPU/DEKSTOP PC</th>
                <td><?= $key->no_inventaris_pc ?></td>
              </tr>
              <tr>
                <th>Tahun Pc</th>
                <td><?= $key->thn_pc ?></td>
              </tr>
            </table>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-6">
          <p class="lead">Detail Monitor</p>

          <div class="table-responsive">
            <table class="table table-striped">
              <tr>
                <th style="width:50%">No. Inventaris Monitor</th>
                <td><?= $key->no_inventaris_monitor ?></td>
              </tr>
              <tr>
                <th>Tahun Monitor</th>
                <td><?= $key->thn_monitor ?></td>
              </tr>
            </table>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-6">
          <p class="lead">Detail Printer</p>

          <div class="table-responsive">
            <table class="table table-striped">
              <tr>
                <th style="width:50%">No. Inventaris Printer</th>
                <td><?= $key->no_inventaris_printer ?></td>
              </tr>
              <tr>
                <th>Tahun Printer</th>
                <td><?= $key->thn_printer ?></td>
              </tr>
            </table>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-6">
          <p class="lead">Detail Scanner</p>
          <div class="table-responsive">
            <table class="table table-striped">
              <tr>
                <th style="width:50%">No. Inventaris Scanner</th>
                <td><?= $key->no_inventaris_scanner ?></td>
              </tr>
              <tr>
                <th>Tahun Scanner</th>
                <td><?= $key->thn_scanner ?></td>
              </tr>
            </table>
          </div>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
      <!-- this row will not appear when printing -->
      <div class="row no-print">
        <div class="col-xs-12">
          <a href="<?= base_url('komputer/editunit/'.$key->id_unit) ?>" class="edit-link btn btn-warning btn-lg pull-right">Edit</a>
        </div>
      </div>
    </section>
    <!-- /.content -->
    <div class="clearfix"></div>
  </div>
<?php endforeach; ?>
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
