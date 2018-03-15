<div class="content-wrapper">
  <div class="container-fluid">
    <!-- Content Header (Page header) -->
    <?php $this->load->view('include/front/dashboard') ?>
    <h3>
        Print Data Komputer
      <small>Sekretariat Wakil Presiden</small>
    </h3>
    <section class="laporanqu content">
          <div class="row ">
            <div class="col-md-6">
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title">Merdeka Selatan</h3>
                  <h5> <a href="<?= base_url('laporan/printAllmersel')  ?>" target="_blank" class="pull-right">Print Semua</a> </h5>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <table class="table table-bordered">
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Lokasi</th>

                      <th style="width: 40px">Print</th>
                    </tr>
                    <?php

                    $no = 1;
                    foreach($gedungmersel as $keypenempatan):


                     ?>
                    <tr>
                      <td><?= $no++ ?></td>
                      <td><?= $keypenempatan->gedung ?></td>

                      <td> <a href="<?= base_url('laporan/printonegedung?gedung='.$keypenempatan->gedung)  ?>" target="_blank" class="btn btn-info btn-xs" >Print</a> </td>
                    </tr>

                  <?php endforeach; ?>

                  </table>
                </div>
                <!-- /.box-body -->
                <div class="box-footer clearfix">
                  <ul class="pagination pagination-sm no-margin pull-right">
                    <li><a href="#">&laquo;</a></li>
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">&raquo;</a></li>
                  </ul>
                </div>
              </div>
            </div>
              <!-- /.box -->
              <div class="col-md-6">
                <div class="box">
                  <div class="box-header with-border">
                    <h3 class="box-title">Merdeka Utara</h3>
                  </div>

                  <!-- /.box-header -->
                  <div class="box-body">
                    <table class="table table-bordered">
                      <tr>
                        <th style="width: 10px">#</th>
                        <th>Lokasi</th>
                        <th style="width: 40px">Print</th>
                      </tr>
                      <?php
                      $no = 1;
                      foreach($gedungmerut as $keymerut):
                       ?>
                       <tr>
                         <td><?= $no++ ?></td>
                         <td><?= $keymerut->gedung ?></td>
                         <td> <a href="<?= base_url('laporan/printonegedung?gedung='.$keymerut->gedung)  ?>" target="_blank" class="btn btn-danger btn-xs">Print</a> </td>
                       </tr>
                     <?php endforeach; ?>
                    </table>
                  </div>
                  <!-- /.box-body -->
                  <div class="box-footer clearfix">
                    <ul class="pagination pagination-sm no-margin pull-right">
                      <li><a href="#">&laquo;</a></li>
                      <li><a href="#">1</a></li>
                      <li><a href="#">2</a></li>
                      <li><a href="#">3</a></li>
                      <li><a href="#">&raquo;</a></li>
                    </ul>
                  </div>
                </div>
                <!-- /.box -->
            </div>
          </div>
        </div>
      </div>
