<?php
$stmt = $pdo->prepare("insert into comments (user_id,comment) values(?,?)");
$stmt->execute([$user_id,$comment]);

$stmt = $pdo->prepare("insert into comments2 (user_id,comment) values(?,?)");
$stmt->execute([$user_id,$comment]);

if($user['Position'] == 'Doctor'){
 	header("Location: index.html");
  }
if($user['Position'] == 'Admin'){
 	header("Location: add-user.php");
  }



  var Dominant_H = $('#DOM_HAND').val();
    var Physical_H = $('#PHY_HEALTH').val();
    var Mental_H = $('#MENT_EMO_HEAl').val();
    var Disease_D = $('#DISE_DISO').val();
    var Significant_inj = $('#SIG_INJ').val();
    var Hospitalized = $('#HPTL').val();
    var Medication = $('#MEDCT').val();
    var Smoke = $('#SMOKE').val();
    var Alcohol = $('#ALCO_DRUGS').val();
    var Assistive_D = $('#ASSIST_DEV').val();
    var Person_A = $('#PERS_ASSIST').val();
    var Treatment = $('#TRMT').val();
    var Past_Pre = $('#PP_HEATH').val();
    var CT_Health = $('#CB_HEALTH_COND').val();
    var TU_Health = $('#TU_HEALTH_COND').val();
    var Years_Education = $('#YEARS_FE').val();
    var Marital_Stat = $('#MARITAL_STAT').val();
    var ID = $MaxID;

  +"&DOM_HAND="+Dominant_H+"&PHY_HEALTH="+Physical_H+"&MENT_EMO_HEAl="+Mental_H+"&DISE_DISO="+Disease_D+"&SIG_INJ="+Significant_inj+"&HPTL="+Hospitalized+"&MEDCT="+Medication+"&SMOKE="+Smoke+"&ALCO_DRUGS="+Alcohol+"&ASSIST_DEV="+Assistive_D+"&PERS_ASSIST="+Person_A+"&TRMT="+Treatment+"&PP_HEALTH="+Past_Pre+"&CB_HEALTH_COND="+CT_Health+"&TU_HEALTH_COND="+TU_Health+"&YEARS_FE="+Years_Education+"&MARITAL_STAT="+Marital_Stat+"&M_ID="+ID

  $stmt = $db->prepare("insert into patient_medical_issue (PP_HEATH,TRMT,MEDCT,DISE_DISO,HPTL,P_ID) values(?,?,?,?,?,?)");
	$stmt->execute([$Past_Pre,$Treatment,$Medication,$Disease_D,$Hospitalized,$MID]);

	$Dominant_H = mysql_real_escape_string($_POST['DOM_HAND']);
	$Physical_H = mysql_real_escape_string($_POST['PHY_HEALTH']);
	$Mental_H = mysql_real_escape_string($_POST['MENT_EMO_HEAl']);
	$Disease_D = mysql_real_escape_string($_POST['DISE_DISO']);
	$Significant_inj = mysql_real_escape_string($_POST['SIG_INJ']);
	$Hospitalized = mysql_real_escape_string($_POST['HPTL']);
	$Medication = mysql_real_escape_string($_POST['MEDCT']);
	$Smoke = mysql_real_escape_string($_POST['SMOKE']);
	$Alcohol = mysql_real_escape_string($_POST['ALCO_DRUGS']);
	$Assistive_D = mysql_real_escape_string($_POST['ASSIST_DEV']);
	$Person_A = mysql_real_escape_string($_POST['PERS_ASSIST']);
	$Treatment = mysql_real_escape_string($_POST['TRMT']);
	$Past_Pre = mysql_real_escape_string($_POST['PP_HEATH']);
	$CT_Health = mysql_real_escape_string($_POST['CB_HEALTH_COND']);
	$TU_Health = mysql_real_escape_string($_POST['TU_HEALTH_COND']);
	$Years_Education = mysql_real_escape_string($_POST['YEARS_FE']);
	$Marital_Stat = mysql_real_escape_string($_POST['MARITAL_STAT']);
	$MID = mysql_real_escape_string($_POST['M_ID']);




$query = $db->prepare("INSERT INTO users(name, email, username, password) VALUES (:name,:email,:username,:password)");
            $query->bindParam("name", $name, PDO::PARAM_STR);
            $query->bindParam("email", $email, PDO::PARAM_STR);
            $query->bindParam("username", $username, PDO::PARAM_STR);
            $enc_password = hash('sha256', $password);
            $query->bindParam("password", $enc_password, PDO::PARAM_STR);


            $sql = "
    INSERT INTO `directory`(`First_Name`,`Surname`,`Nicknames`) VALUES (:firstname, :surname, :nicknames);
    INSERT INTO `nicknames`(`First_Name`,`Surname`,`Nicknames`) VALUES (:firstname, :surname, :nicknames);
