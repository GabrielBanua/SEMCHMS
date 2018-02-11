<?php
$year = date('Y');
if(isset($_GET['year']))
{
	$year=$_GET['year'];
}

$conn = new mysqli("localhost", "root", "", "semhcms") or die(mysqli_error());
$res = $conn->query("SELECT MR_ILL FROM `medical_record` GROUP BY MR_ILL") or die(mysqli_error());

$data_points = array();

while($result = $res->fetch_array()){
$R = $result['MR_ILL'];
$q1 = $conn->query("SELECT COUNT(*) as total FROM `medical_record` WHERE `MR_ILL` = '$R' && `YEAR` = '$year'") or die(mysqli_error());
$f1 = $q1->fetch_array();
$FR = intval($f1['total']);
	$point = array('label' => $R, 'y' => $FR);
	array_push($data_points, $point);
}
json_encode($data_points);
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
					color: "#cc270a",
					dataPoints: <?php echo json_encode($data_points); ?>
	
				}
			] 
		}); 
	}
</script>