<?php
require 'lib/session.php';
if($Position == "Doctor"){
  header('Location: index.php');
}
else if($Position == "Volunter"){
  header('Location: index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Urinalysis</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/advanced-datatable/media/css/demo_page.css" rel="stylesheet" />
    <link href="assets/advanced-datatable/media/css/demo_table.css" rel="stylesheet" />
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
          <a href="index.php" class="logo" >St. Ezekiel Moreno<span>|Healthcare Management Systems</span></a>
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
                      <a href="javascript:;" >
                          <i class="icon-calendar"></i>
                          <span>Schedule Management</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="set-schedule.php">Set Schedule</a></li>
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
                      <a href="javascript:;" class="active">
                          <i class="icon-beaker"></i>
                          <span>Lab Management</span>
                      </a>
                      <ul class="sub">
                          <li class="sub-menu">
                              <a href="javascript:;" class="active">Add Lab Test</a>
                              <ul class="sub">
                                  <li><a href="add-lab-blood.php">Blood Chemistry</a></li>
								  <li><a href="add-lab-fecal.php">Fecalysis</a></li>
								  <li><a href="add-lab-hema.php">Hematology</a></li>
								  <li class="active"><a href="add-lab-urinal.php">Urinalysis</a></li>
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
                          <li><a  href="view-users.php">View Users</a></li>
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
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading text-center">
                              Urinalysis
                          </header>
						  <div class="panel-body">
								<form class="form-horizontal" role="get">
									<div class="form-group">
                                      <label class="col-sm-1 control-label">Name:</label>
                                      <div class="col-sm-5">
                                          <input type="text" class="form-control">
										</div>
										<label class="col-sm-1 control-label">Date:</label>
                                      <div class="col-sm-3">
                                          <input type="text" class="form-control">
										</div>
									</div>
									<div class="form-group">
                                      <label class="col-sm-1 control-label">Address:</label>
                                      <div class="col-sm-5">
                                          <input type="text" class="form-control">
										</div>
										<label class="col-sm-1 control-label">Age:</label>
                                      <div class="col-sm-2">
                                          <input type="text" class="form-control">
										</div>
									</div>
									<div class="form-group">
                                      <label class="col-sm-1 control-label">Physician:</label>
                                      <div class="col-sm-5">
                                          <input type="text" class="form-control">
										</div>
										<label class="col-sm-1 control-label">Gender:</label>
                                      <div class="col-sm-3">
                                          <input type="text" class="form-control">
										</div>
									</div>
									<div class="form-group">
                                      <label class="col-sm-1 control-label">Time Taken:</label>
                                      <div class="col-sm-2">
                                          <input type="text" class="form-control">
										</div>
										<label class="col-sm-2 control-label">Civil Status:</label>
                                      <div class="col-sm-2">
                                          <input type="text" class="form-control">
										</div>
									</div>
									<!--Results--><hr>
									<label>PHYSICAL PROPERTIES:</label>
									<label style="margin-left: 250px;">PARASITES:</label>
									<label style="margin-left: 250px;">FLAGELLATES:</label>
									<div class="form-group">
                                      <label class="col-sm-1 control-label">Color:</label>
									  <div class="col-sm-3">
										<input type="text" class="form-control">
									  </div>
									  <label class="col-sm-1 control-label">Ascans:</label>
									  <div class="col-sm-3">
										<input type="text" class="form-control">
									  </div>
									  <label class="col-sm-1 control-label">G.lambia:</label>
									  <div class="col-sm-3">
										<input type="text" class="form-control">
									  </div>
                                  </div>
								  <div class="form-group">
                                      <label class="col-sm-1 control-label">Transparency:</label>
									  <div class="col-sm-3">
										<input type="text" class="form-control">
									  </div>
									  <label class="col-sm-1 control-label">Hookworm:</label>
									  <div class="col-sm-3">
										<input type="text" class="form-control">
									  </div>
									  <label class="col-sm-1 control-label">T.hominis:</label>
									  <div class="col-sm-3">
										<input type="text" class="form-control">
									  </div>
                                  </div>
								  <div class="form-group">
                                      <label class="col-sm-1 control-label">Pm:</label>
									  <div class="col-sm-3">
										<input type="text" class="form-control">
									  </div>
									  <label class="col-sm-1 control-label">Trinchuris:</label>
									  <div class="col-sm-3">
										<input type="text" class="form-control">
									  </div>
                                  </div>
								  <div class="form-group">
                                      <label class="col-sm-1 control-label"></label>
									  <div class="col-sm-3">
									  </div>
									  <label class="col-sm-1 control-label">Strongylordes:</label>
									  <div class="col-sm-3">
										<input type="text" class="form-control">
									  </div>
                                  </div>
								<label>CHEMICAL TEST:</label>
									<label style="margin-left: 350px;">AMOEBA:</label>
									<label style="margin-left: 250px;">FLAGELLATES:</label>
									<div class="form-group">
                                      <label class="col-sm-1 control-label">Occult Blood:</label>
									  <div class="col-sm-3">
										<input type="text" class="form-control">
									  </div>
									  <label class="col-sm-1 control-label">E.histolylica:</label>
									  <div class="col-sm-3">
										<input type="text" class="form-control">
									  </div>
									  <label class="col-sm-1 control-label">G.lambia:</label>
									  <div class="col-sm-3">
										<input type="text" class="form-control">
									  </div>
                                  </div>
								  <div class="form-group">
                                      <label class="col-sm-1 control-label"></label>
									  <div class="col-sm-3">
										<input type="text" class="form-control">
									  </div>
									  <label class="col-sm-1 control-label">Cyst:</label>
									  <div class="col-sm-3">
										<input type="text" class="form-control">
									  </div>
									  <label class="col-sm-1 control-label">T.hominis:</label>
									  <div class="col-sm-3">
										<input type="text" class="form-control">
									  </div>
                                  </div>
								  <div class="form-group">
                                      <label class="col-sm-1 control-label"></label>
									  <div class="col-sm-3">
									  </div>
									  <label class="col-sm-1 control-label">Troup:</label>
									  <div class="col-sm-3">
										<input type="text" class="form-control">
									  </div>
                                  </div>
								  <div class="form-group">
                                      <label class="col-sm-1 control-label"></label>
									  <div class="col-sm-3">
									  </div>
									  <label class="col-sm-1 control-label">Strongylordes:</label>
									  <div class="col-sm-3">
										<input type="text" class="form-control">
									  </div>
                                  </div>
								  <br>
								  <div class="form-group">
                                      <label class="col-sm-2 control-label"></label>
									  <div class="col-sm-3">
										<input type="text" class="form-control">
										<input type="text" class="form-control">
										<p class="form-control-static text-center">Medical Technologist</p>
										</div>
										<label class="col-sm-2 control-label"></label>
									  <div class="col-sm-3">
										<input type="text" class="form-control">
										<input type="text" class="form-control">
										<p class="form-control-static text-center">Pathologist</p>
										</div>
									</div>
									
									<div class="form-group">
                                      <div class="col-lg-offset-2 col-lg-10">
                                          <button type="submit" class="btn btn-success">Save</button>
                                          <button type="button" class="btn btn-default">Cancel</button>
                                      </div>
                                  </div>
								</form>
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
    <!--<script src="js/jquery.js"></script>-->
    <script type="text/javascript" language="javascript" src="assets/advanced-datatable/media/js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
    <script type="text/javascript" language="javascript" src="assets/advanced-datatable/media/js/jquery.dataTables.js"></script>
    <script src="js/respond.min.js" ></script>


  <!--common script for all pages-->
    <script src="js/common-scripts.js"></script>

    <!--script for this page only-->

      <script type="text/javascript" charset="utf-8">
          $(document).ready(function() {
              $('#example').dataTable( {
                  "aaSorting": [[ 4, "desc" ]]
              } );
          } );
      </script>
  </body>
</html>
