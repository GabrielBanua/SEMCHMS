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
			$date = date("Y-m-d");	
			$Year = date('Y',strtotime($date));
			$Month = date('m',strtotime($date));

		$stmt = $db->prepare("insert into users values('',?,?,?,?,?,?,?,?,?)");
			$stmt->bindParam(1,$Username);
			$stmt->bindParam(2,$Pass);
			$stmt->bindParam(3,$Firstname);
			$stmt->bindParam(5,$Lastname);
			$stmt->bindParam(4,$Middlename);
			$stmt->bindParam(6,$Gender);
			$stmt->bindParam(7,$Position);
			$stmt->bindParam(8,$Month);
			$stmt->bindParam(9,$Year);
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
			$date = date("Y-m-d");	
			$Year = date('Y',strtotime($date));
			$Month = date('m',strtotime($date));

	
		$stmt = $db->prepare("insert into Patient values('',?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
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
			$stmt->bindParam(18,$Month);
			$stmt->bindParam(19,$Year);
			$stmt->execute();

			$Last_ID = $db->lastInsertId();
			$Past_pre = mysql_real_escape_string($_POST['PP_HEATH']);
			$Treatment = mysql_real_escape_string($_POST['TRMT']);
			$Medication = mysql_real_escape_string($_POST['MEDCT']);
			$Disease = mysql_real_escape_string($_POST['DISE_DISO']);
			$Hospitalized = mysql_real_escape_string($_POST['HPTL']);

		$sql = "INSERT INTO `patient_medical_issue` (`P_ID`, `PP_HEATH`, `TRMT`, `MEDCT`, `DISE_DISO`, `HPTL`, `MONTH`, `YEAR`) VALUES ('$Last_ID', '$Past_pre', '$Treatment', '$Medication', '$Disease', '$Hospitalized', '$Month', '$Year')";
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
			$Formal_ed = mysql_real_escape_string($_POST['YEARS_FE']);
			$CB_H = mysql_real_escape_string($_POST['CB_HEALTH_COND']);
			$TU_H = mysql_real_escape_string($_POST['TU_HEALTH_COND']);

 		$sql = "INSERT INTO `adult` (`PHY_HEALTH`, `MENT_EMO_HEAl`, `SIG_INJ`, `SMOKE`, `ALCO_DRUGS`, `ASSIST_DEV`, `PERS_ASSIST`, `YEARS_FE`, `DOM_HAND`, `CB_HEALTH_COND`, `TU_HEALTH_COND`, `PMI_ID`, `MONTH`, `YEAR`) VALUES ('$Physical', '$Mental', '$Significant', '$Smoke', '$Alcohol', '$Assistive', '$Person_Ass', '$Formal_ed', '$Dominant', '$CB_H', '$TU_H', '$Last_PMID', '$Month', '$Year')";
 		$stmt = $db->prepare($sql);
 		$stmt -> execute();

}
//update patient code
else if($page == 'UpdatePatient'){
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
			$Bday = date('Y-m-d',strtotime($Birthday));
			$DATE_REGISTER = $timezone;

			$Dominant = mysql_real_escape_string($_POST['DOM_HAND']);
			$Physical = mysql_real_escape_string($_POST['PHY_HEALTH']);	
	
		$stmt = $db->prepare("Update Patient set P_LNAME=?, P_FNAME=?, P_MNAME=?, P_GNDR=?, P_BDATE=?, P_AGE=?, P_TEMP=?, P_WGHT=?, P_HGHT=?, P_TYPE=?, P_ADD=?, P_CN=?, P_OCCU=?, P_REL=?, P_CVL_STAT=?, DATE_REG=?, P_OCCU_FBW=? where P_ID = ?");
			$stmt->bindParam(1,$Lastname);
			$stmt->bindParam(2,$Firstname);
			$stmt->bindParam(3,$Middlename);
			$stmt->bindParam(4,$Gender);
			$stmt->bindParam(5,$Bday);
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
//delete user code
else if($page == 'DeleteUser'){
require 'lib/Db.config.pdo.php';

		$ID = mysql_real_escape_string($_POST['User_id']);

		$sql = "DELETE FROM users WHERE User_id = $ID";
		$stmt = $db->prepare($sql);
 		$stmt -> execute();

}
//update user code
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
//set schedule code
else if($page == 'SetSched'){
require 'lib/Db.config.pdo.php';

			$P_ID = mysql_real_escape_string($_POST['P_ID']);
			$Sched_date = mysql_real_escape_string($_POST['SCHEDULE_DATE']);
			$Sched_time = mysql_real_escape_string($_POST['SCHEDULE_TIME']);
			$Sched_purpose = mysql_real_escape_string($_POST['SCHEDULE_PURPOSE']);
			$Time = date('H:i:s', strtotime($Sched_time. ' +15 minutes'));
			$sqldate = date('Y-m-d',strtotime($Sched_date)); 
			
				$stmt = $db->prepare("insert into schedule values('',?,?,?,?)");
					$stmt->bindParam(1,$P_ID);
					$stmt->bindParam(2,$sqldate);
					$stmt->bindParam(3,$Time);
					$stmt->bindParam(4,$Sched_purpose);
					$stmt->execute();
			
}
else if($page == 'CheckSched'){
require 'lib/Db.config.php';

			$P_ID = mysql_real_escape_string($_POST['P_ID']);
			$Sched_date = mysql_real_escape_string($_POST['SCHEDULE_DATE']);
			$Sched_time = mysql_real_escape_string($_POST['SCHEDULE_TIME']);
			$Sched_purpose = mysql_real_escape_string($_POST['SCHEDULE_PURPOSE']);
			$Time = date('H:i:s', strtotime($Sched_time. ' +15 minutes'));
			$sqldate = date('Y-m-d',strtotime($Sched_date)); 

				$sql = "SELECT SCHEDULE_DATE, SCHEDULE_TIME, SCHEDULE_PURPOSE FROM schedule WHERE SCHEDULE_DATE = '$sqldate' AND (SCHEDULE_TIME = '$Time') AND SCHEDULE_PURPOSE = '$Sched_purpose'";
				$Check = mysql_query($sql);
				$count = mysql_num_rows($Check);

				if($count > 0){
					echo "Taken";
				}else{
					echo "Success";
				}
}
else if($page == 'UpdateSched'){
require 'lib/Db.config.pdo.php';

			$Sched_ID = mysql_real_escape_string($_POST['Sched_Id']);
			$Sched_date = mysql_real_escape_string($_POST['SCHEDULE_DATE']);
			$Sched_time = mysql_real_escape_string($_POST['SCHEDULE_TIME']);
			$Sched_purpose = mysql_real_escape_string($_POST['SCHEDULE_PURPOSE']);
			$Time = date('H:i:s', strtotime($Sched_time));
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
else if($page == 'addMedicine'){
require 'lib/Db.config.pdo.php';

			$MED_CAT = mysql_real_escape_string($_POST['MEDICINE_CAT']);
			$MED_TYPE = mysql_real_escape_string($_POST['MEDICINE_TYPE']);
			$MED_GNAME = mysql_real_escape_string($_POST['MEDICINE_GNAME']);
			$MED_BNAME = mysql_real_escape_string($_POST['MEDICINE_BNAME']);
			$MED_DFORM = mysql_real_escape_string($_POST['MEDICINE_DFORM']);
			$MED_DOSE = mysql_real_escape_string($_POST['MEDICINE_DOSE']);
			$date = date("Y-m-d");	
			$Year = date('Y',strtotime($date));
			$Month = date('m',strtotime($date));

		$stmt = $db->prepare("insert into medicine values('',?,?,?,?,?,?,?,?)");
			$stmt->bindParam(1,$MED_CAT);
			$stmt->bindParam(2,$MED_TYPE);
			$stmt->bindParam(3,$MED_GNAME);
			$stmt->bindParam(4,$MED_BNAME);
			$stmt->bindParam(5,$MED_DFORM);
			$stmt->bindParam(6,$MED_DOSE);
			$stmt->bindParam(7,$Month);
			$stmt->bindParam(8,$Year);
			$stmt->execute();

}
else if($page == 'MedicineName'){
require 'lib/Db.config.php';

			$INV_MEDTYPE = mysql_real_escape_string($_POST['INV_MEDTYPE']);
			$INV_MEDCAT = mysql_real_escape_string($_POST['INV_MEDCAT']);

	$sql = "SELECT MEDICINE_GNAME FROM medicine WHERE MEDICINE_TYPE = '$INV_MEDTYPE' AND MEDICINE_CAT = '$INV_MEDCAT' GROUP BY MEDICINE_GNAME";
			$do = mysql_query($sql);
			$count = mysql_num_rows($do);


	if($count > 0){
		while($gname = mysql_fetch_array($do)){
			echo "<option value='";echo $gname['MEDICINE_GNAME'];echo "'>"; echo $gname['MEDICINE_GNAME']; echo "</option>";
		}
	}else{
		echo "<option>No medicine found!</option>";
	}

}
else if($page == 'MedicineBName'){
require 'lib/Db.config.php';

			$INV_MEDGNAME = mysql_real_escape_string($_POST['INV_MEDGNAME']);

	$sql = "SELECT MEDICINE_BNAME FROM medicine WHERE MEDICINE_GNAME = '$INV_MEDGNAME' GROUP BY MEDICINE_BNAME";
			$do = mysql_query($sql);
			$count = mysql_num_rows($do);

	if($count > 0){
		while($bname = mysql_fetch_array($do)){
			echo "<option value='";echo $bname['MEDICINE_BNAME'];echo "'>"; echo $bname['MEDICINE_BNAME']; echo "</option>";
		}
	}else{
		echo "<option>No medicine found!</option>";
	}

}
else if($page == 'MedicineDF'){
require 'lib/Db.config.php';

			$MedCat = mysql_real_escape_string($_POST['MedCat']);
			$Medtype = mysql_real_escape_string($_POST['Medtype']);
			$MedGname = mysql_real_escape_string($_POST['Medgname']);
			$MedDform = mysql_real_escape_string($_POST['MedDform']);
			$MedBN = mysql_real_escape_string($_POST['MedBname']);

	$sql = "SELECT MEDICINE_DOSE FROM medicine WHERE (MEDICINE_BNAME = '$MedBN' AND MEDICINE_CAT ='$MedCat' AND (MEDICINE_DFORM = '$MedDform')) GROUP BY MEDICINE_DOSE";
			$do = mysql_query($sql);

		while($DS = mysql_fetch_array($do)){
			echo "<option value='";echo $DS['MEDICINE_DOSE'];echo "'>";  echo $DS['MEDICINE_DOSE']; echo "</option>";
		}

}
else if($page == 'AddInventory'){
require 'lib/Db.config.pdo.php';
require 'lib/Db.config.php';

			$MedCat = mysql_real_escape_string($_POST['MEDICINE_CAT']);
			$Medtype = mysql_real_escape_string($_POST['MEDICINE_TYPE']);
			$MedGname = mysql_real_escape_string($_POST['MEDICINE_GNAME']);
			$MedDform = mysql_real_escape_string($_POST['MEDICINE_DFORM']);
			$MedBN = mysql_real_escape_string($_POST['MEDICINE_BNAME']);
			$MedDose = mysql_real_escape_string($_POST['MEDICINE_DOSE']);
			$Supplier = mysql_real_escape_string($_POST['SUPPLIER']);
			$EXPDATE = mysql_real_escape_string($_POST['EXPDATE']);
			$DATEAR = mysql_real_escape_string($_POST['DATEARR']);
			$Qty = mysql_real_escape_string($_POST['QTY']);
			$DateExp = date('Y-m-d',strtotime($EXPDATE)); 
			$DateArr = date('Y-m-d',strtotime($DATEAR)); 
			$QtyHistory = $Qty;

	$sql = "SELECT MEDICINE_ID FROM medicine WHERE MEDICINE_DOSE = '$MedDose' AND MEDICINE_BNAME = '$MedBN' AND(MEDICINE_GNAME = '$MedGname' AND MEDICINE_CAT = '$MedCat') AND MEDICINE_TYPE = '$Medtype'";
			$do = mysql_query($sql);
			$id = mysql_fetch_array($do);
			$MedID = $id['MEDICINE_ID'];

	$stmt = $db->prepare("insert into inventory values('',?,?,?,?,?,?)");
			$stmt->bindParam(1,$MedID);
			$stmt->bindParam(2,$Qty);
			$stmt->bindParam(3,$Supplier);
			$stmt->bindParam(4,$DateExp);
			$stmt->bindParam(5,$DateArr);
			$stmt->bindParam(6,$QtyHistory);
			$stmt->execute();
}
else if($page == 'addTreatment'){
require 'lib/Db.config.pdo.php';
require 'lib/Db.config.php';

			$Diagnosis = mysql_real_escape_string($_POST['DGN']);
			$Treatment = mysql_real_escape_string($_POST['TRMT']);
			$Remarks = mysql_real_escape_string($_POST['RMKS']);
			$Follow = mysql_real_escape_string($_POST['FPCHK']);
			$Doctor = mysql_real_escape_string($_POST['DOC']);
			$MedicalRec_ID = mysql_real_escape_string($_POST['MRID']);
				
				$sqldate = date('Y-m-d',strtotime($Follow));
				$Status = "Completed";

				$sql = "SELECT * FROM users WHERE User_id = '$Doctor'";
				$doc = mysql_query($sql);
				$row = mysql_fetch_array($doc);
				$User_id = $row['User_id'];

				$stmt = $db->prepare("insert into treatment values('',?,?,?,?,?,?)");
						$stmt->bindParam(1,$MedicalRec_ID);
						$stmt->bindParam(2,$Diagnosis);
						$stmt->bindParam(3,$Treatment);
						$stmt->bindParam(4,$Remarks);
						$stmt->bindParam(5,$sqldate);
						$stmt->bindParam(6,$User_id);
						$stmt->execute();

				$MR = $db->prepare("Update medical_record set MR_STATUS=? where MR_ID=?");
						$MR->bindParam(1,$Status);
						$MR->bindParam(2,$MedicalRec_ID);
						$MR->execute();

}
else if($page == 'addMedicalRecord'){
require 'lib/Db.config.pdo.php';
require 'lib/Db.config.php';
			$MedRillness = mysql_real_escape_string($_POST['MedRillness']);
			$MedRBP = mysql_real_escape_string($_POST['MedRBP']);
			$MedRWeight = mysql_real_escape_string($_POST['MedRWeight']);
			$MedRTemp = mysql_real_escape_string($_POST['MedRTemp']);
			$MedRDate = mysql_real_escape_string($_POST['MedRDate']);
			$Sched_ID = mysql_real_escape_string($_POST['Sched_ID']);
			$sqldate = date('Y-m-d H:i:s',strtotime($MedRDate));
			$date = date("Y-m-d");
			$Year = date('Y',strtotime($date));
			$Month = date('m',strtotime($date));
			$Status = "Pending";

	$stmt = $db->prepare("insert into medical_record values('',?,?,?,?,?,?,?,?,?)");
			$stmt->bindParam(1,$MedRillness);
			$stmt->bindParam(2,$MedRBP);
			$stmt->bindParam(3,$MedRWeight);
			$stmt->bindParam(4,$MedRTemp);
			$stmt->bindParam(5,$sqldate);
			$stmt->bindParam(6,$Month);
			$stmt->bindParam(7,$Year);
			$stmt->bindParam(8,$Sched_ID);
			$stmt->bindParam(9,$Status);
			$stmt->execute();
}
else if($page == 'DoctorList'){
require 'lib/Db.config.pdo.php';
require 'lib/Db.config.php';

	$sql = "SELECT *, CONCAT('Dr. ',Firstname,' ',Middlename,' ',Lastname) AS Fullname FROM users WHERE Position = 'Doctor'";
			$do = mysql_query($sql);
			$count = mysql_num_rows($do);

	if($count > 0){
		while($doc = mysql_fetch_array($do)){
			echo "<option value='";echo $doc['User_id'];echo "'>"; echo $doc['Fullname']; echo "</option>";
		}
	}else{
		echo "<option>No registered doctor</option>";
	}			
}

?>