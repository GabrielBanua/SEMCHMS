<?php
$year = date('Y');
if(isset($_GET['year']))
{
	$year=$_GET['year'];
}

$conn = new mysqli("localhost", "root", "", "semhcms") or die(mysqli_error());
$q1 = $conn->query("SELECT COUNT(*) as total FROM `schedule` WHERE `SCHEDULE_PURPOSE` = 'Check up' && `month` = 'Jan' && `YEAR` = '$year'") or die(mysqli_error());
$f1 = $q1->fetch_array();
$q2 = $conn->query("SELECT COUNT(*) as total FROM `schedule` WHERE `SCHEDULE_PURPOSE` = 'Check up' && `month` = 'Feb' && `YEAR` = '$year'") or die(mysqli_error());
$f2 = $q2->fetch_array();
$q3 = $conn->query("SELECT COUNT(*) as total FROM `schedule` WHERE `SCHEDULE_PURPOSE` = 'Check up' && `month` = 'Mar' && `YEAR` = '$year'") or die(mysqli_error());
$f3 = $q3->fetch_array();
$q4 = $conn->query("SELECT COUNT(*) as total FROM `schedule` WHERE `SCHEDULE_PURPOSE` = 'Check up' && `month` = 'Apr' && `YEAR` = '$year'") or die(mysqli_error());
$f4 = $q4->fetch_array();
$q5 = $conn->query("SELECT COUNT(*) as total FROM `schedule` WHERE `SCHEDULE_PURPOSE` = 'Check up' && `month` = 'May' && `YEAR` = '$year'") or die(mysqli_error());
$f5 = $q5->fetch_array();
$q6 = $conn->query("SELECT COUNT(*) as total FROM `schedule` WHERE `SCHEDULE_PURPOSE` = 'Check up' && `month` = 'Jun' && `YEAR` = '$year'") or die(mysqli_error());
$f6 = $q6->fetch_array();
$q7 = $conn->query("SELECT COUNT(*) as total FROM `schedule` WHERE `SCHEDULE_PURPOSE` = 'Check up' && `month` = 'Jul' && `YEAR` = '$year'") or die(mysqli_error());
$f7 = $q7->fetch_array();
$q8 = $conn->query("SELECT COUNT(*) as total FROM `schedule` WHERE `SCHEDULE_PURPOSE` = 'Check up' && `month` = 'Aug' && `YEAR` = '$year'") or die(mysqli_error());
$f8 = $q8->fetch_array();
$q9 = $conn->query("SELECT COUNT(*) as total FROM `schedule` WHERE `SCHEDULE_PURPOSE` = 'Check up' && `month` = 'Sep' && `YEAR` = '$year'") or die(mysqli_error());
$f9 = $q9->fetch_array();
$q10 = $conn->query("SELECT COUNT(*) as total FROM `schedule` WHERE `SCHEDULE_PURPOSE` = 'Check up' && `month` = 'Oct' && `YEAR` = '$year'") or die(mysqli_error());
$f10 = $q10->fetch_array();
$q11 = $conn->query("SELECT COUNT(*) as total FROM `schedule` WHERE `SCHEDULE_PURPOSE` = 'Check up' && `month` = 'Nov' && `YEAR` = '$year'") or die(mysqli_error());
$f11 = $q11->fetch_array();
$q12 = $conn->query("SELECT COUNT(*) as total FROM `schedule` WHERE `SCHEDULE_PURPOSE` = 'Check up' && `month` = 'Dec' && `YEAR` = '$year'") or die(mysqli_error());
$f12 = $q12->fetch_array();

//dental

