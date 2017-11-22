<?php
require 'lib/session.php';
require 'lib/Db.config.php';
    $rowSQL = mysql_query( "SELECT MAX( P_ID ) AS max FROM `patient`" );
    $row = mysql_fetch_array( $rowSQL );
    $largestNumber = $row['max'];
    $MaxID = $largestNumber + 1;
    $date = date("Y-m-d");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Add Patient</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="assets/bootstrap-fileupload/bootstrap-fileupload.css" />
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="assets/bootstrap-datepicker/css/datepicker.css" />
    <link rel="stylesheet" type="text/css" href="assets/bootstrap-timepicker/compiled/timepicker.css" />
    <link rel="stylesheet" type="text/css" href="assets/bootstrap-colorpicker/css/colorpicker.css" />
    <link rel="stylesheet" type="text/css" href="assets/bootstrap-daterangepicker/daterangepicker-bs3.css" />

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
            <a href="index.php" class="logo">St. Ezekiel Moreno<span>|Healthcare Management System</span></a>
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
                          <span class="username">Admin</span>
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
                        <a href="javascript:;" class="active">
                          <i class="icon-user"></i>
                          <span>Patient Management</span>
                      </a>
                        <ul class="sub">
                            <li class="active"><a href="add-patient.php">Add Patients</a></li>
                            <li><a href="view-patients.php">View Patients</a></li>
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
                        </ul>
                    </li>

                    <li class="sub-menu" id="Inventory-li">
                        <a href="javascript:;">
                          <i class="icon-truck"></i>
                          <span>Inventory Management</span>
                      </a>
                        <ul class="sub">
                            <li><a href="add-inventory.php">Add Inventory</a></li>
							<li><a href="add-medicines.php">Add Medicines</a></li>
                            <li><a href="view-inventory.php">View Inventory</a></li>
                        </ul>
                    </li>
					
					<li class="sub-menu" id="Laboratory-li">
                      <a href="javascript:;">
                          <i class="icon-beaker"></i>
                          <span>Lab Management</span>
                      </a>
                      <ul class="sub">
                          <li class="sub-menu">
                              <a href="javascript:;">Add Lab Test</a>
                              <ul class="sub">
                                  <li><a href="add-lab-blood.php">Blood Chemistry</a></li>
								  <li><a href="add-lab-fecal.php">Fecalysis</a></li>
								  <li><a href="add-lab-hema.php">Hematology</a></li>
								  <li><a href="add-lab-urinal.php">Urinalysis</a></li>
                              </ul>
                          </li>
						  <li><a  href="lab-request.php">View Lab Request</a></li>
						  <li><a  href="#">View Lab Records</a></li>
                      </ul>
                  </li>

                    <li class="sub-menu" id="User-li">
                        <a href="javascript:;">
                          <i class="icon-group"></i>
                          <span>Users Management</span>
                      </a>
                        <ul class="sub">
                            <li><a href="add-user.php">Add New User</a></li>
                            <li><a href="view-users.php">View Users</a></li>
                        </ul>
                    </li>

                    <li class="sub-menu" id="Reports-li">
                        <a href="javascript:;">
                          <i class="icon-print"></i>
                          <span>Reports</span>
                      </a>
                        <ul class="sub">
                            <li><a href="reports.php">Generate Reports</a></li>
                        </ul>
                    </li>

                    <li class="sub-menu" id="Maintenance-li">
                        <a href="javascript:;">
                          <i class="icon-download-alt"></i>
                          <span>Maintenance</span>
                      </a>
                        <ul class="sub">
                            <li><a href="backup.php">Backup Database</a></li>
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
                <section class="panel">
                    <header class="panel-heading tab-bg-dark-navy-blue">
                        <ul class="nav nav-tabs">
                            <li class="active">
                                <a data-toggle="tab" href="#basicinfo">
                                          <i class="icon-user"></i>
										  Basic Information
                                      </a>
                            </li>
                            <li class="">
                                <a data-toggle="tab" href="#healthissue">
                                          <i class="icon-user"></i>
                                          Health Issue
                                      </a>
                            </li>
                            <li class="">
                                <a data-toggle="tab" href="#medrecord">
                                          <i class="icon-user"></i>
                                          Medical Records
                                      </a>
                            </li>
							<li class="">
                                <a data-toggle="tab" href="#lab">
                                          <i class="icon-user"></i>
                                          Laboratory Records
                                      </a>
                            </li>
                        </ul>
                    </header>
                    <div class="panel-body">
                        <div class="tab-content">
                            <div id="basicinfo" class="tab-pane active">
                                <div class="panel-body">
                                    <a href="#" class="task-thumb">
												<img src="img/avatar1.jpg" alt="">
												<span class="btn btn-white btn-file">
												<span class="fileupload-new"><i class="icon-paper-clip"></i> Select image</span>
									</a>
                                </div>
                                <div class="panel-body bio-graph-info">

