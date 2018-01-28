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
                    alert(data);
                  if(data == 'Taken'){
                    $('#Error_Message-'+str).html('This schedule is taken!');
                  }
                  else if(data == 'Late'){
                    $('#Error_Message-'+str).html('Time is late!');
                  }
                  else if(data == 'DateLate'){
                    $('#Error_Message-'+str).html('Date is late!');
                  }
                  else if(data == 'Success'){
                        $.ajax({
                          type: "POST",
                          url: "Server.php?p=SetSched",
                          data: "P_ID="+P_ID+"&SCHEDULE_DATE="+SCHEDULE_DATE+"&SCHEDULE_TIME="+SCHEDULE_TIME+"&SCHEDULE_PURPOSE="+SCHEDULE_PURPOSE,
                          success: function(data){
                                $('#Error_Message-'+str).html('');
                                $('#Success_Message-'+str).html('Successfully Added! &nbsp;');
                                setTimeout(function() {
                                  $('#Success_Message-'+str).fadeOut('slow');
                                }, 1000);
                                setTimeout(function(){
                                  window.location.reload();
                                }, 1200);
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