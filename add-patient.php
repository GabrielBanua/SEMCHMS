 <?php
require 'lib/session.php';
require 'lib/Db.config.php';
    $rowSQL = mysql_query( "SELECT MAX( P_ID ) AS max FROM `patient`" );
    $row = mysql_fetch_array($rowSQL);
    $largestNumber = $row['max'];
    $MaxID = $largestNumber + 1;
    $date = date("Y-m-d");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/favicon.ico">

    <title>Add Patients</title>
    <!-- js placed at the end of the document so the pages load faster -->
    <!--<script src="js/jquery.js"></script>-->
    <script type="text/javascript" language="javascript" src="assets/advanced-datatable/media/js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
    <script type="text/javascript" language="javascript" src="assets/advanced-datatable/media/js/jquery.dataTables.js"></script>
    <script src="js/respond.min.js" ></script>
	<!-- Webcam.min.js -->
  	<script type="text/javascript" src="js/webcam.min.js"></script>
  	<!-- Plugins -->
  	<script type="text/javascript" src="assets/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
  	<script src="js/advanced-form-components.js"></script>
	
    <!--common script for all pages-->
	  <script src="js/preloader.js" ></script>
  	<!-- Keypress Limit -->
  	<script src="js/numbers-only.js"></script>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
  	<link rel="stylesheet" type="text/css" href="assets/bootstrap-fileupload/bootstrap-fileupload.css" />
  	<link rel="stylesheet" type="text/css" href="assets/bootstrap-datepicker/css/datepicker.css" />
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
        <img src="gif/Ellipsis1.gif" alt="SEMHCMS">
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
                          <li><a href="login.php"><i class="icon-key"></i> Log Out</a></li>
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
                          <li class="active"><a href="add-patient.php">Add Patients</a></li>
                          <li><a  href="view-patients.php">View Patients</a></li>
						  <li><a  href="patient-reports-panel.php">Patient Reports</a></li>
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
				  
				  <li class="sub-menu">
                      <a href="javascript:;">
                          <i class="icon-truck"></i>
                          <span>Inventory Management</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="view-inventory.php">View Inventory</a></li>
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
                  <div class="col-md-6">
                      <section class="panel">
                          <header class="panel-heading">
                              Basic Information
                          </header>
                          <div class="panel-body">
							<form action="" role="form" class="form-horizontal tasi-form">
							<div class="form-group">
								<div class="col-md-9">
									<div id="my_camera"></div><br>
									<div class="col-lg-8">
									<div id="pre_take_buttons">
										<!-- This button is shown before the user takes a snapshot -->
										<button type="button" class="btn btn-shadow btn-success btn-block" onClick="preview_snapshot()"><i class="icon-camera"></i> Take Snapchat</button>
									</div>
									<div id="post_take_buttons" style="display:none">
										<!-- These buttons are shown after a snapshot is taken -->
										<button type="button" class="btn btn-shadow btn-success btn-block" onClick="cancel_preview()"><i class="icon-undo"></i> Re-Take Snapchat</button>
										<br><button type="button" class="btn btn-shadow btn-success btn-block" onClick="save_photo()"><i class="icon-save"></i> Save</button>
									</div>
									<div>
									</div>
									</div>
							  </div>
							</div>
							<div class="form-group">
                                <label class="col-md-4 control-label">Patient Id</label>
                                <div class="col-lg-4">
                                    <input type="text" name="P_ID" id="P_ID" value="P000<?php echo $MaxID ?>" readonly class="form_datetime form-control">
                                </div>
                            </div>
							<div class="form-group">
                                <label class="col-md-4 control-label">Date Registered:</label>
                                <div class="col-lg-4">
                                    <input id=" DATE_REG" name="DATE_REG" type="text" value="<?php echo $date ?>" readonly class="form_datetime form-control">
                                </div>
                            </div>
							<div class="form-group">
                                <label class="col-md-4 control-label">First Name</label>
                                <div class="col-lg-6">
                                    <input id="P_FNAME" name="P_FNAME" type="text" class="form-control" autofocus required>
                                </div>
                            </div>
							<div class="form-group">
                                <label class="col-md-4 control-label">Middle Name</label>
                                <div class="col-lg-6">
                                    <input id="P_MNAME" name="P_MNAME" type="text" class="form-control" required>
                                </div>
                            </div>
							<div class="form-group">
                                <label class="col-md-4 control-label">Last Name</label>
                                <div class="col-lg-6">
                                    <input id="P_LNAME" name="P_LNAME" type="text" class="form-control" required>
                                </div>
                            </div>
							<div class="form-group">
                                <label class="col-md-4 control-label">Purok</label>
                                <div class="col-lg-6">
                                    <input id="#" name="#" type="text" class="form-control" required>
                                </div>
                            </div>
							<div class="form-group">
                                <label class="col-md-4 control-label">Baranggay</label>
                                <div class="col-lg-6">
                                    <input id="#" name="#" type="text" class="form-control" required>
                                </div>
                            </div>
							<div class="form-group">
                                <label class="col-md-4 control-label">Address</label>
                                <div class="col-lg-6">
                                    <input id="P_ADD" name="P_ADD" type="text" class="form-control" required>
                                </div>
                            </div>
							<div class="form-group">
                                <label class="col-md-4 control-label">Gender</label>
                                <div class="col-lg-6">
                                    <select class="form-control" name="P_GNDR" id="P_GNDR" required>
                  										<option hidden>--Select--</option>
                  										<option>Male</option>
                  										<option>Female</option>
                  									</select>
                                </div>
                  							</div>
                  							<div class="form-group">
                  								<label class="col-md-4 control-label">Birthdate</label>
                    								<div class="col-lg-6">
                    									<input id="P_BDATE" name="P_BDATE" type="date" class="form-control" required>
                    								</div>
                  							</div>
                  							<div class="form-group">
                                  <label class="col-md-4 control-label">Age</label>
                                    <div class="col-lg-3">
                                      <input tabindex="-1" id="P_AGE" name="P_AGE" type="text" class="form-control" readonly>
                                    </div>
                                </div>
                  							<div class="form-group">
                                  <label class="col-md-4 control-label">Category</label>
                                    <div class="col-lg-3">
                                        <input tabindex="-1" id="P_TYPE" name="P_TYPE" type="text" class="form-control" readonly>
                                    </div>
							                  </div>
                                <div class="form-group">
                                  <label class="col-md-4 control-label">Temperature (Celcius)</label>
                                  <div class="col-lg-3">
									                 <input id="P_TEMP" name="P_TEMP" maxlength="5" type="text"class="form-control numdecimal">
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label class="col-md-4 control-label">Weight (Kg)</label>
                                    <div class="col-lg-3">
									                   <input id="P_WGHT" name="P_WGHT" maxlength="5" type="text" class="form-control numdecimal" required>
								                    </div>
							                  </div>
                  							<div class="form-group">
                  								<label class="col-md-4 control-label">Height (cm)</label>
                      								<div class="col-lg-3">
                      									<input id="P_HGHT" name="P_HGHT" maxlength="5" type="text" class="form-control numdecimal" required>
                      								</div>
                  							</div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Contact Number (+639)</label>
                                <div class="col-lg-6">
                                    <input id="P_CN" name="P_CN" type="text" maxlength="11" class="form-control numonly" required>
                                </div>
                             </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Religion</label>
                                <div class="col-lg-6">
									<input id="P_REL" name="P_REL" type="text" maxlength="11" class="form-control" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Civil Status</label>
                                <div class="col-lg-6">
                    									<select class="form-control" name="P_CVL_STAT" id="P_CVL_STAT" required>
                    										<option hidden>--Select--</option>
                                        <option>Single</option>
                                        <option>Widowed</option>
                                        <option>Married</option>
                                        <option>Divorced</option>
                                        <option>Separated</option>
                                    </select>
                                </div>
                            </div>
              							<div class="form-group">
              								<label class="col-md-4 control-label">Years of Formal Education:</label>
              								<div class="col-lg-3">
              									<input id="YEARS_FE" maxlength="2" type="text" class="form-control numdecimal" required>
              								</div>
              							</div>
							              <div class="form-group">
                                <label class="col-md-4 control-label">Current Occupation</label>
                                <div class="col-lg-6">
                                    <select class="form-control" id="P_OCCU" required>
                                        <option hidden>--Select--</option>
                                        <option>Paid Employment</option>
										<option>Self-Employment</option>
										<option>Non-paid work(Volunteer/Charity)</option>
										<option>Student</option>
										<option>Keeping house(for others)</option>
										<option>House-maker(Own House)</option>
										<option>Retired</option>
										<option>Unemployed</option>
                                    </select>
                                </div>
                            </div>
							              <div class="form-group">
                                <label class="col-md-4 control-label">Current Occupation (Family Bread Winner)</label>
                                <div class="col-lg-6">
                                    <select class="form-control" id="P_OCCU_FBW" required>
                                        <option hidden>--Select--</option>
                                        <option>Paid Employment</option>
                    										<option>Self-Employment</option>
                    										<option>Non-paid work(Volunteer/Charity)</option>
                    										<option>Student</option>
                    										<option>Keeping house(for others)</option>
                    										<option>House-maker(Own House)</option>
                    										<option>Retired</option>
                    										<option>Unemployed</option>
                                    </select>
                                </div>
                            </div>
						</form>
					</div>    
				</section>
			</div>
			<div class="col-md-6">
				<section class="panel">
					<header class="panel-heading">
					   Health Issue
					</header>
            <div class="panel-body">
				        <form role="form" class="form-horizontal tasi-form">
          					<div class="form-group">
          						<label class="col-md-4 control-label">A.5 Dominant Hand:</label>
							          <div class="col-lg-4">
          								<select class="form-control" name="DOM_HAND" id="DOM_HAND" required>
          									<option hidden>--Select--</option>
          									<option>Left</option>
          									<option>Right</option>
          								</select>
                        </div>
                    </div>
          					<div class="form-group">
          						<label class="col-md-4 control-label">A.6 How do you rate Physical Health:</label>
                        <div class="col-lg-4">
                      		<select class="form-control" name="PHY_HEALTH" id="PHY_HEALTH" required>
                      			<option hidden>--Select--</option>
                      			<option>Poor</option>
                      			<option>Good</option>
                      			<option>Very Good</option>
                      		</select>
                        </div>
                    </div>
          					<div class="form-group">
          						<label class="col-md-4 control-label">A.7 How do you rate your Mental and Emotional health in the past Month?:</label>
                        <div class="col-lg-4">
                            <select class="form-control" name="MENT_EMO_HEAl" id="MENT_EMO_HEAl" required>
              								<option hidden>--Select--</option>
              								<option>Poor</option>
              								<option>Good</option>
              								<option>Very Good</option>
                            </select>
                        </div>
                    </div>
          					<div class="form-group">
          						<label class="col-md-4 control-label">A.8 Do you currently have any disease(s) or Disorder(s)?:</label>
                        <div class="col-lg-4">
            							<select class="form-control" id="DISE_DISO" required>
            								<option hidden>--Select--</option>
            								<option>No</option>
            								<option>Yes</option>
                            </select>
                        </div>
            						<div class="col-lg-10">
            							<textarea id="DISE_DISO_TXTA" style="resize:none" class="form-control" cols="2" rows="4" disabled required placeholder="if yes, please input additional information"></textarea>
            						</div>
                    </div>
          					<div class="form-group">
          						<label class="col-md-4 control-label">A.9 Did you ever have any significant injuries that impact on your level of functioning?:</label>
                      	<div class="col-lg-4">
                      		<select class="form-control" name="SIG_INJ" id="SIG_INJ" required>
            								<option hidden>--Select--</option>
            								<option>No</option>
                      			<option>Yes</option>
                      		</select>
						            </div>
        						<div class="col-lg-10">
        							<textarea id="SIG_INJ_TXTA" style="resize:none" class="form-control" cols="2" rows="4" disabled required placeholder="if yes, please input additional information"></textarea>
        						</div>
                    </div>
          					<div class="form-group">
          						<label class="col-md-4 control-label">A.10 have you been hospitalized in the last year?:</label>
                        <div class="col-lg-4">
              							<select class="form-control" name="HPTL" id="HPTL" required>
              								<option hidden>--Select--</option>
              								<option>Yes</option>
              								<option>No</option>
                          	</select>
                        </div>
                  			<div class="col-lg-10">
                  				<textarea style="resize:none" id="HPTL_TXTA" class="form-control" cols="2" rows="4" disabled required placeholder="if yes, please input additional information"></textarea>
                  			</div>
                    </div>
          					<div class="form-group">
          						<label class="col-md-4 control-label">A.11 are you taking medication?:</label>
                        <div class="col-lg-4">
							            <select class="form-control" name="MEDCT" id="MEDCT" required>
                        		<option hidden>--Select--</option>
                                <option>No</option>
                        		<option>Yes</option>
                        	</select>
                          </div>
              						<div class="col-lg-10">
              							<textarea id="MEDCT_TXTA" style="resize:none" class="form-control" cols="2" rows="4" disabled required placeholder="if yes, please input additional information"></textarea>
              						</div>
                    </div>
          					<div class="form-group">
          						<label class="col-md-4 control-label">A.12 Do you smoke?:</label>
                        <div class="col-lg-4">
							            <select class="form-control" name="SMOKE" id="SMOKE" required>
                      			<option hidden>--Select--</option>
                      			<option>Yes</option>
                      			<option>No</option>
                      		</select>
                        </div>
            			      <div class="col-lg-10">
            							<br>
            							<textarea style="resize:none" id="SMOKE_TXTA" class="form-control" cols="2" rows="4" disabled required placeholder="if yes, please input additional information"></textarea>
        						    </div>
                    </div>
          					<div class="form-group">
          						<label class="col-md-4 control-label">A.13 Do you consume Alcohol or drugs?:</label>
                        <div class="col-lg-4">
                        	<select class="form-control" name="ALCO_DRUGS" id="ALCO_DRUGS" required>
                        		<option hidden>--Select--</option>
                                <option>No</option>
                        		<option>Yes</option>
                        	</select>
                        </div>
            						<div class="col-lg-10">
            							<textarea id="ALCO_DRUGS_TXTA" style="resize:none" class="form-control" cols="2" rows="4" disabled required placeholder="if yes, please input additional information"></textarea>
            						</div>
                    </div>
          					<div class="form-group">
          						<label class="col-md-4 control-label">A.14 Do you use Assistive Device?:</label>
                        <div class="col-lg-4">
            							<select class="form-control" name="ASSIST_DEV" id="ASSIST_DEV" required>
            								<option hidden>--Select--</option>
                            <option>No</option>
                        		<option>Yes</option>
                        	</select>
                        </div>  
            						<div class="col-lg-10">
            							<textarea id="ASSIST_DEV_TXTA" style="resize:none" class="form-control" cols="2" rows="4" disabled required placeholder="if yes, please input additional information"></textarea>
            						</div>
                    </div>
          					<div class="form-group">
          						<label class="col-md-4 control-label">A.15 Do you have any person assisting you?:</label>
                          <div class="col-lg-4">
              							<select class="form-control" name="PERS_ASSIST" id="PERS_ASSIST" required>
              								<option hidden>--Select--</option>
                                      		<option>Yes</option>
                                      		<option>No</option>
              							</select>
                          </div>
                    			<div class="col-lg-10">
                    				<textarea style="resize:none" id="PERS_ASSIST_TXTA" class="form-control" cols="2" rows="4" disabled required placeholder="if yes, please input additional information"></textarea>
                    			</div>
                    </div>
          					<div class="form-group">
          						<label class="col-md-4 control-label">A.16 Are you receiving any land of treatment for you Health?:</label>
                        <div class="col-lg-4">
            							<select class="form-control" name="TRMT" id="TRMT" required>
                      						<option hidden>--Select--</option>
                          					<option>Yes</option>
                          					<option>No</option>
            							</select>
            						</div>
                  			<div class="col-lg-10">
                  				<textarea id="TRMT_TXTA" style="resize:none" class="form-control" cols="2" rows="4" disabled required placeholder="if yes, please input additional information"></textarea>
                  			</div>
                    </div>
          					<div class="form-group">
          						<label class="col-md-4 control-label">A.17 Additional Significant on your past and present health?:</label>
          						<div class="col-lg-10">
          							<textarea id="PP_HEATH" style="resize:none" class="form-control" cols="2" rows="4" required placeholder="Input some additional information"></textarea>
          						</div>
                    </div>
									  <div class="form-group">
                      <label class="col-md-4 control-label">A.18 In the Past Month, cut back your usual activies because of your health condition?:</label>
            						  <div class="col-lg-4">
              				                <select class="form-control" id="CB_HEALTH_COND" required>
              									<option hidden>--Select--</option>
                  								<option>Yes</option>
                  								<option>No</option>
              								</select>
                          </div>
            						  <div class="col-lg-10">
            								<textarea style="resize:none" id="CB_HEALTH_COND_TXTA" class="form-control" cols="2" rows="4" disabled required placeholder="if yes, please input additional information"></textarea>
            							</div>
                    </div>
									  <div class="form-group">
                      <label class="col-md-4 control-label">A.19 In the Past Month, have you been totally unable to carry out your usual activities?:</label>
						            <div class="col-lg-4">
  				                <select class="form-control" id="TU_HEALTH_COND" required>
          									<option hidden>--Select--</option>
              								<option>Yes</option>
              								<option>No</option>
          								</select>
                          </div>
            						  <div class="col-lg-10">
            								<textarea style="resize:none" id="TU_HEALTH_COND_TXTA" class="form-control" cols="2" rows="4" disabled required placeholder="if yes, please input additional information"></textarea>
            							</div>
                    </div>
          					<div class="form-group">
                      <div class="col-sm-12 pull-right" style="padding-right: 100px">
                        <a class="btn btn-shadow btn-success" type="button" onclick="addNewPatient()"><i class="icon-plus"></i> Save</a>
                        <span style="float: right; font-weight: bold;" id="Error_Message" class="text-danger"></span>
                        <span style="float: right; font-weight: bold;" id="Success_Message" class="text-success"></span>
                      </div>
                    </div>
				</form>
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
<script src="js/common-scripts.js"></script>
<?php
include 'lib/functions/Add-patient-script.php';
include 'lib/User-Accesslvl.php';
?>
  </body>
</html>
