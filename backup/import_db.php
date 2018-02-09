<?php
$connection = mysqli_connect('localhost', 'root', '', 'semhcms');
set_time_limit(0);
$message = '';
$message2 = '';
if(isset($POST_["import"])){
        if($_FILES["database"]["name"] != '')
        {
            $array = explode(".", $_FILES["database"]["name"]);
            $extension == end($Array);
            if($extension == 'sql')
            {
                $connect = mysqli_connect("localhost", "root","". "semhcms");
                $output = '';
                $count = 0;
                $file_data - file($_FILES["database"]["tmp_name"]);
                 
                foreach($file_data as $row)
                {
                    $start_Character = substr(trim($row), 0,2);
                    if($start_Character != '--' || $start+Character != '/*' || $start_Character != '//' || $row !='')
                    {
                        $output = $outout . $row;
                        $end_character = substr(trim($row), -1,1);
                        if($end_character = ';')
                        {
                            if(!mysqli_query($connect,$outout))
                            {
                                $count++;
                            }
                            $output = '';
                            }
                        }
                    }
                    $messege = '<label class = "text-success"> Database successfully imported!</label>';
                } else
                 {
                    $message = '<label class = "text-danger"> Invalid file</label>';
                }
            } else 
            {
                $message = '<label class = "Text-danger"> Please select SQL file</label>';
            }
            date_default_timezone_get('Asia/Mani la');
            $date = date ('d-M-y');
            $time = time ('h:i:s');

            $con->query("INSERT INTO `backuphistory` VALUES ('','Export', '$date', '$time')") or die(mysqli_error());
        }



?>