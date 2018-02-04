<!-- Edit User Start  MODAL-->
<div aria-hidden="true" aria-labelledby="myModalLabel-<?php echo $row['P_ID'] ?>" role="dialog" tabindex="-1" id="editpatient-<?php echo $row['P_ID'] ?>" class="modal fade">
  <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header">
              <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                <h4 class="modal-title" id="myModalLabel-<?php echo $row['P_ID'] ?>">Edit Patient Profile</h4>
          </div>
          <div class="modal-body">
              <header class="panel-heading tab-bg-dark-navy-blue ">
                  <ul class="nav nav-tabs">
                    <li class="active">
                      <a data-toggle="tab" href="#basicinfo-<?php echo $row['P_ID'] ?>"><i class="icon-user"></i> <b>Patient Basic Info</b></a>
                    </li>
                    <li class="">
                      <a data-toggle="tab" href="#healthissue-<?php echo $row['P_ID'] ?>"><i class="icon-medkit"></i> <b>Health Issue</b></a>
                    </li>
                  </ul>
              </header>
            <div class="panel-body">
              <div class="tab-content">
<!-- Basic info tab-->
                <div id="basicinfo-<?php echo $row['P_ID'] ?>" class="tab-pane active">
                 <form action="#" class="form-horizontal tasi-form">
                  <div class="form-group">
                    <div class="col-md-3">
                      <div class="fileupload fileupload-new" data-provides="fileupload">
                            <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                  <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt="" />
                            </div>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-4 control-label">Patient Id</label>
                      <div class="col-lg-4">
                        <input type="text" name="P_ID" id="P_ID" value="P000<?php echo $row['P_ID'] ?>" readonly class="form_datetime form-control">
                      </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-4 control-label">Date Registered:</label>
                      <div class="col-lg-4">
                        <input id="DATE_REG-<?php echo $row['P_ID'] ?>" name="DATE_REG" type="text" value="<?php echo $row['DATE_REG'] ?>" readonly class="form_datetime form-control">
                      </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-4 control-label">First Name</label>
                      <div class="col-lg-6">
                        <input id="P_FNAME-<?php echo $row['P_ID'] ?>" name="P_FNAME" type="text" class="form-control" value="<?php echo $row['P_FNAME'] ?>" autofocus required>
                      </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-4 control-label">Middle Name</label>
                      <div class="col-lg-6">
                        <input id="P_MNAME-<?php echo $row['P_ID'] ?>" name="P_MNAME" type="text" class="form-control" value="<?php echo $row['P_MNAME'] ?>" required>
                      </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-4 control-label">Last Name</label>
                      <div class="col-lg-6">
                        <input id="P_LNAME-<?php echo $row['P_ID'] ?>" name="P_LNAME" type="text" class="form-control" value="<?php echo $row['P_LNAME'] ?>" required>
                      </div>
                  </div>
				  <div class="form-group">
					<label class="col-md-4 control-label">Purok</label>
					<div class="col-lg-6">
						<input id="P_PUROK" name="P_PUROK" type="text" class="form-control" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-4 control-label">Baranggay</label>
					<div class="col-lg-6">
						<input id="P_BRGY" name="P_BRGY" type="text" class="form-control" required>
					</div>
				</div>
                  <div class="form-group">
                    <label class="col-md-4 control-label">Address</label>
                      <div class="col-lg-6">
                        <input id="P_ADD-<?php echo $row['P_ID'] ?>" name="P_ADD" type="text" class="form-control" value="<?php echo $row['P_ADD'] ?>" required>
                      </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-4 control-label">Gender</label>
                      <div class="col-lg-6">
                        <select class="form-control" name="P_GNDR" id="P_GNDR-<?php echo $row['P_ID'] ?>" required>
                          <option hidden value="--Select--"<?php
                            if ($row['P_GNDR'] == "--Select--") { echo " selected"; }?>>--Select--</option>
                          <option value="Male"<?php
                            if ($row['P_GNDR'] == "Male") { echo " selected"; }?>>Male</option>
                          <option value="Female"<?php
                            if ($row['P_GNDR'] == "Female") { echo " selected"; }?>>Female</option>
                        </select>
                      </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-4 control-label">Birthdate</label>
						<div class="col-lg-6">
							<input type="date" id="P_BDATE-<?php echo $row['P_ID'] ?>" value="<?php echo $row['P_BDATE'] ?>" class="form-control" required>
						</div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-4 control-label">Age</label>
                      <div class="col-lg-2">
                        <input id="P_AGE-<?php echo $row['P_ID'] ?>" name="P_AGE" type="text" class="form-control numonly" maxlength="2" value="<?php echo $row['P_AGE'] ?>" required>
                      </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-4 control-label">Category</label>
                      <div class="col-lg-6">
							<input id="P_TYPE-<?php echo $row['P_ID'] ?>" name="P_TYPE" type="text" class="form-control" value="<?php echo $row['P_TYPE'] ?>" required>
                      </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-4 control-label">Temperature (Celcius)</label>
                      <div class="col-lg-6">
                        <input id="P_TEMP-<?php echo $row['P_ID'] ?>" name="P_TEMP" type="text" class="form-control numdecimal" maxlength="5" value="<?php echo $row['P_TEMP'] ?>" required>
                      </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-4 control-label">Weight (Kg)</label>
                      <div class="col-lg-6">
                        <input id="P_WGHT-<?php echo $row['P_ID'] ?>" name="P_WGHT" type="text" class="form-control numonly" maxlength="4" value="<?php echo $row['P_WGHT'] ?>">
                      </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-4 control-label">Height (cm)</label>
                      <div class="col-lg-6">
                        <input id="P_HGHT-<?php echo $row['P_ID'] ?>" name="P_HGHT" type="text" class="form-control numonly" maxlength="4" value="<?php echo $row['P_HGHT'] ?>">
                      </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-4 control-label">Contact Number (+639)</label>
                      <div class="col-lg-6">
                        <input id="P_CN-<?php echo $row['P_ID'] ?>" name="P_CN" type="text" class="form-control numonly" maxlength="11" value="<?php echo $row['P_CN'] ?>" required>
                      </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-4 control-label">Religion</label>
                      <div class="col-lg-6">
                        <select class="form-control" name="P_REL" id="P_REL-<?php echo $row['P_ID'] ?>" required>
                          <option hidden value="--Select--"<?php
                            if ($row['P_REL'] == "--Select--") { echo " selected"; }?>>--Select--</option>
                          <option value="Catholic"<?php
                            if ($row['P_REL'] == "Catholic") { echo " selected"; }?>>Catholic</option>
                          <option value="Muslim"<?php
                            if ($row['P_REL'] == "Muslim") { echo " selected"; }?>>Muslim</option>
                        </select>
                      </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-4 control-label">Civil Status</label>
                      <div class="col-lg-6">
                        <select class="form-control" name="P_CVL_STAT" id="P_CVL_STAT-<?php echo $row['P_ID'] ?>" required>
                          <option hidden value="--Select--"<?php
                            if ($row['P_CVL_STAT'] == "--Select--") { echo " selected"; }?>>--Select--</option>
                          <option value="Single"<?php
                            if ($row['P_CVL_STAT'] == "Single") { echo " selected"; }?>>Single</option>
                          <option value="Widowed"<?php
                            if ($row['P_CVL_STAT'] == "Widowed") { echo " selected"; }?>>Widowed</option>
                          <option value="Married"<?php
                            if ($row['P_CVL_STAT'] == "Married") { echo " selected"; }?>>Married</option>
                          <option value="Divorced"<?php
                            if ($row['P_CVL_STAT'] == "Divorced") { echo " selected"; }?>>Divorced</option>
                          <option value="Separated"<?php
                            if ($row['P_CVL_STAT'] == "Separated") { echo " selected"; }?>>Separated</option>
                        </select>
                      </div>
                  </div>
          				<div class="form-group">
          					<label class="col-md-4 control-label">Years of Formal Education:</label>
          					<div class="col-lg-2">
          						<input id="YEARS_FE-<?php echo $row['P_ID'] ?>" maxlength="2" type="text" class="form-control numdecimal" value="<?php echo $row['YEARS_FE'] ?>" required>
          					</div>
          				</div>
          					<div class="form-group">
          						<label class="col-md-4 control-label">Current Occupation</label>
          						<div class="col-lg-6">
          							<select class="form-control" id="P_OCCU-<?php echo $row['P_ID'] ?>" required>
          								<option hidden value="--Select--"<?php
                            if ($row['P_OCCU'] == "--Select--") { echo " selected"; }?>>--Select--</option>
          								<option value="Paid Employment"<?php
                            if ($row['P_OCCU'] == "Paid Employment") { echo " selected"; }?>>Paid Employment</option>
          								<option value="Self-Employment"<?php
                            if ($row['P_OCCU'] == "Self-Employment") { echo " selected"; }?>>Self-Employment</option>
          								<option value="Non-paid work(Volunteer/Charity)"<?php
                            if ($row['P_OCCU'] == "Non-paid work(Volunteer/Charity)") { echo " selected"; }?>>Non-paid work(Volunteer/Charity)</option>
          								<option value="Student"<?php
                            if ($row['P_OCCU'] == "Student") { echo " selected"; }?>>Student</option>
          								<option value="Keeping house(for others)"<?php
                            if ($row['P_OCCU'] == "Keeping house(for others)") { echo " selected"; }?>>Keeping house(for others)</option>
          								<option value="House-maker(Own House)"<?php
                            if ($row['P_OCCU'] == "House-maker(Own House)") { echo " selected"; }?>>House-maker(Own House)</option>
          								<option value="Retired"<?php
                            if ($row['P_OCCU'] == "Retired") { echo " selected"; }?>>Retired</option>
          								<option value="Unemployed"<?php
                            if ($row['P_OCCU'] == "Unemployed") { echo " selected"; }?>>Unemployed</option>
          							</select>
          						</div>
          					</div>
          					<div class="form-group">
          						<label class="col-md-4 control-label">Current Occupation (Family Bread Winner)</label>
          						<div class="col-lg-6">
          							<select class="form-control" id="P_OCCU_FBW-<?php echo $row['P_ID'] ?>" required>
          								<option hidden value="--Select--"<?php
                            if ($row['P_OCCU_FBW'] == "--Select--") { echo " selected"; }?>>--Select--</option>
                          <option value="Paid Employment"<?php
                            if ($row['P_OCCU_FBW'] == "Paid Employment") { echo " selected"; }?>>Paid Employment</option>
                          <option value="Self-Employment"<?php
                            if ($row['P_OCCU_FBW'] == "Self-Employment") { echo " selected"; }?>>Self-Employment</option>
                          <option value="Non-paid work(Volunteer/Charity)"<?php
                            if ($row['P_OCCU_FBW'] == "Non-paid work(Volunteer/Charity)") { echo " selected"; }?>>Non-paid work(Volunteer/Charity)</option>
                          <option value="Student"<?php
                            if ($row['P_OCCU_FBW'] == "Student") { echo " selected"; }?>>Student</option>
                          <option value="Keeping house(for others)"<?php
                            if ($row['P_OCCU_FBW'] == "Keeping house(for others)") { echo " selected"; }?>>Keeping house(for others)</option>
                          <option value="House-maker(Own House)"<?php
                            if ($row['P_OCCU_FBW'] == "House-maker(Own House)") { echo " selected"; }?>>House-maker(Own House)</option>
                          <option value="Retired"<?php
                            if ($row['P_OCCU_FBW'] == "Retired") { echo " selected"; }?>>Retired</option>
                          <option value="Unemployed"<?php
                            if ($row['P_OCCU_FBW'] == "Unemployed") { echo " selected"; }?>>Unemployed</option>
          							</select>
          						</div>
          					</div>
                </form>
              </div>
              <div id="healthissue-<?php echo $row['P_ID'] ?>" class="tab-pane">
                <form role="form" class="form-horizontal tasi-form">
                  <div class="form-group">
                    <label class="col-md-4 control-label">A.5 Dominant Hand:</label>
                      <div class="col-lg-4">
                        <select class="form-control" name="DOM_HAND" id="DOM_HAND-<?php echo $row['P_ID'] ?>">
                          <option hidden value="--Select--"<?php
                            if ($row['DOM_HAND'] == "--Select--") { echo " selected"; }?>>--Select--</option>
                          <option value="Left"<?php
                            if ($row['DOM_HAND'] == "Left") { echo " selected"; }?>>Left</option>
                          <option value="Right"<?php
                            if ($row['DOM_HAND'] == "Right") { echo " selected"; }?>>Right</option>
                        </select>
                      </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-4 control-label">A.6 How do you rate Physical Health:</label>
                      <div class="col-lg-4">
                        <select class="form-control" name="PHY_HEALTH" id="PHY_HEALTH-<?php echo $row['P_ID'] ?>">
                          <option hidden value="--Select--"<?php
                            if ($row['PHY_HEALTH'] == "--Select--") { echo " selected"; }?>>--Select--</option>
                          <option value="Poor"<?php
                            if ($row['PHY_HEALTH'] == "Poor") { echo " selected"; }?>>Poor</option>
                          <option value="Good"<?php
                            if ($row['PHY_HEALTH'] == "Good") { echo " selected"; }?>>Good</option>
                          <option value="Very Good"<?php
                            if ($row['PHY_HEALTH'] == "Very Good") { echo " selected"; }?>>Very Good</option>
                        </select>
                      </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-4 control-label">A.7 How do you rate your health Mental and Emotional in the past Month?:</label>
                      <div class="col-lg-4">
                        <select class="form-control" name="MENT_EMO_HEAl" id="MENT_EMO_HEAl-<?php echo $row['P_ID'] ?>">
                          <option hidden value="--Select--"<?php
                            if ($row['MENT_EMO_HEAl'] == "--Select--") { echo " selected"; }?>>--Select--</option>
                          <option value="Poor"<?php
                            if ($row['MENT_EMO_HEAl'] == "Poor") { echo " selected"; }?>>Poor</option>
                          <option value="Good"<?php
                            if ($row['MENT_EMO_HEAl'] == "Good") { echo " selected"; }?>>Good</option>
                          <option value="Very Good"<?php
                            if ($row['MENT_EMO_HEAl'] == "Very Good") { echo " selected"; }?>>Very Good</option>
                        </select>
                      </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-4 control-label">A.8 Do you currently have any disease(s) or Disorder(s)?:</label>
                      <div class="col-lg-4">
                        <select class="form-control" id="DISE_DISO-<?php echo $row['P_ID'] ?>">
                          <option hidden value="--Select--"<?php
                            if ($row['DISE_DISO'] == "No information given!") { echo " selected"; }?>>--Select--</option>
                          <option value="Yes"<?php
                            if ($row['DISE_DISO'] != "No" && $row['DISE_DISO'] != "No information given!") { echo " selected"; }?>>Yes</option>
                          <option value="No"<?php
                            if ($row['DISE_DISO'] == "No") { echo " selected"; }?>>No</option>
                        </select>
                      </div>
                      <br>
          					  <div class="col-lg-10">
          							<textarea id="DISE_DISO_TXTA-<?php echo $row['P_ID'] ?>" style="resize:none" class="form-control" cols="2" rows="4" disabled required><?php if($row['DISE_DISO'] == "No"){ echo "";}else if($row['DISE_DISO'] == 'No information given!'){ echo "No information given!";}else{ echo $row['DISE_DISO'];}?></textarea>
          						</div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-4 control-label">A.9 Did you ever have any significant injuries that impact on your level of functioning?:</label>
                      <div class="col-lg-4">
                        <select class="form-control" name="SIG_INJ" id="SIG_INJ-<?php echo $row['P_ID'] ?>">
                          <option hidden value="--Select--"<?php
                            if ($row['SIG_INJ'] == "No information given!") { echo " selected"; }?>>--Select--</option>
                          <option value="Yes"<?php
                            if ($row['SIG_INJ'] != "No" && $row['SIG_INJ'] != "No information given!") { echo " selected"; }?>>Yes</option>
                          <option value="No"<?php
                            if ($row['SIG_INJ'] == "No") { echo " selected"; }?>>No</option>
                        </select>
                      </div>
                      <br>
          					  <div class="col-lg-10">
          							<textarea id="SIG_INJ_TXTA-<?php echo $row['P_ID'] ?>" style="resize:none" class="form-control" cols="2" rows="4" disabled required><?php if($row['SIG_INJ'] == "No"){ echo "";}else if($row['SIG_INJ'] == 'No information given!'){ echo "No information given!";}else{ echo $row['SIG_INJ'];}?></textarea>
          						</div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-4 control-label">A.10 have you been hospitalized in the last year?:</label>
                      <div class="col-lg-4">
                        <select class="form-control" name="HPTL" id="HPTL-<?php echo $row['P_ID'] ?>">
                         <option hidden value="--Select--"<?php
                            if ($row['HPTL'] == "No information given!") { echo " selected"; }?>>--Select--</option>
                          <option value="Yes"<?php
                            if ($row['HPTL'] != "No" && $row['HPTL'] != "No information given!") { echo " selected"; }?>>Yes</option>
                          <option value="No"<?php
                            if ($row['HPTL'] == "No") { echo " selected"; }?>>No</option>
                        </select>
                      </div>
                      <br>
          					  <div class="col-lg-10">
          							<textarea id="HPTL_TXTA-<?php echo $row['P_ID'] ?>" style="resize:none" class="form-control" cols="2" rows="4" disabled required><?php if($row['HPTL'] == "No"){ echo "";}else if($row['HPTL'] == 'No information given!'){ echo "No information given!";}else{ echo $row['HPTL'];}?></textarea>
          						</div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-4 control-label">A.11 are you taking medication?:</label>
                      <div class="col-lg-4">
                        <select class="form-control" name="MEDCT" id="MEDCT-<?php echo $row['P_ID'] ?>">
                          <option hidden value="--Select--"<?php
                            if ($row['MEDCT'] == "No information given!") { echo " selected"; }?>>--Select--</option>
                          <option value="Yes"<?php
                            if ($row['MEDCT'] != "No" && $row['MEDCT'] != "No information given!") { echo " selected"; }?>>Yes</option>
                          <option value="No"<?php
                            if ($row['MEDCT'] == "No") { echo " selected"; }?>>No</option>
                        </select>
                      </div>
                      <br>
                      <div class="col-lg-10">
                        <textarea id="MEDCT_TXTA-<?php echo $row['P_ID'] ?>" style="resize:none" class="form-control" cols="2" rows="4" disabled required><?php if($row['MEDCT'] == "No"){ echo "";}else if($row['MEDCT'] == 'No information given!'){ echo "No information given!";}else{ echo $row['MEDCT'];}?></textarea>
                      </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-4 control-label">A.12 Do you smoke?:</label>
                      <div class="col-lg-4">
                        <select class="form-control" name="SMOKE" id="SMOKE-<?php echo $row['P_ID'] ?>">
                          <option hidden value="--Select--"<?php
                            if ($row['SMOKE'] == "No information given!") { echo " selected"; }?>>--Select--</option>
                          <option value="Yes"<?php
                            if ($row['SMOKE'] != "No" && $row['SMOKE'] != "No information given!") { echo " selected"; }?>>Yes</option>
                          <option value="No"<?php
                            if ($row['SMOKE'] == "No") { echo " selected"; }?>>No</option>
                        </select>
                      </div>
                      <br>
          					  <div class="col-lg-10">
                        <br>
          							<textarea id="SMOKE_TXTA-<?php echo $row['P_ID'] ?>" style="resize:none" class="form-control" cols="2" rows="4" disabled required><?php if($row['SMOKE'] == "No"){ echo "";}else if($row['SMOKE'] == 'No information given!'){ echo "No information given!";}else{ echo $row['SMOKE'];}?></textarea>
          						</div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-4 control-label">A.13 Do you consume Alcohol or drugs?:</label>
                      <div class="col-lg-4">
                        <select class="form-control" name="ALCO_DRUGS" id="ALCO_DRUGS-<?php echo $row['P_ID'] ?>">
                          <option hidden value="--Select--"<?php
                            if ($row['ALCO_DRUGS'] == "No information given!") { echo " selected"; }?>>--Select--</option>
                          <option value="Yes"<?php
                            if ($row['ALCO_DRUGS'] != "No" && $row['ALCO_DRUGS'] != "No information given!") { echo " selected"; }?>>Yes</option>
                          <option value="No"<?php
                            if ($row['ALCO_DRUGS'] == "No") { echo " selected"; }?>>No</option>
                        </select>
                      </div>
                      <br>
          					  <div class="col-lg-10">
          							<textarea id="ALCO_DRUGS_TXTA-<?php echo $row['P_ID'] ?>" style="resize:none" class="form-control" cols="2" rows="4" disabled required><?php if($row['ALCO_DRUGS'] == "No"){ echo "";}else if($row['ALCO_DRUGS'] == 'No information given!'){ echo "No information given!";}else{ echo $row['ALCO_DRUGS'];}?></textarea>
          						</div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-4 control-label">A.14 Do you use Assistive Device?:</label>
                      <div class="col-lg-4">
                        <select class="form-control" name="ASSIST_DEV" id="ASSIST_DEV-<?php echo $row['P_ID'] ?>">
                          <option hidden value="--Select--"<?php
                            if ($row['ASSIST_DEV'] == "No information given!") { echo " selected"; }?>>--Select--</option>
                          <option value="Yes"<?php
                            if ($row['ASSIST_DEV'] != "No" && $row['ASSIST_DEV'] != "No information given!") { echo " selected"; }?>>Yes</option>
                          <option value="No"<?php
                            if ($row['ASSIST_DEV'] == "No") { echo " selected"; }?>>No</option>
                        </select>
                      </div>
                      <br>
          					  <div class="col-lg-10">
          							<textarea id="ASSIST_DEV_TXTA-<?php echo $row['P_ID'] ?>" style="resize:none" class="form-control" cols="2" rows="4" disabled required><?php if($row['ASSIST_DEV'] == "No"){ echo "";}else if($row['ASSIST_DEV'] == 'No information given!'){echo "No information given!";}else{ echo $row['ASSIST_DEV'];}?></textarea>
          						</div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-4 control-label">A.15 Do you have any person assisting you?:</label>
                      <div class="col-lg-4">
                        <select class="form-control" name="PERS_ASSIST" id="PERS_ASSIST-<?php echo $row['P_ID'] ?>">
                          <option hidden value="--Select--"<?php
                            if ($row['PERS_ASSIST'] == "No information given!") { echo " selected"; }?>>--Select--</option>
                          <option value="Yes"<?php
                            if ($row['PERS_ASSIST'] != "No" && $row['PERS_ASSIST'] != "No information given!") { echo " selected"; }?>>Yes</option>
                          <option value="No"<?php
                            if ($row['PERS_ASSIST'] == "No") { echo " selected"; }?>>No</option>
                        </select>
                      </div>
                      <br>
          					  <div class="col-lg-10">
          							<textarea id="PERS_ASSIST_TXTA-<?php echo $row['P_ID'] ?>" style="resize:none" class="form-control" cols="2" rows="4" disabled required><?php if($row['PERS_ASSIST'] == "No"){ echo "";}else if($row['PERS_ASSIST'] == 'No information given!'){echo "No information given!";}else{ echo $row['PERS_ASSIST'];}?></textarea>
          						</div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-4 control-label">A.16 Are you receiving any land of treatment for you Health?:</label>
                      <div class="col-lg-4">
                        <select class="form-control" name="TRMT" id="TRMT-<?php echo $row['P_ID'] ?>">
                          <option hidden value="--Select--"<?php
                            if ($row['TRMT'] == "No information given!") { echo " selected"; }?>>--Select--</option>
                          <option value="Yes"<?php
                            if ($row['TRMT'] != "No" && $row['TRMT'] != "No information given!") { echo " selected"; }?>>Yes</option>
                          <option value="No"<?php
                            if ($row['TRMT'] == "No") { echo " selected"; }?>>No</option>
                        </select>
                      </div>
                      <br>
          					  <div class="col-lg-10">
          							<textarea id="TRMT_TXTA-<?php echo $row['P_ID'] ?>" style="resize:none" class="form-control" cols="2" rows="4" disabled required><?php if($row['TRMT'] == "No"){ echo "";}else if($row['TRMT'] == 'No information given!'){echo "No information given!";}else{ echo $row['TRMT'];}?></textarea>
          						</div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-4 control-label">A.17 Additional Significant on your past and present health?:</label>
                      <div class="col-lg-6">
                        <input id="PP_HEATH-<?php echo $row['P_ID'] ?>" value="<?php echo $row['PP_HEATH'];?>" type="text" class="form-control" placeholder="">
                      </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-4 control-label">A.18 In the Past Month, cut back your usual activies because of your health condition?:</label>
					           <div class="col-lg-4">
                        <select class="form-control" name="CB_HEALTH_COND" id="CB_HEALTH_COND-<?php echo $row['P_ID'] ?>">
                          <option hidden value="--Select--"<?php
                            if ($row['CB_HEALTH_COND'] == "No information given!") { echo " selected"; }?>>--Select--</option>
                          <option value="Yes"<?php
                            if ($row['CB_HEALTH_COND'] != "No" && $row['CB_HEALTH_COND'] != "No information given!") { echo " selected"; }?>>Yes</option>
                          <option value="No"<?php
                            if ($row['CB_HEALTH_COND'] == "No") { echo " selected"; }?>>No</option>
                        </select>
                      </div>
					            <br>
          					  <div class="col-lg-10">
          							<textarea id="CB_HEALTH_COND_TXTA-<?php echo $row['P_ID'] ?>" style="resize:none" class="form-control" cols="2" rows="4" disabled required><?php if($row['CB_HEALTH_COND'] == "No"){ echo "";}else if($row['CB_HEALTH_COND'] == 'No information given!'){echo "No information given!";}else{ echo $row['CB_HEALTH_COND'];}?></textarea>
          						</div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-4 control-label">A.19 In the Past Month, have you been totally unable to carry out your usual activities?:</label>
					           <div class="col-lg-4">
                        <select class="form-control" name="TU_HEALTH_COND" id="TU_HEALTH_COND-<?php echo $row['P_ID'] ?>">
                          <option hidden value="--Select--"<?php
                            if ($row['TU_HEALTH_COND'] == "No information given!") { echo " selected"; }?>>--Select--</option>
                          <option value="Yes"<?php
                            if ($row['TU_HEALTH_COND'] != "No" && $row['TU_HEALTH_COND'] != "No information given!") { echo " selected"; }?>>Yes</option>
                          <option value="No"<?php
                            if ($row['TU_HEALTH_COND'] == "No") { echo " selected"; }?>>No</option>
                        </select>
                      </div>
					            <br>
          					  <div class="col-lg-10">
          							<textarea id="TU_HEALTH_COND_TXTA-<?php echo $row['P_ID'] ?>" style="resize:none" class="form-control" cols="2" rows="4" disabled required><?php if($row['TU_HEALTH_COND'] == "No"){ echo "";}else if($row['TU_HEALTH_COND'] == 'No information given!'){echo "No information given!";}else{ echo $row['TU_HEALTH_COND'];}?></textarea>
          						</div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
                  <div class="modal-footer">
                    <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
                    <button class="btn btn-success" onclick="UpdatePatient(<?php echo $row['P_ID']?>)">Save</button>
                  </div>
      </div>
    </div>
  </div>
<!--MODAL END-->