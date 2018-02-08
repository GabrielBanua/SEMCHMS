<!-- Treatment Records-->
<div aria-hidden="true" aria-labelledby="myModalLabel-<?php echo $MR['MR_ID']; ?>" role="dialog" tabindex="-1" id="labtest-<?php echo $MR['MR_ID']; ?>" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title" id="myModalLabel-<?php echo $MR['MR_ID']; ?>">Laboratory Request</h4>
			</div>
		<div class="modal-body">
		<form class="form-horizontal" role="form">
			<div class="form-group">
					<label  class="col-lg-4 control-label">Test Requested</label>
					<div class="col-lg-4">
						<select class="form-control" id="TRequested-<?php echo $MR['MR_ID']; ?>">
							<option hidden>Select</option>
							<option>Blood Chemistry</option>
							<option>Fecalysis</option>
							<option>Hematology</option>
							<option>Urinalysis</option>
						</select>
					</div>
				</div>
				<table  class="table table-striped table-advance table-hover" id="LabRequestTable">
					<thead>
					<tr>
						<th class="text-center"><i class="icon-calendar"></i> Date Requested</th>
						<th class="text-center"><i class="icon-beaker"></i> Test Requested</th>
						<th class="text-center"> Action</th>
					</tr>
					</thead>
					<tbody id="labreq-<?php echo $MR['MR_ID'];?>">

					</tbody>
			</table>
		</form>
	</div>
	<div class="modal-footer">
		<span id="Error_Message-LABRQ-<?php echo $MR['MR_ID']; ?>" style="float: left; font-weight: bold;" class="text-danger"></span>
		<span id="Success_Message-LABRQ-<?php echo $MR['MR_ID']; ?>" style="float: left; font-weight: bold;" class="text-success"></span>
		<a data-dismiss="modal" class="btn btn-shadow btn-default">Cancel</a>
		<a class="btn btn-shadow btn-success" onclick="addLabrequest(<?php echo $MR['MR_ID'];?>,<?php echo $TRMNT_ID; ?>)"><i class="icon-plus"></i>&nbsp;Add Request</a>
	</div>
	</div>
	</div>
</div>
<!-- modal -->