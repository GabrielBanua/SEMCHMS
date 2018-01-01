<?php
require 'lib/session.php';
if($Position == "Doctor"){
  header('Location: index.php');
}
else if($Position == "Volunter"){
  header('Location: index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/favicon.ico">

    <title>Register User</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
	<link rel="stylesheet" type="text/css" href="assets/bootstrap-fileupload/bootstrap-fileupload.css" />
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
          <a href="index.php" class="logo" >St. Ezekiel Moreno<span>|Healthcare Management Systems</span></a>
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
                          <li><a  href="view-patients.php">View Patients</a></li
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
                      <a href="javascript:;">
                          <i class="icon-truck"></i>
                          <span>Inventory Management</span>
                      </a>
                      <ul class="sub">
                            <li><a href="view-inventory.php">View Inventory</a></li>
							<li><a href="#">Inventory Reports</a></li>
                      </ul>
                  </li>

				 <li class="sub-menu">
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

				  
				  <li class="sub-menu">
                      <a href="javascript:;" class="active">
                          <i class="icon-group"></i>
                          <span>Users Management</span>
                      </a>
                      <ul class="sub">
                          <li class="active"><a  href="add-user.php">Add New User</a></li>
                          <li><a  href="view-users.php">View Users</a></li>
                      </ul>
                  </li>
				  
				  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="icon-download-alt"></i>
                          <span>Maintenance</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="backup.php">Backup Database</a></li>
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
                  <div class="profile-info col-lg-12">
                      <section class="panel">
							<header class="panel-heading">
                              User Registration
							  </header>
                          <div class="panel-body bio-graph-info">
                              <h1>Register</h1>
                              <form class="form-horizontal" role="form">
                                  <div class="form-group">
                                      <label  class="col-lg-2 control-label">Username</label>
                                      <div class="col-lg-4">
                                          <input name="Username" id="UN" type="text" class="form-control" placeholder=" "autofocus required>
                                      </div>
                                  </div>
								  <div class="form-group">
                                      <label  class="col-lg-2 control-label">Password</label>
                                      <div class="col-lg-4">
                                          <input name="Password" id="PW" type="password" class="form-control" placeholder=" " required>
                                      </div>
                                  </div>
								  <div class="form-group">
                                      <label  class="col-lg-2 control-label">First Name</label>
                                      <div class="col-lg-4">
                                          <input name="Firstname" id="FN" type="text" class="form-control" placeholder=" ">
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label  class="col-lg-2 control-label">Middle Name</label>
                                      <div class="col-lg-4">
                                          <input name="Middlename" id="MN" type="text" class="form-control" placeholder=" ">
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label  class="col-lg-2 control-label">Last Name</label>
                                      <div class="col-lg-4">
                                          <input name="Lastname" id="LN" type="text" class="form-control" placeholder=" ">
                                      </div>
                                  </div>
								  <div class="form-group">
                                      <label  class="col-lg-2 control-label">Gender</label>
                                      <div class="col-lg-4">
                                          <select name="Gender" id="GN" class="form-control">
                      												<option>-None-</option>
                      												<option>Male</option>
                      												<option>Female</option>
                      										</select>
                                      </div>
                                  </div>
								  <div class="form-group">
                                      <label  class="col-lg-2 control-label">Position</label>
                                      <div class="col-lg-4">
                                          <select name="Position" id="PS" class="form-control">
                      												<option>-None-</option>
                      												<option>Admin</option>
                      												<option>Pharmacist</option>
                                              <option>Medtech</option>
                      												<option>Doctor</option>
                      										</select>
                                      </div>
                                  </div>
								  <div class="form-group">
                                      <div class="col-lg-offset-2 col-lg-10">
                                          <button type="submit" onclick="addNewUser()" class="btn btn-success">Register</button>
                                          <button type="button" class="btn btn-default">Cancel</button>
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
  
  function addNewUser(){
    var Username = $('#UN').val();
    var Password = $('#PW').val();
    var Firstname = $('#FN').val();
    var Lastname= $('#LN').val();
    var Middlename= $('#MN').val();
    var Gender= $('#GN').val();
    var Position= $('#PS').val();
    $.ajax({
      type: "POST",
      url: "Server.php?p=addNewUser",
      data: "UN="+Username+"&PW="+Password+"&FN="+Firstname+"&LN="+Lastname+"&MN="+Middlename+"&GN="+Gender+"&PS="+Position
    });
    
  }

</script>

  </body>
</html>
