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
        <img src="gif/heart.svg" alt="SEMHCMS">
        <div style="position: absolute; top: 90%;left: 50%;margin-right: -50%;transform: translate(-50%, -50%);">
          <p style="font-size: 15px; font-weight: bold;">loading</p>
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
    <script src="js/common-scripts.js"></script>
	  <script src="js/preloader.js" ></script>
  	<!-- Keypress Limit -->
  	<script src="js/numbers-only.js"></script>
  	<script>

	  function addNewPatient(){ 
        var Lastname = $('#P_LNAME').val();
        var Firstname = $('#P_FNAME').val();
        var Middlename = $('#P_MNAME').val();
        var Gender = $('#P_GNDR').val();
        var Birthday = $('#P_BDATE').val();
        var Age = $('#P_AGE').val();
        var Temperature = $('#P_TEMP').val();
        var Type = $('#P_TYPE').val();
        var Address = $('#P_ADD').val();
        var Contact = $('#P_CN').val();
        var Occupation = $('#P_OCCU').val();
        var OccupationFBW = $('#P_OCCU_FBW').val();
        var Religion = $('#P_REL').val();
        var Civil = $('#P_CVL_STAT').val();
        var Weight = $('#P_WGHT').val();
        var Height = $('#P_HGHT').val();
        
        var Past_pre = $('#PP_HEATH').val();
        var Treatment = $('#TRMT').val();
            if(Treatment == 'Yes'){
              Treatment = $('#TRMT_TXTA').val();
            }else if(Treatment == '--Select--'){
              Treatment = 'No information given!';
            }
        var Medication = $('#MEDCT').val();
            if(Medication == 'Yes'){
              Medication = $('#MEDCT_TXTA').val();
            }else if(Medication == '--Select--'){
              Medication = 'No information given!';
            }
        var Disease = $('#DISE_DISO').val();
            if(Disease == 'Yes'){
              Disease = $('#DISE_DISO_TXTA').val();
            }else if(Disease == '--Select--'){
              Disease = 'No information given!';
            }
        var Hospitalized = $('#HPTL').val();
            if(Hospitalized == 'Yes'){
              Hospitalized = $('#HPTL_TXTA').val();
            }else if(Hospitalized == '--Select--'){
              Hospitalized = 'No information given!';
            }
        var Dominant = $('#DOM_HAND').val();
        var Physical_H = $('#PHY_HEALTH').val();
        var Mental_Emo = $('#MENT_EMO_HEAl').val();
        var Significant = $('#SIG_INJ').val();
            if(Significant == 'Yes'){
              Significant = $('#SIG_INJ_TXTA').val();
            }else if(Significant == '--Select--'){
              Significant = 'No information given!';
            }
        var Smoke = $('#SMOKE').val();
            if(Smoke == 'Yes'){
              Smoke = $('#SMOKE_TXTA').val();
            }else if(Smoke == '--Select--'){
              Smoke = 'No information given!';
            }
        var Alcohol = $('#ALCO_DRUGS').val();
            if(Alcohol == 'Yes'){
              Alcohol = $('#ALCO_DRUGS_TXTA').val();
            }else if(Alcohol == '--Select--'){
              Alcohol = 'No information given!';
            }
        var Assistive_dev = $('#ASSIST_DEV').val();
            if(Assistive_dev == 'Yes'){
              Assistive_dev = $('#ASSIST_DEV_TXTA').val();
            }else if(Assistive_dev == '--Select--'){
              Assistive_dev = 'No information given!';
            }
        var Person_assist = $('#PERS_ASSIST').val();
            if(Person_assist == 'Yes'){
              Person_assist = $('#PERS_ASSIST_TXTA').val();
            }else if(Person_assist == '--Select--'){
              Person_assist = 'No information given!';
            }
        var Formal_ED = $('#YEARS_FE').val();
        var CB_Health = $('#CB_HEALTH_COND').val();
            if(CB_Health == 'Yes'){
              CB_Health = $('#CB_HEALTH_COND_TXTA').val();
            }else if(CB_Health == '--Select--'){
              CB_Health = 'No information given!';
            }
        var TU_Health = $('#TU_HEALTH_COND').val();
            if(TU_Health == 'Yes'){
              TU_Health = $('#TU_HEALTH_COND_TXTA').val();
            }else if(TU_Health == '--Select--'){
              TU_Health = 'No information given!';
            }

            if(Lastname == '' || Firstname == '' || Middlename == '' || Gender == '--Select--' || Age == '' || Temperature == '' || Weight == '' || Height == '' || Type == '' || Address == '' || Contact == '' || Occupation == '--Select--' || Religion == '--Select--' || Civil == '--Select--' || Past_pre == '' || Treatment == '' || Medication == '' || Disease == '' || Hospitalized == '' || Dominant == '--Select--' || Physical_H == '--Select--' || Mental_Emo == '--Select--' || Significant == '' || Smoke == '' || Alcohol == '' || Assistive_dev == '' || Person_assist == '' || Formal_ED == '' || CB_Health == '' || TU_Health == '' || OccupationFBW == '--Select--'){
              $('#Error_Message').html('Please fill in all fields! &nbsp;');
            }else{
              $('#Error_Message').html('');
                if(confirm('Are you sure you want to add this patient record in the database?')){
                    $.ajax({
                      type: "POST",
                      url: "Server.php?p=addNewPatient",
                      data: "P_LNAME="+Lastname+"&P_FNAME="+Firstname+"&P_MNAME="+Middlename+"&P_GNDR="+Gender+"&P_BDATE="+Birthday+"&P_AGE="+Age+"&P_TEMP="+Temperature+"&P_WGHT="+Weight+"&P_HGHT="+Height+"&P_TYPE="+Type+"&P_ADD="+Address+"&P_CN="+Contact+"&P_OCCU="+Occupation+"&P_REL="+Religion+"&P_CVL_STAT="+Civil+"&PP_HEATH="+Past_pre+"&TRMT="+Treatment+"&MEDCT="+Medication+"&DISE_DISO="+Disease+"&HPTL="+Hospitalized+"&DOM_HAND="+Dominant+"&PHY_HEALTH="+Physical_H+"&MENT_EMO_HEAl="+Mental_Emo+"&SIG_INJ="+Significant+"&SMOKE="+Smoke+"&ALCO_DRUGS="+Alcohol+"&ASSIST_DEV="+Assistive_dev+"&PERS_ASSIST="+Person_assist+"&YEARS_FE="+Formal_ED+"&CB_HEALTH_COND="+CB_Health+"&TU_HEALTH_COND="+TU_Health+"&P_OCCU_FBW="+OccupationFBW,
                      success: function(data){
                  $('#Success_Message').html('Successfully Added! &nbsp;');
                  setTimeout(function() {
                    $('#Success_Message').fadeOut('slow');
                  }, 2000);
                  setTimeout(function(){
                    window.location.reload();
                  }, 3000);
                }
              });
              }
              else{
                //do nothing
              }
            }
          }
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

        $('#DISE_DISO').change(function(){
          $('#DISE_DISO_TXTA').prop('disabled', !($(this).val() == "Yes"));
        });
        $('#SIG_INJ').change(function(){
          $('#SIG_INJ_TXTA').prop('disabled', !($(this).val() == "Yes"));
        });
        $('#MEDCT').change(function(){
          $('#MEDCT_TXTA').prop('disabled', !($(this).val() == "Yes"));
        });
        $('#ALCO_DRUGS').change(function(){
          $('#ALCO_DRUGS_TXTA').prop('disabled', !($(this).val() == "Yes"));
        });
        $('#ASSIST_DEV').change(function(){
          $('#ASSIST_DEV_TXTA').prop('disabled', !($(this).val() == "Yes"));
        });
        $('#TRMT').change(function(){
          $('#TRMT_TXTA').prop('disabled', !($(this).val() == "Yes"));
        });
        $('#PERS_ASSIST').change(function(){
          $('#PERS_ASSIST_TXTA').prop('disabled', !($(this).val() == "Yes"));
        });
        $('#HPTL').change(function(){
          $('#HPTL_TXTA').prop('disabled', !($(this).val() == "Yes"));
        });
        $('#SMOKE').change(function(){
          $('#SMOKE_TXTA').prop('disabled', !($(this).val() == "Yes"));
        });
        $('#CB_HEALTH_COND').change(function(){
          $('#CB_HEALTH_COND_TXTA').prop('disabled', !($(this).val() == "Yes"));
        });
        $('#TU_HEALTH_COND').change(function(){
          $('#TU_HEALTH_COND_TXTA').prop('disabled', !($(this).val() == "Yes"));
        });
    </script>
	<script language="JavaScript">
			Webcam.set({
				// live preview size
			width: 320,
			height: 240,
			
			// device capture size
			dest_width: 320,
			dest_height: 240,
			
			// final cropped size
			crop_width: 240,
			crop_height: 240,
			
			// format and quality
			image_format: 'jpeg',
			jpeg_quality: 90,
				
				// flip horizontal (mirror mode)
				flip_horiz: true
			});
			Webcam.attach( '#my_camera' );
		</script>
		
		<!-- Code to handle taking the snapshot and displaying it locally -->
	<script language="JavaScript">
		// preload shutter audio clip
		var shutter = new Audio();
		shutter.autoplay = false;
		shutter.src = navigator.userAgent.match(/Firefox/) ? 'shutter.ogg' : 'shutter.mp3';
		
		function preview_snapshot() {
			// play sound effect
			try { shutter.currentTime = 0; } catch(e) {;} // fails in IE
			shutter.play();
			

			// freeze camera so user can preview current frame
			Webcam.freeze();
			
			// swap button sets
			document.getElementById('pre_take_buttons').style.display = 'none';
			document.getElementById('post_take_buttons').style.display = '';
		}
		
		function cancel_preview() {
			// cancel preview freeze and return to live camera view
			Webcam.unfreeze();
			
			// swap buttons back to first set
			document.getElementById('pre_take_buttons').style.display = '';
			document.getElementById('post_take_buttons').style.display = 'none';
		}
		function save_photo(){
			Webcam.snap( function(uri){
				Webcam.upload(uri,'upload.php')
			});
		}
	</script>
	<script>
		$("#P_BDATE").change(function(){
			var date_of_birth = new Date($(this).val());
			var today = new Date();
			var age = Math.floor((today-date_of_birth) / (365.25 * 24 * 60 * 60 * 1000));
		$('#P_AGE').val(age);
		if(age > 14){
			$('#P_TYPE').val('Adult');
		}else{
			$('#P_TYPE').val('Minor');
		}
		});
	</script>
  </body>
</html>
