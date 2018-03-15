<!-- jQuery -->
<script src="<?= base_url().'assets/bower_components/jquery/dist/jquery.min.js' ?>"></script>
<!-- Slimscroll -->
<script src="<?= base_url().'assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js' ?>"></script>
<!-- FastClick -->
<script src="<?= base_url().'assets/bower_components/fastclick/lib/fastclick.js' ?>"></script>
<!-- AdminLTE App -->
<script src="<?= base_url().'assets/dist/js/adminlte.min.js' ?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= base_url().'assets/dist/js/demo.js' ?>"></script>

<!-- FastClick -->
<script src="<?= base_url().'assets/bower_components/fastclick/lib/fastclick.js' ?>"></script>
<script src="<?= base_url().'assets/js/jquery.js' ?>"></script>
<script src="<?= base_url().'assets/bower_components/datatables.net/js/jquery.dataTables.min.js' ?>"></script>

<script src="<?= base_url().'assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js' ?>"></script>
<!-- Bootstrap Core JavaScript -->
<script src="<?= base_url().'assets/js/bootstrap.min.js' ?>"></script>
<script src="<?= base_url().'assets/js/sweetalert.min.js' ?>"></script>
<script>


function tampil()
{
swal({
icon: "success",
});
}

$(document).ready(function(){
$("button").click(function(){
    $(".hehe").animate({
        height: 'toggle'
    });
      tampil();
});
});

$(document).ready(function(){
$(".menu-item").mouseover(function(){
  $( ".pora" ).animate({
            fontSize: "18px",
          }, 1000);
        });
      });
$(document).ready(function(){
$(".menu-item").mouseleave(function(){
  $( ".pora" ).animate({
    fontSize: "8px",
    }, 1000);
  });
});

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

</script>
<script>
$('#notifications').slideDown('slow').delay(2500).slideUp('slow');
</script>
<script type="text/javascript">
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


<footer class="main-footer">
  <div class="pull-right hidden-xs">
    <b>Version</b> 1.0.0
  </div>
  <strong>Copyright &copy; 2017 <a href="#">Wahyu Alfarisi</a>.</strong> All rights
  reserved.
</footer>
</body>
</html>
