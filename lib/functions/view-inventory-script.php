<script type="text/javascript" charset="utf-8">
          $(document).ready(function() {
              $('#example').dataTable( {
                  "aaSorting": [[ 0, "desc" ]]
              } );
          } );
		  
		$(document).ready(function () {
		          $(".select2-single").select2({placeholder: 'Please select option'});

		          $(".select2-multiple").select2();
		});

		      function addMedicine(){
		      	var MEDICINE_CAT = $('#MEDICINE_CAT').val();
		      	var MEDICINE_TYPE = $('#MEDICINE_TYPE').val();
		      	var MEDICINE_GNAME = $('#MEDICINE_GNAME').val();
		      	var MEDICINE_BNAME = $('#MEDICINE_BNAME').val();
		      	var MEDICINE_DFORM = $('#MEDICINE_DFORM').val();
		      	var MEDICINE_DOSE = $('#MEDICINE_DOSE').val();

			      	if(confirm('Are you sure you want to add this new medicine in the database?')) {
			        $.ajax({
			          type: "POST",
			          url: "Server.php?p=addMedicine",
			          data: "MEDICINE_CAT="+MEDICINE_CAT+"&MEDICINE_TYPE="+MEDICINE_TYPE+"&MEDICINE_GNAME="+MEDICINE_GNAME+"&MEDICINE_BNAME="+MEDICINE_BNAME+"&MEDICINE_DFORM="+MEDICINE_DFORM+"&MEDICINE_DOSE="+MEDICINE_DOSE,
			          success: function(data){
			            alert('Added successfully!');
			            window.location.reload();
			          }
			        });
			      }else{
			        //do nothing
			      }
		      }
		  </script>
		  <script type="text/javascript">
					$(document).ready(function(){
					$('#INV_MEDICINE_TYPE').on('change',function(){
						var Medtype = $('#INV_MEDICINE_TYPE').val();
						var MedCat = $('#INV_MEDICINE_CAT').val();
						if(Medtype != '' && MedCat != ''){
							$.ajax({
								type: "POST",
								url: "Server.php?p=MedicineName",
								data: "INV_MEDTYPE="+Medtype+"&INV_MEDCAT="+MedCat,
								success: function(data){
									$('#INV_MEDICINE_GNAME').html(data);
									changeBrand();
								var CheckDF = $('#INV_MEDICINE_DF').val();
									if(CheckDF == 'Tablet' || CheckDF == 'Syrup'){
										$('#INV_MEDICINE_DF').html('<option></option>');
										$('#INV_MEDICINE_DS').html('<option></option>');
									}else{
										$('#INV_MEDICINE_DF').html('<option></option><option>Tablet</option><option>Syrup</option>');
									}
								}
							});
						}else{
						$('#INV_MEDICINE_GNAME').html('<option>Please select catergory</option>');
						}
					});
					$('#INV_MEDICINE_CAT').on('change',function(){
						var Medtype = $('#INV_MEDICINE_TYPE').val();
						var MedCat = $('#INV_MEDICINE_CAT').val();
						if(Medtype != '' && MedCat != ''){
							$.ajax({
								type: "POST",
								url: "Server.php?p=MedicineName",
								data: "INV_MEDTYPE="+Medtype+"&INV_MEDCAT="+MedCat,
								success: function(data){
									$('#INV_MEDICINE_GNAME').html(data);
									changeBrand();
									changeDF();
								var CheckDF = $('#INV_MEDICINE_DF').val();
									if(CheckDF == 'Tablet' || CheckDF == 'Syrup'){
										$('#INV_MEDICINE_DF').html('<option></option>');
										$('#INV_MEDICINE_DS').html('<option></option>');
									}else{
										$('#INV_MEDICINE_DF').html('<option></option><option>Tablet</option><option>Syrup</option>');
									}
								}
							});
						}else{
								$('#INV_MEDICINE_GNAME').html('<option></option>');	
						}
					});
					$('#INV_MEDICINE_GNAME').on('change',function(){
						var MedGname = $('#INV_MEDICINE_GNAME').val();
						if(MedGname){
							$.ajax({
								type: "POST",
								url: "Server.php?p=MedicineBName",
								data: "INV_MEDGNAME="+MedGname,
								success: function(data){
									$('#INV_MEDICINE_BNAME').html(data);
									changeDF();
								}
							});
						}else{
								$('#INV_MEDICINE_BNAME').html('<option>Please select name of medicine!<option>');

						}
					});
					$('#INV_MEDICINE_BNAME').on('change',function(){
						changeDF();
					});
					$('#INV_MEDICINE_DF').on('change',function(){
							var MedDF = $('#INV_MEDICINE_DF').val();
							var MedCat = $('#INV_MEDICINE_CAT').val();
							var Medtype = $('#INV_MEDICINE_TYPE').val();
							var MedGname = $('#INV_MEDICINE_GNAME').val();
							var MedBname = $('#INV_MEDICINE_BNAME').val();
							if(MedDF){
								$.ajax({
									type: "POST",
									url: "Server.php?p=MedicineDF",
									data: "MedDform="+MedDF+"&Medgname="+MedGname+"&MedBname="+MedBname+"&MedCat="+MedCat+"&Medtype="+Medtype,
									success: function(data){
										$('#INV_MEDICINE_DS').html(data);
									}
								});
							}
							else{
								$('#INV_MEDICINE_DS').html('<option><option>');
							}
						});
					});
					function changeBrand(){
						var MedGname = $('#INV_MEDICINE_GNAME').val();
							if(MedGname){
								$.ajax({
									type: "POST",
									url: "Server.php?p=MedicineBName",
									data: "INV_MEDGNAME="+MedGname,
									success: function(data){
										$('#INV_MEDICINE_BNAME').html(data);
									}
								});
							}else{
									$('#INV_MEDICINE_BNAME').html('<option>Please select name of medicine!<option>');
							}
					}
					function changeDF(){
							var MedDF = $('#INV_MEDICINE_DF').val();
							var MedCat = $('#INV_MEDICINE_CAT').val();
							var Medtype = $('#INV_MEDICINE_TYPE').val();
							var MedGname = $('#INV_MEDICINE_GNAME').val();
							var MedBname = $('#INV_MEDICINE_BNAME').val();
							if(MedDF){
								$.ajax({
									type: "POST",
									url: "Server.php?p=MedicineDF",
									data: "MedDform="+MedDF+"&Medgname="+MedGname+"&MedBname="+MedBname+"&MedCat="+MedCat+"&Medtype="+Medtype,
									success: function(data){
										$('#INV_MEDICINE_DS').html(data);
									}
								});
							}else{
								$('#INV_MEDICINE_DS').html('<option><option>');
							}
					}
					function addInventory(){
						var MedDform = $('#INV_MEDICINE_DF').val();
						var MedCat = $('#INV_MEDICINE_CAT').val();
						var Medtype = $('#INV_MEDICINE_TYPE').val();
						var MedGname = $('#INV_MEDICINE_GNAME').val();
						var MedBname = $('#INV_MEDICINE_BNAME').val();
						var MedDose  = $('#INV_MEDICINE_DS').val();
						var Qty  = $('#INV_MEDICINE_QTY').val();
						var ExpDate  = $('#INV_MEDICINE_EXPDATE').val();
						var DateArr  = $('#INV_MEDICINE_DATEARR').val();
						var Supplier  = $('#INV_MEDICINE_SUPP').val();

						if(MedDform == '' || MedCat == '' || Medtype == '' || MedGname == '' || MedBname == '' || MedDose == '' || Qty == '' || ExpDate == '' || DateArr == '' || Supplier == ''){
							$('#Error_Message').html('Please fill all fields! &nbsp;');
						}else{
							$('#Error_Message').html('');
							if (confirm('Are you sure you want to add stock for this medicine?')) {
							$.ajax({
								type: "POST",
								url: "Server.php?p=AddInventory",
								data: "MEDICINE_DFORM="+MedDform+"&MEDICINE_DOSE="+MedDose+"&MEDICINE_BNAME="+MedBname+"&MEDICINE_GNAME="+MedGname+"&MEDICINE_TYPE="+Medtype+"&MEDICINE_CAT="+MedCat+"&SUPPLIER="+Supplier+"&DATEARR="+DateArr+"&QTY="+Qty+"&EXPDATE="+ExpDate,
								success: function(data){
									$('#Success_Message').html('Successfully Added! &nbsp;');
									setTimeout(function() {
										$('#Success_Message').fadeOut('slow');
									}, 2000);
									setTimeout(function(){
										window.location.reload();
									}, 3000);
								}
							});
							}
						}
					}

                    function deleteInventory(str){
                        var INV_ID = str;
                        if (confirm('Are you sure you want to remove this stock from the inventory?')) {
							$.ajax({
								type: "POST",
								url: "Server2.php?p=DeleteInventory",
								data: "INV_ID="+INV_ID,
								success: function(data){
                                    alert('Successfully deleted from database')
								    window.location.reload();
								}
							});
							}
                    }
		</script>