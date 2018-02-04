<!-- Modal Medical Records-->
<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="patientlist" class="modal fade">
              <div class="modal-dialog">
                  <div class="modal-content">
                      <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                          <h4 class="modal-title">Patient List Month of January</h4>
                      </div>
                      <div class="modal-body">
					  <a class="btn btn-shadow btn-success btn-xs pull-right"><i class="icon-print"></i> Print</a>
					  <div class="adv-table">
								<table  class="display table table-bordered table-striped" id="example">
								  <thead>
								  <tr>
									  <th>Patient No.</th>
									  <th>Full Name</th>
									  <th>Gender</th>
									  <th class="hidden-phone">Type</th>
								  </tr>
								  </thead>
								  <tbody>
								  <tr class="gradeX">
									  <td>P1</td>
									  <td>Alessander Neal</td>
									  <td>Male</td>
									  <td class="center hidden-phone">Adult</td>
								  </tr>
								  <tr class="gradeX">
									  <td>P1</td>
									  <td>Alessander Neal</td>
									  <td>Male</td>
									  <td class="center hidden-phone">Adult</td>
								  </tr>
								  <tr class="gradeX">
									  <td>P1</td>
									  <td>Alessander Neal</td>
									  <td>Male</td>
									  <td class="center hidden-phone">Adult</td>
								  </tr>
								  </tbody>
								  </table>
							</div><br><br>
					</div>
                      <div class="modal-footer">
                        <span id="Error_Message" style="float: left; font-weight: bold;" class="text-danger"></span>
                        <span id="Success_Message" style="float: left; font-weight: bold;" class="text-success"></span>
          					<a data-dismiss="modal" class="btn btn-shadow btn-default" type="button">Cancel</a>
          					<a  class="btn btn-shadow btn-success" onclick="addMedicalRecord(<?php echo $Doctor['User_id']?>)"><i class="icon-check">&nbsp;</i>Save</a>
                      </div>
                  </div>
              </div>
          </div>
<!-- modal medical record end-->