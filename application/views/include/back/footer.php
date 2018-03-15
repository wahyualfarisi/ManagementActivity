<!-- jQuery 3 -->
<script src="<?= base_url().'assets/js/jquery.js' ?>"></script>

<script src="<?= base_url().'assets/bower_components/jquery/dist/jquery.min.js' ?>"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?= base_url().'assets/bower_components/bootstrap/dist/js/bootstrap.min.js' ?>"></script>
<!-- FastClick -->
<script src="<?= base_url().'assets/bower_components/fastclick/lib/fastclick.js' ?>"></script>
<!-- AdminLTE App -->
<script src="<?= base_url().'assets/dist/js/adminlte.min.js' ?>"></script>
<!-- Sparkline -->
<script src="<?= base_url().'assets/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js' ?>"></script>
<!-- jvectormap  -->
<script src="<?= base_url().'assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js' ?>"></script>
<script src="<?= base_url().'assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js' ?>"></script>
<!-- SlimScroll -->
<script src="<?= base_url().'assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js' ?>"></script>
<!-- ChartJS -->
<script src="<?= base_url().'assets/bower_components/Chart.js/Chart.js' ?>"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?= base_url().'assets/dist/js/pages/dashboard2.js' ?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= base_url().'assets/dist/js/demo.js' ?>"></script>

<script src="<?= base_url().'assets/bower_components/datatables.net/js/jquery.dataTables.min.js' ?>"></script>

<script src="<?= base_url().'assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js' ?>"></script>

<script src="<?= base_url().'assets/js/sweetalert.min.js'?>"></script>

<script type="text/javascript">

  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })

  jQuery(document).ready(function($){
  $('.log-link').on('click',function(){
  var getLink = $(this).attr('href');
  swal({
      title: 'Alert',
      text: 'Anda ingin Keluar?',
      html: true,
      confirmButtonColor: '#d9534f',
      showCancelButton: true,

    },function(){
      swal("Loading .. .. ..","Selamat Tinggal","success");

      window.location.href = getLink
  });
  return false;
  });
  });


</script>
<script>
$('#notifications').slideDown('slow').delay(2000).slideUp('slow');
</script>
<script type="text/javascript">
jQuery(document).ready(function($){
$('.delete-link').on('click',function(){
var getLink = $(this).attr('href');
swal({
    title: 'Alert',
    text: 'Anda Yakin Ingin Menghapus ?',
    html: true,
    confirmButtonColor: '#d9534f',
    showCancelButton: true,

  },function(){
    swal("Loading .. .. ..","Selamat Tinggal","success");

    window.location.href = getLink
});
return false;
});
});
</script>
</body>
</html>
