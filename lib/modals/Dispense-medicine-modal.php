<!-- **********************************************Start dispense medicine Modal ******************************************************** -->
<div aria-hidden="true" aria-labelledby="myModalLabel-<?php echo $row['INV_ID'] ?>" role="dialog" tabindex="-1" id="DispenseMed-<?php echo $row['INV_ID'] ?>" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
					<h4 class="modal-title" id="myModalLabel-<?php echo $row['INV_ID'] ?>">Dispense Medicines</h4>
			</div>
		<div class="modal-body">
			<form class="form-horizontal" role="form">
				<div class="form-group">
					<label class="col-md-3 col-sm-2 control-label">Generic Name:</label>
						<div class="col-lg-6">
							<input type="text" id="INV_GNAME-<?php echo $row['INV_ID'] ?>" value="<?php echo $row['MEDICINE_GNAME'];?>" class="form-control" required>
						</div>
				</div>
				<div class="form-group">
					<label class="col-md-3 col-sm-2 control-label">Brand Name:</label>
						<div class="col-lg-6">
							<input type="text" id="INV_BNAME-<?php echo $row['INV_ID'] ?>" value="<?php echo $row['MEDICINE_BNAME'];?>" class="form-control" required>
						</div>
				</div>
				<div class="form-group">
					<label class="col-md-3 col-sm-2 control-label">Dosage Form:</label>
						<div class="col-lg-6">
							<input type="text" id="INV_DFORM-<?php echo $row['INV_ID'] ?>" value="<?php echo $row['MEDICINE_DFORM']; ?>" class="form-control" required>
						</div>
				</div>
				<div class="form-group">
					<label class="col-md-3 col-sm-2 control-label">Dose:</label>
						<div class="col-lg-6">
							<input type="text" id="INV_DOSE-<?php echo $row['INV_ID'] ?>" value="<?php echo $row['MEDICINE_DOSE']; ?>" class="form-control" required>
						</div>
				</div>
				<div class="form-group">
					<label class="col-md-3 col-sm-2 control-label">Quantity:</label>
						<div class="col-lg-2">
							<input type="text" id="INV_QTY-<?php echo $row['INV_ID'] ?>" class="form-control numonly" maxlength="5" required>
						</div>
				</div>
			</form>
		</div>
		<div class="modal-footer">
			<span id="Error_Message-Dis-<?php echo $row['INV_ID'] ?>" style="float: left; font-weight: bold;" class="text-danger"></span>
			<span id="Warning_Message-Dis-<?php echo $row['INV_ID'] ?>" style="float: left; font-weight: bold;" class="text-warning"></span>
			<span id="Success_Message-Dis-<?php echo $row['INV_ID'] ?>" style="float: left; font-weight: bold;" class="text-success"></span>
			<a data-dismiss="modal" class="btn btn-shadow btn-default" type="button">Cancel</a>
			<a class="btn btn-shadow btn-success" type="submit" onclick="DispenseMed(<?php echo $row['MEDICINE_ID']; ?>,<?php echo $row['INV_ID']; ?>)"><i class="icon-minus"></i> Dispense</a>
		</div>
		</div>
	</div>
</div>
<!-- ****************************************************MODAL END****************************************************************** -->