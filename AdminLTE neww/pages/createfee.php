<?php
require_once("myclass.php");
?>



<html lang="en" style="height: auto;"><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="Xuhfrue3tdeNBelC1YnLWBtisMUYwYqokGWlR1da">
    <title>School Fee Management
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

        
        <div class="content-wrapper" style="min-height: 572.816px;">
            <div class="littleAlert"></div>
            
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Fee</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/control/dashboard">Home</a></li>
                        <li class="breadcrumb-item active">Fee</li>
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
                            Create Fee Category
                        </h3>
                    </div>
                    <div class="card-body">
                        <form method="POST" id="createFeeCategory">
                            <div class=" form-group">
                                <label>Fee Category</label>
                                <input type="text" name="fee_category" class="form-control" placeholder="School Fee">
                            </div>

                            <div class=" form-group">
                                <label>Fee Description</label>
                                <textarea name="description" class="form-control" col="2" placeholder="Describe fee category"></textarea>
                            </div>

                            <div class=" form-group">
                                <button class="btn btn-secondary float-right createFeeCategory " name="createfee">Create Fee Category</button>
                            </div>


                        </form>
                    </div>



                </div>
            </div>


            <div class="col-md-6 col-12">
                <div class="card card-secondary card-outline">
                    <div class="card-header">
                        <h3 class="card-title ">
                            <i class="fa fa-list-alt" aria-hidden="true"></i>
                            Fee Categories
                        </h3>
                    </div>
                    <div class="card-body p-1">
                        <div class="table-responsive">
                            <table class="table mb-0 table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>Fee</th>
                                        <th>Description</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody id="fee_list">
                                     <?php $i=1; $sql = $con->query("SELECT * FROM create_fee") ;
                                 while($rows = $sql->fetch_assoc())  { ?>
                            <tr>
                                <td><?= $rows['fee_category']?></td>
                                <td><?= $rows['description']?></td>
                                <td><button class="btn btn-xs float-right btn-primary editFee" data-data="{&quot;id&quot;:6,&quot;school_id&quot;:&quot;2&quot;,&quot;term_id&quot;:&quot;10&quot;,&quot;fee&quot;:&quot;Tuition Fee&quot;,&quot;description&quot;:&quot;Main Terminal School fees&quot;,&quot;created_by&quot;:&quot;20&quot;,&quot;created_at&quot;:&quot;2023-08-07T11:45:29.000000Z&quot;,&quot;updated_at&quot;:&quot;2023-08-07T11:46:31.000000Z&quot;}"><i class="fas fa-edit "></i></button></td>
                            </tr>
                             <?php }?>
                        </tbody>
                            </table>
                        </div>
                    </div>



                </div>
            </div>

        </div>
    </section>



    <div class="modal fade" id="editFeeModal" aria-hidden="true" style="display: none;">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <p class="modal-title text-bold">Edit Fee Category </p>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" id="updateFeeCategory">
                        <div class=" form-group">
                            <label>Fee Category</label>
                            <input type="text" name="fee_category" class="form-control" placeholder="School Fee">
                            <input type="hidden" name="fee_id" value="6">
                        </div>

                        <div class=" form-group">
                            <label>Fee Description</label>
                            <textarea name="description" class="form-control" col="2" placeholder="Describe fee category">Main Terminal School fees</textarea>
                        </div>

                        <div class=" form-group">
                            <button class="btn btn-secondary float-right updateFeeCategory " name="createfee">Update</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>



    <!-- <script src="https://portal.schoolpetal.com/assets/plugins/jquery/jquery.min.js"></script> -->

    <!-- <script>
        $(function() {



            $.ajaxSetup({
                headers: {
                    'Authorization': `Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiODJkYzBkYjkzMGZlMDZhOWI2NjNlNWEyZjJkM2MxMTc2ZTc5NWExNWMyY2RiMWE5MTM4NDFkMzM4ZjQxOThjYzc3YzViODFiZmU5YTBlMjgiLCJpYXQiOjE2OTI3MDE0MzEuNTY1NjcsIm5iZiI6MTY5MjcwMTQzMS41NjU2NzgsImV4cCI6MTcyNDMyMzgzMS41MjY1NjIsInN1YiI6IjIwIiwic2NvcGVzIjpbXX0.ld2Nm3AauwywPVUopzO7UEKEvphSR740cICXdUXuHH684VHP0pFseOxN2_EY3QuinBYGn-7XvTs5CMOKWrYP1knn183aI5XGOzecnIfFJ9hABW3lX_GJ_dgEKZ4PvFvwZxGpnLYSR2ZDCj8YartaBnqidMDtGV0tx5RZ4yw5ivFcMc0sjr37VKe_cZviPRqRZvEV3c3i8I1vqhviiAVh3DBvYcCRbRxAkHVlMTfmNupa5gmC2wOWCUyoby2o2DdtpuwePSnygvftwOgCyGDpszmHvVVdDdJjkB2LPU3iSXDk5OqUUxw5O94qYHJ7FrtW8a_I_u2-rZ30zkBDqhqermrTTN-DeT14wpKDlBeITxjoL7Hszh1RSvqQ79RFaf10nGq5DSXeUoXFw99Xu-hfL5cFdEK2E0_1Ibk3QbRmSP0tYo4tRnOWT1IzbX-rxS0Esvotqsy3jbcHJJWVzUDI7u1r22CN26wIzW6wlJisHmvjzsS2DSCOdXlq2AbdDbctfiYeZAaJeJ4-yBsZEPi9EiTt5hoGZXhvrheHzgGYAWTkrv_mGOropK9U-EfqoD8l1cgNEaO8kdEG2iFBiYq0e1vp5lhy0g9EoULYbX3bl6kOgV7YkCT4VksrwNS55lC18XisDCrKphgOfPyNoTGGp4htw4l9a3gdJhD3Se13Ctk`
                }
            });



            function cre() {
                $.ajax({
                    method: 'post',
                    url: api_url+'create_fee_category'
                });
            }


            function fetchFeeCategory() {
                $.ajax({
                    method: 'post',
                    url: api_url+'fetch_fee_category'
                }).done(function (res) {
                    console.log(res);
                    body = $('#fee_list');
                    body.html(``);
                    res.data.map(fee => {
                        body.append(`
                            <tr>
                                <td>${fee.fee}</td>
                                <td>${fee.description}</td>
                                <td><button class="btn btn-xs float-right btn-primary editFee" data-data='${JSON.stringify(fee)}'><i class="fas fa-edit "></i></button></td>
                            </tr>
                        `)
                    })
                }).fail(function (res) {
                    console.log(res);
                })
            }

            $('body').on('click', '.editFee', function() {
                data = $(this).data('data');
                console.log(data);
                modal = $('#editFeeModal');
                modal.modal('show');
                $(modal).find('input[name="fee_category"]').val(data.fee)
                $(modal).find('textarea[name="description"]').html(data.description)
                $(modal).find('input[name="fee_id"]').val(data.id)

            })


            fetchFeeCategory();


            $('#createFeeCategory').on('submit', function(e) {
                e.preventDefault()

                form = $(this)

                fee_category = $(form).find('input[name="fee_category"]').val()
                des = $(form).find('textarea[name="description"]').val()

                if(!fee_category || !des) { littleAlert('All fields are required', 1);  return ;}

                $.ajax({
                    method: 'post',
                    url: api_url+'create_fee_category',
                    data: {
                        fee: fee_category,
                        description: des
                    },
                    beforeSend:() => {
                        btnProcess('.createFeeCategory', 'Create Fee Category', 'before')
                    }
                }).done(function(res) {
                    littleAlert(res.message)
                    btnProcess('.createFeeCategory', 'Create Fee Category', 'after')
                    fetchFeeCategory();
                }).fail(function(res) {
                    parseError(res.responseJSON);
                    btnProcess('.createFeeCategory', 'Create Fee Category', 'after')
                })
            })

            $('#updateFeeCategory').on('submit', function (e) {
                e.preventDefault()
                modal = $('#editFeeModal');
                fee_category = $(modal).find('input[name="fee_category"]').val()
                des = $(modal).find('textarea[name="description"]').val()
                fee_id = $(modal).find('input[name="fee_id"]').val()

                if(!fee_category || !des) { littleAlert('All fields are required', 1); return; }

                console.log(des);

                $.ajax({
                    method: 'post',
                    url: api_url+'update_fee_category',
                    data: {
                        fee_id: fee_id,
                        fee: fee_category,
                        description: des
                    },
                    beforeSend:() => {
                        btnProcess('.updateFeeCategory', 'Update', 'before')
                    }
                }).done(function(res) {
                    littleAlert(res.message)
                    btnProcess('.updateFeeCategory', 'Update', 'after');
                    fetchFeeCategory();
                    modal.modal('hide');
                }).fail(function(res) {
                    parseError(res.responseJSON);
                    btnProcess('.updateFeeCategory', 'Update', 'after')

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
<!-- <script src="../dist/js/adminlte.js"></script> -->
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