<?php
error_reporting(0);

$DB_host = "localhost";
$DB_user = "root";
$DB_pass = "";
$DB_name = "semhcms";

$connection = mysql_connect($DB_host, $DB_user, $DB_pass) or die("could'nt connect to server!");
mysql_select_db($DB_name, $connection) or die("could'nt connect to database!");

$year = date('Y');

$YR = mysql_real_escape_string($_POST['YEAR']);

$stmtJAN = mysql_query("SELECT COUNT(P_ID) AS TOTALPATIENTS FROM patient WHERE YEAR = '$YR' AND MONTH = 'Jan'");
$JAN = mysql_fetch_array($stmtJAN);

$stmtFEB = mysql_query("SELECT COUNT(P_ID) AS TOTALPATIENTS FROM patient WHERE YEAR = '$YR' AND MONTH = 'Feb'");
$FEB = mysql_fetch_array($stmtFEB);

$stmtMAR = mysql_query("SELECT COUNT(P_ID) AS TOTALPATIENTS FROM patient WHERE YEAR = '$YR' AND MONTH = 'Mar'");
$MAR = mysql_fetch_array($stmtMAR);

$stmtAPR = mysql_query("SELECT COUNT(P_ID) AS TOTALPATIENTS FROM patient WHERE YEAR = '$YR' AND MONTH = 'Apr'");
$APR = mysql_fetch_array($stmtAPR);

$stmtMAY = mysql_query("SELECT COUNT(P_ID) AS TOTALPATIENTS FROM patient WHERE YEAR = '$YR' AND MONTH = 'May'");
$MAY = mysql_fetch_array($stmtMAY);

$stmtJUN = mysql_query("SELECT COUNT(P_ID) AS TOTALPATIENTS FROM patient WHERE YEAR = '$YR' AND MONTH = 'Jun'");
$JUN = mysql_fetch_array($stmtJUN);

$stmtJUL = mysql_query("SELECT COUNT(P_ID) AS TOTALPATIENTS FROM patient WHERE YEAR = '$YR' AND MONTH = 'Jul'");
$JUL = mysql_fetch_array($stmtJUL);

$stmtAUG = mysql_query("SELECT COUNT(P_ID) AS TOTALPATIENTS FROM patient WHERE YEAR = '$YR' AND MONTH = 'Aug'");
$AUG = mysql_fetch_array($stmtAUG);

$stmtSEP = mysql_query("SELECT COUNT(P_ID) AS TOTALPATIENTS FROM patient WHERE YEAR = '$YR' AND MONTH = 'Sep'");
$SEP = mysql_fetch_array($stmtSEP);

$stmtOCT = mysql_query("SELECT COUNT(P_ID) AS TOTALPATIENTS FROM patient WHERE YEAR = '$YR' AND MONTH = 'Oct'");
$OCT = mysql_fetch_array($stmtOCT);

$stmtNOV = mysql_query("SELECT COUNT(P_ID) AS TOTALPATIENTS FROM patient WHERE YEAR = '$YR' AND MONTH = 'Nov'");
$NOV = mysql_fetch_array($stmtNOV);

$stmtDEC = mysql_query("SELECT COUNT(P_ID) AS TOTALPATIENTS FROM patient WHERE YEAR = '$YR' AND MONTH = 'Dec'");
$DEC = mysql_fetch_array($stmtDEC);

?>
<tr>
	 <td class="text-center"><b>January</b></td>
	 <td class="text-center"><span class="label label-info label-mini"><?php echo $JAN['TOTALPATIENTS'];?></span></td>
	 <td class="text-center"><a class="btn btn-shadow btn-success btn-xs" data-toggle="modal" data-target="#patientlist-<?php echo $YR; ?>"><i class="icon-eye-open"></i> View</a></td>
</tr>
<tr>
	 <td class="text-center"><b>February</b></td>
	 <td class="text-center"><span class="label label-primary label-mini"><?php echo $FEB['TOTALPATIENTS']; ?></span></td>
	 <td class="text-center"><a class="btn btn-shadow btn-success btn-xs" data-toggle="modal" data-target="#patientlist-<?php echo $YR; ?>"><i class="icon-eye-open"></i> View</a></td>
