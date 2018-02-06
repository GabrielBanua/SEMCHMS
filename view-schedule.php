<?php
require 'lib/session.php';

require 'lib/Db.config.php';
require 'lib/Db.config.pdo.php';
if($Position == 'Doctor'){
    $purpose = 'Check Up';
    $stmt = $db->prepare("Select *, CONCAT(P_FNAME,' ',P_MNAME,' ',P_LNAME) AS FullName FROM (patient INNER JOIN schedule ON patient.P_ID = schedule.P_ID) WHERE schedule.SCHEDULE_PURPOSE = '$purpose'");
    $stmt->execute();
  }else if($Position == 'Admin'){
     $stmt = $db->prepare("Select *, CONCAT(P_FNAME,' ',P_MNAME,' ',P_LNAME) AS FullName FROM (patient INNER JOIN schedule ON patient.P_ID = schedule.P_ID)");
    $stmt->execute();
  }
if(isset($_POST['Sched_filter'])){
    $filtering = $_POST['Sched_filter'];
    $DateToday = date('Y-m-d');
    
    if($filtering == 'Current'){
        if($Position == 'Doctor'){
            $purpose = 'Check Up';
            $stmt = $db->prepare("Select *, CONCAT(P_FNAME,' ',P_MNAME,' ',P_LNAME) AS FullName FROM (patient INNER JOIN schedule ON patient.P_ID = schedule.P_ID) WHERE schedule.SCHEDULE_PURPOSE = '$purpose' AND schedule.SCHEDULE_DATE = '$DateToday'");
            $stmt->execute();
          }else if($Position == 'Admin'){
             $stmt = $db->prepare("Select *, CONCAT(P_FNAME,' ',P_MNAME,' ',P_LNAME) AS FullName FROM (patient INNER JOIN schedule ON patient.P_ID = schedule.P_ID) WHERE schedule.SCHEDULE_DATE = '$DateToday'");
            $stmt->execute();
          }
    }else if($filtering == 'All'){
        if($Position == 'Doctor'){
            $purpose = 'Check Up';
            $stmt = $db->prepare("Select *, CONCAT(P_FNAME,' ',P_MNAME,' ',P_LNAME) AS FullName FROM (patient INNER JOIN schedule ON patient.P_ID = schedule.P_ID) WHERE schedule.SCHEDULE_PURPOSE = '$purpose'");
            $stmt->execute();
          }else if($Position == 'Admin'){
             $stmt = $db->prepare("Select *, CONCAT(P_FNAME,' ',P_MNAME,' ',P_LNAME) AS FullName FROM (patient INNER JOIN schedule ON patient.P_ID = schedule.P_ID)");
            $stmt->execute();
          }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="google" content="notranslate">
    <link rel="shortcut icon" href="img/favicon.ico">
    <link href="css/pageloader.css" rel="stylesheet">
    <title>View Schedule</title>
     <!-- js placed at the end of the document so the pages load faster -->
    <!--<script src="js/jquery.js"></script>-->
    <script type="text/javascript" language="javascript" src="assets/advanced-datatable/media/js/jquery.js"></script>
    <script class="include" type="text/javascript" src="js/jquery.dcjqaccordion.2.7.js"></script>
    <script type="text/javascript" language="javascript" src="assets/advanced-datatable/media/js/jquery.dataTables.js"></script>
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/respond.min.js" ></script>
    <script src="js/preloader.js" ></script>
    <script type="text/javascript" src="assets/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
    <script type="text/javascript" src="assets/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js"></script>
    <script type="text/javascript" src="assets/bootstrap-timepicker/js/bootstrap-timepicker.js"></script>
    <script src="js/advanced-form-components.js"></script>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/advanced-datatable/media/css/demo_page.css" rel="stylesheet" />
    <link href="assets/advanced-datatable/media/css/demo_table.css" rel="stylesheet" />
	  <link rel="stylesheet" type="text/css" href="assets/bootstrap-datepicker/css/datepicker.css" />
    <link rel="stylesheet" type="text/css" href="assets/bootstrap-timepicker/compiled/timepicker.css" />
    <link rel="stylesheet" type="text/css" href="assets/bootstrap-datetimepicker/css/datetimepicker.css" />
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />
    <link href="css/pageloader.css" rel="stylesheet">
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  <div class="preloader-wrapper">
    <div class="preloader">
        <img src="gif/time.svg" alt="SEMHCMS">
        <div style="position: absolute; top: 100%;left: 50%;margin-right: -50%;transform: translate(-50%, -50%);">
          <p style="font-size: 15px; font-weight: bold;">Please Wait</p>
        </div>
    </div>
  </div>
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
						  <li><a  href="patient-reports-panel.php">Patient Reports</a></li>
                      </ul>
                  </li>
          
          <li class="sub-menu" id="Schedule-li">
                      <a href="javascript:;" class="active">
                          <i class="icon-calendar"></i>
                          <span id="span-schedule-management">Schedule Management</span>
                      </a>
                      <ul class="sub">
                          <li><a id="set-sched-id" href="set-schedule.php">Set Schedule</a></li>
                          <li class="active"><a href="view-schedule.php">View Schedule</a></li>
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
						  <li><a  href="labtest.php">Add Lab Results</a></li>
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
              <!-- page start-->
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                              List of Patients
                          </header>
                          <div class="panel-body">
                                <div class="adv-table">
                                    <a class="btn btn-shadow btn-success" href="set-schedule.php"><i class="icon-calendar"></i> Set Appointment</a>
                                    <div class="col-lg-2 pull-right">
                                        <form id="Filtered" action="view-schedule.php" method="POST">
                                        <select id="Sched_filter" name="Sched_filter" class="form-control" onchange="this.form.submit()">
                                            <option value="All" <?php
                                            if ($filtering == "All") { echo " selected"; }?>>All</option>
                                            <option value="Current" <?php
                                            if ($filtering == "Current") { echo " selected"; }?>>Current</option>
                                        </select>
                                        </form>
                                    </div>
                                    
                                    <table  class="display table table-bordered table-striped" id="example">
                                      <thead>
                                      <tr>
                                          <th width="100">Date Schedule</th>
                                          <th width="70">Time</th>
                                          <th width="120">Patient Name</th>
                                          <th width="90">Patient Type</th>
                                          <th width="70">Gender</th>
                                          <th width="80" class="hidden-phone">Appointment</th>
                                          <th width="100" class="hidden-phone text-center">Action</th>
                                      </tr>
                                      </thead>
                                      <tbody>
									<?php
										  while($row = $stmt->fetch()){
									?>
                                      <tr class="gradeX">
                                          <td><?php echo strftime('%m-%d-%Y', strtotime($row['SCHEDULE_DATE'])); ?></td>
                                          <td><?php $date = date("h:i A", strtotime($row['SCHEDULE_TIME'])); echo $date; ?></td>
                                          <td><?php echo $row['FullName'] ?></td>
                                          <td><?php echo $row['P_TYPE'] ?></td>
                                          <td><?php echo $row['P_GNDR'] ?></td>
                                          <td><?php echo $row['SCHEDULE_PURPOSE'] ?></td>
                                          <td class="center hidden-phone">
                                              <a class="btn btn-shadow btn-success btn-xs" <?php if($Position == 'Doctor'){echo "style='display: none;'";}?> style="width:30px" data-toggle="modal" data-target="#EditSched-<?php echo $row['SCHEDULE_ID']?>"><i class="icon-pencil"></i></a>
                                  			  <a class="btn btn-shadow btn-danger btn-xs" <?php if($Position == 'Doctor'){echo "style='display: none;'";}?> style="width:30px" onclick="DeleteSched(<?php echo $row['SCHEDULE_ID']; ?>)"><i class="icon-trash"></i></a>
                                  			  <a class="btn btn-shadow btn-primary btn-xs" <?php if($Position == 'Doctor'){echo "style='width:100px'";}else{echo "style='width:30px'";} ?> href="view-patient-profile.php?VID=<?php echo $row['P_ID']; ?>&Sched_ID=<?php echo $row['SCHEDULE_ID']; ?>"><i <?php if($Position == 'Doctor'){}else{ echo "class=' icon-share-alt'";}?>></i><?php if($Position == 'Doctor'){echo "Proceed";} ?></a>
<!-- edit Schedule Start MODAL-->
<?php
include 'lib/modals/view_schedule-modal.php';
?>
                                          
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
    <!--common script for all pages-->
    <script src="js/common-scripts.js"></script>
    <!--script for this page only-->
<?php
include 'lib/User-Accesslvl.php';
include 'lib/functions/view-schedule-script.php';
?>
  </body>
</html>
