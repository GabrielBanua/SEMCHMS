<!-- Register set Schedule MODAL-->
<div aria-hidden="true" aria-labelledby="myModalLabel-<?php echo $row['P_ID']?>" role="dialog" tabindex="-1" id="setsched-<?php echo $row['P_ID']?>" class="modal fade">
                                  <div class="modal-dialog">
                                      <div class="modal-content">
                                          <div class="modal-header">
                                              <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                                              <h4 class="modal-title" id="myModalLabel-<?php echo $row['P_ID']?>">Set Appointment</h4>
                                          </div>
                                          <div class="modal-body">
                                                <form class="form-horizontal" role="form">
                                                  <div class="form-group">
                                                      <label class="col-md-3 col-sm-2 control-label">Patient Name:</label>
                                                      <div class="col-lg-6">
                                                          <input type="text" value="<?php echo $row['FullName']; ?>" class="form-control" readonly class="form_datetime form-control" disabled>
                                                      </div>
                                                  </div>
                                <div class="form-group">
                                  <label class="col-md-3 col-sm-2 control-label">Patient Type:</label>
                                      <div class="col-lg-6">
                                        <input type="text" value="<?php echo $row['P_TYPE']; ?>" readonly class="form_datetime form-control" disabled>
                                      </div>
                                </div>
                                <div class="form-group">
                                  <label class="col-md-3 col-sm-2 control-label">Gender:</label>
                                      <div class="col-lg-4">
                                        <select readonly class="form_datetime form-control" disabled>
                                          <option value="-None-"<?php
                                              if ($row['P_GNDR'] == "-None-") { echo " selected"; }?>>-None-</option>
                                          <option value="Male"<?php
                                              if ($row['P_GNDR'] == "Male") { echo " selected"; }?>>Male</option>
                                          <option value="Female"<?php
                                              if ($row['P_GNDR'] == "Female") { echo " selected"; }?>>Female</option>
                                        </select>
                                      </div>
                                </div>
                                <div class="form-group">
                                <label class="col-md-3 col-sm-2 control-label">Appointment Reason:</label>
                                    <div class="col-lg-4">
                                        <select class="form-control" id="SCHEDULE_PURPOSE-<?php echo $row['P_ID'] ?>">
                                            <option hidden>-None-</option>
                                            <option>Check Up</option>
                                            <option>Dental</option>
                                            <option>X-ray</option>
                                            <option>Laboratory Test</option>
                                        </select>
                                    </div>
                                </div>                              
                          <div class="form-group">
                              <label class="col-md-3 col-sm-2 control-label">Date of Appointment:</label>
								                <div class="col-lg-6">
                                        <input type="date" id="SCHEDULE_DATE-<?php echo $row['P_ID'] ?>" size="16" value="<?php echo $date ?>" class="form-control">
                                  </div>
                          </div>
						  <div class="form-group">
                              <label class="col-md-3 col-sm-2 control-label">Time:</label>
                                <div class="col-md-6">
                                    <input type="time" id="SCHEDULE_TIME-<?php date_default_timezone_set('Asia/Manila'); echo $row['P_ID'] ?>" value="<?php echo $CheckTime = date('H:i');?>" class="form-control">
                                </div>
                          </div>
                          </form>
                        </div>
                    <div class="modal-footer">
                      <span style="float: left; font-weight: bold;" id="Error_Message-<?php echo $row['P_ID'] ?>" class="text-danger"></span>
                      <span style="float: left; font-weight: bold;" id="Success_Message-<?php echo $row['P_ID'] ?>" class="text-success"></span>
                      <a data-dismiss="modal" class="btn btn-shadow btn-default" type="button">Cancel</a>
                      <a class="btn btn-shadow btn-success" type="button" onclick="SetSched(<?php echo $row['P_ID'] ?>)"><i class="icon-calendar"></i> Set Schedule</a>
                    </div>
                                      </div>
                                  </div>
                              </div>
            <!--MODAL END-->