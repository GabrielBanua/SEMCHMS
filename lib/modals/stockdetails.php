<!-- **********************************************Start dispense medicine Modal ******************************************************** -->
<div aria-hidden="true" aria-labelledby="myModalLabel-<?php echo $row['MEDICINE_ID']; ?>" role="dialog" tabindex="-1" id="stockdetails-<?php echo $row['MEDICINE_ID'];?>" class="modal fade">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
					<h4 class="modal-title" id="myModalLabel-<?php echo $row['MEDICINE_ID'];?>">Stock Details</h4>
			</div>
		<div class="modal-body">
			<div class="adv-table">
				<table class="table table-striped table-advance table-hover example-<?php echo $row['MEDICINE_ID']; ?>">
				  <thead>
				  <tr>
					  <th style="text-align:center;" width="15%">Date Arrived</th>
						<th style="text-align:center;" width="20%">Generic Name</th>
						<th style="text-align:center;" width="20%">Brand</th>
						<th style="text-align:center;" width="10%">Dosage Form</th>
						<th style="text-align:center;" width="10%">Dose</th>
						<th style="text-align:center;" width="15%">Expiry Date</th>
						<th style="text-align:center;" width="18%">Quantity</th>
						<th style="text-align:center;" width="15%">Status</th>
				  </tr>
				  </thead>
				  <tbody>
<?php
$FETCH_ID = $row['MEDICINE_ID'];

$INV_FETCH = mysql_query("SELECT * FROM inventory INNER JOIN medicine ON inventory.MEDICINE_ID = medicine.MEDICINE_ID WHERE inventory.MEDICINE_ID = '$FETCH_ID'");
while($FETCH_INV = mysql_fetch_array($INV_FETCH)){
?>
					  <tr class="gradeX">
						<td style="text-align:center;" width="15%"><?php echo $FETCH_INV['INV_DATE_ARV'] ?></td>
						<td style="text-align:center;" width="18%"><?php echo $FETCH_INV['MEDICINE_GNAME'] ?></td>
						<td style="text-align:center;" width="18%"><?php echo $FETCH_INV['MEDICINE_BNAME'] ?></td>
						<td style="text-align:center;" width="10%"><?php echo $FETCH_INV['MEDICINE_DFORM'] ?></td>
						<td style="text-align:center;" width="12%"><?php echo $FETCH_INV['MEDICINE_DOSE'] ?></td>
						<td style="text-align:center;" width="15%"><?php echo $FETCH_INV['INV_EXPD'] ?></td>
						<td style="text-align:center;" width="25%"><?php echo $FETCH_INV['INV_QTY']; echo " | "; echo $FETCH_INV['INV_QTY_HIST'];?></td>
						<td style="text-align:center;" width="15%"><?php $Qty = $FETCH_INV['INV_QTY_HIST'] / '2'; $QtyInitial = $Qty / '2'; $QtyStatus = $Qty + $QtyInitial; if($FETCH_INV['INV_EXPD'] <= $DateToday || $FETCH_INV['INV_EXPD'] == $DateToday){echo "<span class='label label-info label-mini'>Expired</span>";}else{if($FETCH_INV['INV_QTY'] ==  '0'){ echo "<span class='label label-default label-mini'>Depleted</span>";}else if($FETCH_INV['INV_QTY'] > '0' && $FETCH_INV['INV_QTY'] < $FETCH_INV['ReOrder']){ echo "<span class='label label-danger label-mini'>Re-order</span>";}else if($FETCH_INV['INV_QTY'] > $QtyStatus || $FETCH_INV['INV_QTY'] == $FETCH_INV['INV_QTY_HIST']){ echo "<span class='label label-primary label-mini'>Full</span>";}else if($FETCH_INV['INV_QTY'] >= $Qty && $FETCH_INV['INV_QTY'] <= $QtyStatus){ echo "<span class='label label-success label-mini'>Average</span>";}else if($FETCH_INV['INV_QTY'] < $Qty && $FETCH_INV['INV_QTY'] > $FETCH_INV['ReOrder']){ echo "<span class='label label-warning label-mini'>Low</span>";}} ?></td>
					  </tr>
<?php
}
?>
				  </tbody>
				</table>
			</div>
		</div>
		<br>
		<div class="modal-footer">
			<a data-dismiss="modal" class="btn btn-default" type="button">Cancel</a>
		</div>
		</div>
	</div>
	</div>

<!-- ****************************************************MODAL END****************************************************************** -->