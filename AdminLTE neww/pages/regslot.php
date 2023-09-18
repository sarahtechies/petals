<html lang="en" style="height: auto;"><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="Xuhfrue3tdeNBelC1YnLWBtisMUYwYqokGWlR1da">
    <title>Subscriptions
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
                    <h1 class="m-0">Subscriptions</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/control/dashboard">Home</a></li>
                        <li class="breadcrumb-item active">Subscriptions</li>
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
                        <h3 class="card-title n">
                            <i class="fas fa-plus-square"></i>
                            Link Livepetal Wallet
                        </h3>
                    </div>
                    <div class="card-body">
                        <form action="" id="linkWallet" class="row">
                            <div class="col-md-12 form-group text-warning">
                                <b>Note:</b> You have to link your livpetal wallet before you can perform transactions
                            </div>
                            <div class="col-md-6 form-group">
                                <input type="text" name="liveid" class="form-control" placeholder="Live Petal ID">
                            </div>
                            <div class="col-md-6 form-group">
                                <input type="" autocomplete="off" autofill="close" name="pwd" class="form-control" placeholder="Live Petal Password">
                            </div>
                            <div class="form-group col-12 mb-0 ">
                                <span><b>Current Wallet: <span class="currentwallet"></span></b></span>
                                <button type="submit" class="btn btn-secondary float-right linkWallet">Link Wallet</button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="card card-secondary card-outline">
                    <div class="card-header">
                        <h3 class="card-title">
                            <i class="fa fa-list-alt" aria-hidden="true"></i>
                            Recently Linked Wallets
                        </h3>
                    </div>
                    <div class="table-responsive">
                        <table id="example1" class="table mb-0 table-bordered table-hover table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                </tr>
                            </thead>
                            <tbody id="wallets_linked">
                            <tr>
                                <td>20048</td>
                                <td>Godwin Ogbaji</td>
                                <td>ogbajigodwin@gmail.com</td>
                                <td>08032318588</td>
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
                            <i class="fas fa-plus-square"></i>
                            Purchased Registration Slots
                        </h3>
                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <span><b>Total</b>: <span class="total_slot">0</span></span>
                            <span><b>Used</b>: <span class="used_slot">22</span></span>
                            <span><b>Availabe</b>: <span class="slots_av">-22</span></span>
                        </div>
                        <br>

                        <form action="" id="slotPurchase" class="row">
                            <div class="col-md-6 form-group">
                                <input type="number" name="slots" min="1" class="form-control" placeholder="Number to purchase">
                            </div>
                            <div class="col-md-6 form-group">
                                <select name="pack" class="form-control">
                                    <option value="1">Basic | ₦ 500 / Student </option>
                                </select>
                            </div>
                            <div class="form-group col-12 mb-0 ">
                                <span><b>Wallet Balance: <span class="walletbalance">0</span></b></span>
                                <button type="submit" class="btn btn-secondary slotPurchase float-right" style="margin-right: 10px">Pay With Livepetal</button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="card card-secondary card-outline">
                    <div class="card-header">
                        <h3 class="card-title">
                            <i class="fa fa-list-alt" aria-hidden="true"></i>
                            Slot Purchase History
                        </h3>
                    </div>
                    <div class="table-responsive">
                        <table id="example1" class="table mb-0 table-bordered table-hover table-striped">
                            <thead>
                                <tr>
                                    <th>Slots</th>
                                    <th>Amount</th>
                                    <th>Date</th>
                                    <th>By</th>
                                </tr>
                            </thead>
                            <tbody id="slots_history"></tbody>
                        </table>
                    </div>

                </div>

            </div>
        </div>
    </section>


    <!-- <script src="https://portal.schoolpetal.com/assets/plugins/jquery/jquery.min.js"></script> -->

    <!-- <script>
        $(function () {

            $.ajaxSetup({
                headers: {
                    'Authorization': `Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiODJkYzBkYjkzMGZlMDZhOWI2NjNlNWEyZjJkM2MxMTc2ZTc5NWExNWMyY2RiMWE5MTM4NDFkMzM4ZjQxOThjYzc3YzViODFiZmU5YTBlMjgiLCJpYXQiOjE2OTI3MDE0MzEuNTY1NjcsIm5iZiI6MTY5MjcwMTQzMS41NjU2NzgsImV4cCI6MTcyNDMyMzgzMS41MjY1NjIsInN1YiI6IjIwIiwic2NvcGVzIjpbXX0.ld2Nm3AauwywPVUopzO7UEKEvphSR740cICXdUXuHH684VHP0pFseOxN2_EY3QuinBYGn-7XvTs5CMOKWrYP1knn183aI5XGOzecnIfFJ9hABW3lX_GJ_dgEKZ4PvFvwZxGpnLYSR2ZDCj8YartaBnqidMDtGV0tx5RZ4yw5ivFcMc0sjr37VKe_cZviPRqRZvEV3c3i8I1vqhviiAVh3DBvYcCRbRxAkHVlMTfmNupa5gmC2wOWCUyoby2o2DdtpuwePSnygvftwOgCyGDpszmHvVVdDdJjkB2LPU3iSXDk5OqUUxw5O94qYHJ7FrtW8a_I_u2-rZ30zkBDqhqermrTTN-DeT14wpKDlBeITxjoL7Hszh1RSvqQ79RFaf10nGq5DSXeUoXFw99Xu-hfL5cFdEK2E0_1Ibk3QbRmSP0tYo4tRnOWT1IzbX-rxS0Esvotqsy3jbcHJJWVzUDI7u1r22CN26wIzW6wlJisHmvjzsS2DSCOdXlq2AbdDbctfiYeZAaJeJ4-yBsZEPi9EiTt5hoGZXhvrheHzgGYAWTkrv_mGOropK9U-EfqoD8l1cgNEaO8kdEG2iFBiYq0e1vp5lhy0g9EoULYbX3bl6kOgV7YkCT4VksrwNS55lC18XisDCrKphgOfPyNoTGGp4htw4l9a3gdJhD3Se13Ctk`,
                }
            });


            $('#linkWallet').on('submit', function(e) {
                e.preventDefault()
                form = $(this)

                liveid = $(form).find('input[name="liveid"]').val();
                password = $(form).find('input[name="pwd"]').val();


                $.ajax({
                    method: 'post',
                    url: api_url+'link/wallet',
                    data: {
                        id: liveid,
                        password: password
                    },
                    beforeSend:() => {
                        btnProcess('.linkWallet', '', 'before')
                    }
                }).done(function(res) {
                    littleAlert(res.message);
                    btnProcess('.linkWallet', 'Link Wallet', 'after')
                    fetchLinkedWallets();
                    form[0].reset();
                    walletBalance();
                }).fail(function(res) {
                    parseError(res.responseJSON);
                    btnProcess('.linkWallet', 'Link Wallet', 'after')
                })
            })


            function slotBalance()
            {
                $.ajax({
                    method: 'get',
                    url: api_url+'available_slots'
                }).done(function(res) {
                    $('.total_slot').html(res.total)
                    $('.used_slot').html(res.used)
                    $('.slots_av').html(res.available)
                }).fail(function(res) {
                })
            }

            slotBalance();





            function fetchLinkedWallets()
            {
                $.ajax({
                    method: 'get',
                    url: api_url+'linked_wallet'
                }).done(function(res) {
                   body = $('#wallets_linked');
                   body.html('')
                   res.data.map(wal => {
                       body.append(`
                            <tr>
                                <td>${wal.live_id}</td>
                                <td>${wal.name}</td>
                                <td>${wal.email}</td>
                                <td>${wal.phone}</td>
                            </tr>
                       `)
                   })
                }).fail(function(res) {
                })
            }


            fetchLinkedWallets();


            function slotsPurchaseHistory()
            {
                $.ajax({
                    method: 'post',
                    url: api_url+'slot/history'
                }).done(function(res) {
                    console.log(res);
                    body = $('#slots_history')
                    body.html(``);
                    res.data.map(slt => {
                        body.append(`
                            <tr>
                                <td>${slt.slots}</td>
                                <td>${moneyFormat(slt.amount)}</td>
                                <td>${formatDate(slt.created_at)}</td>
                                <td>${slt.user.name}</td>
                            </tr>
                        `)
                    })
                }).fail(function(res) {
                    console.log(res);
                })
            }

            slotsPurchaseHistory();

            function walletBalance()
            {
                $.ajax({
                    method: 'get',
                    url: api_url+'wallet_balance'
                }).done(function(res) {

                    $('.walletbalance').html(moneyFormat(res.balance))
                    $('.currentwallet').html(`${res.id} (${res.name})`)
                }).fail(function(res) {
                })
            }

            walletBalance();


            $('#slotPurchase').on('submit', function(e) {
                e.preventDefault();
                form = $(this);
                slots = $(form).find('input[name="slots"]').val();
                pack = $(form).find('select[name="pack"]').val();
                term_id = `10`
                if(!slots || slots <= 0) { littleAlert('The slots field is required', 1); return; }
                $.ajax({
                    method: 'post',
                    url: api_url+'purchase_slot',
                    data: {
                        slots: slots,
                        pack: pack,
                        term_id: term_id,
                    },
                    beforeSend:() => {
                        btnProcess('.slotPurchase', '', 'before')
                    }
                }).done(function(res){
                    littleAlert(res.message);
                    btnProcess('.slotPurchase', 'Pay With Livepetal', 'after')
                    slotsPurchaseHistory();
                    slotBalance();
                    walletBalance();

                    form[0].reset();

                    if(res.type == 3) {
                        console.log(res.term);
                        $.ajax({
                            method: 'post',
                            url: '/reput_term',
                            data: { '_token' : `Xuhfrue3tdeNBelC1YnLWBtisMUYwYqokGWlR1da`,  term: JSON.stringify(res.term) },
                        }).done(function(res) {
                            console.log(res);
                            littleAlert('Current term Updated sucessfully');
                            setTimeout(() => {
                                location.href= "/control/dashboard"
                            }, 3000);
                        }).fail(function(res) {
                            console.log(res);
                        })
                    }
                }).fail(function(res) {
                    parseError(res.responseJSON);
                    btnProcess('.slotPurchase', 'Pay With Livepetal', 'after')
                    console.log(res);
                })
            })


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