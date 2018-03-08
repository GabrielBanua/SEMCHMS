<?php
$year = date('Y');
if(isset($_GET['year']))
{
	$year=$_GET['year'];
}

$conn = new mysqli("localhost", "root", "", "semhcms") or die(mysqli_error());

// blood examination
$f1 = $conn->query("SELECT COUNT(*) as total FROM `blood_examination` WHERE `month` = 'Jan' && `year` = '$year'") or die(mysqli_error());
$b1 = $f1->fetch_array();

$f2 = $conn->query("SELECT COUNT(*) as total FROM `blood_examination` WHERE `month` = 'Feb' && `year` = '$year'") or die(mysqli_error());
$b2 = $f2->fetch_array();

$f3 = $conn->query("SELECT COUNT(*) as total FROM `blood_examination` WHERE `month` = 'Mar' && `year` = '$year'") or die(mysqli_error());
$b3 = $f3->fetch_array();

$f4 = $conn->query("SELECT COUNT(*) as total FROM `blood_examination` WHERE `month` = 'Apr' && `year` = '$year'") or die(mysqli_error());
$b4 = $f4->fetch_array();

$f5 = $conn->query("SELECT COUNT(*) as total FROM `blood_examination` WHERE `month` = 'May' && `year` = '$year'") or die(mysqli_error());
$b5 = $f5->fetch_array();

$f6 = $conn->query("SELECT COUNT(*) as total FROM `blood_examination` WHERE `month` = 'Jun' && `year` = '$year'") or die(mysqli_error());
$b6 = $f6->fetch_array();

$f7 = $conn->query("SELECT COUNT(*) as total FROM `blood_examination` WHERE `month` = 'Jul' && `year` = '$year'") or die(mysqli_error());
$b7 = $f7->fetch_array();

$f8 = $conn->query("SELECT COUNT(*) as total FROM `blood_examination` WHERE `month` = 'Aug' && `year` = '$year'") or die(mysqli_error());
$b8 = $f8->fetch_array();

$f9 = $conn->query("SELECT COUNT(*) as total FROM `blood_examination` WHERE `month` = 'Sept' && `year` = '$year'") or die(mysqli_error());
$b9 = $f9->fetch_array();

$f10 = $conn->query("SELECT COUNT(*) as total FROM `blood_examination` WHERE `month` = 'Oct' && `year` = '$year'") or die(mysqli_error());
$b10 = $f10->fetch_array();

$f11 = $conn->query("SELECT COUNT(*) as total FROM `blood_examination` WHERE `month` = 'Nov' && `year` = '$year'") or die(mysqli_error());
$b11 = $f11->fetch_array();

$f12 = $conn->query("SELECT COUNT(*) as total FROM `blood_examination` WHERE `month` = 'Dec' && `year` = '$year'") or die(mysqli_error());
$b12 = $f12->fetch_array();


//fecalysis

$q1 = $conn->query("SELECT COUNT(*) as total FROM `fecalysis` WHERE `month` = 'Jan' && `year` = '$year'") or die(mysqli_error());
$f1 = $q1->fetch_array();

$q2 = $conn->query("SELECT COUNT(*) as total FROM `fecalysis` WHERE `month` = 'Feb' && `year` = '$year'") or die(mysqli_error());
$f2 = $q2->fetch_array();

$q3 = $conn->query("SELECT COUNT(*) as total FROM `fecalysis` WHERE `month` = 'Mar' && `year` = '$year'") or die(mysqli_error());
$f3 = $q3->fetch_array();

$q4 = $conn->query("SELECT COUNT(*) as total FROM `fecalysis` WHERE `month` = 'Apr' && `year` = '$year'") or die(mysqli_error());
$f4 = $q4->fetch_array();

$q5 = $conn->query("SELECT COUNT(*) as total FROM `fecalysis` WHERE `month` = 'May' && `year` = '$year'") or die(mysqli_error());
$f5 = $q5->fetch_array();

$q6 = $conn->query("SELECT COUNT(*) as total FROM `fecalysis` WHERE `month` = 'Jun' && `year` = '$year'") or die(mysqli_error());
$f6 = $q6->fetch_array();

$q7 = $conn->query("SELECT COUNT(*) as total FROM `fecalysis` WHERE `month` = 'Jul' && `year` = '$year'") or die(mysqli_error());
$f7 = $q7->fetch_array();

$q8 = $conn->query("SELECT COUNT(*) as total FROM `fecalysis` WHERE `month` = 'Aug' && `year` = '$year'") or die(mysqli_error());
$f8 = $q8->fetch_array();

