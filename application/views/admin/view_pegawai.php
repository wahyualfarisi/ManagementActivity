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

             <form  action="<?= base_url('admin/pegawai/addpegawai') ?>" method="post">
                <!-- id hidden -->
                <input type="hidden" name="id_pegawai" value="">
                 <div class="col-xs-3">
                          <input class="form-control input-xs" name="nama_depan"
                          value=""
                          type="text" placeholder="Nama Depan" required >
                 </div>
                 <div class="col-xs-3">
                          <input class="form-control input-xs" name="nama_belakang"
                          value=""
                          type="text" placeholder="Nama Belakang" required >
                 </div>
                 <div class="col-xs-3">
                          <input class="form-control input-xs" name="username"
                          value=""
                          type="text" placeholder="username" required >
                 </div>
                <div>
                         <input type="submit" name="Submit" class="btn btn-info" value="Submit">
                </div>
           </div>

             </form>
           <!-- /.box-body -->
         </div>
         <!-- /.box -->
  <!-- isi Konten -->
  <div class="box">
           <div class="box-header">
             <h3 class="box-title">All Data Pegawai</h3>
           </div>
           <!-- /.box-header -->
           <div class="box-body">
             <table id="example1" class="table table-bordered table-striped">
               <thead>
               <tr>
                 <th>No</th>
                 <th>Nama Depan</th>
                 <th>Nama Belakang</th>
                 <th>Username</th>
                 <th>Action</th>
               </tr>
               </thead>
               <tbody>
              <?php
              $no = 1;
              foreach($pegawai as $key):
               ?>
               <tr>
                 <td><?= $no++ ?></td>
                 <td><?= $key->nama_depan ?></td>
                 <td><?= $key->nama_belakang ?></td>
                 <td><?= $key->username ?></td>
                 <td>
                   <a href="<?= base_url('admin/pegawai/editpegawai/'.$key->id_pegawai) ?>" class="btn btn-success">Edit</a>
                   <a href="<?= base_url('admin/pegawai/deletepegawai/'.$key->id_pegawai) ?>" onclick="return confirm('Anda ingin mengapus ? ?')" class="delete-link btn btn-danger">Hapus</a>
                 </td>
               </tr>
               <?php endforeach; ?>
               </tbody>
             </table>
           </div>
           <!-- /.box-body -->
         </div>
         <!-- /.box -->
       </div>
       <!-- /.col -->
     </div>
     <!-- /.row -->
</div>
<!-- /.col -->
</div>
<!-- /.row -->
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
<!--modal -->
