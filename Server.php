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
		$timezone = date("Ymd");
		$DATE_REGISTER = $timezone;

	$Dominant = mysql_real_escape_string($_POST['DOM_HAND']);
	$Physical = mysql_real_escape_string($_POST['PHY_HEALTH']);	
	
		$stmt = $db->prepare("insert into Patient values('',?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
		$stmt->bindParam(1,$Lastname);
		$stmt->bindParam(2,$Firstname);
		$stmt->bindParam(3,$Middlename);
		$stmt->bindParam(4,$Gender);
		$stmt->bindParam(5,$Birthday);
		$stmt->bindParam(6,$Age);
		$stmt->bindParam(7,$Weight);
		$stmt->bindParam(8,$Height);
		$stmt->bindParam(9,$Temperature);
		$stmt->bindParam(10,$Type);
		$stmt->bindParam(11,$Address);
		$stmt->bindParam(12,$Contact);
		$stmt->bindParam(13,$Occupation);
		$stmt->bindParam(14,$Religion);
		$stmt->bindParam(15,$Civil);
		$stmt->bindParam(16,$DATE_REGISTER);
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
}
else if($page == 'DeleteUser'){
require 'lib/Db.config.pdo.php';

		$ID = mysql_real_escape_string($_POST['User_id']);

		$sql = "DELETE FROM users WHERE User_id = $ID";
		$stmt = $db->prepare($sql);
 		$stmt -> execute();

}
/*else if($page == 'viewPatient'){
	require 'lib/Db.config.pdo.php';
	$stmt = $db->prepare("Select P_ID, P_GNDR, P_TYPE, CONCAT(P_FNAME,' ', P_LNAME) AS FullName from patient");
	$stmt->execute();
	while($row = $stmt->fetch()){
		?>
		<tr>
			<td><p>P<?php echo $row['P_ID'] ?></p></td>
			<td><?php echo $row['FullName'] ?></td>
			<td><?php echo $row['P_GNDR'] ?></td>
			<td><?php echo $row['P_TYPE'] ?></td>
			<td align="center">
				<a class="btn btn-primary btn-xs" href="view-patient-profile.php"><i class="icon-eye-open"></i></a>
				<a class="btn btn-danger btn-xs" href="add-patient.php"><i class="icon-pencil"></i></a>
			</td>
		</tr>
		<?php
	}
}*/
/*else if($page == 'viewUser'){
	require 'lib/Db.config.pdo.php';
	$stmt = $db->prepare("Select User_id, Username, Password, Position, CONCAT(Firstname,' ',Middlename,' ',Lastname) AS FullName from users");
	$stmt->execute();
	while($row = $stmt->fetch()){
		?>
		<tr class="gradeX">
            <td><?php echo $row['User_id'] ?></td>
            <td><?php echo $row['Username'] ?></td>
            <td><?php echo $row['Password'] ?></td>
            <td><?php echo $row['FullName'] ?></td>
            <td><?php echo $row['Position'] ?></td>
            <td class="center hidden-phone">
			<a class="btn btn-success btn-xs" href="add-user.php">Edit</a>
            <a class="btn btn-danger btn-xs" href="">delete</a>
			</td>
        </tr>
		<?php
	}
}*/
?>