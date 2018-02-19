<?php
$year = date('Y');
if(isset($_GET['year']))
{
	$year=$_GET['year'];
}

$conn = new mysqli("localhost", "root", "", "semhcms") or die(mysqli_error());
$qjan = $conn->query("SELECT patient.P_ID, followup_check_up.MONTH, CASE WHEN followup_check_up.MONTH IS NOT NULL AND followup_check_up.YEAR IS NOT NULL THEN COUNT(DISTINCT patient.P_ID) ELSE 0 END AS TOTALF FROM patient INNER JOIN schedule ON patient.P_ID = schedule.P_ID INNER JOIN medical_record ON schedule.SCHEDULE_ID = medical_record.SCHED_ID INNER JOIN treatment ON medical_record.MR_ID = treatment.MR_ID LEFT JOIN followup_check_up ON treatment.TRMT_ID = followup_check_up.TRT_ID WHERE followup_check_up.MONTH = 'Jan' OR followup_check_up.MONTH IS NULL AND followup_check_up.YEAR = '$year' OR followup_check_up.YEAR IS NULL AND(followup_check_up.MONTH = 'Jan')") or die(mysqli_error());
$fjan = $qjan->fetch_array();
$qfeb = $conn->query("SELECT patient.P_ID, followup_check_up.MONTH, CASE WHEN followup_check_up.MONTH IS NOT NULL AND followup_check_up.YEAR IS NOT NULL THEN COUNT(DISTINCT patient.P_ID) ELSE 0 END AS TOTALF FROM patient INNER JOIN schedule ON patient.P_ID = schedule.P_ID INNER JOIN medical_record ON schedule.SCHEDULE_ID = medical_record.SCHED_ID INNER JOIN treatment ON medical_record.MR_ID = treatment.MR_ID LEFT JOIN followup_check_up ON treatment.TRMT_ID = followup_check_up.TRT_ID WHERE followup_check_up.MONTH = 'Feb' OR followup_check_up.MONTH IS NULL AND followup_check_up.YEAR = '$year' OR followup_check_up.YEAR IS NULL AND(followup_check_up.MONTH = 'Feb')") or die(mysqli_error());
$ffeb = $qfeb->fetch_array();
$qmar = $conn->query("SELECT patient.P_ID, followup_check_up.MONTH, CASE WHEN followup_check_up.MONTH IS NOT NULL AND followup_check_up.YEAR IS NOT NULL THEN COUNT(DISTINCT patient.P_ID) ELSE 0 END AS TOTALF FROM patient INNER JOIN schedule ON patient.P_ID = schedule.P_ID INNER JOIN medical_record ON schedule.SCHEDULE_ID = medical_record.SCHED_ID INNER JOIN treatment ON medical_record.MR_ID = treatment.MR_ID LEFT JOIN followup_check_up ON treatment.TRMT_ID = followup_check_up.TRT_ID WHERE followup_check_up.MONTH = 'Mar' OR followup_check_up.MONTH IS NULL AND followup_check_up.YEAR = '$year' OR followup_check_up.YEAR IS NULL AND(followup_check_up.MONTH = 'Mar')") or die(mysqli_error());
$fmar = $qmar->fetch_array();
$qapr = $conn->query("SELECT patient.P_ID, followup_check_up.MONTH, CASE WHEN followup_check_up.MONTH IS NOT NULL AND followup_check_up.YEAR IS NOT NULL THEN COUNT(DISTINCT patient.P_ID) ELSE 0 END AS TOTALF FROM patient INNER JOIN schedule ON patient.P_ID = schedule.P_ID INNER JOIN medical_record ON schedule.SCHEDULE_ID = medical_record.SCHED_ID INNER JOIN treatment ON medical_record.MR_ID = treatment.MR_ID LEFT JOIN followup_check_up ON treatment.TRMT_ID = followup_check_up.TRT_ID WHERE followup_check_up.MONTH = 'Apr' OR followup_check_up.MONTH IS NULL AND followup_check_up.YEAR = '$year' OR followup_check_up.YEAR IS NULL AND(followup_check_up.MONTH = 'Apr')") or die(mysqli_error());
$fapr = $qapr->fetch_array();
$qmay = $conn->query("SELECT patient.P_ID, followup_check_up.MONTH, CASE WHEN followup_check_up.MONTH IS NOT NULL AND followup_check_up.YEAR IS NOT NULL THEN COUNT(DISTINCT patient.P_ID) ELSE 0 END AS TOTALF FROM patient INNER JOIN schedule ON patient.P_ID = schedule.P_ID INNER JOIN medical_record ON schedule.SCHEDULE_ID = medical_record.SCHED_ID INNER JOIN treatment ON medical_record.MR_ID = treatment.MR_ID LEFT JOIN followup_check_up ON treatment.TRMT_ID = followup_check_up.TRT_ID WHERE followup_check_up.MONTH = 'May' OR followup_check_up.MONTH IS NULL AND followup_check_up.YEAR = '$year' OR followup_check_up.YEAR IS NULL AND(followup_check_up.MONTH = 'May')") or die(mysqli_error());
$fmay = $qmay->fetch_array();
$qjun = $conn->query("SELECT patient.P_ID, followup_check_up.MONTH, CASE WHEN followup_check_up.MONTH IS NOT NULL AND followup_check_up.YEAR IS NOT NULL THEN COUNT(DISTINCT patient.P_ID) ELSE 0 END AS TOTALF FROM patient INNER JOIN schedule ON patient.P_ID = schedule.P_ID INNER JOIN medical_record ON schedule.SCHEDULE_ID = medical_record.SCHED_ID INNER JOIN treatment ON medical_record.MR_ID = treatment.MR_ID LEFT JOIN followup_check_up ON treatment.TRMT_ID = followup_check_up.TRT_ID WHERE followup_check_up.MONTH = 'Jun' OR followup_check_up.MONTH IS NULL AND followup_check_up.YEAR = '$year' OR followup_check_up.YEAR IS NULL AND(followup_check_up.MONTH = 'Jun')") or die(mysqli_error());
$fjun = $qjun->fetch_array();
$qjul = $conn->query("SELECT patient.P_ID, followup_check_up.MONTH, CASE WHEN followup_check_up.MONTH IS NOT NULL AND followup_check_up.YEAR IS NOT NULL THEN COUNT(DISTINCT patient.P_ID) ELSE 0 END AS TOTALF FROM patient INNER JOIN schedule ON patient.P_ID = schedule.P_ID INNER JOIN medical_record ON schedule.SCHEDULE_ID = medical_record.SCHED_ID INNER JOIN treatment ON medical_record.MR_ID = treatment.MR_ID LEFT JOIN followup_check_up ON treatment.TRMT_ID = followup_check_up.TRT_ID WHERE followup_check_up.MONTH = 'Jul' OR followup_check_up.MONTH IS NULL AND followup_check_up.YEAR = '$year' OR followup_check_up.YEAR IS NULL AND(followup_check_up.MONTH = 'Jul')") or die(mysqli_error());
$fjul = $qjul->fetch_array();
$qaug = $conn->query("SELECT patient.P_ID, followup_check_up.MONTH, CASE WHEN followup_check_up.MONTH IS NOT NULL AND followup_check_up.YEAR IS NOT NULL THEN COUNT(DISTINCT patient.P_ID) ELSE 0 END AS TOTALF FROM patient INNER JOIN schedule ON patient.P_ID = schedule.P_ID INNER JOIN medical_record ON schedule.SCHEDULE_ID = medical_record.SCHED_ID INNER JOIN treatment ON medical_record.MR_ID = treatment.MR_ID LEFT JOIN followup_check_up ON treatment.TRMT_ID = followup_check_up.TRT_ID WHERE followup_check_up.MONTH = 'Aug' OR followup_check_up.MONTH IS NULL AND followup_check_up.YEAR = '$year' OR followup_check_up.YEAR IS NULL AND(followup_check_up.MONTH = 'Aug')") or die(mysqli_error());
$faug = $qaug->fetch_array();
$qsep = $conn->query("SELECT patient.P_ID, followup_check_up.MONTH, CASE WHEN followup_check_up.MONTH IS NOT NULL AND followup_check_up.YEAR IS NOT NULL THEN COUNT(DISTINCT patient.P_ID) ELSE 0 END AS TOTALF FROM patient INNER JOIN schedule ON patient.P_ID = schedule.P_ID INNER JOIN medical_record ON schedule.SCHEDULE_ID = medical_record.SCHED_ID INNER JOIN treatment ON medical_record.MR_ID = treatment.MR_ID LEFT JOIN followup_check_up ON treatment.TRMT_ID = followup_check_up.TRT_ID WHERE followup_check_up.MONTH = 'Sep' OR followup_check_up.MONTH IS NULL AND followup_check_up.YEAR = '$year' OR followup_check_up.YEAR IS NULL AND(followup_check_up.MONTH = 'Sep')") or die(mysqli_error());
$fsep = $qsep->fetch_array();
$qoct = $conn->query("SELECT patient.P_ID, followup_check_up.MONTH, CASE WHEN followup_check_up.MONTH IS NOT NULL AND followup_check_up.YEAR IS NOT NULL THEN COUNT(DISTINCT patient.P_ID) ELSE 0 END AS TOTALF FROM patient INNER JOIN schedule ON patient.P_ID = schedule.P_ID INNER JOIN medical_record ON schedule.SCHEDULE_ID = medical_record.SCHED_ID INNER JOIN treatment ON medical_record.MR_ID = treatment.MR_ID LEFT JOIN followup_check_up ON treatment.TRMT_ID = followup_check_up.TRT_ID WHERE followup_check_up.MONTH = 'Oct' OR followup_check_up.MONTH IS NULL AND followup_check_up.YEAR = '$year' OR followup_check_up.YEAR IS NULL AND(followup_check_up.MONTH = 'Oct')") or die(mysqli_error());
$foct = $qoct->fetch_array();
$qnov = $conn->query("SELECT patient.P_ID, followup_check_up.MONTH, CASE WHEN followup_check_up.MONTH IS NOT NULL AND followup_check_up.YEAR IS NOT NULL THEN COUNT(DISTINCT patient.P_ID) ELSE 0 END AS TOTALF FROM patient INNER JOIN schedule ON patient.P_ID = schedule.P_ID INNER JOIN medical_record ON schedule.SCHEDULE_ID = medical_record.SCHED_ID INNER JOIN treatment ON medical_record.MR_ID = treatment.MR_ID LEFT JOIN followup_check_up ON treatment.TRMT_ID = followup_check_up.TRT_ID WHERE followup_check_up.MONTH = 'Nov' OR followup_check_up.MONTH IS NULL AND followup_check_up.YEAR = '$year' OR followup_check_up.YEAR IS NULL AND(followup_check_up.MONTH = 'Nov')") or die(mysqli_error());
$fnov = $qnov->fetch_array();
$qdec = $conn->query("SELECT patient.P_ID, followup_check_up.MONTH, CASE WHEN followup_check_up.MONTH IS NOT NULL AND followup_check_up.YEAR IS NOT NULL THEN COUNT(DISTINCT patient.P_ID) ELSE 0 END AS TOTALF FROM patient INNER JOIN schedule ON patient.P_ID = schedule.P_ID INNER JOIN medical_record ON schedule.SCHEDULE_ID = medical_record.SCHED_ID INNER JOIN treatment ON medical_record.MR_ID = treatment.MR_ID LEFT JOIN followup_check_up ON treatment.TRMT_ID = followup_check_up.TRT_ID WHERE followup_check_up.MONTH = 'Dec' OR followup_check_up.MONTH IS NULL AND followup_check_up.YEAR = '$year' OR followup_check_up.YEAR IS NULL AND(followup_check_up.MONTH = 'Dec')") or die(mysqli_error());
$fdec = $qdec->fetch_array();


