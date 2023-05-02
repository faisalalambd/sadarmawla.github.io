<?php 
include 'config.php';
echo $id=$_GET['id'];
// sql to delete a record
$sql = "DELETE FROM outreach_image WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    header("Location: outreach.php");
} else {
  echo "Error deleting record: " . $conn->error;
}

?>