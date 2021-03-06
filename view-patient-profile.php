<?php
require 'lib/session.php';
require 'lib/Db.config.php';
require 'lib/Db.config.pdo.php';
date_default_timezone_set('Asia/Manila');
$d = strtotime("now");
$datetreatment = date("Y-m-d");
$VIEW_ID = isset($_GET['VID'])?$_GET['VID']:'';
$SCHED_ID = isset($_GET['Sched_ID'])?$_GET['Sched_ID']:'';

$sql = "SELECT *, CONCAT(patient.P_FNAME,' ', patient.P_LNAME) AS FullName FROM ((patient INNER JOIN patient_medical_issue ON patient.P_ID = patient_medical_issue.P_ID) INNER JOIN adult ON patient_medical_issue.PMI_ID = adult.PMI_ID) WHERE patient.P_ID = $VIEW_ID";
$result = mysql_query($sql);
$row = mysql_fetch_array($result);

$medicalrecord = $db->prepare("Select * FROM ((((patient INNER JOIN schedule ON patient.P_ID = schedule.P_ID) INNER JOIN medical_record ON schedule.SCHEDULE_ID = medical_record.SCHED_ID) INNER JOIN treatment ON medical_record.MR_ID = treatment.MR_ID) LEFT JOIN followup_check_up ON treatment.TRMT_ID = followup_check_up.TRT_ID) WHERE patient.P_ID = $VIEW_ID");
$medicalrecord->execute();