?>
<script type="text/javascript"> 
	window.onload = function(){ 
		$("#patient_followup").CanvasJSChart({
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
					text: "Patient Follow-up checkup Year <?php echo $year?>"
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
					type: "column", 
					showInLegend: true, 
					legendText: "Total Number of Patients",
					name: "Patients for Follow-up checkup this month",
					color: "#7E8F74",
					dataPoints: [ 
						{ label: "January", y: <?php echo $fjan['TOTALF']?> },
						 { label: "February", y: <?php echo $ffeb['TOTALF']?> },
						{ label: "March", y: <?php echo $fmar['TOTALF']?> },
						 { label: "April", y: <?php echo $fapr['TOTALF']?> },
						{ label: "May", y: <?php echo $fmay['TOTALF']?> },
						 { label: "June", y: <?php echo $fjun['TOTALF']?> },
						{ label: "July", y: <?php echo $fjul['TOTALF']?> },
						 { label: "August", y: <?php echo $faug['TOTALF']?> },
						{ label: "September", y: <?php echo $fsep['TOTALF']?> },
						 { label: "October", y: <?php echo $foct['TOTALF']?> },
						{ label: "November", y: <?php echo $fnov['TOTALF']?> },
						 { label: "December", y: <?php echo $fdec['TOTALF']?> }
					] 
				}
			] 
		}); 
	}
</script>