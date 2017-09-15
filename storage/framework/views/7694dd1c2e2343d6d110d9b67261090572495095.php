<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
</head>

<body class="fix-header fix-sidebar card-no-border">
   
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
               <br>

               <div id="history-content">

               <div class="row" id="title-Row">
                    <div class="col-lg-4">
                        <p id="page-title">History</p>
                    </div>
                    <div class="col-lg-4"></div>
                    <div class="col-lg-4" >
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-4" id="seach-div">
                        <input type="text" name="search" id="search" placeholder="Search">
                        &nbsp;&nbsp;&nbsp;
                        <button class="btn btn-search" name="search-button" id="search-button">Search</button>
                    </div>
                    <div class="col-lg-4" id="sort-by" style="padding-bottom: 20px;">
                        <label>Sort by :</label>
                        &nbsp;&nbsp;&nbsp;
                        <select  name="sort" id="sort">
                            <option value="status">Status</option>
                            <option value="due date">Due Date</option>
                        </select>
                    </div>
                    <div class="col-lg-1"></div>
                    <div class="col-lg-3">
                        <button class="btn" onclick="location.href='new-customer.php';" style="background-color: #26c6da;">Add New</button>
                        &nbsp;&nbsp;&nbsp;
                        <button class="btn" onclick="location.href='dashboard.php';" style="background-color: #0BABF1;">Dashboard</button>
                    </div>
                </div>

                </div>

                <br>

                 <div class="row">
                    <!-- column -->
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-block">
                                <div class="table-responsive table-bordered">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Mobile</th>
                                                <th>Status</th>
                                                <th>Job</th>
                                                <th>Received</th>
                                                <th>Handover</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Redy</td>
                                                <td>0771459506</td>
                                                <td><input type="text" disabled="true" class="color-show" value="Pending"></td>
                                                <td>Watch Repair</td>
                                                <td>
                                                   14/12/2017
                                                </td>
                                                <td>20/12/2017</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Deshmukh</td>
                                                <td>Gaylord</td>
                                                <td>@Ritesh</td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Sanghani</td>
                                                <td>Gusikowski</td>
                                                <td>@Govinda</td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>Roshan</td>
                                                <td>Rogahn</td>
                                                <td>@Hritik</td>
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td>Joshi</td>
                                                <td>Hickle</td>
                                                <td>@Maruti</td>
                                            </tr>
                                            <tr>
                                                <td>6</td>
                                                <td>Nigam</td>
                                                <td>Eichmann</td>
                                                <td>@Sonu</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
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
    <script src="../assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../assets/plugins/bootstrap/js/tether.min.js"></script>
    <script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="../assets/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <!--Custom JavaScript -->
    <script src="js/custom.min.js"></script>
</body>

</html>
