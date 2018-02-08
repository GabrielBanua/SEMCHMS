<?php
error_reporting(0);

$page = isset($_GET['p'])?$_GET['p']:'';

if($page == 'editTreatment'){
require 'lib/Db.config.pdo.php';
require 'lib/Db.config.php';

			$Diagnosis = mysql_real_escape_string($_POST['DGNE']);
			$Treatment = mysql_real_escape_string($_POST['TRMTE']);
			$Remarks = mysql_real_escape_string($_POST['RMKSE']);
			$Follow = mysql_real_escape_string($_POST['FPCHKE']);
			$Doctor = mysql_real_escape_string($_POST['DOCE']);
			$MedicalRec_ID = mysql_real_escape_string($_POST['MRIDE']);
			$DocName = mysql_real_escape_string($_POST['REFDNE']);
			$DocCN = mysql_real_escape_string($_POST['REF_CNE']);
			$DocADD = mysql_real_escape_string($_POST['REF_ADDE']);				
			$sqldate = date('Y-m-d',strtotime($Follow));
			$date = date("Y-m-d");
			$Year = date('Y',strtotime($date));
			$Month = date('M',strtotime($date));

            //sql to fetch user_id of doctor
				$sql = "SELECT * FROM users WHERE User_id = '$Doctor'";
				$doc = mysql_query($sql);
				$row = mysql_fetch_array($doc);
				$User_id = $row['User_id'];
            //sql to fetch the treatment id
				$Last_updated_id = "SELECT * FROM treatment WHERE MR_ID = '$MedicalRec_ID'";
				$Up_ID = mysql_query($Last_updated_id);
				$Updated_ID_fetch = mysql_fetch_array($Up_ID);		
				$updated_TR_id = $Updated_ID_fetch['TRMT_ID'];

				$stmt = $db->prepare("update treatment set DIAG_DTLS=?, TREATMENT=?, REMARKS=?, F_CHECKUP=?, User_id=? where MR_ID=?");
						$stmt->bindParam(1,$Diagnosis);
						$stmt->bindParam(2,$Treatment);
						$stmt->bindParam(3,$Remarks);
						$stmt->bindParam(4,$sqldate);
                        $stmt->bindParam(5,$User_id);
                        $stmt->bindParam(6,$MedicalRec_ID);
						$stmt->execute();

						$referral_check = "SELECT * FROM referral WHERE TRMTMNT_ID = '$updated_TR_id'";
						$retrive_referral = mysql_query($referral_check);
						$count_ref = mysql_num_rows($retrive_referral);
			
				if($count_ref > 0){
					$ref = $db->prepare("update referral set RF_DOCNAME=?, RF_CN=?, RF_ADD=? where TRMTMNT_ID=?");
						$ref->bindParam(1,$DocName);
						$ref->bindParam(2,$DocCN);
						$ref->bindParam(3,$DocADD);
						$ref->bindParam(4,$updated_TR_id);
						$ref->execute();
				}else{
					$ref = $db->prepare("insert into referral values('',?,?,?,?,?,?)");
						$ref->bindParam(1,$DocName);
						$ref->bindParam(2,$DocCN);
						$ref->bindParam(3,$DocADD);
						$ref->bindParam(4,$updated_TR_id);
						$ref->bindParam(5,$Month);
						$ref->bindParam(6,$Year);
					$ref->execute();
				}			
				
}
else if($page == 'DeleteInventory'){
require 'lib/Db.config.pdo.php';
require 'lib/Db.config.php';

	$ID = mysql_real_escape_string($_POST['INV_ID']);

	$sql = "DELETE FROM inventory WHERE INV_ID = $ID";
		$stmt = $db->prepare($sql);
 		$stmt -> execute();
}
else if($page == 'DispenseMedicine'){
	require 'lib/Db.config.pdo.php';
	require 'lib/Db.config.php';
			$inv_id = mysql_real_escape_string($_POST['INV_ID']);
			$sub_qty = mysql_real_escape_string($_POST['DES_QTY']);
			$date = date("Y-m-d");
			$Year = date('Y',strtotime($date));
			$Month = date('M',strtotime($date));

			$DispenseSql = mysql_query("SELECT * FROM inventory WHERE INV_ID = '$inv_id'");
			$DispneseRes = mysql_fetch_array($DispenseSql);

			$DisQty = $DispneseRes['INV_QTY'];
			
			if($DisQty < $sub_qty){
				$Lacking = $sub_qty - $DisQty;
				$Lacking_sol = $sub_qty - $Lacking;
				$Dis_QtyRes = $DisQty - $Lacking_sol;
				echo $Lacking_sol;

					$ResultDis = $db->prepare("update inventory set INV_QTY=? where INV_ID=?");
					$ResultDis->bindParam(1,$Dis_QtyRes);
					$ResultDis->bindParam(2,$inv_id);
					$ResultDis->execute();

					$RecordDis = $db->prepare("insert into dispense values('',?)");
					$RecordDis->bindParam(1,$Dis_QtyRes);
					$RecordDis->bindParam(2,$inv_id);
					$RecordDis->execute();

			}
			else if($DisQty >= $sub_qty){
				$DisResult = $DisQty - $sub_qty;
			
					$ResultDis = $db->prepare("update inventory set INV_QTY=? where INV_ID=?");
					$ResultDis->bindParam(1,$DisResult);
					$ResultDis->bindParam(2,$inv_id);
					$ResultDis->execute();
			}
			
}
else if($page == 'Addlabrequest'){
	require 'lib/Db.config.pdo.php';
	require 'lib/Db.config.php';

	$Test_Requested = mysql_real_escape_string($_POST['T_REQ']);
	$TREAT_ID = mysql_real_escape_string($_POST['T_ID']);
	$Test_Date = date('Y-m-d');
	$date = date("Y-m-d");
	$Year = date('Y',strtotime($date));
	$Month = date('M',strtotime($date));

	$LabReq = $db->prepare("insert into lab_request values('',?,?,?,?,?)");
	$LabReq->bindParam(1,$Test_Requested);
	$LabReq->bindParam(2,$Test_Date);
	$LabReq->bindParam(3,$TREAT_ID);
	$LabReq->bindParam(4,$Month);
	$LabReq->bindParam(5,$Year);
	$LabReq->execute();

}
else if($page == 'Loadlabrequest'){
	require 'lib/Db.config.pdo.php';
	require 'lib/Db.config.php';
	
		$MED_RID = mysql_real_escape_string($_POST['MR_ID']);
		$TREMNT_ID = mysql_real_escape_string($_POST['TR_ID']);
	
		$labstmt = $db->prepare("Select * FROM ((((patient INNER JOIN schedule ON patient.P_ID = schedule.P_ID) INNER JOIN medical_record ON schedule.SCHEDULE_ID = medical_record.SCHED_ID) INNER JOIN treatment ON medical_record.MR_ID = treatment.MR_ID) INNER JOIN lab_request ON treatment.TRMT_ID = lab_request.TRMNT_ID) WHERE treatment.TRMT_ID = '$TREMNT_ID' AND medical_record.MR_ID = ' $MED_RID'");
		$labstmt->execute();
		while($LR = $labstmt->fetch()){
?>
		<tr>
			<td class="text-center"><?php echo $LR['LBR_DATE'];?></td>
			<td class="text-center"><?php echo $LR['LBR_TYPE'];?></td>
			<td class="text-center"><a class="btn btn-shadow btn-danger btn-xs" onclick="DeleteLabRequest(<?php echo $LR['LBR_ID'];?>,<?php echo $MED_RID;?>, <?php echo $TREMNT_ID;?>)"><i class="icon-trash"></i> Delete</a></td>
		</tr>
<?php
		}
}
else if($page == 'Deletelabrequest'){
	require 'lib/Db.config.pdo.php';
	require 'lib/Db.config.php';
		
		$labRequest_ID = mysql_real_escape_string($_POST['DEL_ID']);

		$sql = "DELETE FROM lab_request WHERE LBR_ID = '$labRequest_ID'";
			$stmt = $db->prepare($sql);
			$stmt -> execute();
}
else if($page == 'EditMedicineInfo'){
	require 'lib/Db.config.pdo.php';
	require 'lib/Db.config.php';

			$MED_ID = mysql_real_escape_string($_POST['MED_ID']);
			$MED_CAT = mysql_real_escape_string($_POST['MEDICINE_CAT']);
			$MED_TYPE = mysql_real_escape_string($_POST['MEDICINE_TYPE']);
			$MED_GNAME = mysql_real_escape_string($_POST['MEDICINE_GNAME']);
			$MED_BNAME = mysql_real_escape_string($_POST['MEDICINE_BNAME']);
			$MED_DFORM = mysql_real_escape_string($_POST['MEDICINE_DFORM']);
			$MED_DOSE = mysql_real_escape_string($_POST['MEDICINE_DOSE']);

			$MedStmt = $db->prepare("Update medicine set MEDICINE_CAT=?, MEDICINE_TYPE=?, MEDICINE_GNAME=?, MEDICINE_BNAME=?, MEDICINE_DFORM=?, MEDICINE_DOSE=? where MEDICINE_ID=?");
			$MedStmt->bindParam(1,$MED_CAT);
			$MedStmt->bindParam(2,$MED_TYPE);
			$MedStmt->bindParam(3,$MED_GNAME);
			$MedStmt->bindParam(4,$MED_BNAME);
			$MedStmt->bindParam(5,$MED_DFORM);
			$MedStmt->bindParam(6,$MED_DOSE);
			$MedStmt->bindParam(7,$MED_ID);
			$MedStmt->execute();
}
else if($page == 'RetrieveInventoryCAT'){
	require 'lib/Db.config.php';
	require 'lib/Db.config.pdo.php';

	$id = mysql_real_escape_string($_POST['INV_ID']);

	$retrieveCat = "Select * FROM inventory INNER JOIN medicine ON inventory.MEDICINE_ID = medicine.MEDICINE_ID WHERE inventory.INV_QTY > '0' AND inventory.INV_ID = '$id'";
	$res = mysql_query($retrieveCat);
	$Result = mysql_fetch_array($res);

		echo "<option value='";echo "Adult"; echo "'"; if($Result['MEDICINE_CAT'] == 'Adult'){echo "selected";} echo">"; echo "Tablet"; echo "</option>";
		echo "<option value='";echo "Children"; echo "'"; if($Result['MEDICINE_CAT'] == 'Children'){echo "selected";} echo">"; echo "Children"; echo "</option>";
}
else if($page == 'RetrieveInventoryTYPE'){
	require 'lib/Db.config.php';
	require 'lib/Db.config.pdo.php';

	$id = mysql_real_escape_string($_POST['INV_ID']);

	$retrieveCat = "Select * FROM inventory INNER JOIN medicine ON inventory.MEDICINE_ID = medicine.MEDICINE_ID WHERE inventory.INV_QTY > '0' AND inventory.INV_ID = '$id'";
	$res = mysql_query($retrieveCat);
	$Result = mysql_fetch_array($res);

		echo "<option value='";echo "Analgesic"; echo "'"; if($Result['MEDICINE_TYPE'] == 'Analgesic'){echo "selected";} echo">"; echo "Analgesic"; echo "</option>";
		echo "<option value='";echo "Anti-Allergy"; echo "'"; if($Result['MEDICINE_TYPE'] == 'Anti-Allergy'){echo "selected";} echo">"; echo "Anti-Allergy"; echo "</option>";
		echo "<option value='";echo "Antibiotics"; echo "'"; if($Result['MEDICINE_TYPE'] == 'Antibiotics'){echo "selected";} echo">"; echo "Antibiotics"; echo "</option>";
		echo "<option value='";echo "Diabetics"; echo "'"; if($Result['MEDICINE_TYPE'] == 'Diabetics'){echo "selected";} echo">"; echo "Diabetics"; echo "</option>";
		echo "<option value='";echo "Hypertension"; echo "'"; if($Result['MEDICINE_TYPE'] == 'Hypertension'){echo "selected";} echo">"; echo "Hypertension"; echo "</option>";
		echo "<option value='";echo "OTROS"; echo "'"; if($Result['MEDICINE_TYPE'] == 'OTROS'){echo "selected";} echo">"; echo "OTROS"; echo "</option>";
		echo "<option value='";echo "Respiratory"; echo "'"; if($Result['MEDICINE_TYPE'] == 'Respiratory'){echo "selected";} echo">"; echo "Respiratory"; echo "</option>";
		echo "<option value='";echo "Stomach/Digestive"; echo "'"; if($Result['MEDICINE_TYPE'] == 'Stomach/Digestive'){echo "selected";} echo">"; echo "Stomach/Digestive"; echo "</option>";
		echo "<option value='";echo "Vitamins"; echo "'"; if($Result['MEDICINE_TYPE'] == 'Vitamins'){echo "selected";} echo">"; echo "Vitamins"; echo "</option>";	
}
else if($page == 'RetrieveInventoryGNAME'){
	require 'lib/Db.config.php';
	require 'lib/Db.config.pdo.php';

	$id = mysql_real_escape_string($_POST['INV_ID']);

	$retrieveCat = "Select * FROM inventory INNER JOIN medicine ON inventory.MEDICINE_ID = medicine.MEDICINE_ID WHERE inventory.INV_QTY > '0' AND inventory.INV_ID = '$id'";
	$res = mysql_query($retrieveCat);
	$Result = mysql_fetch_array($res);

		$INV_MEDTYPE = mysql_real_escape_string($_POST['INV_TYPE']);
		$INV_MEDCAT = mysql_real_escape_string($_POST['INV_CAT']);
	
		$sql = "SELECT MEDICINE_GNAME FROM medicine WHERE MEDICINE_TYPE = '$INV_MEDTYPE' AND MEDICINE_CAT = '$INV_MEDCAT' GROUP BY MEDICINE_GNAME";
				$do = mysql_query($sql);
				$count = mysql_num_rows($do);

		if($count > 0){
			while($gname = mysql_fetch_array($do)){
				echo "<option value='";echo $gname['MEDICINE_GNAME']; echo "'"; if($gname['MEDICINE_GNAME'] == $Result['MEDICINE_GNAME']){echo "selected";} echo">"; echo $gname['MEDICINE_GNAME']; echo "</option>";
			}
		}else{
			echo "<option>No medicine found!</option>";
		}
}
else if($page == 'RetrieveInventoryBNAME'){
	require 'lib/Db.config.php';
	require 'lib/Db.config.pdo.php';

	$id = mysql_real_escape_string($_POST['INV_ID']);

	$retrieveCat = "Select * FROM inventory INNER JOIN medicine ON inventory.MEDICINE_ID = medicine.MEDICINE_ID WHERE inventory.INV_QTY > '0' AND inventory.INV_ID = '$id'";
	$res = mysql_query($retrieveCat);
	$Result = mysql_fetch_array($res);

	$INV_MEDGNAME = mysql_real_escape_string($_POST['INV_GNAME']);

	$sql = "SELECT MEDICINE_BNAME FROM medicine WHERE MEDICINE_GNAME = '$INV_MEDGNAME' GROUP BY MEDICINE_BNAME";
			$do = mysql_query($sql);
			$count = mysql_num_rows($do);

	if($count > 0){
		while($bname = mysql_fetch_array($do)){
			echo "<option value='";echo $bname['MEDICINE_BNAME']; echo "'"; if($bname['MEDICINE_BNAME'] == $Result['MEDICINE_BNAME']){echo "selected";} echo">"; echo $bname['MEDICINE_BNAME']; echo "</option>";
		}
	}else{
		echo "<option>No medicine found!</option>";
	}
}
else if($page == 'RetrieveInventoryDFORM'){
	require 'lib/Db.config.php';
	require 'lib/Db.config.pdo.php';

	$id = mysql_real_escape_string($_POST['INV_ID']);

	$retrieveCat = "Select * FROM inventory INNER JOIN medicine ON inventory.MEDICINE_ID = medicine.MEDICINE_ID WHERE inventory.INV_QTY > '0' AND inventory.INV_ID = '$id'";
	$res = mysql_query($retrieveCat);
	$Result = mysql_fetch_array($res);
	
	echo "<option value='";echo "Tablet"; echo "'"; if($Result['MEDICINE_DFORM'] == 'Tablet'){echo "selected";} echo">"; echo "Tablet"; echo "</option>";
	echo "<option value='";echo "Syrup"; echo "'"; if($Result['MEDICINE_DFORM'] == 'Syrup'){echo "selected";} echo">"; echo "Syrup"; echo "</option>";
}
else if($page == 'RetrieveInventoryDS'){
	require 'lib/Db.config.php';
	require 'lib/Db.config.pdo.php';

	$id = mysql_real_escape_string($_POST['INV_ID']);

	$retrieveCat = "Select * FROM inventory INNER JOIN medicine ON inventory.MEDICINE_ID = medicine.MEDICINE_ID WHERE inventory.INV_QTY > '0' AND inventory.INV_ID = '$id'";
	$res = mysql_query($retrieveCat);
	$Result = mysql_fetch_array($res);
	
			$MedCat = mysql_real_escape_string($_POST['CAT']);
			$Medtype = mysql_real_escape_string($_POST['TYPE']);
			$MedGname = mysql_real_escape_string($_POST['GNAME']);
			$MedDform = mysql_real_escape_string($_POST['DF']);
			$MedBN = mysql_real_escape_string($_POST['BNAME']);

	$sql = "SELECT MEDICINE_DOSE FROM medicine WHERE (MEDICINE_BNAME = '$MedBN' AND MEDICINE_CAT ='$MedCat' AND (MEDICINE_DFORM = '$MedDform')) GROUP BY MEDICINE_DOSE";
			$do = mysql_query($sql);

		while($DS = mysql_fetch_array($do)){
			echo "<option value='";echo $DS['MEDICINE_DOSE']; echo "'"; if($DS['MEDICINE_DOSE'] == $Result['MEDICINE_DOSE']){echo "selected";} echo">"; echo $DS['MEDICINE_DOSE']; echo "</option>";
		}
}
else if($page == 'EditInventory'){
	require 'lib/Db.config.pdo.php';
	require 'lib/Db.config.php';

				$INV_ID = mysql_real_escape_string($_POST['INV_ID']);
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
		echo $MedID;
	
		$stmt = $db->prepare("update inventory set MEDICINE_ID=?, INV_QTY=?, INV_SUPPLIER=?, INV_EXPD=?, INV_DATE_ARV=?, INV_QTY_HIST=? where INV_ID=?");
				$stmt->bindParam(1,$MedID);
				$stmt->bindParam(2,$Qty);
				$stmt->bindParam(3,$Supplier);
				$stmt->bindParam(4,$DateExp);
				$stmt->bindParam(5,$DateArr);
				$stmt->bindParam(6,$QtyHistory);
				$stmt->bindParam(7,$INV_ID);
				$stmt->execute();
	}
?>