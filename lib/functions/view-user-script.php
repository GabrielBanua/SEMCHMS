 <!--script for this page only-->
 <script type="text/javascript" charset="utf-8">
          $(document).ready(function() {
              $('#example').dataTable( {
                  "aaSorting": [[ 0, "ASC" ]]
              } );
          } );
    function DeleteUser(str){
          var id = str;
          if (confirm('Are you sure you want to delete this user in the database?')) {
              $.ajax({
              type: "POST",
              url: "Server.php?p=DeleteUser",
              data: "User_id="+id,
              success: function(data){
                alert('Deleted successfully!');
                window.location.reload();
              }
          });
          } else {
              // Do nothing!
          } 
        }

        function UpdateUser(str){
          var User_id = str;
          var Username = $('#UN-'+str).val();
          var New_Password = $('#NP-'+str).val();
          var Current_Password = $('#PW-'+str).val();
          var Password = '';
          if(New_Password == ''){
            Password = Current_Password;
          }else{
              Password = New_Password;
          }
          var Firstname = $('#FN-'+str).val();
          var Lastname= $('#LN-'+str).val();
          var Middlename= $('#MN-'+str).val();
          var Gender= $('#GN-'+str).val();
          var Position= $('#PS-'+str).val();
          var License= $('#LCN-'+str).val();
          var DateEnd= $('#DE-'+str).val();
          var status= $('#STS-'+str).val();
          var Verify_Pass= $('#VP-'+str).val();
          if (confirm('Are you sure you want to update this user in the database?')) {
            if(Verify_Pass == New_Password){
          $.ajax({
            type: "POST",
            url: "Server.php?p=UpdateUser",
            data: "UN="+Username+"&PW="+Password+"&FN="+Firstname+"&LN="+Lastname+"&MN="+Middlename+"&GN="+Gender+"&PS="+Position+"&User_id="+User_id+"&LCN="+License+"&DE="+DateEnd+"&STS="+status,
            success: function(data){
                $('#Error_Message-'+str).html('');
                $('#Success_Message-'+str).html('Updated successfully! &nbsp;');
                    setTimeout(function() {
                          $('#Success_Message-'+str).fadeOut('slow');
                    }, 1000);
                    setTimeout(function(){
                          window.location.reload();
                    }, 1500);
              }
          });
            }else{
                $('#Error_Message-'+str).html("Password did not match!");
            }
          } else {
              // Do nothing!
          } 
        }

        function addNewUser(){
          var Username = $('#UN').val();
          var Password = $('#PW').val();
          var Firstname = $('#FN').val();
          var Lastname= $('#LN').val();
          var Middlename= $('#MN').val();
          var Gender= $('#GN').val();
          var Position= $('#PS').val();
          var License= $('#LCN').val();
          var Verify_Pass= $('#VP').val();
          if (confirm('Are you sure you want to add this user in the database?')) {
            if(Verify_Pass == Password){
          $.ajax({
            type: "POST",
            url: "Server.php?p=addNewUser",
            data: "UN="+Username+"&PW="+Password+"&FN="+Firstname+"&LN="+Lastname+"&MN="+Middlename+"&GN="+Gender+"&PS="+Position+"&LCN="+License,
            success: function(data){
                $('#Error_Message').html('');
                $('#Success_Message').html('Successfully Added! &nbsp;');
                    setTimeout(function() {
                          $('#Success_Message').fadeOut('slow');
                    }, 1500);
                    setTimeout(function(){
                          window.location.reload();
                    }, 2000);
              }
          });
            }else{
                $('#Error_Message').html("Password did not match!");
            }
          }else{
              // Do nothing!
          }
        }
 </script>