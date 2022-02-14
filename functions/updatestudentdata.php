<?php 
$student_id  = $_POST['sid'];
$student_name  = $_POST['sname'];
$student_number  = $_POST['snumber'];
$student_course  = $_POST['s_course'];

$db = mysqli_connect("localhost","root","","lighthouse") or die(mysqli_error());
$singledata = "SELECT * FROM course WHERE c_id = $student_course";
$mycourse = mysqli_query($db,$singledata) or die(mysqli_error());
$ourcourse = mysqli_fetch_assoc($mycourse);

$student_trainer = $ourcourse['c_trainer'];

$update_query = "UPDATE student SET s_name ='$student_name',s_number = $student_number,s_course = $student_course, s_trainer = $student_trainer WHERE s_id =$student_id ";

mysqli_query($db,$update_query) or die(mysqli_error());

header("Location: http://localhost/light_house_php/home.php");

mysqli_close($db);



?>