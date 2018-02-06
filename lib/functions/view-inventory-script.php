<script type="text/javascript" charset="utf-8">
          $(document).ready(function() {
              $('#example').dataTable( {
                  "aaSorting": [[ 0, "desc" ]]
              } );
          } );
          $(document).ready(function() {
              $('#editmedtable').dataTable( {
                  "aaSorting": [[ 4, "desc" ]]
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

				if(MEDICINE_CAT == '' || MEDICINE_TYPE == '' || MEDICINE_GNAME == '' || MEDICINE_BNAME == '' || MEDICINE_DFORM == '' || MEDICINE_DOSE == ''){
					$('#Error_Message_AMED').html('Please fill in all fields! &nbsp;');
				}else{
					$('#Error_Message_AMED').html('');
			      	if(confirm('Are you sure you want to add this new medicine in the database?')) {
			        $.ajax({
			          type: "POST",
			          url: "Server.php?p=addMedicine",
			          data: "MEDICINE_CAT="+MEDICINE_CAT+"&MEDICINE_TYPE="+MEDICINE_TYPE+"&MEDICINE_GNAME="+MEDICINE_GNAME+"&MEDICINE_BNAME="+MEDICINE_BNAME+"&MEDICINE_DFORM="+MEDICINE_DFORM+"&MEDICINE_DOSE="+MEDICINE_DOSE,
			          success: function(data){
						$('#Success_Message_AMED').html('Successfully added new medicine!');
			            setTimeout(function() {
							$('#Success_Message_AMED').fadeOut('slow');
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
									}, 1500);
									setTimeout(function(){
										window.location.reload();
									}, 2000);
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
					function DispenseMed(str){
						var id = str;
						var Dispense_Qty = $('#INV_QTY-'+id).val();
						if(Dispense_Qty == ''){
							$('#Error_Message-Dis-'+id).html('Please input quantity');
						}else{
							$('#Error_Message-Dis-'+id).html('');
						$.ajax({
							type: "POST",
							url: "Server2.php?p=DispenseMedicine",
							data: "INV_ID="+id+"&DES_QTY="+Dispense_Qty,
							success: function(data){
								if(data != ''){
									$('#Warning_Message-Dis-'+id).html('Insufficient supply, only '+data+' is Subtracted')
								setTimeout(function() {
									$('#Success_Message-Dis-'+id).fadeOut('slow');
									}, 1000);
									setTimeout(function(){
										window.location.reload();
									}, 1500);
								}else{
									$('#Success_Message-Dis-'+id).html('Subtracted')
									setTimeout(function() {
									$('#Success_Message-Dis-'+id).fadeOut('slow');
									}, 1000);
									setTimeout(function(){
										window.location.reload();
									}, 1500);
								}
							}
						});
					}
				}
				function UpdateMedicine(M_id){
					var MEDICINE_CAT = $('#MEDICINE_CAT-'+M_id).val();
					var MEDICINE_TYPE = $('#MEDICINE_TYPE-'+M_id).val();
					var MEDICINE_GNAME = $('#MEDICINE_GNAME-'+M_id).val();
					var MEDICINE_BNAME = $('#MEDICINE_BNAME-'+M_id).val();
					var MEDICINE_DFORM = $('#MEDICINE_DFORM-'+M_id).val();
					var MEDICINE_DOSE = $('#MEDICINE_DOSE-'+M_id).val();
					var MDCINE_ID = M_id;
					if(MEDICINE_CAT == '' || MEDICINE_TYPE == '' || MEDICINE_GNAME == '' || MEDICINE_BNAME == '' || MEDICINE_DFORM == '' || MEDICINE_DOSE == ''){
						$('#Error_Message_EDMED-'+M_id).html('Please fill in all fields! &nbsp;');
					}else{
						$('#Error_Message_EDMED-'+M_id).html('');
						if(confirm('Are you sure you want to update this medicine in the database?')) {
							$.ajax({
								type: "POST",
								url: "Server2.php?p=EditMedicineInfo",
								data: "MEDICINE_CAT="+MEDICINE_CAT+"&MEDICINE_TYPE="+MEDICINE_TYPE+"&MEDICINE_GNAME="+MEDICINE_GNAME+"&MEDICINE_BNAME="+MEDICINE_BNAME+"&MEDICINE_DFORM="+MEDICINE_DFORM+"&MEDICINE_DOSE="+MEDICINE_DOSE+"&MED_ID="+MDCINE_ID,
								success: function(data){
									$('#Success_Message_EDMED-'+M_id).html('Successfully updated medicine!');
									setTimeout(function() {
										$('#Success_Message_EDMED-'+M_id).fadeOut('slow');
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
		</script>