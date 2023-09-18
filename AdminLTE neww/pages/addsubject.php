<?php

require_once("myclass.php");

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="f9b3rPKeoiIjzU3uCeYG3gKEWkcYDupFOqJcEGeh">
    <title>Subjects
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

<body class="hold-transition sidebar-mini layout-fixed">
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

        
        <div class="content-wrapper">
            <div class="littleAlert"></div>
            
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Subjects</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/control/dashboard">Home</a></li>
                        <li class="breadcrumb-item active">Subjects</li>
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
                        <h3 class="card-title">
                            <i class="fas fa-plus-square"></i>
                            Add Subject
                        </h3>
                    </div>
                    <div class="card-body">
                        <form method="POST" id="addSubjects">
                            <div class="form-group">
                                <label>Subject</label>
                                <input type="text" name="subject" class="form-control" placeholder="Enter Subject name i.e Mathematics, Biology">
                            </div>
                            <div class="form-group mb-0 float-right">
                                <button class="btn btn-secondary addSubject" name="addsubjects">Add Subject</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-12">
                <div class="card card-secondary card-outline">
                    <div class="card-header">
                        <h3 class="card-title">
                            <i class="fa fa-list-alt" aria-hidden="true"></i>
                            Subject List
                        </h3>
                    </div>
                    <div class="card-body p-1">
                        <div class="table-responsive">
                            <table id="example1" class="table mb-0 table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>Subject</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i=1; $sql = $con->query("SELECT * FROM  subjects");
                                        while($rows = mysqli_fetch_assoc($sql)){ ?>

                                             <tr>
                                        <td colspan="12"><?=$rows['subject'] ?></td>
                                    </tr>
                                       <?php }

                                    ?>
                                   
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <div class="modal fade" id="editSubjectModal">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal">
            <div class="modal-content">
                <div class="modal-header">
                    <p  class="modal-title text-bold">Edit Subject (Subject)</p>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" id="editSubjectForm">
                        <div class="form-group">
                            <label>Subject</label>
                            <input type="text" name="subject" class="form-control" placeholder="Enter Subject name i.e Mathematics, Biology">
                            <input type="hidden" name="subject_id">
                        </div>
                        <div class="form-group mb-0 float-right">
                            <button class="btn btn-secondary" id="updateSubject">Update Subject</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>


    <script src="https://portal.schoolpetal.com/assets/plugins/jquery/jquery.min.js"></script>

    <!-- <script>
        $(function () {

            // $.ajaxSetup({
                headers: {
                    'Authorization': `Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiYjBiNjRlNWJiNDI1NDc3ZjU4ODAwMzZmYWNiZjgyY2Y1NjZhOTJiMjc3MDBiNDQwZTNmMmFkNzI1YTIwOWFhZGMyOGZiMjQwYWNhMGIxYjgiLCJpYXQiOjE2OTIwMTM1MTEuNzIwODgzLCJuYmYiOjE2OTIwMTM1MTEuNzIwODkxLCJleHAiOjE3MjM2MzU5MTEuNzAzNjQ1LCJzdWIiOiIyMCIsInNjb3BlcyI6W119.CtTj7wZyLKMc6Tbf4iF1-7qXWvKdx4RtL6RLjMmWhsS044iod_FKYHnUsM7RiBa3uK-rCTCbY5pS-o3yWimG3hI8kjtWGoz3nOYBWKXYwctjWQprKNYXyzYpAtTnHrNqgdzs-nxMQjx7-sWOTrvirwHxbinPnNgIBeji9kad-sdI7M7EMQz9_hA1jKsPZ6uPTiELenPyA-IIYPFALyWLFFa2b76RXNAXBM1zxXeLG9pW5uG0lrIcUw5XD90kCgtFLKomL47I30Mrleeie45ND7Qn8y8p6vZ_gTlYUei0yQ9pxtOIcXPaYdDZn9qSTy-t2DIJycKfhmuH-IVSONIke_MljAdoZKlG8WPibv13rwkJn-sopT59hikH0AbHTrhULeX8QrSuzcvjxRD42jNQgjU4ZDF7CArtDd1FGjXpxuY8ZLj5HmsKhzSGRQWBQhZCZCbCyVUg4nZ251dHv63IOl3v4OXUXZiypC2D7kwSSxBtuxJN0cwEeVx1WcB2XDnL3jdcS1FBry5clNosRs_o-sVm5cdi5wOPHBTasaWnunZ_NpLKhS0dCczCGgcGB_AbLzWFqB7M2pq2M5LtP_kFvNF2VZwQbGEAmW4H3CwLnfYoyyRWcbZjp1vuHKYglBCEOTqxIdpX9HJZhpbXIoY8mugIgUA44kUFkrp8R-GZxHA`
                }
            // });


            // function fetchSubject() {
                $.ajax({
                    method: 'get',
                    url: api_url+'get_all_subject',
                }).done(function(res) {
                    body = $('#subject_list_body');
                    body.html(``);
                    res.data.map(sub => {
                        body.append(`
                            <tr>
                                <td>${sub.subject}</td>
                                <td>
                                    <div class="float-right">
                                        <button class="btn btn-xs btn-primary editSubject" data-data='${JSON.stringify(sub)}'><i class="fas fa-edit"></i></button>
                                    </div>
                                </td>
                            </tr>
                        `)
                    })
                }).fail(function (res) {
                    console.log(res);
                })
            // }

            fetchSubject()

            $('body').on('click', '.editSubject', function () {
                data = $(this).data('data');
                modal = $('#editSubjectModal')
                modal.modal('show');
                $(modal).find('input[name="subject"]').val(data.subject);
                $(modal).find('input[name="subject_id"]').val(data.id);
                $(modal).find('.modal-title').html(`Edit Subject (${data.subject})`);
            })


            $('#addSubject').on('submit', function(e) {
                e.preventDefault();
                form = $('#addSubject')
                subject = $( form ).find('input[name="subject"]').val();
                if(!subject) { littleAlert('The subject field is required', 1); return; }

                $.ajax({
                    method: 'post',
                    url: api_url+'create_subject',
                    data: {
                        subject: subject
                    },
                    beforeSend: () => {
                        btnProcess('.addSubject', 'Add Subject', 'before');
                    }
                }).done(function (res) {
                    littleAlert(res.message);
                    btnProcess('.addSubject', 'Add Subject', 'after');
                    $('#subject_list_body').prepend(`
                        <tr>
                            <td>${subject}</td>
                            <td>
                                <div class="float-right">
                                    <button class="btn btn-xs btn-primary" disabled><i class="fas fa-edit"></i></button>
                                </div>
                            </td>
                        </tr>
                    `);
                    $("#addSubject")[0].reset();
                    fetchSubject();
                }).fail(function (res) {
                    parseError(res.responseJSON);
                    btnProcess('.addSubject', 'Add Subject', 'after');
                })
            })


            $('#editSubjectForm').on('submit', function (e) {
                e.preventDefault();
                form = $('#editSubjectForm')
                subject = $(form).find('input[name="subject"]').val();
                subject_id = $(form).find('input[name="subject_id"]').val();
                if(!subject) {  littleAlert('The subject field is required', 1); return }

                $.ajax({
                    method: 'post',
                    url: api_url+'update_subject',
                    data: {
                        subject: subject,
                        subject_id: subject_id
                    },
                    beforeSend: () => {
                        btnProcess('#updateSubject', 'Update Subject', 'before');
                    }
                }).done(function (res) {
                    littleAlert(res.message);
                    fetchSubject();
                    $('#editSubjectModal').modal('hide');
                    btnProcess('#updateSubject', 'Update Subject', 'after');
                }).fail(function (res) {
                    parseError(res.responseJSON)
                    btnProcess('#updateSubject', 'Update Subject', 'after');
                })
            })

        })
    </script> -->

        </div>

        <footer class="main-footer">
    <strong>Copyright &copy;  <b>SchoolPortal</b> </strong>
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
</body>

</html>
