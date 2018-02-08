<?php
require 'lib/session.php';
require 'lib/Db.config.pdo.php';
require 'lib/Db.config.php';
$LAB_R_ID = isset($_GET['LBR_ID'])?$_GET['LBR_ID']:'';
$Datetoday = date('Y-m-d');

$lab_stmt = "SELECT *, CONCAT(P_FNAME,' ',P_MNAME,' ',P_LNAME) AS Fullname FROM ((((patient INNER JOIN schedule ON patient.P_ID = schedule.P_ID) INNER JOIN medical_record ON schedule.SCHEDULE_ID = medical_record.SCHED_ID) INNER JOIN treatment ON medical_record.MR_ID = treatment.MR_ID) INNER JOIN lab_request ON treatment.TRMT_ID = lab_request.TRMNT_ID) Where LBR_ID = '$LAB_R_ID'";
$result = mysql_query($lab_stmt);
$Lab_row = mysql_fetch_array($result);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="google" content="notranslate">
    <link rel="shortcut icon" href="img/favicon.ico">

    <title>Laboratory Test</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
	<link rel="stylesheet" type="text/css" href="assets/select2/css/select2.min.css"/>
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

  <body onload="loadMTandPT()">
  <div class="preloader-wrapper">
    <div class="preloader">
        <img src="gif/flask.svg" alt="SEMHCMS">
        <div style="position: absolute; top: 110%;left: 50%;margin-right: -50%;transform: translate(-50%, -50%);">
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
                      <a href="javascript:;">
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
                      <a href="javascript:;" class="active">
                          <i class="icon-beaker"></i>
                          <span>Lab Management</span>
                      </a>
                      <ul class="sub">
						  <li class="active"><a  href="labtest.php">Add Lab Results</a></li>
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
                              Laboratory Test
                          </header>
						  <?php
						  $query = "SELECT *, CONCAT (P_FNAME,' ',P_MNAME,' ',P_LNAME FROM patient WHERE P_ID = '$ID'";
						  $result = mysql_fetch_array($query);
						  ?>

                          <div class="panel-body">
							<form class="form-horizontal" role="form">
								<div class="form-group">
									<label class="col-sm-2 control-label">Patient Name:</label>
									<div class="col-sm-4">
										<input type="text" value="<?php echo $Lab_row['Fullname']?>" class="form-control"required>
									</div>
									<label class="col-sm-2 control-label">Date Taken:</label>
									<div class="col-sm-3">
										<input type="date" id="TAKEN" value="<?php echo $Datetoday; ?>" class="form-control"required>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-2 control-label">Medical Technologist:</label>
									<div class="col-sm-4">
										<select class="select2-single" id="MEDTECH">
										</select>
									</div>
									<label class="col-sm-2 control-label">Pathologist:</label>
									<div class="col-sm-4">
										<select class="select2-single" id="PATHOLOGIST">
										</select>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-2 control-label">Test Requested:</label>
									<div class="col-sm-4">
										<select id="labtype" class="select2-single">
											<option></option><!--for placeholder-->
											<option value="Blood" <?php
                                            if ($Lab_row['LBR_TYPE'] == "Blood Chemistry") { echo " selected"; }?>>Blood Chemistry</option>
											<option value="Fecalysis" <?php
                                            if ($Lab_row['LBR_TYPE'] == "Fecalysis") { echo " selected"; }?>>Fecalysis</option>
											<option value="Hematology" <?php
                                            if ($Lab_row['LBR_TYPE'] == "Hematology") { echo " selected"; }?>>Hematology</option>
											<option value="Urinalysis" <?php
                                            if ($Lab_row['LBR_TYPE'] == "Urinalysis") { echo " selected"; }?>>Urinalysis</option>
										</select>
									</div>
									<label class="col-sm-2 control-label">Last Meal:</label>
									<div class="col-sm-4">
										<input type="text" id="LAST_MEAL" class="form-control">
									</div>
								</div>
								<hr>
