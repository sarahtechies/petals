<?php 
require_once("myclass.php")
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="2595XCpozUFOwsC0Vw3fzpUjkbwO6P6fETZxRyoc">
    <title>Students
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
            <div class="col-md-12 col-12">
                <div class="card card-secondary card-outline">
                    <div class="card-header">
                        <h3 class="card-title ">
                            <i class="fa fa-plus-square" aria-hidden="true"></i>
                            Register Student
                        </h3>
                    </div>
                    <div class="card-body">
                        <form method="POST" id="registerStudent" class="row">
                            <div class=" col-md-4 form-group">
                                <label>Guardian <span class="text-danger">*</span></label>
                                <select id="guardian" name="guardian" class="form-control select2bs4">
                                 <option value="">Select Guardian Name</option>
                                 <?php $i=1; $sql = $con->query("SELECT * FROM parents") ;
                                 while($rows = $sql->fetch_assoc())  {
                                    echo '<option value="'.$rows['sn'].'">'.$rows['name'].'</option>';
                                 } ?>
                                </select>
                            </div>

                            <div class=" col-md-4 form-group">
                                <label>Prospective Class <span class="text-danger">*</span></label>
                                <select name="category" class="form-control select2bs4">
                                       <option disabled selected>Select Class</option>
                                   <?php $i=1; $sql = $con->query("SELECT * FROM class") ;
                                 while($rows = $sql->fetch_assoc())  {
                                    echo '<option value="'.$rows['sn'].'">'.$rows['category'].'</option>';
                                 } ?>
                                </select>
                            </div>

                            <div class=" col-md-4 form-group">
                                <label>Class Arm <span class="text-danger">*</span></label>
                                <select name="class_arm" class="form-control select2bs4">
                                    <option disabled selected>Select Arm</option>
                                   <?php $i=1; $sql = $con->query("SELECT * FROM arm") ;
                                 while($rows = $sql->fetch_assoc())  {
                                    echo '<option value="'.$rows['sn'].'">'.$rows['arm'].'</option>';
                                 } ?>
                                </select>
                            </div>


                            <div class=" col-md-3 form-group">
                                <label>Surname <span class="text-danger">*</span></label>
                                <input type="text" name="surname" class="form-control" placeholder="Lekki, Nigeria" >
                            </div>
                            <div class=" col-md-3 form-group">
                                <label>Firstname <span class="text-danger">*</span></label>
                                <input type="text" name="firstname" class="form-control" placeholder="" >
                            </div>
                            <div class=" col-md-3 form-group">
                                <label>Othernames</label>
                                <input type="text" name="othernames" class="form-control" placeholder="" >
                            </div>
                            <div class=" col-md-3 form-group">
                                <label>Gender <span class="text-danger">*</span></label>
                                <select name="gender" class="form-control select2bs4">
                                    <option disabled selected>Select Gender</option>
                                    <option>Female</option>
                                    <option>Male</option>
                                </select>
                            </div>
                            <div class="col-md-4 form-group">
                                <label>Reg Number</label>
                                <input type="text" name="regnumber" class="form-control" placeholder="choose Registrarion Number" >
                            </div>

                            <div class="col-md-8">
                                <button class="btn btn-secondary float-right mt-4 registerStudent " name="AddStudent">Register Student</button>
                            </div>
                        </form>
                    </div>



                </div>


                <div class="card card-secondary card-outline">
                    <div class="card-header">
                        <h3 class="card-title ">
                            <i class="fa fa-clock" aria-hidden="true"></i>
                            Recently Registered Students
                        </h3>
                    </div>
                    <div class="card-body p-1">
                        <div class="table-responsive">
                            <table id="example1" class="table mb-0 table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
                                         <th colspan="12">sn</th>
                                    <th colspan="12">guardian</th>
                                    <th colspan="12">category</th>
                                    <th colspan="12">class_arm</th>
                                    <th colspan="12">surname</th>
                                    <th colspan="12">firstname</th>
                                    <th colspan="12">othernames</th>
                                    <th colspan="12">gender</th>
                                    <th colspan="12">regnumber</th>
                                    
                                    </tr>
                                </thead>
                                <tbody id="student_list_body">
                                <?php $i=1; $sql = $con->query("SELECT * FROM  students");
                                        while($rows = mysqli_fetch_assoc($sql)){ ?>

                                             <tr>
                                                
                                         <td colspan="12"><?=$i++ ?></td>
                                          <td colspan="12"><?=$pro->SqLx('parents', 'sn', $rows['guardian'], 'name') ?></td>
                                         <td colspan="12"><?=$pro->SqLx('class', 'sn', $rows['category'], 'category') ?></td>
                                         <td colspan="12"><?=$pro->SqLx('arm', 'sn', $rows['class_arm'], 'arm') ?></td>
                                          <td colspan="12"><?=$rows['surname'] ?></td>
                                           <td colspan="12"><?=$rows['firstname'] ?></td>
                                            <td colspan="12"><?=$rows['othernames'] ?></td>
                                             <td colspan="12"><?=$rows['gender'] ?></td>
                                              <td colspan="12"><?=$rows['regnumber'] ?></td>
                                           
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

    <script src="https://portal.schoolpetal.com/assets/plugins/jquery/jquery.min.js"></script>

    <!-- <script>
        $(function() {

            $.ajaxSetup({
                headers: {
                    'Authorization': `Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiYTRhYzQ5N2UzMWU0NWU4YTE0NDk5Y2FkMGRmZTk4ZmNhNjc0MmRmYzQxOGYzMWQwNTFjN2FlNmNlYzBjNTQyOTBhNmMzNTc3NTAzNGE5OGYiLCJpYXQiOjE2OTE2NTI2MjUuMDk1MjkyLCJuYmYiOjE2OTE2NTI2MjUuMDk1MywiZXhwIjoxNzIzMjc1MDI1LjA1MzE5Nywic3ViIjoiMjAiLCJzY29wZXMiOltdfQ.eRKrjiEJniFxy4S8o5ibcAIvJ4eFZHqkQv4XPo0lqpf1ZINvD5_aQH25hU8McDNT_J86f9kCWypdqcPUn7A0MC1_U68bkkVDXhVnZJPRc7zwlv9TQEP17uiidIRRKlAeKOOq4iE6w0FbIFnklghAhVhvk8TD1rr1uy67tCL1zIr5rgGJ-pFcUfYRQvglmq1fPedU9zH8xKnonX1c3CzJNzfFtSngp7dYz03NGU3RySm5BR3G769kzbrRt25VA1VlmXSDXAIcijLcI6gLKtwCT00k0s0Umvr2yZXvT3b7-Dr1J6GKKL6TNPKekHJ4MWvFIm5uMXxN1K7ZJfUTLSsnsJ2l_7PUSsqrAXZ7o4cUOPpHN6SE2zPGCYBK_dMbBnYnMDIYwAUf6X_DfW8o4cmx-RA4HCDCJkrlWlJUvjSa1HgTjzHvummYuSQ3cwQoQdLrzvzfh8HM3KsaFBt4Y9RPImQMreiMwww89w-HabMyGSNr6zOHGhW1xPLaFQeyBrjVo8jGDFwKix-6VSsidQGZpz-hpjC5pRGOdUFG9KNELK8jjKNDCK-HBZQcOqgk_ytlopN5yXnC1icNH-PLqtJIP_dmQ9ppTqEl3wayHw_lcPKXypbydCNZva4WK0K0kViSC9xZ5fQ0sQ2uaobjVMVPUiv_6NC_69isZqnIZuMRCNM`
                }
            });


            function fetchStudent()
            {
                $.ajax({
                    method: 'get',
                    url: api_url+'fetch_recently_registered_student'
                }).done(function (res) {
                    body = $('#student_list_body');
                    body.html(``)
                    res.data.map((stu, index) => {
                        body.append(`
                            <tr>
                                <td>${index + 1}</td>
                                <td>${stu.surname+ ' ' + stu.firstname}</td>
                                <td>${stu.class.class ?? ''} <sup>${(stu.arm)? stu.arm.arm :''}</sup> </td>
                                <td><a href="/control/guardian_profile/${stu.guardian.id}" >${stu.guardian.guardian_name}</a></td>
                                <td>${stu.sex}</td>
                                <td>
                                    <div class="float-right">
                                        <a href="/control/student/${stu.id}">Profile <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
                                    </div>
                                </td>
                            </tr>
                        `)
                    })
                }).fail(function(res) {
                    console.log(res);
                })
            }


            fetchStudent()


            function fetchReq()
            {
                $.ajax({
                    method: 'get',
                    url: api_url+'registration_requirements'
                }).done(function (res){
                    guardian = $('#guardian')
                    guardian.html(`<option disabled selected>Select Guardian</option>`)
                    res.data.guardians.map(guard => {
                        guardian.append(`<option value="${guard.id}">${guard.guardian_name} | ${guard.guardian_email}</option>`)
                    });

                    cla = $('#class')
                    cla.html(`<option disabled selected>Select Class</option>`)
                    res.data.classes.map(clas => {
                        cla.append(`<option value="${clas.id}">${clas.class}</option>`)
                    });

                    arms = $('#arm')
                    arms.html(`<option disabled selected>Select Arm</option>`)
                    res.data.arms.map(arm => {
                        arms.append(`<option value="${arm.id}">${arm.arm}</option>`)
                    });

                }).fail(function(res) {
                    console.log(res);
                })
            }

            fetchReq();


            $('#registerStudent').on('submit', function(e){
                e.preventDefault();

                form = $(this);

                surname = $(form).find('input[name="surname"]').val();
                firstname = $(form).find('input[name="firstname"]').val();
                othernames = $(form).find('input[name="othernames"]').val();
                reg = $(form).find('input[name="reg"]').val();
                gender = $(form).find('select[name="gender"]').val();
                guardian = $('#guardian').val();
                arm = $('#arm').val();
                clas = $('#class').val();

                if(!guardian || !surname || !firstname || !gender || !arm || !clas) {
                    littleAlert('Pls fill out the required field', 1);  return;
                }

                $.ajax({
                    method: 'post',
                    url: api_url+'create_student_profile',
                    data: {
                        guardian_id: guardian,
                        class_id: clas,
                        arm_id: arm,
                        firstname: firstname,
                        surname: surname,
                        othername: othernames,
                        registration_number: reg,
                        sex: gender
                    },
                    beforeSend:() => {
                        btnProcess('.registerStudent', 'Register Student', 'before')
                    }
                }).done(function(res) {
                    littleAlert(res.message);
                    btnProcess('.registerStudent', 'Register Student', 'after')

                    body = $('#student_list_body');
                    body.prepend(`
                        <tr>
                            <td>#</td>
                            <td>${surname+ ' ' + firstname}</td>
                            <td>...</sup> </td>
                            <td><a href="/control/guardian_profile/${guardian}" >...</a></td>
                            <td>${gender}</td>
                            <td>
                                <div class="float-right">
                                    <a href="#">Profile <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
                                </div>
                            </td>
                        </tr>
                    `)
                    form[0].reset();
                    fetchStudent();
                }).fail(function (res) {
                    parseError(res.responseJSON);
                    btnProcess('.registerStudent', 'Register Student', 'after')
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
    <strong>Copyright &copy;  <b>School Petal</b> </strong>
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

        <script src="https://portal.schoolpetal.com/assets/js/adminlte.js"></script>

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
