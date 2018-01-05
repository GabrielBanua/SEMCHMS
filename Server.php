<?php

error_reporting(0);


$page = isset($_GET['p'])?$_GET['p']:'';

//add new user
if($page == 'addNewUser'){
require 'lib/Db.config.pdo.php';
require 'lib/password.php';
$Username = mysql_real_escape_string($_POST['UN']);
$Password = mysql_real_escape_string($_POST['PW']);
$Firstname = mysql_real_escape_string($_POST['FN']);
$Lastname = mysql_real_escape_string($_POST['LN']);
$Middlename = mysql_real_escape_string($_POST['MN']);
$Gender = mysql_real_escape_string($_POST['GN']);
$Position = mysql_real_escape_string($_POST['PS']);
$Pass = password_hash($Password, PASSWORD_BCRYPT, array("cost" => 12));

		$stmt = $db->prepare("insert into users values('',?,?,?,?,?,?,?)");
		$stmt->bindParam(1,$Username);
		$stmt->bindParam(2,$Pass);
		$stmt->bindParam(3,$Firstname);
		$stmt->bindParam(5,$Lastname);
		$stmt->bindParam(4,$Middlename);
		$stmt->bindParam(6,$Gender);
		$stmt->bindParam(7,$Position);
		$stmt->execute();
} 
//add new patient
if($page == 'addNewPatient'){
	require 'lib/Db.config.pdo.php';

	$Lastname = mysql_real_escape_string($_POST['P_LNAME']);
	$Firstname = mysql_real_escape_string($_POST['P_FNAME']);
	$Middlename = mysql_real_escape_string($_POST['P_MNAME']);
	$Gender = mysql_real_escape_string($_POST['P_GNDR']);
	$Birthday = mysql_real_escape_string($_POST['P_BDATE']);
	$Age = mysql_real_escape_string($_POST['P_AGE']);
	$Temperature = mysql_real_escape_string($_POST['P_TEMP']);
	$Weight = mysql_real_escape_string($_POST['P_WGHT']);
	$Height = mysql_real_escape_string($_POST['P_HGHT']);
	$Type = mysql_real_escape_string($_POST['P_TYPE']);
	$Address = mysql_real_escape_string($_POST['P_ADD']);
	$Contact = mysql_real_escape_string($_POST['P_CN']);
	$Religion = mysql_real_escape_string($_POST['P_REL']);
	$Civil = mysql_real_escape_string($_POST['P_CVL_STAT']);
	$Date_Reg = mysql_real_escape_string($_POST['DATE_REG']);
	$Occupation = mysql_real_escape_string($_POST['P_OCCU']);
	$OccupationFBW = mysql_real_escape_string($_POST['P_OCCU_FBW']);
		$timezone = date("Ymd");
		$DATE_REGISTER = $timezone;

	$Dominant = mysql_real_escape_string($_POST['DOM_HAND']);
	$Physical = mysql_real_escape_string($_POST['PHY_HEALTH']);	
	
		$stmt = $db->prepare("insert into Patient values('',?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
		$stmt->bindParam(1,$Lastname);
		$stmt->bindParam(2,$Firstname);
		$stmt->bindParam(3,$Middlename);
		$stmt->bindParam(4,$Gender);
		$stmt->bindParam(5,$Birthday);
		$stmt->bindParam(6,$Age);
		$stmt->bindParam(8,$Weight);
		$stmt->bindParam(9,$Height);
		$stmt->bindParam(7,$Temperature);
		$stmt->bindParam(10,$Type);
		$stmt->bindParam(11,$Address);
		$stmt->bindParam(12,$Contact);
		$stmt->bindParam(13,$Occupation);
		$stmt->bindParam(14,$Religion);
		$stmt->bindParam(15,$Civil);
		$stmt->bindParam(16,$DATE_REGISTER);
		$stmt->bindParam(17,$OccupationFBW);
		$stmt->execute();

			$Last_ID = $db->lastInsertId();
			$Past_pre = mysql_real_escape_string($_POST['PP_HEATH']);
			$Treatment = mysql_real_escape_string($_POST['TRMT']);
			$Medication = mysql_real_escape_string($_POST['MEDCT']);
			$Disease = mysql_real_escape_string($_POST['DISE_DISO']);
			$Hospitalized = mysql_real_escape_string($_POST['HPTL']);

		$sql = "INSERT INTO `patient_medical_issue` (`P_ID`, `PP_HEATH`, `TRMT`, `MEDCT`, `DISE_DISO`, `HPTL`) VALUES ('$Last_ID', '$Past_pre', '$Treatment', '$Medication', '$Disease', '$Hospitalized')";
 		$stmt = $db->prepare($sql);
 		$stmt -> execute();

 			$Last_PMID = $db->lastInsertId();
			$Dominant = mysql_real_escape_string($_POST['DOM_HAND']);
			$Physical = mysql_real_escape_string($_POST['PHY_HEALTH']);
			$Mental = mysql_real_escape_string($_POST['MENT_EMO_HEAl']);
			$Significant = mysql_real_escape_string($_POST['SIG_INJ']);
			$Smoke = mysql_real_escape_string($_POST['SMOKE']);
			$Alcohol = mysql_real_escape_string($_POST['ALCO_DRUGS']);
			$Assistive = mysql_real_escape_string($_POST['ASSIST_DEV']);
			$Person_Ass = mysql_real_escape_string($_POST['PERS_ASSIST']);
			$Marital_stat = mysql_real_escape_string($_POST['MARITAL_STAT']);
			$Formal_ed = mysql_real_escape_string($_POST['YEARS_FE']);
			$CB_H = mysql_real_escape_string($_POST['CB_HEALTH_COND']);
			$TU_H = mysql_real_escape_string($_POST['TU_HEALTH_COND']);

 		$sql = "INSERT INTO `adult` (`PHY_HEALTH`, `MENT_EMO_HEAl`, `SIG_INJ`, `SMOKE`, `ALCO_DRUGS`, `ASSIST_DEV`, `PERS_ASSIST`, `MARITAL_STAT`, `YEARS_FE`, `DOM_HAND`, `CB_HEALTH_COND`, `TU_HEALTH_COND`, `PMI_ID`) VALUES ('$Physical', '$Mental', '$Significant', '$Smoke', '$Alcohol', '$Assistive', '$Person_Ass', '$Marital_stat', '$Formal_ed', '$Dominant', '$CB_H', '$TU_H', '$Last_PMID')";
 		$stmt = $db->prepare($sql);
 		$stmt -> execute();
}else if($page == 'UpdatePatient'){
	require 'lib/Db.config.pdo.php';

	$P_ID = mysql_real_escape_string($_POST['P_ID']);
	$Lastname = mysql_real_escape_string($_POST['P_LNAME']);
	$Firstname = mysql_real_escape_string($_POST['P_FNAME']);
	$Middlename = mysql_real_escape_string($_POST['P_MNAME']);
	$Gender = mysql_real_escape_string($_POST['P_GNDR']);
	$Birthday = mysql_real_escape_string($_POST['P_BDATE']);
	$Age = mysql_real_escape_string($_POST['P_AGE']);
	$Temperature = mysql_real_escape_string($_POST['P_TEMP']);
	$Weight = mysql_real_escape_string($_POST['P_WGHT']);
	$Height = mysql_real_escape_string($_POST['P_HGHT']);
	$Type = mysql_real_escape_string($_POST['P_TYPE']);
	$Address = mysql_real_escape_string($_POST['P_ADD']);
	$Contact = mysql_real_escape_string($_POST['P_CN']);
	$Religion = mysql_real_escape_string($_POST['P_REL']);
	$Civil = mysql_real_escape_string($_POST['P_CVL_STAT']);
	$Date_Reg = mysql_real_escape_string($_POST['DATE_REG']);
	$Occupation = mysql_real_escape_string($_POST['P_OCCU']);
	$OccupationFBW = mysql_real_escape_string($_POST['P_OCCU_FBW']);
		$timezone = date("Ymd");
		$DATE_REGISTER = $timezone;

	$Dominant = mysql_real_escape_string($_POST['DOM_HAND']);
	$Physical = mysql_real_escape_string($_POST['PHY_HEALTH']);	
	
		$stmt = $db->prepare("Update Patient set P_LNAME=?, P_FNAME=?, P_MNAME=?, P_GNDR=?, P_BDATE=?, P_AGE=?, P_TEMP=?, P_WGHT=?, P_HGHT=?, P_TYPE=?, P_ADD=?, P_CN=?, P_OCCU=?, P_REL=?, P_CVL_STAT=?, DATE_REG=?, P_OCCU_FBW=? where P_ID = ?");
		$stmt->bindParam(1,$Lastname);
		$stmt->bindParam(2,$Firstname);
		$stmt->bindParam(3,$Middlename);
		$stmt->bindParam(4,$Gender);
		$stmt->bindParam(5,$Birthday);
		$stmt->bindParam(6,$Age);
		$stmt->bindParam(8,$Weight);
		$stmt->bindParam(9,$Height);
		$stmt->bindParam(7,$Temperature);
		$stmt->bindParam(10,$Type);
		$stmt->bindParam(11,$Address);
		$stmt->bindParam(12,$Contact);
		$stmt->bindParam(13,$Occupation);
		$stmt->bindParam(14,$Religion);
		$stmt->bindParam(15,$Civil);
		$stmt->bindParam(16,$DATE_REGISTER);
		$stmt->bindParam(17,$OccupationFBW);
		$stmt->bindParam(18,$P_ID);
		$stmt->execute();

			$Past_pre = mysql_real_escape_string($_POST['PP_HEATH']);
			$Treatment = mysql_real_escape_string($_POST['TRMT']);
			$Medication = mysql_real_escape_string($_POST['MEDCT']);
			$Disease = mysql_real_escape_string($_POST['DISE_DISO']);
			$Hospitalized = mysql_real_escape_string($_POST['HPTL']);

		$sql = "UPDATE `patient_medical_issue` SET PP_HEATH='$Past_pre', TRMT='$Treatment', MEDCT='$Medication', DISE_DISO='$Disease', HPTL='$Hospitalized' WHERE P_ID=$P_ID";
 		$stmt = $db->prepare($sql);
 		$stmt -> execute();

 			$Last_PMID = $db->lastInsertId();
			$Dominant = mysql_real_escape_string($_POST['DOM_HAND']);
			$Physical = mysql_real_escape_string($_POST['PHY_HEALTH']);
			$Mental = mysql_real_escape_string($_POST['MENT_EMO_HEAl']);
			$Significant = mysql_real_escape_string($_POST['SIG_INJ']);
			$Smoke = mysql_real_escape_string($_POST['SMOKE']);
			$Alcohol = mysql_real_escape_string($_POST['ALCO_DRUGS']);
			$Assistive = mysql_real_escape_string($_POST['ASSIST_DEV']);
			$Person_Ass = mysql_real_escape_string($_POST['PERS_ASSIST']);
			$Marital_stat = mysql_real_escape_string($_POST['MARITAL_STAT']);
			$Formal_ed = mysql_real_escape_string($_POST['YEARS_FE']);
			$CB_H = mysql_real_escape_string($_POST['CB_HEALTH_COND']);
			$TU_H = mysql_real_escape_string($_POST['TU_HEALTH_COND']);

 		$sql = "UPDATE `adult` SET PHY_HEALTH='$Physical', MENT_EMO_HEAl='$Mental', SIG_INJ='$Significant', SMOKE='$Smoke', ALCO_DRUGS='$Alcohol', ASSIST_DEV='$Assistive', PERS_ASSIST='$Person_Ass', MARITAL_STAT='$Marital_stat', YEARS_FE='$Formal_ed', DOM_HAND='$Dominant', CB_HEALTH_COND='$CB_H', TU_HEALTH_COND='$TU_H' WHERE PMI_ID=$P_ID";
 		$stmt = $db->prepare($sql);
 		$stmt -> execute();
}
else if($page == 'DeleteUser'){
require 'lib/Db.config.pdo.php';

		$ID = mysql_real_escape_string($_POST['User_id']);

		$sql = "DELETE FROM users WHERE User_id = $ID";
		$stmt = $db->prepare($sql);
 		$stmt -> execute();

}
else if($page == 'UpdateUser'){
require 'lib/Db.config.pdo.php';

	$ID = mysql_real_escape_string($_POST['User_id']);
	$Username = mysql_real_escape_string($_POST['UN']);
	$Password = mysql_real_escape_string($_POST['PW']);
	$Firstname = mysql_real_escape_string($_POST['FN']);
	$Lastname = mysql_real_escape_string($_POST['LN']);
	$Middlename = mysql_real_escape_string($_POST['MN']);
	$Gender = mysql_real_escape_string($_POST['GN']);
	$Position = mysql_real_escape_string($_POST['PS']);
	$Pass = password_hash($Password, PASSWORD_BCRYPT, array("cost" => 12));
	
	$stmt = $db->prepare("update users set Username=?, Password=?, Firstname=?, Middlename=?, Lastname=?, Gender=?, Position=? where User_id=?");
	$stmt->bindParam(1,$Username);
	$stmt->bindParam(2,$Pass);
	$stmt->bindParam(3,$Firstname);
	$stmt->bindParam(5,$Lastname);
	$stmt->bindParam(4,$Middlename);
	$stmt->bindParam(6,$Gender);
	$stmt->bindParam(7,$Position);
	$stmt->bindParam(8,$ID);
	$stmt->execute();
		
}
else if($page == 'SetSched'){
require 'lib/Db.config.pdo.php';

$P_ID = mysql_real_escape_string($_POST['P_ID']);
$Sched_date = mysql_real_escape_string($_POST['SCHEDULE_DATE']);
$Sched_time = mysql_real_escape_string($_POST['SCHEDULE_TIME']);
$Sched_purpose = mysql_real_escape_string($_POST['SCHEDULE_PURPOSE']);
$Time = date('h:i A', strtotime($Sched_time));
$sqldate = date('Y-m-d',strtotime($Sched_date)); 

	
		$stmt = $db->prepare("insert into schedule values('',?,?,?,?)");
		$stmt->bindParam(1,$P_ID);
		$stmt->bindParam(2,$sqldate);
		$stmt->bindParam(3,$Time);
		$stmt->bindParam(4,$Sched_purpose);
		$stmt->execute();

}
else if($page == 'UpdateSched'){
require 'lib/Db.config.pdo.php';

$Sched_ID = mysql_real_escape_string($_POST['Sched_Id']);
$Sched_date = mysql_real_escape_string($_POST['SCHEDULE_DATE']);
$Sched_time = mysql_real_escape_string($_POST['SCHEDULE_TIME']);
$Sched_purpose = mysql_real_escape_string($_POST['SCHEDULE_PURPOSE']);
$Time = date('h:i A', strtotime($Sched_time));
$sqldate = date('Y-m-d',strtotime($Sched_date)); 
	
		$stmt = $db->prepare("Update schedule set SCHEDULE_DATE=?, SCHEDULE_TIME=?, SCHEDULE_PURPOSE=? where SCHEDULE_ID=?");
		$stmt->bindParam(1,$sqldate);
		$stmt->bindParam(2,$Time);
		$stmt->bindParam(3,$Sched_purpose);
		$stmt->bindParam(4,$Sched_ID);
		$stmt->execute();
}
else if($page == 'DeleteSched'){
require 'lib/Db.config.pdo.php';

		$ID = mysql_real_escape_string($_POST['SCHEDULE_ID']);

		$sql = "DELETE FROM schedule WHERE SCHEDULE_ID = $ID";
		$stmt = $db->prepare($sql);
 		$stmt -> execute();

}

?>