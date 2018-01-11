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
						  <li><a  href="#">Patient Reports</a></li>
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
						  <li><a  href="#">Schedule Reports</a></li>
                      </ul>
                  </li>
				  <li class="sub-menu">
                      <a href="javascript:;" class="active">
                          <i class="icon-truck"></i>
                          <span>Inventory Management</span>
                      </a>
                      <ul class="sub">
                          <li class="active" ><a  href="view-inventory.php">View Inventory</a></li>
						  <li><a  href="#">Inventory Reports</a></li>
                      </ul>
                  </li>
				  <li class="sub-menu">
                      <a href="javascript:;">
                          <i class="icon-beaker"></i><span>Lab Management</span>
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
					<a class="btn btn-success" data-toggle="modal" data-target="#AddInventory">Add Inventory</a>
					<a class="btn btn-success" data-toggle="modal" data-target="#AddMed">Add Medicines</a>
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
							<div data-date-viewmode="years" data-date-format="mm-dd-yyyy"  class="input-append date dpYears">
								<input type="text" id="INV_MEDICINE_DATEARR" name="#" readonly="" size="16" class="form-control">
									<span class="input-group-btn add-on">
										<button class="btn btn-danger" type="button"><i class="icon-calendar"></i></button>
									</span>
							</div>
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
							<div data-date-viewmode="years" data-date-format="mm-dd-yyyy"  class="input-append date dpYears">
								<input type="text" id="INV_MEDICINE_EXPDATE" name="#" readonly="" size="16" class="form-control">
									<span class="input-group-btn add-on">
										<button class="btn btn-danger" type="button"><i class="icon-calendar"></i></button>
									</span>
							</div>
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
					<label class="col-md-3 col-sm-2 control-label">Category:</label>
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
							<select class="form-control" id="MEDICINE_DFORM">
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
            <th width="111">Date Arrived</th>
            <th width="85">Category</th>
            <th width="100">Type</th>
            <th width="120">Generic Name</th>
            <th width="100">Brand</th>
            <th width="115">Dosage Form</th>
            <th width="50">Dose</th>
            <th width="95">Quantity</th>
            <th width="95">Status</th>
            <th width="100">Expiry date</th>
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
        	<td><?php echo $row['INV_QTY'];echo "/"; echo $row['INV_QTY_HIST']; ?></td>
        	<td><?php $Qty = $row['INV_QTY_HIST'] / '2'; $QtyInitial = $Qty / '2'; $QtyStatus = $Qty + $QtyInitial; if($row['INV_QTY'] > $QtyStatus){ echo "Full";}if($row['INV_QTY'] >= $Qty && $row['INV_QTY'] <= $QtyStatus){ echo "Average";}else if($row['INV_QTY'] < $Qty){ echo "Low";} ?></td>
        	<td><?php echo $row['INV_EXPD'] ?></td>
        	<td class="center hidden-phone">
				<a class="btn btn-primary btn-xs" data-toggle="modal" data-target="#EditMed"><i class="icon-pencil"></i></a>
				<a class="btn btn-danger btn-xs"><i class="icon-trash"></i></a>

				<!-- ******************************************Start Model Edit Medicines*********************************************************** -->
