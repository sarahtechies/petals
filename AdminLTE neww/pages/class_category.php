<?php
require_once("myclass.php");
?>

<html lang="en" style="height: auto;"><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="2595XCpozUFOwsC0Vw3fzpUjkbwO6P6fETZxRyoc">
    <title>Category &amp; Arms
</title>
    
 
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="../plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="../plugins/summernote/summernote-bs4.min.css">
    <style>
        .profile_pics {
            width: 50px;
            height: 50px;
        }

        .object-cover {
            object-fit: cover;
        }

        .profile-user-img {
            width: 100px;
            height: 100px;
        }

    </style>


</head>

<body class="sidebar-mini layout-fixed sidebar-closed sidebar-collapse" style="height: auto;">
    <div class="wrapper">
        

  
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="#" class="nav-link"><b>SchoolPortal</b></a>
        </li>
    </ul>

    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                <i class="fas fa-search"></i>
            </a>
            <div class="navbar-search-block">
                <form class="form-inline">
                    <div class="input-group input-group-sm">
                        <input class="form-control form-control-navbar" type="search" placeholder="Search"
                            aria-label="Search">
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
        <li class="nav-item">
            <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                <i class="fas fa-expand-arrows-alt"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                <i class="fas fa-user-alt"></i>
            </a>
        </li>
    </ul>
</nav>

    <?php include("nav.php");
          ?>

        
<div class="content-wrapper" style="min-height: 505px;">
    <div class="littleAlert"></div>
            
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Category &amp; Arms</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/control/dashboard">Home</a></li>
                        <li class="breadcrumb-item active">Category &amp; Arms</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>


    <section class="content">
        <div class="row">
            <div class="col-md-6 col-12">
                <div class="card card-secondary card-outline">
                    <div class="card-header">
                        <h3 class="card-title ">
                            <i class="fa fa-plus-square" aria-hidden="true"></i>
                            Add Class Category
                        </h3>
                    </div>
                    <div class="card-body pb-0">
                        <form method="POST" id="createClassCategory" >
                            <div class="form-group">
                                <label>Category</label>
                                <input  type="text" name="category" class="form-control" placeholder="Enter Class Category i.e JSS, PRY, SSS">
                            </div>
                            <div class="form-group float-right">
                                <button class="btn btn-secondary createClassCategory" name="class_category">Add Category</button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="card card-secondary card-outline">
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center">
                            <h3 class="card-title ">
                                <i class="fa fa-list-alt" aria-hidden="true"></i>
                                Class Categories
                            </h3>
                        </div>
                    </div>
                    <div class="card-body p-1">
                        <div class="table-responsive">
                            <table id="example1" class="table mb-0 table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>Category</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php $i = 1; 
                                    $sql = $con->query("SELECT * FROM class");
                                    while ($rows=mysqli_fetch_assoc($sql)) {?>
                                             
                                         <tr>
                                                    <td><?= $rows['category'] ?></td>
                                
                                        </tr>

                                   <?php } ?>
                            
                            <tr>
                                <td>JSS3</td>
                                <td>
                                    <div class="float-right">
                                        <button class="btn btn-xs btn-primary editCategory" data-data="{&quot;id&quot;:10,&quot;school_id&quot;:&quot;2&quot;,&quot;category&quot;:&quot;JSS3&quot;,&quot;created_by&quot;:&quot;20&quot;,&quot;created_at&quot;:&quot;2023-08-09T11:22:05.000000Z&quot;,&quot;updated_at&quot;:&quot;2023-08-09T11:22:05.000000Z&quot;}"><i class="fa fa-edit" aria-hidden="true"></i></button>
                                    </div>
                                </td>
                            </tr>
                        
                            
                        </tbody>
                            </table>
                        </div>
                    </div>

                </div>


            </div>

            <div class="col-md-6 col-12">
                <div class="card card-secondary card-outline">
                    <div class="card-header">
                        <h3 class="card-title ">
                            <i class="fa fa-plus-square" aria-hidden="true"></i>
                            Add Class Arm
                        </h3>
                    </div>
                    <div class="card-body pb-0">
                        <form method="POST" id="createArm">
                            <div class="form-group">
                                <label>Arm</label>
                                <input type="text"  name="arm" class="form-control" placeholder="Enter Class Arm i.e A, B, C">
                            </div>
                            <div class="form-group float-right">
                                <button class="btn btn-secondary createArm" name="class_arm">Add Arm</button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="card card-secondary card-outline">
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center">
                            <h3 class="card-title ">
                                <i class="fa fa-list-alt" aria-hidden="true"></i>
                                Class Arms
                            </h3>
                        </div>
                    </div>
                    <div class="card-body p-1">
                        <div class="table-responsive">
                            <table id="example1" class="table mb-0 table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>Arm</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody >
                                    <?php $i = 1; 
                                    $sql = $con->query("SELECT * FROM arm");
                                    while ($rows=mysqli_fetch_assoc($sql)) {?>
                                             
                                         <tr>
                                                    <td><?= $rows['arm'] ?></td>
                                
                                        </tr>

                                   <?php } ?>
                            
                        </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <div class="modal fade" id="editClassCategoryModal" aria-hidden="true" style="display: none;">
        <div class="modal-dialog modal-dialog-centered ">
            <div class="modal-content">
                <div class="modal-header">
                    <p class="modal-title text-bold">Edit Class Category (JSS3)</p>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" id="editCategoryForm">
                        <div class="form-group">
                            <label>Category</label>
                            <input type="text" name="category" class="form-control" placeholder="Enter Class Category i.e JSS, PRY, SSS">
                            <input type="hidden" name="category_id" value="10">
                        </div>
                        <div class="form-group float-right">
                            <button class="btn btn-secondary updateCategory" name="class_category">Update Category</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>


    <div class="modal fade" id="editClassArmModal">
        <div class="modal-dialog modal-dialog-centered ">
            <div class="modal-content">
                <div class="modal-header">
                    <p class="modal-title text-bold">Edit Class Arm</p>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" id="editArmForm">
                        <div class="form-group">
                            <label>Arm</label>
                            <input type="text" name="arm" class="form-control" placeholder="Enter Class Amr i.e A, B, C">
                            <input type="hidden" name="arm_id">
                        </div>
                        <div class="form-group float-right">
                            <button class="btn btn-secondary updateArm" name="class_arm">Update Arm</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

   

    
    


              

 <footer class="main-footer">
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.2.0
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="../plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="../plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="../plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="../plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="../plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="../plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="../plugins/moment/moment.min.js"></script>
<script src="../plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="../plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<!-- <script src="../dist/js/demo.js"></script> -->
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../dist/js/pages/dashboard.js"></script>
</body>
</html>