$w1 = $conn->query("SELECT COUNT(*) as total FROM `schedule` WHERE `SCHEDULE_PURPOSE` = 'Dental' && `month` = 'Jan' && `YEAR` = '$year'") or die(mysqli_error());
$w1 = $w1->fetch_array();
$w2 = $conn->query("SELECT COUNT(*) as total FROM `schedule` WHERE `SCHEDULE_PURPOSE` = 'Dental' && `month` = 'Feb' && `YEAR` = '$year'") or die(mysqli_error());
$w2 = $w2->fetch_array();
$w3 = $conn->query("SELECT COUNT(*) as total FROM `schedule` WHERE `SCHEDULE_PURPOSE` = 'Dental' && `month` = 'Mar' && `YEAR` = '$year'") or die(mysqli_error());
$w3 = $w3->fetch_array();
$w4 = $conn->query("SELECT COUNT(*) as total FROM `schedule` WHERE `SCHEDULE_PURPOSE` = 'Dental' && `month` = 'Apr' && `YEAR` = '$year'") or die(mysqli_error());
$w4 = $w4->fetch_array();
$w5 = $conn->query("SELECT COUNT(*) as total FROM `schedule` WHERE `SCHEDULE_PURPOSE` = 'Dental' && `month` = 'May' && `YEAR` = '$year'") or die(mysqli_error());
$w5 = $w5->fetch_array();
$w6 = $conn->query("SELECT COUNT(*) as total FROM `schedule` WHERE `SCHEDULE_PURPOSE` = 'Dental' && `month` = 'Jun' && `YEAR` = '$year'") or die(mysqli_error());
$w6 = $w6->fetch_array();
$w7 = $conn->query("SELECT COUNT(*) as total FROM `schedule` WHERE `SCHEDULE_PURPOSE` = 'Dental' && `month` = 'Jul' && `YEAR` = '$year'") or die(mysqli_error());
$w7 = $w7->fetch_array();
$w8 = $conn->query("SELECT COUNT(*) as total FROM `schedule` WHERE `SCHEDULE_PURPOSE` = 'Dental' && `month` = 'Aug' && `YEAR` = '$year'") or die(mysqli_error());
$w8 = $w8->fetch_array();
$w9 = $conn->query("SELECT COUNT(*) as total FROM `schedule` WHERE `SCHEDULE_PURPOSE` = 'Dental' && `month` = 'Sep' && `YEAR` = '$year'") or die(mysqli_error());
$w9 = $w9->fetch_array();
$w10 = $conn->query("SELECT COUNT(*) as total FROM `schedule` WHERE `SCHEDULE_PURPOSE` = 'Dental' && `month` = 'Oct' && `YEAR` = '$year'") or die(mysqli_error());
$w10 = $w10->fetch_array();
$w11 = $conn->query("SELECT COUNT(*) as total FROM `schedule` WHERE `SCHEDULE_PURPOSE` = 'Dental' && `month` = 'Nov' && `YEAR` = '$year'") or die(mysqli_error());
$w11 = $w11->fetch_array();
$w12 = $conn->query("SELECT COUNT(*) as total FROM `schedule` WHERE `SCHEDULE_PURPOSE` = 'Dental' && `month` = 'Dec' && `YEAR` = '$year'") or die(mysqli_error());
$w12 = $w12->fetch_array();

// x-ray

$x1 = $conn->query("SELECT COUNT(*) as total FROM `schedule` WHERE `SCHEDULE_PURPOSE` = 'X-ray' && `month` = 'Jan' && `YEAR` = '$year'") or die(mysqli_error());
$x1 = $x1->fetch_array();
$x2 = $conn->query("SELECT COUNT(*) as total FROM `schedule` WHERE `SCHEDULE_PURPOSE` = 'X-ray' && `month` = 'Feb' && `YEAR` = '$year'") or die(mysqli_error());
$x2 = $x2->fetch_array();
$x3 = $conn->query("SELECT COUNT(*) as total FROM `schedule` WHERE `SCHEDULE_PURPOSE` = 'X-ray' && `month` = 'Mar' && `YEAR` = '$year'") or die(mysqli_error());
$x3 = $x3->fetch_array();
$x4 = $conn->query("SELECT COUNT(*) as total FROM `schedule` WHERE `SCHEDULE_PURPOSE` = 'X-ray' && `month` = 'Apr' && `YEAR` = '$year'") or die(mysqli_error());
$x4 = $x4->fetch_array();
$x5 = $conn->query("SELECT COUNT(*) as total FROM `schedule` WHERE `SCHEDULE_PURPOSE` = 'X-ray' && `month` = 'May' && `YEAR` = '$year'") or die(mysqli_error());
$x5 = $x5->fetch_array();
$x6 = $conn->query("SELECT COUNT(*) as total FROM `schedule` WHERE `SCHEDULE_PURPOSE` = 'X-ray' && `month` = 'Jun' && `YEAR` = '$year'") or die(mysqli_error());
$x6 = $x6->fetch_array();
$x7 = $conn->query("SELECT COUNT(*) as total FROM `schedule` WHERE `SCHEDULE_PURPOSE` = 'X-ray' && `month` = 'Jul' && `YEAR` = '$year'") or die(mysqli_error());
$x7 = $x7->fetch_array();
$x8 = $conn->query("SELECT COUNT(*) as total FROM `schedule` WHERE `SCHEDULE_PURPOSE` = 'X-ray' && `month` = 'Aug' && `YEAR` = '$year'") or die(mysqli_error());
$x8 = $x8->fetch_array();
$x9 = $conn->query("SELECT COUNT(*) as total FROM `schedule` WHERE `SCHEDULE_PURPOSE` = 'X-ray' && `month` = 'Sep' && `YEAR` = '$year'") or die(mysqli_error());
$x9 = $x9->fetch_array();
$x10 = $conn->query("SELECT COUNT(*) as total FROM `schedule` WHERE `SCHEDULE_PURPOSE` = 'X-ray' && `month` = 'Oct' && `YEAR` = '$year'") or die(mysqli_error());
$x10 = $x10->fetch_array();
$x11 = $conn->query("SELECT COUNT(*) as total FROM `schedule` WHERE `SCHEDULE_PURPOSE` = 'X-ray' && `month` = 'Nov' && `YEAR` = '$year'") or die(mysqli_error());
$x11 = $x11->fetch_array();
$x12 = $conn->query("SELECT COUNT(*) as total FROM `schedule` WHERE `SCHEDULE_PURPOSE` = 'X-ray' && `month` = 'Dec' && `YEAR` = '$year'") or die(mysqli_error());
$x12 = $x12->fetch_array();

