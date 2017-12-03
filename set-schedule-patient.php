<?php
require 'lib/session.php';
require 'lib/Db.config.php';
require 'lib/Db.config.pdo.php';
$SET_ID = isset($_GET['SID'])?$_GET['SID']:'';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/favicon.ico">

    <title>Scheduling</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
	<link rel="stylesheet" type="text/css" href="assets/bootstrap-fileupload/bootstrap-fileupload.css" />
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
          <a href="index.php" class="logo" >St. Ezekiel Moreno<span>|Healthcare Management System</span></a>
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
                      <a href="index.html">
                          <i class="icon-dashboard"></i>
                          <span>Home</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;">
                          <i class="icon-user"></i>
                          <span>Patient Management</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="add-patient.php">Add Patients</a></li>
                          <li><a  href="view-patients.php">View Patients</a></li>
                      </ul>
                  </li>
				  
				  <li class="sub-menu">
                      <a href="javascript:;" class="active">
                          <i class="icon-calendar"></i>
                          <span>Schedule Management</span>
                      </a>
                      <ul class="sub">
                          <li class="active"><a  href="set-schedule.php">Set Schedule</a></li>
                          <li><a  href="view-schedule.php">View Schedule</a></li>
                      </ul>
                  </li>
				  
				  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="icon-truck"></i>
                          <span>Inventory Management</span>
                      </a>
                      <ul class="sub">
                          <li><a href="add-inventory.php">Add Inventory</a></li>
							<li><a href="add-medicines.php">Add Medicines</a></li>
                            <li><a href="view-inventory.php">View Inventory</a></li>
                      </ul>
                  </li>
				  
				  <li class="sub-menu">
                      <a href="javascript:;">
                          <i class="icon-beaker"></i>
                          <span>Lab Management</span>
                      </a>
                      <ul class="sub">
                          <li class="sub-menu">
                              <a href="javascript:;">Add Lab Results</a>
                              <ul class="sub">
                                  <li><a href="add-lab-blood.php">Blood Chemistry</a></li>
								  <li><a href="add-lab-fecal.php">Fecalysis</a></li>
								  <li><a href="add-lab-hema.php">Hematology</a></li>
								  <li><a href="add-lab-urinal.php">Urinalysis</a></li>
                              </ul>
                          </li>
						  <li><a  href="lab-request.php">View Lab Request</a></li>
						  <li><a  href="#">View Lab Records</a></li>
                      </ul>
                  </li>
				  
				  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="icon-group"></i>
                          <span>Users Management</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="add-user.php">Add New User</a></li>
                          <li><a  href="view-users.php">View User</a></li>
                      </ul>
                  </li>
				  
				  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="icon-print"></i>
                          <span>Reports</span>
                      </a>
                      <ul class="sub">
                          <li><a href="reports.php">Generate Reports</a></li>
                      </ul>
                  </li>
				  
				  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="icon-download-alt"></i>
                          <span>Maintenance</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="backup.php">Backup Database</a></li>
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
                  <div class="profile-info col-lg-12">
                      <section class="panel">
							<header class="panel-heading">
                              Patient Details:
							  </header>
                              <div class="panel-body">
                              <a href="#" class="task-thumb">
                                  <img src="img/profile-avatar.jpg" alt="">
								  <span class="btn btn-white btn-file">
								  <span class="fileupload-new"><i class="icon-paper-clip"></i> Select image</span>
                              </a>
                              <!--<div class="task-thumb-details">
                                  <h1>Anjelina Joli</h1>
                                  <p>Senior Architect</p>
                              </div>
							  -->
                          </div>
                          <div class="panel-body bio-graph-info">
                              <h1>Personal Information:</h1>
                              <form class="form-horizontal" role="form">
								  <div class="form-group">
                                      <label  class="col-lg-2 control-label">Patient Id</label>
                                      <div class="col-lg-4">
                                          <input type="text" value="0000001" readonly class="form_datetime form-control">
                                      </div>
                                  </div>
								  <div class="form-group">
                                      <label  class="col-lg-2 control-label">Date Registered:</label>
                                      <div class="col-lg-4">
                                          <input type="text" value="2012-06-15 14:45" readonly class="form_datetime form-control">
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label  class="col-lg-2 control-label">First Name</label>
                                      <div class="col-lg-4">
                                          <input type="text" class="form-control" placeholder=" " value="Alec" disabled>
                                      </div>
                                  </div>
								  <div class="form-group">
                                      <label  class="col-lg-2 control-label">Middle Name</label>
                                      <div class="col-lg-4">
                                          <input type="text" class="form-control" placeholder=" " value="" disabled>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label  class="col-lg-2 control-label">Last Name</label>
                                      <div class="col-lg-4">
                                          <input type="text" class="form-control" placeholder=" " value="Rubiato" disabled>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label  class="col-lg-2 control-label">Address</label>
                                      <div class="col-lg-4">
                                          <input type="text" class="form-control" placeholder=" " value="Bacolod City" disabled>
                                      </div>
                                  </div>
								  <div class="form-group">
                                      <label  class="col-lg-2 control-label">Gender</label>
                                      <div class="col-lg-4">
                                          <select class="form-control">
												<option>Male</option>
										</select>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label  class="col-lg-2 control-label">Birthday</label>
                                      <div class="col-lg-4">
                                          <input type="text" class="form-control" placeholder=" " value="2/29/1996" disabled>
                                      </div>
                                  </div>
								  <div class="form-group">
                                      <label  class="col-lg-2 control-label">Age</label>
                                      <div class="col-lg-2">
                                          <input type="text" class="form-control" placeholder=" " value="20" disabled>
                                      </div>
                                  </div>
								  <div class="form-group">
                                      <label  class="col-lg-2 control-label">Category</label>
                                      <div class="col-lg-4">
                                          <select class="form-control">
												<option>Adult</option>
										</select>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label  class="col-lg-2 control-label">Occupation</label>
                                      <div class="col-lg-4">
                                          <input type="text" class="form-control" placeholder=" " value="programmer" disabled>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label  class="col-lg-2 control-label">Contact Number</label>
                                      <div class="col-lg-4">
                                          <input type="text" class="form-control" placeholder=" " value="09123456789" disabled>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label  class="col-lg-2 control-label">Religion</label>
                                      <div class="col-lg-4">
                                          <select class="form-control">
												<option>Muslim</option>
										</select>
                                      </div>
                                  </div>
                              </form>
                          </div>
                      </section>
					  <section class="panel">
							<header class="panel-heading">
                              Schedule Details
							  </header>
                          <div class="panel-body bio-graph-info">
                              <form class="form-horizontal" role="form">
                                  <div class="form-group">
                                      <label  class="col-lg-2 control-label">Date Schedule</label>
                                      <div class="col-lg-4">
                                          <input type="text" class="form-control" placeholder=" "autofocus required>
                                      </div>
                                  </div>
								  <div class="form-group">
                                      <label  class="col-lg-2 control-label">Time</label>
                                      <div class="col-lg-4">
                                          <input type="text" class="form-control" placeholder=" " required>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label  class="col-lg-2 control-label">Consultant</label>
                                      <div class="col-lg-4">
                                          <input type="text" class="form-control" placeholder=" ">
                                      </div>
                                  </div>
								  <div class="form-group">
                                      <label  class="col-lg-2 control-label">Appointment Reason</label>
                                      <div class="col-lg-4">
                                          <select class="form-control">
												<option>-None-</option>
												<option>Consultation</option>
												<option>Follow up Checkup</option>
										</select>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <div class="col-lg-offset-2 col-lg-10">
                                          <button type="submit" class="btn btn-success">Set Schedule</button>
                                          <button type="button" class="btn btn-default">Cancel</button>
                                      </div>
                                  </div>
                              </form>
                          </div>
                      </section>
                
                  </div>
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
    <!--common script for all pages-->
    <script src="js/common-scripts.js"></script>


  </body>
</html>
