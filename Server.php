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
			$License = mysql_real_escape_string($_POST['LCN']);
			$Date_end = mysql_real_escape_string($_POST['DE']);
			$Status = 'Active';
			$DateEnd_con = date('Y-m-d',strtotime($Date_end)); 
			$Pass = password_hash($Password, PASSWORD_BCRYPT, array("cost" => 12));
			$date = date("Y-m-d");	
			$Year = date('Y',strtotime($date));
			$Month = date('M',strtotime($date));

		$stmt = $db->prepare("insert into users values('',?,?,?,?,?,?,?,?,?,?,?,?)");
			$stmt->bindParam(1,$Username);
			$stmt->bindParam(2,$Pass);
			$stmt->bindParam(3,$Firstname);
			$stmt->bindParam(5,$Lastname);
			$stmt->bindParam(4,$Middlename);
			$stmt->bindParam(6,$Gender);
			$stmt->bindParam(7,$Position);
			$stmt->bindParam(8,$License);
			$stmt->bindParam(9,$date);
			$stmt->bindParam(10,$Status);
			$stmt->bindParam(11,$Month);
			$stmt->bindParam(12,$Year);
			$stmt->execute();
} 
//add new patient
if($page == 'addNewPatient'){
	require 'lib/Db.config.pdo.php';

			$BRGY = mysql_real_escape_string($_POST['P_BRGY']);
			$PUROK = mysql_real_escape_string($_POST['P_PUROK']);
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
				$DATE_REGISTER = date('Y-m-d',strtotime($Date_Reg));

			$Dominant = mysql_real_escape_string($_POST['DOM_HAND']);
			$Physical = mysql_real_escape_string($_POST['PHY_HEALTH']);
			$date = date("Y-m-d");	
			$Year = date('Y',strtotime($Date_Reg));
			$Month = date('M',strtotime($Date_Reg));

	
		$stmt = $db->prepare("insert into Patient values('',?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
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
			$stmt->bindParam(20,$BRGY);
			$stmt->bindParam(21,$PUROK);
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

			$BRGY = mysql_real_escape_string($_POST['P_BRGY']);
			$PUROK = mysql_real_escape_string($_POST['P_PUROK']);
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
			$timezone = date("Y-m-d");
			$Bday = date('Y-m-d',strtotime($Birthday));
			$DATE_REGISTER = $timezone;

			$Dominant = mysql_real_escape_string($_POST['DOM_HAND']);
			$Physical = mysql_real_escape_string($_POST['PHY_HEALTH']);	
	
		$stmt = $db->prepare("Update Patient set P_LNAME=?, P_FNAME=?, P_MNAME=?, P_GNDR=?, P_BDATE=?, P_AGE=?, P_TEMP=?, P_WGHT=?, P_HGHT=?, P_TYPE=?, P_ADD=?, P_CN=?, P_OCCU=?, P_REL=?, P_CVL_STAT=?, DATE_REG=?, P_OCCU_FBW=?, P_PUROK=?, P_BRGY=? where P_ID = ?");
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
			$stmt->bindParam(18,$PUROK);
			$stmt->bindParam(19,$BRGY);
			$stmt->bindParam(20,$P_ID);
			$stmt->execute();

			$Past_pre = mysql_real_escape_string($_POST['PP_HEATH']);
			$Treatment = mysql_real_escape_string($_POST['TRMT']);
			$Medication = mysql_real_escape_string($_POST['MEDCT']);
			$Disease = mysql_real_escape_string($_POST['DISE_DISO']);
			$Hospitalized = mysql_real_escape_string($_POST['HPTL']);

		$sql = "UPDATE `patient_medical_issue` SET PP_HEATH='$Past_pre', TRMT='$Treatment', MEDCT='$Medication', DISE_DISO='$Disease', HPTL='$Hospitalized' WHERE P_ID=$P_ID";
 		$stmt = $db->prepare($sql);
 		$stmt -> execute();

 			
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
require 'lib/Db.config.php';

		$ID = mysql_real_escape_string($_POST['User_id']);

			$sql = "DELETE FROM users WHERE User_id = $ID";
			$stmt = $db->prepare($sql);
			$stmt -> execute();

}
//update user code
else if($page == 'UpdateUser'){
require 'lib/Db.config.pdo.php';
require 'lib/Db.config.php';

			$ID = mysql_real_escape_string($_POST['User_id']);
			$Username = mysql_real_escape_string($_POST['UN']);
			$Password = mysql_real_escape_string($_POST['PW']);
			$Firstname = mysql_real_escape_string($_POST['FN']);
			$Lastname = mysql_real_escape_string($_POST['LN']);
			$Middlename = mysql_real_escape_string($_POST['MN']);
			$Gender = mysql_real_escape_string($_POST['GN']);
			$Position = mysql_real_escape_string($_POST['PS']);
			$License = mysql_real_escape_string($_POST['LCN']);
			$Status = mysql_real_escape_string($_POST['STS']);
			$Date_end = mysql_real_escape_string($_POST['DE']);
			$DateEnd_con = date('Y-m-d',strtotime($Date_end));
			$Pass = password_hash($Password, PASSWORD_BCRYPT, array("cost" => 12));
			$date = date("Y-m-d");	
			$Year = date('Y',strtotime($date));
			$Month = date('M',strtotime($date));
			
			$stmt = $db->prepare("update users set Username=?, Password=?, Firstname=?, Middlename=?, Lastname=?, Gender=?, Position=?, License_No=?, STATUS=? where User_id=?");
			$stmt->bindParam(1,$Username);
			$stmt->bindParam(2,$Pass);
			$stmt->bindParam(3,$Firstname);
			$stmt->bindParam(5,$Lastname);
			$stmt->bindParam(4,$Middlename);
			$stmt->bindParam(6,$Gender);
			$stmt->bindParam(7,$Position);
			$stmt->bindParam(8,$License);
			$stmt->bindParam(9,$Status);
			$stmt->bindParam(10,$ID);
			$stmt->execute();

						$EndDate_check = mysql_query("SELECT * FROM ended_user WHERE User_end_id = '$ID'");
						$count_arr = mysql_fetch_array($EndDate_check);
						$count_EndDate = mysql_num_rows($EndDate_check);
						$End_ID = $count_arr['End_user_id'];

						if($count_EndDate > 0){	
							$Date_T = $db->prepare("Update ended_user set END_DATE=? where End_user_id=?");								
								$Date_T->bindParam(1,$DateEnd_con);
								$Date_T->bindParam(2,$End_ID);
								$Date_T->execute();
						}else if($count_EndDate == 0){
							if(empty($Date_end)){
								//do nothing
							}
							else{
								$Date_T = $db->prepare("insert into ended_user values('',?,?,?,?)");
								$Date_T->bindParam(1,$ID);
								$Date_T->bindParam(2,$DateEnd_con);
								$Date_T->bindParam(3,$Month);
								$Date_T->bindParam(4,$Year);
								$Date_T->execute();
							}
						}			

}else if($page == 'DeleteSched'){
require 'lib/Db.config.pdo.php';
require 'lib/Db.config.php';
	
			$ID = mysql_real_escape_string($_POST['SCHEDULE_ID']);
			$sql = "DELETE FROM schedule WHERE `SCHEDULE_ID` = '$ID'";
			$stmt = $db->prepare($sql);
			$stmt ->execute();
	
	}
//set schedule code
else if($page == 'SetSched'){
require 'lib/Db.config.pdo.php';

			$P_ID = mysql_real_escape_string($_POST['P_ID']);
			$Sched_date = mysql_real_escape_string($_POST['SCHEDULE_DATE']);
			$Sched_time = mysql_real_escape_string($_POST['SCHEDULE_TIME']);
			$Sched_purpose = mysql_real_escape_string($_POST['SCHEDULE_PURPOSE']);
			$Time = date('H:i:s', strtotime($Sched_time));
			$sqldate = date('Y-m-d',strtotime($Sched_date));
			$date = date("Y-m-d");	
			$Year = date('Y',strtotime($date));
			$Month = date('M',strtotime($date));
			
				$stmt = $db->prepare("insert into schedule values('',?,?,?,?,?,?)");
					$stmt->bindParam(1,$P_ID);
					$stmt->bindParam(2,$sqldate);
					$stmt->bindParam(3,$Time);
					$stmt->bindParam(4,$Sched_purpose);
					$stmt->bindParam(5,$Month);
					$stmt->bindParam(6,$Year);
					$stmt->execute();
			
}
else if($page == 'CheckSched'){
require 'lib/Db.config.php';
date_default_timezone_set('Asia/Manila');

			$P_ID = mysql_real_escape_string($_POST['P_ID']);
			$Sched_date = mysql_real_escape_string($_POST['SCHEDULE_DATE']);
			$Sched_time = mysql_real_escape_string($_POST['SCHEDULE_TIME']);
			$Sched_purpose = mysql_real_escape_string($_POST['SCHEDULE_PURPOSE']);

				$sqldate = date('Y-m-d',strtotime($Sched_date));
				$TimeSet = date('H:i:s', strtotime($Sched_time));
				$CheckDate = date('Y-m-d H:i:s');
				$CheckDateTime = date('Y-m-d H:i:s', strtotime($CheckDate. ' -1 minutes'));
				$MergeDateTime = date('Y-m-d H:i:s', strtotime("$sqldate $TimeSet"));
			
			if($MergeDateTime < $CheckDateTime){
				echo "Late";
			}
			else{
				$sql = "SELECT SCHEDULE_DATE, SCHEDULE_PURPOSE, SCHEDULE_TIME FROM schedule WHERE SCHEDULE_DATE = '$sqldate' AND SCHEDULE_PURPOSE = '$Sched_purpose'";
				$Check = mysql_query($sql);
				$count = mysql_num_rows($Check);

				$Db_Time;
				while($row = mysql_fetch_array($Check)){
					$Db_Time = $row['SCHEDULE_TIME'];
				}
				
				if($TimeSet == $Db_Time){
					echo "Taken";
				}else{
					echo "Success";
				}
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

else if($page == 'addMedicine'){
require 'lib/Db.config.pdo.php';

			$MED_CAT = mysql_real_escape_string($_POST['MEDICINE_CAT']);
			$MED_TYPE = mysql_real_escape_string($_POST['MEDICINE_TYPE']);
			$MED_GNAME = mysql_real_escape_string($_POST['MEDICINE_GNAME']);
			$MED_BNAME = mysql_real_escape_string($_POST['MEDICINE_BNAME']);
			$MED_DFORM = mysql_real_escape_string($_POST['MEDICINE_DFORM']);
			$MED_DOSE = mysql_real_escape_string($_POST['MEDICINE_DOSE']);
			$REORDER = mysql_real_escape_string($_POST['REORDER']);
			$date = date("Y-m-d");	
			$Year = date('Y',strtotime($date));
			$Month = date('M',strtotime($date));

		$stmt = $db->prepare("insert into medicine values('',?,?,?,?,?,?,?,?,?)");
			$stmt->bindParam(1,$MED_CAT);
			$stmt->bindParam(2,$MED_TYPE);
			$stmt->bindParam(3,$MED_GNAME);
			$stmt->bindParam(4,$MED_BNAME);
			$stmt->bindParam(5,$MED_DFORM);
			$stmt->bindParam(6,$MED_DOSE);
			$stmt->bindParam(7,$Month);
			$stmt->bindParam(8,$Year);
			$stmt->bindParam(9,$REORDER);
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
			$date = date("Y-m-d");
			$Year = date('Y',strtotime($date));
			$Month = date('M',strtotime($date));

	$sql = "SELECT MEDICINE_ID FROM medicine WHERE MEDICINE_DOSE = '$MedDose' AND MEDICINE_BNAME = '$MedBN' AND(MEDICINE_GNAME = '$MedGname' AND MEDICINE_CAT = '$MedCat') AND (MEDICINE_TYPE = '$Medtype' AND MEDICINE_DFORM = '$MedDform')";
			$do = mysql_query($sql);
			$id = mysql_fetch_array($do);
			$MedID = $id['MEDICINE_ID'];

	$stmt = $db->prepare("insert into inventory values('',?,?,?,?,?,?,?,?)");
			$stmt->bindParam(1,$MedID);
			$stmt->bindParam(2,$Qty);
			$stmt->bindParam(3,$Supplier);
			$stmt->bindParam(4,$DateExp);
			$stmt->bindParam(5,$DateArr);
			$stmt->bindParam(6,$QtyHistory);
			$stmt->bindParam(7,$Month);
			$stmt->bindParam(8,$Year);
			$stmt->execute();
	
			$Last_INVID = $db->lastInsertId();

	$checkInv = mysql_query("SELECT inventory.INV_ID, MIN(inventory.INV_ID) AS Minimum FROM inventory INNER JOIN medicine ON inventory.MEDICINE_ID = medicine.MEDICINE_ID WHERE inventory.MEDICINE_ID = '$MedID'");
		$checkResults = mysql_num_rows($checkInv);
		$checkID = mysql_fetch_array($checkInv);
		$RetrieveCheckID = $checkID['Minimum'];

	$checkAdjust = mysql_query("SELECT ADJ_ID, QUANTITY FROM adjustments WHERE INV_ID = '$RetrieveCheckID'");
		$AdjustCount = mysql_num_rows($checkAdjust);
			$AdjustResults = mysql_fetch_array($checkAdjust);
			$AdjustID = $AdjustResults['ADJ_ID'];
			$AdjustQuantity = $AdjustResults['QUANTITY'];

		$AdjustNewQuantity = $Qty + $AdjustQuantity;

		if($AdjustCount > 0){
			$updateAdjustments = $db->prepare("Update adjustments set QUANTITY = ? where ADJ_ID=?");
			$updateAdjustments->bindParam(1,$AdjustNewQuantity);
			$updateAdjustments->bindParam(2,$AdjustID);
			$updateAdjustments->execute();
		}else{
			$InsertAdjustments = $db->prepare("insert into adjustments values('',?,?)");
			$InsertAdjustments->bindParam(1,$Last_INVID);
			$InsertAdjustments->bindParam(2,$Qty);
			$InsertAdjustments->execute();
		}
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
			$DocName = mysql_real_escape_string($_POST['REFDN']);
			$DocCN = mysql_real_escape_string($_POST['REF_CN']);
			$DocADD = mysql_real_escape_string($_POST['REF_ADD']);
			$DocEmail = mysql_real_escape_string($_POST['REF_EMAIL']);
			$date = date("Y-m-d");
			$Year = date('Y',strtotime($date));
			$Month = date('M',strtotime($date));
				
				$sqldate = date('Y-m-d',strtotime($Follow));
				$Status = "Completed";

				$sql = "SELECT * FROM users WHERE User_id = '$Doctor'";
				$doc = mysql_query($sql);
				$row = mysql_fetch_array($doc);
				$User_id = $row['User_id'];

				$Last_updated_id = "SELECT * FROM treatment WHERE MR_ID = '$MedicalRec_ID'";
				$Up_ID = mysql_query($Last_updated_id);
				$Updated_ID_fetch = mysql_fetch_array($Up_ID);		
				$updated_TR_id = $Updated_ID_fetch['TRMT_ID'];

				$stmt = $db->prepare("update treatment set DIAG_DTLS=?, TREATMENT=?, REMARKS=?, User_id=? where MR_ID=?");
						$stmt->bindParam(5,$MedicalRec_ID);
						$stmt->bindParam(1,$Diagnosis);
						$stmt->bindParam(2,$Treatment);
						$stmt->bindParam(3,$Remarks);
						$stmt->bindParam(4,$User_id);
						$stmt->execute();
				
				$MR = $db->prepare("Update medical_record set MR_STATUS=? where MR_ID=?");
						$MR->bindParam(1,$Status);
						$MR->bindParam(2,$MedicalRec_ID);
						$MR->execute();
				if(empty($Follow)){
					//do nothing
				}else{
					$FCUP = $db->prepare("insert into followup_check_up values('',?,?,?,?)");
					$FCUP->bindParam(1,$updated_TR_id);
					$FCUP->bindParam(2,$sqldate);
					$FCUP->bindParam(3,$Month);
					$FCUP->bindParam(4,$Year);
					$FCUP->execute();
				}
				if(empty($DocName) || empty($DocCN) || empty($DocADD)){
					//do nothing
				}else{
					$ref = $db->prepare("insert into referral values('',?,?,?,?,?,?,?)");
						$ref->bindParam(1,$DocName);
						$ref->bindParam(2,$DocCN);
						$ref->bindParam(3,$DocADD);
						$ref->bindParam(4,$updated_TR_id);
						$ref->bindParam(5,$Month);
						$ref->bindParam(6,$Year);
						$ref->bindParam(7,$DocEmail);
					$ref->execute();
				}
}
else if($page == 'addMedicalRecord'){
require 'lib/Db.config.pdo.php';
require 'lib/Db.config.php';

			$Doc_id = mysql_real_escape_string($_POST['DOC_ID']);
			$MedRillness = mysql_real_escape_string($_POST['MedRillness']);
			$MedRBP = mysql_real_escape_string($_POST['MedRBP']);
			$MedRWeight = mysql_real_escape_string($_POST['MedRWeight']);
			$MedRTemp = mysql_real_escape_string($_POST['MedRTemp']);
			$MedRDate = mysql_real_escape_string($_POST['MedRDate']);
			$Sched_ID = mysql_real_escape_string($_POST['Sched_ID']);
			$sqldate = date('Y-m-d H:i:s',strtotime($MedRDate));
			$date = date("Y-m-d");
			$Year = date('Y',strtotime($date));
			$Month = date('M',strtotime($date));
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

	$ID = $db->lastInsertId();
	$Diagnosis = '';
	$Treatment = '';
	$Remarks = '';
	$date = date("Y-m-d");
	$sql = "INSERT INTO `treatment` (`MR_ID`, `DIAG_DTLS`, `TREATMENT`, `REMARKS`, `User_id`, `MONTH`, `YEAR`) VALUES ('$ID', '$Diagnosis', '$Treatment', '$Remarks', '$Doc_id', '$Month', '$Year')";
 		$stmt = $db->prepare($sql);
 		$stmt->execute();

}
else if($page == 'DoctorList'){
require 'lib/Db.config.pdo.php';
require 'lib/Db.config.php';

	$sql = "SELECT *, CONCAT('Dr. ',Firstname,' ',Middlename,' ',Lastname) AS Fullname FROM users WHERE Position = 'Doctor' AND STATUS = 'Active'";
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
else if($page == 'RDoctorList'){
require 'lib/Db.config.pdo.php';
require 'lib/Db.config.php';

$id = mysql_real_escape_string($_POST['MR_ID']);

	$retrieve = "SELECT * FROM `treatment` WHERE `MR_ID` = '$id'";
	$res = mysql_query($retrieve);
	$Result = mysql_fetch_array($res);

	echo $Result;
	$sql = "SELECT *, CONCAT('Dr. ',Firstname,' ',Middlename,' ',Lastname) AS Fullname FROM users WHERE Position = 'Doctor' AND STATUS = 'Active'";
	$do = mysql_query($sql);
		while($doc = mysql_fetch_array($do)){
			echo "<option value='";echo $doc['User_id']; echo "'"; if($Result['User_id'] == $doc['User_id']){echo "selected";} echo ">"; echo $doc['Fullname']; echo "</option>";
		}			
}
?>