";
      


       $Last_ID = $conn->lastInsertId();


?>




    <script>
        function EditUser(str){
          var id = str;
          if (confirm('Are you sure you want to edit this user in the database?')) {
              $.ajax({
              type: "POST",
              url: "Server.php?p=EditUser",
              data: "User_id="+id,
              success: function(data){
                $('body').html(data);
              }
        }
      </script>




      <script type="text/javascript">
        
        function addMedicalRecord(){
          var MedRillness = $('#').val(); 
          var MedRBP =  $('#').val();
          var MedRWeight = $('#').val();
          var MedRTemp = $('#').val();
          var MedRDate = $('#').val();
          var MedRTime = $('#').val();
          var Sched_ID = $('#').val();

          $.ajax({
                type: "POST",
                url: "Server.php?p=addMedicalRecord",
                data: "MedRillness="+MedRillness+"&MedRBP="+MedRBP+"&MedRWeight="+MedRWeight+"&MedRTemp="+MedRTemp+"&MedRDate="+MedRDate+"&MedRTime="+MedRTime+"&Sched_ID="+Sched_ID,
                success: function(data){
                  alert('Added successfully!');
                  window.location.reload();
                }
              });
        }


        function schedChange(str){
        var id = str;
        load(id);
        $('#SCHEDULE_PURPOSE-'+id).change(function(){
          $('#SCHEDULE_TIME-'+id).prop('disabled', !($(this).val() == "Laboratory Test") && !($(this).val() == "X-ray"));
          $('#SCHEDULE_DATE-'+id).prop('disabled', !($(this).val() == "Laboratory Test") && !($(this).val() == "X-ray"));
        });
        }
        function load(str){
          var id = str;
          var Purpose = $('#SCHEDULE_PURPOSE-'+id).val(); 
          $('#SCHEDULE_TIME-'+id).attr('disabled',true);
          $('#SCHEDULE_DATE-'+id).attr('disabled',true);

          if(Purpose == "Laboratory Test"){
            $('#SCHEDULE_TIME-'+id).attr('disabled',false);
            $('#SCHEDULE_DATE-'+id).attr('disabled',false);
          }
          if(Purpose == "X-ray"){
            $('#SCHEDULE_TIME-'+id).attr('disabled',false);
            $('#SCHEDULE_DATE-'+id).attr('disabled',false);
          }
        }  
      </script>
      alert(MedGname+" "+MedBname+" "+Medtype+" "+MedCat+" "+MedDose+" "+MedDform);


<link rel="stylesheet" type="text/css" href="DataTables-1.10.16/css/jquery.dataTables.css"/>
<link rel="stylesheet" type="text/css" href="Buttons-1.5.1/css/buttons.dataTables.css"/>
<link rel="stylesheet" type="text/css" href="Responsive-2.2.1/css/responsive.dataTables.css"/>
<script type="text/javascript" src="JSZip-2.5.0/jszip.js"></script>
<script type="text/javascript" src="pdfmake-0.1.32/pdfmake.js"></script>
<script type="text/javascript" src="pdfmake-0.1.32/vfs_fonts.js"></script>
<script type="text/javascript" src="DataTables-1.10.16/js/jquery.dataTables.js"></script>
<script type="text/javascript" src="Buttons-1.5.1/js/dataTables.buttons.js"></script>
<script type="text/javascript" src="Buttons-1.5.1/js/buttons.colVis.js"></script>
<script type="text/javascript" src="Buttons-1.5.1/js/buttons.flash.js"></script>
<script type="text/javascript" src="Buttons-1.5.1/js/buttons.html5.js"></script>
<script type="text/javascript" src="Buttons-1.5.1/js/buttons.print.js"></script>
<script type="text/javascript" src="Responsive-2.2.1/js/dataTables.responsive.js"></script>





"SELECT inventory.INV_ID FROM inventory INNER JOIN medicine ON inventory.MEDICINE_ID = medicine.MEDICINE_ID WHERE inventory.MEDICINE_ID = '17' AND inventory.INV_EXPD = (SELECT @MIN:=MIN(inventory.INV_EXPD) AS MINI FROM inventory WHERE inventory.MEDICINE_ID = '17' AND inventory.INV_QTY > 0)";


"SELECT * FROM inventory INNER JOIN medicine ON inventory.MEDICINE_ID = medicine.MEDICINE_ID INNER JOIN adjustments ON inventory.INV_ID = adjustments.INV_ID"

"SELECT *, @MED:=inventory.MEDICINE_ID, @RES:=(SELECT MAX(inventory.INV_EXPD) AS MAXD FROM inventory WHERE inventory.MEDICINE_ID = @MED) AS EXP FROM inventory INNER JOIN medicine ON inventory.MEDICINE_ID = medicine.MEDICINE_ID INNER JOIN adjustments ON inventory.INV_ID = adjustments.INV_ID GROUP BY inventory.INV_ID"