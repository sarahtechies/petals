<?php
require_once("myclass.php");
?>



<html lang="en" style="height: auto;"><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="Xuhfrue3tdeNBelC1YnLWBtisMUYwYqokGWlR1da">
    <title>Permission Settings
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
            <link rel="stylesheet" href="https://portal.schoolpetal.com/assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">


    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Permission</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/control/dashboard">Home</a></li>
                        <li class="breadcrumb-item active">Permission</li>
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
                            <i class="fas fa-edit"></i>
                            Edit Staff Permissions <?= @$report ?>
                        </h3>
                    </div>
                    <div class="card-body p-1">
                        <div class="table-responsive">
                         <form method="POST">
                            <table id="example1" class="table mb-0 table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
                                   
                               
                                        <th>#</th>
                                        <th>Staff</th>
                                        <th class="text-center">Reg Mgm</th>
                                        <th class="text-center">Fee Mgm</th>
                                        <th class="text-center">Result</th>
                                        <th class="text-center">Other</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody id="user_body_list">
                                <?php $i=1; $sql = $con->query("SELECT * FROM staffs");
                                 while($rows = mysqli_fetch_assoc($sql)) {
                                    $staff_id = $rows['sn'];
                                        if($pro->sql('permission', 'staff_id', $staff_id) ==0){
                                             $con->query("INSERT INTO permission (staff_id) VALUES ('$staff_id')");
                
                                  }  
                                 ?>
                                                
                                    
                                      <tr>    
                                         <td><?= $rows['name'] . ' (' . $pro->staffrole($rows['role']) . ') ' ?>
                                        <td class="text-center">
                                    
                                            <div class="icheck-primary">
                                                <input type="checkbox" name="p1[<?= $staff_id ?>]" <?php if($pro->sqLx1('permission', 'staff_id', $staff_id, 'p1') == 1) { ?> checked <?php }  ?> value="1"  id="reg<?= $staff_id ?>">
                                                <label for="reg<?= $staff_id ?>" data-id="reg<?= $staff_id ?>"></label>
                                            </div>
                                         </td>
                                        <td class="text-center">
                                   
                                            <div class="icheck-primary">
                                                <input type="checkbox" name="p2[<?= $staff_id ?>]" <?php if($pro->sqLx1('permission', 'staff_id', $staff_id, 'p2') == 1) { ?> checked <?php }  ?> value="1" id="fee2<?= $staff_id ?>">
                                                 <label for="fee2<?= $staff_id ?>" data-id="fee2<?= $staff_id ?>"></label>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="icheck-primary">
                                    
                                            <input type="checkbox" name="p3[<?= $staff_id ?>]" <?php if($pro->sqLx1('permission', 'staff_id', $staff_id, 'p3') == 1) { ?> checked <?php }  ?>value="1" id="u_result2<?=$staff_id ?>">
                                            <label for="u_result2<?= $staff_id ?>" data-id="u_result2<?= $staff_id ?>"></label>
                                            </div>
                                        </td>

                                        <td class="text-center">
                                            <div class="icheck-primary">
                                              <input type="checkbox" name="p4[<?= $staff_id ?>]" <?php if($pro->sqLx1('permission', 'staff_id', $staff_id, 'p4') == 1) { ?> checked <?php }  ?>value="1" id="p4<?= $staff_id ?>">
                                              <label for="p4<?= $staff_id ?>" data-id="p4<?= $staff_id ?>"></label>
                                            </div>
                                        </td>

                                         <td ><input  type="hidden" value="<?= $staff_id ?>" name="staffid[]"></td>

                                        
                                </tr> 
                                                    
                                 
                                  
                                <?php 
                                      }   ?>
                
                        
                    </tbody>
                            </table><button class="btn btn-success" type="submit"name="UpdateAllPermission"><i class="fas     fa-save"></i> Save all changes</button>
                            </form>
                        </div>

                        <div id="page_links" style="color: rgb(36, 35, 32)"></div>
                    </div>
                </div>

            </div>

        </div>
    </section>




    <!-- <script src="https://portal.schoolpetal.com/assets/plugins/jquery/jquery.min.js"></script> -->
