<?php
include 'config.php';
$id=$_GET['id'];
echo  $title = ($_REQUEST['title']);
echo  $description = ($_REQUEST['description']);
echo  $link = ($_REQUEST['link']);

$msg = "";

// check if the user has clicked the button "UPLOAD" 

if (isset($_POST['uploadfile'])) {

    $filename = $_FILES["choosefile"]["name"];

    $tempname = $_FILES["choosefile"]["tmp_name"];  

        $folder = "assets/audio/".$filename;

           

        // Add the image to the "image" folder"

        if (move_uploaded_file($tempname, $folder)) {

            $msg = "Image uploaded successfully";

        }else{

            $msg = "Failed to upload image";

    }

}


echo $filename;




$sql = "UPDATE icns_video SET image='$filename',title='$title',description='$description',link='$link' WHERE id=$id";
if ($conn->query($sql) === TRUE) {
    header("Location: icns-video.php");
} else {
  echo "Error updating record: " . $conn->error;
}
?>