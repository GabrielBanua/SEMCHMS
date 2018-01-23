<script>
        

        $(document).ready(function(){
        var Auth ='<?php echo $Position; ?>';
        if (Auth == "Admin") 
        {                       
            $('#Patient-li').show(); 
            $('#Schedule-li').show();
            $('#Inventory-li').show();
            $('#Laboratory-li').show();
            $('#Reports-li').show();
            $('#User-li').show();
            $('#Maintenance-li').show();
        }
        else if(Auth == "Doctor") {
            $('#User-li').hide();
            $('#Patient-li').hide();
            $('#Maintenance-li').hide();
            $('#Reports-li').hide();
            $('#Laboratory-li').hide();
            $('#Inventory-li').hide();
        }
        else if(Auth == "Medtech") {
            $('#User-li').hide();
            $('#Maintenance-li').hide();
            $('#Reports-li').hide();
            $('#Patient-li').hide();
            $('#Schedule-li').hide();
            $('#Inventory-li').hide();
        }
        });
       
       function change(str){
        var id = str;
        load(id);
        $('#DISE_DISO-'+id).change(function(){
          $('#DISE_DISO_TXTA-'+id).prop('disabled', !($(this).val() == "Yes"));
        });
        $('#SIG_INJ-'+id).change(function(){
          $('#SIG_INJ_TXTA-'+id).prop('disabled', !($(this).val() == "Yes"));
        });
        $('#MEDCT-'+id).change(function(){
          $('#MEDCT_TXTA-'+id).prop('disabled', !($(this).val() == "Yes"));
        });
        $('#ALCO_DRUGS-'+id).change(function(){
          $('#ALCO_DRUGS_TXTA-'+id).prop('disabled', !($(this).val() == "Yes"));
        });
        $('#HPTL-'+id).change(function(){
          $('#HPTL_TXTA-'+id).prop('disabled', !($(this).val() == "Yes"));
        });
        $('#ASSIST_DEV-'+id).change(function(){
          $('#ASSIST_DEV_TXTA-'+id).prop('disabled', !($(this).val() == "Yes"));
        });
        $('#SMOKE-'+id).change(function(){
          $('#SMOKE_TXTA-'+id).prop('disabled', !($(this).val() == "Yes"));
        });
        $('#PERS_ASSIST-'+id).change(function(){
          $('#PERS_ASSIST_TXTA-'+id).prop('disabled', !($(this).val() == "Yes"));
        });
        $('#TRMT-'+id).change(function(){
          $('#TRMT_TXTA-'+id).prop('disabled', !($(this).val() == "Yes"));
        });
        $('#CB_HEALTH_COND-'+id).change(function(){
          $('#CB_HEALTH_COND_TXTA-'+id).prop('disabled', !($(this).val() == "Yes"));
        });
        $('#TU_HEALTH_COND-'+id).change(function(){
          $('#TU_HEALTH_COND_TXTA-'+id).prop('disabled', !($(this).val() == "Yes"));
        });
        }

        function load(str){
          var id = str;
          var Disease = $('#DISE_DISO-'+id).val();
          var Significant = $('#SIG_INJ-'+id).val(); 
          var Alcohol = $('#ALCO_DRUGS-'+id).val();
          var Medication = $('#MEDCT-'+id).val();
          var Assistive_dev = $('#ASSIST_DEV-'+id).val();
          var Person_assist = $('#PERS_ASSIST-'+id).val();
          var Hospitalized = $('#HPTL-'+id).val();
          var Treatment = $('#TRMT-'+id).val();
          var Smoke = $('#SMOKE-'+id).val();
          var CB_Health = $('#CB_HEALTH_COND-'+id).val();
          var TU_Health = $('#TU_HEALTH_COND-'+id).val();
          $('#DISE_DISO_TXTA-'+id).attr('disabled',true);
          $('#SIG_INJ_TXTA-'+id).attr('disabled',true);
          $('#ALCO_DRUGS_TXTA-'+id).attr('disabled',true);
          $('#MEDCT_TXTA-'+id).attr('disabled',true);
          $('#SMOKE_TXTA-'+id).attr('disabled',true);
          $('#PERS_ASSIST_TXTA-'+id).attr('disabled',true);
          $('#HPTL_TXTA-'+id).attr('disabled',true);
          $('#TRMT_TXTA-'+id).attr('disabled',true);
          $('#ASSIST_DEV_TXTA-'+id).attr('disabled',true);
          $('#CB_HEALTH_COND_TXTA-'+id).attr('disabled',true);
          $('#TU_HEALTH_COND_TXTA-'+id).attr('disabled',true);

          if(Disease == "Yes"){
            $('#DISE_DISO_TXTA-'+id).attr('disabled',false);
          }
          if(Significant == "Yes"){
            $('#SIG_INJ_TXTA-'+id).attr('disabled',false);
          }
          if(Alcohol == "Yes"){
            $('#ALCO_DRUGS_TXTA-'+id).attr('disabled',false);
          }
          if(Medication == "Yes"){
            $('#MEDCT_TXTA-'+id).attr('disabled',false);
          }
          if(Assistive_dev == "Yes"){
            $('#ASSIST_DEV_TXTA-'+id).attr('disabled',false);
          }
          if(Person_assist == "Yes"){
            $('#PERS_ASSIST_TXTA-'+id).attr('disabled',false);
          }
          if(Treatment == "Yes"){
            $('#TRMT_TXTA-'+id).attr('disabled',false);
          }
          if(Hospitalized == "Yes"){
            $('#HPTL_TXTA-'+id).attr('disabled',false);
          }
          if(Smoke == "Yes"){
            $('#SMOKE_TXTA-'+id).attr('disabled',false);
          }
          if(CB_Health == "Yes"){
            $('#CB_HEALTH_COND_TXTA-'+id).attr('disabled',false);
          }
          if(TU_Health == "Yes"){
            $('#TU_HEALTH_COND_TXTA-'+id).attr('disabled',false);
          }
        }

        function UpdatePatient(str){
        var P_ID = str;
        var Lastname = $('#P_LNAME-'+str).val();
        var Firstname = $('#P_FNAME-'+str).val();
        var Middlename = $('#P_MNAME-'+str).val();
        var Gender = $('#P_GNDR-'+str).val();
        var Birthday = $('#P_BDATE-'+str).val();
        var Age = $('#P_AGE-'+str).val();
        var Temperature = $('#P_TEMP-'+str).val();
        var Type = $('#P_TYPE-'+str).val();
        var Address = $('#P_ADD-'+str).val();
        var Contact = $('#P_CN-'+str).val();
        var Occupation = $('#P_OCCU-'+str).val();
        var OccupationFBW = $('#P_OCCU_FBW-'+str).val();
        var Religion = $('#P_REL-'+str).val();
        var Civil = $('#P_CVL_STAT-'+str).val();
        var Weight = $('#P_WGHT-'+str).val();
        var Height = $('#P_HGHT-'+str).val();
        var Marital_stat = $('#MARITAL_STAT-'+str).val();
        var Formal_ED = $('#YEARS_FE-'+str).val();
        var Past_pre = $('#PP_HEATH-'+str).val();
        var Treatment = $('#TRMT-'+str).val();
        if(Treatment == 'Yes'){
              Treatment = $('#TRMT_TXTA-'+str).val();
            }else if(Treatment == '--Select--'){
              Treatment = 'No information given!';
            }
        var Medication = $('#MEDCT-'+str).val();
        if(Medication == 'Yes'){
              Medication = $('#MEDCT_TXTA-'+str).val();
            }else if(Medication == '--Select--'){
              Medication = 'No information given!';
            }
        var Disease = $('#DISE_DISO-'+str).val();
        if(Disease == 'Yes'){
              Disease = $('#DISE_DISO_TXTA-'+str).val();
            }else if(Disease == '--Select--'){
              Disease = 'No information given!';
            }
        var Hospitalized = $('#HPTL-'+str).val();
        if(Hospitalized == 'Yes'){
              Hospitalized = $('#HPTL_TXTA-'+str).val();
            }else if(Hospitalized == '--Select--'){
              Hospitalized = 'No information given!';
            }
        var Dominant = $('#DOM_HAND-'+str).val();
        var Physical_H = $('#PHY_HEALTH-'+str).val();
        var Mental_Emo = $('#MENT_EMO_HEAl-'+str).val();
        var Significant = $('#SIG_INJ-'+str).val();
        if(Significant == 'Yes'){
              Significant = $('#SIG_INJ_TXTA-'+str).val();
            }else if(Significant == '--Select--'){
              Significant = 'No information given!';
            }
        var Smoke = $('#SMOKE-'+str).val();
        if(Smoke == 'Yes'){
              Smoke = $('#SMOKE_TXTA-'+str).val();
            }else if(Smoke == '--Select--'){
              Smoke = 'No information given!';
            }
        var Alcohol = $('#ALCO_DRUGS-'+str).val();
        if(Alcohol == 'Yes'){
              Alcohol = $('#ALCO_DRUGS_TXTA-'+str).val();
            }else if(Alcohol == '--Select--'){
              Alcohol = 'No information given!';
            }
        var Assistive_dev = $('#ASSIST_DEV-'+str).val();
        if(Assistive_dev == 'Yes'){
              Assistive_dev = $('#ASSIST_DEV_TXTA-'+str).val();
            }else if(Assistive_dev == '--Select--'){
              Assistive_dev = 'No information given!';
            }
        var Person_assist = $('#PERS_ASSIST-'+str).val();
        if(Person_assist == 'Yes'){
              Person_assist = $('#PERS_ASSIST_TXTA-'+str).val();
            }else if(Person_assist == '--Select--'){
              Person_assist = 'No information given!';
            }
        var CB_Health = $('#CB_HEALTH_COND-'+str).val();
        if(CB_Health == 'Yes'){
              CB_Health = $('#CB_HEALTH_COND_TXTA-'+str).val();
            }else if(CB_Health == '--Select--'){
              CB_Health = 'No information given!';
            }
        var TU_Health = $('#TU_HEALTH_COND-'+str).val();
        if(TU_Health == 'Yes'){
              TU_Health = $('#TU_HEALTH_COND_TXTA-'+str).val();
            }else if(TU_Health == '--Select--'){
              TU_Health = 'No information given!';
            }

        if (confirm('Are you sure you want to update this user in the database?')) {
          $.ajax({
            type: "POST",
            url: "Server.php?p=UpdatePatient",
            data: "P_LNAME="+Lastname+"&P_FNAME="+Firstname+"&P_MNAME="+Middlename+"&P_GNDR="+Gender+"&P_BDATE="+Birthday+"&P_AGE="+Age+"&P_TEMP="+Temperature+"&P_WGHT="+Weight+"&P_HGHT="+Height+"&P_TYPE="+Type+"&P_ADD="+Address+"&P_CN="+Contact+"&P_OCCU="+Occupation+"&P_REL="+Religion+"&P_CVL_STAT="+Civil+"&PP_HEATH="+Past_pre+"&TRMT="+Treatment+"&MEDCT="+Medication+"&DISE_DISO="+Disease+"&HPTL="+Hospitalized+"&DOM_HAND="+Dominant+"&PHY_HEALTH="+Physical_H+"&MENT_EMO_HEAl="+Mental_Emo+"&SIG_INJ="+Significant+"&SMOKE="+Smoke+"&ALCO_DRUGS="+Alcohol+"&ASSIST_DEV="+Assistive_dev+"&PERS_ASSIST="+Person_assist+"&MARITAL_STAT="+Marital_stat+"&YEARS_FE="+Formal_ED+"&CB_HEALTH_COND="+CB_Health+"&TU_HEALTH_COND="+TU_Health+"&P_ID="+P_ID+"&P_OCCU_FBW="+OccupationFBW,
            success: function(data){
                alert('Updated successfully!');
                window.location.reload();
              }
          });
          } else {
              // Do nothing!
          } 
        }
    </script>
	<script>
		$("#P_BDATE").change(function(){
			var date_of_birth = new Date($(this).val());
			var today = new Date();
			var age = Math.floor((today-date_of_birth) / (365.25 * 24 * 60 * 60 * 1000));
		$('#P_AGE').val(age);
		if(age > 20){
			$('#P_TYPE').val('ADULT');
		}else{
			$('#P_TYPE').val('MINOR');
		}
		});
	</script>