<!--- Blood Chemistry -->
								<div class="col-sm-12 Blood test">
								  <section class="panel">
									  <header class="panel-heading text-center">
										  <u><b>Blood Chemistry</b></u>
									  </header>
									  <table class="table table-bordered">
										  <thead>
										  <tr>
											  <th class="text-center">Examination:</th>
											  <th class="text-center" colspan="2">International Units:</th>
											  <th class="text-center" colspan="2">Conventional Units:</th>
										  </tr>
										  </thead>
										  <tbody>
										  <tr>
											  <td></td>
											  <td class="text-center"><b>RESULT</b></td>
											  <td class="text-center"><b>Reference Value<b></td>
											  <td class="text-center"><b>RESULT</b></td>
											  <td class="text-center"><b>Reference Value<b></td>
										  </tr>
										   <tr>
											  <td class="text-center"><b>BUN</b></td>
											  <td><input id="BUN_ETYPE_INT" name="BUN_ETYPE_INT" type="text" class="form-control numdecimal" maxlength="4" size="5"></td>
											  <td class="text-center">2.5-6.4 mmol/L</td>
											  <td><input id="BUN_ETYPE_CON" name="BUN_ETYPE_CON"type="text" class="form-control numonly" maxlength="2" size="5"></td>
											  <td class="text-center">7-8 mg/dl</td>
										  </tr>
										  <tr>
											  <td class="text-center"><b>Cholesterol</b></td>
											  <td><input id="CHSTRL_INT" name = "CHSTRL_INT" type="text" class="form-control numdecimal" maxlength="5" size="5"></td>
											  <td class="text-center">3.87-6.71 mmol/L</td>
											  <td><input id="CHSTRL_CON" name = "CHSTRL_CON"type="text" class="form-control numonly" maxlength="3" size="5"></td>
											  <td class="text-center">150-230 mg/dl</td>
										  </tr>
										  <tr>
											  <td class="text-center"><b>Creatinine</b></td>
											  <td><input id="CRTN_ETYPE_INT" name = "CRTN_ETYPE_INT" type="text" class="form-control numdecimal" maxlength="5" size="5"></td>
											  <td class="text-center">44.2-150.28 mmol/L</td>
											  <td><input id="CRTN_ETYPE_CON" name = "CRTN_ETYPE_CON" type="text" class="form-control numdecimal" maxlength="3" size="5"></td>
											  <td class="text-center">0.5-1.7 mg/dl</td>
										  </tr>
										  <tr>
											  <td class="text-center"><b>FBS</b></td>
											  <td><input id="FBS_ETYPE_INT" name = "FBS_ETYPE_INT"type="text" class="form-control numdecimal" maxlength="4" size="5"></td>
											  <td class="text-center">3.85-6.05 mmol/L</td>
											  <td><input id="FBS_ETYPE_CON" name = "FBS_ETYPE_CON"type="text" class="form-control numonly" maxlength="3" size="5"></td>
											  <td class="text-center">70-100 mg/dl</td>
										  </tr>
										  <tr>
											  <td class="text-center" rowspan="2"><b>HDL-Cholesterol</b></td>
											  <td><input id="HDL_M_ETYPE_INT" name = "HDL_M_ETYPE_INT" type="text" class="form-control numdecimal" maxlength="5" size="5"></td>
											  <td class="text-center">M: 0.78-1.55 mmol/L</td>
											  <td><input id="HDL_M_ETYPE_CON" name = "HDL_M_ETYPE_CON" type="text" class="form-control numonly" maxlength="2" size="5"></td>
											  <td class="text-center">M:30-60 mg/dl</td>
										  </tr>
										  <tr>
											  <td><input id="HDL_F_ETYPE_INT" name = "HDL_F_ETYPE_INT"type="text" class="form-control numdecimal" maxlength="4" size="5"></td>
											  <td class="text-center">F:1.03 mmol/L</td>
											  <td><input id="HDL_F_ETYPE_CON" name = "HDL_F_ETYPE_CON"type="text" class="form-control numonly" maxlength="2" size="5"></td>
											  <td class="text-center">F:40-70 mg/dl</td>
										  </tr>
										  <tr>
											  <td class="text-center"><b>LDL-Cholesterol</b></td>
											  <td><input id="LDL_ETYPE_INT" name ="LDL_ETYPE_INT"type="text" class="form-control numdecimal" maxlength="4" size="5"></td>
											  <td class="text-center">1.56 mmol/L</td>
											  <td><input id="LDL_ETYPE_CON" name="LDL_ETYPE_CON" type="text" class="form-control numonly" maxlength="3" size="5"></td>
											  <td class="text-center">60-210 mg/dl</td>
										  </tr>
										  <tr>
											  <td class="text-center"><b>2 Hrs Post-Prandial</b></td>
											  <td><input id="PO_PR_ETYPE_INT" name ="PO_PR_ETYPE_INT" type="text" class="form-control numdecimal" maxlength="5" size="5"></td>
											  <td class="text-center"><6.60 mmol/L</td>
											  <td><input id="PO_PR_ETYPE_CON" name ="PO_PR_ETYPE_CON" type="text" class="form-control numonly" maxlength="3" size="5"></td>
											  <td class="text-center"><120 mg/dl</td>
										  </tr>
										  <tr>
											  <td class="text-center"><b>RBS</b></td>
											  <td><input id="RBS_ETYPE_INT" name="RBS_ETYPE_INT" type="text" class="form-control numdecimal" maxlength="5" size="5"></td>
											  <td class="text-center"> mmol/L</td>
											  <td><input id="RBS_ETYPE_CON" name="RBS_ETYPE_CON" type="text" class="form-control numdecimal" maxlength="5" size="5"></td>
											  <td class="text-center"> mg/dl</td>
										  </tr>
										  <tr>
											  <td class="text-center" rowspan="2"><b>SGOT/AST</b></td>
											  <td><input id="SGOT_M_ETYPE_INT" name="SGOT_M_ETYPE_INT" type="text" class="form-control numonly" maxlength="3" size="5"></td>
											  <td class="text-center">M: 0-40 U/L</td>
											  <td rowspan="4"></td>
										  </tr>
										  <tr>
											  <td><input id="SGOT_F_ETYPE_INT" name="SGOT_F_ETYPE_INT"type="text" class="form-control numonly" maxlength="2" size="5"></td>
											  <td class="text-center">F: 0-40 U/L</td>
										  </tr>
										  <tr>
											  <td class="text-center" rowspan="2"><b>SGPT/ALT</b></td>
											  <td><input id="SGPT_M_ETYPE_INT" name="SGPT_M_ETYPE_INT"type="text" class="form-control numonly" maxlength="2" size="5"></td>
											  <td class="text-center">M: 0-38 U/L</td>
										  </tr>
										  <tr>
											  <td><input id="SGPT_F_ETYPE_INT" name="SGPT_F_ETYPE_INT" type="text" class="form-control numonly" maxlength="3" size="5"></td>
											  <td class="text-center">F: 0-38 U/L</td>
										  </tr>
										  <tr>
											  <td class="text-center"><b>Triglyceride</b></td>
											  <td><input id="TRYLYDE_ETYPE_INT" name="TRYLYDE_ETYPE_INT"type="text" class="form-control numdecimal" maxlength="3" size="5"></td>
											  <td class="text-center">0.7-2.8 mmol/L</td>
											  <td><input id="TRYLYDE_ETYPE_CON" name="TRYLYDE_ETYPE_CON" type="text" class="form-control numonly" maxlength="5" size="5"></td>
											  <td class="text-center">61.0-248.5 mg/dl</td>
										  </tr>
										  <tr>
											  <td class="text-center" rowspan="2"><b>Uric Acid</b></td>
											  <td><input id="URIC_F_ETYPE_INT" name="URIC_F_ETYPE_INT" type="text" class="form-control numonly" maxlength="3" size="5"></td>
											  <td class="text-center">F: 143-357 mmol/L</td>
											  <td><input id="URIC_F_ETYPE_CON" name="URIC_F_ETYPE_CON" type="text" class="form-control numdecimal" maxlength="3" size="5"></td>
											  <td class="text-center">2.4-6.0 mg/dl</td>
										  </tr>
										  <tr>
											  <td><input id="URIC_M_ETYPE_INT" name="URIC_M_ETYPE_INT"type="text" class="form-control numonly" maxlength="3" size="5"></td>
											  <td class="text-center">M:202-416 mmol/L</td>
											  <td><input id="URIC_M_ETYPE_CON" name="URIC_M_ETYPE_CON" type="text" class="form-control numdecimal" maxlength="4" size="5"></td>
											  <td class="text-center">3.4-7.0 mg/dl</td>
										  </tr>
										  </tbody>
									  </table>
								  </section>
								  <div class="form-group pull-right">
									  <div class="col-sm-12">
									  	<span style="float: left; font-weight: bold; margin-top: 10px; margin-right: 10px;" id="Error_Message_BC" class="text-danger"></span>
                        				<span style="float: left; font-weight: bold; margin-top: 10px; margin-right: 10px;" id="Success_Message_BC" class="text-success"></span>
										<a class="btn btn-shadow btn-success" onclick="addBloodChem(<?php echo $Lab_row['LBR_ID'] ?>)"><i class="icon-save"></i> Save</a>
									  </div>
									</div>
							  </div>
