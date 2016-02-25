<?php
require_once './class.Diff.php';              //http://code.stephenmorley.org/php/diff-implementation/*******use this link for reference *********/

$file_name = $_FILES['file']['name'];

echo "file name is ".$file_name."<br>";

if($_FILES["file"]["error"] > 0)
{
    echo "return code ".$_FILES["file"]["error"];
}
move_uploaded_file($_FILES["file"]["tmp_name"] , "c:\wamp\www\wired_in/upload/" . $_FILES["file"]["name"]);

$new_file_path = "c:\wamp\www\wired_in/upload/" . $_FILES["file"]["name"];

$old_file_path = "c:\wamp\www\wired_in/upload/old.txt";

echo Diff::toTable(Diff::compareFiles($old_file_path,$new_file_path));

//xdiff_file_diff($old_file_path, $new_file_path, 'c:\wamp\www\wired_in/upload/my_script.diff', 2);

header("refresh:5;url=http://localhost/wired_in/index.html",300);

?>