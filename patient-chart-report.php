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

    <title>Patient Reports Panel</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
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
						  <li><a href="#">Inventory Reports</a></li>
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
						  <li><a  href="#">Laboratory Reports</a></li>
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
                              Patient Reports Panel
                          </header>
							<div class="panel-body">
								<section class="panel">
								  <header class="panel-heading tab-bg-dark-navy-blue ">
									  <ul class="nav nav-tabs">
										  <li class="active">
											  <a data-toggle="tab" href="#graph"><i class="icon-bar-chart"></i><b> Graphical Form</b></a>
										  </li>
										  <li class="">
											  <a data-toggle="tab" href="#tabular"><i class="icon-table"></i><b> Tabular Form</b></a>
										  </li>
									  </ul>
								  </header>
								  <div class="panel-body">
									  <div class="tab-content">
										  <div id="graph" class="tab-pane active">
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
											  <div id="patient_population" style="width: 100%; height: 400px"></div>
										  </div>
										  <div id="tabular" class="tab-pane">
												<table class="table table-striped table-advance table-hover">
												  <thead>
												  <tr>
													  <th class="text-center"><i class="icon-calendar icon-2x"></i><br> Month</th>
													  <th class="text-center"><i class="icon-group icon-2x"></i><br> Patient Per Month</th>
												  </tr>
												  </thead>
												  <tbody>
												  <tr>
													  <td class="text-center"><b>January</b></td>
													  <td class="text-center"><span class="label label-info label-mini">11</span></td>
												  </tr>
												  <tr>
													  <td class="text-center"><b>February</b></td>
													  <td class="text-center"><span class="label label-primary label-mini">11</span></td>
												  </tr>
												  <tr>
													  <td class="text-center"><b>March</b></td>
													  <td class="text-center"><span class="label label-success label-mini">11</span></td>
												  </tr>
												  <tr>
													  <td class="text-center"><b>April</b></td>
													  <td class="text-center"><span class="label label-danger label-mini">11</span></td>
												  </tr>
												  <tr>
													  <td class="text-center"><b>May</b></td>
													  <td class="text-center"><span class="label label-info label-mini">11</span></td>
												  </tr>
												  <tr>
													  <td class="text-center"><b>June</b></td>
													  <td class="text-center"><span class="label label-primary label-mini">11</span></td>
												  </tr>
												  <tr>
													  <td class="text-center"><b>July</b></td>
													  <td class="text-center"><span class="label label-success label-mini">11</span></td>
												  </tr>
												  <tr>
													  <td class="text-center"><b>August</b></td>
													  <td class="text-center"><span class="label label-danger label-mini">11</span></td>
												  </tr>
												  <tr>
													  <td class="text-center"><b>September</b></td>
													  <td class="text-center"><span class="label label-info label-mini">11</span></td>
												  </tr>
												  <tr>
													  <td class="text-center"><b>October</b></td>
													  <td class="text-center"><span class="label label-primary label-mini">11</span></td>
												  </tr>
												  <tr>
													  <td class="text-center"><b>November</b></td>
													  <td class="text-center"><span class="label label-success label-mini">11</span></td>
												  </tr>
												  <tr>
													  <td class="text-center"><b>December</b></td>
													  <td class="text-center"><span class="label label-danger label-mini">11</span></td>
												  </tr>
												  </tbody>
											  </table>
										  </div>
									  </div>
								  </div>
							  </section>
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
				title: { 
					text: "Patient Population as of Year",
					fontSize: 20
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
					title: "Total Population", 
					includeZero: false,
					labelFontColor: "black",
					crosshair: {
						enabled: true 
					}
				}, 
				data: [ 
					{ 
						type: "column", 
						toolTipContent: "{label}: {y}", 
						dataPoints: [ 
							{ label: "January", y: 100 },
							 { label: "February", y: 200 },
							{ label: "March", y: 300 },
							 { label: "April", y: 400 },
							{ label: "May", y: 400 },
							 { label: "June", y: 400 },
							{ label: "July", y: 500 },
							 { label: "August", y: 600 },
							{ label: "September", y: 900 },
							 { label: "October", y: 300 },
							{ label: "November", y: 100 },
							 { label: "December", y: 450 }
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
                    window.location = 'patient-chart-report.php?year='+year;
                });
            });
    </script>
  </body>
</html>
