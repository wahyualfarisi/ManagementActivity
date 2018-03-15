<?php
$data['title'] = 'Edit Penempatan';
$this->load->view('include/back/header', $data) ?>
<div class="content-wrapper"><br>
         <div class="box box-success">
           <div class="box-header with-border">
             <h3 class="box-title">Edit Data</h3>
           </div>
           <div class="box-body">
             <?php
             foreach($penempatan as $key) :
              ?>
             <form  action="<?= base_url('admin/ruangan/updateruangan') ?>" method="post">
                <!-- id hidden -->
                <input type="hidden" name="id_penempatan" value="<?= $key->id_penempatan ?>">
                 <div class="col-xs-3">
                          <input class="form-control input-xs" name="nama_penempatan"
                          value="<?= $key->nama_penempatan ?>"
                          type="text" placeholder="Nama penempatan" required >
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
