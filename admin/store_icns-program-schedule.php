<?php
include 'config.php';
echo  $title = ($_REQUEST['title']);
echo  $description = ($_REQUEST['description']);


$sql = "INSERT INTO icns_program_schedule (title,description) VALUES ('$title','$description')";
 if (mysqli_query($conn, $sql)) {
    header("Location: icns-program-schedule.php");
 }else {
 $error = mysqli_error($conn);
 echo "ERROR: Could not able to execute  $error";
 }
?>