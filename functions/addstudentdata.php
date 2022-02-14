<?php
$student_name = $_POST['sname'];
$student_number = $_POST['snumber'];
$student_course = $_POST['s_course'];
$db = mysqli_connect("localhost","root","","lighthouse") or die(mysqli_error());
$fetch_query = "SELECT * FROM course WHERE c_id =$student_course";
$result = mysqli_query($db,$fetch_query) or die(mysqli_error());
$totalresult = mysqli_fetch_assoc($result);
$s_trainer = $totalresult['c_trainer'];
$insert_query = "INSERT INTO student (s_name,s_number,s_course,s_trainer) VALUES 
('{$student_name}',{$student_number},{$student_course},{$s_trainer})";
mysqli_query($db,$insert_query) or die(mysqli_error());
header("Location: http://localhost/light_house_php/home.php");
mysqli_close($db);
?>