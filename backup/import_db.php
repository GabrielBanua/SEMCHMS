<?php
$connection = mysqli_connect('localhost', 'root', '', 'semhcms');

$filename = 'semhcms.sql';
$handle = fopen($filename, "r+");
$contents = fread($handle, filesize($filename));

$sql = explode(';', $contents);
foreach ($sql as $query){
    $result = mysqli_query($connection, $query);

}
fclose($handle);
echo "<script>alert('Successfully imported database!')</script>";
echo "<script>document.location='../backup.php'</script>";  


?>