// laboratory test

$l1 = $conn->query("SELECT COUNT(*) as total FROM `schedule` WHERE `SCHEDULE_PURPOSE` = 'Laboratory Test' && `month` = 'Jan' && `YEAR` = '$year'") or die(mysqli_error());
$l1 = $l1->fetch_array();
$l2 = $conn->query("SELECT COUNT(*) as total FROM `schedule` WHERE `SCHEDULE_PURPOSE` = 'Laboratory Test' && `month` = 'Feb' && `YEAR` = '$year'") or die(mysqli_error());
$l2 = $l2->fetch_array();
$l3 = $conn->query("SELECT COUNT(*) as total FROM `schedule` WHERE `SCHEDULE_PURPOSE` = 'Laboratory Test' && `month` = 'Mar' && `YEAR` = '$year'") or die(mysqli_error());
$l3 = $l3->fetch_array();
$l4 = $conn->query("SELECT COUNT(*) as total FROM `schedule` WHERE `SCHEDULE_PURPOSE` = 'Laboratory Test' && `month` = 'Apr' && `YEAR` = '$year'") or die(mysqli_error());
$l4 = $l4->fetch_array();
$l5 = $conn->query("SELECT COUNT(*) as total FROM `schedule` WHERE `SCHEDULE_PURPOSE` = 'Laboratory Test' && `month` = 'May' && `YEAR` = '$year'") or die(mysqli_error());
$l5 = $l5->fetch_array();
$l6 = $conn->query("SELECT COUNT(*) as total FROM `schedule` WHERE `SCHEDULE_PURPOSE` = 'Laboratory Test' && `month` = 'Jun' && `YEAR` = '$year'") or die(mysqli_error());
$l6 = $l6->fetch_array();
$l7 = $conn->query("SELECT COUNT(*) as total FROM `schedule` WHERE `SCHEDULE_PURPOSE` = 'Laboratory Test' && `month` = 'Jul' && `YEAR` = '$year'") or die(mysqli_error());
$l7 = $l7->fetch_array();
$l8 = $conn->query("SELECT COUNT(*) as total FROM `schedule` WHERE `SCHEDULE_PURPOSE` = 'Laboratory Test' && `month` = 'Aug' && `YEAR` = '$year'") or die(mysqli_error());
$l8 = $l8->fetch_array();
$l9 = $conn->query("SELECT COUNT(*) as total FROM `schedule` WHERE `SCHEDULE_PURPOSE` = 'Laboratory Test' && `month` = 'Sep' && `YEAR` = '$year'") or die(mysqli_error());
$l9 = $l9->fetch_array();
$l10 = $conn->query("SELECT COUNT(*) as total FROM `schedule` WHERE `SCHEDULE_PURPOSE` = 'Laboratory Test' && `month` = 'Oct' && `YEAR` = '$year'") or die(mysqli_error());
$l10 = $l10->fetch_array();
$l11 = $conn->query("SELECT COUNT(*) as total FROM `schedule` WHERE `SCHEDULE_PURPOSE` = 'Laboratory Test' && `month` = 'Nov' && `YEAR` = '$year'") or die(mysqli_error());
$l11 = $l11->fetch_array();
$l12 = $conn->query("SELECT COUNT(*) as total FROM `schedule` WHERE `SCHEDULE_PURPOSE` = 'Laboratory Test' && `month` = 'Dec' && `YEAR` = '$year'") or die(mysqli_error());
$l12 = $l12->fetch_array();


