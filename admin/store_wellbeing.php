<?php
include 'config.php';
echo  $text = ($_REQUEST['text']);
echo  $button_name = ($_REQUEST['button_name']);
echo  $link = ($_REQUEST['link']);
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

$sql = "INSERT INTO wellbeing (image,text,button_name,link) VALUES ('$filename','$text','$button_name','$link')";
 if (mysqli_query($conn, $sql)) {
    header("Location: wellbeing.php");
 }else {
 $error = mysqli_error($conn);
 echo "ERROR: Could not able to execute  $error";
 }
?>