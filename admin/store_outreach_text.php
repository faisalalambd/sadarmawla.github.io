<?php
include 'config.php';
echo  $title = ($_REQUEST['title']);
echo  $small_title = ($_REQUEST['small_title']);
echo  $description = ($_REQUEST['description']);


$sql = "INSERT INTO outreach (title,small_title,description) VALUES ('$title','$small_title','$description')";
 if (mysqli_query($conn, $sql)) {
    header("Location: outreach.php");
 }else {
 $error = mysqli_error($conn);
 echo "ERROR: Could not able to execute  $error";
 }
?>