<!--- Blood Chemistry End-->
<!--- Fecalysis -->
								<div class="col-sm-12 Fecalysis test">
								  <section class="panel">
									  <header class="panel-heading text-center">
										  <u><b>Fecalysis</b></u>
									  </header>
									  <table class="table table-bordered">
										  <thead>
										  <tr>
											  <th class="text-center" colspan="2">Microscopic Examination:</th>
											  <th class="text-center" colspan="3">Parasite:</th>
											  <th class="text-center" colspan="2">Flagellates:</th>
										  </tr>
										  </thead>
										  <tbody>
										  <tr>
											  <td class="text-center"><b>Color</b></td>
											  <td><input id="CLR_MCRO_EXM" name="CLR_MCRO_EXM" type="text" class="form-control numdecimal" maxlength="5" size="5"></td>
											  <td class="text-center"><b>Ascans</b></td>
											  <td><input id="PARA_ASCARIS" name="PARA_ASCARIS" type="text" class="form-control numdecimal" maxlength="5" size="5"></td>
											  <td>/LPF</td>
											  <td class="text-center"><b>G.lambia<b></td>
											  <td><input id="FLAG_G_LAMBIA" name="FLAG_G_LAMBIA" type="text" class="form-control numdecimal" maxlength="5" size="5"></td>
										  </tr>
										  <tr>
											  <td class="text-center"><b>Consistency</b></td>
											  <td><input id="CONS_MCRO_EXM" name ="CONS_MCRO_EXM" type="text" class="form-control numdecimal" maxlength="5" size="5"></td>
											  <td class="text-center"><b>Hookworm</b></td>
											  <td><input id="PARA_HKWORM" name="PARA_HKWORM" type="text" class="form-control numdecimal" maxlength="5" size="5"></td>
											  <td>/LPF</td>
											  <td class="text-center"><b>T.hominis<b></td>
											  <td><input id="FLAG_T_HOMINIS" name="FLAG_T_HOMINIS" type="text" class="form-control numdecimal" maxlength="5" size="5"></td>
										  </tr>
										  <tr>
											  <td class="text-center"><b>Heinths</b></td>
											  <td><input id="HLMT_MCRO_EXM" name="HLMT_MCRO_EXM" type="text" class="form-control numdecimal" maxlength="5" size="5"></td>
											  <td class="text-center"><b>Trinchuris</b></td>
											  <td><input id="PARA_TRHRIS" name="PARA_TRHRIS" type="text" class="form-control numdecimal" maxlength="5" size="5"></td>
											  <td>/LPF</td>
										  </tr>
										  <tr>
											  <td colspan="2"></td>
											  <td class="text-center"><b>Strongyloides</b></td>
											  <td><input id="PARA_STRGLOIDES" name="PARA_STRGLOIDES" type="text" class="form-control numdecimal" maxlength="5" size="5"></td>
											  <td>/LPF</td>
										  </tr>
										  <tr>
											  <td colspan="7"></td>
										  </tr>
										  <tr>
											  <th class="text-center" colspan="2">Chemical Test</th>
											  <th class="text-center" colspan="3">Amoeba:</th>
											  <th class="text-center" colspan="2">Microscopic Examination</th>
										  </tr>
										  <tr>
											  <td class="text-center" rowspan="2"><b>Occult Blood</b></td>
											  <td><input id="CT_OB" type="text" class="form-control numdecimal" maxlength="5" size="5"></td>
											  <td class="text-center"><b>E.histolylica:</b></td>
											  <td><input id="E_AMOEBA_HISTOL" name="E_AMOEBA_HISTOL"type="text" class="form-control numdecimal" maxlength="5" size="5"></td>
											  <td>/LPF</td>
											  <td class="text-center"><b>Pus Cells<b></td>
											  <td><input id="PCELLS_MICRO_EXM" name="PCELLS_MICRO_EXM"type="text" class="form-control numdecimal" maxlength="5" size="5"></td>
										  </tr>
										  <tr>
										  	  <td></td>
											  <td class="text-right"><b>ECyst</b></td>
											  <td><input id="E_HISTOL_CYST" name="E_HISTOL_CYST" type="text" class="form-control numdecimal" maxlength="5" size="5"></td>
											  <td>/LPF</td>
											  <td class="text-center"><b>RBC<b></td>
											  <td><input id="RBC_MCRO_EXM" name ="RBC_MCRO_EXM"type="text" class="form-control numdecimal" maxlength="5" size="5"></td> 
										  <tr>
											  <td colspan="2"></td>
											  <td class="text-right"><b>Troph</b></td>
											  <td><input id="E_HISTOL_TROPH" name="E_HISTOL_TROPH" type="text" class="form-control numdecimal" maxlength="5" size="5"></td>
											  <td>/LPF</td>
										  </tr>
										  <tr>
											  <td colspan="2"></td>
											  <td class="text-center"><b>E.coli:</b></td>
											  <td><input id="E_AMOEBA_COLI" type="text" class="form-control numdecimal" maxlength="5" size="5"></td>
											  <td>/LPF</td>
										  </tr>
										  <tr>
											  <td colspan="2"></td>
											  <td class="text-right"><b>Cyst</b></td>
											  <td><input id="COLI_CYST" type="text" class="form-control numdecimal" maxlength="5" size="5"></td>
											  <td>/LPF</td>
										  </tr>
										  <tr>
											  <td colspan="2"></td>
											  <td class="text-right"><b>Troup</b></td>
											  <td><input id="COLI_TROPH" type="text" class="form-control numdecimal" maxlength="5" size="5"></td>
											  <td>/LPF</td>
											  <td class="text-right"><b>Remarks</b></td>
											  <td><input id="REMARKS" type="text" class="form-control numdecimal" maxlength="5" size="5"></td>
										  </tr>
										  </tbody>
									  </table>
								  </section>
								  <div class="form-group pull-right">
									  <div class="col-sm-12">
									  	<span style="float: left; font-weight: bold; margin-top: 10px; margin-right: 10px;" id="Error_Message_FC" class="text-danger"></span>
                        				<span style="float: left; font-weight: bold; margin-top: 10px; margin-right: 10px;" id="Success_Message_FC" class="text-success"></span>
										<a class="btn btn-shadow btn-success" onclick="addFecalysis(<?php echo $Lab_row['LBR_ID'] ?>)"><i class="icon-save"></i> Save</a>
									  </div>
									</div>
							  </div>
 <!--- Fecalysis End-->
