<?php 
include 'config.php';
echo $id=$_GET['id'];
// sql to delete a record
$sql = "DELETE FROM related_programs WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    header("Location: related_programs.php");
} else {
  echo "Error deleting record: " . $conn->error;
}

?>