<?php

require_once("myclass.php");
?>


<html lang="en" style="height: auto;"><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="Xuhfrue3tdeNBelC1YnLWBtisMUYwYqokGWlR1da">
    <title>    Class Result
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

    <link rel="icon" href="https://portal.schoolpetal.com/assets/img/favicon.png">

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

        
        <div class="content-wrapper" style="min-height: 553.816px;">
            <div class="littleAlert" style="display: none;">
        <div class="alert bg-danger" style="position:fixed; top:55px; right:15px; z-index:1">
            <i class="icon fe fe-danger  text-white"> Pls select a class to see result  </i>
        </div>
    </div>
            

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Class Result</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/control/dashboard">Home</a></li>
                        <li class="breadcrumb-item active">Class Result</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>


    <section class="content">
        <div class="container-fluid">
            <div class="row">

                <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <form id="class_form">
                                    <form method="POST"></form>
                                    <div class="form-group">
                                        <label>Select Class</label>
                                           <select name="category" class="form-control select2bs4">
                                       <option disabled selected>Select Class</option>
                                   <?php $i=1; $sql = $con->query("SELECT * FROM class") ;
                                 while($rows = $sql->fetch_assoc())  {
                                    echo '<option value="'.$rows['sn'].'">'.$rows['category'].'</option>';
                                 } ?>
                                </select>
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-secondary float-right">Check Result</button>
                                    </div>
                                </form>
                            </div>
                        </div>

                    <div id="res_body">

                    </div>
                </div>
            </div>
        </div>
    </section>



    <div class="modal fade" id="updateRemark">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <p class="modal-title text-bold">Update Remark (Thomas Onyemechi)</p>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="">
                        <div class="form-group">
                            <label>Principal Remark</label>
                            <input type="text" name="principal" class="form-control">
                            <input type="hidden" name="id">
                        </div>
                        <div class="form-group">
                            <label>Teacher Remark</label>
                            <input type="text" name="teacher" class="form-control">
                        </div>
                        <div class="form-group">
                            <button type="button" class="btn btn-secondary float-right updateRemark">Update</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>



    
    <!-- <script>
        $(function() {

            $.ajaxSetup({
                headers: {
                    'Authorization': `Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiODJkYzBkYjkzMGZlMDZhOWI2NjNlNWEyZjJkM2MxMTc2ZTc5NWExNWMyY2RiMWE5MTM4NDFkMzM4ZjQxOThjYzc3YzViODFiZmU5YTBlMjgiLCJpYXQiOjE2OTI3MDE0MzEuNTY1NjcsIm5iZiI6MTY5MjcwMTQzMS41NjU2NzgsImV4cCI6MTcyNDMyMzgzMS41MjY1NjIsInN1YiI6IjIwIiwic2NvcGVzIjpbXX0.ld2Nm3AauwywPVUopzO7UEKEvphSR740cICXdUXuHH684VHP0pFseOxN2_EY3QuinBYGn-7XvTs5CMOKWrYP1knn183aI5XGOzecnIfFJ9hABW3lX_GJ_dgEKZ4PvFvwZxGpnLYSR2ZDCj8YartaBnqidMDtGV0tx5RZ4yw5ivFcMc0sjr37VKe_cZviPRqRZvEV3c3i8I1vqhviiAVh3DBvYcCRbRxAkHVlMTfmNupa5gmC2wOWCUyoby2o2DdtpuwePSnygvftwOgCyGDpszmHvVVdDdJjkB2LPU3iSXDk5OqUUxw5O94qYHJ7FrtW8a_I_u2-rZ30zkBDqhqermrTTN-DeT14wpKDlBeITxjoL7Hszh1RSvqQ79RFaf10nGq5DSXeUoXFw99Xu-hfL5cFdEK2E0_1Ibk3QbRmSP0tYo4tRnOWT1IzbX-rxS0Esvotqsy3jbcHJJWVzUDI7u1r22CN26wIzW6wlJisHmvjzsS2DSCOdXlq2AbdDbctfiYeZAaJeJ4-yBsZEPi9EiTt5hoGZXhvrheHzgGYAWTkrv_mGOropK9U-EfqoD8l1cgNEaO8kdEG2iFBiYq0e1vp5lhy0g9EoULYbX3bl6kOgV7YkCT4VksrwNS55lC18XisDCrKphgOfPyNoTGGp4htw4l9a3gdJhD3Se13Ctk`
                }
            });


            $('#class_form').on('submit', function(e) {
                e.preventDefault();
                student = $('#clases').val();
                location.href = `/control/result/class/${student}`
            })

            function fetchClasses() {
                $.ajax({
                    method: 'get',
                    url: api_url+'get_class'
                }).done(function (res) {
                    console.log(res);
                    li = $('#clases')
                    li.html(`<option selected disabled>...Select Class...</option>`);
                    res.data.forEach(cla => {
                        li.append(`<option value="${cla.id}">${cla.class}</option>`)
                    });
                }).fail(function(res) {
                    console.log(res);
                })
            }

            fetchClasses();



            function checkResult()
            {
                class_id = `0`
                if(class_id == 0){ littleAlert('Pls select a class to see result', 1); return; }
                $.ajax({
                    method: 'get',
                    url: api_url+`class/result/${class_id}`
                }).done(function(res) {
                    console.log(res);
                    res_body = $('#res_body')
                    res_body.html('');
                    if(res.data.length == 0) {
                        littleAlert('No result found in this class', 1); return;
                    }
                    res.data.forEach(sum => {
                        res_body.append(ResultTemplate(sum, ''))
                    });

                    res_body.append(`
                        <a href="/control/result/print/0" target="_blank" class="mb-3 btn-lg float-right btn btn-secondary"><i class="fa fa-print" aria-hidden="true"></i> Print All Reuslt</a>
                    `);
                }).fail(function(res) {
                    console.log(res);
                    parseError(res.responseJSON);
                })
            }

            checkResult();
        });
    </script> -->


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
<!-- AdminLTE dashboard demo (This is only for demo purposes) --

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