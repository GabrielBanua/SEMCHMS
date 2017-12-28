<!DOCTYPE html>
<?php
require 'lib/session.php';
require 'lib/Db.config.php';
require 'lib/Db.config.pdo.php';
  $stmt = $db->prepare("Select *, CONCAT(P_FNAME,' ',P_MNAME,' ',P_LNAME) AS FullName FROM ((patient INNER JOIN patient_medical_issue ON patient.P_ID = patient_medical_issue.P_ID) INNER JOIN adult ON patient_medical_issue.PMI_ID = adult.PMI_ID)");
  $stmt->execute();
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/favicon.ico">

    <title>Patient List</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/advanced-datatable/media/css/demo_page.css" rel="stylesheet" />
    <link href="assets/advanced-datatable/media/css/demo_table.css" rel="stylesheet" />
  	<link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
  	<link rel="stylesheet" type="text/css" href="assets/bootstrap-fileupload/bootstrap-fileupload.css" />
  	<link rel="stylesheet" type="text/css" href="assets/bootstrap-datepicker/css/datepicker.css" />
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
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                              List of Patients
                          </header>
                          <div class="panel-body">
                                <div class="adv-table">
                                  <a class="btn btn-success" href="add-patient.php">Add Patient</a>
                                    <table  class="display table table-bordered table-striped" id="example">
                                      <thead>
                                      <tr>
                                          <th width="90">Patient No.</th>
                                          <th width="150">Full Name</th>
                                          <th width="100">Gender</th>
                                          <th width="80">Type</th>
                                          <th width="150">Address</th>
                                          <th width="90">Contact No.</th>
                                          <th width="80" class="hidden-phone">Action</th>
                                      </tr>
                                      </thead>
                                      <tbody>
