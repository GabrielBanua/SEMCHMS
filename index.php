<?php
require 'lib/session.php';
require 'lib/chartSQL.php';
$Date = date('Y-m-d');
$TrendMonth = date('M',strtotime($Date));
$TrendMonthname = date('F',strtotime($Date));
$TrendYear = date('Y',strtotime($Date));
$Stmt = mysql_query("Select medical_record.MR_ILL, patient.P_BRGY, COUNT(medical_record.MR_ILL) AS TOTALILL FROM patient INNER JOIN schedule ON patient.P_ID = schedule.P_ID INNER JOIN medical_record ON schedule.SCHEDULE_ID = medical_record.SCHED_ID WHERE medical_record.MONTH = '$TrendMonth' AND medical_record.YEAR = '$TrendYear' Group by medical_record.MR_ILL, patient.P_BRGY ORDER BY TOTALILL DESC LIMIT 5");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/favicon.ico">

    <title>Healthcare Management</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen" />
    <link rel="stylesheet" href="css/owl.carousel.css" type="text/css">
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
    <section id="container">
        <!--header start-->
        <header class="header white-bg">
            <div class="sidebar-toggle-box">
                <div data-original-title="Toggle Navigation" data-placement="right" class="icon-reorder tooltips"></div>
            </div>
            <!--logo start-->
            <a href="index.php" class="logo">St.Ezekiel Moreno<span>|Healthcare Management System</span></a>
            <!--logo end-->
            <div class="top-nav ">
                <!--search & user info start-->
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
                <!--search & user info end-->
            </div>
        </header>
        <!--header end-->
        <!--sidebar start-->
        <aside>
            <div id="sidebar" class="nav-collapse ">
                <!-- sidebar menu start-->
                <ul class="sidebar-menu" id="nav-accordion">
                    <li>
                        <a class="active" href="index.php">
                          <i class="icon-dashboard"></i>
                          <span>Home</span>
                      </a>
                    </li>

                    <li class="sub-menu" id="Patient-li">
                        <a href="javascript:;">
                          <i class="icon-user"></i>
                          <span >Patient Management</span>
						</a>
                        <ul class="sub">
                            <li><a href="add-patient.php">Add Patients</a></li>
                            <li><a href="view-patients.php">View Patients</a></li>
							<li><a href="patient-reports-panel.php">Patient Reports</a></li>
                        </ul>
                    </li>

                    <li class="sub-menu" id="Schedule-li">
                        <a href="javascript:;">
                          <i class="icon-calendar"></i>
                          <span id="span-schedule-management">Schedule Management</span>
                      </a>
                        <ul class="sub">
                            <li><a id="set-sched-id" href="set-schedule.php">Set Schedule</a></li>
                            <li><a href="view-schedule.php">View Schedule</a></li>
							<li><a id="sched-reports-id" href="sched-reports-panel.php">Schedule Reports</a></li>
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
						  <li><a  href="lab-request.php">View Lab Request</a></li>
						  <li><a  href="labview.php">View Lab Records</a></li>
						  <li><a  href="lab-reports-panel.php">Laboratory Reports</a></li>
                      </ul>
                  </li>
                  
                  <li class="sub-menu" id="Maintenance-li">
                      <a href="javascript:;" >
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
                <!--state overview start-->
                <div class="row state-overview">
                    <div class="col-lg-3 col-sm-6">
                        <section class="panel">
                            <div class="symbol terques">
                                <i class="icon-group"></i>
                            </div>
                            <div class="value">
                                <h1 class="counter" data-count="<?php echo $NewPatient; ?>">
                                </h1>
                                <p><b>New Patients <br>Monthly Count</b></p>
                            </div>
                        </section>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <section class="panel">
                            <div class="symbol red">
                                <i class="icon-stethoscope"></i>
                            </div>
                            <div class="value">
                                <h1 class="counter" data-count="<?php echo $fcup; ?>">
                                </h1>
                                <p><b>Follow-up Checkups <br> Weekly Count</b></p>
                            </div>
                        </section>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <section class="panel">
                            <div class="symbol yellow">
                                <i class="icon-truck"></i>
                            </div>
                            <div class="value">
                                <h1 class="counter" data-count="<?php echo $tmeds['TotalMeds']; ?>">
                                </h1>
                                <p><b>Inventory Stocks<br>Total Count</b></p>
                            </div>
                        </section>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <section class="panel">
                            <div class="symbol blue">
                                <i class=" icon-beaker"></i>
                            </div>
                            <div class="value">
                                <h1 class="counter" data-count="<?php echo $LR['TotalRequest'];?>">
                                    
                                </h1>
                                <p><b>Laboratory Requests <br> Weekly Count</b></p>
                            </div>
                        </section>
                    </div>
                </div>
                <!--state overview end-->
                <div class="row">
                    <div class="col-lg-12">
                        <!--Health Trend Issue Start-->
                        <section class="panel">
                            <div class="panel-body progress-panel">
                                <div class="task-progress">
                                    <h1>Patient Population</h1>
                                    <p></p>
                                </div>
                                <div class="task-option">
                                    
                                </div>
                            </div>
								<div id="patient_population" style="width: 100%; height: 400px"></div>
                        </section>  
                    </div>
                </div>
				<div class="row">
                    <div class="col-lg-6">
                        <!--Health Trend Issue Start-->
                        <section class="panel">
                            <div class="panel-body progress-panel">
                                <div class="task-progress">
                                    <h1>Health Trend this <?php echo "$TrendMonthname $TrendYear"?></h1>
                                    <p></p>
                                </div>
                                <div class="task-option">
                                    
                                </div>
								<table class="table table-hover">
								  <thead>
								  <tr>
									  <th class="text-center"><i class="icon-calendar icon-2x" style="color:green;"></i><br> Total</th>
									  <th class="text-center"><i class="icon-medkit icon-2x" style="color:red;"></i><br> Ailments/Illness</th>
                                      <th class="text-center"><i class="icon-map-marker icon-2x" style="color:orange;"></i><br> Place</th>
								  </tr>
								  </thead>
