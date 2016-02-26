<?php
/**********  krishna keshav && princy.krishnakeshav@gmail.com && pes college of engineering, mandya**********////////
//header("refresh:5;url=index.html",300);
require_once './class.Diff.php';              //http://code.stephenmorley.org/php/diff-implementation/*******use this link for reference *********/

//$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
//echo $actual_link;
//$problem_number = explode($actual_link , '
$problem_no = 0;

if(isset($_POST['p1'])){
   $problem_no = "p1";
    header("refresh:5;url=q1.html",300);
}
else if(isset($_POST['p2'])){
        $problem_no = "p2";
        header("refresh:5;url=q2.html",300);
}
else if(isset($_POST['p3'])){
        $problem_no = "p3";
        header("refresh:5;url=q3.html",300);
}
else if(isset($_POST['p4'])){
        $problem_no = "p4";
        header("refresh:5;url=q4.html",300);
}
else if(isset($_POST['p5'])){
        $problem_no = "p5";
        header("refresh:5;url=q5.html",300);
}
else if(isset($_POST['p6'])){
        $problem_no = "p6";
        header("refresh:5;url=q6.html",300);
}
else if(isset($_POST['p7'])){
        $problem_no = "p7";
        header("refresh:5;url=p7.html",300);
}

$file_name = $_FILES['file']['name'];

echo "<div><p>file name is ".$file_name."<br><p></div>";

if($_FILES["file"]["error"] > 0)
{
    echo "return code ".$_FILES["file"]["error"];
}
else
    echo "Submission successful<br>You will be redirected in 5 seconds";
    
move_uploaded_file($_FILES["file"]["tmp_name"] , "c:\wamp\www\wired_in/upload/" .$problem_no."/". $_FILES["file"]["name"]);

$new_file_path = "c:\wamp\www\wired_in/upload/" . $_FILES["file"]["name"];

$old_file_path = "c:\wamp\www\wired_in/upload/old.txt";

echo Diff::toTable(Diff::compareFiles($old_file_path,$new_file_path));

//xdiff_file_diff($old_file_path, $new_file_path, 'c:\wamp\www\wired_in/upload/my_script.diff', 2);


?>