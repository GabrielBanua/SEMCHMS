<script type="text/javascript" charset="utf-8">
          $(document).ready(function() {
              $('#example').dataTable( {
                  "aaSorting": [[ 1, "asc" ]]
              } );
          } );
      

        function UpdateSched(str){
        var Sched_Id = str;
        var SCHEDULE_DATE = $('#SCHEDULE_DATE-'+str).val();
        var SCHEDULE_TIME = $('#SCHEDULE_TIME-'+str).val();
        var SCHEDULE_PURPOSE = $('#SCHEDULE_PURPOSE-'+str).val();
        if (confirm('Are you sure you want to set schedule for this patient?')) {   
              $.ajax({
                type: "POST",
                url: "Server.php?p=CheckSched",
                data: "P_ID="+Sched_Id+"&SCHEDULE_DATE="+SCHEDULE_DATE+"&SCHEDULE_TIME="+SCHEDULE_TIME+"&SCHEDULE_PURPOSE="+SCHEDULE_PURPOSE,
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
                      url: "Server.php?p=UpdateSched",
                      data: "Sched_Id="+Sched_Id+"&SCHEDULE_DATE="+SCHEDULE_DATE+"&SCHEDULE_TIME="+SCHEDULE_TIME+"&SCHEDULE_PURPOSE="+SCHEDULE_PURPOSE,
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
        function DeleteSched(str){
          var id = str;
          if (confirm('Are you sure you want to delete this schedule in the database?')) {
              $.ajax({
              type: "POST",
              url: "Server.php?p=DeleteSched",
              data: "SCHEDULE_ID="+id,
              success: function(data){
                alert('Deleted successfully!');
                window.location.reload();
              }
          });
          } else {
              // Do nothing!
          } 
        }
      </script>