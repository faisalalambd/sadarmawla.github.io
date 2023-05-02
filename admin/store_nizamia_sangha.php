<?php
include 'config.php';
echo  $about = ($_REQUEST['about']);
echo  $mission = ($_REQUEST['mission']);
echo  $vission = ($_REQUEST['vission']);

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



$sql = "INSERT INTO nizamia_sangha  (image,about,mission,vission) VALUES ('$filename','$about','$mission','$vission')";
 if (mysqli_query($conn, $sql)) {
    header("Location: nizamia_sangha.php");
 }else {
 $error = mysqli_error($conn);
 echo "ERROR: Could not able to execute  $error";
 }
?>