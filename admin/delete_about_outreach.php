<?php 
include 'config.php';
echo $id=$_GET['id'];
// sql to delete a record
$sql = "DELETE FROM about_outreach WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    header("Location: about_outreach.php");
} else {
  echo "Error deleting record: " . $conn->error;
}

?>