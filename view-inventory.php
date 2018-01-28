<?php
require 'lib/session.php';
require 'lib/Db.config.php';
require 'lib/Db.config.pdo.php';

$stmt = $db->prepare("Select * FROM inventory INNER JOIN medicine ON inventory.MEDICINE_ID = medicine.MEDICINE_ID");
  $stmt->execute();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/favicon.ico">

    <title>Inventory</title>
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
	<script type="text/javascript" src="assets/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
	<script type="text/javascript" src="assets/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js"></script>
	<script src="js/advanced-form-components.js"></script>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/advanced-datatable/media/css/demo_page.css" rel="stylesheet" />
    <link href="assets/advanced-datatable/media/css/demo_table.css" rel="stylesheet" />
	<link rel="stylesheet" type="text/css" href="assets/bootstrap-datepicker/css/datepicker.css" />
    <link rel="stylesheet" type="text/css" href="assets/bootstrap-datetimepicker/css/datetimepicker.css" />
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

  <body>
  <div class="preloader-wrapper">
    <div class="preloader">
        <img src="gif/Ellipsis1.gif" alt="SEMHCMS">
        <div style="position: absolute; top: 85%;left: 50%;margin-right: -50%;transform: translate(-50%, -50%);">
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
                  <li class="sub-menu">
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
				  <li class="sub-menu">
                      <a href="javascript:;" >
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
                      <a href="javascript:;" class="active">
                          <i class="icon-truck"></i>
                          <span>Inventory Management</span>
                      </a>
                      <ul class="sub">
                          <li class="active" ><a  href="view-inventory.php">View Inventory</a></li>
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
                        <i class="icon-download-alt"></i><span>Maintenance</span>
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
                        Inventory 
                    </header>
            <div class="panel-body">
                <div class="adv-table">
					<a class="btn btn-shadow btn-success" data-toggle="modal" data-target="#AddInventory"><i class="icon-plus"></i> Add Inventory</a>
					<a class="btn btn-shadow btn-success" data-toggle="modal" data-target="#AddMed"><i class="icon-plus"></i> Add Medicines</a>
<!-- Start Modal Add Inventory-->
<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="AddInventory" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
					<h4 class="modal-title">Add Inventory</h4>
			</div>
		<div class="modal-body">
			<form class="form-horizontal" role="form">
				<div class="form-group">
					<label class="col-md-3 col-sm-2 control-label">Date Arrived:</label>
						<div class="col-lg-6">
							<input id="INV_MEDICINE_DATEARR" type="date" class="form-control" required>
						</div>
				</div>
				<div class="form-group">
					<label class="col-md-3 col-sm-2 control-label">Category:</label>
						<div class="col-lg-6">
							<select class="select2-single" id="INV_MEDICINE_CAT">
								<option></option><!--for placeholder-->
								<option value="Adult">Adult</option>
								<option value="Children">Children</option>
							</select>
						</div>
				</div>
				<div class="form-group">
					<label class="col-md-3 col-sm-2 control-label">Type:</label>
						<div class="col-lg-6">
							<select class="select2-single" id="INV_MEDICINE_TYPE">
								<option></option><!--for placeholder-->
								<option value="Analgesic">Analgesic</option>
								<option value="Anti-Allergy">Anti-Allergy</option>
								<option value="Antibiotics">Antibiotics</option>
								<option value="Diabetics">Diabetics</option>
								<option value="Hypertension">Hypertension</option>
								<option value="OTROS">OTROS</option>
								<option value="Respiratory">Respiratory</option>
								<option value="Stomach/Digestive">Stomach/Digestive</option>
								<option value="Vitamins">Vitamins</option>
							</select>
						</div>
				</div>											
				<div class="form-group">
					<label class="col-md-3 col-sm-2 control-label">Name of Medicines(Generic):</label>
						<div class="col-lg-6">
							<select class="select2-single" id="INV_MEDICINE_GNAME">
								<option></option><!--for placeholder-->
							</select>
						</div>
				</div>
				<div class="form-group">
					<label class="col-md-3 col-sm-2 control-label">Brand Name:</label>
						<div class="col-lg-6">
							<select class="select2-single" id="INV_MEDICINE_BNAME">
								<option></option><!--for placeholder-->
							</select>
						</div>
				</div>
				<div class="form-group">
					<label class="col-md-3 col-sm-2 control-label">Dosage Form:</label>
						<div class="col-lg-6">
							<select class="select2-single" id="INV_MEDICINE_DF">
								<option></option><!--for placeholder-->
								<option value="Tablet">Tablet</option>
								<option value="Syrup">Syrup</option>
							</select>
						</div>
				</div>
				<div class="form-group">
					<label class="col-md-3 col-sm-2 control-label">Dose:</label>
						<div class="col-lg-6">
							<select class="select2-single" id="INV_MEDICINE_DS">
								<option></option><!--for placeholder-->
							</select>
						</div>
				</div>
				<div class="form-group">
					<label class="col-md-3 col-sm-2 control-label">Quantity:</label>
						<div class="col-lg-2">
							<input type="text" id="INV_MEDICINE_QTY" class="form-control numonly" maxlength="5" required>
						</div>
				</div>
				<div class="form-group">
					<label class="col-md-3 col-sm-2 control-label">Expiration Date:</label>
						<div class="col-lg-6">
							<input id="INV_MEDICINE_EXPDATE" type="date" class="form-control" required>
						</div>
				</div>
				<div class="form-group">
					<label class="col-md-3 col-sm-2 control-label">Supplier:</label>
						<div class="col-lg-6">
							<input type="text" id="INV_MEDICINE_SUPP" class="form-control" required>
						</div>
				</div>
			</form>
		</div>
		<div class="modal-footer">
			<span id="Error_Message" class="text-danger"></span>
			<span id="Success_Message" class="text-success"></span>
			<button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
			<button class="btn btn-success" onclick="addInventory()">Save</button>
		</div>
		</div>
	</div>
