<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="../../image/png" sizes="16x16" href="../../Images/Redy.png">
    <title>REDY</title>
    <!-- Bootstrap Core CSS -->

    <link href="../../css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo asset('../../css/bootstrap.css') ?>">
    <!-- Custom CSS -->
    <link href="../../css/style.css" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="../../css/colors/blue.css" id="theme" rel="stylesheet">

<style>

    #title-row{
        padding-top: 30px;
        background-color: #eef5f9;
        padding-bottom: 30px;
    }

    .sidebar-nav > ul > li > a.active {
        color: #ffffff;
        background: #1abc9c;
    }

    .navbar{
        background-color: #1abc9c ;
    }

    #btn-row{
        padding-top: 30px;
        padding-bottom: 30px;
    }

    #page-title{
        color: #1e88e5;
        font-family: VAG Rounded;
        font-size: 54px;
    }

    #page-content{
        background-color: #FFFFFF;
        padding: 20px;
        border-radius: 5px;
    }

    #empty-row{
        height: 50px;
    }

    .btn-title{
        height: 40px;
        width: 100px;
        font-weight: 600;
        color: #FFFFFF;
    }

    .form-control{
        border: 1pt solid #1abc9c;
        border-radius: 0px;
        height: 50px;
    }

    .form-label{
        color: #000000;
    }

    @media  only screen and (max-width: 768px){
        #mobile-ext{
            width: 25%;
        }
        #mobile-number{
            width: 75%;
        }
    }

    .form-control::-webkit-input-placeholder { color: #C0C0C0; }  /* WebKit, Blink, Edge */
    .form-control:-moz-placeholder { color: #C0C0C0; }  /* Mozilla Firefox 4 to 18 */
    .form-control::-moz-placeholder { color: #C0C0C0; }  /* Mozilla Firefox 19+ */
    .form-control:-ms-input-placeholder { color: #C0C0C0; }  /* Internet Explorer 10-11 */
    .form-control::-ms-input-placeholder { color: #C0C0C0; }  /* Microsoft Edge */
</style>
</head>

<body class="fix-header fix-sidebar card-no-border">


    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar">
            <nav class="navbar top-navbar navbar-toggleable-sm navbar-light">
                <!-- ============================================================== -->
                <!-- Logo -->
                <!-- ============================================================== -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.html">
                        <!-- Logo icon --><b>
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->

                            <!-- Light Logo icon -->
                            <img src="../../Images/Redy.png" style="width: 50px; height: 50px;" alt="homepage" class="light-logo" />
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text --><span>

                         <!-- Light Logo text -->
                         <img src="" class="light-logo" alt="REDY" /></span> </a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav mr-auto mt-md-0">
                        <!-- This is  -->
                        <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="mdi mdi-menu"></i></a> </li>
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                        <!-- <li class="nav-item hidden-sm-down search-box"> <a class="nav-link hidden-sm-down text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="ti-search"></i></a>
                            <form class="app-search">
                                <input type="text" class="form-control" placeholder="Search & enter"> <a class="srh-btn"><i class="ti-close"></i></a> </form>
                        </li> -->
                    </ul>
                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav my-lg-0">
                        <!-- ============================================================== -->
                        <!-- Profile -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <a href="<?php echo e(route('logout')); ?>"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" style="color: #FFFFFF;">
                                    Logout
                                </a>

                                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                    <?php echo e(csrf_field()); ?>

                                </form>
                                &nbsp;&nbsp;&nbsp;
                                <img src="../../assets/images/users/1.jpg" alt="user" class="profile-pic m-r-10" /></a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li> <a class="waves-effect waves-dark" href="<?php echo e(url('dashboard')); ?>" aria-expanded="false"><i class="mdi mdi-gauge"></i><span class="hide-menu">Dashboard</span></a>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="<?php echo e(url('new-customer')); ?>" aria-expanded="false"><i class="mdi mdi-account-check"></i><span class="hide-menu">New Customer</span></a>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="<?php echo e(url('history')); ?>" aria-expanded="false"><i class="mdi mdi-table"></i><span class="hide-menu">History</span></a>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="<?php echo e(url('my-profile')); ?>" aria-expanded="false"><i class="mdi mdi-emoticon"></i><span class="hide-menu">My profile</span></a>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="<?php echo e(url('message-settings')); ?>" aria-expanded="false"><i class="mdi mdi-email"></i><span class="hide-menu">SMS Settings</span></a>
                        </li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
            <!-- Bottom points-->
            
                
                
                
            <!-- End Bottom points-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
               <br>

                <div class="row" id="page-content">
                    <!-- column -->
                    <div class="col-lg-12">
                        
                        <div class="row">









                            <form name="new-job" id="new-job" method="post" action="<?php echo e(url('dashboard/update/'.$job->Id)); ?>" style="width: 100%;">
                                <?php echo e(csrf_field()); ?>



                            <div class="row" id="title-Row">
                                <div class="col-lg-4">
                                    <p id="page-title">Job Registration</p>
                                </div>
                                <div class="col-lg-3"></div>
                                <div class="col-lg-4" >
                                </div>
                            </div>

                            <div class="row" id="empty-row"> </div>

                            <div class="row">

                            <div class="col-lg-4">
                                <label class="form-label">Customer Name</label><br>
                                <input class="form-control" style="width: 100%;" required name="Name" id="customer-name" value="<?php echo e($job->Name); ?>" placeholder="Nimal">
                                <br><br>
                                <label class="form-label">Phone Number</label><br>
                                <div class="row">
                                <!--
                                    <div class="col-lg-3" id="mobile-ext">
                                        <input class="form-control" name="phone-extention" id="phone-extention" placeholder="+94">
                                    </div>-->
                                    <div class="col-lg-12" id="mobile-number">
                                        <input type="text" required name="Mobile" class="form-control" value="<?php echo e($job->Mobile); ?>" id="phone-number" placeholder="User Name (Mobile)">
                                    </div>
                                </div>
                                <br>
                                <label class="form-label">Work</label><br>
                                <input type="text" class="form-control" name="Work" value="<?php echo e($job->Work); ?>" id="work" placeholder="A Description About Work">
                                <br><br>
                            </div>

                            <div class="col-lg-1"></div>

                            <div class="col-lg-4">
                                <label class="form-label">Completion Date (Estimated)</label><br>
                                <input type="Date" required name="Complete_Date" value="<?php echo e($job->Complete_Date); ?>" id="completion-date" class="form-control">
                                <br><br>
                                <label class="form-label">Amount</label><br>
                                <input type="text" class="form-control" value="<?php echo e($job->Amount); ?>" required name="Amount" id="amount" placeholder="LKR Amount">
                                <br><br>

                                <div class="row">
                                    <div class="col-lg-8"></div>
                                    <div class="col-lg-4" id="btn-row">
                                        
                                        
                                        <input type="submit" class="btn btn-title" style="background-color: #1abc9c;" name="submit" id="submit" value="Update">
                                    </div>
                                </div>
                            </div>  

                            </div> 
                                
                            </form>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="../../assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../../assets/plugins/bootstrap/js/tether.min.js"></script>
    <script src="../../assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="../../js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="../../js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="../../js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="../../assets/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <!--Custom JavaScript -->
    <script src="../../js/custom.min.js"></script>
</body>

</html>
