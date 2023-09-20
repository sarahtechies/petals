<?php

require_once("myclass.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="fvt1ZIVyUBsVDqLujN30XYnJcPHMDzAOKFoBYXkj">
    <title>    Result Setup
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
                <link rel="stylesheet" href="https://portal.schoolpetal.com/assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">


    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Result Setup</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/control/dashboard">Home</a></li>
                        <li class="breadcrumb-item active">Result Setup</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>




    <section class="content">
        <div class="row">
            <div class="col-md-4">
                <div class="card card-secondary card-outline">
                    <div class="card-header">
                        <h3 class="card-title ">
                            <i class="fa fa-book" aria-hidden="true"></i>
                            Continous Accessment Scores
                        </h3>
                    </div>
                    <div class="card-body">
                        <form method="POST" class="row" id="updateCa">
                            <div class="col-md-4 col-6 form-group">
                                <label>CA 1</label>
                                <input type="number" name="ca1" class="form-control" placeholder="CA 1">
                            </div>
                            <div class="col-md-4 col-6 form-group">
                                <label>CA 2</label>
                                <input type="number" name="ca2" class="form-control" placeholder="CA 2">
                            </div>
                            <div class="col-md-4 col-6 form-group">
                                <label>CA 3</label>
                                <input type="number" name="ca3" class="form-control" placeholder="CA 3">
                            </div>
                            <div class="col-md-6 col-6 form-group">
                                <label>Exam</label>
                                <input type="number" name="exam" class="form-control" placeholder="Exam">
                            </div>
                            <div class="col-md-6 col-12 form-group">
                                <button class="btn btn-secondary mt-md-4 float-right updateCa" name="resultSetup">Save</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>


            <div class="col-md-4">
                <div class="card card-secondary card-outline">
                    <div class="card-header">
                        <h3 class="card-title ">
                            <i class="fa fa-book" aria-hidden="true"></i>
                            Grades Setup
                        </h3>
                    </div>
                    <div class="card-body p-1   ">

                        <form method="POST" id="update_grade">
                            <div class="table-responsive">
                                <table class="table table-striped mb-0" id="u_grad_tb">
                                    <tr>
                                        <th>Grade</th>
                                        <th>Start Score</th>
                                        <th>Remark</th>
                                    </tr>
                                    <tr>
                                        <th>A</th>
                                        <td><input type="number" name="A" class="form-control form-control-sm" style="width: 60px"></td>
                                        <td><input type="text" name="ar" value="Excellent" class="form-control form-control-sm"></td>
                                    </tr>
                                    <tr>
                                        <th>B</th>
                                        <td><input type="number" name="B" class="form-control form-control-sm" style="width: 60px"></td>
                                        <td><input type="text" name="br" value="V.good" class="form-control form-control-sm"></td>
                                    </tr>
                                    <tr>
                                        <th>C</th>
                                        <td><input type="number" name="C" class="form-control form-control-sm" style="width: 60px"></td>
                                        <td><input type="text" name="cr" value="Good" class="form-control form-control-sm"></td>
                                    </tr>
                                    <tr>
                                        <th>D</th>
                                        <td><input type="number" name="D" class="form-control form-control-sm" style="width: 60px"></td>
                                        <td><input type="text" name="dr" value="Average" class="form-control form-control-sm"></td>
                                    </tr>
                                    <tr>
                                        <th>E</th>
                                        <td><input type="number" name="E" class="form-control form-control-sm" style="width: 60px"></td>
                                        <td><input type="text" name="er" value="Poor" class="form-control form-control-sm"></td>
                                    </tr>
                                    <tr>
                                        <th>F</th>
                                        <td><input type="number" name="F" class="form-control form-control-sm" style="width: 60px"></td>
                                        <td><input type="text" name="fr" value="Fail" class="form-control form-control-sm"></td>
                                    </tr>
                                    <tr>
                                        <td colspan="3">
                                            <button class="btn btn-secondary float-right update_grade" name="GradeSet">Submit</button>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </form>
                    </div>
                </div>

            </div>

        </div>
    </section>
        




    <script src="https://portal.schoolpetal.com/assets/plugins/jquery/jquery.min.js"></script>

    <!-- <script>
        $(function() {

            $.ajaxSetup({
                headers: {
                    'Authorization': `Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiODExNjhjMmQzZWExYTk3ZDkwY2Y1ZWM5YmM4ODg1NDk2NDkwN2MzZGU3ZTkxM2I2ZjRmOWIwYTM1MTllNDZkYThkNTJiZjhhZjFmYWI5M2QiLCJpYXQiOjE2OTIwOTQyNDcuNzU1MDc2LCJuYmYiOjE2OTIwOTQyNDcuNzU1MDg0LCJleHAiOjE3MjM3MTY2NDcuNzMwMTQ2LCJzdWIiOiIyMCIsInNjb3BlcyI6W119.UYZ-g6oF_b72oGhsdGGYmuaOYUkoLP8Ax3G9S6NasFWlTkByrBhpD5gidp9h-1mleeB3OyAVXTJciC5iNg1Lzz4qDviLCFS8yOWkvdORmSGs8fYcrJjuxZV89AFVk4cNHFSS_d9di1oEPTIHvk5gQY8j71_yidRrWKh2MIcLkzAmOVNbkLxQeM4ytxxnVfeZEchqAT_uho0nkBrMMt7Tnomso6zmnS6atTrzEizNauFPJaP9WGa2Z_R3oa58vE9_ngv_x1WnwSr3Pdpa6Pk8gxFxs3trzP-2uzUt097yGwBrC0SP57g5JO0kMipige2l4Da5mcQhPDl0uPSHgG_A5DuKaa_4F4WHYdELJS2IlKWfbW3I5swDNzJ7kb919gT26sxqBlhjxQUeYmo3cVQhd1akkpAAtESw6q3Bc_B4gWLiy1uYJvFR5OS_rdDqIRH7RwYf_NLVbWlTPrefVFT5SudF4q0PK1h4zpOQ5H2OQw2DONjCfw-WXKmGulBLv0AfPiwvQFNT68bg9Co7LSdny1yOwrQOumgNUmdPj9SzEZuf3xlTH7KAsg2nDdeCZsIzYs--6-Eq9NB3M9OtKw9Hl6eEAtpyFLGJsFd038YlTpk7jWL3y7XP55Y0j-OeVbdxjNvlEWC_dOEW99KmrBpXES16_6gAiXssoZFZ6z2rpDA`
                }
            });




            $('#update_grade').on('submit', function(e) {
                e.preventDefault();
                form = $(this).find('tr'); data = [];

                form.map(tr => {
                    if(tr > 0 && tr < 7) {
                        tr = form[tr].children;
                        grade = tr[0].innerHTML;
                        score = tr[1].children[0].value;
                        remark = tr[2].children[0].value;
                        arr = { grade: grade, score: score,  remark: remark  }
                        data.push(arr);
                    }
                });

                console.log(data);

                $.ajax({
                    method: 'post',
                    url: api_url+'update/subject_remark',
                    data: {
                        data: data
                    },
                    beforeSend:() => {
                        btnProcess('.update_grade', '', 'before');
                    }
                }).done(function(res) {
                    littleAlert(res.message);
                    btnProcess('.update_grade', 'Submit', 'after');
                }).fail(function(res) {
                    parseError(res.responseJSON);
                    btnProcess('.update_grade', 'Submit', 'after');
                    console.log(res);
                })
            })



            $('#updateCa').on('submit', function(e) {
                e.preventDefault();
                form = $(this);
                ca1 = parseInt($(form).find('input[name="ca1"]').val())
                ca2 = parseInt($(form).find('input[name="ca2"]').val())
                ca3 = parseInt($(form).find('input[name="ca3"]').val())
                exam = parseInt($(form).find('input[name="exam"]').val())
                console.log(ca1, ca2, ca3, exam);
                total = ca1 + ca2 + ca3 + exam;
                if (total != 100) {
                    littleAlert('The sum of the socres must be equal to 100', 1);
                    return;
                }
                $.ajax({
                    method: 'post',
                    url: api_url + 'update_ca',
                    data: {
                        ca1: ca1,
                        ca2: ca2,
                        ca3: ca3,
                        exam: exam
                    },
                    beforeSend: () => {
                        btnProcess('.updateCa', '', 'before')
                    }
                }).done(function(res) {
                    littleAlert(res.message);
                    btnProcess('.updateCa', 'Save', 'after')
                    console.log(res);
                }).fail(function(res) {
                    console.log(res);
                    parseError(res.responseJSON);
                    btnProcess('.updateCa', 'Save', 'after')
                })
            })

            function fetchCa() {
                $.ajax({
                    method: 'get',
                    url: api_url + 'ca'
                }).done(function(res) {
                    console.log(res);
                    ca = res.data
                    form = $('#updateCa')
                    $(form).find('input[name="ca1"]').val(`${(ca) ? ca.ca1 : 0}`)
                    $(form).find('input[name="ca2"]').val(`${(ca) ? ca.ca2 : 0}`)
                    $(form).find('input[name="ca3"]').val(`${(ca) ? ca.ca3 : 0}`)
                    $(form).find('input[name="exam"]').val(`${(ca) ? ca.exam : 0}`)

                    rem = JSON.parse(res.data.remarks);

                    console.log(rem);



                    form = $('#update_grade').find('tr');

                    form.map((tr) => {
                        ind = tr-1;
                        if(tr > 0 && tr < 7) {
                            tr = form[tr].children;
                            tr[1].children[0].value = rem[ind].score;
                            tr[2].children[0].value = rem[ind].remark
                        }
                    });


                }).fail(function(res) {
                    console.log(res);
                })
            }

            fetchCa();




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
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script>
    <?= $pro->Alert() ?>
</script>
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
