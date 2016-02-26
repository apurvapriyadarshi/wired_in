<?php
//header("refresh:5;url=index.html",300);
require_once './class.Diff.php';              //http://code.stephenmorley.org/php/diff-implementation/*******use this link for reference *********/

//$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
//echo $actual_link;
//$problem_number = explode($actual_link , '
$problem_no = 0;

if(isset($_POST['p1']))
   $problem_no = "p1";
else if(isset($_POST['p2']))
        $problem_no = "p2";
else if(isset($_POST['p3']))
        $problem_no = "p3";
else if(isset($_POST['p4']))
        $problem_no = "p4";
else if(isset($_POST['p5']))
        $problem_no = "p5";
else if(isset($_POST['p6']))
        $problem = "p6";
else if(isset($_POST['p7']))
        $problem = "p7";

$file_name = $_FILES['file']['name'];

echo "file name is ".$file_name."<br>";

if($_FILES["file"]["error"] > 0)
{
    echo "return code ".$_FILES["file"]["error"];
}
move_uploaded_file($_FILES["file"]["tmp_name"] , "c:\wamp\www\wired_in/upload/" .$problem_no."/". $_FILES["file"]["name"]);

$new_file_path = "c:\wamp\www\wired_in/upload/" . $_FILES["file"]["name"];

$old_file_path = "c:\wamp\www\wired_in/upload/old.txt";

echo Diff::toTable(Diff::compareFiles($old_file_path,$new_file_path));

//xdiff_file_diff($old_file_path, $new_file_path, 'c:\wamp\www\wired_in/upload/my_script.diff', 2);


?>