<!--- Hematology -->
							  <div class="col-sm-12 Hematology test">
								  <section class="panel">
									  <header class="panel-heading text-center">
										  <u><b>Hematology</b></u>
									  </header>
									  <table class="table table-bordered">
										  <thead>
										  <tr>
											  <th>CBC:</th>
										  </tr>
										  </thead>
										  <tr>
											  <th></th>
											  <th class="text-center">Results:</th>
											  <th></th>
											  <th class="text-center">Results:</th>
										  </tr>
										  <tr>
											  <td class="text-center" rowspan="2"><b>HEMATOCRIT:</b></td>
											  <td class="text-center"><input id="HEMA_M_ETYPE_CBC" type="text" class="form-control numdecimal" maxlength="4" size="5">(M: 0.40-0.60)</td>
											  <td class="text-center"><b>WBC</b></td>
											  <td class="text-center"><input id="WBC_ETYPE_CBC" type="text" class="form-control numdecimal" maxlength="5" size="5">(5-10.0 X 10/L)</td>
										  </tr>
										  <tr>
											  <td class="text-center"><input id="HEMA_F_ETYPE_CBC" type="text" class="form-control numdecimal" maxlength="5" size="5">(F: 0.36-0.40)</td>
											  <td class="text-center"><b>RCB</b></td>
											  <td class="text-center"><input id="RBC_ETYPE_CBC" type="text" class="form-control numdecimal" maxlength="4" size="5">(4-5X 10/L)</td>
										  </tr>
										  <tr>
											  <td class="text-center" rowspan="2"><b>HEMOGLOBIN:</b></td>
											  <td class="text-center"><input id="HEMO_M_ETYPE_CBC" type="text" class="form-control numonly" maxlength="3" size="5">(M: 140-170)</td>
										  </tr>
										  <tr>
											  <td class="text-center"><input id="HEMO_F_ETYPE_CBC" type="text" class="form-control numdecimal" maxlength="3" size="5">(F: 120-150)</td>
										  </tr>
										  <tr>
											  <th>DIFFERENTIAL COUNT:</th>
										  </tr>
										  <tr>
											  <td class="text-center"><b>Segmeters</b></td>
											  <td class="text-center"><input id="SEG_DIFF_COUNT	" type="text" class="form-control numdecimal" maxlength="4" size="5">(0.35-0.65)</td>
										  </tr>
										  <tr>
											  <td class="text-center"><b>Stab:</b></td>
											  <td class="text-center"><input id="STAB_DCOUNT" type="text" class="form-control numdecimal" maxlength="5" size="5">(0.02-0.04)</td>
										  </tr>
										   <tr>
											  <td class="text-center"><b>Eosinophils:</b></td>
											  <td class="text-center"><input id="EOSI_DCOUNT" type="text" class="form-control numdecimal" maxlength="5" size="5">(0-02)</td>
											  <td class="text-center"><b>Platelete Count:</b></td>
											  <td class="text-center"><input id="PLA_CT_DCOUNT" type="text" class="form-control numdecimal" maxlength="5" size="5">(150-400x10^9/L)</td>
										  </tr>
										  <tr>
											  <td class="text-center"><b>Lymphocytes:</b></td>
											  <td class="text-center"><input id="LYMP_DCOUNT" type="text" class="form-control numdecimal" maxlength="5" size="5">(0.20-0.35)</td>
											  <td class="text-center"><b>Blood Type:</b></td>
											  <td class="text-center"><input id="BLD_TYP_DCOUNT	" type="text" class="form-control numdecimal" maxlength="5" size="5"></td>
										  </tr>
										  <tr>
											  <td class="text-center"><b>Monocytes:</b></td>
											  <td class="text-center"><input id="MONO_DCOUNT" type="text" class="form-control numdecimal" maxlength="3" size="5">(0.02-0.04)</td>
										  </tr>
										  <tr>
											  <td class="text-center"><b>Basophils</b></td>
											  <td class="text-center"><input id="BASO_DCOUNT" type="text" class="form-control numdecimal" maxlength="3" size="5">(0-0.01)</td>
										  </tr>
										  <tr>
											  <td class="text-center"><b>Myelocytes:</b></td>
											  <td class="text-center"><input id="MYELO_DCOUNT" type="text" class="form-control numdecimal" maxlength="5" size="5">(0)</td>
										  </tr>
										  <tr>
											  <td class="text-center"><b>Juveniles:</b></td>
											  <td class="text-center"><input id="JUVEN_DCOUNT" type="text" class="form-control numdecimal" maxlength="5" size="5">(0-1)</td>
										  </tr>
										  <tr>
											  <td class="text-center"><b>Remarks:</b></td>
											  <td class="text-center"><input id="REMARKS" type="text" class="form-control" size="5"></td>
										  </tr>
										  </tbody>
									  </table>
								  </section>
								  <div class="form-group pull-right">
									  <div class="col-sm-6">
										<a class="btn btn-shadow btn-success"><i class="icon-save"></i> Save</a>
									  </div>
									</div>
							  </div>
