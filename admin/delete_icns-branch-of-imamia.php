<?php 
include 'config.php';
echo $id=$_GET['id'];
// sql to delete a record
$sql = "DELETE FROM icns_branch_imamia  WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    header("Location: icns-branch-of-imamia.php");
} else {
  echo "Error deleting record: " . $conn->error;
}

?>