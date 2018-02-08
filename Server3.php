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
            $date                  = date("Y-m-d");
            $Year                  = date('Y',strtotime($date));
            $Month                 = date('M',strtotime($date));
            
            
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
            
            $BLOODCHEM = $db->prepare("insert into blood_examination values('',?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
			$BLOODCHEM->bindParam(1,$BUN_ETYPE_INT);
			$BLOODCHEM->bindParam(2,$CRTN_ETYPE_INT);
			$BLOODCHEM->bindParam(3,$FBS_ETYPE_INT);
			$BLOODCHEM->bindParam(4,$HDL_M_ETYPE_INT);
			$BLOODCHEM->bindParam(5,$HDL_F_ETYPE_INT);
			$BLOODCHEM->bindParam(6,$LDL_ETYPE_INT);
			$BLOODCHEM->bindParam(7,$PO_PR_ETYPE_INT);
			$BLOODCHEM->bindParam(8,$RBS_ETYPE_INT);
			$BLOODCHEM->bindParam(9,$SGOT_M_ETYPE_INT);
			$BLOODCHEM->bindParam(10,$SGOT_F_ETYPE_INT);
			$BLOODCHEM->bindParam(11,$SGPT_M_ETYPE_INT);
			$BLOODCHEM->bindParam(12,$SGPT_F_ETYPE_INT);
			$BLOODCHEM->bindParam(13,$TRYLYDE_ETYPE_INT);
			$BLOODCHEM->bindParam(14,$URIC_M_ETYPE_INT);
			$BLOODCHEM->bindParam(15,$URIC_F_ETYPE_INT);
			$BLOODCHEM->bindParam(16,$BUN_ETYPE_CON);
			$BLOODCHEM->bindParam(17,$CRTN_ETYPE_CON);
			$BLOODCHEM->bindParam(18,$FBS_ETYPE_CON);
			$BLOODCHEM->bindParam(19,$HDL_M_ETYPE_CON);
            $BLOODCHEM->bindParam(20,$HDL_F_ETYPE_CON);
            $BLOODCHEM->bindParam(21,$LDL_ETYPE_CON);
            $BLOODCHEM->bindParam(22,$PO_PR_ETYPE_CON);
            $BLOODCHEM->bindParam(23,$RBS_ETYPE_CON);
            $BLOODCHEM->bindParam(24,$TRYLYDE_ETYPE_CON);
            $BLOODCHEM->bindParam(25,$URIC_M_ETYPE_CON);
            $BLOODCHEM->bindParam(26,$URIC_F_ETYPE_CON);
            $BLOODCHEM->bindParam(27,$CHSTRL_INT);
            $BLOODCHEM->bindParam(28,$CHSTRL_CON);
            $BLOODCHEM->bindParam(29,$Lab_rec_id);
            $BLOODCHEM->bindParam(30,$Month);
            $BLOODCHEM->bindParam(31,$Year);
            $BLOODCHEM->execute();
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
else if($page == 'AddFecal'){
    require 'lib/Db.config.pdo.php';
    require 'lib/Db.config.php';

            $LABR_ID                            = mysql_real_escape_string($_POST['LBR_ID']);
            $CLR_MCRO_EXM                       = mysql_real_escape_string($_POST['CLRME']);
            $PARA_ASCARIS                       = mysql_real_escape_string($_POST['PARAA']);
            $FLAG_G_LAMBIA                      = mysql_real_escape_string($_POST['FGL']);
            $CONS_MCRO_EXM                      = mysql_real_escape_string($_POST['CONSME']);
            $PARA_HKWORM                        = mysql_real_escape_string($_POST['PHKW']);
            $FLAG_T_HOMINIS                     = mysql_real_escape_string($_POST['FTM']);
            $HLMT_MCRO_EXM                      = mysql_real_escape_string($_POST['HME']);
            $PARA_TRHRIS                        = mysql_real_escape_string($_POST['PARAT']);
            $PARA_STRGLOIDES                    = mysql_real_escape_string($_POST['PARAST']);
            $CT_OB                              = mysql_real_escape_string($_POST['CO']);
            $E_AMOEBA_HISTOL                    = mysql_real_escape_string($_POST['EAH']);
            $PCELLS_MICRO_EXM                   = mysql_real_escape_string($_POST['PME']);
            $E_HISTOL_CYST                      = mysql_real_escape_string($_POST['EHC']);
            $RBC_MCRO_EXM                       = mysql_real_escape_string($_POST['RME']);
            $E_HISTOL_TROPH                     = mysql_real_escape_string($_POST['EHT']);
            $E_AMOEBA_COLI                      = mysql_real_escape_string($_POST['EAC']);
            $COLI_CYST                          = mysql_real_escape_string($_POST['CC']);
            $COLI_TROPH                         = mysql_real_escape_string($_POST['CT']);
            $MEAL                               = mysql_real_escape_string($_POST['LAST_MEAL']);
            $MEDTECH                            = mysql_real_escape_string($_POST['MEDTECH']);
            $PATHOLOGIST                        = mysql_real_escape_string($_POST['PATHOLOGIST']);
            $TAKEN                              = mysql_real_escape_string($_POST['TAKEN']);
            $REMARKS                            = mysql_real_escape_string($_POST['REMARKS']);
            $date                               = date("Y-m-d");
            $Year                               = date('Y',strtotime($date));
            $Month                              = date('M',strtotime($date));

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
            
            $FECAL = $db->prepare("insert into fecalysis values('',?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
            $FECAL->bindParam(1,$Lab_rec_id);
            $FECAL->bindParam(2,$CLR_MCRO_EXM); 
            $FECAL->bindParam(3,$CONS_MCRO_EXM); 
            $FECAL->bindParam(4,$HLMT_MCRO_EXM); 
            $FECAL->bindParam(5,$PARA_ASCARIS); 
            $FECAL->bindParam(6,$PARA_HKWORM); 
            $FECAL->bindParam(7,$PARA_TRHRIS); 
            $FECAL->bindParam(8,$PARA_STRGLOIDES); 
            $FECAL->bindParam(9,$CT_OB); 
            $FECAL->bindParam(10,$PCELLS_MICRO_EXM); 
            $FECAL->bindParam(11,$RBC_MCRO_EXM); 
            $FECAL->bindParam(12,$E_AMOEBA_HISTOL); 
            $FECAL->bindParam(13,$E_HISTOL_CYST); 
            $FECAL->bindParam(14,$E_HISTOL_TROPH); 
            $FECAL->bindParam(15,$E_AMOEBA_COLI); 
            $FECAL->bindParam(16,$COLI_CYST); 
            $FECAL->bindParam(17,$COLI_TROPH); 
            $FECAL->bindParam(18,$FLAG_G_LAMBIA); 
            $FECAL->bindParam(19,$FLAG_T_HOMINIS); 
            $FECAL->bindParam(20,$REMARKS); 
            $FECAL->execute();

}
?>