$lab_stmt = "SELECT *, CONCAT(P_FNAME,' ',P_MNAME,' ',P_LNAME) AS Fullname FROM (((((patient INNER JOIN schedule ON patient.P_ID = schedule.P_ID) INNER JOIN medical_record ON schedule.SCHEDULE_ID = medical_record.SCHED_ID) INNER JOIN treatment ON medical_record.MR_ID = treatment.MR_ID) INNER JOIN lab_request ON treatment.TRMT_ID = lab_request.TRMNT_ID)INNER JOIN laboratory_record ON lab_request.LBR_ID = laboratory_record.LBR_ID) WHERE patient.P_ID = $VIEW_ID";
$result = mysql_query($lab_stmt);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/favicon.ico">

    <title>Patient Profile</title>
    <!-- js placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="assets/jquery-knob/js/jquery.knob.js"></script>
    <script src="js/respond.min.js" ></script>
	<script type="text/javascript" language="javascript" src="assets/advanced-datatable/media/js/jquery.dataTables.js"></script>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
	<link href="assets/advanced-datatable/media/css/demo_page.css" rel="stylesheet" />
    <link href="assets/advanced-datatable/media/css/demo_table.css" rel="stylesheet" />
	<link rel="stylesheet" type="text/css" href="assets/select2/css/select2.min.css"/>
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
          <a href="index.php" class="logo" >St.Ezekiel Moreno<span>|Healthcare Management System</span></a>
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
                      <a href="javascript:;" class="active" >
                          <i class="icon-user"></i>
                          <span>Patient Management</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="add-patient.php">Add Patients</a></li>
                          <li class="active"><a  href="view-patients.php">View Patients</a></li>
						  <li><a  href="patient-reports-panel.php">Patient Reports</a></li>
                      </ul>
                  </li>
				  
				  <li class="sub-menu" id="Schedule-li">
                      <a href="javascript:;" >
                          <i class="icon-calendar"></i>
                          <span id="span-schedule-management">Schedule Management</span>
                      </a>
                      <ul class="sub">
                          <li><a id="set-sched-id" href="set-schedule.php">Set Schedule</a></li>
                          <li><a  href="view-schedule.php">View Schedule</a></li>
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
						  <li><a  href="systemlogs.php">System Logs</a></li>
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
                  <aside class="profile-nav col-lg-3">
                      <section class="panel">
                          <div class="user-heading round">
                              <a href="#">
                                  <img src="img/profile-avatar.jpg" alt="">
                              </a>
                              <h3><?php echo $row['FullName']?></h3>
                              <p>P<?php echo $row['P_ID']?></p>
                          </div>

                          <ul class="nav nav-pills nav-stacked">
                              <li class="active"><a> <i class="icon-user"></i> Profile</a></li>
                          </ul>

                      </section>
                  </aside>
                  <aside class="profile-info col-lg-9">
                      <section class="panel">
          							<header class="panel-heading ">
                                        Patient Profile:
          							</header>
                          <div class="panel-body bio-graph-info">
                              <div class="row">
                                  <div class="bio-row">
                                      <p><b><span>Date&nbsp;Registered </span></b> : <?php echo $row['DATE_REG']?></p>
                                  </div>
								  <div class="bio-row">
                                      <p><b><span>Purok </span></b>: <?php echo $row['P_PUROK']?></p>
                                  </div>
								  <div class="bio-row">
                                      <p><b><span>First Name</span></b>: <?php echo $row['P_FNAME']?></p>
                                  </div>								  
								  <div class="bio-row">
                                      <p><b><span>Barangay </span></b>: <?php echo $row['P_BRGY']?></p>
                                  </div>
                                  <div class="bio-row">
                                      <p><b><span>Middle Name </span></b>: <?php echo $row['P_MNAME']?></p>
                                  </div>
								  <div class="bio-row">
                                      <p><b><span>Address </span></b>: <?php echo $row['P_ADD']?></p>
                                  </div>
								  <div class="bio-row">
                                      <p><b><span>Last Name </span></b>: <?php echo $row['P_LNAME']?></p>
                                  </div>
                                  <div class="bio-row">
                                      <p><b><span>Type </span></b>: <?php echo $row['P_TYPE']?></p>
                                  </div>
								  <div class="bio-row">
                                      <p><b><span>Religion </span></b>: <?php echo $row['P_REL']?></p>
                                  </div>
                                  <div class="bio-row">
                                      <p><b><span>Civil Status </span></b>: <?php echo $row['P_CVL_STAT']?></p>
                                  </div>
                                  <div class="bio-row">
                                      <p><b><span>Birthday </span></b>: <?php echo $row['P_BDATE']?></p>
                                  </div>
                                  <div class="bio-row">
                                      <p><b><span>Occupation </span></b>: <?php echo $row['P_OCCU']?></p>
                                  </div>
                                  <div class="bio-row">
                                      <p><b><span>Age </span></b>: <?php echo $row['P_AGE']?></p>
                                  </div>
                                  <div class="bio-row">
                                      <p><b><span>Occupation<br>(FBW)</span></b>: <?php echo $row['P_OCCU_FBW']?></p>
                                  </div>
                                  <div class="bio-row">
                                      <p><b><span>Gender </span></b>: <?php echo $row['P_GNDR']?></p>
                                  </div>
                                  <div class="bio-row">
                                      <p><b><span>Mobile </span></b>: <?php echo $row['P_CN']?></p>
                                  </div>
                                  <div class="bio-row">
                                      <p><b><span>Weight(kg) </span></b>: <?php echo $row['P_WGHT']?></p>
                                  </div>
                                  <div class="bio-row">
                                      <p><b><span>Height(cm) </span></b>: <?php echo $row['P_HGHT']?></p>
                                  </div>
                              </div>
                          </div>
                      </section>
                      <section>
                          <div class="row">
         <div class="col-lg-12">
          <section class="panel">
						<section class="panel">
                          <header class="panel-heading tab-bg-dark-navy-blue ">
                              <ul class="nav nav-tabs">
                                  <li class="active">
                                      <a data-toggle="tab" href="#patientinfo"><b><i class="icon-user"></i> Personal Information</b></a>
                                  </li>
                                  <li class="">
                                      <a data-toggle="tab" href="#medrecord"><b><i class="icon-medkit"></i> Medical Records</b></a>
                                  </li>
                                  <li class="">
                                      <a data-toggle="tab" href="#labresult"><b><i class="icon-beaker"></i> Laboratory Result</b></a>
                                  </li>
                              </ul>
                          </header>
                          <div class="panel-body">
                              <div class="tab-content">
                                  <div id="patientinfo" class="tab-pane active">
								  <form role="form" class="form-horizontal">
											<div class="form-group">
												<div class="col-sm-4">
													<p class="help-block">A.5 Dominant Hand:<p>
													<input type="text" class="form-control" value="<?php echo $row['DOM_HAND']?>">
												</div>
												<div class="col-sm-4">
													<p class="help-block">A.6 How do you rate Physical Health:<p>
													<input type="text" class="form-control" value="<?php echo $row['PHY_HEALTH']?>">
												</div>
												<div class="col-sm-4">
													<p class="help-block">A.7 How do you rate your Mental and Emotional health in the past Month?:<p>
													<input type="text" class="form-control" value="<?php echo $row['MENT_EMO_HEAl']?>">
												</div>
											</div>
											<div class="form-group">
												<div class="col-sm-4">
													<p class="help-block">A.8 Do you currently have any disease(s) or Disorder(s)?:<p>
													<input type="text" id="DISE_DISO" class="form-control" <?php if ($row['DISE_DISO'] == "No"){echo "value=\"No\"";}else if($row['DISE_DISO'] == "No information given!"){ echo "value=\"--Select--\""; }else{ echo "value=\"Yes\"";}?>>
													<br>
													<textarea name="" id="DISE_DISO_TXTA" style="resize:none" class="form-control" cols="2" rows="4" disabled><?php if($row['DISE_DISO'] == "No"){ echo "";}else if($row['DISE_DISO'] == 'No information given!'){ echo "No information given!";}else{ echo $row['DISE_DISO'];}?></textarea>
												</div>
												<div class="col-sm-4">
													<p class="help-block">A.9 Did you ever have any significant injures that impact on your level of functioning?:<p>
													<input type="text" id="SIG_INJ" class="form-control" <?php if ($row['SIG_INJ'] == "No"){echo "value=\"No\"";}else if($row['SIG_INJ'] == "No information given!"){ echo "value=\"--Select--\""; }else{ echo "value=\"Yes\"";}?>>
													<br>
													<textarea name="" id="SIG_INJ_TXTA" style="resize:none" class="form-control" cols="2" rows="4" disabled><?php if($row['SIG_INJ'] == "No"){ echo "";}else if($row['SIG_INJ'] == 'No information given!'){ echo "No information given!";}else{ echo $row['SIG_INJ'];}?></textarea>
                                                </div>
												<div class="col-sm-4">
													<p class="help-block">A.10 have you been hospitalized in the last year?:<p>
													<input type="text" class="form-control" id="HPTL" <?php if ($row['HPTL'] == "No"){echo "value=\"No\"";}else if($row['HPTL'] == "No information given!"){ echo "value=\"--Select--\""; }else{ echo "value=\"Yes\"";}?>>
													<br>
													<textarea style="resize:none" id="HPTL_TXTA" class="form-control" cols="2" rows="4" disabled><?php if($row['HPTL'] == "No"){ echo "";}else if($row['HPTL'] == 'No information given!'){ echo "No information given!";}else{ echo $row['HPTL'];}?></textarea>
												</div>
											</div>
											<div class="form-group">
												<div class="col-sm-4">
													<p class="help-block">A.11 are you taking medication?:<p>
													<input type="text" id="MEDCT" class="form-control" <?php if ($row['MEDCT'] == "No"){echo "value=\"No\"";}else if($row['MEDCT'] == "No information given!"){ echo "value=\"--Select--\""; }else{ echo "value=\"Yes\"";}?>>
													<br>
													<textarea name="" id="MEDCT_TXTA" style="resize:none" class="form-control" cols="2" rows="4" disabled><?php if($row['MEDCT'] == "No"){ echo "";}else if($row['MEDCT'] == 'No information given!'){ echo "No information given!";}else{ echo $row['MEDCT'];}?></textarea>
												</div>
												<div class="col-sm-4">
													<p class="help-block">A.12 Do you smoke?:<p>
													<input type="text" class="form-control" id="SMOKE" <?php if ($row['SMOKE'] == "No"){echo "value=\"No\"";}else if($row['SMOKE'] == "No information given!"){ echo "value=\"--Select--\""; }else{ echo "value=\"Yes\"";}?>>
													<br>
													<textarea style="resize:none" class="form-control" id="SMOKE_TXTA" cols="2" rows="4" disabled><?php if($row['SMOKE'] == "No"){ echo "";}else if($row['SMOKE'] == 'No information given!'){ echo "No information given!";}else{ echo $row['SMOKE'];}?></textarea>
												</div>
												<div class="col-sm-4">
													<p class="help-block">A.13 Do you consume Alcohol or drugs?:<p>
													<input type="text" id="ALCO_DRUGS" class="form-control" <?php if ($row['ALCO_DRUGS'] == "No"){echo "value=\"No\"";}else if($row['ALCO_DRUGS'] == "No information given!"){ echo "value=\"--Select--\""; }else{ echo "value=\"Yes\"";}?>>
													<br>
													<textarea name="" id="ALCO_DRUGS_TXTA" style="resize:none" class="form-control" cols="2" rows="4" disabled><?php if($row['ALCO_DRUGS'] == "No"){ echo "";}else if($row['ALCO_DRUGS'] == 'No information given!'){ echo "No information given!";}else{ echo $row['ALCO_DRUGS'];}?></textarea>
												</div>
											</div>
											<div class="form-group">
												<div class="col-sm-4">
													<p class="help-block">A.14 Do you use Assistive Device?:<p>
													<input type="text" id="ASSIST_DEV" class="form-control" <?php if ($row['ASSIST_DEV'] == "No"){echo "value=\"No\"";}else if($row['ASSIST_DEV'] == "No information given!"){ echo "value=\"--Select--\""; }else{ echo "value=\"Yes\"";}?>>
													<br>
													<textarea name="" id="ASSIST_DEV_TXTA" style="resize:none" class="form-control" cols="2" rows="4" disabled><?php if($row['ASSIST_DEV'] == "No"){ echo "";}else if($row['ASSIST_DEV'] == 'No information given!'){echo "No information given!";}else{ echo $row['ASSIST_DEV'];}?></textarea>
												</div>
												<div class="col-sm-4">
													<p class="help-block">A.15 Do you have any person assisting you?:<p>
													<input type="text" class="form-control" id="PERS_ASSIST" <?php if ($row['PERS_ASSIST'] == "No"){echo "value=\"No\"";}else if($row['PERS_ASSIST'] == "No information given!"){ echo "value=\"--Select--\""; }else{ echo "value=\"Yes\"";}?>>
													<br>
													<textarea style="resize:none" id="PERS_ASSIST_TXTA" class="form-control" cols="2" rows="4" disabled><?php if($row['PERS_ASSIST'] == "No"){ echo "";}else if($row['PERS_ASSIST'] == 'No information given!'){echo "No information given!";}else{ echo $row['PERS_ASSIST'];}?></textarea>
												</div>
												<div class="col-sm-4">
													<p class="help-block">A.16 Are you receiving any land of treatment for you Health?:<p>
													<input type="text" class="form-control" id="TRMT" <?php if ($row['TRMT'] == "No"){echo "value=\"No\"";}else if($row['TRMT'] == "No information given!"){ echo "value=\"--Select--\""; }else{ echo "value=\"Yes\"";}?>>
													<br>
													<textarea style="resize:none" class="form-control" id="TRMT_TXTA" cols="2" rows="4" disabled><?php if($row['TRMT'] == "No"){ echo "";}else if($row['TRMT'] == 'No information given!'){echo "No information given!";}else{ echo $row['TRMT'];}?></textarea>
												</div>
											</div>
											<div class="form-group">
												<div class="col-sm-4">
													<p class="help-block">A.17 Additional Significant on your past and present health?:<p>
													<textarea id="PP_HEATH" style="resize:none" class="form-control" cols="2" rows="4"><?php echo $row['PP_HEATH']; ?></textarea>
												</div>
												<div class="col-sm-4">
													<p class="help-block">A.18 In the Past Month, cut back your usual activies because of your health condition?:<p>
													<input type="text" id="CB_HEALTH_COND" class="form-control" <?php if ($row['CB_HEALTH_COND'] == "No"){echo "value=\"No\"";}else if($row['CB_HEALTH_COND'] == "No information given!"){ echo "value=\"--Select--\""; }else{ echo "value=\"Yes\"";}?>>
													<br>
													<textarea id="CB_HEALTH_COND_TXTA" style="resize:none" class="form-control" cols="2" rows="4" disabled><?php if($row['CB_HEALTH_COND'] == "No"){ echo "";}else if($row['CB_HEALTH_COND'] == 'No information given!'){echo "No information given!";}else{ echo $row['CB_HEALTH_COND'];}?></textarea>
												</div>
												<div class="col-sm-4">
													<p class="help-block">A.19 In the Past Month, have you been totally unable to carry out your  unable to carry out your usual activities?:<p>
													<input type="text" id="TU_HEALTH_COND" class="form-control" <?php if ($row['TU_HEALTH_COND'] == "No"){echo "value=\"No\"";}else if($row['TU_HEALTH_COND'] == "No information given!"){ echo "value=\"--Select--\""; }else{ echo "value=\"Yes\"";}?>>
													<br>
													<textarea id="TU_HEALTH_COND_TXTA" style="resize:none" class="form-control" cols="2" rows="4" disabled><?php if($row['TU_HEALTH_COND'] == "No"){ echo "";}else if($row['TU_HEALTH_COND'] == 'No information given!'){echo "No information given!";}else{ echo $row['TU_HEALTH_COND'];}?></textarea>
												</div>
											</div>
										</form>
									</div>
											<!--Medical Records start-->
									<div id="medrecord" class="tab-pane">
									<div class="adv-table">
										<header class="panel-heading" <?php if($SCHED_ID == ''){echo "style='display: none;'";}else{echo "style='display: block;'";}?> id="Medicalrecord_btn">
											<a class="btn btn-shadow btn-success" data-toggle="modal" data-target="#medrecmodal"><i class="icon-plus"></i> Add Consultation Details</a>
										</header>
										<div class="panel-body">
											<div class="adv-table">
												<table  class="display table table-bordered table-striped" id="example">
												  <thead>
												  <tr>
													  <th style="width: 75%; text-align: center;"><i class="icon-calendar"></i> Date</th>
													  <th style="width: 15%; text-align: center;">Illness / Ailments</th>
													  <th style="width: 10%; text-align: center;">Blood Pressure</th>
													  <th style="width: 10%; text-align: center;">Weight<br>(Kg)</th>
													  <th style="width: 15%; text-align: center;">Temp<br>(Celcius)</th>
													  <th style="width: 20%; text-align: center;">Follow-Up Checkup</th>
													  <th style="width: 15%; text-align: center;">Status</th>
													  <th style="width: 15%; text-align: center;">Action</th>
												  </tr>
												  </thead>
												  <tbody>
													<?php
