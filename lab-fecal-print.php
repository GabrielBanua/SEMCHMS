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

    <title>Laboratory Report</title>

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
				  
				  <li class="sub-menu">
                      <a href="javascript:;">
                          <i class="icon-calendar"></i>
                          <span>Schedule Management</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="set-schedule.php">Set Schedule</a></li>
                          <li><a  href="view-schedule.php">View Schedule</a></li>
						  <li><a  href="#">Schedule Reports</a></li>
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
                      <a href="javascript:;" class="active">
                          <i class="icon-beaker"></i>
                          <span>Lab Management</span>
                      </a>
                      <ul class="sub">
						  <li><a  href="lab-request.php">View Lab Request</a></li>
						  <li><a  href="labview.php">View Lab Records</a></li>
						  <li class="active"><a  href="lab-reports-panel.php">Laboratory Reports</a></li>
                      </ul>
                  </li>
				  
				  <li class="sub-menu" id="Maintenance-li">
                      <a href="javascript:;">
                          <i class="icon-download-alt"></i>
                          <span>Maintenance</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="backup.php">Backup Database</a></li>
						  <li><a  href="view-users.php">View Users</a></li>
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
                              Laboratory Report
							  <div class="pull-right">
							  <a class="btn btn-success btn-sm" onclick="javascript:window.print();"><i class="icon-print"></i> Print </a>
							  </div>
                          </header>
                          <div class="panel-body">
                          <div class="#">
								<?php
                                    $query = mysql_query("SELECT *, CONCAT(Position,' ',Firstname,' ',Lastname) AS Rank FROM users Where User_id = '$ID'");
                                    $result = mysql_fetch_array($query);
                                ?>
								<div class="pull-right"><span>Date : <?php echo date('m-d-y');?></span></div><br> <!--current date is based on server, main unit must be set up correctly -->
								  <div class="pull-right"><span class = "username">Printed By: <?php echo $result['Rank'];?></span></div><br>
                              <div class="text-center corporate-id">
                                  <img src="img/form-header.jpg" alt="" style="height:100px">
								  <h3><u><b>Fecalisys</b></u></h3>
                              </div>
                          </div>
							<!--- Fecalysis -->
								<div class="col-sm-12 fecal test">
								  <section class="panel">
									  <header class="panel-heading text-center">
									  </header>
									  <table class="table table-bordered">
										  <thead>
										  <tr>
										  <td class="text-center"><b>Name</b></td>
										  <td colspan="2"><input id="#" type="text" class="form-control" size="15"></td>
										  <td class="text-center"><b>Date</b></td>
										  <td><input id="#" type="text" class="form-control"size="5"></td>
										  </tr>
										  <tr>
											  <td class="text-center"><b>Address</b></td>
											  <td colspan="2"><input id="#" type="text" class="form-control" size="15"></td>
											  <td class="text-center"><b>Age</b></td>
											  <td><input id="#" type="text" class="form-control"size="5"></td>
										  </tr>
										  <tr>
											  <td class="text-center"><b>Physician</b></td>
											  <td colspan="2"><input id="#" type="text" class="form-control" size="15"></td>
											  <td class="text-center"><b>Gender</b></td>
											  <td><input id="#" type="text" class="form-control"size="5"></td>
										  </tr>
										   <tr>
											  <td class="text-center"><b>Time Taken</b></td>
											  <td><input id="#" type="text" class="form-control" size="15"></td>
										  </tr>
										  </thead>
										  <tbody>
										  <tr>
											  <th class="text-center" colspan="2">Microscopic Examination:</th>
											  <th class="text-center" colspan="3">Parasite:</th>
											  <th class="text-center" colspan="2">Flagellates:</th>
										  </tr>
										  <tr>
											  <td class="text-center"><b>Color</b></td>
											  <td><input id="#" type="text" class="form-control numdecimal" maxlength="5" size="5"></td>
											  <td class="text-center"><b>Ascans</b></td>
											  <td><input id="#" type="text" class="form-control numdecimal" maxlength="5" size="5"></td>
											  <td>/LPF</td>
											  <td class="text-center"><b>G.lambia<b></td>
											  <td><input id="#" type="text" class="form-control numdecimal" maxlength="5" size="5"></td>
										  </tr>
										  <tr>
											  <td class="text-center"><b>Consistency</b></td>
											  <td><input id="#" type="text" class="form-control numdecimal" maxlength="5" size="5"></td>
											  <td class="text-center"><b>Hookworm</b></td>
											  <td><input id="#" type="text" class="form-control numdecimal" maxlength="5" size="5"></td>
											  <td>/LPF</td>
											  <td class="text-center"><b>T.hominis<b></td>
											  <td><input id="#" type="text" class="form-control numdecimal" maxlength="5" size="5"></td>
										  </tr>
										  <tr>
											  <td class="text-center"><b>Heinths</b></td>
											  <td><input id="#" type="text" class="form-control numdecimal" maxlength="5" size="5"></td>
											  <td class="text-center"><b>Trinchuris</b></td>
											  <td><input id="#" type="text" class="form-control numdecimal" maxlength="5" size="5"></td>
											  <td>/LPF</td>
										  </tr>
										  <tr>
											  <td colspan="2"></td>
											  <td class="text-center"><b>Hookworm</b></td>
											  <td><input id="#" type="text" class="form-control numdecimal" maxlength="5" size="5"></td>
											  <td>/LPF</td>
										  </tr>
										  <tr>
											  <td colspan="7"></td>
										  </tr>
										  <tr>
											  <th class="text-center" colspan="2">Chemical Test</th>
											  <th class="text-center" colspan="3">Amoba:</th>
											  <th class="text-center" colspan="2">Microscopic Examination</th>
										  </tr>
										  <tr>
											  <td class="text-center" rowspan="2"><b>Occult Blood</b></td>
											  <td><input id="#" type="text" class="form-control numdecimal" maxlength="5" size="5"></td>
											  <td class="text-center"><b>E.histolylica:</b></td>
											  <td><input id="#" type="text" class="form-control numdecimal" maxlength="5" size="5"></td>
											  <td>/LPF</td>
											  <td class="text-center"><b>Pus Cells<b></td>
											  <td><input id="#" type="text" class="form-control numdecimal" maxlength="5" size="5"></td>
										  </tr>
										  <tr>
											  <td><input id="#" type="text" class="form-control numdecimal" maxlength="5" size="5"></td>
											  <td class="text-right"><b>Cyst</b></td>
											  <td><input id="#" type="text" class="form-control numdecimal" maxlength="5" size="5"></td>
											  <td>/LPF</td>
											  <td class="text-center"><b>RBC<b></td>
											  <td><input id="#" type="text" class="form-control numdecimal" maxlength="5" size="5"></td>
										  </tr>
										  <tr>
											  <td colspan="2"></td>
											  <td class="text-right"><b>Troup</b></td>
											  <td><input id="#" type="text" class="form-control numdecimal" maxlength="5" size="5"></td>
											  <td>/LPF</td>
										  </tr>
										  <tr>
											  <td colspan="2"></td>
											  <td class="text-center"><b>E.coil:</b></td>
											  <td><input id="#" type="text" class="form-control numdecimal" maxlength="5" size="5"></td>
											  <td>/LPF</td>
										  </tr>
										  <tr>
											  <td colspan="2"></td>
											  <td class="text-right"><b>Cyst</b></td>
											  <td><input id="#" type="text" class="form-control numdecimal" maxlength="5" size="5"></td>
											  <td>/LPF</td>
										  </tr>
										  <tr>
											  <td colspan="2"></td>
											  <td class="text-right"><b>Troup</b></td>
											  <td><input id="#" type="text" class="form-control numdecimal" maxlength="5" size="5"></td>
											  <td>/LPF</td>
										  </tr>
										  </tbody>
									  </table>
								  </section>
								  <div class="row">
									  <div class="col-lg-4 text-center pull-left">
										  <ul class="unstyled amounts">
											  <li><strong>Alec Rubiato</strong></li>
											  <li><strong>#LC3249234908</strong></li>
										  </ul>
									  </div>
									  <div class="col-lg-4 text-center pull-right">
										  <ul class="unstyled amounts">
											  <li><strong>Gabriel Banua</strong></li>
											  <li><strong>#LC429803492</strong></li>
										  </ul>
									  </div>
								  </div>
							  </div>
							  <!--- Fecalysis End-->
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
