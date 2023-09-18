<?php
require_once("myclass.php")
?>


<html lang="en" style="height: auto;"><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="s2etiakUqY7UwoS4070E6Xo5fKjlByKdECkVJpma">
    <title>Guardians
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

         <?php include("nav.php");
         ?>
        
        <div class="content-wrapper" style="min-height: 505px;">
            <div class="littleAlert"></div>
            
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Guardians</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/control/dashboard">Home</a></li>
                        <li class="breadcrumb-item active">Guardians</li>
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
                            <i class="fa fa-plus-square" aria-hidden="true"></i>
                            Register Guardian
                            
                        </h3>
                    </div>
                    <div class="card-body">
                        <form method="POST" class="row">
                            <div class=" col-md-4 form-group">
                                <label>Name</label>
                                <input type="text" name="name" class="form-control" placeholder="Gurdians name">
                            </div>
                            <div class=" col-md-4 form-group">
                                <label>Home Address</label>
                                <input type="text" name="address" class="form-control" placeholder="Lekki, Nigeria">
                            </div>
                            <div class=" col-md-4 form-group">
                                <label>Email Address</label>
                                <input type="email" name="email" class="form-control" placeholder="mail@gmail.com">
                            </div>
                            <div class=" col-md-4 form-group">
                                <label>Phone Number</label>
                                <input type="text" name="phone" class="form-control" placeholder="090000000000">
                            </div>
                            <div class=" col-md-4 form-group">
                                <label>State of Origin</label>
                                <input type="text" name="state" class="form-control" placeholder="Lagos">
                            </div>
                            <div class=" col-md-4 form-group">
                                <label>L.G.A</label>
                                <input type="text" name="lga" class="form-control" placeholder="ikeja">
                            </div>

                            <div class="col-md-12">
                                <button class="btn btn-secondary float-right registerGuardian" name="AddParents">Register Gurdian</button>
                            </div>
                        </form>
                    </div>



                </div>


                <div class="card card-secondary card-outline">
                    <div class="card-header">
                        <h3 class="card-title ">
                            <i class="fa fa-list-alt" aria-hidden="true"></i>
                            Guardians List
                        </h3>
                    </div>
                    <div class="card-body p-1">
                        <div class="table-responsive">
                            <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer"><div class="row"><div class="col-sm-12 col-md-6"><div class="dt-buttons btn-group flex-wrap">          <button class="btn btn-secondary buttons-copy buttons-html5" tabindex="0" aria-controls="example1" type="button"><span>Copy</span></button> <button class="btn btn-secondary buttons-csv buttons-html5" tabindex="0" aria-controls="example1" type="button"><span>CSV</span></button> <button class="btn btn-secondary buttons-excel buttons-html5" tabindex="0" aria-controls="example1" type="button"><span>Excel</span></button> <button class="btn btn-secondary buttons-pdf buttons-html5" tabindex="0" aria-controls="example1" type="button"><span>PDF</span></button> <button class="btn btn-secondary buttons-print" tabindex="0" aria-controls="example1" type="button"><span>Print</span></button> </div></div><div class="col-sm-12 col-md-6"><div id="example1_filter" class="dataTables_filter"></div></div></div><div class="row"><div class="col-sm-12"><table id="example1" class="table mb-0 table-bordered table-hover table-striped dataTable no-footer" role="grid" aria-describedby="example1_info">
                                <thead>
                                    <!-- <tr role="row"><th class="sorting sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="#: activate to sort column descending" style="width: 80.1719px;">#</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Name: activate to sort column ascending" style="width: 158.281px;">Name</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Email: activate to sort column ascending" style="width: 155.469px;">Email</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Phone: activate to sort column ascending" style="width: 167.656px;">Phone</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Address: activate to sort column ascending" style="width: 194.438px;">Address</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label=": activate to sort column ascending" style="width: 59.9844px;"></th></tr> -->
                                <tr>
                                    <th colspan="12">sn</th>
                                    <th colspan="12">name</th>
                                    <th colspan="12">address</th>
                                    <th colspan="12">email</th>
                                    <th colspan="12">phone</th>
                                    <th colspan="12">state</th>
                                    <th colspan="12">lga</th>
                                </tr>
                                </thead>
                                <tbody id="guardian_body_list">
                                     <?php $i=1; $sql = $con->query("SELECT * FROM  parents");
                                        while($rows = mysqli_fetch_assoc($sql)){ ?>

                                             <tr>
                                                  <td colspan="12"><?=$i++ ?></td>
                                        <td colspan="12"><?=$rows['name'] ?></td>
                                         <td colspan="12"><?=$rows['address'] ?></td>
                                         <td colspan="12"><?=$rows['email'] ?></td>
                                          <td colspan="12"><?=$rows['phone'] ?></td>
                                           <td colspan="12"><?=$rows['state'] ?></td>
                                            <td colspan="12"><?=$rows['lga'] ?></td>
                                    </tr>
                                       <?php }

                                    ?>

                                <!-- <tr class="odd"><td valign="top" colspan="6" class="dataTables_empty">No data available in table</td></tr></tbody> -->
                            </table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="example1_info" role="status" aria-live="polite">Showing 0 to 0 of 0 entries</div></div><div class="col-sm-12 col-md-7"></div></div></div>
                        </div>

                        <div id="page_links">

                        </div>
                    </div>

                </div>



            </div>

        </div>
    </section>


    <script src="https://portal.schoolpetal.com/assets/plugins/jquery/jquery.min.js"></script>

    <script>
        $(function() {
         //   $.ajaxSetup({
                headers: {
                    'Authorization': `Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiZTdkNjVmNjEyOWFkZjllMDJkNmQ1NWQzMmUwZGZkMDkxYThhMDJhNGFjYWExMzcwMzRjZjJmMzg3NzY4ZmNkMzMxZWIxZTc0YzkzOGFmNDciLCJpYXQiOjE2OTE1Nzc5NzQuOTczNTAzLCJuYmYiOjE2OTE1Nzc5NzQuOTczNTEzLCJleHAiOjE3MjMyMDAzNzQuOTUzMzA1LCJzdWIiOiIyMCIsInNjb3BlcyI6W119.W6wUy1KDdlCedwLwHoVn2axviY-upz-f3Zh_w3lg6zvn8XeOKcFDNIRwe5yp6awIP0PDN0ufroJmwTN9C1PZDbQM9MuZPQYiM9_iljkt6-f1u-V5sq5LF4MVkiGiwhFz3h2YBabQdjNecVXNKPVFEQwrY5ywOic2-sWu4e5J5ZDGZ58CxhbQyOo3v1sjsSoQm3VsO_Dg_JjVBPJQttZ0-ZO3tSgV1GpAlzgsdH5xx7ZkDYA_UOVn2eiD73Fv09_Ony5ceJQAAEmpjD6MQpeM4Av-woCRkzqULeWj8mjMeKlxR7Bx3elzlPKAayv8u1zTOicwilEg1nVWbbn2q7qZnAapke2QuoK9qwnWCWwHKCXLNDZtt3GG435zMqFJ8AqtkxfonS05-SsraGF4BcpT13gXMGfK5jtXF4xuHYEHVaxCc5JXVOWCS-TBAqxpI0R01OySAQynZL7tdEBBFOslaXoNpUMKNIjwqKK0U4LCpaltMhz5jlADe3JjtouUrH8aCD-eqpySJ67nJQ5GGX40uVxbZZaBYQsSL52q8NJMlNh_13v61ANAXQ_sMWZzR9x5Jd5lw0vzqC9nbEPXtr8TZBLSWtEZsrrtN0HRcxB1YNazV8TN3D1SOnSsaOoXd1PYz9msBjNHwiMgVbjgP9fKSPP9usQgzw8PTiCQpqzWToA`
                }
            });


            function fetchParentSummary()
            {
                page = '1'
                $.ajax({
                    method: 'get',
                    url: api_url+'fetch_guardians_info_summmary?page='+page
                }).done(function(res) {
                    body = $('#guardian_body_list');
                    body.html(``)
                    res.data.data.map((guard, index) => {
                        body.append(`
                            <tr>
                                <td>${index+1 + ((page-1) * 100)}</td>
                                <td>${guard.guardian_name}</td>
                                <td>${guard.guardian_email}</td>
                                <td>${guard.guardian_phone}</td>
                                <td>${guard.guardian_address}</td>
                                <td> <a href="/control/guardian_profile/${guard.id}"> Profile <i class="fa fa-arrow-circle-right"></i> </a> </td>
                            </tr>
                        `)
                    })

                    link_body = $('#page_links')
                    link_body.html(dropPaginatedPages(res.data.links));


                }).fail(function (res) {
                })
            }


            $('#registerGuardian').on('submit', function(e) {
                e.preventDefault();
                form = $(this);

                name = $(form).find('input[name="name"]').val();
                address = $(form).find('input[name="address"]').val();
                email = $(form).find('input[name="email"]').val();
                phone = $(form).find('input[name="phone"]').val();
                state = $(form).find('input[name="state"]').val();
                lga = $(form).find('input[name="lga"]').val();

                if(!name || !address || !email || !phone || !phone){
                    littleAlert('All fields are required', 1); return;
                }

                $.ajax({
                    method: 'post',
                    url: api_url+'create_guardian_profile',
                    data: {
                        guardian_name: name,
                        guardian_address: address,
                        guardian_email: email,
                        guardian_phone: phone,
                        state: state,
                        lga: lga,
                    },
                    beforeSend:() => {
                        btnProcess('.registerGuardian', 'Register Guardian', 'before')
                    }
                }).done(function(res) {
                    littleAlert(res.message);
                    btnProcess('.registerGuardian', 'Register Guardian', 'after')
                    body = $('#guardian_body_list');
                    body.prepend(`
                        <tr>
                            <td>#</td>
                            <td>${name}</td>
                            <td>${email}</td>
                            <td>${phone}</td>
                            <td>${address}</td>
                            <td> <a href="#"> Profile<i class="fa fa-arrow-circle-right"></i> </a> </td>
                        </tr>
                    `)

                    fetchParentSummary();
                    form[0].reset();


                }).fail(function (res) {
                    parseError(res.responseJSON);
                    btnProcess('.registerGuardian', 'Register Guardian', 'after')
                })
            })






            setTimeout(() => {
                $("#example1").DataTable({
                    "responsive": true, "lengthChange": false, "autoWidth": false,
                    "buttons": ["copy", "csv", "excel", "pdf", "print"],
                    "paging": false,
                    "searching": true,
                    "ordering": true,
                    "info": true,
                    "autoWidth": true,
                    "responsive": false,
                }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            }, 2500);

            fetchParentSummary();
        })
    </script>


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