<!-- Hematology End -->
<!--- Urinal -->
								<div class="col-sm-12 Urinalysis test">
								  <section class="panel">
									  <header class="panel-heading text-center">
										  <u><b>Urinalysis</b></u>
									  </header>
									  <table class="table table-bordered">
										  <thead>
										  <tr>
											  <th class="text-center" colspan="2">PHYSICAL PROPERTIES:</th>
											  <th class="text-center" colspan="3">CELL: </th>
											  <th class="text-center" colspan="2">CRYSTAL:</th>
										  </tr>
										  </thead>
										  <tbody>
										  <tr>
											  <td class="text-center"><b>Color</b></td>
											  <td><input id="COLOR_PHY_PRO" type="text" class="form-control numdecimal" maxlength="5" size="5"></td>
											  <td class="text-center"><b>Pus</b></td>
											  <td><input id="PUS_CELL" type="text" class="form-control numdecimal" maxlength="5" size="5"></td>
											  <td>/LPF</td>
											  <td class="text-center"><b>Amorphous Urates<b></td>
											  <td><input id="AU_CRYSTALS" type="text" class="form-control numdecimal" maxlength="5" size="5"></td>
										  </tr>
										  <tr>
											  <td class="text-center"><b>Transparency</b></td>
											  <td><input id="TRANS_PHY_PRO" type="text" class="form-control numdecimal" maxlength="5" size="5"></td>
											  <td class="text-center"><b>RBC</b></td>
											  <td><input id="RBC_CELL" type="text" class="form-control numdecimal" maxlength="5" size="5"></td>
											  <td>/LPF</td>
											  <td class="text-center"><b>Amorphous Pos<b></td>
											  <td><input id="APO_CRYSTALS" type="text" class="form-control numdecimal" maxlength="5" size="5"></td>
										  </tr>
										  <tr>
											  <td class="text-center"><b>pH</b></td>
											  <td><input id="PH_PHY_PRO" type="text" class="form-control numdecimal" maxlength="5" size="5"></td>
											  <td class="text-center"><b>Yeast</b></td>
											  <td><input id="YEAST_CELL" type="text" class="form-control numdecimal" maxlength="5" size="5"></td>
											  <td>/LPF</td>
											  <td class="text-center"><b>Uric Acid<b></td>
											  <td><input id="URIC_ACID_CRYSTALS" type="text" class="form-control numdecimal" maxlength="5" size="5"></td>
										  </tr>
										  <tr>
											  <td class="text-center"><b>Specific Gravity</b></td>
											  <td><input id="SPEC_GRAV_PHY_PRO" type="text" class="form-control numdecimal" maxlength="5" size="5"></td>
											  <td class="text-center"><b>Squamous</b></td>
											  <td><input id="SQUAMOS_CELL" type="text" class="form-control numdecimal" maxlength="5" size="5"></td>
											  <td>/LPF</td>
											  <td class="text-center"><b>Calcium Ceslate<b></td>
											  <td><input id="CAL_OX_CRYSTALS" type="text" class="form-control numdecimal" maxlength="5" size="5"></td>
										  </tr>
										  <tr>
											  <td colspan="2"</td>
											  <td class="text-center"><b>Renal</b></td>
											  <td><input id="RENAL_CELL" type="text" class="form-control numdecimal" maxlength="5" size="5"></td>
											  <td>/LPF</td>
											  <td class="text-center"><b>Triple PO4<b></td>
											  <td><input id="TRI_PO_CRYSTALS" type="text" class="form-control numdecimal" maxlength="5" size="5"></td>
										  </tr>
										  <tr>
											  <td colspan="2"</td>
											  <td class="text-center"><b>Bacteria</b></td>
											  <td><input id="BACTERIA_CELL" type="text" class="form-control numdecimal" maxlength="5" size="5"></td>
											  <td>/LPF</td>
										  </tr>
										  <tr>
											  <th class="text-center" colspan="2">CHEMICAL TEST:</th>
											  <th class="text-center" colspan="3">CASTS: </th>
											  <th class="text-center" colspan="2">OTHERS:</th>
										  </tr>
										  <tr>
											  <td class="text-center"><b>Reducing Sugar</b></td>
											  <td><input id="RED_SUG_CT" type="text" class="form-control numdecimal" maxlength="5" size="5"></td>
											  <td class="text-center"><b>DESA</b></td>
											  <td><input id="DESA_CASTS" type="text" class="form-control numdecimal" maxlength="5" size="5"></td>
											  <td>/LPF</td>
											  <td class="text-center"><b>Mucus Thread<b></td>
											  <td><input id="MUC_TH" type="text" class="form-control numdecimal" maxlength="5" size="5"></td>
										  </tr>
										  <tr>
											  <td class="text-center"><b>Protein</b></td>
											  <td><input id="PRO_CT" type="text" class="form-control numdecimal" maxlength="5" size="5"></td>
											  <td class="text-center"><b>Course Granular</b></td>
											  <td><input id="CO_GRAN_CASTS" type="text" class="form-control numdecimal" maxlength="5" size="5"></td>
											  <td>/LPF</td>
											  <td class="text-center"><b>Remarks</b></td>
											  <td><input id="REMARKS" type="text" class="form-control numdecimal" maxlength="5" size="5"></td>
										  </tr>
										  <tr>
											  <td colspan="2"></td>
											  <td class="text-center"><b>Fine Granular</b></td>
											  <td><input id="FIN_GRAN_CASTS" type="text" class="form-control numdecimal" maxlength="5" size="5"></td>
											  <td>/LPF</td>
										  </tr>
										   <tr>
											  <td colspan="2"></td>
											  <td class="text-center"><b>Pus</b></td>
											  <td><input id="PUS_CASTS" type="text" class="form-control numdecimal" maxlength="5" size="5"></td>
											  <td>/LPF</td>
										  </tr>
										   <tr>
											  <td colspan="2"></td>
											  <td class="text-center"><b>RBC</b></td>
											  <td><input id="RBC_CASTS" type="text" class="form-control numdecimal" maxlength="5" size="5"></td>
											  <td>/LPF</td>
										  </tr>
										   <tr>
											  <td colspan="2"></td>
											  <td class="text-center"><b>Waxy Cast</b></td>
											  <td><input id="WAXY_CASTS" type="text" class="form-control numdecimal" maxlength="5" size="5"></td>
											  <td>/LPF</td>
										  </tr>
										   </tbody>
									  </table>
								  </section>
								  <div class="form-group pull-right">
									  <div class="col-sm-6">
										<a class="btn btn-shadow btn-success"><i class="icon-save"></i> Save</a>
									  </div>
									</div>
							  </div>
							  <!-- Urinal End -->
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
    <script src="js/preloader.js" ></script>
	<script src="js/numbers-only.js"></script>

	
