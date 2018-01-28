<!-- Register User Start  MODAL-->
<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="AddModal" class="modal fade">
                                  <div class="modal-dialog">
                                      <div class="modal-content">
                                          <div class="modal-header">
                                              <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                                              <h4 class="modal-title">User Registration</h4>
                                          </div>
                                          <div class="modal-body">

                                              <form class="form-horizontal" role="form">
                                                  <div class="form-group">
                                                      <label class="col-md-3 col-sm-2 control-label">Username:</label>
                                                      <div class="col-lg-6">
                                                          <input type="text" id="UN" class="form-control" required>
                                                      </div>
                                                  </div>
                          <div class="form-group">
                                                      <label class="col-md-3 col-sm-2 control-label">Password:</label>
                                                      <div class="col-lg-6">
                                                          <input type="Password" id="PW" class="form-control" required>
                                                      </div>
                                                  </div>
                          <div class="form-group">
                                                      <label class="col-md-3 col-sm-2 control-label">Verify password:</label>
                                                      <div class="col-lg-6">
                                                          <input type="Password" id="VP" class="form-control" required>
                                                      </div>
                                                  </div>
                          <div class="form-group">
                                                      <label class="col-md-3 col-sm-2 control-label">First Name:</label>
                                                      <div class="col-lg-6">
                                                          <input type="text" id="FN" class="form-control" required>
                                                      </div>
                                                  </div>
                          <div class="form-group">
                                                      <label class="col-md-3 col-sm-2 control-label">Middle Name:</label>
                                                      <div class="col-lg-6">
                                                          <input type="text" id="MN" class="form-control" required>
                                                      </div>
                                                  </div>
                          <div class="form-group">
                                                      <label class="col-md-3 col-sm-2 control-label">Last Name:</label>
                                                      <div class="col-lg-6">
                                                          <input type="text" id="LN" class="form-control" required>
                                                      </div>
                                                  </div>
                          <div class="form-group">
                                                      <label class="col-md-3 col-sm-2 control-label">Gender:</label>
                                                      <div class="col-lg-4">
                                                          <select class="form-control" id="GN" required>
                                                            <option hidden>-None-</option>
                                                            <option>Male</option>
                                                            <option>Female</option>
                                                          </select>
                                                      </div>
                                                  </div>
                          <div class="form-group">
                                                      <label class="col-md-3 col-sm-2 control-label">Position:</label>
                                                      <div class="col-lg-4">
                              <select class="form-control" id="PS" required>
                                <option hidden>-None-</option>
                                <option>Admin</option>
                                <option>Doctor</option>
                                <option>Medtech</option>
                                <option>Pharmacy</option>
                                <option>Pathlogist</option>
                              </select>
                                                      </div>
                                                  </div>
							<div class="form-group">
											<label class="col-md-3 col-sm-2 control-label">License No.:</label>
											<div class="col-lg-6">
												<input type="text" id="LCN" class="form-control">
											</div>
									  </div>
									  <div class="form-group">
											<label class="col-md-3 col-sm-2 control-label">Date End:</label>
											<div class="col-lg-4">
												<input type="date" id="DE" class="form-control">
											</div>
									  </div>
                                              </form>
                                          </div>
                    <div class="modal-footer">
                    <span id="Error_Message" style="float: left; font-weight: bold;" class="text-danger"></span>
		            <span id="Success_Message" style="float: left; font-weight: bold;" class="text-success"></span>
                      <a data-dismiss="modal" class="btn btn-shadow btn-default" type="button">Cancel</a>
                      <a class="btn btn-shadow btn-success"  onclick="addNewUser()"><i class="icon-save"></i> Register</a>
                    </div>
                                      </div>
                                  </div>
                              </div>
<!--MODAL END-->