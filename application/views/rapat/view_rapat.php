
<div class="content-wrapper">
  <div class="container-fluid">
    <!-- Content Header (Page header) -->
  <? $this->load->view('include/front/dashboard_rapat') ?>
              <!-- /.row -->
    <section class="content-header">
      <legend>
      <a href="<?= base_url('home') ?>" class="fa fa-home"> Back To Home</a>
      </legend>
      <!--- alert message input -->
      <?php
      if($this->session->flashdata('rapat') ){ ?>
        <div class="alert alert-success" id="notifications" >
          <?php echo  $this->session->flashdata('rapat') ?>
        </div>

      <?php } ?>

       <h1>
           Semua Data Rapat
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
             <th>Lokasi</th>
             <th>Pengguna </th>
             <th>Hari</th>
             <th>Tanggal</th>
             <th>Waktu</th>
             <th>Uraian Kegiatan</th>
             <th>Keterangan</th>
             <th>Ditambahkan Oleh</th>
           </tr>
           </thead>
           <tbody id="show_data">
             <?php
             $no = 1;
             foreach($datarapat as $keyrapat):
               if($keyrapat->lokasi == 'mersel'){
                 $lokasi = 'Merdeka Selatan';
               }else{
                 $lokasi = 'Merdeka Utara';
               }
              ?>
              <tr>
                <td><?= $no++ ?></td>
                <td><?= $keyrapat->tempat.'<br> <b>'.$lokasi ?></b></td>
                <td><?= $keyrapat->bagian ?></td>
                <td><?= $keyrapat->hari ?></td>
                <td><?= $keyrapat->tanggal ?></td>
                <td><?= $keyrapat->waktu ?></td>
                <td><?= $keyrapat->uraian_kegiatan ?></td>
                <td><?= $keyrapat->keterangan ?></td>
                <td><?= $keyrapat->add_by ?></td>
              </tr>
            <?php endforeach; ?>
           </tbody>
         </table>
       </div>
       <!-- /.box-body -->
     </div>
     <!-- /.box -->
     <!-- Modal -->
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
