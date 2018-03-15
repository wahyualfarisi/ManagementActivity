<?php $this->load->view('include/back/header') ?>
<div class="content-wrapper"><br>
         <div class="box box-success">
           <div class="box-header with-border">
             <h3 class="box-title">Tambah Data Pegawai</h3>
           </div>
           <div class="box-body">
             <div class="row">
                 <?php if($this->session->flashdata('pegawai')){ ?>
               <div class="alert alert-warning" id="notifications"><?= $this->session->flashdata('pegawai'); ?></div>
             <? } ?>
             <?php foreach($pegawai as $key): ?>
             <form  action="<?= base_url('admin/pegawai/updatepegawai') ?>" method="post">
                <!-- id hidden -->
                <input type="hidden" name="id_pegawai" value="<?= $key->id_pegawai ?>">
                 <div class="col-xs-3">
                          <input class="form-control input-xs" name="nama_depan"
                          value="<?= $key->nama_depan ?>"
                          type="text" placeholder="Nama Depan" required >
                 </div>
                 <div class="col-xs-3">
                          <input class="form-control input-xs" name="nama_belakang"
                          value="<?= $key->nama_belakang ?>"
                          type="text" placeholder="Nama Belakang" required >
                 </div>
                 <div class="col-xs-3">
                          <input class="form-control input-xs" name="username"
                          value="<?= $key->username ?>"
                          type="text" placeholder="username" required >
                 </div>
                <div>
                         <input type="submit" name="Submit" class="btn btn-info" value="Submit">
                </div>
           </div>

             </form>
           <?php endforeach; ?>
           <!-- /.box-body -->
         </div>
         <!-- /.box -->
<?php $this->load->view('include/back/footer') ?>
