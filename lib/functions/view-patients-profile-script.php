<script type="text/javascript" charset="utf-8">
          $(document).ready(function() {
              $('#example').dataTable( {
                  "aaSorting": [[ 0, "asc" ]]
              } );
          } );
          $(document).ready(function() {
              $('#labrecords').dataTable( {
                  "aaSorting": [[ 0, "asc" ]]
              } );
          } );
      
      $(document).ready(function(){
          var Disease = $('#DISE_DISO').val();
          var Significant = $('#SIG_INJ').val(); 
          var Alcohol = $('#ALCO_DRUGS').val();
          var Medication = $('#MEDCT').val();
          var Assistive_dev = $('#ASSIST_DEV').val();
          var Treatment = $('#TRMT').val();
          var Hospitalized = $('#HPTL').val();
          var Person_Assist = $('#PERS_ASSIST').val();
          var Smoke = $('#SMOKE').val();
          var CB_Health = $('#CB_HEALTH_COND').val();
          var TU_Health = $('#TU_HEALTH_COND').val();   
          $('#DISE_DISO_TXTA').attr('disabled',true);
          $('#SIG_INJ_TXTA').attr('disabled',true);
          $('#ALCO_DRUGS_TXTA').attr('disabled',true);
          $('#MEDCT_TXTA').attr('disabled',true);
          $('#ASSIST_DEV_TXTA').attr('disabled',true);
          $('#HPTL_TXTA').attr('disabled',true);
          $('#TRMT_TXTA').attr('disabled',true);
          $('#SMOKE_TXTA').attr('disabled',true);
          $('#PERS_ASSIST_TXTA').attr('disabled',true);
          $('#CB_HEALTH_COND_TXTA').attr('disabled',true);
          $('#TU_HEALTH_COND_TXTA').attr('disabled',true);
          if(Disease == "Yes"){
            $('#DISE_DISO_TXTA').attr('disabled',false);
          }
          if(Significant == "Yes"){
            $('#SIG_INJ_TXTA').attr('disabled',false);
          }
          if(Alcohol == "Yes"){
            $('#ALCO_DRUGS_TXTA').attr('disabled',false);
          }
          if(Medication == "Yes"){
            $('#MEDCT_TXTA').attr('disabled',false);
          }
          if(Assistive_dev == "Yes"){
            $('#ASSIST_DEV_TXTA').attr('disabled',false);
          }
          if(Treatment == "Yes"){
            $('#TRMT_TXTA').attr('disabled',false);
          }
          if(Person_Assist == "Yes"){
            $('#PERS_ASSIST_TXTA').attr('disabled',false);
          }
          if(Hospitalized == "Yes"){
            $('#HPTL_TXTA').attr('disabled',false);
          }
          if(Smoke == "Yes"){
            $('#SMOKE_TXTA').attr('disabled',false);
          }
          if(CB_Health == "Yes"){
            $('#CB_HEALTH_COND_TXTA').attr('disabled',false);
          }
          if(TU_Health == "Yes"){
            $('#TU_HEALTH_COND_TXTA').attr('disabled',false);
          }
      });
        
    </script>
	  <script type="text/javascript">
	  $(document).ready(function () {
		  $(".select2-single").select2({placeholder: 'Please select option'});

		  $(".select2-multiple").select2();
	  });

    function addMedicalRecord(str){
          var Doctor_id = str;
          var Medillness = $('#MedRillness').val(); 
          var MedBP =  $('#MedRBP').val();
          var MedWeight = $('#MedRWeight').val();
          var MedTemp = $('#MedRTemp').val();
          var MedDate = $('#MedRDate').val();
          var Sched_id = '<?php echo $SCHED_ID; ?>';
          if(Sched_id == ''){
            alert("Please set a schedule first before adding consoltation information!");
          }else{
                if(Medillness == '' || MedBP == '' || MedWeight == '' || MedTemp == ''){
                  $('#Error_Message').html('Please fill in all fields! &nbsp;');
                }
                else{
                  $('#Error_Message').html('');
                    if (confirm('Are you sure you want to set schedule for this patient?')) {
                      $.ajax({
                            type: "POST",
                            url: "Server.php?p=addMedicalRecord",
                            data: "MedRillness="+Medillness+"&MedRBP="+MedBP+"&MedRWeight="+MedWeight+"&MedRTemp="+MedTemp+"&MedRDate="+MedDate+"&Sched_ID="+Sched_id+"&DOC_ID="+Doctor_id,
                            success: function(data){
                            $('#Success_Message').html('Successfully Added! &nbsp;');
                              setTimeout(function() {
                                $('#Success_Message').fadeOut('slow');
                              }, 1000);
                              setTimeout(function(){
                                window.location.reload();
                              }, 1500);
                            }
                          });
                    }else{
                      //do nothing
                    }
                }
          }
      }
    
