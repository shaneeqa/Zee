<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/libs/css/style.css">
    <link rel="stylesheet" href="assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" href="assets/vendor/charts/chartist-bundle/chartist.css">
    <link rel="stylesheet" href="assets/vendor/charts/morris-bundle/morris.css">
    <link rel="stylesheet" href="assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendor/charts/c3charts/c3.css">
    <link rel="stylesheet" href="assets/vendor/fonts/flag-icon-css/flag-icon.min.css">
    <title>Concept - Bootstrap 4 Admin Dashboard Template</title>
</head>

<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
        <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
        <div class="dashboard-header">
            <nav class="navbar navbar-expand-lg bg-white fixed-top">
                <a class="navbar-brand" href="index.html">Concept</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>

                </button>

            </nav>
        </div>
        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->
        <div class="nav-left-sidebar sidebar-dark">
            <div class="menu-list">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav flex-column">
                            <li class="nav-divider">
                                Menu
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link active" href="Project_Details.html"><i class="fa fa-fw fa-user-circle"></i>Project Details<span class="badge badge-success">6</span></a>                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="Views.html"><i class="fa fa-fw fa-user-circle"></i>Views<span class="badge badge-success">6</span></a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link active" href="index.html"><i class="fa fa-fw fa-user-circle"></i>Create Employee<span class="badge badge-success">6</span></a>

                            </li>
                            <li class="nav-item ">
                                <a class="nav-link active" href="Project_Details.html"><i class="fa fa-fw fa-user-circle"></i>Create Project<span class="badge badge-success">6</span></a>

                            </li>
                            <li class="nav-item">
                              <a class="nav-link active" href="index.html"><i class="fa fa-fw fa-user-circle"></i>Home<span class="badge badge-success">6</span></a>

                            </li>




                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end left sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->

        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            <div class="container-fluid dashboard-content">
                <div class="row">
                    <div class="col-xl-10">
                        <!-- ============================================================== -->
                        <!-- pageheader  -->
                        <!-- ============================================================== -->
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="page-header" id="top">
                                    <h2 class="pageheader-title">Employee Details</h2>
                                    <p class="pageheader-text"></p>

                                </div>
                            </div>
                        </div>
                        <!-- ============================================================== -->
                        <!-- end pageheader  -->
                        <!-- ============================================================== -->
                        <div class="page-section" id="overview">
                            <!-- ============================================================== -->
                            <!-- overview  -->
                            <!-- ============================================================== -->
                            <div class="row">
                            </div>
                            <!-- ============================================================== -->
                            <!-- end overview  -->
                            <!-- ============================================================== -->
                        </div>
                        <!-- ============================================================== -->
                        <!-- basic form  -->
                        <!-- ============================================================== -->
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                                <div class="card">

                                    <div class="card-body">
										<?php
											if($_SERVER["REQUEST_METHOD"] == "POST")
											{
												//include 'connection.php';
													$servername = "localhost";
													$username = "root";
													$password = "";
													$dbname = "hr_system";
													// Create connection
													$conn = mysqli_connect($servername, $username, $password, $dbname);
													// Check connection
													if (!$conn) {
														echo "Not Connection";
													}
													//check database
													if(!mysqli_select_db($conn,$dbname))
													{
														echo "Database not selected";
													}
												//assign form values into variables
											$employee_name = $_POST['employeeName'];
											$employee_id = $_POST['employeeId'];
											$employee_email = $_POST['employeeEmail'];
											$employee_gender = $_POST['employeeGender'];
											$employee_age = $_POST['employeeAge'];
											
											
											//insert sql query
											$sql = "insert into emp (emp_id, emp_name, age, empEmail, gender) values ('$employee_id', '$employee_name', '$employee_age', '$employee_email', '$employee_gender');";
											
											if(!mysqli_query($conn, $sql))
											{
												echo "Error: " . mysqli_error($conn);
											}
											else
											{
												echo "Data inserted";
											}
											
											}
											else
											{
										?>
                                        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" >
                                       <!--What is the htmlspecialchars() function?
                                        The htmlspecialchars() function converts special characters to HTML entities. This means that it will replace HTML characters like < and > with &lt; and &gt;. This prevents attackers from exploiting the code by injecting HTML or Javascript code (Cross-site Scripting attacks) in forms.-->
                                            <div class="form-group">
                                                <label for="employeeName" class="col-form-label">Employee Name</label>
                                                <input name="employeeName" type="text" class="form-control" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="employeeId">Employee Id</label>
                                                <input name="employeeId" type="text"  class="form-control" required>

                                            </div>
                                            <div class="form-group">
                                                <label for="employeeEmail" class="col-form-label">Email</label>
                                                <input name="employeeEmail" type="text" class="form-control" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="employeeAge" class="col-form-label">Age</label>
                                                <input name="employeeAge" type="number" class="form-control">
                                            </div>


                                            <h5>Gender</h5>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="employeeGender" checked="" class="custom-control-input" value = "Male"><span class="custom-control-label">Male</span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="employeeGender" class="custom-control-input" value = "Female"><span class="custom-control-label">Female</span>
                                            </label>
                                            <div>
                                                <input class="btn btn-primary" type="submit" value = "Insert">
                                                  </div>

                                        </form>
                                        <?php
											}
											//header("refresh: 2;");//url: index.html;");
										?>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- ============================================================== -->
                        <!-- end basic form  -->
            <!-- ============================================================== -->
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- end wrapper -->

        <!-- ============================================================== -->

    <!-- ============================================================== -->
    <!-- end main wrapper  -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <!-- jquery 3.3.1 -->
    <script src="assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <!-- bootstap bundle js -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <!-- slimscroll js -->
    <script src="assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <!-- main js -->
    <script src="assets/libs/js/main-js.js"></script>
    <!-- chart chartist js -->
    <script src="assets/vendor/charts/chartist-bundle/chartist.min.js"></script>
    <!-- sparkline js -->
    <script src="assets/vendor/charts/sparkline/jquery.sparkline.js"></script>
    <!-- morris js -->
    <script src="assets/vendor/charts/morris-bundle/raphael.min.js"></script>
    <script src="assets/vendor/charts/morris-bundle/morris.js"></script>
    <!-- chart c3 js -->
    <script src="assets/vendor/charts/c3charts/c3.min.js"></script>
    <script src="assets/vendor/charts/c3charts/d3-5.4.0.min.js"></script>
    <script src="assets/vendor/charts/c3charts/C3chartjs.js"></script>
    <script src="assets/libs/js/dashboard-ecommerce.js"></script>
</body>
</html>