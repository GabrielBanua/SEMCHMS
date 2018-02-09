<?php
require 'lib/session.php';
require 'lib/Db.config.php';
require 'lib/Db.config.pdo.php';
date_default_timezone_set('Asia/Manila');
$current_date = date('Y-m-d');
  $stmt = $db->prepare("Select * FROM inventory INNER JOIN medicine ON inventory.MEDICINE_ID = medicine.MEDICINE_ID WHERE inventory.INV_QTY > '0'");
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
				  <li class="sub-menu" id="Inventory-li">
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
                        Inventory 
                    </header>
            <div class="panel-body">
			<!--tab nav start-->
                      <section class="panel">
                          <header class="panel-heading tab-bg-dark-navy-blue ">
                              <ul class="nav nav-tabs">
                                  <li class="active">
                                      <a data-toggle="tab" href="#inventorytab"><b><i class="icon-truck"></i> Inventory</b></a>
                                  </li>
                                  <li class="">
                                      <a data-toggle="tab" href="#medtab"><b><i class="icon-medkit"></i> Medicines</b></a>
                                  </li>
                              </ul>
                          </header>
                          <div class="panel-body">
                              <div class="tab-content">
                                  <div id="inventorytab" class="tab-pane active">
                                      <div class="adv-table">
										<a class="btn btn-shadow btn-success" data-toggle="modal" data-target="#AddInventory"><i class="icon-plus"></i> Add Stocks</a>
										<?php
										include 'lib/modals/Add-inventory-modal.php';
										?>
										<table  class="table table-striped table-advance table-hover" id="example">
											<thead>
												<tr>
													<th style="text-align:center;" width="120">Date Arrived</th>
													<th style="text-align:center;" width="70">Category</th>
													<th style="text-align:center;" width="80">Type</th>
													<th style="text-align:center;" width="120">Generic Name</th>
													<th style="text-align:center;" width="80">Brand</th>
													<th style="text-align:center;" width="115">Dosage Form</th>
													<th style="text-align:center;" width="90">Dose</th>
													<th style="text-align:center;" width="120">Expiry Date</th>
													<th style="text-align:center;" width="95">Quantity</th>
													<th style="text-align:center;" width="70">Status</th>
													<th style="text-align:center;" width="120">Action</th>
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
													<td style="text-align:center;"><?php echo $row['INV_QTY'];echo " | "; echo $row['INV_QTY_HIST']; ?></td>
													<td class="text-center"><?php $Qty = $row['INV_QTY_HIST'] / '2'; $QtyInitial = $Qty / '2'; $QtyStatus = $Qty + $QtyInitial; 
													if($row['INV_EXPD'] <= $current_date || $row['INV_EXPD'] == $current_date){echo "<span class='label label-info label-mini'>Expired</span>";}else{
                                                        if($row['INV_QTY'] > $QtyStatus){ echo "<span class='label label-primary label-mini'>Full</span>";}
                                                        else if($row['INV_QTY'] >= $Qty && $row['INV_QTY'] <= $QtyStatus){ echo "<span class='label label-success label-mini'>Average</span>";}else if($row['INV_QTY'] < $Qty && $row['INV_QTY'] > $QtyInitial){ echo "<span class='label label-warning label-mini'>Low</span>";
                                                        }else if($row['INV_QTY'] < $QtyInitial){ echo "<span class='label label-danger label-mini'>Re-order</span>";}} ?></td>
													<td style="align:center;" class="hidden-phone">
														<a class="btn btn-shadow btn-primary btn-xs" data-toggle="modal" onclick="RetrieveInventory(<?php echo $row['INV_ID'] ?>)" data-target="#EditInv-<?php echo $row['INV_ID'] ?>"><i class="icon-pencil"></i></a>
														<a class="btn btn-shadow btn-warning btn-xs" data-toggle="modal" data-target="#DispenseMed-<?php echo $row['INV_ID'] ?>"><i class="icon-minus"></i></a>
														<a class="btn btn-shadow btn-danger btn-xs" onclick="deleteInventory(<?php echo $row['INV_ID'] ?>)"><i class="icon-trash"></i></a>
														
													<?php
													include 'lib/modals/Dispense-medicine-modal.php';
													include 'lib/modals/Edit-inventory-modal.php';
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
                                  <div id="medtab" class="tab-pane">
										<div class="adv-table">
										<a class="btn btn-shadow btn-success" data-toggle="modal" data-target="#AddMed"><i class="icon-plus"></i> Add Medicines</a>
										<?php
										include 'lib/modals/Add-medicine-modal.php';
										?>
										<table class="table table-striped table-advance table-hover" id="editmedtable">
											<thead>
												<tr>
													<th>Category(Age)</th>
													<th>Type</th>
													<th>Generic Name</th>
													<th>Brand Name</th>
													<th>Dosage Form</th>
													<th>Dose</th>
													<th>Action</th>
												</tr>
											</thead>
											<tbody>  
                                            <?php
                                              $Medicine = $db->prepare("Select * FROM medicine");
                                              $Medicine->execute();
                                            while($Medi = $Medicine->fetch()){
                                            ?>                                
												<tr class="gradeX">
													<td><?php echo $Medi['MEDICINE_CAT']; ?></td>
													<td><?php echo $Medi['MEDICINE_TYPE']; ?></td>
													<td><?php echo $Medi['MEDICINE_GNAME']; ?></td>
													<td><?php echo $Medi['MEDICINE_BNAME']; ?></td>
													<td><?php echo $Medi['MEDICINE_DFORM']; ?></td>
													<td><?php echo $Medi['MEDICINE_DOSE']; ?></td>
													<td class="hidden-phone">
														<a class="btn btn-shadow btn-primary btn-xs" data-toggle="modal" data-target="#EditMedInfo-<?php echo $Medi['MEDICINE_ID']; ?>"><i class="icon-pencil"></i></a>
                                                        <?php 
                                                        include 'lib/modals/Edit-med-modal.php';
                                                        ?>
														<a class="btn btn-shadow btn-danger btn-xs" onclick="deleteMed(<?php echo $Medi['MEDICINE_ID']; ?>)"><i class="icon-trash"></i></a>
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
                      </section>
                      <!--tab nav start-->
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