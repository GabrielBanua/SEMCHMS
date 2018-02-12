<?php
$year = date('Y');
if(isset($_GET['year']))
{
    $year=$_GET['year'];
}


$conn = new mysqli("localhost", "root", "", "semhcms") or die(mysqli_error());
$q1 = $conn->query("select count(*) as total from `patient` where (P_AGE >=0 && P_AGE <=10) && year = '$year'") or die(mysqli_error());
$a1 = $q1->fetch_array();

$q2 = $conn->query("select count(*) as total from `patient` where (P_AGE >=11 && P_AGE <=20) && year = '$year'") or die(mysqli_error());
$a2 = $q2->fetch_array();

$q3 = $conn->query("select count(*) as total from `patient` where (P_AGE >=21 && P_AGE <=30) && year = '$year'") or die(mysqli_error());
$a3 = $q3->fetch_array();

$q4 = $conn->query("select count(*) as total from `patient` where (P_AGE >=31 && P_AGE <=40) && year = '$year'") or die(mysqli_error());
$a4 = $q4->fetch_array();

$q5 = $conn->query("select count(*) as total from `patient` where (P_AGE >=41 && P_AGE <=50) && year = '$year'") or die(mysqli_error());
$a5 = $q5->fetch_array();

$q6 = $conn->query("select count(*) as total from `patient` where (P_AGE >=51 && P_AGE <=60) && year = '$year'") or die(mysqli_error());
$a6 = $q6->fetch_array();

$q7 = $conn->query("select count(*) as total from `patient` where (P_AGE >=61 && P_AGE <=70) && year = '$year'") or die(mysqli_error());
$a7 = $q7->fetch_array();

$q8 = $conn->query("select count(*) as total from `patient` where (P_AGE >=71 && P_AGE <=80) && year = '$year'") or die(mysqli_error());
$a8 = $q8->fetch_array();

$q9 = $conn->query("select count(*) as total from `patient` where (P_AGE >=81 && P_AGE <=90) && year = '$year'") or die(mysqli_error());
$a9 = $q9->fetch_array();

$q10 = $conn->query("select count(*) as total from `patient` where (P_AGE >=91 && P_AGE <=100) && year = '$year'") or die(mysqli_error());
$a10 = $q10->fetch_array();


?>
<script type="text/javascript"> 
    window.onload = function(){ 
        $("#patient_age").CanvasJSChart({
            theme: "light2",
            zoomEnabled: true,
            zoomType: "x",
            panEnabled: true,
            animationEnabled: true,
            animationDuration: 1000,
            exportFileName: "Monthly Population", 
            exportEnabled: true,
            title: { 
				text: "St Ezekiel Moreno Health Center",
				fontSize: 20
			},
			subtitles:[
				{
					text: "Patient Registration by Age - Year <?php echo $year?>"
				}
			],
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
                    toolTipContent: "{label}: {y}", 
                    dataPoints: [ 
                        { label: "1-10 years old", y: <?php echo $a1['total']?> },
                         { label: "11-20 years old", y: <?php echo $a2['total']?> },
                        { label: "21-30 years old", y: <?php echo $a3['total']?> },
                         { label: "31-40 years old", y: <?php echo $a4['total']?> },
                        { label: "41-50 years old", y: <?php echo $a5['total']?> },
                         { label: "51-60 years old", y: <?php echo $a6['total']?> },
                        { label: "61-70 years old", y: <?php echo $a7['total']?> },
                         { label: "71-80 years old", y: <?php echo $a8['total']?> },
                        { label: "81-90 years old", y: <?php echo $a9['total']?> },
                         { label: "91-100 years old", y: <?php echo $a10['total']?> }
                    ] 
                }
            ] 
        }); 
    }
</script>