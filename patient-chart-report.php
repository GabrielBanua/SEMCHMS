<?php
require 'lib/session.php';
require 'lib/Db.config.php';
require 'lib/Db.config.pdo.php';
$yr = mysql_real_escape_string($_POST['YEAR']);

if(isset($_POST['tyear'])){
    $yr = $_POST['tyear'];
    $stmtJAN = mysql_query("SELECT *, COUNT(P_ID) AS TOTALPATIENTS FROM patient WHERE YEAR = '$yr' GROUP BY MONTH ORDER BY DATE_REG ASC");
}else{
    $yr = date('Y');
    $stmtJAN = mysql_query("SELECT *, COUNT(P_ID) AS TOTALPATIENTS FROM patient WHERE YEAR = '$yr' GROUP BY MONTH ORDER BY DATE_REG ASC");
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
    <link href="assets/advanced-datatable/media/css/demo_page.css" rel="stylesheet" />
    <link href="assets/advanced-datatable/media/css/demo_table.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />
    <script type="text/javascript" src="Bootstrap-4-4.0.0/js/bootstrap.js"></script>
    <link rel="stylesheet" type="text/css" href="DataTables-1.10.16/css/jquery.dataTables.css"/>
    <link rel="stylesheet" type="text/css" href="Buttons-1.5.1/css/buttons.dataTables.css"/>
    <link rel="stylesheet" type="text/css" href="Select-1.2.5/css/select.dataTables.css"/>
    <link rel="stylesheet" type="text/css" href="jQueryUI-1.12.1/themes/base/jquery-ui.css"/>
    <script type="text/javascript" src="JSZip-2.5.0/jszip.js"></script>
    <script type="text/javascript" src="pdfmake-0.1.32/pdfmake.js"></script>
    <script type="text/javascript" src="pdfmake-0.1.32/vfs_fonts.js"></script>
    <script type="text/javascript" src="DataTables-1.10.16/js/jquery.dataTables.js"></script>
    <script type="text/javascript" src="Buttons-1.5.1/js/dataTables.buttons.js"></script>
    <script type="text/javascript" src="Buttons-1.5.1/js/buttons.colVis.js"></script>
    <script type="text/javascript" src="Buttons-1.5.1/js/buttons.flash.js"></script>
    <script type="text/javascript" src="Buttons-1.5.1/js/buttons.html5.js"></script>
    <script type="text/javascript" src="Buttons-1.5.1/js/buttons.print.js"></script>
    <script type="text/javascript" src="Select-1.2.5/js/dataTables.select.js"></script>
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
				  
				  <li class="sub-menu" id="Schedule-li">
                      <a href="javascript:;">
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
						  <li><a href="inv-reports-panel.php">Inventory Reports</a></li>
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
												<div class="btn-group pull-left">
													<div class="btn-group">
														<a href="#" data-toggle="dropdown" class="btn btn-primary dropdown-toggle">Filter By <span class="caret"></span></a>
														<ul class="dropdown-menu" role="menu">
															<li><a href="#" onclick="oType()">Patient Type</a></li>
															<li><a href="#" onclick="oGender()">Patient Gender</a></li>
															<li><a href="#" onclick="oAge()">Patient Age</a></li>
															<li><a href="#" onclick="oQuarter()">Population Quarterly</a></li>   
														</ul>
													</div>
												</div>
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
<!--Tabular form-->
										  <div id="tabular" class="tab-pane">
										  <div class="col-lg-2 pull-right">
                                                <form action="" method="POST">
													<select id="tyear" name="tyear" class="form-control" onchange="this.form.submit()">
														<option hidden>Choose</option>
														<?php
														for($y=2000; $y<=2025; $y++){
														?>
														<option value="<?php echo $y ?>"<?php if($yr == $y){ echo " selected";}?>><?php echo $y; ?></option>
														<?php
														}
														?>
													</select>
                                                    </form>
												</div><br><br>
                                                <h2 style="Text-align:center;">List of patient this <?php echo $yr;?></h2>
												<table class="table table-striped table-advance table-hover">
												  <thead>
												  <tr>
													  <th class="text-center"><i class="icon-calendar icon-2x"></i><br> Month</th>
													  <th class="text-center"><i class="icon-group icon-2x"></i><br> Patient Per Month</th>
													  <th class="text-center"><i class="icon-wrench icon-2x"></i><br> Action</th>
												  </tr>
												  </thead>
												  <tbody>
<?php
while($JAN = mysql_fetch_array($stmtJAN)){
    $month = $JAN['MONTH'];
    $year = $JAN['YEAR'];
    $MO = date('F',strtotime($month));
    $time = date('H:i:s');
    $docu = $year .'-'. $MO;
?>
<tr>
	 <td class="text-center"><b><?php echo $MO; ?></b></td>
	 <td class="text-center"><span class="label label-info label-mini"><?php echo $JAN['TOTALPATIENTS'];?></span></td>
	 <td class="text-center">
     <a class="btn btn-shadow btn-success btn-xs" onclick="loadthis(<?php echo $JAN['YEAR']; ?>)" data-toggle="modal" data-target="#patientlist-<?php echo $JAN['YEAR']; echo $MO; ?>"><i class="icon-eye-open"></i> View</a>
     <?php
    include 'lib/modals/modal-patient-list.php';
?>
<script type="text/javascript" charset="utf-8">

        function loadthis(tr){
            $('.example-'+tr).dataTable( {
                dom: 'lfrtipB',
                buttons: [
                    {
                extend: 'print',
                text: 'Print',
                autoPrint: true,
                title: '',
                exportOptions: {
                    stripHtml: false
                },
                customize: function ( win ) {
                    $(win.document.body)
                   
                        .css( 'font-size', '12pt')
                        .prepend(
                            '<h4 style="text-align: center;">Patient Report for <?php echo $MO; ?> <?php echo $JAN['YEAR'];?></h4>'
                        )
                        .prepend(
                            '<h3 style="text-align: center;">Saint Ezekiel Moreno<br>Health Center</h3>'
                        )
                        .append(
                            '<br><br><p style="float: right; text-align: center;"><u><?php echo $Fullname; ?></u><br>Approved by</p>'
                        );
                }     
            },
            {
                extend: 'excel',
                text: 'Excel'
                
            }
                ],
                bRetrieve: true,
                bDestroy: true,
                searchDelay: 1,
                stateSave: true,
                aaSorting: [[0, 'asc']]  
              } );
        }
</script>		
</td>
</tr>
<?php
}
?>
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
    <script src="js/preloader.js"></script>
    <script type="text/javascript" src="assets/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
    <script type="text/javascript" src="assets/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js"></script>
    <script type="text/javascript" src="assets/bootstrap-timepicker/js/bootstrap-timepicker.js"></script>
    <script type="text/javascript" src="Bootstrap-4-4.0.0/js/bootstrap.js"></script>
    <link rel="stylesheet" type="text/css" href="DataTables-1.10.16/css/jquery.dataTables.css"/>
    <link rel="stylesheet" type="text/css" href="Buttons-1.5.1/css/buttons.dataTables.css"/>
    <link rel="stylesheet" type="text/css" href="Select-1.2.5/css/select.dataTables.css"/>
    <script type="text/javascript" src="JSZip-2.5.0/jszip.js"></script>
    <script type="text/javascript" src="pdfmake-0.1.32/pdfmake.js"></script>
    <script type="text/javascript" src="pdfmake-0.1.32/vfs_fonts.js"></script>
    <script type="text/javascript" src="DataTables-1.10.16/js/jquery.dataTables.js"></script>
    <script type="text/javascript" src="Buttons-1.5.1/js/dataTables.buttons.js"></script>
    <script type="text/javascript" src="Buttons-1.5.1/js/buttons.colVis.js"></script>
    <script type="text/javascript" src="Buttons-1.5.1/js/buttons.flash.js"></script>
    <script type="text/javascript" src="Buttons-1.5.1/js/buttons.html5.js"></script>
    <script type="text/javascript" src="Buttons-1.5.1/js/buttons.print.js"></script>
    <script type="text/javascript" src="Select-1.2.5/js/dataTables.select.js"></script>


	
  <!--common script for all pages-->
    <script src="js/common-scripts.js"></script>
	<script>
			$(document).ready(function(){
				$("#pyear").on('change', function(){
					var year=$(this).val();
					window.location = 'patient-chart-report.php?year='+year;
				});
			});
		</script>
    <script src = "js/jquery.canvasjs.min.js"></script>
	<?php require 'reports/charts/patient_population.php'?>
	<script>
		function oGender() {
			myWindow = window.open("reports/filter_gender_layout.php?year=<?php echo $year?>", "", "width=1350, height=650");
		}
		function oAge() {
			myWindow = window.open("reports/filter_age_layout.php?year=<?php echo $year?>", "", "width=1350, height=650");
		}
		function oType() {
			myWindow = window.open("reports/filter_type_layout.php?year=<?php echo $year?>", "", "width=1350, height=650");
		}
		function oQuarter() {
			myWindow = window.open("reports/filter_quarter_layout.php?year=<?php echo $year?>", "", "width=1350, height=650");
		}
	</script>
<?php
include 'lib/User-Accesslvl.php';
include 'lib/logout.script.php';
?>
		
  </body>
</html>