<!--DIRI START GAB-->
                                    <form class="form-horizontal" role="form">
                                        <div class="form-group">
                                            <label class="col-lg-2 control-label">Patient Id</label>
                                            <div class="col-lg-4">
                                                <input type="text" name="P_ID" id="P_ID" value="P000<?php echo $MaxID ?>" readonly class="form_datetime form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-2 control-label">Date Registered:</label>
                                            <div class="col-lg-4">
                                                <input id=" DATE_REG" name="DATE_REG" type="text" value="<?php echo $date ?>" readonly class="form_datetime form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-2 control-label">First Name</label>
                                            <div class="col-lg-4">
                                                <input id="P_FNAME" name="P_FNAME" type="text" class="form-control" placeholder=" " autofocus required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-2 control-label">Middle Name</label>
                                            <div class="col-lg-4">
                                                <input id="P_MNAME" name="P_MNAME" type="text" class="form-control" placeholder=" " required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-2 control-label">Last Name</label>
                                            <div class="col-lg-4">
                                                <input id="P_LNAME" name="P_LNAME" type="text" class="form-control" placeholder=" " required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-2 control-label">Address</label>
                                            <div class="col-lg-4">
                                                <input id="P_ADD" name="P_ADD" type="text" class="form-control" placeholder=" " required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-2 control-label">Gender</label>
                                            <div class="col-lg-4">
                                                <select class="form-control" name="P_GNDR" id="P_GNDR" required>
												<option>-None-</option>
												<option>Male</option>
												<option>Female</option>
										</select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-2 control-label">Birthdate</label>
                                            <div class="col-lg-4">
                                                <input  type="text" id="P_BDATE" name="P_BDATE" class="form-control" placeholder=" ">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-2 control-label">Age</label>
                                            <div class="col-lg-2">
                                                <input id="P_AGE" name="P_AGE" type="text" class="form-control" placeholder=" " required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-2 control-label">Category</label>
                                            <div class="col-lg-4">
                                                <select class="form-control" name="P_TYPE" id="P_TYPE" required>
												<option>-None-</option>
												<option>Adult</option>
												<option>Children</option>
										</select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-2 control-label">Occupation</label>
                                            <div class="col-lg-4">
                                                <select class="form-control" name="P_OCCU" id="P_OCCU" required>
                                                    <option>Student</option>
                                                    <option>Government Employee</option>
                                                    <option>Senior Citizen</option>
                                                    <option>lawyer</option>
                                                    <option>Director</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-2 control-label">Temperature</label>
                                            <div class="col-lg-4">
                                                <input id="P_TEMP" name="P_TEMP" type="text" class="form-control" placeholder=" " required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-2 control-label">Weight</label>
                                            <div class="col-lg-4">
                                                <input id="P_WGHT" name="P_WGHT" type="text" class="form-control" placeholder=" " required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-2 control-label">Height</label>
                                            <div class="col-lg-4">
                                                <input id="P_HGHT" name="P_HGHT" type="text" class="form-control" placeholder=" " required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-2 control-label">Contact Number</label>
                                            <div class="col-lg-4">
                                                <input id="P_CN" name="P_CN" type="text" class="form-control" placeholder=" " required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-2 control-label">Religion</label>
                                            <div class="col-lg-4">
                                                <select class="form-control" name="P_REL" id="P_REL" required>
													<option>-None-</option>
													<option>Catholic</option>
													<option>Muslim</option>
												</select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-2 control-label">Civil Status</label>
                                            <div class="col-lg-4">
                                                <select class="form-control" name="P_CVL_STAT" id="P_CVL_STAT" required>
                                                    <option>Single</option>
                                                    <option>Widowed</option>
                                                    <option>Married</option>
                                                    <option>divorced</option>
                                                    <option>separated</option>
                                                </select>
                                            </div>
                                        </div>
										<div class="form-group">
											<div class="col-lg-4 pull-right">
											<a class="btn btn-primary btnNext"  type="submit">Next</a>
