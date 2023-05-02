<?php 
include 'config.php';
echo $id=$_GET['id'];
// sql to delete a record
$sql = "DELETE FROM suac_lineage_list WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    header("Location: suac-lineage-list.php");
} else {
  echo "Error deleting record: " . $conn->error;
}

?>