?>
<script type="text/javascript"> 
	window.onload = function(){ 
		$("#patient_appointment").CanvasJSChart({
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
				text: "St Ezekiel Moreno Health Center",
				fontSize: 20
			},
			subtitles:[
				{
					text: "Patient Appointment - Year <?php echo $year?>"
				}
			],
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
					type: "stackedColumn", 
					showInLegend: true, 
					legendText: "Check up",
					name: "Check up",
					color: "#1caf9a",
					dataPoints: [ 
						{ label: "January", y: <?php echo $f1['total']?> },
						 { label: "February", y: <?php echo $f2['total']?> },
						{ label: "March", y: <?php echo $f3['total']?> },
						 { label: "April", y: <?php echo $f4['total']?> },
						{ label: "May", y: <?php echo $f5['total']?> },
						 { label: "June", y: <?php echo $f6['total']?> },
						{ label: "July", y: <?php echo $f7['total']?> },
						 { label: "August", y: <?php echo $f8['total']?> },
						{ label: "September", y: <?php echo $f9['total']?> },
						 { label: "October", y: <?php echo $f10['total']?> },
						{ label: "November", y: <?php echo $f11['total']?> },
						 { label: "December", y: <?php echo $f11['total']?> }
					] 
				},
				{ 
					type: "stackedColumn", 
					showInLegend: true, 
					legendText: "Dental",
					name: "Dental",
					color: "#f97acd",
					dataPoints: [ 
						{ label: "January", y: <?php echo $w1['total']?> },
						 { label: "February", y: <?php echo $w2['total']?> },
						{ label: "March", y: <?php echo $w3['total']?> },
						 { label: "April", y: <?php echo $w4['total']?> },
						{ label: "May", y: <?php echo $w5['total']?> },
						 { label: "June", y: <?php echo $w6['total']?> },
						{ label: "July", y: <?php echo $w7['total']?> },
						 { label: "August", y: <?php echo $w8['total']?> },
						{ label: "September", y: <?php echo $w9['total']?> },
						 { label: "October", y: <?php echo $w10['total']?> },
						{ label: "November", y: <?php echo $w11['total']?> },
						 { label: "December", y: <?php echo $w12['total']?> }
					] 
				},
				{ 
					type: "stackedColumn", 
					showInLegend: true, 
					legendText: "X-ray",
					name: "X-ray",
					color: "#7E8F74",
					dataPoints: [ 
						{ label: "January", y: <?php echo $x1['total']?> },
						 { label: "February", y: <?php echo $x2['total']?> },
						{ label: "March", y: <?php echo $x3['total']?> },
						 { label: "April", y: <?php echo $x4['total']?> },
						{ label: "May", y: <?php echo $x5['total']?> },
						 { label: "June", y: <?php echo $x6['total']?> },
						{ label: "July", y: <?php echo $x7['total']?> },
						 { label: "August", y: <?php echo $x8['total']?> },
						{ label: "September", y: <?php echo $x9['total']?> },
						 { label: "October", y: <?php echo $x10['total']?> },
						{ label: "November", y: <?php echo $x11['total']?> },
						 { label: "December", y: <?php echo $x12['total']?> }
					] 
				},
				{ 
					type: "stackedColumn", 
					showInLegend: true, 
					legendText: "Laboratory Test",
					name: "Laboratory Test",
					color: "#ff5050",
					dataPoints: [ 
						{ label: "January", y: <?php echo $l1['total']?> },
						 { label: "February", y: <?php echo $l2['total']?> },
						{ label: "March", y: <?php echo $l3['total']?> },
						 { label: "April", y: <?php echo $l4['total']?> },
						{ label: "May", y: <?php echo $l5['total']?> },
						 { label: "June", y: <?php echo $l6['total']?> },
						{ label: "July", y: <?php echo $l7['total']?> },
						 { label: "August", y: <?php echo $l8['total']?> },
						{ label: "September", y: <?php echo $l9['total']?> },
						 { label: "October", y: <?php echo $l10['total']?> },
						{ label: "November", y: <?php echo $l11['total']?> },
						 { label: "December", y: <?php echo $l12['total']?> }
					] 
				}
				
			] 
		}); 
	}
</script>