while($MR = $medicalrecord->fetch()){
    $MED_ID = $MR['MR_ID'];
    $TRMNT_ID = $MR['TRMT_ID'];
	$treatment = ("Select * FROM referral WHERE TRMTMNT_ID = '$TRMNT_ID'");
	$TR_ID = mysql_query($treatment);
    $TR = mysql_fetch_array($TR_ID);
    
        $UserDoctor = ("SELECT *, CONCAT('Dr. ',Firstname,' ',Middlename,' ',Lastname) AS Fullname FROM users WHERE Position = 'Doctor' AND STATUS = 'Active'");
        $UserList = mysql_query($UserDoctor);
        $Doctor = mysql_fetch_array($UserList);

?>
												  <tr>
													  <td style="text-align: center;"><?php echo strftime('%Y-%m-%d', strtotime($MR['DATE'])); ?></td>
													  <td style="text-align: center;"><?php echo $MR['MR_ILL'] ?></td>
													  <td style="text-align: center;"><?php echo $MR['MR_BP'] ?></td>
													  <td style="text-align: center;"><?php echo $MR['MR_WEIGHT'] ?></td>
													  <td style="text-align: center;"><?php echo $MR['MR_TEMP'] ?></td>
													  <td style="text-align: center;"><?php if($MR['MR_STATUS'] == 'Pending'){ echo "Awaiting";}else{ if($MR['FCUP_DATE'] == ''){echo "N/A";}else{ echo $MR['FCUP_DATE'];} } ?></td>
													  <td style="text-align: center;"><?php if($MR['MR_STATUS'] == 'Pending'){ echo "<span class='label label-danger label-mini'>Pending</span>";}else{ echo "<span class='label label-success label-mini'>Completed</span>";} ?></td>
                                                      <td style="text-align: center;"><?php
                                                      if($MR['MR_STATUS'] == 'Pending'){ echo "<a class='btn btn-shadow btn-info btn-xs' onclick='RetrieveDoctor(";?><?php echo $MR['MR_ID']; ?><?php echo ")' data-toggle='modal' data-target='#treatment-";?><?php echo $MR['MR_ID']; ?><?php echo "'><i class='icon-share-alt'></i> Proceed</a>";}else{ echo "<a class='btn btn-shadow btn-success btn-xs' onclick='RetrieveSaveDoctor(";?><?php echo $MR['MR_ID'] ?><?php echo ")' data-toggle='modal' data-target='#edit-treatment-";?><?php echo $MR['MR_ID'] ?><?php echo "'><i class='icon-eye-open'></i> View</a>";}
                                                      ?> 
<?php
    require 'lib/modals/Treatment.php';
    require 'lib/modals/edit-treatment.php';
    require 'lib/modals/add-lab-record.php';
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
									</div>
								</div>
								<div id="labresult" class="tab-pane">
									<div class="adv-table">
										<table  class="display table table-bordered table-striped" id="labrecords">
										  <thead>
											<tr>
											  <th style="width: 100%; text-align: center;">Laboratory No.</th>
                                              <th style="width: 130%; text-align: center;">Requesting doctor</th>
											  <th style="width: 100%; text-align: center;">Date Taken</th>
											  <th style="width: 100%; text-align: center;">Test Requested</th>
											  <th style="width: 100%; text-align: center;" class="hidden-phone">Action</th>
											</tr>
										  </thead>
										  <tbody>
                                            <?php
                                            while($LAB_REC = mysql_fetch_array($result)) {
                                                $DOCTOR_ID = $LAB_REC['User_id'];
                                                
                                                $Req_Doc = ("SELECT *, CONCAT('Dr. ',Firstname,' ',Middlename,' ',Lastname) AS Fullname FROM users WHERE User_id = '$DOCTOR_ID'");
                                                $REQ_DOC = mysql_query($Req_Doc);
                                                $RD = mysql_fetch_array($REQ_DOC);
                                            ?>
											  <tr class="gradeX">
											  <td style="text-align: center;"><?php echo $LAB_REC['LAB_ID'];?></td>
                                              <td style="text-align: center;"><?php echo $RD['Fullname'];?></td>
											  <td style="text-align: center;"><?php echo $LAB_REC['DATE_TAKEN'];?></td>
											  <td style="text-align: center;" class="center hidden-phone"><?php echo $LAB_REC['LBR_TYPE'];?></td>
											  <td style="text-align: center;" class="center hidden-phone">
												<a class="btn btn-shadow btn-primary btn-xs" href="LabtestRecord.php?LREC_ID=<?php echo $LAB_REC['LAB_ID'];?>"><i class="icon-share-alt"></i> Proceed</a>
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
							</div>
						</div>
					  </section>
					  </aside>
<?php
$UserDoctor = ("SELECT *, CONCAT('Dr. ',Firstname,' ',Middlename,' ',Lastname) AS Fullname FROM users WHERE Position = 'Doctor' AND STATUS = 'Active'");
$UserList = mysql_query($UserDoctor);
$Doctor = mysql_fetch_array($UserList);
include 'lib/modals/view-patient-profile-medical_record.php';
?>

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
    <script type="text/javascript" src="assets/select2/js/select2.min.js"></script>
	<script src="js/checkboxhide.js"></script>
	<!--key press limit-->
	<script src="js/numbers-only.js"></script>
	<script type="text/javascript" src="assets/bootstrap-inputmask/bootstrap-inputmask.min.js"></script>
	<script src="js/respond.min.js" ></script>
<?php
    include 'lib/functions/view-patients-profile-script.php';
    include 'lib/User-Accesslvl.php';
    include 'lib/logout.script.php';
?>
  </body>
</html>
