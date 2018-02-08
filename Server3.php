<?php
error_reporting(0);

$page = isset($_GET['p'])?$_GET['p']:'';

if($page == 'AddBloodChem'){
require 'lib/Db.config.pdo.php';
require 'lib/Db.config.php';

            $LABR_ID               = mysql_real_escape_string($_POST['LBR_ID']);
            $PATHOLOGIST           = mysql_real_escape_string($_POST['PATHOLOGIST']);
            $MEDTECH               = mysql_real_escape_string($_POST['MEDTECH']);
            $TAKEN                 = mysql_real_escape_string($_POST['TAKEN']);
            $MEAL                  = mysql_real_escape_string($_POST['LAST_MEAL']);
            $BUN_ETYPE_INT         = mysql_real_escape_string($_POST['BEI']);
            $BUN_ETYPE_CON         = mysql_real_escape_string($_POST['BEC']);
            $CHSTRL_INT            = mysql_real_escape_string($_POST['CI']);
            $CHSTRL_CON            = mysql_real_escape_string($_POST['CC']);
            $CRTN_ETYPE_INT        = mysql_real_escape_string($_POST['CEI']);
            $CRTN_ETYPE_CON        = mysql_real_escape_string($_POST['CEC']);
            $FBS_ETYPE_INT         = mysql_real_escape_string($_POST['FEI']);
            $FBS_ETYPE_CON         = mysql_real_escape_string($_POST['FEC']);
            $HDL_M_ETYPE_INT       = mysql_real_escape_string($_POST['HMEI']);
            $HDL_M_ETYPE_CON       = mysql_real_escape_string($_POST['HMEC']);
            $HDL_F_ETYPE_INT       = mysql_real_escape_string($_POST['HFEI']);
            $HDL_F_ETYPE_CON       = mysql_real_escape_string($_POST['HFEC']);
            $LDL_ETYPE_INT         = mysql_real_escape_string($_POST['LEI']);
            $LDL_ETYPE_CON         = mysql_real_escape_string($_POST['LEC']);
            $PO_PR_ETYPE_INT       = mysql_real_escape_string($_POST['PPEI']);
            $PO_PR_ETYPE_CON       = mysql_real_escape_string($_POST['PPEC']);
            $RBS_ETYPE_INT         = mysql_real_escape_string($_POST['REI']);
            $RBS_ETYPE_CON         = mysql_real_escape_string($_POST['REC']);
            $SGOT_M_ETYPE_INT      = mysql_real_escape_string($_POST['SGOTMEI']);
            $SGOT_F_ETYPE_INT      = mysql_real_escape_string($_POST['SGOTFEI']);
            $SGPT_M_ETYPE_INT      = mysql_real_escape_string($_POST['SGPTMEI']);
            $SGPT_F_ETYPE_INT      = mysql_real_escape_string($_POST['SGPTFEI']);
            $TRYLYDE_ETYPE_INT     = mysql_real_escape_string($_POST['TEI']);
            $TRYLYDE_ETYPE_CON     = mysql_real_escape_string($_POST['TEC']);
            $URIC_F_ETYPE_INT      = mysql_real_escape_string($_POST['UFEI']);
            $URIC_F_ETYPE_CON      = mysql_real_escape_string($_POST['UFEC']);
            $URIC_M_ETYPE_INT      = mysql_real_escape_string($_POST['UMEI']);
            $URIC_M_ETYPE_CON      = mysql_real_escape_string($_POST['UMEC']);
            $Year                  = date('Y',strtotime($date));
            $Month                 = date('M',strtotime($date));
            $date                  = date("Y-m-d");
            
            $LAB_RECORD = $db->prepare("insert into laboratory_record values('',?,?,?,?,?,?,?)");
            $LAB_RECORD->bindParam(1,$LABR_ID);
            $LAB_RECORD->bindParam(2,$MEDTECH);
            $LAB_RECORD->bindParam(3,$PATHOLOGIST);
            $LAB_RECORD->bindParam(4,$TAKEN);
            $LAB_RECORD->bindParam(5,$MEAL);
            $LAB_RECORD->bindParam(6,$Month);
            $LAB_RECORD->bindParam(7,$Year);
            $LAB_RECORD->execute();

            $Lab_rec_id = $db->lastInsertId();
            
            $stmt = $db->prepare("insert into blood_examination values('',?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
			$stmt->bindParam(1,$BUN_ETYPE_INT);
			$stmt->bindParam(2,$CRTN_ETYPE_INT);
			$stmt->bindParam(3,$FBS_ETYPE_INT);
			$stmt->bindParam(4,$HDL_M_ETYPE_INT);
			$stmt->bindParam(5,$HDL_F_ETYPE_INT);
			$stmt->bindParam(6,$LDL_ETYPE_INT);
			$stmt->bindParam(7,$PO_PR_ETYPE_INT);
			$stmt->bindParam(8,$RBS_ETYPE_INT);
			$stmt->bindParam(9,$SGOT_M_ETYPE_INT);
			$stmt->bindParam(10,$SGOT_F_ETYPE_INT);
			$stmt->bindParam(11,$SGPT_M_ETYPE_INT);
			$stmt->bindParam(12,$SGPT_F_ETYPE_INT);
			$stmt->bindParam(13,$TRYLYDE_ETYPE_INT);
			$stmt->bindParam(14,$URIC_M_ETYPE_INT);
			$stmt->bindParam(15,$URIC_F_ETYPE_INT);
			$stmt->bindParam(16,$BUN_ETYPE_CON);
			$stmt->bindParam(17,$CRTN_ETYPE_CON);
			$stmt->bindParam(18,$FBS_ETYPE_CON);
			$stmt->bindParam(19,$HDL_M_ETYPE_CON);
            $stmt->bindParam(20,$HDL_F_ETYPE_CON);
            $stmt->bindParam(21,$LDL_ETYPE_CON);
            $stmt->bindParam(22,$PO_PR_ETYPE_CON);
            $stmt->bindParam(23,$RBS_ETYPE_CON);
            $stmt->bindParam(24,$TRYLYDE_ETYPE_CON);
            $stmt->bindParam(25,$URIC_M_ETYPE_CON);
            $stmt->bindParam(26,$URIC_F_ETYPE_CON);
            $stmt->bindParam(27,$CHSTRL_INT);
            $stmt->bindParam(28,$CHSTRL_CON);
            $stmt->bindParam(29,$Lab_rec_id);
            $stmt->bindParam(30,$Month);
            $stmt->bindParam(31,$Year);
            $stmt->execute();
}
else if($page == 'MedtechList'){
    require 'lib/Db.config.pdo.php';
    require 'lib/Db.config.php';
    
        $sql = "SELECT *, CONCAT(Firstname,' ',Middlename,' ',Lastname,'. RMT') AS Fullname FROM users WHERE Position = 'Medtech' AND STATUS = 'Active'";
                $do = mysql_query($sql);
                $countM = mysql_num_rows($do);
    
        if($countM > 0){
            while($MT = mysql_fetch_array($do)){
                echo "<option value='";echo $MT['User_id'];echo "'>"; echo $MT['Fullname']; echo "</option>";
            }
        }else{
            echo "<option>No registered medical technologist in the system</option>";
        }			
}
else if($page == 'PathologistList'){
    require 'lib/Db.config.pdo.php';
    require 'lib/Db.config.php';
    
        $sql = "SELECT *, CONCAT(Firstname,' ',Middlename,' ',Lastname) AS Fullname FROM users WHERE Position = 'Pathologist' AND STATUS = 'Active'";
                $do = mysql_query($sql);
                $countP = mysql_num_rows($do);
    
        if($countP > 0){
            while($PT = mysql_fetch_array($do)){
                echo "<option value='";echo $PT['User_id'];echo "'>"; echo $PT['Fullname']; echo "</option>";
            }
        }else{
            echo "<option>No registered pathologist in the system</option>";
        }			
}
?>