<?php 
include 'config.php';
echo $id=$_GET['id'];
// sql to delete a record
$sql = "DELETE FROM members WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    header("Location: ss-member-list.php");
} else {
  echo "Error deleting record: " . $conn->error;
}

?>