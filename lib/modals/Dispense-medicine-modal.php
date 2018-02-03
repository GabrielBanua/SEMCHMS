<!-- **********************************************Start dispense medicine Modal ******************************************************** -->
<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="DispenseMed" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
					<h4 class="modal-title">Dispense Medicines</h4>
			</div>
		<div class="modal-body">
			<form class="form-horizontal" role="form">
				<div class="form-group">
					<label class="col-md-3 col-sm-2 control-label">Name of Medicines(Generic):</label>
						<div class="col-lg-6">
							<input type="text" id="#" class="form-control" required>
						</div>
				</div>
				<div class="form-group">
					<label class="col-md-3 col-sm-2 control-label">Brand Name:</label>
						<div class="col-lg-6">
							<input type="text" id="#" class="form-control" required>
						</div>
				</div>
				<div class="form-group">
					<label class="col-md-3 col-sm-2 control-label">Dosage Form:</label>
						<div class="col-lg-6">
							<select class="select2-single" id="#">
								<option></option><!--for placeholder-->
								<option>Tablet</option>
								<option>Syrup</option>
							</select>
						</div>
				</div>
				<div class="form-group">
					<label class="col-md-3 col-sm-2 control-label">Quantity:</label>
						<div class="col-lg-2">
							<input type="text" id="#" class="form-control numonly" maxlength="5" required>
						</div>
				</div>
				<div class="form-group">
					<label class="col-md-3 col-sm-2 control-label">Dose:</label>
						<div class="col-lg-6">
							<input type="text" id="#" class="form-control" required>
						</div>
				</div>
			</form>
		</div>
		<div class="modal-footer">
			<a data-dismiss="modal" class="btn btn-shadow btn-default" type="button">Cancel</a>
			<a class="btn btn-shadow btn-success" type="submit" onclick="#"><i class="icon-minus"></i> Dispense</a>
		</div>
		</div>
	</div>
</div>
<!-- ****************************************************MODAL END****************************************************************** -->