<!--DIRI ANG LAST-->                        </div>
										</div>
                                    </form>
                                </div>
                            </div>
							<!--health issue tab  start-->
                            <div id="healthissue" class="tab-pane">
                                <form role="form" class="form-horizontal">
                                    <div class="form-group">
                                        <div class="col-sm-4">
                                            <p class="help-block">A.5 Dominant Hand:
                                                <p>
                                                    <input id="DOM_HAND" type="text" class="form-control" placeholder="">
                                        </div>
                                        <div class="col-sm-4">
                                            <p class="help-block">A.6 How do you rate Physical Health:
                                                <p>
                                                    <input id="PHY_HEALTH" type="text" class="form-control" placeholder="">
                                        </div>
                                        <div class="col-sm-4">
                                            <p class="help-block">A.7 How do you rate your health in the past Month?:
                                                <p>
                                                    <input id="MENT_EMO_HEAl" type="text" class="form-control" placeholder="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-4">
                                            <p class="help-block">A.8 Do you currently have any disease(s) or Disorder(s)?:
                                                <p>
                                                    <input id="DISE_DISO" type="text" class="form-control" placeholder="">
                                        </div>
                                        <div class="col-sm-4">
                                            <p class="help-block">A.9 Did you ever have any significant injures that impact on your level of functioning?:
                                                <p>
                                                    <input id="SIG_INJ" type="text" class="form-control" placeholder="">
                                        </div>
                                        <div class="col-sm-4">
                                            <p class="help-block">A.10 have you been hospitalized in the last year?:
                                                <p>
                                                    <input id="HPTL" type="text" class="form-control" placeholder="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-4">
                                            <p class="help-block">A.11 are you taking medication?:
                                                <p>
                                                    <input id="MEDCT" type="text" class="form-control" placeholder="">
                                        </div>
                                        <div class="col-sm-4">
                                            <p class="help-block">A.12 Do you smoke?:
                                                <p>
                                                    <input id="SMOKE" type="text" class="form-control" placeholder="">
                                        </div>
                                        <div class="col-sm-4">
                                            <p class="help-block">A.13 Do you consume Alcohol or drugs?:
                                                <p>
                                                    <input id="ALCO_DRUGS" type="text" class="form-control" placeholder="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-4">
                                            <p class="help-block">A.14 Do you use Assistive Device?:
                                                <p>
                                                    <input id="ASSIST_DEV" type="text" class="form-control" placeholder="">
                                        </div>
                                        <div class="col-sm-4">
                                            <p class="help-block">A.15 Do you have any person assisting you?:
                                                <p>
                                                    <input id="PERS_ASSIST" type="text" class="form-control" placeholder="">
                                        </div>
                                        <div class="col-sm-4">
                                            <p class="help-block">A.16 Are you receiving any land of treatment for you Health?:
                                                <p>
                                                    <input id="TRMT" type="text" class="form-control" placeholder="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-4">
                                            <p class="help-block">A.17 Additional Significant on your past and present health?:
                                                <p>
                                                    <input id="PP_HEATH" type="text" class="form-control" placeholder="">
                                        </div>
                                        <div class="col-sm-4">
                                            <p class="help-block">A.18 In the Past Month, cut back your usual activies because of your health condition?:
                                                <p>
                                                    <input id="CB_HEALTH_COND" type="text" class="form-control" placeholder="">
                                        </div>
                                        <div class="col-sm-4">
                                            <p class="help-block">A.19 In the Past Month, have you been totally unable to carry out your unable to carry out your usual activities?:
                                                <p>
                                                    <input id="TU_HEALTH_COND" type="text" class="form-control" placeholder="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-4">
                                            <p class="help-block">B.2 Years of Formal Education:
                                                <p>
                                                    <input name="YEARS_FE" type="text" class="form-control" placeholder="">
                                        </div>
                                        <div class="col-sm-4">
                                            <p class="help-block">B.3 Marital Status:
                                                <p>
                                                    <input id="MARITAL_STAT" type="text" class="form-control" placeholder="">
                                        </div>
                                        <div class="col-sm-4">
                                            <p class="help-block">B.4 Current Occupation:
                                                <p>
                                                    <input id="" type="text" class="form-control" placeholder="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                            <div class="col-sm-4 pull-right">
                                                <button class="btn btn-primary" onclick="addNewPatient()">Save</button>
                                                <a class="btn btn-primary btnPrevious">Previous</a>
                                            </div>
                                        </div>
                                </form> 
