<?php
$year = date('Y');
if(isset($_GET['year']))
{
	$year=$_GET['year'];
}

$conn = new mysqli("localhost", "root", "", "semhcms") or die(mysqli_error());
$qjan = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE `month` = 'Jan' && `year` = '$year'") or die(mysqli_error());
$fjan = $qjan->fetch_array();
$qfeb = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE `month` = 'Feb' && `year` = '$year'") or die(mysqli_error());
$ffeb = $qfeb->fetch_array();
$qmar = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE `month` = 'Mar' && `year` = '$year'") or die(mysqli_error());
$fmar = $qmar->fetch_array();
$qapr = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE `month` = 'Apr' && `year` = '$year'") or die(mysqli_error());
$fapr = $qapr->fetch_array();
$qmay = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE `month` = 'May' && `year` = '$year'") or die(mysqli_error());
$fmay = $qmay->fetch_array();
$qjun = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE `month` = 'Jun' && `year` = '$year'") or die(mysqli_error());
$fjun = $qjun->fetch_array();
$qjul = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE `month` = 'Jul' && `year` = '$year'") or die(mysqli_error());
$fjul = $qjul->fetch_array();
$qaug = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE `month` = 'Aug' && `year` = '$year'") or die(mysqli_error());
$faug = $qaug->fetch_array();
$qsep = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE `month` = 'Sep' && `year` = '$year'") or die(mysqli_error());
$fsep = $qsep->fetch_array();
$qoct = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE `month` = 'Oct' && `year` = '$year'") or die(mysqli_error());
$foct = $qoct->fetch_array();
$qnov = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE `month` = 'Nov' && `year` = '$year'") or die(mysqli_error());
$fnov = $qnov->fetch_array();
$qdec = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE `month` = 'Dec' && `year` = '$year'") or die(mysqli_error());
$fdec = $qdec->fetch_array();


// children
$c1 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE `P_AGE` <= 13 && `month` = 'Jan' && `year` = '$year'") or die(mysqli_error());
$c1 = $c1->fetch_array();

$c2 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE `P_AGE` <= 13 && `month` = 'Feb' && `year` = '$year'") or die(mysqli_error());
$c2 = $c2->fetch_array();

$c3 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE `P_AGE` <= 13 && `month` = 'Mar' && `year` = '$year'") or die(mysqli_error());
$c3 = $c3->fetch_array();

$c4 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE `P_AGE` <= 13 && `month` = 'Apr' && `year` = '$year'") or die(mysqli_error());
$c4 = $c4->fetch_array();

$c5 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE `P_AGE` <= 13 && `month` = 'May' && `year` = '$year'") or die(mysqli_error());
$c5 = $c5->fetch_array();

$c6 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE `P_AGE` <= 13 && `month` = 'Jun' && `year` = '$year'") or die(mysqli_error());
$c6 = $c6->fetch_array();

$c7 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE `P_AGE` <= 13 && `month` = 'Jul' && `year` = '$year'") or die(mysqli_error());
$c7 = $c7->fetch_array();

$c8 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE `P_AGE` <= 13 && `month` = 'Aug' && `year` = '$year'") or die(mysqli_error());
$c8 = $c8->fetch_array();

$c9 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE `P_AGE` <= 13 && `month` = 'Sep' && `year` = '$year'") or die(mysqli_error());
$c9 = $c9->fetch_array();

$c10 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE `P_AGE` <= 13 && `month` = 'Oct' && `year` = '$year'") or die(mysqli_error());
$c10 = $c10->fetch_array();

$c11 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE `P_AGE` <= 13 && `month` = 'Nov' && `year` = '$year'") or die(mysqli_error());
$c11 = $c11->fetch_array();

$c12 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE `P_AGE` <= 13 && `month` = 'Dec' && `year` = '$year'") or die(mysqli_error());
$c12 = $c12->fetch_array();

// adult
$a1 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE `P_AGE` >= 14 && `month` = 'Jan' && `year` = '$year'") or die(mysqli_error());
$a1 = $a1->fetch_array();

$a2 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE `P_AGE` >= 14 && `month` = 'Feb' && `year` = '$year'") or die(mysqli_error());
$a2 = $a2->fetch_array();

$a3 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE `P_AGE` >= 14 && `month` = 'Mar' && `year` = '$year'") or die(mysqli_error());
$a3 = $a3->fetch_array();

$a4 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE `P_AGE` >= 14 && `month` = 'Apr' && `year` = '$year'") or die(mysqli_error());
$a4 = $a4->fetch_array();

$a5 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE `P_AGE` >= 14 && `month` = 'May' && `year` = '$year'") or die(mysqli_error());
$a5 = $a5->fetch_array();

$a6 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE `P_AGE` >= 14 && `month` = 'Jun' && `year` = '$year'") or die(mysqli_error());
$a6 = $a6->fetch_array();