<!-- 
    <script>
        $(function() {

            $.ajaxSetup({
                headers: {
                    'Authorization': `Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiODJkYzBkYjkzMGZlMDZhOWI2NjNlNWEyZjJkM2MxMTc2ZTc5NWExNWMyY2RiMWE5MTM4NDFkMzM4ZjQxOThjYzc3YzViODFiZmU5YTBlMjgiLCJpYXQiOjE2OTI3MDE0MzEuNTY1NjcsIm5iZiI6MTY5MjcwMTQzMS41NjU2NzgsImV4cCI6MTcyNDMyMzgzMS41MjY1NjIsInN1YiI6IjIwIiwic2NvcGVzIjpbXX0.ld2Nm3AauwywPVUopzO7UEKEvphSR740cICXdUXuHH684VHP0pFseOxN2_EY3QuinBYGn-7XvTs5CMOKWrYP1knn183aI5XGOzecnIfFJ9hABW3lX_GJ_dgEKZ4PvFvwZxGpnLYSR2ZDCj8YartaBnqidMDtGV0tx5RZ4yw5ivFcMc0sjr37VKe_cZviPRqRZvEV3c3i8I1vqhviiAVh3DBvYcCRbRxAkHVlMTfmNupa5gmC2wOWCUyoby2o2DdtpuwePSnygvftwOgCyGDpszmHvVVdDdJjkB2LPU3iSXDk5OqUUxw5O94qYHJ7FrtW8a_I_u2-rZ30zkBDqhqermrTTN-DeT14wpKDlBeITxjoL7Hszh1RSvqQ79RFaf10nGq5DSXeUoXFw99Xu-hfL5cFdEK2E0_1Ibk3QbRmSP0tYo4tRnOWT1IzbX-rxS0Esvotqsy3jbcHJJWVzUDI7u1r22CN26wIzW6wlJisHmvjzsS2DSCOdXlq2AbdDbctfiYeZAaJeJ4-yBsZEPi9EiTt5hoGZXhvrheHzgGYAWTkrv_mGOropK9U-EfqoD8l1cgNEaO8kdEG2iFBiYq0e1vp5lhy0g9EoULYbX3bl6kOgV7YkCT4VksrwNS55lC18XisDCrKphgOfPyNoTGGp4htw4l9a3gdJhD3Se13Ctk`
                }
            });





            function pullPermission() {
                $.ajax({
                    method: 'get',
                    url: api_url+`users/permission?page=1`
                }).done(function(res) {
                    body = $('#user_body_list')
                    body.html(``)
                    res.data.data.map((user, index) => {
                        body.append(`
                            <tr class="single">
                                <td class="align-middle">${index+1}</td>
                                <td class="align-middle" >${user.name} (${staff_role(user.role)})</td>
                                <td class="text-center">
                                    <input type="hidden" name="permission_id" value="${user.permission.id}" >
                                    <div class="icheck-primary">
                                        <input type="checkbox" name="reg" value="${(user.permission.registration == 1) ? 1 : 0}" ${(user.permission.registration == 1) ? 'checked' :''} id="reg${index}">
                                        <label for="reg${index}" data-id="reg${index}" ></label>
                                    </div>
                                </td>
                                <td class="text-center">
                                    <div class="icheck-primary">
                                        <input type="checkbox" name="fee" value="${(user.permission.fee == 1) ? 1 : 0}" ${(user.permission.fee == 1) ? 'checked' :''} id="fee${index}">
                                        <label for="fee${index}" data-id="fee${index}" ></label>
                                    </div>
                                </td>
                                <td class="text-center">
                                    <div class="icheck-primary">
                                        <input type="checkbox" name="result" value="${(user.permission.u_result == 1) ? 1 : 0}" ${(user.permission.u_result == 1) ? 'checked' :''} id="u_result${index}">
                                        <label for="u_result${index}" data-id="u_result${index}"></label>
                                    </div>
                                </td>

                                <td class="text-center">
                                    <div class="icheck-primary">
                                        <input type="checkbox" name="other" value="${(user.permission.other == 1) ? 1 : 0}" ${(user.permission.other == 1) ? 'checked' :''} id="other${index}">
                                        <label for="other${index}" data-id="other${index}"></label>
                                    </div>
                                </td>

                                <td class="align-middle"><button class="btn btn-xs btn-success save_change float-right"><i class="fas fa-save"></i> Save</button></td>


                            </tr>
                        `)
                    })


                    body.append(`
                        <tr>
                            <td colspan="12">
                                <button class="btn btn-success save_all float-right"><i class="fas fa-save"></i> Save all changes</button>
                            </td>
                        </tr>
                    `)

                    $('#page_links').html(dropPaginatedPages(res.data.links))
                }).fail(function(res) {
                })
            }
            pullPermission();


            $('body').on('click', '.save_change', function() {
                btn  = $(this);
                parent_td = btn.parent();
                parent_siblings = parent_td.siblings()
                ///extracting the registration permssion value and the permssion id
                reg_parent = parent_siblings[2].children;
                permission_id = reg_parent[0].value;
                reg_per = reg_parent[1].children[0].value;
                //extracting the fee permission id
                fee_per = parent_siblings[3].children[0].children[0].value;
                result_per = parent_siblings[4].children[0].children[0].value;
                other_per = parent_siblings[5].children[0].children[0].value;
                $.ajax({
                    method: 'post',
                    url: api_url+'permission/update',
                    data: {
                        permission_id: permission_id,
                        registration: reg_per,
                        result: result_per,
                        fee: fee_per,
                        other: other_per
                    },
                    beforeSend:() => {
                        $('.save_change').attr('disabled', 'diabled');
                        btn.html(`<span class="spinner-border spinner-border-sm" aria-hidden="true"></span> ...`)
                    }
                }).done(function(res) {
                    littleAlert(res.message);
                    $('.save_change').removeAttr('disabled');
                    btn.html(`<i class="fas fa-save"></i> Save`)
                }).fail(function(res) {
                    parseError(res.responseJSON);
                    $('.save_change').removeAttr('disabled');
                    btn.html(`<i class="fas fa-save"></i> Save`)
                })
            })


            $('body').on('click', 'label', function() {
                label = $(this).data('id');
                inp = $(`#${label}`);
                new_val = (inp.val() == 0 ) ? 1 : 0;
                inp.val(new_val);
            })


            $('body').on('click', '.save_all', function() {
                trs = $('.single')
                data = [];
                trs.map(row => {
                    parent = trs[row].children

                    reg_parent = parent[2].children;
                    permission_id = reg_parent[0].value;
                    reg_per = reg_parent[1].children[0].value;
                    //extracting the fee permission id
                    fee_per = parent[3].children[0].children[0].value;
                    result_per = parent[4].children[0].children[0].value;
                    other_per = parent[5].children[0].children[0].value;

                    arr = { permission_id: permission_id, registration: reg_per, fee: fee_per, result: result_per, other: other_per}
                    data.push(arr)
                });

                $.ajax({
                    method: 'post',
                    url: api_url+'permission/update_all',
                    data: {
                        data: data
                    },
                    beforeSend:() => {
                        $('.save_change').attr('disabled', 'diabled');
                        btnProcess('.save_all', '', 'before')
                    }
                }).done(function(res) {
                    littleAlert(res.message);
                    btnProcess('.save_all', '<i class="fas fa-save"></i> Save all changes', 'after')
                    $('.save_change').removeAttr('disabled');
                }).fail(function(res) {
                    parseError(res.responseJSON)
                    btnProcess('.save_all', '<i class="fas fa-save"></i> Save all changes', 'after')
                    $('.save_change').removeAttr('disabled');
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
        </script>-->



<div id="sidebar-overlay"></div></div>
</body>
</html>