$q9 = $conn->query("SELECT COUNT(*) as total FROM `fecalysis` WHERE `month` = 'Sept' && `year` = '$year'") or die(mysqli_error());
$f9 = $q9->fetch_array();

$q10 = $conn->query("SELECT COUNT(*) as total FROM `fecalysis` WHERE `month` = 'Oct' && `year` = '$year'") or die(mysqli_error());
$f10 = $q10->fetch_array();

$q11 = $conn->query("SELECT COUNT(*) as total FROM `fecalysis` WHERE `month` = 'Nov' && `year` = '$year'") or die(mysqli_error());
$f11 = $q11->fetch_array();

$q12 = $conn->query("SELECT COUNT(*) as total FROM `fecalysis` WHERE `month` = 'Dec' && `year` = '$year'") or die(mysqli_error());
$f12 = $q12->fetch_array();



//hematology

$w1 = $conn->query("SELECT COUNT(*) as total FROM `hematology` WHERE `month` = 'Jan' && `year` = '$year'") or die(mysqli_error());
$h1 = $w1->fetch_array();

$w2 = $conn->query("SELECT COUNT(*) as total FROM `hematology` WHERE `month` = 'Feb' && `year` = '$year'") or die(mysqli_error());
$h2 = $w2->fetch_array();

$w3 = $conn->query("SELECT COUNT(*) as total FROM `hematology` WHERE `month` = 'Mar' && `year` = '$year'") or die(mysqli_error());
$h3 = $w3->fetch_array();

$w4 = $conn->query("SELECT COUNT(*) as total FROM `hematology` WHERE `month` = 'Apr' && `year` = '$year'") or die(mysqli_error());
$h4 = $w4->fetch_array();

$w5 = $conn->query("SELECT COUNT(*) as total FROM `hematology` WHERE `month` = 'May' && `year` = '$year'") or die(mysqli_error());
$h5 = $w5->fetch_array();

$w6 = $conn->query("SELECT COUNT(*) as total FROM `hematology` WHERE `month` = 'Jun' && `year` = '$year'") or die(mysqli_error());
$h6 = $w6->fetch_array();

$w7 = $conn->query("SELECT COUNT(*) as total FROM `hematology` WHERE `month` = 'Jul' && `year` = '$year'") or die(mysqli_error());
$h7 = $w7->fetch_array();

$w8 = $conn->query("SELECT COUNT(*) as total FROM `hematology` WHERE `month` = 'Aug' && `year` = '$year'") or die(mysqli_error());
$h8 = $w8->fetch_array();

$w9 = $conn->query("SELECT COUNT(*) as total FROM `hematology` WHERE `month` = 'Sept' && `year` = '$year'") or die(mysqli_error());
$h9 = $w9->fetch_array();

$w10 = $conn->query("SELECT COUNT(*) as total FROM `hematology` WHERE `month` = 'Oct' && `year` = '$year'") or die(mysqli_error());
$h10 = $w10->fetch_array();

$w11 = $conn->query("SELECT COUNT(*) as total FROM `hematology` WHERE `month` = 'Nov' && `year` = '$year'") or die(mysqli_error());
$h11 = $w11->fetch_array();

$w12 = $conn->query("SELECT COUNT(*) as total FROM `hematology` WHERE `month` = 'Dec' && `year` = '$year'") or die(mysqli_error());
$h12 = $w12->fetch_array();


// urinalysis

$e1 = $conn->query("SELECT COUNT(*) as total FROM `urinalysis` WHERE `month` = 'Jan' && `year` = '$year'") or die(mysqli_error());
$u1 = $e1->fetch_array();

$e2 = $conn->query("SELECT COUNT(*) as total FROM `urinalysis` WHERE `month` = 'Feb' && `year` = '$year'") or die(mysqli_error());
$u2 = $e2->fetch_array();

$e3 = $conn->query("SELECT COUNT(*) as total FROM `urinalysis` WHERE `month` = 'Mar' && `year` = '$year'") or die(mysqli_error());
$u3 = $e3->fetch_array();

$e4 = $conn->query("SELECT COUNT(*) as total FROM `urinalysis` WHERE `month` = 'Apr' && `year` = '$year'") or die(mysqli_error());
$u4 = $e4->fetch_array();

$e5 = $conn->query("SELECT COUNT(*) as total FROM `urinalysis` WHERE `month` = 'May' && `year` = '$year'") or die(mysqli_error());
$u5 = $e5->fetch_array();

$e6 = $conn->query("SELECT COUNT(*) as total FROM `urinalysis` WHERE `month` = 'Jun' && `year` = '$year'") or die(mysqli_error());
$u6 = $e6->fetch_array();

