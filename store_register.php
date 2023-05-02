<?php 
include 'admin/config.php';
echo $status=$_GET['status'];
echo  $name = ($_REQUEST['name']);
echo  $phone = ($_REQUEST['phone']);
echo  $email = ($_REQUEST['email']);
echo  $password = ($_REQUEST['password']);
$sql = "INSERT INTO user (name,username,password,email,status) VALUES ('$name','$phone','$password','$email','$status')";
 if (mysqli_query($conn, $sql)) {
    header("Location: login.php");
 }else {
 $error = mysqli_error($conn);
 echo "ERROR: Could not able to execute  $error";
 }
