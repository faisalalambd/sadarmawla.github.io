<?php
include 'config.php';
echo $id=$_GET['id'];
echo  $title = ($_REQUEST['title']);
echo  $small_title = ($_REQUEST['small_title']);
echo  $description = ($_REQUEST['description']);

$sql = "UPDATE outreach SET title='$title', small_title='$small_title', description='$description' WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    header("Location: outreach.php");
} else {
  echo "Error updating record: " . $conn->error;
}

?>