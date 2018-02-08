<?php
class FlxZipArchive extends ZipArchive 
{
 public function addDir($location, $name) 
 {
       $this->addEmptyDir($name);
       $this->addDirDo($location, $name);
 } 
 private function addDirDo($location, $name) 
 {
    $name .= '/';
    $location .= '/';
    $dir = opendir ($location);
    while ($file = readdir($dir))
    {
        if ($file == '.' || $file == '..') continue;
        $do = (filetype( $location . $file) == 'dir') ? 'addDir' : 'addFile';
        $this->$do($location . $file, $name . $file);
    }
 } 
}
?>

<?php
$the_folder = 'C:\wamp\www\SEMHCMS';
$zip_file_name = 'C:\wamp\www\SEMHCMS\backup\semhcms.zip';
$za = new FlxZipArchive;
$res = $za->open($zip_file_name, ZipArchive::CREATE);
if($res === TRUE) 
{
    $za->addDir($the_folder, basename($the_folder));
    $za->close();
	echo "<script> alert ('Successfully Back up the System')</script>";
	echo "<script>document.location='../backup.php'</script>";
}
else{
echo 'Could not create a zip archive';
}
?>