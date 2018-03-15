<div class="content-wrapper"><br>
         <div class="box box-success">
           <div class="box-header with-border">
             <h3 class="box-title">Tambah Data</h3>
           </div>
           <div class="box-body">
             <div class="row">
                 <?php if($this->session->flashdata('ruangan')){ ?>
               <div class="alert alert-warning" id="notifications"><?= $this->session->flashdata('ruangan'); ?></div>
             <? } ?>

             <form  action="<?= base_url('admin/ruangan/addruangan') ?>" method="post">
                <!-- id hidden -->
                <input type="hidden" name="id_ruangan" value="">
                 <div class="col-xs-3">
                          <input class="form-control input-xs" name="nama_penempatan"
                          value=""
                          type="text" placeholder="Nama Ruangan" required >
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
             <h3 class="box-title">Data Penempatan / Ruangan </h3>
           </div>
           <!-- /.box-header -->
           <div class="box-body">
             <table id="example1" class="table table-bordered table-striped">
               <thead>
               <tr>
                 <th>No</th>
                 <th>Ruangan</th>
                 <th>Action</th>
               </tr>
               </thead>
               <tbody>
              <?php
              $no = 1;
              foreach($ruangan as $key):
                if($key->lokasi = 'mersel'){
                  $lokasi = 'Merdeka Selatan';
                }else{
                  $lokasi = 'Merdeka Utara';
                }
               ?>
               <tr>
                 <td><?= $no++ ?></td>
                 <td><?= $key->nama_penempatan ?></td>
                 <td><?= $lokasi ?></td>
                 <td>
                   <a href="<?= base_url('admin/ruangan/editruangan/'.$key->id_penempatan) ?>" class="btn btn-success">Edit</a>
                   <a href="<?= base_url('admin/ruangan/deleteruangan/'.$key->id_penempatan) ?>" class="delete-link btn btn-danger">Hapus</a>
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