<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="EditMed" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
					<h4 class="modal-title">Edit Inventory</h4>
			</div>
		<div class="modal-body">
			<form class="form-horizontal" role="form">
				<div class="form-group">
					<label class="col-md-3 col-sm-2 control-label">Name of Medicines:</label>
						<div class="col-lg-6">
							<input type="text" class="form-control" required>
						</div>
				</div>
				<div class="form-group">
					<label class="col-md-3 col-sm-2 control-label">Category:</label>
						<div class="col-lg-6">
							<input type="text" class="form-control" required>
						</div>
				</div>
				<div class="form-group">
					<label class="col-md-3 col-sm-2 control-label">Brand:</label>
						<div class="col-lg-6">
							<input type="text" class="form-control" required>
						</div>
				</div>
				<div class="form-group">
					<label class="col-md-3 col-sm-2 control-label">Supplier:</label>
						<div class="col-lg-6">
							<input type="text" class="form-control" required>
						</div>
				</div>
				<div class="form-group">
					<label class="col-md-3 col-sm-2 control-label">Expiration Date:</label>
						<div class="col-lg-6">
							<div class="input-group date form_datetime-component">
								<input type="text" class="form-control" readonly="" size="16">
									<span class="input-group-btn">
										<button type="button" class="btn btn-danger date-set"><i class="icon-calendar"></i></button>
									</span>
							</div>
						</div>
				</div>
			</form>
		</div>
		<div class="modal-footer">
			<button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
			<button class="btn btn-success" type="submit" onclick="#">Save</button>
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

    <!-- js placed at the end of the document so the pages load faster -->
    <!--<script src="js/jquery.js"></script>-->
    <script type="text/javascript" language="javascript" src="assets/advanced-datatable/media/js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
    <script type="text/javascript" language="javascript" src="assets/advanced-datatable/media/js/jquery.dataTables.js"></script>
    <script src="js/respond.min.js" ></script>
	
  	<!--common script for all pages-->
    <script src="js/common-scripts.js"></script>

    <!--script for this page only-->
	
	<!-- Keypress Limit -->
	<script src="js/numbers-only.js"></script>

      <script type="text/javascript" charset="utf-8">
          $(document).ready(function() {
              $('#example').dataTable( {
                  "aaSorting": [[ 0, "desc" ]]
              } );
          } );
		  
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
    </script>
	<script type="text/javascript" src="assets/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
	<script type="text/javascript" src="assets/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js"></script>
	<script src="js/advanced-form-components.js"></script>
	<script type="text/javascript" src="assets/select2/js/select2.min.js"></script>
	
			<script type="text/javascript">
		      $(document).ready(function () {
		          $(".select2-single").select2({placeholder: 'Please select option'});

		          $(".select2-multiple").select2();
		      });

		      function addMedicine(){
		      	var MEDICINE_CAT = $('#MEDICINE_CAT').val();
		      	var MEDICINE_TYPE = $('#MEDICINE_TYPE').val();
		      	var MEDICINE_GNAME = $('#MEDICINE_GNAME').val();
		      	var MEDICINE_BNAME = $('#MEDICINE_BNAME').val();
		      	var MEDICINE_DFORM = $('#MEDICINE_DFORM').val();
		      	var MEDICINE_DOSE = $('#MEDICINE_DOSE').val();

			      	if(confirm('Are you sure you want to add this new medicine in the database?')) {
			        $.ajax({
			          type: "POST",
			          url: "Server.php?p=addMedicine",
			          data: "MEDICINE_CAT="+MEDICINE_CAT+"&MEDICINE_TYPE="+MEDICINE_TYPE+"&MEDICINE_GNAME="+MEDICINE_GNAME+"&MEDICINE_BNAME="+MEDICINE_BNAME+"&MEDICINE_DFORM="+MEDICINE_DFORM+"&MEDICINE_DOSE="+MEDICINE_DOSE,
			          success: function(data){
			            alert('Added successfully!');
			            window.location.reload();
			          }
			        });
			      }else{
			        //do nothing
			      }
		      }
		  </script>
		  <script type="text/javascript">
					$(document).ready(function(){
					$('#INV_MEDICINE_TYPE').on('change',function(){
						var Medtype = $('#INV_MEDICINE_TYPE').val();
						var MedCat = $('#INV_MEDICINE_CAT').val();
						if(Medtype != '' && MedCat != ''){
							$.ajax({
								type: "POST",
								url: "Server.php?p=MedicineName",
								data: "INV_MEDTYPE="+Medtype+"&INV_MEDCAT="+MedCat,
								success: function(data){
									$('#INV_MEDICINE_GNAME').html(data);
									changeBrand();
								var CheckDF = $('#INV_MEDICINE_DF').val();
									if(CheckDF == 'Tablet' || CheckDF == 'Syrup'){
										$('#INV_MEDICINE_DF').html('<option></option>');
										$('#INV_MEDICINE_DS').html('<option></option>');
									}else{
										$('#INV_MEDICINE_DF').html('<option></option><option>Tablet</option><option>Syrup</option>');
									}
								}
							});
						}else{
						$('#INV_MEDICINE_GNAME').html('<option>Please select catergory</option>');
						}
					});
					$('#INV_MEDICINE_CAT').on('change',function(){
						var Medtype = $('#INV_MEDICINE_TYPE').val();
						var MedCat = $('#INV_MEDICINE_CAT').val();
						if(Medtype != '' && MedCat != ''){
							$.ajax({
								type: "POST",
								url: "Server.php?p=MedicineName",
								data: "INV_MEDTYPE="+Medtype+"&INV_MEDCAT="+MedCat,
								success: function(data){
									$('#INV_MEDICINE_GNAME').html(data);
									changeBrand();
									changeDF();
								var CheckDF = $('#INV_MEDICINE_DF').val();
									if(CheckDF == 'Tablet' || CheckDF == 'Syrup'){
										$('#INV_MEDICINE_DF').html('<option></option>');
										$('#INV_MEDICINE_DS').html('<option></option>');
									}else{
										$('#INV_MEDICINE_DF').html('<option></option><option>Tablet</option><option>Syrup</option>');
									}
								}
							});
						}else{
								$('#INV_MEDICINE_GNAME').html('<option>Please select type</option>');	
						}
					});
					$('#INV_MEDICINE_GNAME').on('change',function(){
						var MedGname = $('#INV_MEDICINE_GNAME').val();
						if(MedGname){
							$.ajax({
								type: "POST",
								url: "Server.php?p=MedicineBName",
								data: "INV_MEDGNAME="+MedGname,
								success: function(data){
									$('#INV_MEDICINE_BNAME').html(data);
									changeDF();
								}
							});
						}else{
								$('#INV_MEDICINE_BNAME').html('<option>Please select name of medicine!<option>');

						}
					});
					$('#INV_MEDICINE_BNAME').on('change',function(){
						changeDF();
					});
					$('#INV_MEDICINE_DF').on('change',function(){
							var MedDF = $('#INV_MEDICINE_DF').val();
							var MedCat = $('#INV_MEDICINE_CAT').val();
							var Medtype = $('#INV_MEDICINE_TYPE').val();
							var MedGname = $('#INV_MEDICINE_GNAME').val();
							var MedBname = $('#INV_MEDICINE_BNAME').val();
							if(MedDF){
								$.ajax({
									type: "POST",
									url: "Server.php?p=MedicineDF",
									data: "MedDform="+MedDF+"&Medgname="+MedGname+"&MedBname="+MedBname+"&MedCat="+MedCat+"&Medtype="+Medtype,
									success: function(data){
										$('#INV_MEDICINE_DS').html(data);
									}
								});
							}
							else{
								$('#INV_MEDICINE_DS').html('<option><option>');
							}
						});
					});
					function changeBrand(){
						var MedGname = $('#INV_MEDICINE_GNAME').val();
							if(MedGname){
								$.ajax({
									type: "POST",
									url: "Server.php?p=MedicineBName",
									data: "INV_MEDGNAME="+MedGname,
									success: function(data){
										$('#INV_MEDICINE_BNAME').html(data);
									}
								});
							}else{
									$('#INV_MEDICINE_BNAME').html('<option>Please select name of medicine!<option>');
							}
					}
					function changeDF(){
							var MedDF = $('#INV_MEDICINE_DF').val();
							var MedCat = $('#INV_MEDICINE_CAT').val();
							var Medtype = $('#INV_MEDICINE_TYPE').val();
							var MedGname = $('#INV_MEDICINE_GNAME').val();
							var MedBname = $('#INV_MEDICINE_BNAME').val();
							if(MedDF){
								$.ajax({
									type: "POST",
									url: "Server.php?p=MedicineDF",
									data: "MedDform="+MedDF+"&Medgname="+MedGname+"&MedBname="+MedBname+"&MedCat="+MedCat+"&Medtype="+Medtype,
									success: function(data){
										$('#INV_MEDICINE_DS').html(data);
									}
								});
							}else{
								$('#INV_MEDICINE_DS').html('<option><option>');
							}
					}
					function addInventory(){
						var MedDform = $('#INV_MEDICINE_DF').val();
						var MedCat = $('#INV_MEDICINE_CAT').val();
						var Medtype = $('#INV_MEDICINE_TYPE').val();
						var MedGname = $('#INV_MEDICINE_GNAME').val();
						var MedBname = $('#INV_MEDICINE_BNAME').val();
						var MedDose  = $('#INV_MEDICINE_DS').val();
						var Qty  = $('#INV_MEDICINE_QTY').val();
						var ExpDate  = $('#INV_MEDICINE_EXPDATE').val();
						var DateArr  = $('#INV_MEDICINE_DATEARR').val();
						var Supplier  = $('#INV_MEDICINE_SUPP').val();

						if(MedDform == '' || MedCat == '' || Medtype == '' || MedGname == '' || MedBname == '' || MedDose == '' || Qty == '' || ExpDate == '' || DateArr == '' || Supplier == ''){
							$('#Error_Message').html('Please fill all fields! &nbsp;');
						}else{
							$('#Error_Message').html('');
							if (confirm('Are you sure you want to add stock for this medicine?')) {
							$.ajax({
								type: "POST",
								url: "Server.php?p=AddInventory",
								data: "MEDICINE_DFORM="+MedDform+"&MEDICINE_DOSE="+MedDose+"&MEDICINE_BNAME="+MedBname+"&MEDICINE_GNAME="+MedGname+"&MEDICINE_TYPE="+Medtype+"&MEDICINE_CAT="+MedCat+"&SUPPLIER="+Supplier+"&DATEARR="+DateArr+"&QTY="+Qty+"&EXPDATE="+ExpDate,
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
						}
					}
		</script>
  </body>
</html>
