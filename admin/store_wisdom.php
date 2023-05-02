<?php
include 'config.php';
echo  $image_title = ($_REQUEST['image_title']);
echo  $video_link = ($_REQUEST['video_link']);
echo  $description = ($_REQUEST['description']);
echo  $date = ($_REQUEST['date']);
echo  $shortdescription = ($_REQUEST['shortdescription']);
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

$sql = "INSERT INTO wisdom (image,image_title,description,video_link,date,shortdescription) VALUES ('$filename','$image_title','$description','$video_link','$date','$shortdescription')";
 if (mysqli_query($conn, $sql)) {
    header("Location: wisdom.php");
 }else {
 $error = mysqli_error($conn);
 echo "ERROR: Could not able to execute  $error";
 }
?>