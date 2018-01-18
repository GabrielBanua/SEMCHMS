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
      </script>