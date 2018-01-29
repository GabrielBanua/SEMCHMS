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
	<meta name="google" content="notranslate">
    <link rel="shortcut icon" href="img/favicon.ico">

    <title>Patient List Report</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />
	<link href="css/invoice-print.css" rel="stylesheet" media="print">

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
          <a href="index.html" class="logo" >St. Ezekiel Moreno<span>|Healthcare Management System</span></a>
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
                      <a href="javascript:;" class="active">
                          <i class="icon-user"></i>
                          <span>Patient Management</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="add-patient.php">Add Patients</a></li>
                          <li><a  href="view-patients.php">View Patients</a></li>
						  <li class="active"><a  href="patient-reports-panel.php">Patient Reports</a></li>
                      </ul>
                  </li>
				  
				  <li class="sub-menu">
                      <a href="javascript:;">
                          <i class="icon-calendar"></i>
                          <span>Schedule Management</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="set-schedule.php">Set Schedule</a></li>
                          <li><a  href="view-schedule.php">View Schedule</a></li>
						  <li><a  href="sched-reports-panel">Schedule Reports</a></li>
                      </ul>
                  </li>
				  
				  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="icon-truck"></i>
                          <span>Inventory Management</span>
                      </a>
                      <ul class="sub">
						  <li><a href="view-inventory.php">View Inventory</a></li>
						  <li><a href="inv-reports-panel.php">Inventory Reports</a></li>
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
                      <a href="javascript:;">
                          <i class="icon-download-alt"></i>
                          <span>Maintenance</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="backup.php">Backup Database</a></li>
						  <li><a  href="view-users.php">Manage Users</a></li>
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
                          <header class="panel-heading">
                              Patient List Report
							  <div class="pull-right">
							  <a class="btn btn-success btn-sm" onclick="javascript:window.print();"><i class="icon-print"></i> Print </a>
							  </div>
                          </header>
                          <div class="panel-body">
                          <div class="#">
								<div class="pull-right"><span>Date Printed: 1/28/2018</span></div><br>
								  <div class="pull-right"><span>Printed By: Gabriel1011</span></div><br>
							  <div class="text-center corporate-id">
                                  <img src="img/form-header.jpg" alt="" style="height:100px">
								  <h3>List of Patient 2018</h3>
                              </div>
                          </div>
                          <table class="table table-striped table-hover">
                              <thead>
                              <tr>
                                  <th>#</th>
                                  <th>Patient Name</th>
                                  <th class="hidden-phone">Address</th>
                                  <th class="">Date</th>
                                  <th class="text-center">Visits</th>
                                  <th>Status</th>
                              </tr>
                              </thead>
                              <tbody>
                              <tr>
                                  <td>P1</td>
                                  <td>Gabriel Banua</td>
                                  <td class="hidden-phone">Canlaon City</td>
                                  <td class="">1-1-2018</td>
                                  <td class="text-center">2</td>
                                  <td>Active</td>
                              </tr>
                              <tr>
                                  <td>P2</td>
                                  <td>Alessander Neal Rubiato</td>
                                  <td class="hidden-phone">Sta. Clara, Bacolod City</td>
                                  <td class="">1-1-2018</td>
                                  <td class="text-center">1</td>
                                  <td>Inactive</td>
                              </tr>
							  <tr>
                                  <td>P3</td>
                                  <td>Alson John Bayon-on</td>
                                  <td class="hidden-phone">Bacolod City</td>
                                  <td class="">1-1-2018</td>
                                  <td class="text-center">3</td>
                                  <td>Active</td>
                              </tr>
							  <tr>
                                  <td>P4</td>
                                  <td>Alvin Yanson</td>
                                  <td class="hidden-phone">Bacolod City</td>
                                  <td class="">1-1-2018</td>
                                  <td class="text-center">3</td>
                                  <td>Active</td>
                              </tr>
							  <tr>
                                  <td>P5</td>
                                  <td>Carl Betio</td>
                                  <td class="hidden-phone">Bacolod City</td>
                                  <td class="">1-1-2018</td>
                                  <td class="text-center">3</td>
                                  <td>Active</td>
                              </tr>
							  <tr>
                                  <td>P6</td>
                                  <td>Alvin Galoyo</td>
                                  <td class="hidden-phone">Bacolod City</td>
                                  <td class="">1-1-2018</td>
                                  <td class="text-center">3</td>
                                  <td>Active</td>
                              </tr>
							  <tr>
                                  <td>P7</td>
                                  <td>Erul John Grapes</td>
                                  <td class="hidden-phone">Bacolod City</td>
                                  <td class="">1-1-2018</td>
                                  <td class="text-center">3</td>
                                  <td>Active</td>
                              </tr>
							  <tr>
                                  <td>P8</td>
                                  <td>Daniel Molabin</td>
                                  <td class="hidden-phone">Bacolod City</td>
                                  <td class="">1-1-2018</td>
                                  <td class="text-center">3</td>
                                  <td>Active</td>
                              </tr>
							  <tr>
                                  <td>P9</td>
                                  <td>Mercy Dohinog</td>
                                  <td class="hidden-phone">Bacolod City</td>
                                  <td class="">1-1-2018</td>
                                  <td class="text-center">3</td>
                                  <td>Active</td>
                              </tr>
							  <tr>
                                  <td>P10</td>
                                  <td>Entes Leonel</td>
                                  <td class="hidden-phone">Bacolod City</td>
                                  <td class="">1-1-2018</td>
                                  <td class="text-center">3</td>
                                  <td>Active</td>
                              </tr>
							  <tr>
                                  <td>P11</td>
                                  <td>Vicent Suyo</td>
                                  <td class="hidden-phone">Bacolod City</td>
                                  <td class="">1-1-2018</td>
                                  <td class="text-center">3</td>
                                  <td>Active</td>
                              </tr>
                              </tbody>
                          </table>
                          <div class="row">
                              <div class="col-lg-4 invoice-block pull-right">
                                  <ul class="unstyled amounts">
                                      <li><strong>Male :</strong> 10</li>
                                      <li><strong>Female :</strong> 1</li>
                                      <li><strong>Patient Total :</strong> 11</li>
                                  </ul>
                              </div>
                          </div>
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
    <!--<script src="js/jquery.js"></script>-->
    <script type="text/javascript" language="javascript" src="assets/advanced-datatable/media/js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
    <script type="text/javascript" language="javascript" src="assets/advanced-datatable/media/js/jquery.dataTables.js"></script>
    <script src="js/respond.min.js" ></script>
	<script>
		$('.btn').on('click', function() {
			var $this = $(this);
		  $this.button('loading');
			setTimeout(function() {
			   $this.button('reset');
		   }, 8000);
		});

    $(document).ready(function(){
        var Auth ='<?php echo $Position; ?>';
        if (Auth == "Admin") 
        {                       
            $('#Patient-li').show(); 
            $('#Schedule-li').show();
            $('#Inventory-li').show();
            $('#Laboratory-li').show();
            $('#Reports-li').show();
            $('#User-li').show();
            $('#Maintenance-li').show();
        }
        else if(Auth == "Doctor") {
            $('#User-li').hide();
            $('#Patient-li').hide();
            $('#Maintenance-li').hide();
            $('#Reports-li').hide();
            $('#Laboratory-li').hide();
            $('#Inventory-li').hide();
        }
        else if(Auth == "Medtech") {
            $('#User-li').hide();
            $('#Maintenance-li').hide();
            $('#Reports-li').hide();
            $('#Patient-li').hide();
            $('#Schedule-li').hide();
            $('#Inventory-li').hide();
        }
        });
	</script>
  <!--common script for all pages-->
    <script src="js/common-scripts.js"></script>

  </body>
</html>
