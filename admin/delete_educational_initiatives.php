<?php 
include 'config.php';
echo $id=$_GET['id'];
// sql to delete a record
$sql = "DELETE FROM educational_initiative  WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    header("Location: educational_initiatives.php");
} else {
  echo "Error deleting record: " . $conn->error;
}

?>