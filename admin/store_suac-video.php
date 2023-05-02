store_soil.php<?php
include 'config.php';
echo  $title = ($_REQUEST['title']);
echo  $description = ($_REQUEST['description']);
echo $link=($_REQUEST['link']);
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

$sql = "INSERT INTO suac_video (image,title,description,link) VALUES ('$filename','$title','$description','$link')";
 if (mysqli_query($conn, $sql)) {
    header("Location: suac-video.php");
 }else {
 $error = mysqli_error($conn);
 echo "ERROR: Could not able to execute  $error";
 }
?>