$a7 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE `P_AGE` >= 14 && `month` = 'Jul' && `year` = '$year'") or die(mysqli_error());
$a7 = $a7->fetch_array();

$a8 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE `P_AGE` >= 14 && `month` = 'Aug' && `year` = '$year'") or die(mysqli_error());
$a8 = $a8->fetch_array();

$a9 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE `P_AGE` >= 14 && `month` = 'Sep' && `year` = '$year'") or die(mysqli_error());
$a9 = $a9->fetch_array();

$a10 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE `P_AGE` >= 14 && `month` = 'Oct' && `year` = '$year'") or die(mysqli_error());
$a10 = $a10->fetch_array();

$a11 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE `P_AGE` >= 14 && `month` = 'Nov' && `year` = '$year'") or die(mysqli_error());
$a11 = $a11->fetch_array();

$a12 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE `P_AGE` >= 14 && `month` = 'Dec' && `year` = '$year'") or die(mysqli_error());
$a12 = $a12->fetch_array();

?>
<script type="text/javascript"> 
	window.onload = function(){ 
		$("#patient_population").CanvasJSChart({
			theme: "light2",
			zoomEnabled: true,
			zoomType: "x",
			panEnabled: true,
			animationEnabled: true,
			animationDuration: 1000,
			exportFileName: "Monthly Population", 
			exportEnabled: true,
			toolTip: {
				shared: true  
			},
			title: { 
				text: "Patient Population as of Year <?php echo $year?> ",
				fontSize: 20
			},
			legend: {
				cursor: "pointer",
				itemclick: function (e) {
					if (typeof (e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
						e.dataSeries.visible = false;
					} else {
						e.dataSeries.visible = true;
					}
					e.chart.render();
				}
			},
			axisX: {		       
				gridDashType: "dot",
				gridThickness: 1,
				labelFontColor: "black",
				crosshair: {
					enabled: true 
				}
			},
			axisY: { 
				title: "Total Population", 
				includeZero: false,
				labelFontColor: "black",
				crosshair: {
					enabled: true 
				}
			}, 
			data: [ 
				{ 
					type: "column", 
					showInLegend: true, 
					legendText: "Total Number of Patients",
					name: "Total Patients this month",
					color: "#7E8F74",
					dataPoints: [ 
						{ label: "January", y: <?php echo $fjan['total']?> },
						 { label: "February", y: <?php echo $ffeb['total']?> },
						{ label: "March", y: <?php echo $fmar['total']?> },
						 { label: "April", y: <?php echo $fapr['total']?> },
						{ label: "May", y: <?php echo $fmay['total']?> },
						 { label: "June", y: <?php echo $fjun['total']?> },
						{ label: "July", y: <?php echo $fjul['total']?> },
						 { label: "August", y: <?php echo $faug['total']?> },
						{ label: "September", y: <?php echo $fsep['total']?> },
						 { label: "October", y: <?php echo $foct['total']?> },
						{ label: "November", y: <?php echo $fnov['total']?> },
						 { label: "December", y: <?php echo $fdec['total']?> }
					] 
				},
				{ 
					type: "spline", 
					showInLegend: true, 
					legendText: "Chilren",
					name: "Children",
					dataPoints: [ 
						{ label: "January", y: <?php echo $c1['total']?> },
						 { label: "February", y: <?php echo $c2['total']?> },
						{ label: "March", y: <?php echo $c3['total']?> },
						 { label: "April", y: <?php echo $c4['total']?> },
						{ label: "May", y: <?php echo $c5['total']?> },
						 { label: "June", y: <?php echo $c6['total']?> },
						{ label: "July", y: <?php echo $c7['total']?> },
						 { label: "August", y: <?php echo $c8['total']?> },
						{ label: "September", y: <?php echo $c9['total']?> },
						 { label: "October", y: <?php echo $c10['total']?> },
						{ label: "November", y: <?php echo $c11['total']?> },
						 { label: "December", y: <?php echo $c12['total']?> }
					] 
				},
				{ 
					type: "spline", 
					showInLegend: true, 
					legendText: "Adult",
					name: "Adult",
					dataPoints: [ 
						{ label: "January", y: <?php echo $a1['total']?> },
						 { label: "February", y: <?php echo $a2['total']?> },
						{ label: "March", y: <?php echo $a3['total']?> },
						 { label: "April", y: <?php echo $a4['total']?> },
						{ label: "May", y: <?php echo $a5['total']?> },
						 { label: "June", y: <?php echo $a6['total']?> },
						{ label: "July", y: <?php echo $a7['total']?> },
						 { label: "August", y: <?php echo $a8['total']?> },
						{ label: "September", y: <?php echo $a9['total']?> },
						 { label: "October", y: <?php echo $a10['total']?> },
						{ label: "November", y: <?php echo $a11['total']?> },
						 { label: "December", y: <?php echo $a12['total']?> }
					] 
				}
			] 
		}); 
	}
</script>