$e7 = $conn->query("SELECT COUNT(*) as total FROM `urinalysis` WHERE `month` = 'Jul' && `year` = '$year'") or die(mysqli_error());
$u7 = $e7->fetch_array();

$e8 = $conn->query("SELECT COUNT(*) as total FROM `urinalysis` WHERE `month` = 'Aug' && `year` = '$year'") or die(mysqli_error());
$u8 = $e8->fetch_array();

$e9 = $conn->query("SELECT COUNT(*) as total FROM `urinalysis` WHERE `month` = 'Sept' && `year` = '$year'") or die(mysqli_error());
$u9 = $e9->fetch_array();

$e10 = $conn->query("SELECT COUNT(*) as total FROM `urinalysis` WHERE `month` = 'Oct' && `year` = '$year'") or die(mysqli_error());
$u10 = $e10->fetch_array();

$e11 = $conn->query("SELECT COUNT(*) as total FROM `urinalysis` WHERE `month` = 'Nov' && `year` = '$year'") or die(mysqli_error());
$u11 = $e11->fetch_array();

$e12 = $conn->query("SELECT COUNT(*) as total FROM `urinalysis` WHERE `month` = 'Dec' && `year` = '$year'") or die(mysqli_error());
$u12 = $e12->fetch_array();
?>
<script type="text/javascript"> 
	window.onload = function(){ 
		$("#lab_reports").CanvasJSChart({
			theme: "light2",
			zoomEnabled: true,
			zoomType: "x",
			panEnabled: true,
			animationEnabled: true,
			animationDuration: 1000,
			exportFileName: "Lab Reports", 
			exportEnabled: true,
			toolTip: {
				shared: true  
			},
			title: { 
				text: "Laboratory Reports as of Year <?php echo $year?> ",
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
					legendText: "Blood Chemistry",
					name: "Blood Chemistry",
					dataPoints: [ 
						{ label: "January", y: <?php echo $b1['total']?> },
						 { label: "February", y: <?php echo $b2['total']?> },
						{ label: "March", y: <?php echo $b3['total']?> },
						 { label: "April", y: <?php echo $b4['total']?> },
						{ label: "May", y: <?php echo $b5['total']?> },
						 { label: "June", y: <?php echo $b6['total']?> },
						{ label: "July", y: <?php echo $b7['total']?> },
						 { label: "August", y: <?php echo $b8['total']?> },
						{ label: "September", y: <?php echo $b9['total']?> },
						 { label: "October", y: <?php echo $b10['total']?> },
						{ label: "November", y: <?php echo $b11['total']?> },
						 { label: "December", y: <?php echo $b12['total']?> }
					] 
				},
				{ 
					type: "column", 
					showInLegend: true, 
					legendText: "Fecalysis",
					name: "Fecalysis",
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
						 { label: "December", y: <?php echo $f12['total']?> }
					] 
				},
				{ 
					type: "column", 
					showInLegend: true, 
					legendText: "Hematology",
					name: "Hematology",
					dataPoints: [ 
						{ label: "January", y: <?php echo $h1['total']?> },
						 { label: "February", y: <?php echo $h2['total']?> },
						{ label: "March", y: <?php echo $h3['total']?> },
						 { label: "April", y: <?php echo $h4['total']?> },
						{ label: "May", y: <?php echo $h5['total']?> },
						 { label: "June", y: <?php echo $h6['total']?> },
						{ label: "July", y: <?php echo $h7['total']?> },
						 { label: "August", y: <?php echo $h8['total']?> },
						{ label: "September", y: <?php echo $h9['total']?> },
						 { label: "October", y: <?php echo $h10['total']?> },
						{ label: "November", y: <?php echo $h11['total']?> },
						 { label: "December", y: <?php echo $h12['total']?> }
					] 
				},
				{ 
					type: "column", 
					showInLegend: true, 
					legendText: "Urinalysis",
					name: "Urinalysis",
					dataPoints: [ 
						{ label: "January", y: <?php echo $u1['total']?> },
						 { label: "February", y: <?php echo $u2['total']?> },
						{ label: "March", y: <?php echo $u3['total']?> },
						 { label: "April", y: <?php echo $u4['total']?> },
						{ label: "May", y: <?php echo $u5['total']?> },
						 { label: "June", y: <?php echo $u6['total']?> },
						{ label: "July", y: <?php echo $u7['total']?> },
						 { label: "August", y: <?php echo $u8['total']?> },
						{ label: "September", y: <?php echo $u9['total']?> },
						 { label: "October", y: <?php echo $u10['total']?> },
						{ label: "November", y: <?php echo $u11['total']?> },
						 { label: "December", y: <?php echo $u12['total']?> }
					] 
				}
			] 
		}); 
	}
</script>