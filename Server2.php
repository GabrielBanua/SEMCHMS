<?php
error_reporting(0);

$page = isset($_GET['p'])?$_GET['p']:'';

if($page == 'editTreatment'){
require 'lib/Db.config.pdo.php';
require 'lib/Db.config.php';

			$CheckB = mysql_real_escape_string($_POST['CHECK']);
			$Diagnosis = mysql_real_escape_string($_POST['DGNE']);
			$Treatment = mysql_real_escape_string($_POST['TRMTE']);
			$Remarks = mysql_real_escape_string($_POST['RMKSE']);
			$Follow = mysql_real_escape_string($_POST['FPCHKE']);
			$Doctor = mysql_real_escape_string($_POST['DOCE']);
			$MedicalRec_ID = mysql_real_escape_string($_POST['MRIDE']);
			$DocName = mysql_real_escape_string($_POST['REFDNE']);
			$DocCN = mysql_real_escape_string($_POST['REF_CNE']);
			$DocADD = mysql_real_escape_string($_POST['REF_ADDE']);
			$DocEmail = mysql_real_escape_string($_POST['REF_EMAIL']);				
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
			//sql fetch follow_up checkup value
				$Follow_up = "SELECT * FROM followup_check_up WHERE TRT_ID = '$updated_TR_id'";
				$FU_ID = mysql_query($Follow_up);
				$FU_ID_FETCH = mysql_fetch_array($FU_ID);
				$Updated_FU = $FU_ID_FETCH['TRT_ID'];
				
				$stmt = $db->prepare("update treatment set DIAG_DTLS=?, TREATMENT=?, REMARKS=?, User_id=? where MR_ID=?");
						$stmt->bindParam(1,$Diagnosis);
						$stmt->bindParam(2,$Treatment);
						$stmt->bindParam(3,$Remarks);
                        $stmt->bindParam(4,$User_id);
                        $stmt->bindParam(5,$MedicalRec_ID);
						$stmt->execute();
						
				if(empty($Updated_FU) && !empty($Follow)){
					$FCUP = $db->prepare("insert into followup_check_up values('',?,?,?,?)");
					$FCUP->bindParam(1,$updated_TR_id);
					$FCUP->bindParam(2,$sqldate);
					$FCUP->bindParam(3,$Month);
					$FCUP->bindParam(4,$Year);
					$FCUP->execute();
				}
				if(!empty($Updated_FU) && !empty($Follow)){
					$FCUP = $db->prepare("update followup_check_up set FCUP_DATE=? where TRT_ID=?");
					$FCUP->bindParam(1,$sqldate);
					$FCUP->bindParam(2,$updated_TR_id);
					$FCUP->execute();
				}

				$referral_check = "SELECT * FROM referral WHERE TRMTMNT_ID = '$updated_TR_id'";
						$retrive_referral = mysql_query($referral_check);
						$count_ref = mysql_num_rows($retrive_referral);
						$get_ref_id = mysql_fetch_array($retrive_referral);
						$Ref_id = $get_ref_id['RF_ID'];

			if($CheckB == 'check'){
				if($count_ref > 0){
					$ref = $db->prepare("update referral set RF_DOCNAME=?, RF_CN=?, RF_ADD=?, RF_EMAIL=? where TRMTMNT_ID=?");
						$ref->bindParam(1,$DocName);
						$ref->bindParam(2,$DocCN);
						$ref->bindParam(3,$DocADD);
						$ref->bindParam(4,$DocEmail);
						$ref->bindParam(5,$updated_TR_id);
						$ref->execute();
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
			}else if($CheckB == 'uncheck'){
				$sql = "DELETE FROM referral WHERE RF_ID = $Ref_id";
				$stmt = $db->prepare($sql);
				$stmt -> execute();
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
	date_default_timezone_set('Asia/Manila');
			$Med_id = mysql_real_escape_string($_POST['MED_ID']);
			$Inv_id = mysql_real_escape_string($_POST['INV_ID']);
			$sub_qty = mysql_real_escape_string($_POST['DES_QTY']);
			$date = date("Y-m-d");
			$Year = date('Y',strtotime($date));
			$Month = date('M',strtotime($date));

			$DispenseSql = mysql_query("SELECT MIN(inventory.INV_ID) AS INV_ID, inventory.INV_QTY FROM inventory INNER JOIN medicine ON inventory.MEDICINE_ID = medicine.MEDICINE_ID WHERE inventory.MEDICINE_ID = '$Med_id' AND inventory.INV_EXPD = (SELECT @MIN:=MIN(inventory.INV_EXPD) AS MINI FROM inventory WHERE inventory.MEDICINE_ID = '$Med_id' AND inventory.INV_QTY > '0' AND (inventory.INV_EXPD > '$date')) AND inventory.INV_QTY > 0");
			$DispneseRes = mysql_fetch_array($DispenseSql);
			$DispenseCount = mysql_num_rows($DispenseSql);
			
			$Expdate = $DispneseRes['INV_EXPD'];
			$DisQty = $DispneseRes['INV_QTY'];
			$DisID = $DispneseRes['INV_ID'];
			
			if($DispenseCount > 0){
			
					if($DisQty < $sub_qty){
						$Lacking = $sub_qty - $DisQty;
						$Lacking_sol = $sub_qty - $Lacking;
						$Dis_QtyRes = $DisQty - $Lacking_sol;

							$ResultDis = $db->prepare("update inventory set INV_QTY=? where INV_ID=?");
							$ResultDis->bindParam(1,$Dis_QtyRes);
							$ResultDis->bindParam(2,$DisID);
							$ResultDis->execute();

							$RecordDis = $db->prepare("insert into dispense values('',?,?,?,?,?)");
							$RecordDis->bindParam(1,$DisID);
							$RecordDis->bindParam(2,$sub_qty);
							$RecordDis->bindParam(3,$date);
							$RecordDis->bindParam(4,$Month);
							$RecordDis->bindParam(5,$Year);
							$RecordDis->execute();

							$checkInv = mysql_query("SELECT inventory.INV_ID, MIN(inventory.INV_ID) AS Minimum FROM inventory INNER JOIN medicine ON inventory.MEDICINE_ID = medicine.MEDICINE_ID WHERE inventory.MEDICINE_ID = '$Med_id'");
								$checkID = mysql_fetch_array($checkInv);
								$RetrieveCheckID = $checkID['Minimum'];

							$checkAdjust = mysql_query("SELECT ADJ_ID, QUANTITY FROM adjustments WHERE INV_ID = '$RetrieveCheckID'");
							$AdjustCount = mysql_num_rows($checkAdjust);
								$AdjustResults = mysql_fetch_array($checkAdjust);
								$AdjustID = $AdjustResults['ADJ_ID'];
								$AdjustQuantity = $AdjustResults['QUANTITY'];
								$AdjustNewQuantity = $AdjustQuantity - $Lacking_sol;

								$updateAdjustments = $db->prepare("Update adjustments set QUANTITY = ? where ADJ_ID=?");
								$updateAdjustments->bindParam(1,$AdjustNewQuantity);
								$updateAdjustments->bindParam(2,$AdjustID);
								$updateAdjustments->execute();
					
					if($Lacking > 0){
						$Lack = $Lacking;
						$Lacking = $Lack;
						while($Lack > 0){
							$ProviderSql = mysql_query("SELECT MIN(inventory.INV_ID) AS INV_ID, inventory.INV_QTY FROM inventory INNER JOIN medicine ON inventory.MEDICINE_ID = medicine.MEDICINE_ID WHERE inventory.MEDICINE_ID = '$Med_id' AND inventory.INV_EXPD = (SELECT @MIN:=MIN(inventory.INV_EXPD) AS MINI FROM inventory WHERE inventory.MEDICINE_ID = '$Med_id' AND inventory.INV_QTY > '0' AND (inventory.INV_EXPD > '$date')) AND inventory.INV_QTY > 0");
							$ProviderRes = mysql_fetch_array($ProviderSql);
							$ProviderCount = mysql_num_rows($ProviderSql);
							
							$Lack;
							$providerQty = $ProviderRes['INV_QTY'];
							$providerID = $ProviderRes['INV_ID'];
							if($ProviderCount > 0){
							if($providerQty < $Lacking){
								$LackingN = $Lacking - $providerQty;
								$LackingProv = $Lacking - $LackingN;
								$NewQty = $providerQty - $LackingProv;
								
								$ResultDisNEW = $db->prepare("update inventory set INV_QTY=? where INV_ID=?");
								$ResultDisNEW->bindParam(1,$NewQty);
								$ResultDisNEW->bindParam(2,$providerID);
								$ResultDisNEW->execute();

								$RecordDisNEW = $db->prepare("insert into dispense values('',?,?,?,?,?)");
								$RecordDisNEW->bindParam(1,$providerID);
								$RecordDisNEW->bindParam(2,$Lacking);
								$RecordDisNEW->bindParam(3,$date);
								$RecordDisNEW->bindParam(4,$Month);
								$RecordDisNEW->bindParam(5,$Year);
								$RecordDisNEW->execute();

								$checkInvNEW = mysql_query("SELECT inventory.INV_ID, MIN(inventory.INV_ID) AS Minimum FROM inventory INNER JOIN medicine ON inventory.MEDICINE_ID = medicine.MEDICINE_ID WHERE inventory.MEDICINE_ID = '$Med_id'");
								$checkIDNW = mysql_fetch_array($checkInvNEW);
								$RetrieveCheckIDNW = $checkIDNW['Minimum'];

								$checkAdjustNW = mysql_query("SELECT ADJ_ID, QUANTITY FROM adjustments WHERE INV_ID = '$RetrieveCheckIDNW'");
								$AdjustCountNW = mysql_num_rows($checkAdjustNW);
								$AdjustResultsNW = mysql_fetch_array($checkAdjustNW);
								$AdjustIDNW = $AdjustResultsNW['ADJ_ID'];
								$AdjustQuantityNW = $AdjustResultsNW['QUANTITY'];

								if($AdjustQuantityNW < $Lacking){
								$Adjusted =  $Lacking - $AdjustQuantityNW;
								$NewAdjusted = $Lacking - $Adjusted;
								$AdjustQuantityNew = $AdjustQuantityNW - $NewAdjusted;

								$updateAdjustments = $db->prepare("Update adjustments set QUANTITY = ? where ADJ_ID=?");
								$updateAdjustments->bindParam(1,$AdjustQuantityNew);
								$updateAdjustments->bindParam(2,$AdjustIDNW);
								$updateAdjustments->execute();

								echo "Depleted";
								}else if($AdjustQuantityNW >= $Lacking){
									$AdjustQuantityNew = $AdjustQuantityNW - $Lacking;

									$updateAdjustments = $db->prepare("Update adjustments set QUANTITY = ? where ADJ_ID=?");
									$updateAdjustments->bindParam(1,$AdjustQuantityNew);
									$updateAdjustments->bindParam(2,$AdjustIDNW);
									$updateAdjustments->execute();
								}
								

								$Lack = $LackingN;

							return $Lack;
							}else if($providerQty >= $Lacking){
								$ProviderNewRes = $providerQty - $Lacking;
								
								$ResultNEW = $db->prepare("update inventory set INV_QTY=? where INV_ID=?");
								$ResultNEW->bindParam(1,$ProviderNewRes);
								$ResultNEW->bindParam(2,$providerID);
								$ResultNEW->execute();

								$RecordDis = $db->prepare("insert into dispense values('',?,?,?,?,?)");
								$RecordDis->bindParam(1,$providerID);
								$RecordDis->bindParam(2,$Lacking);
								$RecordDis->bindParam(3,$date);
								$RecordDis->bindParam(4,$Month);
								$RecordDis->bindParam(5,$Year);
								$RecordDis->execute();

								$checkInv = mysql_query("SELECT inventory.INV_ID, MIN(inventory.INV_ID) AS Minimum FROM inventory INNER JOIN medicine ON inventory.MEDICINE_ID = medicine.MEDICINE_ID WHERE inventory.MEDICINE_ID = '$Med_id'");
								$checkID = mysql_fetch_array($checkInv);
								$RetrieveCheckID = $checkID['Minimum'];

								$checkAdjust = mysql_query("SELECT ADJ_ID, QUANTITY FROM adjustments WHERE INV_ID = '$RetrieveCheckID'");
								$AdjustCount = mysql_num_rows($checkAdjust);
								$AdjustResults = mysql_fetch_array($checkAdjust);
								$AdjustID = $AdjustResults['ADJ_ID'];
								$AdjustQuantity = $AdjustResults['QUANTITY'];
								$AdjustNewQuantity = $AdjustQuantity - $Lacking;

								$updateAdjustments = $db->prepare("Update adjustments set QUANTITY = ? where ADJ_ID=?");
								$updateAdjustments->bindParam(1,$AdjustNewQuantity);
								$updateAdjustments->bindParam(2,$AdjustID);
								$updateAdjustments->execute();

								$Lack = 0;
							return $Lack;
							}
							}else{
								echo "Out";
							}//end of provider count
						}return $Lack;//end of while loop
						
					}else{
						
					}
					//end of Lacking
					echo "Out";
				}else if($DisQty >= $sub_qty){
						$DisResult = $DisQty - $sub_qty;
					
							$ResultDis = $db->prepare("update inventory set INV_QTY=? where INV_ID=?");
							$ResultDis->bindParam(1,$DisResult);
							$ResultDis->bindParam(2,$DisID);
							$ResultDis->execute();

							$RecordDis = $db->prepare("insert into dispense values('',?,?,?,?,?)");
							$RecordDis->bindParam(1,$DisID);
							$RecordDis->bindParam(2,$sub_qty);
							$RecordDis->bindParam(3,$date);
							$RecordDis->bindParam(4,$Month);
							$RecordDis->bindParam(5,$Year);
							$RecordDis->execute();

							$checkInv = mysql_query("SELECT inventory.INV_ID, MIN(inventory.INV_ID) AS Minimum FROM inventory INNER JOIN medicine ON inventory.MEDICINE_ID = medicine.MEDICINE_ID WHERE inventory.MEDICINE_ID = '$Med_id'");
								$checkID = mysql_fetch_array($checkInv);
								$RetrieveCheckID = $checkID['Minimum'];

								$checkAdjust = mysql_query("SELECT ADJ_ID, QUANTITY FROM adjustments WHERE INV_ID = '$RetrieveCheckID'");
								$AdjustCount = mysql_num_rows($checkAdjust);
								$AdjustResults = mysql_fetch_array($checkAdjust);
								$AdjustID = $AdjustResults['ADJ_ID'];
								$AdjustQuantity = $AdjustResults['QUANTITY'];
								$AdjustNewQuantity = $AdjustQuantity - $sub_qty;

								$updateAdjustments = $db->prepare("Update adjustments set QUANTITY = ? where ADJ_ID=?");
								$updateAdjustments->bindParam(1,$AdjustNewQuantity);
								$updateAdjustments->bindParam(2,$AdjustID);
								$updateAdjustments->execute();
					}
		}else{
			echo "Nomed";
		}

}
else if($page == 'Addlabrequest'){
	require 'lib/Db.config.pdo.php';
	require 'lib/Db.config.php';
	date_default_timezone_set('Asia/Manila');
	$Test_Requested = mysql_real_escape_string($_POST['T_REQ']);
	$TREAT_ID = mysql_real_escape_string($_POST['T_ID']);
	$Test_Date = date('Y-m-d');
	$date = date("Y-m-d");
	$Year = date('Y',strtotime($date));
	$Month = date('M',strtotime($date));
	$Status = 'Pending';

	$LabReq = $db->prepare("insert into lab_request values('',?,?,?,?,?,?)");
	$LabReq->bindParam(1,$Test_Requested);
	$LabReq->bindParam(2,$Test_Date);
	$LabReq->bindParam(3,$TREAT_ID);
	$LabReq->bindParam(4,$Month);
	$LabReq->bindParam(5,$Year);
	$LabReq->bindParam(6,$Status);
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
			$REORDER = mysql_real_escape_string($_POST['REORDER']);

			$MedStmt = $db->prepare("Update medicine set MEDICINE_CAT=?, MEDICINE_TYPE=?, MEDICINE_GNAME=?, MEDICINE_BNAME=?, MEDICINE_DFORM=?, MEDICINE_DOSE=?, ReOrder=? where MEDICINE_ID=?");
			$MedStmt->bindParam(1,$MED_CAT);
			$MedStmt->bindParam(2,$MED_TYPE);
			$MedStmt->bindParam(3,$MED_GNAME);
			$MedStmt->bindParam(4,$MED_BNAME);
			$MedStmt->bindParam(5,$MED_DFORM);
			$MedStmt->bindParam(6,$MED_DOSE);
			$MedStmt->bindParam(7,$REORDER);
			$MedStmt->bindParam(8,$MED_ID);
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

				$OLDQTY = mysql_real_escape_string($_POST['OLD_QTY']);
				$MED_ID = mysql_real_escape_string($_POST['MED_ID']);
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
				
				$checkADJ_ID = mysql_query("SELECT inventory.INV_ID, MIN(inventory.INV_ID) AS Minimum FROM inventory INNER JOIN medicine ON inventory.MEDICINE_ID = medicine.MEDICINE_ID WHERE inventory.MEDICINE_ID = '$MED_ID'");
				$checkResultsAD = mysql_num_rows($checkADJ_ID);
				$checkAD_ID = mysql_fetch_array($checkADJ_ID);
				$RetrieveCheckADID = $checkAD_ID['Minimum'];
				$RetrieveCheckINVID = $checkAD_ID['INV_ID'];

				$checkAdjust_ID = mysql_query("SELECT ADJ_ID, QUANTITY FROM adjustments WHERE INV_ID = '$RetrieveCheckADID'");
				$AdjustCountID = mysql_num_rows($checkAdjust_ID);
				$AdjustResultsID = mysql_fetch_array($checkAdjust_ID);
				$AdjustID_NW = $AdjustResultsID['ADJ_ID'];
	
		$sql = "SELECT MEDICINE_ID FROM medicine WHERE MEDICINE_DOSE = '$MedDose' AND MEDICINE_BNAME = '$MedBN' AND(MEDICINE_GNAME = '$MedGname' AND MEDICINE_CAT = '$MedCat') AND MEDICINE_TYPE = '$Medtype'";
				$do = mysql_query($sql);
				$id = mysql_fetch_array($do);
				$MedID = $id['MEDICINE_ID'];
	
		$stmt = $db->prepare("update inventory set MEDICINE_ID=?, INV_QTY=?, INV_SUPPLIER=?, INV_EXPD=?, INV_DATE_ARV=?, INV_QTY_HIST=? where INV_ID=?");
				$stmt->bindParam(1,$MedID);
				$stmt->bindParam(2,$Qty);
				$stmt->bindParam(3,$Supplier);
				$stmt->bindParam(4,$DateExp);
				$stmt->bindParam(5,$DateArr);
				$stmt->bindParam(6,$QtyHistory);
				$stmt->bindParam(7,$INV_ID);
				$stmt->execute();

		if($MedID != $MED_ID){
			//get the old quantity to be subtracted in the adjustments
			$checkInv = mysql_query("SELECT inventory.INV_ID, MIN(inventory.INV_ID) AS Minimum FROM inventory INNER JOIN medicine ON inventory.MEDICINE_ID = medicine.MEDICINE_ID WHERE inventory.MEDICINE_ID = '$MED_ID'");
			$checkResults = mysql_num_rows($checkInv);
			$checkID = mysql_fetch_array($checkInv);
			$RetrieveCheckID = $checkID['Minimum'];

			if($INV_ID == $RetrieveCheckADID && $MED_ID != $MedID){
			$stmtchangeID = $db->prepare("update adjustments set INV_ID=? where ADJ_ID=?");
			$stmtchangeID->bindParam(1,$RetrieveCheckID);
			$stmtchangeID->bindParam(2,$AdjustID_NW);
			$stmtchangeID->execute();
			}
			$checkAdjust = mysql_query("SELECT ADJ_ID, QUANTITY FROM adjustments WHERE INV_ID = '$RetrieveCheckID'");
				$AdjustCount = mysql_num_rows($checkAdjust);
				$AdjustResults = mysql_fetch_array($checkAdjust);
				$AdjustID = $AdjustResults['ADJ_ID'];
				$AdjustQuantity = $AdjustResults['QUANTITY'];

				$SubtractedQty = $AdjustQuantity - $OLDQTY;

				$updateAdjustments = $db->prepare("Update adjustments set QUANTITY=? where ADJ_ID=?");
				$updateAdjustments->bindParam(1,$SubtractedQty);
				$updateAdjustments->bindParam(2,$AdjustID);
				$updateAdjustments->execute();
		
				//check if the inventory is new
				$checkInvNW = mysql_query("SELECT inventory.INV_ID, MIN(inventory.INV_ID) AS Minimum FROM inventory INNER JOIN medicine ON inventory.MEDICINE_ID = medicine.MEDICINE_ID WHERE inventory.MEDICINE_ID = '$MedID'");
				$checkResultsNW = mysql_num_rows($checkInvNW);
				$checkIDNW = mysql_fetch_array($checkInvNW);
				$RetrieveCheckIDNW = $checkIDNW['Minimum'];

				$checkAdjustNW = mysql_query("SELECT ADJ_ID, QUANTITY FROM adjustments WHERE INV_ID = '$RetrieveCheckIDNW'");
				$AdjustCountNW = mysql_num_rows($checkAdjustNW);
				$AdjustResultsNW = mysql_fetch_array($checkAdjustNW);
				$AdjustIDNW = $AdjustResultsNW['ADJ_ID'];
				$AdjustQuantityNW = $AdjustResultsNW['QUANTITY'];

				$AddedQty = $AdjustQuantityNW + $Qty;

			if($AdjustCountNW > 0){
				$updateAdjustments = $db->prepare("Update adjustments set QUANTITY = ? where ADJ_ID=?");
				$updateAdjustments->bindParam(1,$AddedQty);
				$updateAdjustments->bindParam(2,$AdjustIDNW);
				$updateAdjustments->execute();
			}else{
				$InsertAdjustments = $db->prepare("insert into adjustments values('',?,?)");
				$InsertAdjustments->bindParam(1,$INV_ID);
				$InsertAdjustments->bindParam(2,$Qty);
				$InsertAdjustments->execute();
			}
		}else if($MedID == $MED_ID){
			$checkInv = mysql_query("SELECT inventory.INV_ID, MIN(inventory.INV_ID) AS Minimum FROM inventory INNER JOIN medicine ON inventory.MEDICINE_ID = medicine.MEDICINE_ID WHERE inventory.MEDICINE_ID = '$MED_ID'");
			$checkResults = mysql_num_rows($checkInv);
			$checkID = mysql_fetch_array($checkInv);
			$RetrieveCheckID = $checkID['Minimum'];

			$checkAdjust = mysql_query("SELECT ADJ_ID, QUANTITY FROM adjustments WHERE INV_ID = '$RetrieveCheckID'");
				$AdjustCount = mysql_num_rows($checkAdjust);
				$AdjustResults = mysql_fetch_array($checkAdjust);
				$AdjustID = $AdjustResults['ADJ_ID'];
				$AdjustQuantity = $AdjustResults['QUANTITY'];

				if($Qty > $OLDQTY){
					$NewQtyToAdd = $Qty - $OLDQTY;
					$NewAdjustQuantityAdd = $AdjustQuantity + $NewQtyToAdd;

					$updateThisAdjustments = $db->prepare("Update adjustments set QUANTITY=? where ADJ_ID=?");
						$updateThisAdjustments->bindParam(1,$NewAdjustQuantityAdd);
						$updateThisAdjustments->bindParam(2,$AdjustID);
						$updateThisAdjustments->execute();

				}else if($Qty < $OLDQTY){
					$NewQtyToSub = $OLDQTY - $Qty;
					$NewAdjustQuantitySub = $AdjustQuantity - $NewQtyToSub;

					$updateThisAdjustments = $db->prepare("Update adjustments set QUANTITY=? where ADJ_ID=?");
						$updateThisAdjustments->bindParam(1,$NewAdjustQuantitySub);
						$updateThisAdjustments->bindParam(2,$AdjustID);
						$updateThisAdjustments->execute();
				}else if($Qty == $OLDQTY){
					$updateThisAdjustments = $db->prepare("Update adjustments set QUANTITY=? where ADJ_ID=?");
						$updateThisAdjustments->bindParam(1,$AdjustQuantity);
						$updateThisAdjustments->bindParam(2,$AdjustID);
						$updateThisAdjustments->execute();
				}
		}
	}
	else if($page == 'DeleteMedicine'){
		require 'lib/Db.config.pdo.php';
		require 'lib/Db.config.php';

		$MED_ID = mysql_real_escape_string($_POST['MED_ID']);

		$sql = "DELETE FROM medicine WHERE MEDICINE_ID = $MED_ID";
		$stmt = $db->prepare($sql);
 		$stmt -> execute();
	}
?>