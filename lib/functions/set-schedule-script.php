<script type="text/javascript" charset="utf-8">
          $(document).ready(function() {
              $('#example').dataTable( {
                  "aaSorting": [[ 0, "asc" ]]
              } );
          } );

        
     
        function SetSched(str){
        var P_ID = str;
        var SCHEDULE_DATE = $('#SCHEDULE_DATE-'+str).val();
        var SCHEDULE_TIME = $('#SCHEDULE_TIME-'+str).val();
        var SCHEDULE_PURPOSE = $('#SCHEDULE_PURPOSE-'+str).val();
          if(SCHEDULE_DATE == '' || SCHEDULE_TIME == '' || SCHEDULE_PURPOSE == '-None-'){
            $('#Error_Message-'+str).html('Please fill all fields! &nbsp;');
          }else{
            if (confirm('Are you sure you want to set schedule for this patient?')) {   
              $.ajax({
                type: "POST",
                url: "Server.php?p=CheckSched",
                data: "P_ID="+P_ID+"&SCHEDULE_DATE="+SCHEDULE_DATE+"&SCHEDULE_TIME="+SCHEDULE_TIME+"&SCHEDULE_PURPOSE="+SCHEDULE_PURPOSE,
                success: function(data){
                  if(data == 'Taken'){
                    $('#Error_Message-'+str).html('This schedule is taken!');
                  }
                  else if(data == 'Late'){
                    $('#Error_Message-'+str).html('Time or date is late');
                  }
                  else if(data == 'Success'){
                        $.ajax({
                          type: "POST",
                          url: "Server.php?p=SetSched",
                          data: "P_ID="+P_ID+"&SCHEDULE_DATE="+SCHEDULE_DATE+"&SCHEDULE_TIME="+SCHEDULE_TIME+"&SCHEDULE_PURPOSE="+SCHEDULE_PURPOSE,
                          success: function(data){
                                $('#Error_Message-'+str).html('');
                                $('#Success_Message-'+str).html('Successfully Added! &nbsp;');
                                setSchedlog(P_ID, SCHEDULE_PURPOSE, SCHEDULE_DATE);
                                setTimeout(function() {
                                  $('#Success_Message-'+str).fadeOut('slow');
                                }, 1000);
                                setTimeout(function(){
                                  window.location.reload();
                                }, 1000);
                             } 
                          });
                    }
                 } 
              });    
        }
        else{
            //do nothing
            }
          }
      }
</script>
<script>
  function setSchedlog(pid, purpose, date){
    var id = '<?php echo $ID?>';
    var patient_id = pid;
    var sched_purpose = purpose;
    var sched_date = date;
    $.ajax({
			type: "POST",
			url: "LOG_SERVER.php?p=Setschedlog",
			data: "ID="+id+"&PID="+patient_id+"&SCHED_PURPOSE="+sched_purpose+"&SCHED_DATE="+sched_date,
			success: function(data){ 
      }
		});					
  }
</script>