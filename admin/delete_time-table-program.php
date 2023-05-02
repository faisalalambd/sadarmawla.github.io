<?php 
include 'config.php';
echo $id=$_GET['id'];
// sql to delete a record
$sql = "DELETE FROM icns_time_table_of_program WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    header("Location: icns-time-table-of-program.php");
} else {
  echo "Error deleting record: " . $conn->error;
}

?>