</div>
<!-- **************************************************MODAL END******************************************************************** -->
<!-- *******************************************Start Model Add Medicines*********************************************************** -->
<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="AddMed" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
					<h4 class="modal-title">Add Medicines</h4>
			</div>
		<div class="modal-body">
			<form class="form-horizontal" role="form">
				<div class="form-group">
					<label class="col-md-3 col-sm-2 control-label">Category(Age):</label>
						<div class="col-lg-6">
							<select class="select2-single" id="MEDICINE_CAT">
								<option></option><!--for placeholder-->
								<option>Adult</option>
								<option>Children</option>
							</select>
						</div>
				</div>
				<div class="form-group">
					<label class="col-md-3 col-sm-2 control-label">Type:</label>
						<div class="col-lg-6">
							<select class="select2-single" id="MEDICINE_TYPE">
								<option></option><!--for placeholder-->
								<option>Analgesic</option>
								<option>Anti-Allergy</option>
								<option>Antibiotics</option>
								<option>Diabetics</option>
								<option>Hypertension</option>
								<option>OTROS</option>
								<option>Respiratory</option>
								<option>Stomach/Digestive</option>
								<option>Vitamins</option>
							</select>
						</div>
				</div>
				<div class="form-group">
					<label class="col-md-3 col-sm-2 control-label">Name of Medicines(Generic):</label>
						<div class="col-lg-6">
							<input type="text" id="MEDICINE_GNAME" class="form-control" required>
						</div>
				</div>
				<div class="form-group">
					<label class="col-md-3 col-sm-2 control-label">Brand Name:</label>
						<div class="col-lg-6">
							<input type="text" id="MEDICINE_BNAME" class="form-control" required>
						</div>
				</div>
				<div class="form-group">
					<label class="col-md-3 col-sm-2 control-label">Dosage Form:</label>
						<div class="col-lg-6">
							<select class="select2-single" id="MEDICINE_DFORM">
								<option></option><!--for placeholder-->
								<option>Tablet</option>
								<option>Syrup</option>
							</select>
						</div>
				</div>
				<div class="form-group">
					<label class="col-md-3 col-sm-2 control-label">Dose:</label>
						<div class="col-lg-6">
							<input type="text" id="MEDICINE_DOSE" class="form-control" required>
						</div>
				</div>
			</form>
		</div>
		<div class="modal-footer">
			<button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
			<button class="btn btn-success" type="submit" onclick="addMedicine()">Add</button>
		</div>
		</div>
	</div>
</div>
<!-- ****************************************************MODAL END****************************************************************** -->
<table  class="display table table-bordered table-striped" id="example">
   	<thead>
        <tr>
            <th width="120">Date Arrived</th>
            <th width="70">Category</th>
            <th width="80">Type</th>
            <th width="120">Generic Name</th>
            <th width="80">Brand</th>
            <th width="115">Dosage Form</th>
            <th width="90">Dose</th>
			<th width="110">Expiry Date</th>
            <th width="95">Quantity</th>
            <th width="70">Status</th>
            <th width="100">Action</th>
        </tr>
    </thead>
    <tbody>
