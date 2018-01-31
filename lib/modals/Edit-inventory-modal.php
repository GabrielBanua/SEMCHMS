<!-- ******************************************Start Model Edit Medicines*********************************************************** -->
<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="EditMed" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
					<h4 class="modal-title">Edit Medicines</h4>
			</div>
		<div class="modal-body">
			<form class="form-horizontal" role="form">
				<div class="form-group">
					<label class="col-md-3 col-sm-2 control-label">Date Arrived:</label>
						<div class="col-lg-6">
							<input id="INV_MEDICINE_DATEARR" type="date" class="form-control" required>
						</div>
				</div>
				<div class="form-group">
					<label class="col-md-3 col-sm-2 control-label">Category:</label>
						<div class="col-lg-6">
							<select class="select2-single" id="INV_MEDICINE_CAT">
								<option></option><!--for placeholder-->
								<option value="Adult">Adult</option>
								<option value="Children">Children</option>
							</select>
						</div>
				</div>
				<div class="form-group">
					<label class="col-md-3 col-sm-2 control-label">Type:</label>
						<div class="col-lg-6">
							<select class="select2-single" id="INV_MEDICINE_TYPE">
								<option></option><!--for placeholder-->
								<option value="Analgesic">Analgesic</option>
								<option value="Anti-Allergy">Anti-Allergy</option>
								<option value="Antibiotics">Antibiotics</option>
								<option value="Diabetics">Diabetics</option>
								<option value="Hypertension">Hypertension</option>
								<option value="OTROS">OTROS</option>
								<option value="Respiratory">Respiratory</option>
								<option value="Stomach/Digestive">Stomach/Digestive</option>
								<option value="Vitamins">Vitamins</option>
							</select>
						</div>
				</div>											
				<div class="form-group">
					<label class="col-md-3 col-sm-2 control-label">Name of Medicines(Generic):</label>
						<div class="col-lg-6">
							<select class="select2-single" id="INV_MEDICINE_GNAME">
								<option></option><!--for placeholder-->
							</select>
						</div>
				</div>
				<div class="form-group">
					<label class="col-md-3 col-sm-2 control-label">Brand Name:</label>
						<div class="col-lg-6">
							<select class="select2-single" id="INV_MEDICINE_BNAME">
								<option></option><!--for placeholder-->
							</select>
						</div>
				</div>
				<div class="form-group">
					<label class="col-md-3 col-sm-2 control-label">Dosage Form:</label>
						<div class="col-lg-6">
							<select class="select2-single" id="INV_MEDICINE_DF">
								<option></option><!--for placeholder-->
								<option value="Tablet">Tablet</option>
								<option value="Syrup">Syrup</option>
							</select>
						</div>
				</div>
				<div class="form-group">
					<label class="col-md-3 col-sm-2 control-label">Dose:</label>
						<div class="col-lg-6">
							<select class="select2-single" id="INV_MEDICINE_DS">
								<option></option><!--for placeholder-->
							</select>
						</div>
				</div>
				<div class="form-group">
					<label class="col-md-3 col-sm-2 control-label">Quantity:</label>
						<div class="col-lg-2">
							<input type="text" id="INV_MEDICINE_QTY" class="form-control numonly" maxlength="5" required>
						</div>
				</div>
				<div class="form-group">
					<label class="col-md-3 col-sm-2 control-label">Expiration Date:</label>
						<div class="col-lg-6">
							<input id="INV_MEDICINE_EXPDATE" type="date" class="form-control" required>
						</div>
				</div>
				<div class="form-group">
					<label class="col-md-3 col-sm-2 control-label">Supplier:</label>
						<div class="col-lg-6">
							<input type="text" id="INV_MEDICINE_SUPP" class="form-control" required>
						</div>
				</div>
			</form>
		</div>
		<div class="modal-footer">
			<span id="Error_Message" class="text-danger"></span>
			<span id="Success_Message" class="text-success"></span>
			<a data-dismiss="modal" class="btn btn-default" type="button">Cancel</a>
			<a class="btn btn-success" onclick="addInventory()"><i class="icon-save"></i> Save</a>
		</div>
		</div>
	</div>
</div>
<!--*******************************************************MODAL END**************************************************************** -->