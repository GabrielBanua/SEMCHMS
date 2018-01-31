<script type="text/javascript" charset="utf-8">
          $(document).ready(function() {
              $('#example').dataTable( {
                  "aaSorting": [[ 0, "asc" ]]
              } );
          } );

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