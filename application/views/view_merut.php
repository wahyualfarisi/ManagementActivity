<div class="content-wrapper">
  <div class="container-fluid">
    <!-- Content Header (Page header) -->
  <? $this->load->view('include/front/dashboard') ?>
              <!-- /.row -->
    <section class="content-header">
      <legend>
      <a href="<?= base_url('home') ?>" class="fa fa-home"> Back To Home</a>
      </legend>
      <!--- alert message input -->
        <?php
        if($this->session->flashdata('notifinsert') ):?>
         <div class="alert alert-warning" id="notifications">
           <?php echo $this->session->flashdata('notifinsert') ?>
         </div>
       <?php endif ?>

       <h1>
           Data Komputer Merdeka Utara
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
             <th>RUANGAN  </th>
             <th>NAMA PEGAWAI </th>
             <th>CPU</th>
             <th>MONITOR</th>
             <th>PRINTER</th>
             <th>HARDISK</th>
             <th>RAM</th>
             <th>Lokasi</th>
             <th></th>
           </tr>
           </thead>
           <tbody id="show_data">
             <?php
             $no = 1;
             foreach($datamerut as $keyunit):
              ?>
              <tr>
                <td><b><?= $no++ ?></b></td>

                <td><b><?= $keyunit->nama_penempatan ?><br><br>
                       <?= $keyunit->gedung ?></b></td>

                <td><b><?= $keyunit->nama_depan.' '.$keyunit->nama_belakang ?></b></td>

                <td><b><?= $keyunit->nama_brand ?><br><br>
                       <?= $keyunit->no_inventaris_pc ?></b></td>

                <td><b><?= $keyunit->nama_brand_monitor ?><br><br>
                       <?= $keyunit->no_inventaris_monitor ?></b></td>

                <td><b><?= $keyunit->nama_brand_printer ?><br><br>
                       <?= $keyunit->no_inventaris_printer ?></b></td>

                <td><b><?= $keyunit->hardisk ?></b> </td>

                <td><b><?= $keyunit->ram ?></b> </td>

                <td><b><?= $keyunit->lokasi ?></b></td>
                <td>
                  <a href="<?= base_url('komputer/detailunit/'.$keyunit->id_unit) ?>" class="btn btn-warning" >Detail</a>
                </td>
              </tr>
           </tbody>
        <?php endforeach; ?>
         </table>

       </div>
       <!-- /.box-body -->
     </div>
     <!-- /.box -->

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
