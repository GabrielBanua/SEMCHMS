<?php
require 'lib/session.php';
require 'lib/Db.config.php';
require 'lib/Db.config.pdo.php';
  $stmt = $db->prepare("Select *, CONCAT(P_FNAME,' ',P_MNAME,' ',P_LNAME) AS FullName FROM (patient INNER JOIN schedule ON patient.P_ID = schedule.P_ID)");
  $stmt->execute();

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="google" content="notranslate">
    <link rel="shortcut icon" href="img/favicon.ico">

    <title>View Schedule</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/advanced-datatable/media/css/demo_page.css" rel="stylesheet" />
    <link href="assets/advanced-datatable/media/css/demo_table.css" rel="stylesheet" />
	<link rel="stylesheet" type="text/css" href="assets/bootstrap-datepicker/css/datepicker.css" />
    <link rel="stylesheet" type="text/css" href="assets/bootstrap-datetimepicker/css/datetimepicker.css" />
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
  </head>

  <body onload="CheckSchedValidity()">

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
                      <a href="index.php">
                          <i class="icon-dashboard"></i>
                          <span>Home</span>
                      </a>
                  </li>

                  <li class="sub-menu" id="Patient-li">
                      <a href="javascript:;" >
                          <i class="icon-user"></i>
                          <span>Patient Management</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="add-patient.php">Add Patients</a></li>
                          <li><a  href="view-patients.php">View Patients</a></li>
              <li><a  href="#">Patient Reports</a></li>
                      </ul>
                  </li>
          
          <li class="sub-menu" id="Schedule-li">
                      <a href="javascript:;" class="active">
                          <i class="icon-calendar"></i>
                          <span>Schedule Management</span>
                      </a>
                      <ul class="sub">
                          <li><a href="set-schedule.php">Set Schedule</a></li>
                          <li class="active"><a href="view-schedule.php">View Schedule</a></li>
                          <li><a href="#">Schedule Reports</a></li>
                      </ul>
                  </li>
          
          <li class="sub-menu" id="Inventory-li">
                      <a href="javascript:;" >
                          <i class="icon-truck"></i>
                          <span>Inventory Management</span>
                      </a>
                      <ul class="sub">
						  <li><a href="view-inventory.php">View Inventory</a></li>
						  <li><a  href="#">Inventory Reports</a></li>
                      </ul>
                  </li>
          
          <li class="sub-menu" id="Laboratory-li">
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
                <li><a  href="#">Laboratory Reports</a></li>
                      </ul>
        </li>
          
          <li class="sub-menu" id="Maintenance-li">
                      <a href="javascript:;" >
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
                              List of Patients
                          </header>
                          <div class="panel-body">
                                <div class="adv-table">
                                    <a class="btn btn-success" href="set-schedule.php">Set Appointment</a>
                                    <table  class="display table table-bordered table-striped" id="example">
                                      <thead>
                                      <tr>
                                          <th width="100">Date Schedule</th>
                                          <th width="100">Time</th>
                                          <th width="150">Patient Name</th>
                                          <th width="90">Patient Type</th>
                                          <th width="100" class="hidden-phone">Appointment</th>
                                          <th width="150" class="hidden-phone">Action</th>
                                      </tr>
                                      </thead>
                                      <tbody>
									<?php
										  while($row = $stmt->fetch()){
									?>
                                      <tr class="gradeX">
                                          <td><?php echo $row['SCHEDULE_DATE'] ?></td>
                                          <td><?php echo $row['SCHEDULE_TIME'] ?></td>
                                          <td><?php echo $row['FullName'] ?></td>
                                          <td><?php echo $row['P_TYPE'] ?></td>
                                          <td><?php echo $row['SCHEDULE_PURPOSE'] ?></td>
                                          <td class="center hidden-phone">
                                          <a class="btn btn-success btn-xs" data-toggle="modal" data-target="#EditSched-<?php echo $row['SCHEDULE_ID']?>"><i class="icon-pencil"></i> Edit</a>
										  <a class="btn btn-danger btn-xs" onclick="DeleteSched(<?php echo $row['SCHEDULE_ID'] ?>)"><i class="icon-trash"></i> Delete</a>
										  <a class="btn btn-primary btn-xs" href="view-patient-profile.php?VID=<?php echo $row['P_ID'] ?>"><i class=" icon-share-alt"></i> Proceed</a>
								<!-- Register User Start  MODAL-->
                                <div aria-hidden="true" aria-labelledby="myModalLabel-<?php echo $row['SCHEDULE_ID']?>" role="dialog" tabindex="-1" id="EditSched-<?php echo $row['SCHEDULE_ID']?>" class="modal fade">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
												<button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
												<h4 class="modal-title" id="myModalLabel-<?php echo $row['SCHEDULE_ID']?>">Edit Appointment</h4>
											</div>
											<div class="modal-body">
                                                <form class="form-horizontal" role="form">
													<div class="form-group">
														<label class="col-md-3 col-sm-2 control-label">Patient Name:</label>
														<div class="col-lg-6">
															<input type="text" value="<?php echo $row['FullName']; ?>" class="form-control" readonly class="form_datetime form-control" disabled>
														</div>
													</div>
													<div class="form-group">
														<label class="col-md-3 col-sm-2 control-label">Patient Type:</label>
														<div class="col-lg-6">
															<input type="text" value="<?php echo $row['P_TYPE']; ?>" readonly class="form_datetime form-control" disabled>
														</div>
													</div>
													<div class="form-group">
														<label class="col-md-3 col-sm-2 control-label">Gender:</label>
														<div class="col-lg-4">
															<select readonly class="form_datetime form-control" disabled>
																<option value="-None-"<?php
																if ($row['P_GNDR'] == "-None-") { echo " selected"; }?>>-None-</option>
																<option value="Male"<?php
																if ($row['P_GNDR'] == "Male") { echo " selected"; }?>>Male</option>
																<option value="Female"<?php
																if ($row['P_GNDR'] == "Female") { echo " selected"; }?>>Female</option>
															</select>
														</div>
													</div>                        
													<div class="form-group">
														<label class="col-md-3 col-sm-2 control-label">Date of Appointment:</label>
														<div class="col-lg-6">
															<div data-date-viewmode="years" data-date-format="yyyy-mm-dd"  class="input-append date dpYears">
																	<input type="text" value="<?php echo strftime('%Y-%m-%d', strtotime($row['SCHEDULE_DATE'])); ?>"" 
																		id="SCHEDULE_DATE-<?php echo $row['SCHEDULE_ID'] ?>" size="16" class="form-control" readonly>
																	<span class="input-group-btn add-on">
																		<button class="btn btn-danger" type="button"><i class="icon-calendar"></i></button>
																	</span>
																</div>
														</div>
													</div>
													<div class="form-group">
														<label class="col-md-3 col-sm-2 control-label">Appointment Reason:</label>
														<div class="col-lg-4">
															<select class="form-control" id="SCHEDULE_PURPOSE-<?php echo $row['SCHEDULE_ID'] ?>">
																<option value="-None-"<?php
																if ($row['SCHEDULE_PURPOSE'] == "-None-") { echo " selected"; }?>>-None-</option>
																<option value="Check Up"<?php
																if ($row['SCHEDULE_PURPOSE'] == "Check Up") { echo " selected"; }?>>Check Up</option>
																<option value="X-ray" <?php
																if ($row['SCHEDULE_PURPOSE'] == "X-ray") { echo " selected"; }?>>X-ray</option>
																<option value="Dental"<?php
																if ($row['SCHEDULE_PURPOSE'] == "Dental") { echo " selected"; }?>>Dental</option>
																<option value="Laboratory Test"<?php
																if ($row['SCHEDULE_PURPOSE'] == "Laboratory Test") { echo " selected"; }?>>Laboratory Test</option>
															</select>
														</div>
													</div>
												</form>
											</div>
											<div class="modal-footer">
												<button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
												<button class="btn btn-success" type="button" onclick="UpdateSched(<?php echo $row['SCHEDULE_ID']; ?>)">Update Schedule</button>
											</div>
										</div>
									</div>
								</div>
								<!--MODAL END-->
                    											
                    										  </td>
                                      </tr>
<?php
      }
