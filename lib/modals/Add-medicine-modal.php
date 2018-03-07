<!-- *******************************************Start Modal Add Medicines*********************************************************** -->
<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="AddMed" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
					<h4 class="modal-title">Add Medicines</h4>
			</div>
		<div class="modal-body">
			<form class="form-horizontal" role="form">
				<div class="form-group">
					<label class="col-md-3 col-sm-2 control-label">Category(Age):</label>
						<div class="col-lg-6">
							<select class="select2-single" id="MEDICINE_CAT">
								<option></option><!--for placeholder-->
								<option>Adult</option>
								<option>Children</option>
							</select>
						</div>
				</div>
				<div class="form-group">
					<label class="col-md-3 col-sm-2 control-label">Type:</label>
						<div class="col-lg-6">
							<select class="select2-single" id="MEDICINE_TYPE">
								<option></option><!--for placeholder-->
								<option>Analgesic</option>
								<option>Anti-Allergy</option>
								<option>Antibiotics</option>
								<option>Diabetics</option>
								<option>Hypertension</option>
								<option>OTROS</option>
								<option>Respiratory</option>
								<option>Stomach/Digestive</option>
								<option>Vitamins</option>
							</select>
						</div>
				</div>
				<div class="form-group">
					<label class="col-md-3 col-sm-2 control-label">Name of Medicines(Generic):</label>
						<div class="col-lg-6">
							<input type="text" id="MEDICINE_GNAME" class="form-control" required>
						</div>
				</div>
				<div class="form-group">
					<label class="col-md-3 col-sm-2 control-label">Brand Name:</label>
						<div class="col-lg-6">
							<input type="text" id="MEDICINE_BNAME" class="form-control" required>
						</div>
				</div>
				<div class="form-group">
					<label class="col-md-3 col-sm-2 control-label">Dosage Form:</label>
						<div class="col-lg-6">
							<select class="select2-single" id="MEDICINE_DFORM">
								<option></option><!--for placeholder-->
								<option>Tablet</option>
								<option>Syrup</option>
							</select>
						</div>
				</div>
				<div class="form-group">
					<label class="col-md-3 col-sm-2 control-label">Dose:</label>
						<div class="col-lg-6">
							<input type="text" id="MEDICINE_DOSE" class="form-control" required>
						</div>
				</div>
				<div class="form-group">
					<label class="col-md-3 col-sm-2 control-label">Re-order Point:</label>
						<div class="col-lg-4">
							<input type="text" id="#" class="form-control numonly" maxlength="4" required>
						</div>
				</div>
			</form>
		</div>
		<div class="modal-footer">
			<span id="Error_Message_AMED" style="float: left; font-weight: bold;" class="text-danger"></span>
            <span id="Success_Message_AMED" style="float: left; font-weight: bold;" class="text-success"></span>
			<a data-dismiss="modal" class="btn btn-shadow btn-default" type="button">Cancel</a>
			<a class="btn btn-shadow btn-success" type="submit" onclick="addMedicine()"><i class="icon-plus"></i> Add</a>
		</div>
		</div>
	</div>
</div>
<!-- ****************************************************MODAL END****************************************************************** -->