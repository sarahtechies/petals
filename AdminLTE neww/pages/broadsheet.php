<?php
require("myclass.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <meta name="csrf-token" content="xJ0Dnex9A8BkkhE42oMC01Coy5hwpVgijyJ0PChF">
 <title>Broad Sheet
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

<body class="hold-transition sidebar-mini layout-fixed">
 <div class="wrapper">


  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
   <ul class="navbar-nav">
    <li class="nav-item">
     <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
     <a href="#" class="nav-link"><b>SchoolPetal International School</b></a>
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

<?php include("nav.php") ?>


  <div class="content-wrapper">
   <div class="littleAlert"></div>

   <div class="content-header">
    <div class="container-fluid">
     <div class="row mb-2">
      <div class="col-sm-6">
       <h1 class="m-0">Broad Sheet</h1>
      </div>
      <div class="col-sm-6">
       <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="/control/dashboard">Home</a></li>
        <li class="breadcrumb-item active">Broad Sheet</li>
       </ol>
      </div>
     </div>
    </div>
   </div>


   <section class="content">
    <div class="row">
     <div class="col-md-12 col-12">
      <div class="row">
       <div class="col-md-4">
        <div class="card card-secondary card-outline">
         <div class="card-body">
          <form id="loadSheet" method="POST">
           <div class="form-group">
            <label>Select Programme</label>
            <select name="program" id="program" class="form-control select2bs4">
            </select>
           </div>
           <div class="form-group">
            <button class="btn btn-secondary float-right loadSheet">View Sheet</button>
           </div>
           <input type="hidden" id="setup">
          </form>
         </div>
        </div>
       </div>
      </div>



      <div class="card card-secondary card-outline">
       <div class="card-header">
        <h3 class="card-title text-bold">
         <i class="fa fa-list-alt" aria-hidden="true"></i>
         <span class="t_text">Broad sheet</span>
        </h3>
       </div>
       <div class="card-body p-1">
        <div class="table-responsive">
         <table id="example1" class="table mb-0 table-bordered table-hover table-striped">
          <thead>
            <td colspan="12"></td>
            <h3 class="text-center">EL-SHADDAI INTERNATIONAL GROUP OF SCHOOLS,AKURE</h3>
            <p class="text-center">TERMLY CONTINOUS ASSESSMENT</p>
            <p class="text-center">FIRST TERM,2023/2024 ACADEMIC SESSION
           <tr>
            
            <th colspan="3">Name:</th>
            <th colspan="3">Registration No:</th>
            <th colspan="2">Result ID:</th>
            <th colspan="2">Class:</th>
            <th colspan="2">Gender:</th>
            
           </tr>
           <tr>
            
            <th>Subjects</th>
            <th class="ca1">CA1</th>
            <th class="ca2">CA2</th>
            <th class="ca3">CA3</th>
            <th class="exam">Exam</th>
            <th> Term Total</th>
            <th> Last Term</th>
            <th>Total</th>
            <th>Class Average</th>
            <th>Grade</th>
            <th>Remark</th>

            <!-- <th class="ca1">CA1</th>
            <th class="ca2">CA2</th>
            <th class="ca3">CA3</th>
            <th class="exam">Exam</th>
            <th>Total</th>

            <th class="ca1">CA1</th>
            <th class="ca2">CA2</th>
            <th class="ca3">CA3</th>
            <th class="exam">Exam</th>
            <th>Total</th>
            <th>£f</th> -->

           </tr>

           <tr>
            <th colspan="3">Subjects:</th>
            <th colspan="3">Total Score:</th>
            <th colspan="2">Average:</th>
            <th colspan="2">Class Average:</th>
            <th colspan="2">No in Class:</th>
             </tr>

             <tr>
                
             <th colspan="12">
                <div style="display:flex">
                <p>Vacation Date:<br>Teacher's Comment:</p></br>
             <p style="margin-left:800px">Resumption Date:
             <br />Principal's Comment:</p>
          
             </div>
             </th>
             
             
             

                </tr>
          </thead>
          <tbody id="result_body">
            <tr></tr>

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

   <script>
    $(function() {
     $.ajaxSetup({
      headers: {
       'Authorization': `Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiN2RjOTI1MDc2N2IwZWU3NDcyNmNjN2E5MDdiODBmNDcyOTQzOWYzOGVlNTVkNTdjM2RmY2VhODQ0MTdlMGMzYzJmZmIwZjEwYjk0ZWFmMjAiLCJpYXQiOjE2OTIxMjI1OTUuOTcwNDM2LCJuYmYiOjE2OTIxMjI1OTUuOTcwNDQ2LCJleHAiOjE3MjM3NDQ5OTUuOTU0ODI5LCJzdWIiOiIyMCIsInNjb3BlcyI6W119.m9F64QZo_mUdjRcemDRmKW5qDjsBWjRgnPDznUPXbltU02OxF16_GartitU6nrjlnJk7r5DeE9Zhtjp7qVXcq3PaLeJkYqDj6GQ719W7B5bEC5reiGJznsKk5VfH8x14qrQ5WWLHrkGMOdqQEzYrnNgQgO4sD38wPz_rC7fPm_Tb2x8V4zIBfbiOT_tmt_LdfIXsDe4g6GZjyNDqNBPsuVuGMA73aLsCWP-idYn3hBxOBvuWyzgQE-4zOwgUDe0IE36ZdldHM8YbhVOqgJ34daTTz_USnksZvx7-Qq5qXXDEMcMmUZacTJU-tY5D6f7PD0-JcrM_KwwtKl_J_WYw_V6a88ULHD65OYyyL7fp5FvjWQTTFRShkj00QSBtwRTkT4IQ-wjGuUOZGPQLnxS7FzZYeqqgNVWpI3Hh1efDHHJnCQztgAgU1LIrSpaHSRNsFUKMp-bb79fsESvsaChgH8itJy4ud1DcQRgpVJWDqael9cBjcjeiZkor_v9mAsCLzEGnqifjnF4DS875IMzkRhHfpR7w3qidOTYkEbXKwCq6NvfjP_VqwZmy3pAwMoteZqA8CC-4uolnFobi42Yv-NqUi5Q4fNJwWVNPjOsgR7Sh4eApU6z0Lg0SaU54JGChbE-PL4IF9sbweIzBc8kS_TCuf1v9avZze1No8wF5nYM`
      }
     });


     function fetchProgram() {
      $.ajax({
       method: 'get',
       url: api_url + 'fetch_teacher_subject/20'
      }).done(function(res) {
       body = $('#program');
       body.html(`<option selected disabled>Select Option</option>`);
       res.data.map(pro => {
        body.append(`<option value="${pro.id}">${pro.class.class} ${pro.subject.subject}</option>`)
       })
      }).fail(function(res) {})
     }

     fetchProgram();

     $('#loadSheet').on('submit', function(e) {
      e.preventDefault();
      prog = $($(this)).find('select[name="program"]').val();
      if (!prog) {
       littleAlert('Pls select a program', 1);
       return;
      }
      location.href = `/control/broad-sheet/${prog}`;
      btnProcess('.loadSheet', '', 'before');
     });




     function loadProgram() {
      program = `0`;
      console.log(program);
      body = $('#result_body');
      if (program == 0) {
       littleAlert('Pls select a program view result', 1);
       return;
      }
      $.ajax({
       method: 'get',
       url: api_url + `broad/${program}`,
       beforeSend: () => {
        body.html(`
                            <tr>
                                <td colspan="20">
                                    <div class="text-center">
                                        <span class="spinner-border spinner-border-sm" aria-hidden="true"></span>
                                        <i> Loading ... </i>
                                    </div>
                                </td>
                            </tr>
                        `)
       }
      }).done(function(res) {
       $('.t_text').html(`${res.cap} Broad Sheet`);
       body = $('#result_body');
       set = res.setup;
       body.html(``);
       res.data.map((stu, index) => {
        first = checkRes(stu.first);
        second = checkRes(stu.second);
        third = checkRes(stu.third);
        //total = first.total + second.total + third.total ;
        total = parseInt((first.total > 0) ? first.total : 0) + parseInt((second.total > 0) ? second.total : 0) + parseInt((third.total > 0) ? third.total : 0);
        divisor = ((first.total > 0) ? 1 : 0) + ((second.total > 0) ? 1 : 0) + ((third.total > 0) ? 1 : 0);
        ef = total / divisor;
        body.append(`
                            <tr class="single">
                                <td>${index+1}</td>
                                <td>${stu.surname} ${stu.firstname}</td>
                                <td>${first.t1}</td>
                                <td>${first.t2}</td>
                                <td>${first.t3}</td>
                                <td>${first.exam}</td>
                                <td>${first.total}</td>

                                <td>${second.t1}</td>
                                <td>${second.t2}</td>
                                <td>${second.t3}</td>
                                <td>${second.exam}</td>
                                <td>${second.total}</td>

                                <td>${third.t1}</td>
                                <td>${third.t2}</td>
                                <td>${third.t3}</td>
                                <td>${third.exam}</td>
                                <td>${third.total}</td>

                                <td>${ef}</td>

                            </tr>
                        `)
       })

      }).fail(function(res) {
       console.log(res);
      });
     }
     loadProgram();






    })
   </script>

  </div>

  <footer class="main-footer">
   <strong>Copyright &copy; <b>School Petal</b> </strong>
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

   function firstToast(icon = "success", message = 'Done') {
    Toast.fire({
     icon: icon,
     title: message
    });
   }
  })
 </script>
</body>

</html>