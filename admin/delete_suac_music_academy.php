<?php 
include 'config.php';
echo $id=$_GET['id'];
// sql to delete a record
$sql = "DELETE FROM suac_music_academy WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    header("Location: suac_music_academy.php");
} else {
  echo "Error deleting record: " . $conn->error;
}

?>