<?php 
include 'config.php';
echo $id=$_GET['id'];
// sql to delete a record
$sql = "DELETE FROM inner_engineering WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    header("Location: inner_engg.php");
} else {
  echo "Error deleting record: " . $conn->error;
}

?>