function addTreatment(str){
          var Med_RID = str;
          var Diagnosis = $('#DIAG_DTLS-'+Med_RID).val(); 
          var Treatment =  $('#TREATMENT-'+Med_RID).val();
          var Remarks = $('#REMARKS-'+Med_RID).val();
          var FollowUp = $('#F_CHECKUP-'+Med_RID).val();
          var Doctor = $('#listofDoctor-'+Med_RID).val();
          var RefDoc = $('#Ref_Doc_name-'+Med_RID).val();
          var RefDoc_CN = $('#Ref_Doc_CN-'+Med_RID).val();
          var RefDoc_Add = $('#Ref_Doc_Add-'+Med_RID).val();

          if(Diagnosis == '' || Treatment == '' || Remarks == ''){
             $('#Error_Message-TRMT-'+Med_RID).html('Please fill all fields! &nbsp;');
          }else{
            $('#Error_Message-TRMT-'+Med_RID).html('');
           $.ajax({
                type: "POST",
                url: "Server.php?p=addTreatment",
                data: "DGN="+Diagnosis+"&TRMT="+Treatment+"&RMKS="+Remarks+"&FPCHK="+FollowUp+"&DOC="+Doctor+"&MRID="+Med_RID+"&REFDN="+RefDoc+"&REF_CN="+RefDoc_CN+"&REF_ADD="+RefDoc_Add,
                success: function(data){
                  $('#Success_Message-TRMT-'+Med_RID).html('Successfully Added! &nbsp;');
                        setTimeout(function() {
                          $('#Success_Message-TRMT-'+Med_RID).fadeOut('slow');
                        }, 1000);
                        setTimeout(function(){
                          window.location.reload();
                        }, 1500);
                      }
          });
        }
      }
function editTreatment(id){
          var Update_ID = id;
          var Diagnosis = $('#DIAG-'+Update_ID).val(); 
          var Treatment =  $('#TREAT-'+Update_ID).val();
          var Remarks = $('#REMARK-'+Update_ID).val();
          var FollowUp = $('#FO_CHECKUP-'+Update_ID).val();
          var Doctor = $('#RlistofDoctor-'+Update_ID).val();
          var RefDoc = $('#RefDoc_name-'+Update_ID).val();
          var RefDoc_CN = $('#RefDoc_CN-'+Update_ID).val();
          var RefDoc_Add = $('#RefDoc_Add-'+Update_ID).val();
          if($('#c2-'+Update_ID).prop('checked')){
            var check = "check";
          }else{
            var check = "uncheck";
          }

          if(Diagnosis == '' || Treatment == '' || Remarks == ''){
             $('#Error_Message-ETRMT-'+Update_ID).html('Please fill all fields! &nbsp;');
          }else{
            $('#Error_Message-ETRMT-'+Update_ID).html('');
           $.ajax({
                type: "POST",
                url: "Server2.php?p=editTreatment",
                data: "DGNE="+Diagnosis+"&TRMTE="+Treatment+"&RMKSE="+Remarks+"&FPCHKE="+FollowUp+"&DOCE="+Doctor+"&MRIDE="+Update_ID+"&REFDNE="+RefDoc+"&REF_CNE="+RefDoc_CN+"&REF_ADDE="+RefDoc_Add+"&CHECK="+check,
                success: function(data){
                  $('#Success_Message-ETRMT-'+Update_ID).html('Successfully updated! &nbsp;');
                        setTimeout(function() {
                          $('#Success_Message-ETRMT-'+Update_ID).fadeOut('slow');
                        }, 1500);
                        setTimeout(function(){
                          window.location.reload();
                        }, 2000);
                      }
          });
        }
      }
      function RetrieveDoctor(str){
      var id = str;
   
        $.ajax({
                  type: "GET",
                  url: "Server.php?p=DoctorList",
                  success: function(data){
                    $('#listofDoctor-'+id).html(data);
                  }
        });
      }
      function RetrieveSaveDoctor(str){
      var id = str;
        $.ajax({
                  type: "POST",
                  url: "Server.php?p=RDoctorList",
                  data: "MR_ID="+id,
                  success: function(data){
                    $('#RlistofDoctor-'+id).html(data);
                  }
        });
      }
      function loadLabResult(MR_id, TR_id){
        var Mr_id = MR_id;
        var Tr_id = TR_id;
        $.ajax({
                  type: "POST",
                  url: "Server2.php?p=Loadlabrequest",
                  data: "MR_ID="+Mr_id+"&TR_ID="+Tr_id,
                  success: function(data){
                    $('#labreq-'+Mr_id).html(data);
                  }
        });
      }
      function addLabrequest(MR_id, TR_id){
        var Mr_id = MR_id;
        var TestReq = $('#TRequested-'+Mr_id).val();
        var Treatment_id = TR_id;
        if(TestReq == 'Select'){
          $('#Error_Message-LABRQ-'+Mr_id).html('Please select a request');
        }else{
          $('#Error_Message-LABRQ-'+Mr_id).html('');
        $.ajax({
          type: "POST",
          url:  "Server2.php?p=Addlabrequest",
          data: "T_REQ="+TestReq+"&T_ID="+Treatment_id,
          success: function(data){
            $('#Success_Message-LABRQ-'+Mr_id).html('Successfully requested! &nbsp;');
            setTimeout(function(){
              $('#Success_Message-LABRQ-'+Mr_id).fadeOut('slow');
              }, 1500);
              loadLabResult(Mr_id, Treatment_id);
          }
        });
        }
      }
      function DeleteLabRequest(Del, Med_id, Treat_id){
        var Deleted_id = Del;
        var Mr_id = Med_id;
        var Tr_id = Treat_id;
        if (confirm('Are you sure you want to delete this request?')) {
        $.ajax({
          type: "POST",
          url: "Server2.php?p=Deletelabrequest",
          data: "DEL_ID="+Deleted_id,
          success: function(data){
            $('#Success_Message-LABRQ-'+Mr_id).html('Successfully requested! &nbsp;');
            setTimeout(function(){
              $('#Success_Message-LABRQ-'+Mr_id).fadeOut('slow');
              }, 1500);
              loadLabResult(Mr_id, Tr_id);
          }
        });
        }else{
          //do nothing
        }
      }
	</script>