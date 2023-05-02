<?php 
include 'config.php';
echo $id=$_GET['id'];
// sql to delete a record
$sql = "DELETE FROM suac_audio WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    header("Location: suac-audio.php");
} else {
  echo "Error deleting record: " . $conn->error;
}

?>