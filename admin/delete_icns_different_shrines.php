<?php 
include 'config.php';
echo $id=$_GET['id'];
// sql to delete a record
$sql = "DELETE FROM icns_different_shrines WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    header("Location: icns-different-shrines.php");
} else {
  echo "Error deleting record: " . $conn->error;
}

?>