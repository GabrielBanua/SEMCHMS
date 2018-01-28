<!-- Modal Medical Records-->
<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="apointment" class="modal fade">
              <div class="modal-dialog">
                  <div class="modal-content">
                      <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                          <h4 class="modal-title">Add Medical Records</h4>
                      </div>
                      <div class="modal-body">
                          <form class="form-horizontal" role="form">
                                  <div class="form-group">
                                      <label  class="col-lg-3 control-label">Date</label>
                                      <div class="col-lg-6">
                                          <input type="datetime" id="MedRDate" class="form-control" value="<?php echo date("Y-m-d h:i:s A", $d); ?>" autofocus required>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label  class="col-lg-3 control-label">Illness/Ailments</label>
                                      <div class="col-lg-6">
                                          <input type="text" id="MedRillness" class="form-control" placeholder=" " required>
                                      </div>
                                  </div>
								   <div class="form-group">
                                      <label  class="col-lg-3 control-label">Blood Pressure</label>
                                      <div class="col-lg-3">
                                          <input type="text" id="MedRBP" class="form-control" placeholder=" " required>
                                      </div>
                                  </div>
								   <div class="form-group">
                                      <label  class="col-lg-3 control-label">Weight (kg)</label>
                                      <div class="col-lg-3">
                                          <input type="text" id="MedRWeight" class="form-control" placeholder=" " required>
                                      </div>
                                  </div>
								   <div class="form-group">
                                      <label  class="col-lg-3 control-label">Temperature (℃)</label>
                                      <div class="col-lg-3">
                                          <input type="text" id="MedRTemp" class="form-control" placeholder=" " required>
                                      </div>
                                  </div>
                  </form>
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