</tr>
<tr>
	 <td class="text-center"><b>March</b></td>
	 <td class="text-center"><span class="label label-success label-mini"><?php echo $MAR['TOTALPATIENTS']; ?></span></td>
	 <td class="text-center"><a class="btn btn-shadow btn-success btn-xs" data-toggle="modal" data-target="#patientlist"><i class="icon-eye-open"></i> View</a></td>
</tr>
<tr>
	 <td class="text-center"><b>April</b></td>
	 <td class="text-center"><span class="label label-danger label-mini"><?php echo $APR['TOTALPATIENTS']; ?></span></td>
	 <td class="text-center"><a class="btn btn-shadow btn-success btn-xs" data-toggle="modal" data-target="#patientlist"><i class="icon-eye-open"></i> View</a></td>
</tr>
<tr>
	 <td class="text-center"><b>May</b></td>
	 <td class="text-center"><span class="label label-info label-mini"><?php echo $MAY['TOTALPATIENTS']; ?></span></td>
	 <td class="text-center"><a class="btn btn-shadow btn-success btn-xs" data-toggle="modal" data-target="#patientlist"><i class="icon-eye-open"></i> View</a></td>
</tr>
<tr>
	 <td class="text-center"><b>June</b></td>
	 <td class="text-center"><span class="label label-primary label-mini"><?php echo $JUN['TOTALPATIENTS']; ?></span></td>
	 <td class="text-center"><a class="btn btn-shadow btn-success btn-xs" data-toggle="modal" data-target="#patientlist"><i class="icon-eye-open"></i> View</a></td>
</tr>
<tr>
	 <td class="text-center"><b>July</b></td>
	 <td class="text-center"><span class="label label-success label-mini"><?php echo $JUL['TOTALPATIENTS']; ?></span></td>
	 <td class="text-center"><a class="btn btn-shadow btn-success btn-xs" data-toggle="modal" data-target="#patientlist"><i class="icon-eye-open"></i> View</a></td>
</tr>
<tr>
	 <td class="text-center"><b>August</b></td>
	 <td class="text-center"><span class="label label-danger label-mini"><?php echo $AUG['TOTALPATIENTS']; ?></span></td>
	 <td class="text-center"><a class="btn btn-shadow btn-success btn-xs" data-toggle="modal" data-target="#patientlist"><i class="icon-eye-open"></i> View</a></td>
</tr>
<tr>
	 <td class="text-center"><b>September</b></td>
	 <td class="text-center"><span class="label label-info label-mini"><?php echo $SEP['TOTALPATIENTS']; ?></span></td>
	 <td class="text-center"><a class="btn btn-shadow btn-success btn-xs"><i class="icon-eye-open"></i> View</a></td>
</tr>
<tr>
	 <td class="text-center"><b>October</b></td>
	 <td class="text-center"><span class="label label-primary label-mini"><?php echo $OCT['TOTALPATIENTS']; ?></span></td>
	 <td class="text-center"><a class="btn btn-shadow btn-success btn-xs"><i class="icon-eye-open"></i> View</a></td>
</tr>
<tr>
	 <td class="text-center"><b>November</b></td>
	 <td class="text-center"><span class="label label-success label-mini"><?php echo $NOV['TOTALPATIENTS']; ?></span></td>
	 <td class="text-center"><a class="btn btn-shadow btn-success btn-xs"><i class="icon-eye-open"></i> View</a></td>
</tr>
<tr>
	 <td class="text-center"><b>December</b></td>
	 <td class="text-center"><span class="label label-danger label-mini"><?php echo $DEC['TOTALPATIENTS']; ?></span></td>
	 <td class="text-center"><a class="btn btn-shadow btn-success btn-xs"><i class="icon-eye-open"></i> View</a></td>
				
</tr>
<?php

 include 'lib/modals/modal-patient-list.php';

?>