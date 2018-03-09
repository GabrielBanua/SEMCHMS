<!--Edit Treatment Records-->
<div aria-hidden="true" aria-labelledby="myModalLabel-<?php echo $MR['MR_ID']; ?>" role="dialog" tabindex="-1" id="edit-treatment-<?php echo $MR['MR_ID']; ?>" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title" id="myModalLabel-<?php echo $MR['MR_ID']; ?>">Edit Treatment</h4>
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
				<label  class="col-lg-2 control-label"></label>
				<div class="col-lg-4">
				<a class="btn btn-shadow btn-success btn-md" onclick="loadLabResult(<?php echo $MR['MR_ID']; ?>,<?php echo $TRMNT_ID; ?>)" 
					data-toggle="modal" data-target="#labtest-<?php echo $MR['MR_ID']; ?>"><i class="icon-plus"></i> View Lab Request
				</a>
				</div>
			</div>
			<div class="form-group">
				<label  class="col-lg-2 control-label">Diagnosis:</label>
				<div class="col-lg-12">
				<textarea style="resize:none" id="DIAG-<?php echo $MR['MR_ID']; ?>" class="form-control" cols="2" rows="4"><?php echo $MR['DIAG_DTLS']; ?></textarea>
				</div>
			</div>
			<div class="form-group">
				<label  class="col-lg-2 control-label">Treatment:</label>
				<div class="col-lg-12">
					<textarea style="resize:none" id="TREAT-<?php echo $MR['MR_ID']; ?>" class="form-control" cols="2" rows="4"><?php echo $MR['TREATMENT']; ?></textarea>
				</div>
			</div>
			<div class="form-group">
				<label  class="col-lg-2 control-label">Remarks:</label>
				<div class="col-lg-12">
					<textarea style="resize:none" id="REMARK-<?php echo $MR['MR_ID']; ?>" class="form-control" cols="2" rows="4"><?php echo $MR['REMARKS']; ?></textarea>
				</div>
			</div>
			<div class="form-group">
				<label  class="col-lg-2 control-label">Follow-Up Checkup</label>
				<div class="col-lg-4">
					<input type="date" id="FO_CHECKUP-<?php echo $MR['MR_ID']; ?>" value="<?php if($MR['FCUP_DATE'] == ''){echo "placeholder='mm/dd/yy'";}else{echo strftime('%Y-%m-%d', strtotime($MR['FCUP_DATE']));} ?>" class="form-control" required>
				</div>
				<label  class="col-lg-2 control-label">Doctor</label>
				<div class="col-lg-4">
					<select class="select2-single" id="RlistofDoctor-<?php echo $MR['MR_ID']; ?>">
						<option></option><!--for placeholder-->
					</select>
				</div>
			</div>
			<div class="form-group">
				<div class="checkbox-inline pull-left">
					<label class="control-label">
						<input type="checkbox" id="c2-<?php echo $MR['MR_ID']; ?>" name="c2-<?php echo $MR['MR_ID']; ?>" <?php if(!empty($TR['RF_DOCNAME']) || !empty($TR['RF_CN']) || !empty($TR['RF_ADD'])){echo "checked";}?> onclick="ShowRefedit('editreferral-<?php echo $MR['MR_ID']; ?>', <?php echo $MR['MR_ID']; ?>)"> Referral
					</label>
				</div>
			</div><hr>
			<div id="editreferral-<?php echo $MR['MR_ID'];?>" <?php if(!empty($TR['RF_DOCNAME']) || !empty($TR['RF_CN']) || !empty($TR['RF_ADD'])){echo "style='display: block;'";}else{ echo "style='display: none;'";}?> >
				<div class="form-group">
					<label class="col-lg-4 control-label">Doctor Name</label>
					<div class="col-lg-6">
						<input type="text" id="RefDoc_name-<?php echo $MR['MR_ID']; ?>" value="<?php echo $TR['RF_DOCNAME']; ?>" class="form-control" required>
					</div>
				</div>
				<div class="form-group">
					<label  class="col-lg-4 control-label">Contact No.</label>
					<div class="col-lg-6">
						<input type="text" id="RefDoc_CN-<?php echo $MR['MR_ID']; ?>"  value="<?php echo $TR['RF_CN']; ?>" class="form-control" required>
					</div>
				</div>
				<div class="form-group">
					<label  class="col-lg-4 control-label">Address</label>
					<div class="col-lg-6">
						<input type="text" id="RefDoc_Add-<?php echo $MR['MR_ID']; ?>"  value="<?php echo $TR['RF_ADD']; ?>" class="form-control" required>
					</div>
				</div>
				<div class="form-group">
					<label  class="col-lg-4 control-label">Email Address</label>
					<div class="col-lg-6">
						<input type="email" id="RefDoc_email-<?php echo $MR['MR_ID']; ?>"  value="<?php echo $TR['RF_EMAIL']; ?>" class="form-control" required>
					</div>
				</div>
			</div>
		</form>
	</div>
	<div class="modal-footer">
		<span style="font-weight: bold; float: left;" id="Error_Message-ETRMT-<?php echo $MR['MR_ID']; ?>" class="text-danger"></span>
		<span style="font-weight: bold; float: left;" id="Success_Message-ETRMT-<?php echo $MR['MR_ID']; ?>" class="text-success"></span>
		<a data-dismiss="modal" class="btn btn-shadow btn-default">Cancel</a>
		<a class="btn btn-shadow btn-success" onclick="editTreatment(<?php echo $MR['MR_ID']; ?>)"><i class="icon-pencil"></i> Edit</a>
	</div>
	</div>
	</div>
</div>
<!-- modal -->