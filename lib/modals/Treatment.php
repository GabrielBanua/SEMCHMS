<!-- Treatment Records-->
<div aria-hidden="true" aria-labelledby="myModalLabel-<?php echo $MR['MR_ID']; ?>" role="dialog" tabindex="-1" id="treatment-<?php echo $MR['MR_ID']; ?>" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title" id="myModalLabel-<?php echo $MR['MR_ID']; ?>">Treatment</h4>
			</div>
		<div class="modal-body">
		<form class="form-horizontal" role="form">
			<div class="form-group">
				<label  class="col-lg-2 control-label">Illness/Ailments</label>
				<div class="col-lg-4">
					<input type="text" value="<?php echo $MR['MR_ILL']; ?>" class="form-control" readonly>
				</div>
				<label  class="col-lg-2 control-label">Date</label>
				<div class="col-lg-4">
					<input type="date" value="<?php echo $datetreatment ?>" class="form-control" readonly>
				</div>
			</div>
			<div class="form-group">
				<label  class="col-lg-2 control-label">Weight</label>
				<div class="col-lg-4">
					<input type="text" value="<?php echo $MR['MR_WEIGHT']; ?>" class="form-control" readonly>
				</div>
				<label  class="col-lg-2 control-label">BP
				</label>
				<div class="col-lg-4">
					<input type="text" value="<?php echo $MR['MR_BP']; ?>" class="form-control" readonly>
				</div>
			</div>
			<div class="form-group">
				<label  class="col-lg-2 control-label">Temperature</label>
				<div class="col-lg-4">
					<input type="text" value="<?php echo $MR['MR_TEMP']; ?>" class="form-control" readonly>
				</div>	
			</div>		
			<div class="form-group">
				<label  class="col-lg-2 control-label">Diagnosis:</label>
				<div class="col-lg-12">
				<textarea style="resize:none" id="DIAG_DTLS-<?php echo $MR['MR_ID']; ?>" class="form-control" cols="2" rows="4"></textarea>
				</div>
			</div>
			<div class="form-group">
				<label  class="col-lg-2 control-label">Treatment:</label>
				<div class="col-lg-12">
					<textarea style="resize:none" id="TREATMENT-<?php echo $MR['MR_ID']; ?>" class="form-control" cols="2" rows="4"></textarea>
				</div>
			</div>
			<div class="form-group">
				<label  class="col-lg-2 control-label">Remarks:</label>
				<div class="col-lg-12">
					<textarea style="resize:none" id="REMARKS-<?php echo $MR['MR_ID']; ?>" class="form-control" cols="2" rows="4"></textarea>
				</div>
			</div>
			<div class="form-group">
				<label  class="col-lg-2 control-label">Follow-Up Checkup</label>
				<div class="col-lg-4">
					<input type="date" id="F_CHECKUP-<?php echo $MR['MR_ID']; ?>" class="form-control" required>
				</div>
				<label  class="col-lg-2 control-label">Doctor</label>
				<div class="col-lg-4">
					<select class="select2-single" id="listofDoctor-<?php echo $MR['MR_ID']; ?>">
						<option></option><!--for placeholder-->
					</select>
				</div>
			</div>
			<div class="form-group">
				<div class="checkbox-inline pull-left">
					<label class="control-label">
						<input type="checkbox" name="c1-<?php echo $MR['MR_ID']; ?>" id="c1-<?php echo $MR['MR_ID']; ?>" onclick="showMe('referral-<?php echo $MR['MR_ID']; ?>', <?php echo $MR['MR_ID']; ?>)">&nbsp;Referral
					</label>
				</div>
			</div><hr>
			<div id='referral-<?php echo $MR['MR_ID']; ?>' style="display:none;">
				<div class="form-group">
					<label  class="col-lg-4 control-label">Doctor Name</label>
					<div class="col-lg-6">
						<input type="text" id="Ref_Doc_name-<?php echo $MR['MR_ID']; ?>" class="form-control" required>
					</div>
				</div>
				<div class="form-group">
					<label  class="col-lg-4 control-label">Contact No.</label>
					<div class="col-lg-6">
						<input type="text" id="Ref_Doc_CN-<?php echo $MR['MR_ID']; ?>" class="form-control numonly" maxlength="11">
					</div>
				</div>
				<div class="form-group">
					<label  class="col-lg-4 control-label">Address</label>
					<div class="col-lg-6">
						<input type="text" id="Ref_Doc_Add-<?php echo $MR['MR_ID']; ?>" class="form-control" required>
					</div>
				</div>
			</div>
		</form>
	</div>
	<div class="modal-footer">
		<span id="Error_Message-TRMT-<?php echo $MR['MR_ID']; ?>" style="float: left; font-weight: bold;" class="text-danger"></span>
		<span id="Success_Message-TRMT-<?php echo $MR['MR_ID']; ?>" style="float: left; font-weight: bold;" class="text-success"></span>
		<a data-dismiss="modal" class="btn btn-shadow btn-default">Cancel</a>
		<a class="btn btn-shadow btn-success" onclick="addTreatment(<?php echo $MR['MR_ID']; ?>)"><i class="icon-plus"></i>&nbsp; Add</a>
	</div>
	</div>
	</div>
</div>
<!-- modal -->