<?php
while($Trends = mysql_fetch_array($Stmt)){
?>
								  <tbody>
								  <tr>
									  <td class="text-center"><strong><?php echo $Trends['TOTALILL']; ?></strong></td>
									  <td class="text-center"><strong><?php echo $Trends['MR_ILL']; ?></strong></td>
                                      <td class="text-center"><strong><?php echo $Trends['P_BRGY']; ?></strong></td>
								  </tr>
<?php
}
?>
								  </tbody>
							  </table>
                            </div>
								
                        </section>  
                    </div>
                </div>
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
    <script src="js/jquery-1.8.3.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="js/jquery.sparkline.js" type="text/javascript"></script>
    <script src="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
    <script src="js/owl.carousel.js"></script>
    <script src="js/jquery.customSelect.min.js"></script>
    <script src="js/respond.min.js"></script>
    <script class="include" type="text/javascript" src="js/jquery.dcjqaccordion.2.7.js"></script>
    <!--common script for all pages-->
    <script src="js/common-scripts.js"></script>
    <!--script for this page-->
    <script src="js/sparkline-chart.js"></script>
    <script src="js/easy-pie-chart.js"></script>
    <script src="js/count.js"></script>
		<script>
			$(document).ready(function(){
				$("#pyear").on('change', function(){
					var year=$(this).val();
					window.location = 'index.php?year='+year;
				});
			});
		</script>
    <script src = "js/jquery.canvasjs.min.js"></script>
	<?php require 'reports/charts/patient_population.php'?>
    <script>  
    //owl carousel
        $(document).ready(function() {
            $("#owl-demo").owlCarousel({
                navigation: true,
                slideSpeed: 300,
                paginationSpeed: 400,
                singleItem: true,
                autoPlay: true
            });
        });
    //custom select box
        $(function() {
            $('select.styled').customSelect();
        });
    </script>
<?php
include 'lib/User-Accesslvl.php';
?>
</body>

</html>
