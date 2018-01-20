<?php
require 'lib/session.php';
require 'lib/Db.config.php';
require 'lib/Db.config.pdo.php';

  //This is the sql for fetching the data in the database
  $stmt = $db->prepare("Select *, CONCAT(Firstname,' ',Middlename,' ',Lastname) AS FullName from users");
  $stmt->execute();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/favicon.ico">

    <title>Users</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/advanced-datatable/media/css/demo_page.css" rel="stylesheet" />
    <link href="assets/advanced-datatable/media/css/demo_table.css" rel="stylesheet" />
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
                      <a href="javascript:;" >
                          <i class="icon-user"></i>
                          <span>Patient Management</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="add-patient.php">Add Patients</a></li>
                          <li><a  href="view-patients.php">View Patients</a></li>
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
						  <li><a href="view-inventory.php">View Inventory</a></li>
						  <li><a href="#">Inventory Reports</a></li>
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
						  <li><a  href="#">Laboratory Reports</a></li>
                      </ul>
                  </li>
				  
				  <li class="sub-menu" id="Maintenance-li">
                      <a href="javascript:;" class="active">
                          <i class="icon-download-alt"></i>
                          <span>Maintenance</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="backup.php">Backup Database</a></li>
						  <li class="active"><a  href="view-users.php">View Users</a></li>
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
                              Users
                          </header>
                          <div class="panel-body">
                                <div class="adv-table">
								<a class="btn btn-shadow btn-success" data-toggle="modal" data-target="#AddModal"><i class="icon-plus"></i> Add New User</a>
<!-- Register User Start  MODAL-->
              <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="AddModal" class="modal fade">
                                  <div class="modal-dialog">
                                      <div class="modal-content">
                                          <div class="modal-header">
                                              <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                                              <h4 class="modal-title">User Registration</h4>
                                          </div>
                                          <div class="modal-body">

                                              <form class="form-horizontal" role="form">
                                                  <div class="form-group">
                                                      <label class="col-md-3 col-sm-2 control-label">Username:</label>
                                                      <div class="col-lg-6">
                                                          <input type="text" id="UN" class="form-control" required>
                                                      </div>
                                                  </div>
                          <div class="form-group">
                                                      <label class="col-md-3 col-sm-2 control-label">Password:</label>
                                                      <div class="col-lg-6">
                                                          <input type="Password" id="PW" class="form-control" required>
                                                      </div>
                                                  </div>
                          <div class="form-group">
                                                      <label class="col-md-3 col-sm-2 control-label">First Name:</label>
                                                      <div class="col-lg-6">
                                                          <input type="text" id="FN" class="form-control" required>
                                                      </div>
                                                  </div>
                          <div class="form-group">
                                                      <label class="col-md-3 col-sm-2 control-label">Middle Name:</label>
                                                      <div class="col-lg-6">
                                                          <input type="text" id="MN" class="form-control" required>
                                                      </div>
                                                  </div>
                          <div class="form-group">
                                                      <label class="col-md-3 col-sm-2 control-label">Last Name:</label>
                                                      <div class="col-lg-6">
                                                          <input type="text" id="LN" class="form-control" required>
                                                      </div>
                                                  </div>
                          <div class="form-group">
                                                      <label class="col-md-3 col-sm-2 control-label">Gender:</label>
                                                      <div class="col-lg-4">
                                                          <select class="form-control" id="GN" required>
                                                            <option hidden>-None-</option>
                                                            <option>Male</option>
                                                            <option>Female</option>
                                                          </select>
                                                      </div>
                                                  </div>
                          <div class="form-group">
                                                      <label class="col-md-3 col-sm-2 control-label">Position:</label>
                                                      <div class="col-lg-4">
                              <select class="form-control" id="PS" required>
                                <option hidden>-None-</option>
                                <option>Admin</option>
                                <option>Doctor</option>
                                <option>Medtech</option>
                                <option>Pharmacy</option>
                                <option>Pathlogist</option>
                              </select>
                                                      </div>
                                                  </div>
							<div class="form-group">
											<label class="col-md-3 col-sm-2 control-label">License No.:</label>
											<div class="col-lg-6">
												<input type="text" class="form-control">
											</div>
									  </div>
									  <div class="form-group">
											<label class="col-md-3 col-sm-2 control-label">Date End:</label>
											<div class="col-lg-4">
												<input type="date" class="form-control">
											</div>
									  </div>
									  <div class="form-group">
											<label class="col-md-3 col-sm-2 control-label">Status:</label>
											<div class="col-lg-4">
												<select class="form-control">
													<option hidden>-- Select Option --</option>
													<option>Active</option>
													<option>Inactive</option>
												</select>
											</div>
									  </div>
                                              </form>
                                          </div>
                    <div class="modal-footer">
                      <a data-dismiss="modal" class="btn btn-shadow btn-default" type="button">Cancel</a>
                      <a class="btn btn-shadow btn-success"  onclick="addNewUser()"><i class="icon-save"></i> Register</a>
                    </div>
                                      </div>
                                  </div>
                              </div>
