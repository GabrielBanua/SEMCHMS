<?php
require 'lib/session.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/favicon.ico">

    <title>Reports</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="assets/bootstrap-fileupload/bootstrap-fileupload.css" />
    <link rel="stylesheet" type="text/css" href="assets/bootstrap-timepicker/compiled/timepicker.css" />
    <link rel="stylesheet" type="text/css" href="assets/bootstrap-colorpicker/css/colorpicker.css" />
    <link rel="stylesheet" type="text/css" href="assets/bootstrap-daterangepicker/daterangepicker-bs3.css" />
    <link rel="stylesheet" type="text/css" href="assets/bootstrap-datetimepicker/css/datetimepicker.css" />
    <link rel="stylesheet" type="text/css" href="assets/jquery-multi-select/css/multi-select.css" />
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
            <a href="index.php" class="logo">St. Ezekiel Moreno<span>|Healthcare Management System</span></a>
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
                            <li><a onclick="logout()"><i class="icon-key"></i> Log Out</a></li>
                        </ul>
                    </li>
                    <!-- user login dropdown end -->
                </ul>
            </div>
        </header>
        <!--header end-->
        <!--sidebar start-->
        <aside>
            <div id="sidebar" class="nav-collapse ">
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
                            <li><a href="add-patient.php">Add Patients</a></li>
                            <li><a href="view-patients.php">View Patients</a></li>
                        </ul>
                    </li>

                    <li class="sub-menu">
                        <a href="javascript:;">
                            <i class="icon-calendar"></i>
                            <span>Schedule Management</span>
                        </a>
                        <ul class="sub">
                            <li><a href="set-schedule.php">Set Schedule</a></li>
                            <li><a href="view-schedule.php">View Schedule</a></li>
                        </ul>
                    </li>

                    <li class="sub-menu">
                        <a href="javascript:;">
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
                        <a href="javascript:;">
                            <i class="icon-group"></i>
                            <span>Users Management</span>
                        </a>
                        <ul class="sub">
                            <li><a href="add-user.php">Add New User</a></li>
                            <li><a href="view-users.php">Manage Users</a></li>
                        </ul>
                    </li>

                    <li class="sub-menu">
                        <a href="javascript:;" class="active">
                            <i class="icon-print"></i>
                            <span>Reports</span>
                        </a>
                        <ul class="sub">
                            <li class="active"><a href="reports.php">Generate Reports</a></li>
                        </ul>
                    </li>

                    <li class="sub-menu">
                        <a href="javascript:;">
                            <i class="icon-download-alt"></i>
                            <span>Maintenance</span>
                        </a>
                        <ul class="sub">
                            <li><a href="backup.php">Backup Database</a></li>
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
                            Generate Reports
                        </header>
                        <div class="panel-body bio-graph-info">
                            <h1>Reports</h1>
                            <form class="form-horizontal" role="form">
                                <div class="form-group">
                                    <label class="col-lg-2 control-label">Report Type</label>
                                    <div class="col-lg-4">
                                        <select class="form-control" name="select1" id="select1">
											  <option selected hidden>Select</option>
											  <option value="1">Patient</option>
											  <option value="2">Laboratory</option>
											  <option value="3">Inventory</option>
											</select>

											<select class="form-control" name="select2" id="select2">
											  <option selected hidden>Select</option>
											  <option value="1">Number of Patients</option>
											  <option value="1">Patient Medical Records</option>
											  <option value="2">Blood Chemistry</option>
											  <option value="2">Fecalysis</option>
											  <option value="2">Hematology</option>
											  <option value="2">Urinalysis</option>
											  <option value="3">Medicines</option>
											  <option value="3">Stocks</option>
											</select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-2">Date Range</label>
                                    <div class="col-md-4">
                                        <div class="input-group input-large" data-date="13/07/2013" data-date-format="mm/dd/yyyy">
                                            <input type="text" class="form-control dpd1" name="from">
                                            <span class="input-group-addon">To</span>
                                            <input type="text" class="form-control dpd2" name="to">
                                        </div>
                                        <span class="help-block">Select date range</span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-lg-offset-2 col-lg-10">
                                        <button type="submit" class="btn btn-success">Generate Reports</button>
                                        <button type="button" class="btn btn-default">Cancel</button>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </section>
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

    <!--Plugins -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="js/respond.min.js"></script>

    <!--this page plugins-->

    <script type="text/javascript" src="assets/fuelux/js/spinner.min.js"></script>
    <script type="text/javascript" src="assets/bootstrap-fileupload/bootstrap-fileupload.js"></script>
    <script type="text/javascript" src="assets/bootstrap-wysihtml5/wysihtml5-0.3.0.js"></script>
    <script type="text/javascript" src="assets/bootstrap-wysihtml5/bootstrap-wysihtml5.js"></script>
    <script type="text/javascript" src="assets/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
    <script type="text/javascript" src="assets/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js"></script>
    <script type="text/javascript" src="assets/bootstrap-daterangepicker/moment.min.js"></script>
    <script type="text/javascript" src="assets/bootstrap-daterangepicker/daterangepicker.js"></script>
    <script type="text/javascript" src="assets/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>
    <script type="text/javascript" src="assets/bootstrap-timepicker/js/bootstrap-timepicker.js"></script>
    <script type="text/javascript" src="assets/jquery-multi-select/js/jquery.multi-select.js"></script>
    <script type="text/javascript" src="assets/jquery-multi-select/js/jquery.quicksearch.js"></script>

    <!--common script for all pages-->
    <script src="js/common-scripts.js"></script>
    <!--this page  script only-->
    <script src="js/advanced-form-components.js"></script>
	<script>
		$("#select1").change(function() {
		  if ($(this).data('options') === undefined) {
			/*Taking an array of all options-2 and kind of embedding it on the select1*/
			$(this).data('options', $('#select2 option').clone());
		  }
		  var id = $(this).val();
		  var options = $(this).data('options').filter('[value=' + id + ']');
		  $('#select2').html(options);
		});
	</script>
<?php
include 'lib/User-Accesslvl.php';
include 'lib/logout.script.php';
?>

</body>

</html>