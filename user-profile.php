<?php
require 'lib/session.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/favicon.ico">

    <title>User Profile</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
	<link href="assets/advanced-datatable/media/css/demo_page.css" rel="stylesheet" />
    <link href="assets/advanced-datatable/media/css/demo_table.css" rel="stylesheet" />
	<link rel="stylesheet" type="text/css" href="assets/select2/css/select2.min.css"/>
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

  <section id="container" class="">
      <!--header start-->
      <header class="header white-bg">
          <div class="sidebar-toggle-box">
              <div data-original-title="Toggle Navigation" data-placement="right" class="icon-reorder tooltips"></div>
          </div>
          <!--logo start-->
          <a href="index.php" class="logo" >St.Ezekiel Moreno<span>|Healthcare Management System</span></a>
          <!--logo end-->
          <div class="top-nav ">
              <ul class="nav pull-right top-menu">
                  <li>
                      <input type="text" class="form-control search" placeholder="Search">
                  </li>
                  <!-- user login dropdown start-->
                  <li class="dropdown">
                      <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                          <img alt="" src="img/avatar1_small.jpg">
                          <span class="username"><b><?php echo $UserN; ?></b></span>
                          <b class="caret"></b>
                      </a>
                      <ul class="dropdown-menu extended logout">
                          <div class="log-arrow-up"></div>
                          <li><a href="#"><i class=" icon-suitcase"></i>Profile</a></li>
                          <li><a href="#"><i class="icon-cog"></i> Settings</a></li>
                          <li><a href="#"><i class="icon-bell-alt"></i> Notification</a></li>
                          <li><a href="logout.php"><i class="icon-key"></i> Log Out</a></li>
                      </ul>
                  </li>
                  <!-- user login dropdown end -->
              </ul>
          </div>
      </header>
      <!--header end-->
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
                  <li>
                      <a href="index.php">
                          <i class="icon-dashboard"></i>
                          <span>Home</span>
                      </a>
                  </li>

                  <li class="sub-menu" id="Patient-li">
                      <a href="javascript:;">
                          <i class="icon-user"></i>
                          <span>Patient Management</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="add-patient.php">Add Patients</a></li>
                          <li><a  href="view-patients.php">View Patients</a></li>
						  <li><a  href="patient-reports-panel.php">Patient Reports</a></li>
                      </ul>
                  </li>
				  
				  <li class="sub-menu" id="Schedule-li">
                      <a href="javascript:;" >
                          <i class="icon-calendar"></i>
                          <span>Schedule Management</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="set-schedule.php">Set Schedule</a></li>
                          <li><a  href="view-schedule.php">View Schedule</a></li>
						  <li><a  href="sched-reports-panel.php">Schedule Reports</a></li>
                      </ul>
                  </li>
				  
				  <li class="sub-menu" id="Inventory-li">
                      <a href="javascript:;" >
                          <i class="icon-truck"></i>
                          <span>Inventory Management</span>
                      </a>
                      <ul class="sub">
                            <li><a href="view-inventory.php">View Inventory</a></li>
							<li><a  href="inv-reports-panel.php">Inventory Reports</a></li>
                      </ul>
                  </li>
				  
				  <li class="sub-menu" id="Laboratory-li">
                      <a href="javascript:;">
                          <i class="icon-beaker"></i>
                          <span>Lab Management</span>
                      </a>
                      <ul class="sub">
						  <li><a  href="labtest.php">Add Lab Results</a></li>
						  <li><a  href="lab-request.php">View Lab Request</a></li>
						  <li><a  href="labview.php">View Lab Records</a></li>
						  <li><a  href="lab-reports-panel.php">Laboratory Reports</a></li>
                      </ul>
                  </li>

				  <li class="sub-menu" id="Maintenance-li">
                      <a href="javascript:;" class="active" >
                          <i class="icon-download-alt"></i>
                          <span>Maintenance</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="backup.php">Backup Database</a></li>
						  <li class="active" ><a  href="view-users.php">Manage Users</a></li>
                      </ul>
                  </li>
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
              <!-- page start-->
              <div class="row">
                  <aside class="profile-nav col-lg-3">
                      <section class="panel">
                          <div class="user-heading round">
                              <a href="#">
                                  <img src="patientpics/pic_20180125192317.jpeg" alt="">
                              </a>
                              <h3></h3>
                              <p></p>
                          </div>

                          <ul class="nav nav-pills nav-stacked">
                              <li class="active"><a> <i class="icon-user"></i> Profile</a></li>
                          </ul>

                      </section>
                  </aside>
                  <aside class="profile-info col-lg-9">
                      <section class="panel">
          							<header class="panel-heading ">
                                        User Profile:
          							</header>
                          <div class="panel-body bio-graph-info">
                              <div class="row">
                                  <div class="bio-row">
                                      <p><b><span>Date&nbsp;Registered </span></b> : </p>
                                  </div>
                                  <div class="bio-row">
                                      <p><b><span>Address </span></b>: </p>
                                  </div>
                                  <div class="bio-row">
                                      <p><b><span>First Name</span></b>: </p>
                                  </div>
                                  <div class="bio-row">
                                      <p><b><span>Religion </span></b>: </p>
                                  </div>
                                  <div class="bio-row">
                                      <p><b><span>Middle Name </span></b>: </p>
                                  </div>
                                  <div class="bio-row">
                                      <p><b><span>Type </span></b>: </p>
                                  </div>
                                  <div class="bio-row">
                                      <p><b><span>Last Name </span></b>: </p>
                                  </div>
                                  <div class="bio-row">
                                      <p><b><span>Civil Status </span></b>: </p>
                                  </div>
                                  <div class="bio-row">
                                      <p><b><span>Birthday </span></b>: </p>
                                  </div>
                                  <div class="bio-row">
                                      <p><b><span>Occupation </span></b>: </p>
                                  </div>
                                  <div class="bio-row">
                                      <p><b><span>Age </span></b>: </p>
                                  </div>
                                  <div class="bio-row">
                                      <p><b><span>Occupation<br>(FBW)</span></b>: </p>
                                  </div>
                                  <div class="bio-row">
                                      <p><b><span>Gender </span></b>: </p>
                                  </div>
                                  <div class="bio-row">
                                      <p><b><span>Mobile </span></b>: </p>
                                  </div>
                                  <div class="bio-row">
                                      <p><b><span>Weight(kg) </span></b>: </p>
                                  </div>
                                  <div class="bio-row">
                                      <p><b><span>Height(cm) </span></b>: </p>
                                  </div>
                              </div>
                          </div>
                      </section>
                      <section>
                          <div class="row">
							 <div class="col-lg-12">
							 
							  </div>
                      </section>
					  </aside>
              </div>

              <!-- page end-->
          </section>
      </section>
      <!--main content end-->
      <!--footer start-->
      <footer class="site-footer">
          <div class="text-center">
              2017-2018 &copy; Primal Tinkers.
              <a href="#" class="go-top">
                  <i class="icon-angle-up"></i>
              </a>
          </div>
      </footer>
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="assets/jquery-knob/js/jquery.knob.js"></script>
    <script src="js/respond.min.js" ></script>
	<script type="text/javascript" language="javascript" src="assets/advanced-datatable/media/js/jquery.dataTables.js"></script>

    <!--common script for all pages-->
    <script src="js/common-scripts.js"></script>
    <script type="text/javascript" src="assets/select2/js/select2.min.js"></script>
	<script src="js/checkboxhide.js"></script>
    <?php
        include 'lib/functions/view-patients-profile-script.php';
    ?>
  </body>
</html>
