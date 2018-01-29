<?php
require 'lib/session.php';
require 'lib/chartSQL.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/favicon.ico">

    <title>Laboratory Reports</title>

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
                        <a href="index.php">
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
                          <span>Schedule Management</span>
                      </a>
                        <ul class="sub">
                            <li><a href="set-schedule.php">Set Schedule</a></li>
                            <li><a href="view-schedule.php">View Schedule</a></li>
							<li><a href="sched-reports-panel.php">Schedule Reports</a></li>
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
                      <a href="javascript:;" class="active">
                          <i class="icon-beaker"></i>
                          <span>Lab Management</span>
                      </a>
                      <ul class="sub">
						  <li><a  href="labtest.php">Add Lab Results</a></li>
						  <li><a  href="lab-request.php">View Lab Request</a></li>
						  <li><a  href="labview.php">View Lab Records</a></li>
						  <li class="active"><a  href="lab-reports-panel.php">Laboratory Reports</a></li>
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
                                <i class="icon-beaker"></i>
                            </div>
                            <div class="value">
                                <h1 class="counter" data-count="150">
                                </h1>
                                <b><p>Blood Chemistry</p></b>
                            </div>
                        </section>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <section class="panel">
                            <div class="symbol red">
                                <i class="icon-beaker"></i>
                            </div>
                            <div class="value">
                                <h1 class="counter" data-count="150">
                                    0
                                </h1>
                                <b><p>Fecalysis</p></b>
                            </div>
                        </section>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <section class="panel">
                            <div class="symbol yellow">
                                <i class="icon-beaker"></i>
                            </div>
                            <div class="value">
                                <h1 class="counter" data-count="150">
                                    0
                                </h1>
                                <b><p>Hemotology</p></b>
                            </div>
                        </section>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <section class="panel">
                            <div class="symbol blue">
                                <i class="icon-beaker"></i>
                            </div>
                            <div class="value">
                                <h1 class="counter" data-count="150">
                                    0
                                </h1>
                                <b><p>Urinalysis</p></b>
                            </div>
                        </section>
                    </div>
                </div>
                <!--state overview end-->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="col-lg-2 pull-right">
													<select id="pyear" class="form-control">
														<option hidden value="<?php 
														if(isset($_GET['year'])){
															$value=$_GET['year']; 
															echo $value;
														}
															else{
																echo date('Y');
															}
																	   ?>">
															<?php 
															if(isset($_GET['year'])){
																$value=$_GET['year']; 
																echo $value;
															}
															else{
																echo date('Y');
															}
															?></option>
														<?php
														for($y=2012; $y<=2025; $y++){
														?>
														<option value="<?php echo $y ?>"><?php echo $y; ?></option>
														<?php
														}
														?>
													</select>
												</div><br><br>
											  <div id="patient_population" style="width: 100%; height: 350px"></div>
                        </div>
                        <!--custom chart end-->
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
	<script src = "js/jquery.canvasjs.min.js"></script>
	<script type="text/javascript"> 
		window.onload = function(){ 
			$("#patient_population").CanvasJSChart({
				theme: "light2",
				zoomEnabled: true,
				zoomType: "x",
				panEnabled: true,
				animationEnabled: true,
				animationDuration: 1000,
				exportFileName: "Monthly Population", 
				exportEnabled: true,
				toolTip: {
					shared: true  
				},
				title: { 
					text: "Total Laboratory Result Year of",
					fontSize: 20
				},
				legend: {
					cursor: "pointer",
					itemclick: function (e) {
						if (typeof (e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
							e.dataSeries.visible = false;
						} else {
							e.dataSeries.visible = true;
						}
						e.chart.render();
					}
				},
				axisX: {		       
					gridDashType: "dot",
					gridThickness: 1,
					labelFontColor: "black",
					crosshair: {
						enabled: true 
					}
				},
				axisY: { 
					title: "Total Records", 
					includeZero: false,
					labelFontColor: "black",
					crosshair: {
						enabled: true 
					}
				}, 
				data: [ 
					{ 
						type: "column", 
						showInLegend: true, 
						legendText: "Total",
						name: "Total", 
						toolTipContent: "{label}: {y}", 
						dataPoints: [ 
							{ label: "January", y: 200 },
							 { label: "February", y: 100 },
							{ label: "March", y: 20 },
							 { label: "April", y: 50 },
							{ label: "May", y: 100 },
							 { label: "June", y: 300 },
							{ label: "July", y: 250 },
							 { label: "August", y: 159 },
							{ label: "September", y: 20 },
							 { label: "October", y: 70 },
							{ label: "November", y: 90 },
							 { label: "December", y: 120 }
						] 
					},


					{ 
						type: "splineArea", 
						showInLegend: true, 
						legendText: "Blood Chemistry",
						name: "Blood Chemistry", 
						dataPoints: [ 
							{ label: "January", y: 120 },
							 { label: "February", y: 60 },
							{ label: "March", y: 20 },
							 { label: "April", y: 50 },
							{ label: "May", y: 104 },
							 { label: "June", y: 310 },
							{ label: "July", y: 280 },
							 { label: "August", y: 259 },
							{ label: "September", y: 200 },
							 { label: "October", y: 73 },
							{ label: "November", y: 91 },
							 { label: "December", y: 10 }
						] 
					},
					{ 
						type: "spline", 
						showInLegend: true, 
						legendText: "Fecalysis",
						name: "Fecalysis", 
						dataPoints: [ 
							{ label: "January", y: 100 },
							 { label: "February", y: 160 },
							{ label: "March", y: 205 },
							 { label: "April", y: 80 },
							{ label: "May", y: 14 },
							 { label: "June", y: 31 },
							{ label: "July", y: 28 },
							 { label: "August", y: 59 },
							{ label: "September", y: 100 },
							 { label: "October", y: 13 },
							{ label: "November", y: 31 },
							 { label: "December", y: 90 }
						] 
					}
				] 
			}); 
		}
	</script>
	<script>
            $(document).ready(function(){
                $("#pyear").on('change', function(){
                    var year=$(this).val();
                    window.location = 'lab-total-reports.php?year='+year;
                });
            });
    </script>
</body>

</html>
