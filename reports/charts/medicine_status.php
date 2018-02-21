<?php

$conn = new mysqli("localhost", "root", "", "semhcms") or die(mysqli_error());
$full = $conn->query("SELECT COUNT(*) as total FROM `inventory` WHERE (inv_qty >=150 && inv_qty <=500)") or die(mysqli_error());
$f1 = $full->fetch_array();
$avg = $conn->query("SELECT COUNT(*) as total FROM `inventory` WHERE (inv_qty >=100 && inv_qty <=149)") or die(mysqli_error());
$f2 = $avg->fetch_array();
$low = $conn->query("SELECT COUNT(*) as total FROM `inventory` WHERE (inv_qty >=51 && inv_qty <=99)") or die(mysqli_error());
$f3 = $low->fetch_array();
$reorder = $conn->query("SELECT COUNT(*) as total FROM `inventory` WHERE (inv_qty >=1 && inv_qty <=50)") or die(mysqli_error());
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