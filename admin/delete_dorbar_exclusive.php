<?php 
include 'config.php';
echo $id=$_GET['id'];
// sql to delete a record
$sql = "DELETE FROM dorbar_exclusive  WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    header("Location: dorbar_exclusive.php");
} else {
  echo "Error deleting record: " . $conn->error;
}

?>