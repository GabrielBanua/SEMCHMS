<?php
require 'lib/session.php';
require 'lib/Db.config.php';

$VIEW_ID = isset($_GET['VID'])?$_GET['VID']:'';
$sql = "SELECT *, CONCAT(patient.P_FNAME,' ', patient.P_LNAME) AS FullName FROM ((patient INNER JOIN patient_medical_issue ON patient.P_ID = patient_medical_issue.P_ID) INNER JOIN adult ON patient_medical_issue.PMI_ID = adult.PMI_ID) WHERE patient.P_ID = $VIEW_ID";
$result = mysql_query($sql);
$row = mysql_fetch_array($result);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/favicon.ico">

    <title>Patient Profile</title>

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
                      <a href="javascript:;" class="active" >
                          <i class="icon-user"></i>
                          <span>Patient Management</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="add-patient.php">Add Patients</a></li>
                          <li class="active"><a  href="view-patients.php">View Patients</a></li>
						  <li><a  href="#">Patient Reports</a></li>
                      </ul>
                  </li>
				  
				  <li class="sub-menu" id="Schedule-li">
                      <a href="javascript:;" >
                          <i class="icon-calendar"></i>
                          <span>Schedule Management</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="set-schedule.php">Set Schedule</a></li>
                          <li><a  href="view-schedule.php">View Schedule</a></li>
						  <li><a  href="#">Schedule Reports</a></li>
                      </ul>
                  </li>
				  
				  <li class="sub-menu" id="Inventory-li">
                      <a href="javascript:;" >
                          <i class="icon-truck"></i>
                          <span>Inventory Management</span>
                      </a>
                      <ul class="sub">
                          <li><a href="add-inventory.php">Add Inventory</a></li>
							<li><a href="add-medicines.php">Add Medicines</a></li>
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
                  <aside class="profile-nav col-lg-3">
                      <section class="panel">
                          <div class="user-heading round">
                              <a href="#">
                                  <img src="img/profile-avatar.jpg" alt="">
                              </a>
                              <h3><?php echo $row['FullName']?></h3>
                              <p>P000<?php echo $row['P_ID']?></p>
                          </div>

                          <ul class="nav nav-pills nav-stacked">
                              <li class="active"><a> <i class="icon-user"></i> Profile</a></li>
							  <li><a href="add-patient.html"> <i class="icon-pencil"></i>Edit Profile</a></li>
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
                                      <p><span>Date Registered </span>: <?php echo $row['DATE_REG']?></p>
                                  </div>
                                  <div class="bio-row">
                                      <p><span>Address </span>: <?php echo $row['P_ADD']?></p>
                                  </div>
                                  <div class="bio-row">
                                      <p><span>First Name</span>: <?php echo $row['P_FNAME']?></p>
                                  </div>
                                  <div class="bio-row">
                                      <p><span>Religion </span>: <?php echo $row['P_REL']?></p>
                                  </div>
                                  <div class="bio-row">
                                      <p><span>Middle Name </span>: <?php echo $row['P_MNAME']?></p>
                                  </div>
                                  <div class="bio-row">
                                      <p><span>Type </span>: <?php echo $row['P_TYPE']?></p>
                                  </div>
                                  <div class="bio-row">
                                      <p><span>Last Name </span>: <?php echo $row['P_LNAME']?></p>
                                  </div>
                                  <div class="bio-row">
                                      <p><span>Civil Status </span>: <?php echo $row['P_CVL_STAT']?></p>
                                  </div>
                                  <div class="bio-row">
                                      <p><span>Birthday</span>: <?php echo $row['P_BDATE']?></p>
                                  </div>
                                  <div class="bio-row">
                                      <p><span>Occupation </span>: <?php echo $row['P_OCCU']?></p>
                                  </div>
                                  <div class="bio-row">
                                      <p><span>Age </span>: <?php echo $row['P_AGE']?></p>
                                  </div>
                                  <div class="bio-row">
                                      <p><span>Gender </span>: <?php echo $row['P_GNDR']?></p>
                                  </div>
                                  <div class="bio-row">
                                      <p><span>Mobile </span>: 09<?php echo $row['P_CN']?></p>
                                  </div>
                                  <div class="bio-row">
                                      <p><span>Weight(kg) </span>: <?php echo $row['P_WGHT']?></p>
                                  </div>
                                  <div class="bio-row">
                                      <p><span>Height(cm) </span>: <?php echo $row['P_HGHT']?></p>
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
                                      <a data-toggle="tab" href="#patientinfo">Personal Information</a>
                                  </li>
                                  <li class="">
                                      <a data-toggle="tab" href="#medrecord">Medical Records</a>
                                  </li>
                                  <li class="">
                                      <a data-toggle="tab" href="#labresult">Laboratory Result</a>
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
													<input type="text" id="DISE_DISO" class="form-control" <?php if ($row['DISE_DISO'] != "No" && $row['DISE_DISO'] != "--Select--"){ echo "value=\"Yes\""; }else{ echo "value=\"No\"";}?>>
													<br>
													<textarea name="" id="DISE_DISO_TXTA" style="resize:none" class="form-control" cols="2" rows="4" disabled><?php if($row['DISE_DISO'] != "No" && $row['DISE_DISO'] != "--Select--"){ echo $row['DISE_DISO']; }else{ echo "";}?></textarea>
												</div>
												<div class="col-sm-4">
													<p class="help-block">A.9 Did you ever have any significant injures that impact on your level of functioning?:<p>
													<input type="text" id="SIG_INJ" class="form-control" <?php if ($row['SIG_INJ'] != "No" && $row['SIG_INJ'] != "--Select--"){ echo "value=\"Yes\""; }else{ echo "value=\"No\"";}?>>
													<br>
													<textarea name="" id="SIG_INJ_TXTA" style="resize:none" class="form-control" cols="2" rows="4" disabled><?php if($row['SIG_INJ'] != "No" && $row['SIG_INJ'] != "--Select--"){ echo $row['SIG_INJ']; }else{ echo "";}?></textarea>
												</div>
												<div class="col-sm-4">
													<p class="help-block">A.10 have you been hospitalized in the last year?:<p>
													<input type="text" class="form-control" value="<?php echo $row['HPTL']?>">
													<br>
													<textarea style="resize:none" class="form-control" cols="2" rows="4" disabled required></textarea>
												</div>
											</div>
											<div class="form-group">
												<div class="col-sm-4">
													<p class="help-block">A.11 are you taking medication?:<p>
													<input type="text" id="MEDCT" class="form-control" <?php if ($row['MEDCT'] != "No" && $row['MEDCT'] != "--Select--"){ echo "value=\"Yes\""; }else{ echo "value=\"No\"";}?>>
													<br>
													<textarea name="" id="MEDCT_TXTA" style="resize:none" class="form-control" cols="2" rows="4" disabled><?php if($row['MEDCT'] != "No" && $row['MEDCT'] != "--Select--"){ echo $row['MEDCT']; }else{ echo "";}?></textarea>
												</div>
												<div class="col-sm-4">
													<p class="help-block">A.12 Do you smoke?:<p>
													<input type="text" class="form-control" value="<?php echo $row['SMOKE']?>">
													<br>
													<textarea style="resize:none" class="form-control" cols="2" rows="4" disabled required></textarea>
												</div>
												<div class="col-sm-4">
													<p class="help-block">A.13 Do you consume Alcohol or drugs?:<p>
													<input type="text" id="ALCO_DRUGS" class="form-control" <?php if ($row['ALCO_DRUGS'] != "No" && $row['ALCO_DRUGS'] != "--Select--"){ echo "value=\"Yes\""; }else{ echo "value=\"No\"";}?>>
													<br>
													<textarea name="" id="ALCO_DRUGS_TXTA" style="resize:none" class="form-control" cols="2" rows="4" disabled><?php if($row['ALCO_DRUGS'] != "No" && $row['ALCO_DRUGS'] != "--Select--"){ echo $row['ALCO_DRUGS']; }else{ echo "";}?></textarea>
												</div>
											</div>
											<div class="form-group">
												<div class="col-sm-4">
													<p class="help-block">A.14 Do you use Assistive Device?:<p>
													<input type="text" id="ASSIST_DEV" class="form-control" <?php if ($row['ASSIST_DEV'] != "No" && $row['ASSIST_DEV'] != "--Select--"){ echo "value=\"Yes\""; }else{ echo "value=\"No\"";}?>>
													<br>
													<textarea name="" id="ASSIST_DEV_TXTA" style="resize:none" class="form-control" cols="2" rows="4" disabled><?php if($row['ASSIST_DEV'] != "No" && $row['ASSIST_DEV'] != "--Select--"){ echo $row['ASSIST_DEV']; }else{ echo "";}?></textarea>
												</div>
												<div class="col-sm-4">
													<p class="help-block">A.15 Do you have any person assisting you?:<p>
													<input type="text" class="form-control" value="<?php echo $row['PERS_ASSIST']?>">
													<br>
													<textarea style="resize:none" class="form-control" cols="2" rows="4" disabled required></textarea>
												</div>
												<div class="col-sm-4">
													<p class="help-block">A.16 Are you receiving any land of treatment for you Health?:<p>
													<input type="text" class="form-control" value="<?php echo $row['TRMT']?>">
													<br>
													<textarea style="resize:none" class="form-control" cols="2" rows="4" disabled required></textarea>
												</div>
											</div>
											<div class="form-group">
												<div class="col-sm-4">
													<p class="help-block">A.17 Additional Significant on your past and present health?:<p>
													<textarea name="" id="PP_HEATH" style="resize:none" class="form-control" cols="2" rows="4"></textarea>
												</div>
												<div class="col-sm-4">
													<p class="help-block">A.18 In the Past Month, cut back your usual activies because of your health condition?:<p>
													<input type="text" class="form-control" value="<?php echo $row['CB_HEALTH_COND']?>">
												</div>
												<div class="col-sm-4">
													<p class="help-block">A.19 In the Past Month, have you been totally unable to carry out your  unable to carry out your usual activities?:<p>
													<input type="text" class="form-control" value="<?php echo $row['TU_HEALTH_COND']?>">
												</div>
											</div>
											<div class="form-group">
												<div class="col-sm-4">
													<p class="help-block">B.2 Years of Formal Education:<p>
													<input type="text" class="form-control" value="<?php echo $row['YEARS_FE']?>">
												</div>
												<div class="col-sm-4">
													<p class="help-block">B.3 Marital Status:<p>
													<input type="text" class="form-control" value="<?php echo $row['MARITAL_STAT']?>">
												</div>
											</div>
										</form>
									</div>
											<!--Medical Records start-->
                                  <div id="medrecord" class="tab-pane">
									<div class="adv-table">
										<header class="panel-heading">
													<a class="btn btn-success" data-toggle="modal" href="#apointment">Add Medical Records</a>
												</header>
                                    <table class="table table-striped table-advance table-hover">
									  <thead>
									  <tr>
										  <th style="width:8%;"><i class="icon-bullhorn"></i> Date</th>
										  <th>Illness / Ailments</th>
										  <th><i class="icon-bookmark"></i>Blood Pressure</th>
										  <th>Weight</th>
										  <th>Temperature</th>
										  <th style="width:15%;">Follow-Up Checkup</th>
										  <th>Remark</th>
										  <th style="width:10%;"><i class=" icon-edit"></i> Status</th>
										  <th>Action</th>
									  </tr>
									  </thead>
									  <tbody>
									  <tr>
										  <td>2017-12-1</td>
										  <td>Headache</td>
										  <td>50/50</td>
										  <td>69 kgs</td>
										  <td>50`C</td>
										  <td>2017-12-2</td>
										  <td>So Hot</td>
										  <td><span class="label label-success label-mini">Finish</span></td>
										  <td>
											  <a class="btn btn-primary btn-xs"><i class="icon-share-alt"></i> Proceed</a>
										  </td>
									  </tr>
									  
									  </tbody>
								  </table>
								  </div>
			  
								</div>
								  			<!--Medical Records end-->
                                  <div id="labresult" class="tab-pane">
										<div class="adv-table">
                                    <table  class="display table table-bordered table-striped" id="example">
                                      <thead>
                                      <tr>
                                          <th>Laboratory No.</th>
                                          <th>Lab Test Type</th>
                                          <th>Date Taken</th>
                                          <th class="hidden-phone">Test Requested</th>
                                          <th class="hidden-phone">Action</th>
                                      </tr>
                                      </thead>
                                      <tbody>
                                      <tr class="gradeX">
                                          <td>000001</td>
                                          <td>Urinalysis</td>
                                          <td>12/12/2017</td>
                                          <td class="center hidden-phone">Uric Acid</td>
                                          <td class="center hidden-phone">
											<a class="btn btn-primary btn-xs" href="add-lab-urinal.html">Proceed</a>
										  </td>
                                      </tr>
									  <tr class="gradeX">
                                          <td>000001</td>
                                          <td>Urinalysis</td>
                                          <td>12/12/2017</td>
                                          <td class="center hidden-phone">Uric Acid</td>
                                          <td class="center hidden-phone">
											<a class="btn btn-primary btn-xs" href="add-lab-urinal.html">Proceed</a>
										  </td>
                                      </tr>
									  <tr class="gradeX">
                                          <td>000001</td>
                                          <td>Urinalysis</td>
                                          <td>12/12/2017</td>
                                          <td class="center hidden-phone">Uric Acid</td>
                                          <td class="center hidden-phone">
											<a class="btn btn-primary btn-xs" href="add-lab-urinal.html">Proceed</a>
										  </td>
                                      </tr>
                                      </tfoot>
									</table>
								  </div>
                              </div>
                          </div>
					</div>
				</div>
                      </section>
                  </aside>
				  <!-- Modal -->
          <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="apointment" class="modal fade">
              <div class="modal-dialog">
                  <div class="modal-content">
                      <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                          <h4 class="modal-title">Add Medical Records</h4>
                      </div>
                      <div class="modal-body">
                          <form class="form-horizontal" role="form">
                                  <div class="form-group">
                                      <label  class="col-lg-3 control-label">Date Schedule</label>
                                      <div class="col-lg-6">
                                          <input type="text" class="form-control" placeholder=" "autofocus required>
                                      </div>
                                  </div>
								  <div class="form-group">
                                      <label  class="col-lg-3 control-label">Time</label>
                                      <div class="col-lg-6">
                                          <input type="text" class="form-control" placeholder=" " required>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label  class="col-lg-3 control-label">Illness/Ailments</label>
                                      <div class="col-lg-6">
                                          <input type="text" class="form-control" placeholder=" ">
                                      </div>
                                  </div>
								   <div class="form-group">
                                      <label  class="col-lg-3 control-label">Blood Pressure</label>
                                      <div class="col-lg-6">
                                          <input type="text" class="form-control" placeholder=" ">
                                      </div>
                                  </div>
								   <div class="form-group">
                                      <label  class="col-lg-3 control-label">Weight</label>
                                      <div class="col-lg-6">
                                          <input type="text" class="form-control" placeholder=" ">
                                      </div>
                                  </div>
								   <div class="form-group">
                                      <label  class="col-lg-3 control-label">Temperature</label>
                                      <div class="col-lg-6">
                                          <input type="text" class="form-control" placeholder=" ">
                                      </div>
                                  </div>
								  <div class="form-group">
                                      <label  class="col-lg-3 control-label">Follow-up Check up Date</label>
                                      <div class="col-lg-6">
                                          <input type="text" class="form-control" placeholder=" ">
                                      </div>
                                  </div>
								  <div class="form-group">
                                      <label  class="col-lg-3 control-label">Remarks</label>
                                      <div class="col-lg-6">
										  <textarea name="" id="" style="resize:none" class="form-control" cols="2" rows="4"></textarea>
                                      </div>
                                  </div>
								  <div class="form-group">
                                      <label  class="col-lg-3 control-label">Status</label>
                                      <div class="col-lg-6">
                                          <input type="text" class="form-control" placeholder=" ">
                                      </div>
                                  </div>
								  <div class="form-group">
                                      <label  class="col-lg-3 control-label">Appointment Reason</label>
                                      <div class="col-lg-6">
                                          <select class="form-control">
												<option hidden>-None-</option>
												<option>Consultation</option>
												<option>Follow up Checkup</option>
										</select>
                                      </div>
                                  </div>
                              </form>
                      </div>
                      <div class="modal-footer">
                          <button data-dismiss="modal" class="btn btn-success" type="button">Add</button>
                      </div>
                  </div>
              </div>
          </div>
          <!-- modal -->
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
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="assets/jquery-knob/js/jquery.knob.js"></script>
    <script src="js/respond.min.js" ></script>

    <!--common script for all pages-->
    <script src="js/common-scripts.js"></script>
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

      $(document).ready(function(){
          var Disease = $('#DISE_DISO').val();
          var Significant = $('#SIG_INJ').val(); 
          var Alcohol = $('#ALCO_DRUGS').val();
          var Medication = $('#MEDCT').val();
          var Assistive_dev = $('#ASSIST_DEV').val();   
          $('#DISE_DISO_TXTA').attr('disabled',true);
          $('#SIG_INJ_TXTA').attr('disabled',true);
          $('#ALCO_DRUGS_TXTA').attr('disabled',true);
          $('#MEDCT_TXTA').attr('disabled',true);
          $('#ASSIST_DEV_TXTA').attr('disabled',true);
          if(Disease == "Yes"){
            $('#DISE_DISO_TXTA').attr('disabled',false);
          }
          if(Significant == "Yes"){
            $('#SIG_INJ_TXTA').attr('disabled',false);
          }
          if(Alcohol == "Yes"){
            $('#ALCO_DRUGS_TXTA').attr('disabled',false);
          }
          if(Medication == "Yes"){
            $('#MEDCT_TXTA').attr('disabled',false);
          }
          if(Assistive_dev == "Yes"){
            $('#ASSIST_DEV_TXTA').attr('disabled',false);
          }
      });
        
    </script>
  </body>
</html>