<!--MODAL END-->

                                    <table  class="display table table-bordered table-striped" id="example">
                                      <thead>
                                      <tr>
                                          <th width="30">ID</th>
                                          <th width="90">Username</th>
                                          <th width="150">Fullname</th>
                                          <th width="90" class="hidden-phone">Position</th>
                                          <th width="60" class="hidden-phone">Action</th>
                                      </tr>
                                      </thead>
                                      <tbody>
<?php
      while($row = $stmt->fetch()){
?>
                                          <tr class="gradeX">
                                                <td><?php echo $row['User_id'] ?></td>
                                                <td><?php echo $row['Username'] ?></td>
                                                <td><?php echo $row['FullName'] ?></td>
                                                <td><?php echo $row['Position'] ?></td>
                                                <td class="center hidden-phone">
                                                <a class="btn btn-shadow btn-success btn-sm" data-toggle="modal" data-target="#EditModal-<?php echo $row['User_id']?>"><i class="icon-edit"></i> Edit</a>
												<a class="btn btn-shadow btn-danger btn-sm" type="submit" onclick="DeleteUser(<?php echo $row['User_id']?>)"><i class="icon-trash"></i> Delete</a>
<!-- Edit User MODAL-->
              <div aria-hidden="true" aria-labelledby="myModalLabel-<?php echo $row['User_id']?>" role="dialog" tabindex="-1" id="EditModal-<?php echo $row['User_id']?>" class="modal fade">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                                    <h4 class="modal-title" id="myModalLabel-<?php echo $row['User_id']?>">Edit User</h4>
                                </div>
                                <div class="modal-body">

                                <form class="form-horizontal" role="form">
                                      <div class="form-group">
                                            <label class="col-md-3 col-sm-2 control-label">ID:</label>
                                                <div class="col-lg-2">
                                                    <input type="text" class="form-control" value="<?php echo $row['User_id'] ?>" readonly class="form_datetime form-control">
                                                </div>
                                      </div>
                                      <div class="form-group">
                                            <label class="col-md-3 col-sm-2 control-label">Username:</label>
                                                <div class="col-lg-6">
                                                    <input type="text" class="form-control" id="UN-<?php echo $row['User_id'] ?>" value="<?php echo $row['Username']; ?>">
                                                </div>
                                      </div>
                                      <div class="form-group">
                                            <label class="col-md-3 col-sm-2 control-label">Password:</label>
                                                <div class="col-lg-6">
                                                    <input type="password" class="form-control" id="PW-<?php echo $row['User_id'] ?>" value="<?php echo $row['Password']; ?>">
                                                </div>
                                      </div>
                                      <div class="form-group">
                                            <label class="col-md-3 col-sm-2 control-label">First Name:</label>
                                                <div class="col-lg-6">
                                                    <input type="text" class="form-control" id="FN-<?php echo $row['User_id'] ?>" value="<?php echo $row['Firstname']; ?>">
                                                </div>
                                      </div>
                                      <div class="form-group">
                                            <label class="col-md-3 col-sm-2 control-label">Middle Name:</label>
                                                <div class="col-lg-6">
                                                    <input type="text" class="form-control" id="MN-<?php echo $row['User_id'] ?>" value="<?php echo $row['Middlename']; ?>">
                                                </div>
                                      </div>
                                      <div class="form-group">
                                            <label class="col-md-3 col-sm-2 control-label">Last Name:</label>
                                                <div class="col-lg-6">
                                                    <input type="text" class="form-control" id="LN-<?php echo $row['User_id'] ?>" value="<?php echo $row['Lastname']; ?>">
                                                </div>
                                      </div>
                                      <div class="form-group">
                                            <label class="col-md-3 col-sm-2 control-label">Gender:</label>
                                                <div class="col-lg-4">
                                                    <select class="form-control" id="GN-<?php echo $row['User_id'] ?>">
                                                      <option value="-None-" <?php
                                                      if ($row['Gender'] == "-None-") { echo " selected"; }?>>-None-</option>
                                                      <option value="Male" <?php
                                                      if ($row['Gender'] == "Male") { echo " selected"; }?>>Male</option>
                                                      <option value="Female" <?php
                                                      if ($row['Gender'] == "Female") { echo " selected"; }?>>Female</option>
                                                    </select>
                                                </div>
                                      </div>
                                      <div class="form-group">
                                            <label class="col-md-3 col-sm-2 control-label">Position:</label>
                                                <div class="col-lg-4">
                                                    <select class="form-control" id="PS-<?php echo $row['User_id'] ?>">
                                                      <option value="-None-" <?php
                                                      if ($row['Position'] == "-None-") { echo " selected"; }?>>-None-</option>
                                                      <option value="Admin" <?php
                                                      if ($row['Position'] == "Admin") { echo " selected"; }?>>Admin</option>
                                                      <option value="Doctor" <?php
                                                      if ($row['Position'] == "Doctor") { echo " selected"; }?>>Doctor</option>
                                                      <option value="Medtech" <?php
                                                      if ($row['Position'] == "Medtech") { echo " selected"; }?>>Medtech</option>
                                                      <option value="Pharmacist" <?php
                                                      if ($row['Position'] == "Pharmacist") { echo " selected"; }?>>Pharmacist</option>
                                                      <option value="Pathologist" <?php
                                                      if ($row['Position'] == "Pathologist") { echo " selected"; }?>>Pathlogist</option>
                                                    </select>
                                                </div>
                                      </div>
									  <div class="form-group">
											<label class="col-md-3 col-sm-2 control-label">License No.:</label>
											<div class="col-lg-6">
												<input type="text" class="form-control">
											</div>
									  </div>
									  <div class="form-group">
											<label class="col-md-3 col-sm-2 control-label">Date End:</label>
											<div class="col-lg-4">
												<input type="date" class="form-control">
											</div>
									  </div>
									  <div class="form-group">
											<label class="col-md-3 col-sm-2 control-label">Status:</label>
											<div class="col-lg-4">
												<select class="form-control">
													<option hidden>-- Select Option --</option>
													<option>Active</option>
													<option>Inactive</option>
												</select>
											</div>
									  </div>
                                </form>
                                </div>
                                                  <div class="modal-footer">
                                                      <a data-dismiss="modal" class="btn btn-shadow btn-default">Cancel</a>
                                                      <a class="btn btn-shadow btn-success" onclick="UpdateUser(<?php echo $row['User_id'] ?>)"><i class="icon-plus"></i> Update</a>
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

      <script type="text/javascript" charset="utf-8">
          $(document).ready(function() {
              $('#example').dataTable( {
                  "aaSorting": [[ 10, "desc" ]]
              } );
          } );
      </script>
     <script>
        function DeleteUser(str){
          var id = str;
          if (confirm('Are you sure you want to delete this user in the database?')) {
              $.ajax({
              type: "POST",
              url: "Server.php?p=DeleteUser",
              data: "User_id="+id,
              success: function(data){
                alert('Deleted successfully!');
                window.location.reload();
              }
          });
          } else {
              // Do nothing!
          } 
        }

        function UpdateUser(str){
          var User_id = str;
          var Username = $('#UN-'+str).val();
          var Password = $('#PW-'+str).val();
          var Firstname = $('#FN-'+str).val();
          var Lastname= $('#LN-'+str).val();
          var Middlename= $('#MN-'+str).val();
          var Gender= $('#GN-'+str).val();
          var Position= $('#PS-'+str).val();
          if (confirm('Are you sure you want to update this user in the database?')) {
          $.ajax({
            type: "POST",
            url: "Server.php?p=UpdateUser",
            data: "UN="+Username+"&PW="+Password+"&FN="+Firstname+"&LN="+Lastname+"&MN="+Middlename+"&GN="+Gender+"&PS="+Position+"&User_id="+User_id,
            success: function(data){
                alert('Updated successfully!');
                window.location.reload();
              }
          });
          } else {
              // Do nothing!
          } 
        }

        function addNewUser(){
          var Username = $('#UN').val();
          var Password = $('#PW').val();
          var Firstname = $('#FN').val();
          var Lastname= $('#LN').val();
          var Middlename= $('#MN').val();
          var Gender= $('#GN').val();
          var Position= $('#PS').val();
          if (confirm('Are you sure you want to add this user in the database?')) {
          $.ajax({
            type: "POST",
            url: "Server.php?p=addNewUser",
            data: "UN="+Username+"&PW="+Password+"&FN="+Firstname+"&LN="+Lastname+"&MN="+Middlename+"&GN="+Gender+"&PS="+Position,
            success: function(data){
                alert('Added successfully!');
                window.location.reload();
              }
          });
          } else {
              // Do nothing!
          }
        }

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
  </body>
</html>