?>
                                      </tbody>
                          </table>
											
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


  <!--common script for all pages-->
    <script src="js/common-scripts.js"></script>

    <!--script for this page only-->

      <script type="text/javascript" charset="utf-8">
          $(document).ready(function() {
              $('#example').dataTable( {
                  "aaSorting": [[ 4, "asc" ]]
              } );
          } );
      </script>
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

        function UpdateSched(str){
        var Sched_Id = str;
        var SCHEDULE_DATE = $('#SCHEDULE_DATE-'+str).val();
        var SCHEDULE_PURPOSE = $('#SCHEDULE_PURPOSE-'+str).val();
            if (confirm('Are you sure you want to update schedule for this patient?')) {
            $.ajax({
              type: "POST",
              url: "Server.php?p=UpdateSched",
              data: "Sched_Id="+Sched_Id+"&SCHEDULE_DATE="+SCHEDULE_DATE+"&SCHEDULE_PURPOSE="+SCHEDULE_PURPOSE,
              success: function(data){
                    alert('upadate successfully!');
                    window.location.reload();
                  }
              });
            }else{
              //do nothing
          }
        }

        function DeleteSched(str){
          var id = str;
          if (confirm('Are you sure you want to delete this schedule in the database?')) {
              $.ajax({
              type: "POST",
              url: "Server.php?p=DeleteSched",
              data: "SCHEDULE_ID="+id,
              success: function(data){
                alert('Deleted successfully!');
                window.location.reload();
              }
          });
          } else {
              // Do nothing!
          } 
        }
      </script>
	<script type="text/javascript" src="assets/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
	<script type="text/javascript" src="assets/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js"></script>
	<script src="js/advanced-form-components.js"></script>
  </body>
</html>
