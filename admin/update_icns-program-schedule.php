<?php
include 'config.php';
$id=$_GET['id'];
echo  $title = ($_REQUEST['title']);
echo  $description = ($_REQUEST['description']);


$sql = "UPDATE icns_program_schedule SET title='$title',description='$description' WHERE id=$id";
if ($conn->query($sql) === TRUE) {
    header("Location: icns-program-schedule.php");
} else {
  echo "Error updating record: " . $conn->error;
}
?>