<?php
include 'lib/User-Accesslvl.php';
?>
  <!--common script for all pages-->
    <script src="js/common-scripts.js"></script>
	<script type="text/javascript" src="assets/select2/js/select2.min.js"></script>
	<script type="text/javascript">
	  $(document).ready(function () {
		  $(".select2-single").select2({placeholder: 'Please select option'});

		  $(".select2-multiple").select2();
	  });
	</script>
	<script type="text/javascript">
	$(document).ready(function(){
		$('#labtype').change(function(){
			$(this).find("option:selected").each(function(){
				var optionValue = $(this).attr("value");
				if(optionValue){
					$(".test").not("." + optionValue).hide();
					$("." + optionValue).show();
				} else{
					$(".test").hide();
				}
			});
		}).change();
	});

	function addBloodChem(LBR_ID){
		var LABR_ID = LBR_ID;
		var BUN_ETYPE_INT = $('#BUN_ETYPE_INT').val();
		var BUN_ETYPE_CON = $('#BUN_ETYPE_CON').val();
		var CHSTRL_INT = $('#CHSTRL_INT').val();
		var CHSTRL_CON = $('#CHSTRL_CON').val();
		var CRTN_ETYPE_INT = $('#CRTN_ETYPE_INT').val();
		var CRTN_ETYPE_CON = $('#CRTN_ETYPE_CON').val();
		var FBS_ETYPE_INT = $('#FBS_ETYPE_INT').val();
		var FBS_ETYPE_CON = $('#FBS_ETYPE_CON').val();
		var HDL_M_ETYPE_INT = $('#HDL_M_ETYPE_INT').val();
		var HDL_M_ETYPE_CON = $('#HDL_M_ETYPE_CON').val();
		var HDL_F_ETYPE_INT = $('#HDL_F_ETYPE_INT').val();
		var HDL_F_ETYPE_CON = $('#HDL_F_ETYPE_CON').val();
		var LDL_ETYPE_INT = $('#LDL_ETYPE_INT').val();
		var LDL_ETYPE_CON = $('#LDL_ETYPE_CON').val();
		var PO_PR_ETYPE_INT = $('#PO_PR_ETYPE_INT').val();
		var PO_PR_ETYPE_CON = $('#PO_PR_ETYPE_CON').val();
		var RBS_ETYPE_INT = $('#RBS_ETYPE_INT').val();
		var RBS_ETYPE_CON = $('#RBS_ETYPE_CON').val();
		var SGOT_M_ETYPE_INT = $('#SGOT_M_ETYPE_INT').val();
		var SGOT_F_ETYPE_INT = $('#SGOT_F_ETYPE_INT').val();
		var SGPT_M_ETYPE_INT = $('#SGPT_M_ETYPE_INT').val();
		var SGPT_F_ETYPE_INT = $('#SGPT_F_ETYPE_INT').val();
		var TRYLYDE_ETYPE_INT = $('#TRYLYDE_ETYPE_INT').val();
		var TRYLYDE_ETYPE_CON = $('#TRYLYDE_ETYPE_CON').val();
		var URIC_F_ETYPE_INT = $('#URIC_F_ETYPE_INT').val();
		var URIC_F_ETYPE_CON = $('#URIC_F_ETYPE_CON').val();
		var URIC_M_ETYPE_INT = $('#URIC_M_ETYPE_INT').val();
		var URIC_M_ETYPE_CON = $('#URIC_M_ETYPE_CON').val();
		var MEAL = $('#LAST_MEAL').val();
		var MEDTECH = $('#MEDTECH').val();
		var PATHOLOGIST = $('#PATHOLOGIST').val();
		var TAKEN = $('#TAKEN').val();
		alert(MEAL);
		if(MEAL == '' || MEDTECH == '' || PATHOLOGIST == ''){
			$('#Error_Message_BC').html('Last meal is required!');
		}
		else{
			$('#Error_message_BC').html('')
			if(confirm('Are you sure you want to add this blood chemistry record in the database?')){
				$.ajax({
					type: "POST",
					url: "Server3.php?p=AddBloodChem",
					data: "LBR_ID="+LABR_ID+"&BEI="+BUN_ETYPE_INT+"&BEC="+BUN_ETYPE_CON+"&CI="+CHSTRL_INT+"&CC="+CHSTRL_CON+"&CEI="+CRTN_ETYPE_INT+"&CEC="+CRTN_ETYPE_CON+"&FEI="+FBS_ETYPE_INT+"&FEC="+FBS_ETYPE_CON+"&HMEI="+HDL_M_ETYPE_INT+"&HMEC="+HDL_M_ETYPE_CON+"&HFEI="+HDL_F_ETYPE_INT+"&HFEC="+HDL_F_ETYPE_CON+"&LEI="+LDL_ETYPE_INT+"&LEC="+LDL_ETYPE_CON+"&PPEI="+PO_PR_ETYPE_INT+"&PPEC="+PO_PR_ETYPE_CON+"&REI="+RBS_ETYPE_INT+"&REC="+RBS_ETYPE_CON+"&SGOTMEI="+SGOT_M_ETYPE_INT+"&SGOTFEI="+SGOT_F_ETYPE_INT+"&SGPTMEI="+SGPT_M_ETYPE_INT+"&SGPTFEI="+SGPT_F_ETYPE_INT+"&TEI="+TRYLYDE_ETYPE_INT+"&TEC="+TRYLYDE_ETYPE_CON+"&UFEI="+URIC_F_ETYPE_INT+"&UFEC="+URIC_F_ETYPE_CON+"&UMEI="+URIC_M_ETYPE_INT+"&UMEC="+URIC_M_ETYPE_CON+"&LAST_MEAL="+MEAL+"&MEDTECH="+MEDTECH+"&PATHOLOGIST="+PATHOLOGIST+"&TAKEN="+TAKEN,
					success: function(data){
						$('#Success_Message_BC').html('Successfully added laboratory result');
					}
				});
			}else{
				//do nothing
			}
		}
	}
	function addFecalysis(LBR_ID){
		var LABR_ID = LBR_ID;
		var CLR_MCRO_EXM = $('#CLR_MCRO_EXM').val();
		var PARA_ASCARIS = $('#PARA_ASCARIS').val();
		var FLAG_G_LAMBIA = $('#FLAG_G_LAMBIA').val();
		var CONS_MCRO_EXM = $('#CONS_MCRO_EXM').val();
		var PARA_HKWORM = $('#PARA_HKWORM').val();
		var FLAG_T_HOMINIS = $('#FLAG_T_HOMINIS').val();
		var HLMT_MCRO_EXM = $('#HLMT_MCRO_EXM').val();
		var PARA_TRHRIS = $('#PARA_TRHRIS').val();
		var PARA_STRGLOIDES = $('#PARA_STRGLOIDES').val();
		var CT_OB = $('#CT_OB').val(); 
		var E_AMOEBA_HISTOL = $('#E_AMOEBA_HISTOL').val();
		var PCELLS_MICRO_EXM = $('#PCELLS_MICRO_EXM').val();
		var E_HISTOL_CYST = $('#E_HISTOL_CYST').val();
		var RBC_MCRO_EXM = $('#RBC_MCRO_EXM').val();
		var E_HISTOL_TROPH = $('#E_HISTOL_TROPH').val();
		var E_AMOEBA_COLI = $('#E_AMOEBA_COLI').val();
		var COLI_CYST = $('#COLI_CYST').val();
		var COLI_TROPH = $('#COLI_TROPH').val();
		var MEAL = $('#LAST_MEAL').val();
		var MEDTECH = $('#MEDTECH').val();
		var PATHOLOGIST = $('#PATHOLOGIST').val();
		var TAKEN = $('#TAKEN').val();
		var REMARKS = $('#REMARKS').val();
		alert(MEAL);
		if(MEAL == '' || MEDTECH == '' || PATHOLOGIST == ''){
			$('#Error_Message_FC').html('Last meal is required!');
		}else{
			$('#Error_message_FC').html('');
			if(confirm('Are you sure you want to add this fecalysis record in the database?')){
				$.ajax({
					type: "POST",
					url: "Server3.php?p=AddFecal",
					data: "LBR_ID="+LABR_ID+"&CLRME="+CLR_MCRO_EXM+"&PARAA="+PARA_ASCARIS+"&FGL="+FLAG_G_LAMBIA+"&CONSME="+CONS_MCRO_EXM+"&PHKW="+PARA_HKWORM+"&FTM="+FLAG_T_HOMINIS+"&HME="+HLMT_MCRO_EXM+"&PARAT="+PARA_TRHRIS+"&PARAST="+PARA_STRGLOIDES+"&CO="+CT_OB+"&EAH="+E_AMOEBA_HISTOL+"&PME="+PCELLS_MICRO_EXM+"&EHC="+E_HISTOL_CYST+"&RME="+RBC_MCRO_EXM+"&EHT="+E_HISTOL_TROPH+"&EAC="+E_AMOEBA_COLI+"&CC="+COLI_CYST+"&CT="+COLI_TROPH+"&LAST_MEAL="+MEAL+"&MEDTECH="+MEDTECH+"&PATHOLOGIST="+PATHOLOGIST+"&TAKEN="+TAKEN+"&REMARKS="+REMARKS,
					success: function(data){
						$('#Success_Message_FC').html('Successfully added laboratory result! &nbsp;&nbsp;');
					}
				});
			}else{
				//do nothing
			}
		}
	 
	}
	function addUrinalysis(){

	}
	function addHematology(){
		
	}
	function loadMTandPT(){
		LoadMedtech();
		LoadPathologist();
	}
	function LoadMedtech(){
		$.ajax({
                  type: "GET",
                  url: "Server3.php?p=MedtechList",
                  success: function(data){
                    $('#MEDTECH').html(data);
                  }
        });
	}
	function LoadPathologist(){
		$.ajax({
                  type: "GET",
                  url: "Server3.php?p=PathologistList",
                  success: function(data){
                    $('#PATHOLOGIST').html(data);
                  }
        });
	}
	</script>
  </body>
</html>
