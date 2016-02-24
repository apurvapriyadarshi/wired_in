<?php
$file_name = $_FILES['file']['name'];
echo "file name is ".$file_name."<br>";
if($_FILES["file"]["error"] > 0)
{
    echo "return code ".$_FILES["file"]["error"];
}
move_uploaded_file($_FILES["file"]["tmp_name"] , "c:\wamp\www\wired_in/upload/" . $_FILES["file"]["name"]);
header("Location:http://localhost/wired_in/index.html",300);
?>