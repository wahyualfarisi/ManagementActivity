<div class="content-wrapper"><br>
         <div class="box box-success">
           <div class="box-header with-border">
             <h3 class="box-title">Tambah Data</h3>
           </div>
           <div class="box-body">
             <div class="row">
                 <?php if($this->session->flashdata('msg')){ ?>
               <div class="alert alert-warning" id="notifications"><?= $this->session->flashdata('msg'); ?></div>
             <? } ?>

             <form  action="<?= base_url('admin/merk/addcpu') ?>" method="post">
                <!-- id hidden -->
                <input type="hidden" name="id_pc" value="">
                 <div class="col-xs-3">
                          <input class="form-control input-xs" name="nama_brand"
                          value=""
                          type="text" placeholder="Nama Brand" required >
                 </div>
                 <div class="col-xs-3">
                          <input class="form-control input-xs" name="type"
                          value=""
                          type="text" placeholder="Type" required >
                 </div>
                 <div class="col-xs-3">
                         <input class="form-control input-xs" name="ket"
                         value=""
                         type="text" placeholder="Keterangan" required >
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
             <h3 class="box-title">Data Table With Full Features</h3>
           </div>
           <!-- /.box-header -->
           <div class="box-body">
             <table id="example1" class="table table-bordered table-striped">
               <thead>
               <tr>
                 <th>No</th>
                 <th>Nama Brand</th>
                 <th>Type Pc</th>
                 <th>Keterangan</th>
                 <th>Action</th>
               </tr>
               </thead>
               <tbody>
              <?php
              $no = 1;
              foreach($cpu as $key):
               ?>
               <tr>
                 <td><?= $no++ ?></td>
                 <td><?= $key->nama_brand ?></td>
                 <td><?= $key->type_pc ?></td>
                 <td><?= $key->keterangan ?></td>
                 <td>
                   <a href="<?= base_url('admin/merk/editcpu/'.$key->id_pc) ?>" class="btn btn-success">Edit</a>
                   <a href="<?= base_url('admin/merk/deletecpu/'.$key->id_pc) ?>" class="delete-link btn btn-danger">Hapus</a>
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
