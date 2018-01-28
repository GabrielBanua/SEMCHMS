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
				
				$ref = $db->prepare("update referral set RF_DOCNAME=?, 	RF_CN=?, RF_ADD=? where TRMTMNT_ID=?");
						$ref->bindParam(1,$DocName);
						$ref->bindParam(2,$DocCN);
						$ref->bindParam(3,$DocADD);
						$ref->bindParam(4,$updated_TR_id);
                $ref->execute();
                
                echo "wala";
				
}
else if($page == 'DeleteInventory'){
require 'lib/Db.config.pdo.php';
require 'lib/Db.config.php';

	$ID = mysql_real_escape_string($_POST['INV_ID']);

	$sql = "DELETE FROM inventory WHERE INV_ID = $ID";
		$stmt = $db->prepare($sql);
 		$stmt -> execute();
}
?>