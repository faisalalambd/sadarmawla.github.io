<?php
include 'config.php';
echo  $image_title = ($_REQUEST['image_title']);
echo  $description = ($_REQUEST['description']);

$msg = "";

// check if the user has clicked the button "UPLOAD" 

if (isset($_POST['uploadfile'])) {

    $filename = $_FILES["choosefile"]["name"];

    $tempname = $_FILES["choosefile"]["tmp_name"];  

        $folder = "assets/image/".$filename;

           

        // Add the image to the "image" folder"

        if (move_uploaded_file($tempname, $folder)) {

            $msg = "Image uploaded successfully";

        }else{

            $msg = "Failed to upload image";

    }

}


echo $filename;

$sql = "INSERT INTO inner_engineering (image,image_title,description) VALUES ('$filename','$image_title','$description')";
 if (mysqli_query($conn, $sql)) {
    header("Location: inner_engg.php");
 }else {
 $error = mysqli_error($conn);
 echo "ERROR: Could not able to execute  $error";
 }
?>