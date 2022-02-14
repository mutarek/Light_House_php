<?php 
$student_id = $_GET['student_id'];

$db = mysqli_connect("localhost","root","","lighthouse") or die(mysqli_error());

$delete_query = "DELETE FROM student WHERE s_id = $student_id";

mysqli_query($db,$delete_query) or die(mysqli_error());

header("Location: http://localhost/light_house_php/home.php");

mysqli_close($db);

?>