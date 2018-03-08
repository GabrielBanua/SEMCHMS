<?php
$year = date('Y');
if(isset($_GET['year']))
{
	$year=$_GET['year'];
}

$DateToday = date('Y-m-d');
$conn = new mysqli("localhost", "root", "", "semhcms") or die(mysqli_error());
$full = $conn->query("SELECT COUNT(*) AS total, (SELECT @QTY:= FORMAT(inventory.INV_QTY_HIST / 2, 0)) AS QTY, (SELECT @QTYS:=FORMAT(inventory.INV_QTY_HIST / 2 + inventory.INV_QTY_HIST / 4,0)) AS QTYS FROM inventory INNER JOIN medicine ON inventory.MEDICINE_ID = medicine.MEDICINE_ID WHERE inventory.INV_QTY > (SELECT @QTYS:=FORMAT(inventory.INV_QTY_HIST / 2 + inventory.INV_QTY_HIST / 4,0)) AND NOT(inventory.INV_EXPD <= '$DateToday' OR inventory.INV_EXPD = '$DateToday') AND NOT(inventory.INV_QTY < medicine.ReOrder) AND (inventory.YEAR = '$year')") or die(mysqli_error());
$f1 = $full->fetch_array();
$avg = $conn->query("SELECT COUNT(*) AS total, (SELECT @QTY:= FORMAT(inventory.INV_QTY_HIST / 2, 0)) AS QTY, (SELECT @QTYS:=FORMAT(inventory.INV_QTY_HIST / 2 + inventory.INV_QTY_HIST / 4,0)) AS QTYS FROM inventory INNER JOIN medicine ON inventory.MEDICINE_ID = medicine.MEDICINE_ID WHERE inventory.INV_QTY BETWEEN (SELECT @QTY:= FORMAT(inventory.INV_QTY_HIST / 2, 0)) AND (SELECT @QTYS:=FORMAT(inventory.INV_QTY_HIST / 2 + inventory.INV_QTY_HIST / 4,0)) AND NOT(inventory.INV_EXPD <= '$DateToday' OR inventory.INV_EXPD = '$DateToday') AND (inventory.YEAR = '$year')") or die(mysqli_error());
$f2 = $avg->fetch_array();
$low = $conn->query("SELECT COUNT(*) AS total, (SELECT @QTY:= FORMAT(inventory.INV_QTY_HIST / 2, 0)) AS QTY, (SELECT @QTYS:=FORMAT(inventory.INV_QTY_HIST / 2 + inventory.INV_QTY_HIST / 4,0)) AS QTYS FROM inventory INNER JOIN medicine ON inventory.MEDICINE_ID = medicine.MEDICINE_ID WHERE inventory.INV_QTY BETWEEN medicine.ReOrder AND (SELECT @QTY:= FORMAT((inventory.INV_QTY_HIST / 2)-1, 0)) AND NOT(inventory.INV_EXPD <= '$DateToday' OR inventory.INV_EXPD = '$DateToday') AND (inventory.YEAR = '$year')") or die(mysqli_error());
$f3 = $low->fetch_array();
$reorder = $conn->query("SELECT COUNT(*) AS total FROM inventory INNER JOIN medicine ON inventory.MEDICINE_ID = medicine.MEDICINE_ID WHERE inventory.INV_QTY > '0' AND inventory.INV_QTY < medicine.ReOrder AND NOT(inventory.INV_EXPD <= '$DateToday' OR inventory.INV_EXPD = '$DateToday') AND (inventory.YEAR = '$year')") or die(mysqli_error());
$f4 = $reorder->fetch_array();

?>

<script type="text/javascript"> 
	window.onload = function() { 
		$("#medicine_status").CanvasJSChart({
			theme: "light2",
			animationEnabled: true,
			animationDuration: 1000,
			exportFileName: "XPERT", 
			exportEnabled: true,
			title: { 
				text: "St. Ezekiel Moreno Health Center",
				fontSize: 22
			},
			subtitles: [
				{
					text:"Medicines Status"
				}

			],
			legend :{ 
				verticalAlign: "center", 
				horizontalAlign: "left" 
			}, 
			data: [ 
				{ 
					type: "doughnut", 
					showInLegend: true, 
					toolTipContent: "{label} <br/> {y}", 
					indexLabel: "{y}", 
					dataPoints: [ 
						{ label: "Full",  y: 
						 <?php
						 if($f1 == ""){
							 echo 0;
						 }else{
							 echo $f1['total'];
						 }	
						 ?>, legendText: "Full"},
						{ label: "Average",  y: 
						 <?php
						 if($f2 == ""){
							 echo 0;
						 }else{
							 echo $f2['total'];
						 }	
						 ?>, legendText: "Average"},
						{ label: "Low",  y: 
						 <?php
						 if($f3 == ""){
							 echo 0;
						 }else{
							 echo $f3['total'];
						 }	
						 ?>, legendText: "Low"},
						{ label: "Reorder",  y: 
						 <?php
						 if($f4 == ""){
							 echo 0;
						 }else{
							 echo $f4['total'];
						 }	
						 ?>, legendText: "Reorder"}

					] 
				} 
			] 
		}); 
	} 
</script>