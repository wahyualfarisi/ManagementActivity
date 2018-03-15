<?php
$data['title'] = 'Edit Merk Monitor';
$this->load->view('include/back/header', $data) ?>
<div class="content-wrapper"><br>
         <div class="box box-success">
           <div class="box-header with-border">
             <h3 class="box-title">Edit Data</h3>
           </div>
           <div class="box-body">
             <?php
             foreach($monitor as $key) :
              ?>
             <form  action="<?= base_url('admin/merk/updatemonitor') ?>" method="post">
                <!-- id hidden -->
                <input type="hidden" name="id_monitor" value="<?= $key->id_monitor ?>">
                 <div class="col-xs-3">
                          <input class="form-control input-xs" name="nama_brand"
                          value="<?= $key->nama_brand_monitor ?>"
                          type="text" placeholder="Nama Brand" required >
                 </div>
                 <div class="col-xs-3">
                          <input class="form-control input-xs" name="type"
                          value="<?= $key->type_monitor ?>"
                          type="text" placeholder="Type" required >
                 </div>
                 <div class="col-xs-3">
                         <input class="form-control input-xs" name="ket"
                         value="<?= $key->keterangan ?>"
                         type="text" placeholder="Keterangan" required >
                </div>
                <div>
                         <input type="submit" name="Submit" class="btn btn-info" value="Update">
                </div>
           </div>

             </form>
           <?php endforeach; ?>
           <!-- /.box-body -->
         </div>
         <!-- /.box -->
  <!-- isi Konten -->
<? $this->load->view('include/back/footer') ?>
