<?php
require("myclass.php");
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="cXO45Tk6wcpzfsXXv7F1QFE7Jb0Pb4rG4VoM1K0E">
  <title> Add Result
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
  <!-- SweetAlert2 -->
  <link rel="stylesheet" href="../plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css" />
  <!-- Toastr -->
  <link rel="stylesheet" href="../plugins/toastr/toastr.min.css" />
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


    <!-- page content -->
    <div class="content-wrapper">
      <div class="right_col" role="main">
        <div class="">
          <div class="page-title">
            <div class="title_left">
              <h3>Students Result</h3>
            </div>

          </div>
          <div class="clearfix"></div>


          <p></p>
          <?php
          // if (array_key_exists('AddResult', $_POST)) {
          //  $subject = $_POST['subject'];
          //  $studentid = $_POST['studentid'];
          //  $class = $_POST['class'];
          //  $ca1 = $_POST['ca1'];
          //  $ca2 = $_POST['ca2'];
          //  $exam = $_POST['exam'];


          //  $i = 0;
          //  while ($i < count($studentid)) {
          //   $e = $i++;


          //   $student = $studentid[$e];
          //   $clas = $class[$e];
          //   $c1 = $ca1[$e];
          //   $c2 = $ca2[$e];
          //   $exa = $exam[$e];
          //   $total = (int)$c1 + (int)$c2 + (int)$exa;

          //   $sql = $con->query("SELECT * FROM results WHERE studentid='$student' AND class='$clas' AND subject='$subject' ");
          //   if (mysqli_num_rows($sql) == 0) {
          //    addResult($student, $clas, $subject, $c1, $c2, $exa, $total);
          //   }
          //  }
          // }
          //  
          ?>

          <div class="row">

            <div class="col-md-12 col-sm-12 ">
              <div class="x_panel">
                <div class="card-body">
                  <form method="POST">
                    <div class="form-group">
                      <label>Select Class</label>
                      <select name="category" id="term" class="form-control select2bs4" required>
                        <option value="">Choose a Class</option>
                        <?php $i = 1;
                        $sql = $con->query("SELECT * FROM class ");
                        while ($rows = mysqli_fetch_assoc($sql)) {
                          echo '<option value="' . $rows['sn'] . '">' . $rows['category'] . '</option>';
                        }
                        ?>

                      </select>
                      <select class="form-control" name="subject" required>
                        <option value="">Select Subject...</option>
                        <?php $i = 1;
                        $sql = $con->query("SELECT * FROM subjects");
                        while ($rows = $sql->fetch_assoc()) {
                          echo '<option value="' . $rows['sn'] . '">' . $rows['subject'] . '</option>';
                        } ?>

                      </select>
                    </div>
                    <div class="form-group">
                      <button type="submit" class="btn btn-secondary float-right">Select</button>
                    </div>
                  </form>
                </div>

                <form method="POST">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>sn</th>
                        <th>Surname</th>
                        <th>Other</th>
                        <th>CA1</th>
                        <th>CA2</th>
                        <th>Exam</th>
                        <th>Remarks</th>


                      </tr>
                    </thead>
                    <tbody>
                      <?php

                      if (isset($_POST['category'])) {
                       
                        $category = $_POST['category'];
                        $subject = $_POST['subject'];
                        
                        

                        $i = 1;
                        $sql = $con->query("SELECT * FROM students WHERE category = '$category'");
                       
                        while ($rows = mysqli_fetch_assoc($sql)) {
                          

                      ?>

                          <tr>
                            <th scope="row"><?= $i++ ?></th>
                            <td><a href="studentprofile.php?sn=<?= $rows['sn'] ?>"><?= $rows['surname'] ?></a></td>
                            <td><?= $rows['firstname'] ?> <input type="hidden" name="studentid[]" value="<?= $rows['sn'] ?>" required></td>

                            <td><input type="number" name="ca1[]" min="0" max="20" class="form-control" required></td>
                            <td><input type="number" name="ca2[]" min="0" max="20" class="form-control"></td>
                            <td><input type="number" name="exam[]" min="0" max="60" class="form-control"></td>


                          </tr>
                      <?php  }
                         } ?>
                    </tbody>
                  </table>
                  <input type="" name="class" value="<?= @$class ?>" class="form-control">
                  <input type="" name="subject" value="<?= @$subject ?>" class="form-control">



                  <button type="submit" class="btn btn-primary" name="AddResult" style="width:100%">Submit Result</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>



  <!-- /page content -->
  <!-- SweetAlert2 -->
  <script src="../plugins/sweetalert2/sweetalert2.min.js"></script>
  <!-- Toastr -->
  <script src="../plugins/toastr/toastr.min.js"></script>
  <script>
    <?= $pro->Alert() ?>
  </script>
  </body>
</html>