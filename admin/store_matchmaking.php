<?php
include 'config.php';
echo  $name = ($_REQUEST['name']);
echo  $description = ($_REQUEST['description']);
$msg = "";

// check if the user has clicked the button "UPLOAD" 

if (isset($_POST['uploadfile'])) {

    $filename = $_FILES["choosefile"]["name"];

    $tempname = $_FILES["choosefile"]["tmp_name"];  

        $folder = "assets/cv/".$filename;

           

        // Add the image to the "image" folder"

        if (move_uploaded_file($tempname, $folder)) {

            $msg = "Image uploaded successfully";

        }else{

            $msg = "Failed to upload image";

    }

}


echo $filename;

$msg = "";

// check if the user has clicked the button "UPLOAD" 

if (isset($_POST['uploadfile'])) {

    $filename1 = $_FILES["choosefile1"]["name"];

    $tempname = $_FILES["choosefile1"]["tmp_name"];  

        $folder = "assets/cv/".$filename1;

           

        // Add the image to the "image" folder"

        if (move_uploaded_file($tempname, $folder)) {

            $msg = "Image uploaded successfully";

        }else{

            $msg = "Failed to upload image";

    }

}


$sql = "INSERT INTO matchmaking (file,name,description,image) VALUES ('$filename','$name','$description','$filename1')";
 if (mysqli_query($conn, $sql)) {
    header("Location: ss-match-making.php");
 }else {
 $error = mysqli_error($conn);
 echo "ERROR: Could not able to execute  $error";
 }
?>