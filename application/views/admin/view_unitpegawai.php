<div class="content-wrapper"><br>
  <!-- isi Konten -->
  <div class="box">
           <div class="box-header">
             <h3 class="box-title">All Data Unit Pegawai</h3>
           </div>
           <!-- /.box-header -->
           <div class="box-body">
             <table id="example1" class="table table-bordered table-striped">
               <thead>
               <tr>
                 <th>No</th>
                 <th>Nama Pegawai</th>
                 <th>Ruangan</th>
                 <th>Merk Pc</th>
                 <th>Merk Printer</th>
                 <th>Merk Monitor</th>
                 <th></th>
               </tr>
               </thead>
               <tbody>
                <?php
                $no = 1;
                foreach($unit as $key) :
                 ?>
               <tr>
                 <td><?= $no++ ?></td>
                 <td><?= $key->nama_depan.' '.$key->nama_belakang ?></td>
                 <td><?= $key->nama_penempatan ?></td>
                 <td><?= $key->nama_brand ?></td>
                 <td><?= $key->nama_brand_printer ?></td>
                 <td><?= $key->nama_brand_monitor ?></td>
                 <td>
                   <a href="<?= base_url('admin/unitpegawai/detailunit/'.$key->id_unit) ?>" class="btn btn-warning">Detail</a>
                   <a href="<?= base_url('admin/unitpegawai/editunit/'.$key->id_unit) ?>" class="btn btn-success">Edit</a>
                   <a href="<?= base_url('admin/unitpegawai/deleteunit/'.$key->id_unit) ?>" onclick="return confirm('Anda ingin mengapus ? ?')" class="delete-link btn btn-danger">Hapus</a>
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
