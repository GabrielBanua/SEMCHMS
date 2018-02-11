<!-- Modal Medical Records-->
<div aria-hidden="true" aria-labelledby="myModalLabel-<?php echo $JAN['YEAR']; echo $MO; ?>" role="dialog" tabindex="-1" id="patientlist-<?php echo $JAN['YEAR']; echo $MO; ?>" class="modal fade">
              <div class="modal-dialog">
                  <div class="modal-content">
                      <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                          <h4 class="modal-title" id="myModalLabel-<<?php echo $JAN['YEAR']; echo $MO; ?>">Patients of <?php echo $MO; echo " "; echo $JAN['YEAR'];?></h4>
                      </div>
                      <div class="modal-body">
					  <a class="btn btn-shadow btn-success btn-sm pull-right" onclick="openPrintDialogue()"><i class="icon-print"></i> Print</a>
					  <br><br>
					  <div class="adv-table" id="printArea">
								<table  class="display table table-bordered table-striped example-<?php echo $JAN['YEAR']; ?>">
								  <thead>
								  <tr>
									  <th style="text-align:center;">Patient No.</th>
									  <th style="text-align:center;">Full Name</th>
									  <th style="text-align:center;">Gender</th>
									  <th style="text-align:center;">Type</th>
								  </tr>
								  </thead>
								  <tbody>
<?php
$stmt = mysql_query("SELECT *, CONCAT(P_FNAME,' ',P_MNAME,' ',P_LNAME) AS Fullname FROM patient WHERE YEAR = '$year' AND MONTH = '$month'");

while($result = mysql_fetch_array($stmt)){
?>
									<tr class="gradeX">
									<td><?php echo $result['P_ID'];?></td>
									<td><?php echo $result['Fullname']; ?></td>
									<td><?php echo $result['P_GNDR']; ?></td>
									<td><?php echo $result['P_TYPE']; ?></td>
									</tr>
<?php
}
?>
								  </tbody>
								  </table>
							</div><br><br>
					</div>
                      <div class="modal-footer">
                        <span id="Error_Message" style="float: left; font-weight: bold;" class="text-danger"></span>
                        <span id="Success_Message" style="float: left; font-weight: bold;" class="text-success"></span>
          					<a data-dismiss="modal" class="btn btn-shadow btn-default" type="button">Cancel</a>
          					<a  class="btn btn-shadow btn-success"><i class="icon-check">&nbsp;</i>Save</a>
                      </div>
                  </div>
              </div>
          </div>
<!-- modal medical record end-->