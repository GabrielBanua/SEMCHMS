<!-- Modal Medical Records-->
<div aria-hidden="true" aria-labelledby="myModalLabel-<?php echo $labrequest['YEAR']; echo $MO;?>" role="dialog" tabindex="-1" id="lablist-<?php echo $labrequest['YEAR']; echo $MO;?>" class="modal fade">
              <div class="modal-dialog modal-md">
                  <div class="modal-content">
                      <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                          <h4 class="modal-title" id="myModalLabel-<?php echo $labrequest['YEAR']; echo $MO;?>">Laboratory records of <?php echo "$MO "; echo $labrequest['YEAR'];?></h4>
                      </div>
                      <div class="modal-body">
					  <div class="adv-table">
								<table  class="display table table-bordered table-striped example-<?php echo $labrequest['YEAR']; ?>">
								  <thead>
								  <tr>
									  <th style="text-align:center;">Laboratory No.</th>
									  <th style="text-align:center;">Full Name</th>
									  <th style="text-align:center;">Gender</th>
									  <th style="text-align:center;">Type</th>
									  <th style="text-align:center;">Brgy</th>
                                      <th style="text-align:center;">Laboratory type</th>
								  </tr>
								  </thead>
								  <tbody>
<?php
$stmt = mysql_query("SELECT patient.P_ID, patient.P_GNDR, patient.P_TYPE, patient.P_BRGY, laboratory_record.LAB_ID, lab_request.LBR_TYPE, CONCAT(P_FNAME,' ',P_MNAME,' ',P_LNAME) AS Fullname FROM patient INNER JOIN schedule ON patient.P_ID = schedule.P_ID INNER JOIN medical_record ON schedule.SCHEDULE_ID = medical_record.SCHED_ID INNER JOIN treatment ON medical_record.MR_ID = treatment.MR_ID INNER JOIN lab_request ON treatment.TRMT_ID = lab_request.TRMNT_ID INNER JOIN laboratory_record ON lab_request.LBR_ID = laboratory_record.LBR_ID WHERE lab_request.STATUS = 'Completed' AND (laboratory_record.MONTH = '$month' AND laboratory_record.YEAR = '$year')");

while($result = mysql_fetch_array($stmt)){
?>
									<tr class="gradeX">
									<td><?php echo $result['LAB_ID'];?></td>
									<td><?php echo $result['Fullname']; ?></td>
									<td><?php echo $result['P_GNDR']; ?></td>
									<td><?php echo $result['P_TYPE']; ?></td>
									<td><?php echo $result['P_BRGY']; ?></td>
                                    <td><?php echo $result['LBR_TYPE']; ?></td>
									</tr>
<?php
}
?>
								  </tbody>
								  </table>
							</div><br><br>
					</div>
                      <div class="modal-footer">
          					<a data-dismiss="modal" class="btn btn-shadow btn-default" type="button">Back</a>
                      </div>
                  </div>
              </div>
          </div>
<!-- modal medical record end-->