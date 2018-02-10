<!-- Modal Medical Records-->
<div aria-hidden="true" aria-labelledby="myModalLabel-<?php echo $YR; ?>" role="dialog" tabindex="-1" id="patientlist-<?php echo $YR; ?>" class="modal fade">
              <div class="modal-dialog">
                  <div class="modal-content">
                      <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                          <h4 class="modal-title" id="myModalLabel-<?php echo $YR; ?>">Patient List Month of January</h4>
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
<?php
error_reporting(0);

$DB_host = "localhost";
$DB_user = "root";
$DB_pass = "";
$DB_name = "semhcms";

$connection = mysql_connect($DB_host, $DB_user, $DB_pass) or die("could'nt connect to server!");
mysql_select_db($DB_name, $connection) or die("could'nt connect to database!");

$stmt = mysql_query("SELECT *, CONCAT(P_FNAME,' ',P_MNAME,' ',P_LNAME) AS Fullname FROM patient WHERE YEAR = '$YR' AND MONTH = 'Jan'");
while($LIST = mysql_fetch_array($stmt)){
?>
								  <tr class="gradeX">
									  <td><?php echo $LIST['P_ID'];?></td>
									  <td><?php echo $LIST['Fullname'];?></td>
									  <td><?php echo $LIST['P_GNDR'];?></td>
									  <td><?php echo $LIST['P_TYPE'];?></td>
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