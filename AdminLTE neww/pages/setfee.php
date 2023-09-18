<?php 
require_once 'myclass.php';
?>


<html lang="en" style="height: auto;"><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="4z4hfSKNlea0UzdVIRmUdJjwBzc4TcIAsutfo0I1">
    <title>    Set School Fee
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
            <a href="#" class="nav-link"><b>SchoolPortal International School</b></a>
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

  <?php include('nav.php');
  ?>

        
        <div class="content-wrapper" style="min-height: 572.816px;">
            <div class="littleAlert"></div>
            
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Set Fee</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/control/dashboard">Home</a></li>
                        <li class="breadcrumb-item active">Set Fee</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>


    <section class="content">
        <div class="row">
            <div class="col-md-12 col-12">
                <div class="card card-secondary card-outline">
                    <div class="card-header">
                        <h3 class="card-title ">
                            <i class="fas fa-toolbox"></i>
                            Set school fee
                        </h3>
                    </div>
                    <div class="card-body">
                        <form method="POST" class="row" id="setSchoolFees">
                            <div class=" col-md-4 form-group">
                                <label name="feeClass">Select Class</label>
                                <select name="feeClass" class="form-control select2bs4 select2-hidden-accessible" data-select2-id="1" tabindex="-1" aria-hidden="true">
                                  
                                       <option disabled selected>Select A  Class</option>
                                   <?php $i=1; $sql = $con->query("SELECT * FROM class") ;
                                 while($rows = $sql->fetch_assoc())  {
                                    echo '<option value="'.$rows['sn'].'">'.$rows['category'].'</option>';
                                 } ?>
                                </select>
                                    
                            </div>
                            <div class=" col-md-4 form-group">
                                <label name="feeCategory">Select Fee Cateogry</label>
                                <select name="feeCategory"  id="" class="form-control select2bs4 select2-hidden-accessible" data-select2-id="3" tabindex="-1" aria-hidden="true">
                                   <option disabled selected>Select Fee Category</option>
                                   <?php $i=1; $sql = $con->query("SELECT * FROM create_fee") ;
                                 while($rows = $sql->fetch_assoc())  {
                                    echo '<option value="'.$rows['sn'].'">'.$rows['fee_category'].'</option>';
                                 } ?>
                                    </select>
                                    
                            </div>
                            <div class=" col-md-4 form-group">
                                <label>Input Amount</label>
                                <input type="number" name="feeAmmount" class="form-control" placeholder="Fee Amount">
                            </div>


                            <div class="col-12 form-group">
                                <button name="setfee" class="btn btn-secondary float-right setSchoolFees ">Set Fee</button>
                            </div>


                        </form>
                    </div>
                </div>


                <div class="card card-secondary card-outline">
                    <div class="card-header ">
                        <div class="d-flex justify-content-between m-0 p-0">
                            <h3 class="card-title fee_list_card">
                                <i class="fa fa-list-alt" aria-hidden="true"></i>
                                Student Fee
                            </h3>

                            <div class="row">
                                <form class="form-group col-12 m-0 p-0 d-flex justify-content-between " action="" id="viewFee">
                                    <select class="form-control mr-2" name="fee_cat" id="fee_cat" style="height: 30px"><option disabled="" selected="">Class </option><?php $i=1; $sql = $con->query("SELECT * FROM class") ;
                                 while($rows = $sql->fetch_assoc())  {
                                    echo '<option value="'.$rows['sn'].'">'.$rows['category'].'</option>';
                                 } ?></select>

                                    <select class="form-control mr-2" name="fee_cat" id="fee_cat" style="height: 30px"><option disabled="" selected="">Fee </option><?php $i=1; $sql = $con->query("SELECT * FROM create_fee") ;
                                 while($rows = $sql->fetch_assoc())  {
                                    echo '<option value="'.$rows['sn'].'">'.$rows['fee_category'].'</option>';
                                 } ?></select>

                                    <button class="btn btn-xs btn-secondary float-right viewFee"> View</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-1">
                        <div class="table-responsive">
                            <table id="exampl1" class="table mb-0 table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>sn</th>
                                        <th>Name</th>
                                        <th>Class</th>
                                        <th>fee</th>
                                        <th>Amount</th>
                                        <th>Discount</th>
                                        <th>Total</th>
                                       
                                    </tr>
                                </thead>
                                <tbody id="record_table">
                                    <?php 
                                    $i = 1; $sql = $con->query("SELECT * FROM  set_fee ORDER BY sn DESC");
                                        while($rows = mysqli_fetch_assoc($sql)){
                                        
                                    
                                     ?>
                                    <tr>
                                        <td><?=$i++?></td>
                                    <td><?=$pro->SqLx('students', 'sn', $rows['studentid'], 'surname') ?></td>
                                    <td><?=$pro->SqLx('class', 'sn', $rows['feeClass'], 'category') ?></td>
                                    <td><?=$pro->SqLx('create_fee', 'sn', $rows['feeCategory'], 'fee_category') ?></td>
                                    <td><?= number_format($rows['feeAmount']) ?></td>
                                    <td><?= number_format($rows['discount']) ?></td>
                                    <td><?= number_format($rows['feeAmount']-$rows['discount']) ?></td>
                                  
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>

                        <div id="page_links">

                        </div>
                    </div>

                </div>

            </div>


        </div>
    </section>




    <script src="https://portal.schoolpetal.com/assets/plugins/jquery/jquery.min.js"></script>
     
    

       
           

    


        </div>

        <footer class="main-footer">
    <strong>Copyright ©  <b>SchoolPortal</b> </strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 2.5
    </div>
</footer>

        
              
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



        <script>
            $(function() {
                $('.select2').select2()
                $('.select2bs4').select2({
                    theme: 'bootstrap4'
                })
            })
        </script>

        <script>
            $(function() {
                var Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 3000
                });
                function firstToast(icon="success", message='Done'){
                    Toast.fire({
                        icon: icon,
                        title: message
                    });
                }
            })
        </script>



<div id="sidebar-overlay"></div></div></body></html>