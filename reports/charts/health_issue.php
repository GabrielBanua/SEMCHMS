<?php
$year = date('Y');
if(isset($_GET['year']))
{
	$year=$_GET['year'];
}

$conn = new mysqli("localhost", "root", "", "semhcms") or die(mysqli_error());
$q1 = $conn->query("SELECT COUNT(*) as total FROM `patient_medical_issue` WHERE `PP_HEATH` = 'AIDS' && `YEAR` = '$year'") or die(mysqli_error());
$f1 = $q1->fetch_array();
$q2 = $conn->query("SELECT COUNT(*) as total FROM `patient_medical_issue` WHERE `PP_HEATH` = 'Allergies' && `YEAR` = '$year'") or die(mysqli_error());
$f2 = $q2->fetch_array();
$q3 = $conn->query("SELECT COUNT(*) as total FROM `patient_medical_issue` WHERE `PP_HEATH` = 'Alzheimer' && `YEAR` = '$year'") or die(mysqli_error());
$f3 = $q3->fetch_array();
$q4 = $conn->query("SELECT COUNT(*) as total FROM `patient_medical_issue` WHERE `PP_HEATH` = 'Arthritis' && `YEAR` = '$year'") or die(mysqli_error());
$f4 = $q4->fetch_array();
$q5 = $conn->query("SELECT COUNT(*) as total FROM `patient_medical_issue` WHERE `PP_HEATH` = 'Asthma' && `YEAR` = '$year'") or die(mysqli_error());
$f5 = $q5->fetch_array();
$q6 = $conn->query("SELECT COUNT(*) as total FROM `patient_medical_issue` WHERE `PP_HEATH` = 'Back Ache' && `YEAR` = '$year'") or die(mysqli_error());
$f6 = $q6->fetch_array();
$q7 = $conn->query("SELECT COUNT(*) as total FROM `patient_medical_issue` WHERE `PP_HEATH` = 'Cancer' && `YEAR` = '$year'") or die(mysqli_error());
$f7 = $q7->fetch_array();
$q8 = $conn->query("SELECT COUNT(*) as total FROM `patient_medical_issue` WHERE `PP_HEATH` = 'Chicken Pox' && `YEAR` = '$year'") or die(mysqli_error());
$f8 = $q8->fetch_array();
$q9 = $conn->query("SELECT COUNT(*) as total FROM `patient_medical_issue` WHERE `PP_HEATH` = 'Cold' && `YEAR` = '$year'") or die(mysqli_error());
$f9 = $q9->fetch_array();
$q10 = $conn->query("SELECT COUNT(*) as total FROM `patient_medical_issue` WHERE `PP_HEATH` = 'Cough' && `YEAR` = '$year'") or die(mysqli_error());
$f10 = $q10->fetch_array();
$q11 = $conn->query("SELECT COUNT(*) as total FROM `patient_medical_issue` WHERE `PP_HEATH` = 'Diabetes' && `YEAR` = '$year'") or die(mysqli_error());
$f11 = $q11->fetch_array();
$q12 = $conn->query("SELECT COUNT(*) as total FROM `patient_medical_issue` WHERE `PP_HEATH` = 'Digestion' && `YEAR` = '$year'") or die(mysqli_error());
$f12 = $q12->fetch_array();

?>
<script type="text/javascript"> 
	window.onload = function(){ 
		$("#health_issue").CanvasJSChart({
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
				text: "Patient Health Issue as of Year <?php echo $year?> ",
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
					type: "bar", 
					showInLegend: true, 
					legendText: "Total Number of Patients",
					name: "Total Patients this year",
					color: "#7E8F74",
					dataPoints: [ 
						{ label: "AIDS", y: <?php echo $f1['total']?> },
						 { label: "Allergy", y: <?php echo $f2['total']?> },
						{ label: "Alzheimer", y: <?php echo $f3['total']?> },
						 { label: "Arthritis", y: <?php echo $f4['total']?> },
						{ label: "Asthma", y: <?php echo $f5['total']?> },
						 { label: "Back Ache", y: <?php echo $f6['total']?> },
						{ label: "Cancer", y: <?php echo $f7['total']?> },
						 { label: "Chicken Pox", y: <?php echo $f8['total']?> },
						{ label: "Cold", y: <?php echo $f9['total']?> },
						 { label: "Cough", y: <?php echo $f10['total']?> },
						{ label: "Diabetes", y: <?php echo $f11['total']?> },
						 { label: "Digestion", y: <?php echo $f11['total']?> }
					] 
				}
			] 
		}); 
	}
</script>