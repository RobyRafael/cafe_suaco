<?php 
include('koneksi.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Cafe Suaco | Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- IonIcons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<!--
`body` tag options:

  Apply one or more of the following classes to to the body tag
  to get the desired effect

  * sidebar-collapse
  * sidebar-mini
-->
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="Dashboard.php" class="nav-link">Home</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>


      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="dashboard.php" class="brand-link">
      <img src="suaco img.jpg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">SUACO</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/account.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="profile.php" class="d-block">Profil</a>
        </div>
      </div>


      <!-- SidebarSearch Form -->
      

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="Dashboard.php" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Barang Masuk/Keluar
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./BarangMasuk.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Barang Masuk</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./BarangKeluar.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Barang Keluar</p>
                </a>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Data Pergudangan
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./DataBarang.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Barang</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./DataSupplier.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Supplier</p>
                </a>
            </ul>
          </li>
          <li class="nav-item">
            <a href="./DataStok.php" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Data Stok
              </p>
            </a>
          </li>
          <?php if ($_SESSION['level']=="admin"){?>
          <li class="nav-item">
            <a href="./DataUser.php" class="nav-link">
            <i class="nav-icon fas fa-users"></i>
              <p>
              Data Staff
              </p>
              <?php }?>
          </li>
          <li class="nav-item">
          <a class="nav-link" href="./login.php" onclick="return confirm('Yakin ingin Logout?')">
            <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>
                Logout
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="./dashboard.php">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-info">
                <div class="inner">
                  <h3>150</h3>
  
                  <p>Barang Masuk</p>
                </div>
                <div class="icon">
                  <i class="ion ion-bag"></i>
                </div>
                <a href="BarangMasuk.php" class="small-box-footer">Lihat Detail <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-success">
                <div class="inner">
                  <h3>53<!--<sup style="font-size: 20px">%</sup>--></h3>
  
                  <p>Barang Keluar</p>
                </div>
                <div class="icon">
                  <i class="ion ion-stats-bars"></i>
                </div>
                <a href="BarangKeluar.php" class="small-box-footer">Lihat Detail <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
           
            <!-- /.card -->

            <!-- /.card -->
          </div>
          <!-- /.col-md-6 -->
          <div class="row">
          <div class="col-lg-6">
            <div class="card">
              <div class="card-header border-0">
                <h3 class="card-title">DATA BARANG AKAN HABIS</h3>
              </div>
              <div class="card-body table-responsive p-0">
                <table class="table table-striped table-valign-middle">
                  <thead>
                  <th>No</th>
                    <th>Nama Barang</th>
                    <th>Stok</th>
                    <th>Kategori</th>

              
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                     $ambilsemuadatastok = mysqli_query($koneksi, "SELECT `data_barang`.`nama_barang`, 
                     `barang_masuk`.`jumlah`, `jenis_barang`.`jenis_barang` FROM barang_masuk 
                     INNER JOIN data_barang ON barang_masuk.id_barang=data_barang.id_barang
                     INNER JOIN jenis_barang ON data_barang.id_jenis_barang=jenis_barang.id_jenis 
                     WHERE `data_barang`.`jumlah` < 5
                     ORDER BY data_barang.jumlah");
    
                    $no = 1;
                    while($data=mysqli_fetch_array($ambilsemuadatastok)){
                      $nama_barang = $data['nama_barang'];
                      $jumlah = $data['jumlah'];
                      $jenis_barang = $data['jenis_barang'];
                      $batas = isset($data['batas']) ? $data['batas'] : null;

                     
                    ?>

                  <tr>
                  <td <?php if ($jumlah <= 5) { ?>style="background-color: red; opacity: 1; color:white" <?php } ?>><?=$no;?></td>
                  <td <?php if ($jumlah <= 5) { ?>style="background-color: red; opacity: 1; color:white" <?php } ?>><?=$nama_barang;?></td>
                  <td <?php if ($jumlah <= 5) { ?>style="background-color: red; opacity: 1; color:white" <?php } ?>><?=$jumlah;?></td>
                  <td <?php if ($jumlah <= 5) { ?>style="background-color: red; opacity: 1; color:white" <?php } ?>><?=$jenis_barang;?></td>
                   <td>
        
                      
                  </tr>

                  <?php
                  $no++; };
                  ?>
                  </thead>
                  <tbody>
                    
                  <tr>
                  </tbody>
                </table>
              </div>
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col-md-6 -->
          <div class="col-lg-6">
            <div class="card">
              <div class="card-header border-0">
                <h3 class="card-title">DATA REKAP</h3>
              </div>
              <div class="card-body table-responsive p-0">
                <table class="table table-striped table-valign-middle">
                  <thead>
                  <th>No</th>
                    <th>Nama Barang</th>
                    <th>Stok</th>
                    <th>Kategori</th>

              
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                     $ambilsemuadatastok = mysqli_query($koneksi, "SELECT `data_barang`.`nama_barang`, 
                     `barang_masuk`.`jumlah`, `jenis_barang`.`jenis_barang` FROM barang_masuk 
                     INNER JOIN data_barang ON barang_masuk.id_barang=data_barang.id_barang
                     INNER JOIN jenis_barang ON data_barang.id_jenis_barang=jenis_barang.id_jenis");
                    $no = 1;
                    while($data=mysqli_fetch_array($ambilsemuadatastok)){
                      $nama_barang = $data['nama_barang'];
                      $jumlah = $data['jumlah'];
                      $jenis_barang = $data['jenis_barang'];
                      $batas = isset($data['batas']) ? $data['batas'] : null;

                     
                    ?>

                  <tr>
                  <td <?php if ($jumlah <= 5) { ?>style="background-color: red; opacity: 1; color:white" <?php } ?>><?=$no;?></td>
                  <td <?php if ($jumlah <= 5) { ?>style="background-color: red; opacity: 1; color:white" <?php } ?>><?=$nama_barang;?></td>
                  <td <?php if ($jumlah <= 5) { ?>style="background-color: red; opacity: 1; color:white" <?php } ?>><?=$jumlah;?></td>
                  <td <?php if ($jumlah <= 5) { ?>style="background-color: red; opacity: 1; color:white" <?php } ?>><?=$jenis_barang;?></td>
                   <td>
        
                      
                  </tr>

                  <?php
                  $no++; };
                  ?>
                  </thead>
                  <tbody>
                    
                  <tr>
                  </tbody>
                </table>
              </div>
            </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <!--<footer class="main-footer">
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.2.0
    </div>
  </footer>
</div>-->
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE -->
<script src="dist/js/adminlte.js"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- AdminLTE for demo purposes 
<script src="dist/js/demo.js"></script> -->
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard3.js"></script>
</body>
</html>
