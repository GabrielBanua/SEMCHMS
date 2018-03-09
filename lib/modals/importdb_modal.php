<!-- Treatment Records-->
<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="importdb" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title" id="#">Import Database</h4>
			</div>
		<div class="modal-body">
			<form class="form-horizontal" role="form">
				<div class="form-group">
				  <label class="control-label col-md-3">Select Database:</label>
				  <div class="controls col-md-9">
					  <div class="fileupload fileupload-new" data-provides="fileupload">
						<span class="btn btn-white btn-file">
						<span class="fileupload-new"><i class="icon-paper-clip"></i> Select file</span>
						<span class="fileupload-exists"><i class="icon-undo"></i> Change</span>
						<input type="file" accept=".sql" class="default" />
						</span>
						  <span class="fileupload-preview" style="margin-left:5px;"></span>
						  <a href="#" class="close fileupload-exists" data-dismiss="fileupload" style="float: none; margin-left:5px;"></a>
					  </div>
				  </div>
			  </div>
			</form>
		</div>
	<div class="modal-footer">
		<span id="Error_Message-TRMT-<?php echo $MR['MR_ID']; ?>" style="float: left; font-weight: bold;" class="text-danger"></span>
		<span id="Success_Message-TRMT-<?php echo $MR['MR_ID']; ?>" style="float: left; font-weight: bold;" class="text-success"></span>
		<a class="btn btn-shadow btn-success" type="submit" onclick="#"><i class="icon-download-alt"></i> Import</a>
		<a data-dismiss="modal" class="btn btn-shadow btn-default">Cancel</a>
	</div>
	</div>
	</div>
</div>
<!-- modal -->