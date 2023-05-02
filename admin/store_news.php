<?php
include 'config.php';
echo  $title = ($_REQUEST['title']);
echo  $author = ($_REQUEST['author']);
echo  $descripition = ($_REQUEST['descripition']);
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

$sql = "INSERT INTO news (image,title,author,description) VALUES ('$filename','$title','$author','$descripition')";
 if (mysqli_query($conn, $sql)) {
    header("Location: news.php");
 }else {
 $error = mysqli_error($conn);
 echo "ERROR: Could not able to execute  $error";
 }
?>