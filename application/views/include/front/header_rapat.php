<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?= $title; ?></title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="<?= base_url().'assets/bower_components/bootstrap/dist/css/bootstrap.min.css' ?>">
  <link rel="stylesheet" href="<?= base_url().'assets/bower_components/font-awesome/css/font-awesome.min.css' ?>">
  <link rel="stylesheet" href="<?= base_url().'assets/bower_components/Ionicons/css/ionicons.min.css' ?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url().'assets/dist/css/AdminLTE.min.css' ?>">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?= base_url().'assets/dist/css/skins/_all-skins.min.css' ?>">
  <link rel="stylesheet" href="<?= base_url().'assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css' ?>">

  <link rel="stylesheet" type="text/css" href="<?= base_url().'assets/css/sweetalert.css' ?>">
  <style media="screen">
  #notifications {
      cursor: pointer;
      position: fixed;
      right: 0px;
      z-index: 9999;
      bottom: 0px;
      margin-bottom: 22px;
      margin-right: 15px;
      min-width: 300px;
      max-width: 800px;
}
.laporanqu{
  padding-top: 40px;
}
  </style>
</head>
<!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
<body class="hold-transition skin-blue fixed layout-top-nav">
<div class="wrapper">
  <header class="main-header">
    <nav class="navbar navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <a href="dataKomputer.php" class="navbar-brand"><b>DATA</b> RAPAT</a>
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
            <i class="fa fa-bars"></i>
          </button>
        </div>
      <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
          <ul class="nav navbar-nav">
          </ul>
        </div>
        <!-- /.navbar-collapse -->
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">

          <ul class="nav navbar-nav">

<li class="dropdown notifications-menu">
  <a href="" data-toggle="dropdown">
    <i class="fa fa-bell-o"></i>
    <span class="label label-danger"><?= $jumlahtoday ?></span>
  </a>
  <ul class="dropdown-menu">
    <li class="header"><center><b><?= $jumlahtoday. ' Rapat Hari ini' ?></b></center></li>
    <li>
      <!-- inner menu: contains the actual data -->

      <ul class="menu">
        <?php
        foreach($today as $keytoday):
         ?>
        <li>
          <a href="#">
            <i class="fa fa-user text-aqua"></i> <?= $keytoday->add_by.' Menambahkan data rapat di'. $keytoday->lokasi ?>
          </a>
        </li>
      <?php endforeach; ?>
      </ul>
    </li>
    <li class="footer"><a href="<?= base_url('rapat/rapattoday') ?>">View all</a></li>
  </ul>
</li>
<!-- Tasks: style can be found in dropdown.less -->
            <li class="dropdown user user-menu">
              <!-- Menu Toggle Button -->
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <!-- The user image in the navbar-->
                <!-- hidden-xs hides the username on small devices so only the image appears. -->
                <span class="hidden-xs">Profile</span>
              </a>
              <ul class="dropdown-menu">
                <!-- The user image in the menu -->
                <li class="user-header">
                  <p>
                    <small>Hello, <b><?= $this->session->userdata('usernam') ?></b></small>
                  </p>
                </li>
                <!-- Menu Body -->
                <!-- Menu Footer-->
                <li class="user-footer">
                  <div class="pull-right">
                    <a href="<?= base_url('login/logout') ?>" class="log-link btn btn-default btn-flat">Sign out</a>
                  </div>
                </li>
              </ul>
            </li>
          </ul>
        </div>
        <!-- /.navbar-custom-menu -->
      </div>
      <!-- /.container-fluid -->
    </nav>
  </header>
  <!-- Full Width Column -->
