<script>
	  function addNewPatient(){
        var patient_id = '<?php echo $MaxID?>';
        var Brgy = $('#P_BRGY').val();
        var Purok = $('#P_PUROK').val(); 
        var Lastname = $('#P_LNAME').val();
        var Firstname = $('#P_FNAME').val();
        var Middlename = $('#P_MNAME').val();
        var Gender = $('#P_GNDR').val();
        var Birthday = $('#P_BDATE').val();
        var Age = $('#P_AGE').val();
        var Temperature = $('#P_TEMP').val();
        var Type = $('#P_TYPE').val();
        var Address = $('#P_ADD').val();
        var Contact = $('#P_CN').val();
        var Occupation = $('#P_OCCU').val();
        var OccupationFBW = $('#P_OCCU_FBW').val();
        var Religion = $('#P_REL').val();
        var Civil = $('#P_CVL_STAT').val();
        var Weight = $('#P_WGHT').val();
        var Height = $('#P_HGHT').val();
        var DateReg = $('#DATE_REG').val();
        var Past_pre = $('#PP_HEATH').val();
        var Treatment = $('#TRMT').val();
            if(Treatment == 'Yes'){
              Treatment = $('#TRMT_TXTA').val();
            }else if(Treatment == '--Select--'){
              Treatment = 'No information given!';
            }
        var Medication = $('#MEDCT').val();
            if(Medication == 'Yes'){
              Medication = $('#MEDCT_TXTA').val();
            }else if(Medication == '--Select--'){
              Medication = 'No information given!';
            }
        var Disease = $('#DISE_DISO').val();
            if(Disease == 'Yes'){
              Disease = $('#DISE_DISO_TXTA').val();
            }else if(Disease == '--Select--'){
              Disease = 'No information given!';
            }
        var Hospitalized = $('#HPTL').val();
            if(Hospitalized == 'Yes'){
              Hospitalized = $('#HPTL_TXTA').val();
            }else if(Hospitalized == '--Select--'){
              Hospitalized = 'No information given!';
            }
        var Dominant = $('#DOM_HAND').val();
        var Physical_H = $('#PHY_HEALTH').val();
        var Mental_Emo = $('#MENT_EMO_HEAl').val();
        var Significant = $('#SIG_INJ').val();
            if(Significant == 'Yes'){
              Significant = $('#SIG_INJ_TXTA').val();
            }else if(Significant == '--Select--'){
              Significant = 'No information given!';
            }
        var Smoke = $('#SMOKE').val();
            if(Smoke == 'Yes'){
              Smoke = $('#SMOKE_TXTA').val();
            }else if(Smoke == '--Select--'){
              Smoke = 'No information given!';
            }
        var Alcohol = $('#ALCO_DRUGS').val();
            if(Alcohol == 'Yes'){
              Alcohol = $('#ALCO_DRUGS_TXTA').val();
            }else if(Alcohol == '--Select--'){
              Alcohol = 'No information given!';
            }
        var Assistive_dev = $('#ASSIST_DEV').val();
            if(Assistive_dev == 'Yes'){
              Assistive_dev = $('#ASSIST_DEV_TXTA').val();
            }else if(Assistive_dev == '--Select--'){
              Assistive_dev = 'No information given!';
            }
        var Person_assist = $('#PERS_ASSIST').val();
            if(Person_assist == 'Yes'){
              Person_assist = $('#PERS_ASSIST_TXTA').val();
            }else if(Person_assist == '--Select--'){
              Person_assist = 'No information given!';
            }
        var Formal_ED = $('#YEARS_FE').val();
        var CB_Health = $('#CB_HEALTH_COND').val();
            if(CB_Health == 'Yes'){
              CB_Health = $('#CB_HEALTH_COND_TXTA').val();
            }else if(CB_Health == '--Select--'){
              CB_Health = 'No information given!';
            }
        var TU_Health = $('#TU_HEALTH_COND').val();
            if(TU_Health == 'Yes'){
              TU_Health = $('#TU_HEALTH_COND_TXTA').val();
            }else if(TU_Health == '--Select--'){
              TU_Health = 'No information given!';
            }

            if(Brgy == '' || Purok == '' || Lastname == '' || Firstname == '' || Middlename == '' || Gender == '--Select--' || Age == '' || Temperature == '' || Weight == '' || Height == '' || Type == '' || Address == '' || Contact == '' || Occupation == '--Select--' || Religion == '--Select--' || Civil == '--Select--' || Past_pre == '' || Treatment == '' || Medication == '' || Disease == '' || Hospitalized == '' || Dominant == '--Select--' || Physical_H == '--Select--' || Mental_Emo == '--Select--' || Significant == '' || Smoke == '' || Alcohol == '' || Assistive_dev == '' || Person_assist == '' || Formal_ED == '' || CB_Health == '' || TU_Health == '' || OccupationFBW == '--Select--'){
              $('#Error_Message').html('Please fill in all fields! &nbsp;');
            }else{
              $('#Error_Message').html('');
                if(confirm('Are you sure you want to add this patient record in the database?')){
                    $.ajax({
                      type: "POST",
                      url: "Server.php?p=addNewPatient",
                      data: "P_LNAME="+Lastname+"&P_FNAME="+Firstname+"&P_MNAME="+Middlename+"&P_GNDR="+Gender+"&P_BDATE="+Birthday+"&P_AGE="+Age+"&P_TEMP="+Temperature+"&P_WGHT="+Weight+"&P_HGHT="+Height+"&P_TYPE="+Type+"&P_ADD="+Address+"&P_CN="+Contact+"&P_OCCU="+Occupation+"&P_REL="+Religion+"&P_CVL_STAT="+Civil+"&PP_HEATH="+Past_pre+"&TRMT="+Treatment+"&MEDCT="+Medication+"&DISE_DISO="+Disease+"&HPTL="+Hospitalized+"&DOM_HAND="+Dominant+"&PHY_HEALTH="+Physical_H+"&MENT_EMO_HEAl="+Mental_Emo+"&SIG_INJ="+Significant+"&SMOKE="+Smoke+"&ALCO_DRUGS="+Alcohol+"&ASSIST_DEV="+Assistive_dev+"&PERS_ASSIST="+Person_assist+"&YEARS_FE="+Formal_ED+"&CB_HEALTH_COND="+CB_Health+"&TU_HEALTH_COND="+TU_Health+"&P_OCCU_FBW="+OccupationFBW+"&P_BRGY="+Brgy+"&P_PUROK="+Purok+"&DATE_REG="+DateReg,
                      success: function(data){
                  $('#Success_Message').html('Successfully Added! &nbsp;');
                  addnewpatientlog(patient_id);
                  setTimeout(function() {
                    $('#Success_Message').fadeOut('slow');
                  }, 2000);
                  setTimeout(function(){
                    window.location.reload();
                  }, 3000);
                }
              });
              }
              else{
                //do nothing
              }
            }
          }

        $('#DISE_DISO').change(function(){
          $('#DISE_DISO_TXTA').prop('disabled', !($(this).val() == "Yes"));
        });
        $('#SIG_INJ').change(function(){
          $('#SIG_INJ_TXTA').prop('disabled', !($(this).val() == "Yes"));
        });
        $('#MEDCT').change(function(){
          $('#MEDCT_TXTA').prop('disabled', !($(this).val() == "Yes"));
        });
        $('#ALCO_DRUGS').change(function(){
          $('#ALCO_DRUGS_TXTA').prop('disabled', !($(this).val() == "Yes"));
        });
        $('#ASSIST_DEV').change(function(){
          $('#ASSIST_DEV_TXTA').prop('disabled', !($(this).val() == "Yes"));
        });
        $('#TRMT').change(function(){
          $('#TRMT_TXTA').prop('disabled', !($(this).val() == "Yes"));
        });
        $('#PERS_ASSIST').change(function(){
          $('#PERS_ASSIST_TXTA').prop('disabled', !($(this).val() == "Yes"));
        });
        $('#HPTL').change(function(){
          $('#HPTL_TXTA').prop('disabled', !($(this).val() == "Yes"));
        });
        $('#SMOKE').change(function(){
          $('#SMOKE_TXTA').prop('disabled', !($(this).val() == "Yes"));
        });
        $('#CB_HEALTH_COND').change(function(){
          $('#CB_HEALTH_COND_TXTA').prop('disabled', !($(this).val() == "Yes"));
        });
        $('#TU_HEALTH_COND').change(function(){
          $('#TU_HEALTH_COND_TXTA').prop('disabled', !($(this).val() == "Yes"));
        });
    </script>
	<script language="JavaScript">
			Webcam.set({
				// live preview size
			width: 320,
			height: 240,
			
			// device capture size
			dest_width: 320,
			dest_height: 240,
			
			// final cropped size
			crop_width: 240,
			crop_height: 240,
			
			// format and quality
			image_format: 'jpeg',
			jpeg_quality: 90,
				
				// flip horizontal (mirror mode)
				flip_horiz: true
			});
			Webcam.attach( '#my_camera' );
		</script>
		
		<!-- Code to handle taking the snapshot and displaying it locally -->
	<script language="JavaScript">
		// preload shutter audio clip
		var shutter = new Audio();
		shutter.autoplay = false;
		shutter.src = navigator.userAgent.match(/Firefox/) ? 'shutter.ogg' : 'shutter.mp3';
		
		function preview_snapshot() {
			// play sound effect
			try { shutter.currentTime = 0; } catch(e) {;} // fails in IE
			shutter.play();
			

			// freeze camera so user can preview current frame
			Webcam.freeze();
			
			// swap button sets
			document.getElementById('pre_take_buttons').style.display = 'none';
			document.getElementById('post_take_buttons').style.display = '';
		}
		
		function cancel_preview() {
			// cancel preview freeze and return to live camera view
			Webcam.unfreeze();
			
			// swap buttons back to first set
			document.getElementById('pre_take_buttons').style.display = '';
			document.getElementById('post_take_buttons').style.display = 'none';
		}
		function save_photo(){
			Webcam.snap( function(uri){
				Webcam.upload(uri,'upload.php')
			});
		}
	</script>
	<script>
		$("#P_BDATE").change(function(){
			var date_of_birth = new Date($(this).val());
			var today = new Date();
			var age = Math.floor((today-date_of_birth) / (365.25 * 24 * 60 * 60 * 1000));
		$('#P_AGE').val(age);
		if(age > 14){
			$('#P_TYPE').val('Adult');
		}else{
			$('#P_TYPE').val('Minor');
		}
		});
	</script>

  <script>
  function addnewpatientlog(pid){
    var id = '<?php echo $ID?>';
    var patient_id = pid;
    $.ajax({
			type: "POST",
			url: "LOG_SERVER.php?p=addnewpatientlog",
			data: "ID="+id+"&PATIENT_ID="+patient_id,
			success: function(data){ 
      }
		});					
  }
  </script>