<?php
while($row = $stmt->fetch()){
?>
                                        <tr>
                                          <td><p>P<?php echo $row['P_ID'] ?></p></td>
                                          <td><?php echo $row['FullName'] ?></td>
                                          <td><?php echo $row['P_GNDR'] ?></td>
                                          <td><?php echo $row['P_TYPE'] ?></td>
                                          <td><?php echo $row['P_ADD'] ?></td>
                                          <td>+639<?php echo $row['P_CN'] ?></td>
                                          <td align="center">
                                            <a class="btn btn-primary btn-xs" href="view-patient-profile.php?VID=<?php echo $row['P_ID'] ?>"><i class="icon-eye-open"></i></a>
                                            <a class="btn btn-success btn-xs" data-toggle="modal" href="#editpatient-<?php echo $row['P_ID'] ?>"><i class="icon-pencil"></i></a>
<!-- Register User Start  MODAL-->
<div aria-hidden="true" onchange="modalLoad()" aria-labelledby="myModalLabel-<?php echo $row['P_ID'] ?>" role="dialog" tabindex="-1" id="editpatient-<?php echo $row['P_ID'] ?>" class="modal fade">
  <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header">
              <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                <h4 class="modal-title" id="myModalLabel-<?php echo $row['P_ID'] ?>">Edit Patient Profile</h4>
          </div>
          <div class="modal-body">
              <header class="panel-heading tab-bg-dark-navy-blue ">
                  <ul class="nav nav-tabs">
                    <li class="active">
                      <a data-toggle="tab" href="#basicinfo-<?php echo $row['P_ID'] ?>">Patient Basic Info</a>
                    </li>
                    <li class="">
                      <a data-toggle="tab" href="#healthissue-<?php echo $row['P_ID'] ?>">Health Issue</a>
                    </li>
                  </ul>
              </header>
            <div class="panel-body">
              <div class="tab-content">
                <div id="basicinfo-<?php echo $row['P_ID'] ?>" class="tab-pane active">
                 <form action="#" class="form-horizontal tasi-form">
                  <div class="form-group">
                    <div class="col-md-3">
                      <div class="fileupload fileupload-new" data-provides="fileupload">
                                <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                  <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt="" />
                                </div>
                                <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                              <div>
                            <span class="btn btn-white btn-file">
                            <span class="fileupload-new"><i class="icon-paper-clip"></i> Select image</span>
                            <span class="fileupload-exists"><i class="icon-undo"></i> Change</span>
                              <input type="file" class="default" />
                            </span>
                          <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload"><i class="icon-trash"></i> Remove</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-4 control-label">Patient Id</label>
                      <div class="col-lg-4">
                        <input type="text" name="P_ID" id="P_ID" value="P000<?php echo $row['P_ID'] ?>" readonly class="form_datetime form-control">
                      </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-4 control-label">Date Registered:</label>
                      <div class="col-lg-4">
                        <input id="DATE_REG-<?php echo $row['P_ID'] ?>" name="DATE_REG" type="text" value="<?php echo $row['DATE_REG'] ?>" readonly class="form_datetime form-control">
                      </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-4 control-label">First Name</label>
                      <div class="col-lg-6">
                        <input id="P_FNAME-<?php echo $row['P_ID'] ?>" name="P_FNAME" type="text" class="form-control" value="<?php echo $row['P_FNAME'] ?>" autofocus required>
                      </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-4 control-label">Middle Name</label>
                      <div class="col-lg-6">
                        <input id="P_MNAME-<?php echo $row['P_ID'] ?>" name="P_MNAME" type="text" class="form-control" value="<?php echo $row['P_MNAME'] ?>" required>
                      </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-4 control-label">Last Name</label>
                      <div class="col-lg-6">
                        <input id="P_LNAME-<?php echo $row['P_ID'] ?>" name="P_LNAME" type="text" class="form-control" value="<?php echo $row['P_LNAME'] ?>" required>
                      </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-4 control-label">Address</label>
                      <div class="col-lg-6">
                        <input id="P_ADD-<?php echo $row['P_ID'] ?>" name="P_ADD" type="text" class="form-control" value="<?php echo $row['P_ADD'] ?>" required>
                      </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-4 control-label">Gender</label>
                      <div class="col-lg-6">
                        <select class="form-control" name="P_GNDR" id="P_GNDR-<?php echo $row['P_ID'] ?>" required>
                          <option value="--Select--"<?php
                            if ($row['P_GNDR'] == "--Select--") { echo " selected"; }?>>--Select--</option>
                          <option value="Male"<?php
                            if ($row['P_GNDR'] == "Male") { echo " selected"; }?>>Male</option>
                          <option value="Female"<?php
                            if ($row['P_GNDR'] == "Female") { echo " selected"; }?>>Female</option>
                        </select>
                      </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-4 control-label">Birthdate</label>
                      <div class="col-lg-6">
                        <input id="P_BDATE-<?php echo $row['P_ID'] ?>" name="P_BDATE" type="text" class="form-control" value="<?php echo $row['P_BDATE'] ?>" required>
                      </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-4 control-label">Age</label>
                      <div class="col-lg-2">
                        <input id="P_AGE-<?php echo $row['P_ID'] ?>" name="P_AGE" type="text" class="form-control" value="<?php echo $row['P_AGE'] ?>" required>
                      </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-4 control-label">Category</label>
                      <div class="col-lg-6">
                        <select class="form-control" name="P_TYPE" id="P_TYPE-<?php echo $row['P_ID'] ?>" required>
                          <option value="--Select--"<?php
                            if ($row['P_TYPE'] == "--Select--") { echo " selected"; }?>>--Select--</option>
                          <option value="Adult"<?php
                            if ($row['P_TYPE'] == "Adult") { echo " selected"; }?>>Adult</option>
                          <option value="Children"<?php
                            if ($row['P_TYPE'] == "Children") { echo " selected"; }?>>Children</option>
                        </select>
                      </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-4 control-label">Occupation</label>
                      <div class="col-lg-6">
                        <select class="form-control" name="P_OCCU" id="P_OCCU-<?php echo $row['P_ID'] ?>" required>
                          <option value="--Select--"<?php
                            if ($row['P_OCCU'] == "--Select--") { echo " selected"; }?>>--Select--</option>
                          <option value="Student"<?php
                            if ($row['P_OCCU'] == "Student") { echo " selected"; }?>>Student</option>
                          <option value="Government Employee"<?php
                            if ($row['P_OCCU'] == "Government Employee") { echo " selected"; }?>>Government Employee</option>
                          <option value="Senior Citizen"<?php
                            if ($row['P_OCCU'] == "Senior Citizen") { echo " selected"; }?>>Senior Citizen</option>
                          <option value="Lawyer"<?php
                            if ($row['P_OCCU'] == "Lawyer") { echo " selected"; }?>>Lawyer</option>
                          <option value="Director"<?php
                            if ($row['P_OCCU'] == "Director") { echo " selected"; }?>>Director</option>
                        </select>
                      </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-4 control-label">Temperature (Celcius)</label>
                      <div class="col-lg-6">
                        <input id="P_TEMP-<?php echo $row['P_ID'] ?>" name="P_TEMP" type="text" class="form-control" value="<?php echo $row['P_TEMP'] ?>" required>
                      </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-4 control-label">Weight (Kg)</label>
                      <div class="col-lg-6">
                        <input id="P_WGHT-<?php echo $row['P_ID'] ?>" name="P_WGHT" type="text" class="form-control" value="<?php echo $row['P_WGHT'] ?>">
                      </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-4 control-label">Height (cm)</label>
                      <div class="col-lg-6">
                        <input id="P_HGHT-<?php echo $row['P_ID'] ?>" name="P_HGHT" type="text" class="form-control" value="<?php echo $row['P_HGHT'] ?>">
                      </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-4 control-label">Contact Number (+639)</label>
                      <div class="col-lg-6">
                        <input id="P_CN-<?php echo $row['P_ID'] ?>" name="P_CN" type="text" class="form-control" value="<?php echo $row['P_CN'] ?>" required>
                      </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-4 control-label">Religion</label>
                      <div class="col-lg-6">
                        <select class="form-control" name="P_REL" id="P_REL-<?php echo $row['P_ID'] ?>" required>
                          <option value="--Select--"<?php
                            if ($row['P_REL'] == "--Select--") { echo " selected"; }?>>--Select--</option>
                          <option value="Catholic"<?php
                            if ($row['P_REL'] == "Catholic") { echo " selected"; }?>>Catholic</option>
                          <option value="Muslim"<?php
                            if ($row['P_REL'] == "Muslim") { echo " selected"; }?>>Muslim</option>
                        </select>
                      </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-4 control-label">Civil Status</label>
                      <div class="col-lg-6">
                        <select class="form-control" name="P_CVL_STAT" id="P_CVL_STAT-<?php echo $row['P_ID'] ?>" required>
                          <option value="--Select--"<?php
                            if ($row['P_CVL_STAT'] == "--Select--") { echo " selected"; }?>>--Select--</option>
                          <option value="Single"<?php
                            if ($row['P_CVL_STAT'] == "Single") { echo " selected"; }?>>Single</option>
                          <option value="Widowed"<?php
                            if ($row['P_CVL_STAT'] == "Widowed") { echo " selected"; }?>>Widowed</option>
                          <option value="Married"<?php
                            if ($row['P_CVL_STAT'] == "Married") { echo " selected"; }?>>Married</option>
                          <option value="Divorced"<?php
                            if ($row['P_CVL_STAT'] == "Divorced") { echo " selected"; }?>>Divorced</option>
                          <option value="Separated"<?php
                            if ($row['P_CVL_STAT'] == "Separated") { echo " selected"; }?>>Separated</option>
                        </select>
                      </div>
                  </div>
                </form>
              </div>
              <div id="healthissue-<?php echo $row['P_ID'] ?>" class="tab-pane">
                <form role="form" class="form-horizontal tasi-form">
                  <div class="form-group">
                    <label class="col-md-4 control-label">A.5 Dominant Hand:</label>
                      <div class="col-lg-4">
                        <select class="form-control" name="DOM_HAND" id="DOM_HAND-<?php echo $row['P_ID'] ?>">
                          <option hidden value="--Select--"<?php
                            if ($row['DOM_HAND'] == "--Select--") { echo " selected"; }?>>--Select--</option>
                          <option value="Left"<?php
                            if ($row['DOM_HAND'] == "Left") { echo " selected"; }?>>Left</option>
                          <option value="Right"<?php
                            if ($row['DOM_HAND'] == "Right") { echo " selected"; }?>>Right</option>
                        </select>
                      </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-4 control-label">A.6 How do you rate Physical Health:</label>
                      <div class="col-lg-4">
                        <select class="form-control" name="PHY_HEALTH" id="PHY_HEALTH-<?php echo $row['P_ID'] ?>">
                          <option hidden value="--Select--"<?php
                            if ($row['PHY_HEALTH'] == "--Select--") { echo " selected"; }?>>--Select--</option>
                          <option value="Poor"<?php
                            if ($row['PHY_HEALTH'] == "Poor") { echo " selected"; }?>>Poor</option>
                          <option value="Good"<?php
                            if ($row['PHY_HEALTH'] == "Good") { echo " selected"; }?>>Good</option>
                          <option value="Very Good"<?php
                            if ($row['PHY_HEALTH'] == "Very Good") { echo " selected"; }?>>Very Good</option>
                        </select>
                      </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-4 control-label">A.7 How do you rate your health Mental and Emotional in the past Month?:</label>
                      <div class="col-lg-4">
                        <select class="form-control" name="MENT_EMO_HEAl" id="MENT_EMO_HEAl-<?php echo $row['P_ID'] ?>">
                          <option hidden value="--Select--"<?php
                            if ($row['MENT_EMO_HEAl'] == "--Select--") { echo " selected"; }?>>--Select--</option>
                          <option value="Poor"<?php
                            if ($row['MENT_EMO_HEAl'] == "Poor") { echo " selected"; }?>>Poor</option>
                          <option value="Good"<?php
                            if ($row['MENT_EMO_HEAl'] == "Good") { echo " selected"; }?>>Good</option>
                          <option value="Very Good"<?php
                            if ($row['MENT_EMO_HEAl'] == "Very Good") { echo " selected"; }?>>Very Good</option>
                        </select>
                      </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-4 control-label">A.8 Do you currently have any disease(s) or Disorder(s)?:</label>
                      <div class="col-lg-4">
                        <select class="form-control" id="DISE_DISO-<?php echo $row['P_ID'] ?>">
                          <option hidden value="--Select--"<?php
                            if ($row['DISE_DISO'] == "--Select--") { echo " selected"; }?>>--Select--</option>
                          <option value="Yes"<?php
                            if ($row['DISE_DISO'] != "No" && $row['DISE_DISO'] != "--Select--") { echo " selected"; }?>>Yes</option>
                          <option value="No"<?php
                            if ($row['DISE_DISO'] == "No") { echo " selected"; }?>>No</option>
                        </select>
                      </div>
                      <br>
          					  <div class="col-lg-10">
          							<textarea id="DISE_DISO_TXTA-<?php echo $row['P_ID'] ?>" style="resize:none" class="form-control" cols="2" rows="4" disabled required><?php if($row['DISE_DISO'] != "No" && $row['DISE_DISO'] != "--Select--"){ echo $row['DISE_DISO']; }else{ echo "";}?></textarea>
          						</div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-4 control-label">A.9 Did you ever have any significant injuries that impact on your level of functioning?:</label>
                      <div class="col-lg-4">
                        <select class="form-control" name="SIG_INJ" id="SIG_INJ-<?php echo $row['P_ID'] ?>">
                          <option hidden value="--Select--"<?php
                            if ($row['SIG_INJ'] == "--Select--") { echo " selected"; }?>>--Select--</option>
                          <option value="Yes"<?php
                            if ($row['SIG_INJ'] != "No" && $row['SIG_INJ'] != "--Select--") { echo " selected"; }?>>Yes</option>
                          <option value="No"<?php
                            if ($row['SIG_INJ'] == "No") { echo " selected"; }?>>No</option>
                        </select>
                      </div>
                      <br>
          					  <div class="col-lg-10">
          							<textarea id="SIG_INJ_TXTA-<?php echo $row['P_ID'] ?>" style="resize:none" class="form-control" cols="2" rows="4" disabled required><?php if($row['SIG_INJ'] != "No" && $row['SIG_INJ'] != "--Select--"){ echo $row['SIG_INJ']; }else{ echo "";}?></textarea>
          						</div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-4 control-label">A.10 have you been hospitalized in the last year?:</label>
                      <div class="col-lg-4">
                        <select class="form-control" name="HPTL" id="HPTL-<?php echo $row['P_ID'] ?>">
                         <option hidden value="--Select--"<?php
                            if ($row['HPTL'] == "--Select--") { echo " selected"; }?>>--Select--</option>
                          <option value="Yes"<?php
                            if ($row['HPTL'] != "No" && $row['HPTL'] != "--Select--") { echo " selected"; }?>>Yes</option>
                          <option value="No"<?php
                            if ($row['HPTL'] == "No") { echo " selected"; }?>>No</option>
                        </select>
                      </div>
                      <br>
          					  <div class="col-lg-10">
          							<textarea id="HPTL_TXTA-<?php echo $row['P_ID'] ?>" style="resize:none" class="form-control" cols="2" rows="4" disabled required><?php if($row['HPTL'] != "No" && $row['HPTL'] != "--Select--"){ echo $row['HPTL']; }else{ echo "";}?></textarea>
          						</div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-4 control-label">A.11 are you taking medication?:</label>
                      <div class="col-lg-4">
                        <select class="form-control" name="MEDCT" id="MEDCT-<?php echo $row['P_ID'] ?>">
                          <option hidden value="--Select--"<?php
                            if ($row['MEDCT'] == "--Select--") { echo " selected"; }?>>--Select--</option>
                          <option value="Yes"<?php
                            if ($row['MEDCT'] != "No" && $row['MEDCT'] != "--Select--") { echo " selected"; }?>>Yes</option>
                          <option value="No"<?php
                            if ($row['MEDCT'] == "No") { echo " selected"; }?>>No</option>
                        </select>
                      </div>
                      <br>
                      <div class="col-lg-10">
                        <textarea id="MEDCT_TXTA-<?php echo $row['P_ID'] ?>" style="resize:none" class="form-control" cols="2" rows="4" disabled required><?php if($row['MEDCT'] != "No" && $row['MEDCT'] != "--Select--"){ echo $row['MEDCT']; }else{ echo "";}?></textarea>
                      </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-4 control-label">A.12 Do you smoke?:</label>
                      <div class="col-lg-4">
                        <select class="form-control" name="SMOKE" id="SMOKE-<?php echo $row['P_ID'] ?>">
                          <option hidden value="--Select--"<?php
                            if ($row['SMOKE'] == "--Select--") { echo " selected"; }?>>--Select--</option>
                          <option value="Yes"<?php
                            if ($row['SMOKE'] != "No" && $row['SMOKE'] != "--Select--") { echo " selected"; }?>>Yes</option>
                          <option value="No"<?php
                            if ($row['SMOKE'] == "No") { echo " selected"; }?>>No</option>
                        </select>
                      </div>
                      <br>
          					  <div class="col-lg-10">
          							<textarea id="SMOKE_TXTA-<?php echo $row['P_ID'] ?>" style="resize:none" class="form-control" cols="2" rows="4" disabled required><?php if($row['SMOKE'] != "No" && $row['SMOKE'] != "--Select--"){ echo $row['SMOKE']; }else{ echo "";}?></textarea>
          						</div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-4 control-label">A.13 Do you consume Alcohol or drugs?:</label>
                      <div class="col-lg-4">
                        <select class="form-control" name="ALCO_DRUGS" id="ALCO_DRUGS-<?php echo $row['P_ID'] ?>">
                          <option hidden value="--Select--"<?php
                            if ($row['ALCO_DRUGS'] == "--Select--") { echo " selected"; }?>>--Select--</option>
                          <option value="Yes"<?php
                            if ($row['ALCO_DRUGS'] != "No" && $row['ALCO_DRUGS'] != "--Select--") { echo " selected"; }?>>Yes</option>
                          <option value="No"<?php
                            if ($row['ALCO_DRUGS'] == "No") { echo " selected"; }?>>No</option>
                        </select>
                      </div>
                      <br>
          					  <div class="col-lg-10">
          							<textarea id="ALCO_DRUGS_TXTA-<?php echo $row['P_ID'] ?>" style="resize:none" class="form-control" cols="2" rows="4" disabled required><?php if($row['ALCO_DRUGS'] != "No" && $row['ALCO_DRUGS'] != "--Select--"){ echo $row['ALCO_DRUGS']; }else{ echo "";}?></textarea>
          						</div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-4 control-label">A.14 Do you use Assistive Device?:</label>
                      <div class="col-lg-4">
                        <select class="form-control" name="ASSIST_DEV" id="ASSIST_DEV-<?php echo $row['P_ID'] ?>">
                          <option hidden value="--Select--"<?php
                            if ($row['ASSIST_DEV'] == "--Select--") { echo " selected"; }?>>--Select--</option>
                          <option value="Yes"<?php
                            if ($row['ASSIST_DEV'] != "No" && $row['ASSIST_DEV'] != "--Select--") { echo " selected"; }?>>Yes</option>
                          <option value="No"<?php
                            if ($row['ASSIST_DEV'] == "No") { echo " selected"; }?>>No</option>
                        </select>
                      </div>
                      <br>
          					  <div class="col-lg-10">
          							<textarea id="ASSIST_DEV_TXTA-<?php echo $row['P_ID'] ?>" style="resize:none" class="form-control" cols="2" rows="4" disabled required><?php if($row['ASSIST_DEV'] != "No" && $row['ASSIST_DEV'] != "--Select--"){ echo $row['ASSIST_DEV']; }else{ echo "";}?></textarea>
          						</div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-4 control-label">A.15 Do you have any person assisting you?:</label>
                      <div class="col-lg-4">
                        <select class="form-control" name="PERS_ASSIS" id="PERS_ASSIST-<?php echo $row['P_ID'] ?>">
                          <option hidden value="--Select--"<?php
                            if ($row['PERS_ASSIST'] == "--Select--") { echo " selected"; }?>>--Select--</option>
                          <option value="Yes"<?php
                            if ($row['PERS_ASSIST'] != "No" && $row['PERS_ASSIST'] != "--Select--") { echo " selected"; }?>>Yes</option>
                          <option value="No"<?php
                            if ($row['PERS_ASSIST'] == "No") { echo " selected"; }?>>No</option>
                        </select>
                      </div>
                      <br>
          					  <div class="col-lg-10">
          							<textarea id="PERS_ASSIST_TXTA-<?php echo $row['P_ID'] ?>" style="resize:none" class="form-control" cols="2" rows="4" disabled required><?php if($row['PERS_ASSIST'] != "No" && $row['PERS_ASSIST'] != "--Select--"){ echo $row['PERS_ASSIST']; }else{ echo "";}?></textarea>
          						</div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-4 control-label">A.16 Are you receiving any land of treatment for you Health?:</label>
                      <div class="col-lg-4">
                        <select class="form-control" name="TRMT" id="TRMT-<?php echo $row['P_ID'] ?>">
                          <option hidden value="--Select--"<?php
                            if ($row['TRMT'] == "--Select--") { echo " selected"; }?>>--Select--</option>
                          <option value="Yes"<?php
                            if ($row['TRMT'] != "No" && $row['TRMT'] != "--Select--") { echo " selected"; }?>>Yes</option>
                          <option value="No"<?php
                            if ($row['TRMT'] == "No") { echo " selected"; }?>>No</option>
                        </select>
                      </div>
                      <br>
          					  <div class="col-lg-10">
          							<textarea id="TRMT_TXTA-<?php echo $row['P_ID'] ?>" style="resize:none" class="form-control" cols="2" rows="4" disabled required><?php if($row['TRMT'] != "No" && $row['TRMT'] != "--Select--"){ echo $row['TRMT']; }else{ echo "";}?></textarea>
          						</div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-4 control-label">A.17 Additional Significant on your past and present health?:</label>
                      <div class="col-lg-6">
                        <input id="PP_HEATH-<?php echo $row['P_ID'] ?>" value="<?php echo $row['PP_HEATH'];?>" type="text" class="form-control" placeholder="">
                      </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-4 control-label">A.18 In the Past Month, cut back your usual activies because of your health condition?:</label>
                      <div class="col-lg-6">
                        <input id="CB_HEALTH_COND-<?php echo $row['P_ID'] ?>" value="<?php echo $row['CB_HEALTH_COND'];?>" type="text" class="form-control" placeholder="">
                      </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-4 control-label">A.19 In the Past Month, have you been totally unable to carry out your usual activities?:</label>
                       <div class="col-lg-6">
                         <input id="TU_HEALTH_COND-<?php echo $row['P_ID'] ?>" value="<?php echo $row['TU_HEALTH_COND'];?>" type="text" class="form-control" placeholder="">
                       </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-4 control-label">B.2 Years of Formal Education:</label>
                      <div class="col-lg-6">
                        <input id="YEARS_FE-<?php echo $row['P_ID'] ?>" value="<?php echo $row['YEARS_FE'];?>" type="text" class="form-control">
                      </div>                    
                  </div>
                  <div class="form-group">
                      <label class="col-md-4 control-label">B.3 Marital Status:</label>
                      <div class="col-lg-6">
                        <input name="MARITAL_STAT" id="MARITAL_STAT-<?php echo $row['P_ID'] ?>" value="<?php echo $row['MARITAL_STAT'];?>" type="text" class="form-control" placeholder="">
                      </div>                        
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
                  <div class="modal-footer">
                    <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
                    <button class="btn btn-success" onclick="UpdatePatient(<?php echo $row['P_ID']?>)">Save</button>
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
              <a class="go-top">
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
	
  	<script type="text/javascript" src="assets/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
  	<script type="text/javascript" src="assets/bootstrap-fileupload/bootstrap-fileupload.js"></script>
  	<script src="js/advanced-form-components.js"></script>


  <!--common script for all pages-->
    <script src="js/common-scripts.js"></script>

    <!--script for this page only-->

      <script type="text/javascript" charset="utf-8">
          $(document).ready(function() {
              $('#example').dataTable( {
                  "aaSorting": [[ 10, "asc" ]]
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
       
<?php
while($row = $stmt->fetch()){
?>
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
         $('#HPTL').change(function(){
          $('#HPTL_TXTA').prop('disabled', !($(this).val() == "Yes"));
        });
        $('#ASSIST_DEV').change(function(){
          $('#ASSIST_DEV_TXTA').prop('disabled', !($(this).val() == "Yes"));
        });
        $('#SMOKE').change(function(){
          $('#SMOKE_TXTA').prop('disabled', !($(this).val() == "Yes"));
        });
        $('#PERS_ASSIST').change(function(){
          $('#PERS_ASSIST_TXTA').prop('disabled', !($(this).val() == "Yes"));
        });
        $('#TRMT').change(function(){
          $('#TRMT_TXTA').prop('disabled', !($(this).val() == "Yes"));
        });


        $(document).ready(function(){
          var id = <?php echo $row['P_ID'];?>
          var Disease = $('#DISE_DISO-'+id).val();
          var Significant = $('#SIG_INJ-').val(); 
          var Alcohol = $('#ALCO_DRUGS-').val();
          var Medication = $('#MEDCT-').val();
          var Assistive_dev = $('#ASSIST_DEV-').val();
          $('#DISE_DISO_TXTA-'+id).attr('disabled',true);
          $('#SIG_INJ_TXTA-'+id).attr('disabled',true);
          $('#ALCO_DRUGS_TXTA').attr('disabled',true);
          $('#MEDCT_TXTA').attr('disabled',true);
          $('#ASSIST_DEV_TXTA').attr('disabled',true);
          if(Disease == "Yes"){
            $('#DISE_DISO_TXTA-'+id).attr('disabled',false);
          }
          if(Significant == "Yes"){
            $('#SIG_INJ_TXTA-').attr('disabled',false);
          }
          if(Alcohol == "Yes"){
            $('#ALCO_DRUGS_TXTA-').attr('disabled',false);
          }
          if(Medication == "Yes"){
            $('#MEDCT_TXTA-').attr('disabled',false);
          }
          if(Assistive_dev == "Yes"){
            $('#ASSIST_DEV_TXTA-').attr('disabled',false);
          }
      
        });
<?php
}
?>

        function UpdatePatient(str){
        var P_ID = str;
        var Lastname = $('#P_LNAME-'+str).val();
        var Firstname = $('#P_FNAME-'+str).val();
        var Middlename = $('#P_MNAME-'+str).val();
        var Gender = $('#P_GNDR-'+str).val();
        var Birthday = $('#P_BDATE-'+str).val();
        var Age = $('#P_AGE-'+str).val();
        var Temperature = $('#P_TEMP-'+str).val();
        var Type = $('#P_TYPE-'+str).val();
        var Address = $('#P_ADD-'+str).val();
        var Contact = $('#P_CN-'+str).val();
        var Occupation = $('#P_OCCU-'+str).val();
        var Religion = $('#P_REL-'+str).val();
        var Civil = $('#P_CVL_STAT-'+str).val();
        var Weight = $('#P_WGHT-'+str).val();
        var Height = $('#P_HGHT-'+str).val();
        
        var Past_pre = $('#PP_HEATH-'+str).val();
        var Treatment = $('#TRMT-'+str).val();
        var Medication = $('#MEDCT-'+str).val();
        if(Medication == 'Yes'){
              Medication = $('#MEDCT_TXTA-'+str).val();
            }
        var Disease = $('#DISE_DISO-'+str).val();
        if(Disease == 'Yes'){
              Disease = $('#DISE_DISO_TXTA-'+str).val();
            }
        var Hospitalized = $('#HPTL-'+str).val();
        if(Hospitalized == 'Yes'){
              Hospitalized = $('#HPTL_TXTA-'+str).val();
            }
        var Dominant = $('#DOM_HAND-'+str).val();
        var Physical_H = $('#PHY_HEALTH-'+str).val();
        var Mental_Emo = $('#MENT_EMO_HEAl-'+str).val();
        var Significant = $('#SIG_INJ-'+str).val();
        if(Significant == 'Yes'){
              Significant = $('#SIG_INJ_TXTA-'+str).val();
            }
        var Smoke = $('#SMOKE-'+str).val();
        var Alcohol = $('#ALCO_DRUGS-'+str).val();
        if(Alcohol == 'Yes'){
              Alcohol = $('#ALCO_DRUGS_TXTA-'+str).val();
            }
        var Assistive_dev = $('#ASSIST_DEV-'+str).val();
        if(Assistive_dev == 'Yes'){
              Assistive_dev = $('#ASSIST_DEV_TXTA-'+str).val();
            }
        var Person_assist = $('#PERS_ASSIST-'+str).val();
        if(Person_assist == 'Yes'){
              Person_assist = $('#PERS_ASSIST_TXTA-'+str).val();
            }
        var Marital_stat = $('#MARITAL_STAT-'+str).val();
        var Formal_ED = $('#YEARS_FE-'+str).val();
        var CB_Health = $('#CB_HEALTH_COND-'+str).val();
        var TU_Health = $('#TU_HEALTH_COND-'+str).val();

        if (confirm('Are you sure you want to update this user in the database?')) {
          $.ajax({
            type: "POST",
            url: "Server.php?p=UpdatePatient",
            data: "P_LNAME="+Lastname+"&P_FNAME="+Firstname+"&P_MNAME="+Middlename+"&P_GNDR="+Gender+"&P_BDATE="+Birthday+"&P_AGE="+Age+"&P_TEMP="+Temperature+"&P_WGHT="+Weight+"&P_HGHT="+Height+"&P_TYPE="+Type+"&P_ADD="+Address+"&P_CN="+Contact+"&P_OCCU="+Occupation+"&P_REL="+Religion+"&P_CVL_STAT="+Civil+"&PP_HEATH="+Past_pre+"&TRMT="+Treatment+"&MEDCT="+Medication+"&DISE_DISO="+Disease+"&HPTL="+Hospitalized+"&DOM_HAND="+Dominant+"&PHY_HEALTH="+Physical_H+"&MENT_EMO_HEAl="+Mental_Emo+"&SIG_INJ="+Significant+"&SMOKE="+Smoke+"&ALCO_DRUGS="+Alcohol+"&ASSIST_DEV="+Assistive_dev+"&PERS_ASSIST="+Person_assist+"&MARITAL_STAT="+Marital_stat+"&YEARS_FE="+Formal_ED+"&CB_HEALTH_COND="+CB_Health+"&TU_HEALTH_COND="+TU_Health+"&P_ID="+P_ID,
            success: function(data){
                alert('Updated successfully!');
                window.location.reload();
              }
          });
          } else {
              // Do nothing!
          } 
        }
    </script>
</body>
</html>
