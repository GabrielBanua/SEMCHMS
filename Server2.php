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
			<td class="text-center"><a class="btn btn-shadow btn-danger btn-xs"><i class="icon-trash"></i> Delete</a></td>
		</tr>
<?php
		}
}
?>