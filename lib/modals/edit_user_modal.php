<!-- Edit User MODAL-->
<div aria-hidden="true" aria-labelledby="myModalLabel-<?php echo $row['User_id']?>" role="dialog" tabindex="-1" id="EditModal-<?php echo $row['User_id']?>" class="modal fade">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                                    <h4 class="modal-title" id="myModalLabel-<?php echo $row['User_id']?>">Edit User</h4>
                                </div>
                                <div class="modal-body">

                                <form class="form-horizontal" role="form">
                                      <div class="form-group">
                                            <label class="col-md-3 col-sm-2 control-label">User ID:</label>
                                                <div class="col-lg-2">
                                                    <input type="text" class="form-control" value="<?php echo $row['User_id'] ?>" readonly class="form_datetime form-control">
                                                </div>
                                      </div>
                                      <div class="form-group">
                                            <label class="col-md-3 col-sm-2 control-label">Username:</label>
                                                <div class="col-lg-6">
                                                    <input type="text" class="form-control" id="UN-<?php echo $row['User_id'] ?>" value="<?php echo $row['Username']; ?>">
                                                </div>
                                      </div>
                                      <div class="form-group">
                                            <label class="col-md-3 col-sm-2 control-label">Old password:</label>
                                                <div class="col-lg-6">
                                                    <input type="password" class="form-control" id="PW-<?php echo $row['User_id'] ?>" value="<?php echo $row['Password']; ?>">
                                                </div>
                                      </div>
                                      <div class="form-group">
                                            <label class="col-md-3 col-sm-2 control-label">New password:</label>
                                                <div class="col-lg-6">
                                                    <input type="password" class="form-control" id="NP-<?php echo $row['User_id'] ?>" >
                                                </div>
                                      </div>
                                      <div class="form-group">
                                                      <label class="col-md-3 col-sm-2 control-label">Verify password:</label>
                                                      <div class="col-lg-6">
                                                          <input type="Password" id="VP-<?php echo $row['User_id'] ?>" class="form-control" required>
                                                      </div>
                                      
                                      </div>
                                      <div class="form-group">
                                            <label class="col-md-3 col-sm-2 control-label">First Name:</label>
                                                <div class="col-lg-6">
                                                    <input type="text" class="form-control" id="FN-<?php echo $row['User_id'] ?>" value="<?php echo $row['Firstname']; ?>">
                                                </div>
                                      </div>
                                      <div class="form-group">
                                            <label class="col-md-3 col-sm-2 control-label">Middle Name:</label>
                                                <div class="col-lg-6">
                                                    <input type="text" class="form-control" id="MN-<?php echo $row['User_id'] ?>" value="<?php echo $row['Middlename']; ?>">
                                                </div>
                                      </div>
                                      <div class="form-group">
                                            <label class="col-md-3 col-sm-2 control-label">Last Name:</label>
                                                <div class="col-lg-6">
                                                    <input type="text" class="form-control" id="LN-<?php echo $row['User_id'] ?>" value="<?php echo $row['Lastname']; ?>">
                                                </div>
                                      </div>
                                      <div class="form-group">
                                            <label class="col-md-3 col-sm-2 control-label">Gender:</label>
                                                <div class="col-lg-4">
                                                    <select class="form-control" id="GN-<?php echo $row['User_id'] ?>">
                                                      <option value="-None-" <?php
                                                      if ($row['Gender'] == "-None-") { echo " selected"; }?>>-None-</option>
                                                      <option value="Male" <?php
                                                      if ($row['Gender'] == "Male") { echo " selected"; }?>>Male</option>
                                                      <option value="Female" <?php
                                                      if ($row['Gender'] == "Female") { echo " selected"; }?>>Female</option>
                                                    </select>
                                                </div>
                                      </div>
                                      <div class="form-group">
                                            <label class="col-md-3 col-sm-2 control-label">Position:</label>
                                                <div class="col-lg-4">
                                                    <select class="form-control" id="PS-<?php echo $row['User_id'] ?>">
                                                      <option value="-None-" <?php
                                                      if ($row['Position'] == "-None-") { echo " selected"; }?>>-None-</option>
                                                      <option value="Admin" <?php
                                                      if ($row['Position'] == "Admin") { echo " selected"; }?>>Admin</option>
                                                      <option value="Doctor" <?php
                                                      if ($row['Position'] == "Doctor") { echo " selected"; }?>>Doctor</option>
                                                      <option value="Medtech" <?php
                                                      if ($row['Position'] == "Medtech") { echo " selected"; }?>>Medtech</option>
                                                      <option value="Pharmacist" <?php
                                                      if ($row['Position'] == "Pharmacist") { echo " selected"; }?>>Pharmacist</option>
                                                      <option value="Pathologist" <?php
                                                      if ($row['Position'] == "Pathologist") { echo " selected"; }?>>Pathlogist</option>
                                                    </select>
                                                </div>
                                      </div>
									  <div class="form-group">
											<label class="col-md-3 col-sm-2 control-label">License No.:</label>
											<div class="col-lg-6">
												<input type="text" id="LCN-<?php echo $row['User_id'] ?>" value="<?php echo $row['License_No']; ?>" class="form-control">
											</div>
									  </div>
									  <div class="form-group">
											<label class="col-md-3 col-sm-2 control-label">Date End:</label>
											<div class="col-lg-4">
												<input type="date" id="DE-<?php echo $row['User_id'] ?>"  value="<?php echo strftime('%Y-%m-%d', strtotime($row['DATE_END'])); ?>" class="form-control">
											</div>
									  </div>
                                      <div class="form-group">
											<label class="col-md-3 col-sm-2 control-label">Status:</label>
											<div class="col-lg-4">
												<select class="form-control" id="STS-<?php echo $row['User_id'] ?>">
                                                    <option value="Active" <?php
                                                        if ($row['STATUS'] == "Active") { echo " selected"; }?>>Active</option>
                                                    <option value="Inactive" <?php
                                                        if ($row['STATUS'] == "Inactive") { echo " selected"; }?>>Inactive</option>
												</select>
											</div>
									  </div>
                                </form>
                                </div>
                                <div class="modal-footer">
                                    <span id="Error_Message-<?php echo $row['User_id'] ?>" style="float: left; font-weight: bold;" class="text-danger"></span>
                                    <span id="Success_Message-<?php echo $row['User_id'] ?>" style="float: left; font-weight: bold;" class="text-success"></span>
                                    <a data-dismiss="modal" class="btn btn-shadow btn-default">Cancel</a>
                                    <a class="btn btn-shadow btn-success" onclick="UpdateUser(<?php echo $row['User_id'] ?>)"><i class="icon-plus"></i> Update</a>
                                </div>
                          </div>
                    </div>
              </div>
<!--MODAL END-->