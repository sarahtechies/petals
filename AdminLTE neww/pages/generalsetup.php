<?php
require_once("myclass.php");
?>



<html lang="en" style="height: auto;"><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="Xuhfrue3tdeNBelC1YnLWBtisMUYwYqokGWlR1da">
    <title>    General Setup
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
                    <h1 class="m-0">General Setup</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/control/dashboard">Home</a></li>
                        <li class="breadcrumb-item active">General Setup</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    
    <section class="content">
        <div class="row">
            <div class="col-lg-6 col-12">
                <div class="card card-secondary card-outline">
                    <div class="card-header">
                        <h3 class="card-title">
                            <i class="fas fa-plus-square"></i>
                            Create Session
                        </h3>
                    </div>
                    <div class="card-body">
                        <form action="" id="create_new_session">
                            <div class="form-group">
                                <label for="">Session</label>
                                <select id="session_id" class="form-control select2bs4 select2-hidden-accessible" data-select2-id="session_id" tabindex="-1" aria-hidden="true">
                                    <option selected="selected" disabled="" data-select2-id="2">Choose Session</option>

                                    <?php
                                    $i = -2;
                                    while ($i <= 2) {
                                        $e = $i++;
                                        $a = date('Y') + $e;
                                        $b = $a + 1;
                                        echo '<option>' . $a. '/'. $b. '</option>';
                                    }

                                    ?>
                                </select><span class="select2 select2-container select2-container--bootstrap4" dir="ltr" data-select2-id="1" style="width: 568.958px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-session_id-container"><span class="select2-selection__rendered" id="select2-session_id-container" role="textbox" aria-readonly="true" class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                            </div>
                            <div class="form-group mb-0 float-right">
                                <button type="submit" class="btn btn-secondary create_session_btn">Create Session</button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="card card-secondary card-outline">
                    <div class="card-header">
                        <h3 class="card-title">
                            <i class="fa fa-list-alt" aria-hidden="true"></i>
                            Recent Sessions
                        </h3>
                    </div>
                    <div class="table-responsive">
                        <table id="example1" class="table mb-0 table-bordered table-hover table-striped">
                            <thead>
                                <tr>
                                    <th colspan="2">Session</th>
                                    <th>Session Info</th>
                                </tr>
                            </thead>
                            <tbody id="session_body">
                            <tr>
                                <td colspan="2">
                                    2023/2024
                                </td>
                                <td>
                                    <table class="table table-sm">
                                        <tbody><tr>
                                            <th>Term</th>
                                            <th>Closes</th>
                                            <th>Next-Term</th>
                                            <th></th>
                                        </tr>

                                        
                                <tr>
                                    <td> First Term </td>
                                    <td> null</td>
                                    <td> null</td>
                                    <th>
                                        <button class="btn btn-xs btn-primary editTermInfo" data-data="{&quot;id&quot;:19,&quot;school_id&quot;:&quot;2&quot;,&quot;session_id&quot;:&quot;7&quot;,&quot;term&quot;:&quot;1&quot;,&quot;year&quot;:&quot;2023&quot;,&quot;close&quot;:null,&quot;resume&quot;:null,&quot;status&quot;:&quot;0&quot;,&quot;paid&quot;:&quot;0&quot;,&quot;created_at&quot;:&quot;2023-08-07T10:16:49.000000Z&quot;,&quot;updated_at&quot;:&quot;2023-08-07T10:16:49.000000Z&quot;}"><i class="fas fa-edit"></i> Edit</button>
                                        <a href="/control/setting/renew/19" class="btn btn-xs btn-danger"> Pay to Act </a>
                                    </th>
                                </tr>
                            
                                <tr>
                                    <td> Second Term </td>
                                    <td> null</td>
                                    <td> null</td>
                                    <th>
                                        <button class="btn btn-xs btn-primary editTermInfo" data-data="{&quot;id&quot;:20,&quot;school_id&quot;:&quot;2&quot;,&quot;session_id&quot;:&quot;7&quot;,&quot;term&quot;:&quot;2&quot;,&quot;year&quot;:&quot;2023&quot;,&quot;close&quot;:null,&quot;resume&quot;:null,&quot;status&quot;:&quot;0&quot;,&quot;paid&quot;:&quot;0&quot;,&quot;created_at&quot;:&quot;2023-08-07T10:16:49.000000Z&quot;,&quot;updated_at&quot;:&quot;2023-08-07T10:16:49.000000Z&quot;}"><i class="fas fa-edit"></i> Edit</button>
                                        <a href="/control/setting/renew/20" class="btn btn-xs btn-danger"> Pay to Act </a>
                                    </th>
                                </tr>
                            
                                <tr>
                                    <td> Third Term </td>
                                    <td> null</td>
                                    <td> null</td>
                                    <th>
                                        <button class="btn btn-xs btn-primary editTermInfo" data-data="{&quot;id&quot;:21,&quot;school_id&quot;:&quot;2&quot;,&quot;session_id&quot;:&quot;7&quot;,&quot;term&quot;:&quot;3&quot;,&quot;year&quot;:&quot;2023&quot;,&quot;close&quot;:null,&quot;resume&quot;:null,&quot;status&quot;:&quot;0&quot;,&quot;paid&quot;:&quot;0&quot;,&quot;created_at&quot;:&quot;2023-08-07T10:16:49.000000Z&quot;,&quot;updated_at&quot;:&quot;2023-08-07T10:16:49.000000Z&quot;}"><i class="fas fa-edit"></i> Edit</button>
                                        <a href="/control/setting/renew/21" class="btn btn-xs btn-danger"> Pay to Act </a>
                                    </th>
                                </tr>
                            

                                    </tbody></table>
                                </td>

                            </tr>

                        
                            <tr>
                                <td colspan="2">
                                    2022/2023
                                </td>
                                <td>
                                    <table class="table table-sm">
                                        <tbody><tr>
                                            <th>Term</th>
                                            <th>Closes</th>
                                            <th>Next-Term</th>
                                            <th></th>
                                        </tr>

                                        
                                <tr class="bg-success">
                                    <td> First Term </td>
                                    <td> 2022-11-30</td>
                                    <td> 2023-01-09</td>
                                    <th>
                                        <button class="btn btn-xs btn-primary editTermInfo" data-data="{&quot;id&quot;:10,&quot;school_id&quot;:&quot;2&quot;,&quot;session_id&quot;:&quot;4&quot;,&quot;term&quot;:&quot;1&quot;,&quot;year&quot;:&quot;2022&quot;,&quot;close&quot;:&quot;2022-11-30&quot;,&quot;resume&quot;:&quot;2023-01-09&quot;,&quot;status&quot;:&quot;1&quot;,&quot;paid&quot;:&quot;1&quot;,&quot;created_at&quot;:&quot;2022-04-08T15:57:57.000000Z&quot;,&quot;updated_at&quot;:&quot;2023-04-04T08:50:52.000000Z&quot;}"><i class="fas fa-edit"></i> Edit</button>
                                        Active
                                    </th>
                                </tr>
                            
                                <tr>
                                    <td> Second Term </td>
                                    <td> 2023-04-06</td>
                                    <td> 2023-05-01</td>
                                    <th>
                                        <button class="btn btn-xs btn-primary editTermInfo" data-data="{&quot;id&quot;:11,&quot;school_id&quot;:&quot;2&quot;,&quot;session_id&quot;:&quot;4&quot;,&quot;term&quot;:&quot;2&quot;,&quot;year&quot;:&quot;2022&quot;,&quot;close&quot;:&quot;2023-04-06&quot;,&quot;resume&quot;:&quot;2023-05-01&quot;,&quot;status&quot;:&quot;0&quot;,&quot;paid&quot;:&quot;0&quot;,&quot;created_at&quot;:&quot;2022-04-08T15:57:57.000000Z&quot;,&quot;updated_at&quot;:&quot;2023-04-04T09:22:23.000000Z&quot;}"><i class="fas fa-edit"></i> Edit</button>
                                        <a href="/control/setting/renew/11" class="btn btn-xs btn-danger"> Pay to Act </a>
                                    </th>
                                </tr>
                            
                                <tr>
                                    <td> Third Term </td>
                                    <td> 2022-04-09</td>
                                    <td> 2022-04-07</td>
                                    <th>
                                        <button class="btn btn-xs btn-primary editTermInfo" data-data="{&quot;id&quot;:12,&quot;school_id&quot;:&quot;2&quot;,&quot;session_id&quot;:&quot;4&quot;,&quot;term&quot;:&quot;3&quot;,&quot;year&quot;:&quot;2022&quot;,&quot;close&quot;:&quot;2022-04-09&quot;,&quot;resume&quot;:&quot;2022-04-07&quot;,&quot;status&quot;:&quot;0&quot;,&quot;paid&quot;:&quot;1&quot;,&quot;created_at&quot;:&quot;2022-04-08T15:57:57.000000Z&quot;,&quot;updated_at&quot;:&quot;2023-04-04T08:50:52.000000Z&quot;}"><i class="fas fa-edit"></i> Edit</button>
                                        <button class="btn btn-xs btn-success activateTerm" data-id="12" title="Click to activate term">
                                <i class="fa fa-check" aria-hidden="true"></i> Activate </button>
                                    </th>
                                </tr>
                            

                                    </tbody></table>
                                </td>

                            </tr>

                        
                            <tr>
                                <td colspan="2">
                                    2021/2022
                                </td>
                                <td>
                                    <table class="table table-sm">
                                        <tbody><tr>
                                            <th>Term</th>
                                            <th>Closes</th>
                                            <th>Next-Term</th>
                                            <th></th>
                                        </tr>

                                        
                                <tr>
                                    <td> First Term </td>
                                    <td> 2022-04-07</td>
                                    <td> 2022-04-27</td>
                                    <th>
                                        <button class="btn btn-xs btn-primary editTermInfo" data-data="{&quot;id&quot;:7,&quot;school_id&quot;:&quot;2&quot;,&quot;session_id&quot;:&quot;3&quot;,&quot;term&quot;:&quot;1&quot;,&quot;year&quot;:&quot;2021&quot;,&quot;close&quot;:&quot;2022-04-07&quot;,&quot;resume&quot;:&quot;2022-04-27&quot;,&quot;status&quot;:&quot;0&quot;,&quot;paid&quot;:&quot;1&quot;,&quot;created_at&quot;:&quot;2022-04-08T15:44:17.000000Z&quot;,&quot;updated_at&quot;:&quot;2023-04-04T08:50:52.000000Z&quot;}"><i class="fas fa-edit"></i> Edit</button>
                                        <button class="btn btn-xs btn-success activateTerm" data-id="7" title="Click to activate term">
                                <i class="fa fa-check" aria-hidden="true"></i> Activate </button>
                                    </th>
                                </tr>
                            
                                <tr>
                                    <td> Second Term </td>
                                    <td> 2022-04-09</td>
                                    <td> 2022-04-25</td>
                                    <th>
                                        <button class="btn btn-xs btn-primary editTermInfo" data-data="{&quot;id&quot;:8,&quot;school_id&quot;:&quot;2&quot;,&quot;session_id&quot;:&quot;3&quot;,&quot;term&quot;:&quot;2&quot;,&quot;year&quot;:&quot;2023&quot;,&quot;close&quot;:&quot;2022-04-09&quot;,&quot;resume&quot;:&quot;2022-04-25&quot;,&quot;status&quot;:&quot;0&quot;,&quot;paid&quot;:&quot;1&quot;,&quot;created_at&quot;:&quot;2022-04-08T15:44:17.000000Z&quot;,&quot;updated_at&quot;:&quot;2023-04-04T08:50:52.000000Z&quot;}"><i class="fas fa-edit"></i> Edit</button>
                                        <button class="btn btn-xs btn-success activateTerm" data-id="8" title="Click to activate term">
                                <i class="fa fa-check" aria-hidden="true"></i> Activate </button>
                                    </th>
                                </tr>
                            
                                <tr>
                                    <td> Third Term </td>
                                    <td> 2023-08-30</td>
                                    <td> 2023-09-09</td>
                                    <th>
                                        <button class="btn btn-xs btn-primary editTermInfo" data-data="{&quot;id&quot;:9,&quot;school_id&quot;:&quot;2&quot;,&quot;session_id&quot;:&quot;3&quot;,&quot;term&quot;:&quot;3&quot;,&quot;year&quot;:&quot;2022&quot;,&quot;close&quot;:&quot;2023-08-30&quot;,&quot;resume&quot;:&quot;2023-09-09&quot;,&quot;status&quot;:&quot;0&quot;,&quot;paid&quot;:&quot;1&quot;,&quot;created_at&quot;:&quot;2022-04-08T15:44:17.000000Z&quot;,&quot;updated_at&quot;:&quot;2023-08-07T10:17:54.000000Z&quot;}"><i class="fas fa-edit"></i> Edit</button>
                                        <button class="btn btn-xs btn-success activateTerm" data-id="9" title="Click to activate term">
                                <i class="fa fa-check" aria-hidden="true"></i> Activate </button>
                                    </th>
                                </tr>
                            

                                    </tbody></table>
                                </td>

                            </tr>

                        </tbody>
                        </table>
                    </div>

                </div>

            </div>

            <div class="col-lg-6 col-12">
                <div class="card card-secondary card-outline">
                    <div class="card-header">
                        <h3 class="card-title">
                            <i class="fas fa-edit"></i>
                            Edit School Info
                        </h3>
                    </div>
                    <div class="card-body">
                        <form method="POST" class="row">
                            <div class="col-md-12 form-group">
                                <label for="">School Name</label>
                                <input type="text" class="form-control" value="SchoolPetal International School">
                            </div>
                            <div class="col-md-6 form-group">
                                <label for="">E-mail</label>
                                <input type="email" class="form-control" disabled="" value="akintadeimoleayo6@gmail.com">
                            </div>
                            <div class="col-md-6 form-group">
                                <label for="">Website</label>
                                <input type="url" class="form-control" placeholder="School website" value="www.schoolportal/international school">
                            </div>

                            <div class="col-md-6 form-group">
                                <label for="">Phone Number</label>
                                <input type="text" class="form-control" placeholder="Phone Number" value="07064502631">
                            </div>

                            <div class="col-md-6 form-group">
                                <label for="">Alternative Phone Number</label>
                                <input type="text" class="form-control" placeholder="Phone Number" value="">
                            </div>

                            <div class="col-md-12 form-group">
                                <label for="">Motto</label>
                                <input type="text" class="form-control" value="">
                            </div>

                            <div class="col-md-12 form-group">
                                <label for="">Address</label>
                                <textarea name="" id="" class="form-control" cols="3"></textarea>
                            </div>


                            <div class="form-group col-md-12 mb-0 ">
                                <button type="button" class="btn btn-secondary float-right" name="schoolInfo">Update School Info</button>
                            </div>
                        </form>

                        <hr>
                        <b>Update School Logo</b>
                        <div>
                            <div class="mt-2 d-flex justify-content-center">
                                <img width="100%" src="https://apis.schoolpetal.com/assets/img/schools/8012145schoolpetal-international-school.jpg" alt="SchoolPetal Logo" class="brand-image img-circle elevation-3" style="opacity: .5">

                            </div>
                            <button class=" uploadSchoolPics btn btn-secondary btn-block mt-5">Upload New Photo</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <div class="modal fade" id="editTermModal">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <p class="modal-title text-bold">Edit Term (2021/2022 Session, First Term)</p>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="#" id="updateTermForm">
                        <div class="form-group">
                            <label>Term Closes</label>
                            <input type="date" name="close" class="form-control">
                            <input type="hidden" name="term_id">
                        </div>

                        <div class="form-group">
                            <label>Next Term Begins</label>
                            <input type="date" name="resume" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Term Year</label>
                            <input type="number" name="year" class="form-control">
                        </div>
                        <div class="form-group float-right">
                            <button type="submit" class="btn btn-secondary save_updated_term_changes">Save changes</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

    <div class="modal fade" id="uploadPicsModal">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <p class="modal-title text-bold">Upload School Logo</p>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="uploadPics" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Logo</label>
                            <input type="file" name="logo" class="form-control">
                        </div>
                        <div class="form-group float-right">
                            <button type="submit" class="uploadPics btn btn-secondary">Save changes</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>


    <!-- <script src="https://portal.schoolpetal.com/assets/plugins/jquery/jquery.min.js"></script> -->

    <!-- <script>
        $(function () {

            $.ajaxSetup({
                headers: {
                    'Authorization': `Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiODJkYzBkYjkzMGZlMDZhOWI2NjNlNWEyZjJkM2MxMTc2ZTc5NWExNWMyY2RiMWE5MTM4NDFkMzM4ZjQxOThjYzc3YzViODFiZmU5YTBlMjgiLCJpYXQiOjE2OTI3MDE0MzEuNTY1NjcsIm5iZiI6MTY5MjcwMTQzMS41NjU2NzgsImV4cCI6MTcyNDMyMzgzMS41MjY1NjIsInN1YiI6IjIwIiwic2NvcGVzIjpbXX0.ld2Nm3AauwywPVUopzO7UEKEvphSR740cICXdUXuHH684VHP0pFseOxN2_EY3QuinBYGn-7XvTs5CMOKWrYP1knn183aI5XGOzecnIfFJ9hABW3lX_GJ_dgEKZ4PvFvwZxGpnLYSR2ZDCj8YartaBnqidMDtGV0tx5RZ4yw5ivFcMc0sjr37VKe_cZviPRqRZvEV3c3i8I1vqhviiAVh3DBvYcCRbRxAkHVlMTfmNupa5gmC2wOWCUyoby2o2DdtpuwePSnygvftwOgCyGDpszmHvVVdDdJjkB2LPU3iSXDk5OqUUxw5O94qYHJ7FrtW8a_I_u2-rZ30zkBDqhqermrTTN-DeT14wpKDlBeITxjoL7Hszh1RSvqQ79RFaf10nGq5DSXeUoXFw99Xu-hfL5cFdEK2E0_1Ibk3QbRmSP0tYo4tRnOWT1IzbX-rxS0Esvotqsy3jbcHJJWVzUDI7u1r22CN26wIzW6wlJisHmvjzsS2DSCOdXlq2AbdDbctfiYeZAaJeJ4-yBsZEPi9EiTt5hoGZXhvrheHzgGYAWTkrv_mGOropK9U-EfqoD8l1cgNEaO8kdEG2iFBiYq0e1vp5lhy0g9EoULYbX3bl6kOgV7YkCT4VksrwNS55lC18XisDCrKphgOfPyNoTGGp4htw4l9a3gdJhD3Se13Ctk`
                }
            });


            $('.uploadSchoolPics').on('click', function(){
                $('#uploadPicsModal').modal('show')
            })


            $('#uploadPics').on('submit', function(e) {
                e.preventDefault();
                sbtn = $('.uploadPics');
                formData = new FormData(this);

                $.ajax({
                    method: 'POST',
                    url: api_url+`school/updatelogo`,
                    data: formData,
                    contentType: false,
                    processData: false,
                    beforeSend: () => {
                        btnProcess(sbtn, '', 'before');
                    },
                }).done(function(res) {
                    littleAlert(res.message);
                    btnProcess(sbtn, 'Save changes', 'after');
                    setTimeout(() => {
                        littleAlert('Logo will appear on you next login')
                    }, 1500);
                }).fail(function(res) {
                    parseError(res.responseJSON);
                    btnProcess(sbtn, 'Save changes', 'after');
                    console.log(res);
                })
            })


            function fetchSession()
            {
                $.ajax({
                    method: 'get',
                    url: api_url+'get/session'
                }).done(function (res) {
                    body = $('#session_body')
                    body.html(``);
                    res.data.map(sess => {
                        terms = sess.terms

                        c_term = `10`
                        link = (!c_term) ? `/control/setting/sub/` : `/control/setting/renew/`;

                        body_txt = '';
                        terms.forEach(term => {
                            btn = (term.status == 1) ?`Active`:`<button class="btn btn-xs btn-success activateTerm" data-id="${term.id}" title="Click to activate term">
                                <i class="fa fa-check" aria-hidden="true"></i> Activate </button>`;
                            btn = (term.paid == 1) ? btn : `<a href="${link}${term.id}" class="btn btn-xs btn-danger" > Pay to Act </a>` ;
                            body_txt += `
                                <tr ${ (term.status == 1) ? `class="bg-success"` : '' }>
                                    <td> ${term_text(term.term)} </td>
                                    <td> ${ term.close }</td>
                                    <td> ${ term.resume }</td>
                                    <th>
                                        <button class="btn btn-xs btn-primary editTermInfo" data-data='${ JSON.stringify(term) }'><i class="fas fa-edit"></i> Edit</button>
                                        ${btn}
                                    </th>
                                </tr>
                            `
                        });

                        body.append(`
                            <tr>
                                <td colspan="2">
                                    ${sess.session}
                                </td>
                                <td>
                                    <table class="table table-sm">
                                        <tr>
                                            <th>Term</th>
                                            <th>Closes</th>
                                            <th>Next-Term</th>
                                            <th></th>
                                        </tr>

                                        ${body_txt}

                                    </table>
                                </td>

                            </tr>

                        `)
                    });

                }).fail(function (res) {

                });
            }

            fetchSession();


            $('body').on('click', '.editTermInfo', function () {
                data = $(this).data('data') ;
                $('#editTermModal').modal('show');
                modal = $('#editTermModal');
                $('.modal-title').find(modal).html(`Edit Term (${data.session} Session, ${term_text(data.term)})`)
                $('input[name="term_id"]').val(data.id);
                $( modal ).find('input[name="year"]').val(data.year);
            });


            $('body').on('click', '.activateTerm', function() {
                term_id = $(this).data('id');
                if(!confirm('All activities will be switched to selected term !')) { return; }
                $(this).html(`<span class="spinner-border spinner-border-sm" aria-hidden="true"></span>`)
                $('.activateTerm').attr('disabled', 'disabled');

                $.ajax({
                    method: 'post',
                    url: api_url+'activateterm',
                    data: {
                        term_id: term_id
                    }
                }).done(function (res) {
                    littleAlert(res.message);
                    fetchSession();

                    $.ajax({
                        method: 'post',
                        url: '/reput_term',
                        data: { '_token' : `Xuhfrue3tdeNBelC1YnLWBtisMUYwYqokGWlR1da`,  term: JSON.stringify(res.term) },
                    }).done(function(res) {
                        littleAlert('Current term Updated sucessfully');
                    }).fail(function(res) {
                    })


                }).fail(function (res) {
                    $('.activateTerm').html(`<i class="fa fa-check" aria-hidden="true"></i>`)
                    $('.activateTerm').removeAttr('disabled');
                    parseError(res.responseJSON);
                })
            })



            $('#updateTermForm').on('submit', function (e) {
                e.preventDefault(); form = $('#updateTermForm')
                close = $( form ).find('input[name="close"]').val();
                resume = $( form ).find('input[name="resume"]').val();
                year = $( form ).find('input[name="year"]').val();
                if(!close || !resume || !year) { littleAlert('All fileds are required', 1); return }

                $.ajax({
                    method: 'post',
                    url: api_url+'update/term/info',
                    data: {
                        term_id: $(form).find('input[name="term_id"]').val(),
                        close: close,
                        resume: resume,
                        year: year
                    },
                    beforeSend: () => {
                        btnProcess('.save_updated_term_changes', 'Save Changes', 'before');
                    }
                }).done(function (res) {
                    littleAlert(res.message);
                    btnProcess('.save_updated_term_changes', 'Save Changes', 'after');
                    fetchSession();
                    $('#editTermModal').modal('hide');
                }).fail(function (res) {
                    btnProcess('.save_updated_term_changes', 'Save Changes', 'after');
                    parseError(res.responseJSON);
                })
            })


            $('#create_new_session').on('submit', function(e) {
                e.preventDefault(); form = $('#create_new_session');
                session = $('#session_id').val();
                if(!session){ littleAlert('Pls select a session', 1); return }

                $.ajax({
                    method: 'post',
                    url: api_url+'create/session',
                    data: {
                        session: session
                    },
                    beforeSend :() => {
                        btnProcess('.create_session_btn', 'Create Session', 'before');
                    }
                }).done(function (res) {
                    littleAlert(res.message);
                    btnProcess('.create_session_btn', 'Create Session', 'after');
                    fetchSession();
                }).fail(function (res) {
                    parseError(res.responseJSON);
                    btnProcess('.create_session_btn', 'Create Session', 'after');
                })
            });


        })



    </script>
 -->

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