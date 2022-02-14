<?php
$ts_id = $_GET['trainer_id'];
echo "Called";
$db = mysqli_connect("localhost","root","","lighthouse") or die(mysqli_error());
$delete_query = "DELETE FROM trainer WHERE t_id = $ts_id";

mysqli_query($db,$delete_query) or die(mysqli_error());

header("Location: http://localhost/light_house_php/alltrainer.php");

mysqli_close($db);

?>