<?php
include 'admin/config.php';
echo  $name = ($_REQUEST['name']);
echo  $email = ($_REQUEST['email']);
echo  $phone = ($_REQUEST['phone']);
echo  $subject = ($_REQUEST['subject']);
echo  $message = ($_REQUEST['message']);





$sql = "INSERT INTO contact (name,email,phone,subject,message) VALUES ('$name','$email','$phone','$subject','$message')";
 if (mysqli_query($conn, $sql)) {
    header("Location: contact-us.php");
 }else {
 $error = mysqli_error($conn);
 echo "ERROR: Could not able to execute  $error";
 }
