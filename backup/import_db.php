<?php
$connection = mysqli_connect('localhost', 'root', '', 'semhcms');

$filename = 'semhcms.sql';
$handle = fopen($filename, "r+");
$contents = fread($handle, filesize($filename));

$sql = explode(';', $contents);
foreach ($sql as $query){
    $result = mysqli_query($connection, $query);
    if($result){
        echo '<tr><td><br></td></tr>';
        echo '<tr><td>'.$query.' <b> IMPORTED </b><br></td></tr>';
        echo '<tr><td><br></td></tr>';
    }

}
fclose($handle);
echo "<script>alert('Successfully imported database!')</script>";
echo "<script>document.location='../backup.php'</script>";  


?>