<div aria-hidden="true" aria-labelledby="myModalLabel-<?php echo $row['SCHEDULE_ID']?>" role="dialog" tabindex="-1" id="EditSched-<?php echo $row['SCHEDULE_ID']?>" class="modal fade">
                									<div class="modal-dialog">
                										<div class="modal-content">
                											<div class="modal-header">
                												<button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                												<h4 class="modal-title" id="myModalLabel-<?php echo $row['SCHEDULE_ID']?>">Edit Appointment</h4>
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
                                    <label class="col-md-3 col-sm-2 control-label">Date of Appointment:</label>
                                        <div class="col-lg-5">
                                              <input type="date" value="<?php echo strftime('%Y-%m-%d', strtotime($row['SCHEDULE_DATE'])); ?>" 
                        													id="SCHEDULE_DATE-<?php echo $row['SCHEDULE_ID'] ?>" size="16" class="form-control">
                                        </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 col-sm-2 control-label">Time:</label>
                                        <div class="col-md-5">
                                                    <input type="time" id="SCHEDULE_TIME-<?php echo $row['SCHEDULE_ID'] ?>" class="form-control" value="<?php $date = date("H:i", strtotime($row['SCHEDULE_TIME'])); echo $date; ?>">
                                        </div>
                                </div>
                              <div class="form-group">
                              <label class="col-md-3 col-sm-2 control-label">Appointment Reason:</label>
                                  <div class="col-lg-4">
                                      <select class="form-control" id="SCHEDULE_PURPOSE-<?php echo $row['SCHEDULE_ID'] ?>">
                                        <option value="-None-"<?php
                                              if ($row['SCHEDULE_PURPOSE'] == "-None-") { echo " selected"; }?>>-None-</option>
                                        <option value="Check Up"<?php
                                              if ($row['SCHEDULE_PURPOSE'] == "Check Up") { echo " selected"; }?>>Check Up</option>
                                        <option value="X-ray" <?php
                                              if ($row['SCHEDULE_PURPOSE'] == "X-ray") { echo " selected"; }?>>X-ray</option>
                                        <option value="Dental"<?php
                                              if ($row['SCHEDULE_PURPOSE'] == "Dental") { echo " selected"; }?>>Dental</option>
                                        <option value="Laboratory Test"<?php
                                              if ($row['SCHEDULE_PURPOSE'] == "Laboratory Test") { echo " selected"; }?>>Laboratory Test</option>
                                      </select>
                                  </div>
                          </div>
                          </form>
                        </div>
                    <div class="modal-footer">
                      <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
                      <button class="btn btn-success" type="button" onclick="UpdateSched(<?php echo $row['SCHEDULE_ID']; ?>)">Update Schedule</button>
                    </div>
                                      </div>
                                  </div>
                              </div>
            <!--MODAL END-->