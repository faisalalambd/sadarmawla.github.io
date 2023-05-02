<?php 
include 'config.php';
echo $id=$_GET['id'];
// sql to delete a record
$sql = "DELETE FROM icns_video WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    header("Location: icns-video.php");
} else {
  echo "Error deleting record: " . $conn->error;
}

?>