<?php
while($row = $stmt->fetch()){
?>                               
        <tr class="gradeX">
        	<td><?php echo $row['INV_DATE_ARV'] ?></td>
        	<td><?php echo $row['MEDICINE_CAT'] ?></td>
        	<td><?php echo $row['MEDICINE_TYPE'] ?></td>
        	<td><?php echo $row['MEDICINE_GNAME'] ?></td>
        	<td><?php echo $row['MEDICINE_BNAME'] ?></td>
        	<td><?php echo $row['MEDICINE_DFORM'] ?></td>
        	<td><?php echo $row['MEDICINE_DOSE'] ?></td>
        	<td><?php echo $row['INV_EXPD'] ?></td>
        	<td><?php echo $row['INV_QTY'];echo "/"; echo $row['INV_QTY_HIST']; ?></td>
        	<td class="text-center"><?php $Qty = $row['INV_QTY_HIST'] / '2'; $QtyInitial = $Qty / '2'; $QtyStatus = $Qty + $QtyInitial; if($row['INV_QTY'] > $QtyStatus){ echo "<span class='label label-primary label-mini'>Full</span>";}if($row['INV_QTY'] >= $Qty && $row['INV_QTY'] <= $QtyStatus){ echo "<span class='label label-success label-mini'>Average</span>";}else if($row['INV_QTY'] < $Qty){ echo "<span class='label label-danger label-mini'>Low</span>";} ?></td>
        	<td class="hidden-phone" style="padding-left: 20px;">
				<a class="btn btn-shadow btn-primary btn-xs" data-toggle="modal" data-target="#EditMed"><i class="icon-pencil"></i></a>
				<a class="btn btn-shadow btn-danger btn-xs" onclick="deleteInventory(<?php echo $row['INV_ID'] ?>)"><i class="icon-trash"></i></a>

<!-- ******************************************Start Model Edit Medicines*********************************************************** -->
<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="EditMed" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
					<h4 class="modal-title">Edit Medicines</h4>
			</div>
		<div class="modal-body">
			<form class="form-horizontal" role="form">
				<div class="form-group">
					<label class="col-md-3 col-sm-2 control-label">Date Arrived:</label>
						<div class="col-lg-6">
							<input id="INV_MEDICINE_DATEARR" type="date" class="form-control" required>
						</div>
				</div>
				<div class="form-group">
					<label class="col-md-3 col-sm-2 control-label">Category:</label>
						<div class="col-lg-6">
							<select class="select2-single" id="INV_MEDICINE_CAT">
								<option></option><!--for placeholder-->
								<option value="Adult">Adult</option>
								<option value="Children">Children</option>
							</select>
						</div>
				</div>
				<div class="form-group">
					<label class="col-md-3 col-sm-2 control-label">Type:</label>
						<div class="col-lg-6">
							<select class="select2-single" id="INV_MEDICINE_TYPE">
								<option></option><!--for placeholder-->
								<option value="Analgesic">Analgesic</option>
								<option value="Anti-Allergy">Anti-Allergy</option>
								<option value="Antibiotics">Antibiotics</option>
								<option value="Diabetics">Diabetics</option>
								<option value="Hypertension">Hypertension</option>
								<option value="OTROS">OTROS</option>
								<option value="Respiratory">Respiratory</option>
								<option value="Stomach/Digestive">Stomach/Digestive</option>
								<option value="Vitamins">Vitamins</option>
							</select>
						</div>
				</div>											
				<div class="form-group">
					<label class="col-md-3 col-sm-2 control-label">Name of Medicines(Generic):</label>
						<div class="col-lg-6">
							<select class="select2-single" id="INV_MEDICINE_GNAME">
								<option></option><!--for placeholder-->
							</select>
						</div>
				</div>
				<div class="form-group">
					<label class="col-md-3 col-sm-2 control-label">Brand Name:</label>
						<div class="col-lg-6">
							<select class="select2-single" id="INV_MEDICINE_BNAME">
								<option></option><!--for placeholder-->
							</select>
						</div>
				</div>
				<div class="form-group">
					<label class="col-md-3 col-sm-2 control-label">Dosage Form:</label>
						<div class="col-lg-6">
							<select class="select2-single" id="INV_MEDICINE_DF">
								<option></option><!--for placeholder-->
								<option value="Tablet">Tablet</option>
								<option value="Syrup">Syrup</option>
							</select>
						</div>
				</div>
				<div class="form-group">
					<label class="col-md-3 col-sm-2 control-label">Dose:</label>
						<div class="col-lg-6">
							<select class="select2-single" id="INV_MEDICINE_DS">
								<option></option><!--for placeholder-->
							</select>
						</div>
				</div>
				<div class="form-group">
					<label class="col-md-3 col-sm-2 control-label">Quantity:</label>
						<div class="col-lg-2">
							<input type="text" id="INV_MEDICINE_QTY" class="form-control numonly" maxlength="5" required>
						</div>
				</div>
				<div class="form-group">
					<label class="col-md-3 col-sm-2 control-label">Expiration Date:</label>
						<div class="col-lg-6">
							<input id="INV_MEDICINE_EXPDATE" type="date" class="form-control" required>
						</div>
				</div>
				<div class="form-group">
					<label class="col-md-3 col-sm-2 control-label">Supplier:</label>
						<div class="col-lg-6">
							<input type="text" id="INV_MEDICINE_SUPP" class="form-control" required>
						</div>
				</div>
			</form>
		</div>
		<div class="modal-footer">
			<span id="Error_Message" class="text-danger"></span>
			<span id="Success_Message" class="text-success"></span>
			<button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
			<button class="btn btn-success" onclick="addInventory()">Save</button>
		</div>
		</div>
	</div>
</div>
<!--*******************************************************MODAL END**************************************************************** -->
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
	<script type="text/javascript" src="assets/select2/js/select2.min.js"></script>
    <!--script for this page only-->
	<!--key press limit-->
	<script src="js/numbers-only.js"></script>
<?php
include 'lib/functions/view-inventory-script.php';
include 'lib/User-Accesslvl.php';
?>
</body>
</html>