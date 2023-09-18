<?php
require_once("myclass.php");
?>


<html lang="en" style="height: auto;"><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="18wSn4QguaLAKAQ5WpbUyrZeIkug9m6FzqissZmt">
    <title>    Students
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

 <?php include("nav.php");
 ?>

        
        <div class="content-wrapper" style="min-height: 572.816px;">
            <div class="littleAlert"></div>
            <link rel="stylesheet" href="https://portal.schoolpetal.com/assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">


    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Students</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/control/dashboard">Home</a></li>
                        <li class="breadcrumb-item active">Students</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>


    <section class="content">
        <div class="row">
            <div class="col-md-4 offset-md-8 mb-3">
                <form action="">
                    <div class="input-group input-group-">
                        <input type="search" name="student" class="form-control form-control-sm" placeholder="Search Student">
                        <div class="input-group-append">
                            <button type="submit" class="btn btn-sm btn-default searchStudent">
                                <i class="fa fa-search"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="row" id="student_list_body">
              <?php $i=1; $sql = $con->query("SELECT * FROM students") ;
                                 while($rows = $sql->fetch_assoc())  { ?>
                            <div class=" col-lg-3 col-md-4">
                               
                                <div class="card card-secondary card-outline">
                                    <div class="card-body pb-1 box-profile">
                                        <div class="text-center">
                                            <img class="profile-user-img img-fluid img-circle" src="user.png" alt="Odinaka">
                                        </div>                                                                         
                                    <h3 class="profile-username text-center"><?= $rows['surname'] . ' '. $rows['firstname']?></h3>
                                        <p class="text-muted mb-0 text-center"><?=  $pro->getClassCategory($rows['category'])?> <sup><?= $pro->getClassArm($rows['class_arm'])?></sup>| <?= $rows['gender']?></p>
                                        <button type="button" class="btn btn-success btn-xs  btn-block"><b> <i class="fa fa-user-check"></i> Active</b></button>
                                        <div class="text-center">
                                            <a href="studentprofile.php?sn=<?=$rows['sn']?>">Go-to-profile <i class="fas fa-arrow-circle-right"></i></a>
                                
                                        </div>
                                    </div>
                                </div>
                               
                                        
                            </div>
                         <?php } ?>
                        </div>

        <div class="row">
            <div class="col-12 pageLinks"></div>
        </div>
    </section>


    <script src="https://portal.schoolpetal.com/assets/plugins/jquery/jquery.min.js"></script>

    <!-- <script>
        $(function () {
            $.ajaxSetup({
                headers: {
                    'Authorization': `Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiNGRiMzg4NDkxNTU4MWQyZmQxOGRhNzc1MDI5MjQ1M2IwNGI4Y2ZhMDYzZDBlYTgxMjM1OTYxOWNiZTQ5NjM3ZjVjYTJjNTdiNzkyYmIwZTIiLCJpYXQiOjE2OTIyNzMyMzAuODcwNTIxLCJuYmYiOjE2OTIyNzMyMzAuODcwNTMyLCJleHAiOjE3MjM4OTU2MzAuODIxNzU2LCJzdWIiOiIyMCIsInNjb3BlcyI6W119.tMoiUp0kY5FOyMtO2RHpvFGwzKor9UeXAJV1KNsqwRAcQYs5RuwqRMtx0eNlnKzC99h66u5ARwzK0H_Llrgi-reV7h1P2PzJ2v7mQSCOCV4dPxRL9nyUeFOyNk-lihixcnLfAOYhLKfBu1rcR4kytWpnptKCwT9oQ7nEODNGA_Yhm5Zzmnoig0axSzjfE93fSKweIF4Xvhg1SgohZKlofsj1r-JTJ0x-euRcgncPL8dsfT3q_kwSEhRDTfF2TwWh-7XZw9qBNoS0KuOFfkxTtp4xn-wQ2iFx6kkXDZzlGCN6p_PL26FoL8XJNt3Use9yipm1hSD2ayyrpk2haGKEDMIOuSUBVA6X-wi5GTAL1flvMqKGfnxqS-kTz4ZGpF4s2eDKr3PjL_IRwSKqPJERWFrLv_gw6mNDgEW1Yohjik7JU4cBl5MGugRZrkjmWAOS3kpxq8BAPzIZRZBAgW9VkmgQtNtK2nxZZNbdC23WPO4qkTz8oJmyvrOm4R-CV0QVvFLIuE3XejZxywCJoBgW7ElTOBJdGqRPn9LhJmUw2AT-oXqq5k3Ryc_DRKwy5Ycb4gwqWqPPtlGvONRpSKPcE86sByT70SuVu3ocjsn-A2Qxm9BNshiDwMVDDE0wD-HUdYDWxFFFnYDObk5OavEh_Ry0RBS3sJWMDgiaN9oCD0s`
                }
            });



            function fetchStudent()
            {
                page = '1'
                $.ajax({
                    method: 'get',
                    url: api_url+'get_all_student?page='+page
                }).done(function (res) {
                    body = $('#student_list_body');
                    body.html(``);
                    res.data.data.forEach(stu => {
                        btn = (stu.status == 1) ? `<button type="button" class="btn btn-success btn-xs  btn-block"><b> <i class="fa fa-user-check"></i> Active</b></button>` :
                         `<button type="button" class="btn btn-danger btn-xs  btn-block"> <b><i class="fa fa-user-times"></i> Not Active</b></button>` ;
                        body.append(`
                            <div class=" col-lg-3 col-md-4">
                                <div class="card card-secondary card-outline">
                                    <div class="card-body pb-1 box-profile">
                                        <div class="text-center">
                                            <img class="profile-user-img img-fluid img-circle"
                                                src="${api_url_root+stu.photo}" alt="${stu.firstname}">
                                        </div>
                                        <h3 class="profile-username text-center">${stu.surname + ' ' +stu.firstname}</h3>
                                        <p class="text-muted mb-0 text-center">${stu.class.class} <sup>${(stu.arm)? stu.arm.arm :''}</sup> | ${stu.sex}</p>
                                        ${btn}
                                        <div class="text-center">
                                            <a href="/control/student/${stu.id}">Go-to-profile <i class="fas fa-arrow-circle-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        `)
                    });
                    $('.pageLinks').html(dropPaginatedPages(res.data.links))
                }).fail(function (res) {
                    console.log(res);
                })
            }



            fetchStudent();

            $('.searchStudent').on('click', function(e) {
                e.preventDefault();

                btn = $(this)
                q = $('input[name="student"]').val();

                if(!q) { littleAlert('Pls add a search parameter', 1); return; }

                btn.attr('disabled', 'disabled');
                btn.html(`<span class="spinner-border spinner-border-sm" aria-hidden="true"></span>`);

                $.ajax({
                    method: 'get',
                    url: api_url+'search_student/'+q
                }).done(function(res) {
                    console.log(res);
                    btn.removeAttr('disabled');
                    btn.html(`<i class="fa fa-search"></i>`);

                    if(res.data.length == 0) {
                        littleAlert(`No result found for this search <b> '${q}' </b>`, 1);
                        return;
                    }


                    body = $('#student_list_body');
                    body.html(`<div class=" col-12"><h3>Search Result for <b>'${q}'</b></h3></div>`);
                    res.data.forEach(stu => {
                        btn = (stu.status == 1) ? `<button type="button" class="btn btn-success btn-xs  btn-block"><b> <i class="fa fa-user-check"></i> Active</b></button>` :
                         `<button type="button" class="btn btn-danger btn-xs  btn-block"> <b><i class="fa fa-user-times"></i> Not Active</b></button>` ;
                        body.append(`
                            <div class=" col-lg-3 col-md-4">
                                <div class="card card-secondary card-outline">
                                    <div class="card-body pb-1 box-profile">
                                        <div class="text-center">
                                            <img class="profile-user-img img-fluid img-circle"
                                                src="${api_url_root+'assets/img/students/user.png'}" alt="${stu.firstname}">
                                        </div>
                                        <h3 class="profile-username text-center">${stu.surname + ' ' +stu.firstname}</h3>
                                        <p class="text-muted mb-0 text-center">${stu.class.class} <sup>${(stu.arm)? stu.arm.arm :''}</sup> | ${stu.sex}</p>
                                        ${btn}
                                        <div class="text-center">
                                            <a href="/control/student/${stu.id}">Go-to-profile <i class="fas fa-arrow-circle-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        `)
                    });


                }).fail(function(res) {
                    parseError(res.responseJSON);
                    btn.removeAttr('disabled');
                    btn.html(`<i class="fa fa-search"></i>`);
                })
            })

        })
    </script> -->


        </div>

        <footer class="main-footer">
    <strong>Copyright ©  <b>SchoolPortal</b> </strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 2.5
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


        <script src="https://portal.schoolpetal.com/assets/js/adminlte.js"></script>

        <!-- <script>
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
        </script> -->



<div id="sidebar-overlay"></div></div></body></html>