<!--Diri ang LAST-->
                            </div>
                            <div id="medrecord" class="tab-pane ">
                                <table class="table table-striped table-advance table-hover">
                                            <thead>
                              <tr>
                                  <th><i class="icon-calendar"></i>Date</th>
                                  <th class="hidden-phone"><i class="icon-question-sign"></i>Ilness/Ailments</th>
                                  <th><i class="icon-bookmark"></i> Blood Pressure</th>
                                  <th><i class=" icon-edit"></i> Status</th>
                                  <th></th>
                              </tr>
                              </thead>
                              <tbody>
                              <tr>
                                  <td><a href="#">1/01/2017</a></td>
                                  <td class="hidden-phone">Lorem Ipsum dorolo imit</td>
                                  <td>110/70</td>
                                  <td><span class="label label-info label-mini">Ongoing</span></td>
                                  <td>
                                      <button class="btn btn-success btn-xs"><i class="icon-ok"></i></button>
                                      <button class="btn btn-primary btn-xs"><i class="icon-pencil"></i></button>
                                      <button class="btn btn-danger btn-xs"><i class="icon-trash "></i></button>
                                  </td>
                              </tr>
                              <tr>
                                  <td>
                                      <a href="#">
                                          1/01/2017
                                      </a>
                                  </td>
                                  <td class="hidden-phone">Lorem Ipsum dorolo</td>
                                  <td>110/70</td>
                                  <td><span class="label label-warning label-mini">Late</span></td>
                                  <td>
                                      <button class="btn btn-success btn-xs"><i class="icon-ok"></i></button>
                                      <button class="btn btn-primary btn-xs"><i class="icon-pencil"></i></button>
                                      <button class="btn btn-danger btn-xs"><i class="icon-trash "></i></button>
                                  </td>
                              </tr>
                              <tr>
                                  <td>
                                      <a href="#">
                                          1/01/2017
                                      </a>
                                  </td>
                                  <td class="hidden-phone">Lorem Ipsum dorolo</td>
                                  <td>110/70</td>
                                  <td><span class="label label-success label-mini">Done</span></td>
                                  <td>
                                      <button class="btn btn-success btn-xs"><i class="icon-ok"></i></button>
                                      <button class="btn btn-primary btn-xs"><i class="icon-pencil"></i></button>
                                      <button class="btn btn-danger btn-xs"><i class="icon-trash "></i></button>
                                  </td>
                              </tr>
                              <tr>
                                  <td>
                                      <a href="#">
                                          1/01/2017
                                      </a>
                                  </td>
                                  <td class="hidden-phone">Lorem Ipsum dorolo</td>
                                  <td>110/70</td>
                                  <td><span class="label label-danger label-mini">Late</span></td>
                                  <td>
                                      <button class="btn btn-success btn-xs"><i class="icon-ok"></i></button>
                                      <button class="btn btn-primary btn-xs"><i class="icon-pencil"></i></button>
                                      <button class="btn btn-danger btn-xs"><i class="icon-trash "></i></button>
                                  </td>
                              </tr>
                              <tr>
                                  <td><a href="#">1/01/2017</a></td>
                                  <td class="hidden-phone">Lorem Ipsum dorolo imit</td>
                                  <td>110/70</td>
                                  <td><span class="label label-primary label-mini">Waiting</span></td>
                                  <td>
                                      <button class="btn btn-success btn-xs"><i class="icon-ok"></i></button>
                                      <button class="btn btn-primary btn-xs"><i class="icon-pencil"></i></button>
                                      <button class="btn btn-danger btn-xs"><i class="icon-trash "></i></button>
                                  </td>
                              </tr>
                              <tr>
                                  <td>
                                      <a href="#">
                                          1/01/2017
                                      </a>
                                  </td>
                                  <td class="hidden-phone">Lorem Ipsum dorolo</td>
                                  <td>110/70 </td>
                                  <td><span class="label label-warning label-mini">Ongoing</span></td>
                                  <td>
                                      <button class="btn btn-success btn-xs"><i class="icon-ok"></i></button>
                                      <button class="btn btn-primary btn-xs"><i class="icon-pencil"></i></button>
                                      <button class="btn btn-danger btn-xs"><i class="icon-trash "></i></button>
                                  </td>
                              </tr>
                              <tr>
                                  <td><a href="#">1/01/2017</a></td>
                                  <td class="hidden-phone">Lorem Ipsum dorolo imit</td>
                                  <td>110/70 </td>
                                  <td><span class="label label-success label-mini">Done</span></td>
                                  <td>
                                      <button class="btn btn-success btn-xs"><i class="icon-ok"></i></button>
                                      <button class="btn btn-primary btn-xs"><i class="icon-pencil"></i></button>
                                      <button class="btn btn-danger btn-xs"><i class="icon-trash "></i></button>
                                  </td>
                              </tr>
                              <tr>
                                  <td>
                                      <a href="#">
                                          1/01/2017
                                      </a>
                                  </td>
                                  <td class="hidden-phone">Lorem Ipsum dorolo</td>
                                  <td>110/70</td>
                                  <td><span class="label label-warning label-mini">Due</span></td>
                                  <td>
                                      <button class="btn btn-success btn-xs"><i class="icon-ok"></i></button>
                                      <button class="btn btn-primary btn-xs"><i class="icon-pencil"></i></button>
                                      <button class="btn btn-danger btn-xs"><i class="icon-trash "></i></button>
                                  </td>
                              </tr>
                              <tr>
                                  <td><a href="#">1/01/2017</a></td>
                                  <td class="hidden-phone">Lorem Ipsum dorolo imit</td>
                                  <td>110/70</td>
                                  <td><span class="label label-info label-mini">Due</span></td>
                                  <td>
                                      <button class="btn btn-success btn-xs"><i class="icon-ok"></i></button>
                                      <button class="btn btn-primary btn-xs"><i class="icon-pencil"></i></button>
                                      <button class="btn btn-danger btn-xs"><i class="icon-trash "></i></button>
                                  </td>
                              </tr>
                              <tr>
                                  <td>
                                      <a href="#">
                                          1/01/2017
                                      </a>
                                  </td>
                                  <td class="hidden-phone">Lorem Ipsum dorolo</td>
                                  <td>110/70</td>
                                  <td><span class="label label-warning label-mini">Due</span></td>
                                  <td>
                                      <button class="btn btn-success btn-xs"><i class="icon-ok"></i></button>
                                      <button class="btn btn-primary btn-xs"><i class="icon-pencil"></i></button>
                                      <button class="btn btn-danger btn-xs"><i class="icon-trash "></i></button>
                                  </td>
                              </tr>
                              </tbody>
                          </table>
                            <div class="form-group">
                                            <div class="col-sm-4 pull-right">
                                                <a class="btn btn-primary btnNext">Next</a>
                                                <a class="btn btn-primary btnPrevious">Previous</a>
                                            </div>
                                        </div>
                            </div>
                            <div id="lab" class="tab-pane ">
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
                                  <div class="form-group">
                                            <div class="col-sm-4 pull-right">
                                                <a class="btn btn-primary btnPrevious">Previous</a>
                                                <a class="btn btn-success">Save</a>
                                            </div>
                                        </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </section>
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
    <script src="js/respond.min.js"></script>
    <!--common script for all pages-->
    <script src="js/common-scripts.js"></script>
    

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
        var Religion = $('#P_REL').val();
        var Civil = $('#P_CVL_STAT').val();
        var Weight = $('#P_WGHT').val();
        var Height = $('#P_HGHT').val();
        
        var Past_pre = $('#PP_HEATH').val();
        var Treatment = $('#TRMT').val();
        var Medication = $('#MEDCT').val();
        var Disease = $('#DISE_DISO').val();
        var Hospitalized = $('#HPTL').val();
        
        var Dominant = $('#DOM_HAND').val();
        var Physical_H = $('#PHY_HEALTH').val();
        var Mental_Emo = $('#MENT_EMO_HEAl').val();
        var Significant = $('#SIG_INJ').val();
        var Smoke = $('#SMOKE').val();
        var Alcohol = $('#ALCO_DRUGS').val();
        var Assistive_dev = $('#ASSIST_DEV').val();
        var Person_assist = $('#PERS_ASSIST').val();
        var Marital_stat = $('#MARITAL_STAT').val();
        var Formal_ED = $('#YEARS_FE').val();
        var CB_Health = $('#CB_HEALTH_COND').val();
        var TU_Health = $('#TU_HEALTH_COND').val();
    
    $.ajax({
      type: "POST",
      url: "Server.php?p=addNewPatient",
      data: "P_LNAME="+Lastname+"&P_FNAME="+Firstname+"&P_MNAME="+Middlename+"&P_GNDR="+Gender+"&P_BDATE="+Birthday+"&P_AGE="+Age+"&P_TEMP="+Temperature+"&P_WGHT="+Weight+"&P_HGHT="+Height+"&P_TYPE="+Type+"&P_ADD="+Address+"&P_CN="+Contact+"&P_OCCU="+Occupation+"&P_REL="+Religion+"&P_CVL_STAT="+Civil+"&PP_HEATH="+Past_pre+"&TRMT="+Treatment+"&MEDCT="+Medication+"&DISE_DISO="+Disease+"&HPTL="+Hospitalized+"&DOM_HAND="+Dominant+"&PHY_HEALTH="+Physical_H+"&MENT_EMO_HEAl="+Mental_Emo+"&SIG_INJ="+Significant+"&SMOKE="+Smoke+"&ALCO_DRUGS="+Alcohol+"&ASSIST_DEV="+Assistive_dev+"&PERS_ASSIST="+Person_assist+"&MARITAL_STAT="+Marital_stat+"&YEARS_FE="+Formal_ED+"&CB_HEALTH_COND="+CB_Health+"&TU_HEALTH_COND="+TU_Health
    });
    
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
            $('#Maintenance-li').hide();
            $('#Reports-li').hide();
            $('#Laboratory-li').hide();
            $('#Inventory-li').hide();
        }
        });
</script>	
<script>
		$('.btnNext').click(function(){
			$('.nav-tabs > .active').next('li').find('a').trigger('click');
		});
		$('.btnPrevious').click(function(){
			$('.nav-tabs > .active').prev('li').find('a').trigger('click');
		});
</script>
    

</body>

</html>