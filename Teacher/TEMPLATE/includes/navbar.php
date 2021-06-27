<body>
    <?php
    
    if (!isset($_SESSION['email'])) {
    header('location: signin.php');}    
?>
<div class="dashboard-main-wrapper">
        <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
        <div class="dashboard-header">
            <nav class="navbar navbar-expand-lg bg-white fixed-top" style="height: 50px;">
                <a class="navbar-brand" href="index.html">Teacher Panel</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
				 <ul class="navbar-nav ml-auto navbar-right-top">
                        <li class="nav-item dropdown connection">
                            <a class="nav-link" href="logout.php" title="Logout" role="button" > <i class="fa fa-power-off" aria-hidden="true"></i> </a>
                        </li></ul>
						</div>
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
                                <a class="nav-link active" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="fa fa-fw fa-user-circle"></i>Dashboard <span class="badge badge-success">6</span></a>
                                <div id="submenu-1" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                       <li class="nav-item">
                                            <a class="nav-link" href="teacher.php">Profile</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-2" aria-controls="submenu-2"><i class="fas fa-fw fa-cloud"></i>My class Student</a>
                                <div id="submenu-2" class="collapse submenu" style="">
                                <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="student.php">Student's List</a>
                                        </li>
                                </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="notification.php" aria-expanded="false" data-target="#submenu-3" aria-controls="submenu-2"><i class="fas fa-fw fa-chart-pie"></i>Send Notification to class</a>
                                
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="msg_from_stu_to_tea.php" aria-expanded="false" data-target="#submenu-3" aria-controls="submenu-2"><i class="fas fa-fw fa-comment "></i>Message from student</a>
                                
                            </li>
                             <!-- <li class="nav-item">
                                <a class="nav-link" href="msg_from_stu_to_tea.php" aria-expanded="false" data-target="#submenu-3" aria-controls="submenu-2"><i class="fas fa-fw fa-comment "></i>Message From Students</a>
                                
                            </li>
 -->                           <!--  <li class="nav-item">
                                <a class="nav-link" href="contact_admin.php" aria-expanded="false" data-target="#submenu-3" aria-controls="submenu-2"><i class="fas fa-fw fa-envelope"></i>Contact Admin</a>
                                
                            </li> -->
                           <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-9" aria-controls="submenu-5"><i class="fas fa-fw fa-table"></i>Admin</a>
                                <div id="submenu-9" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="msg_from_admin_tea.php">Received messages </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="contact_admin.php">Contact to Admin</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>   

		<div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">
				
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