<?php
include 'config.php';
echo $id=$_GET['id'];
echo  $image_title = ($_REQUEST['image_title']);
echo  $video_link = ($_REQUEST['video_link']);
echo  $date = ($_REQUEST['date']);
echo  $description = ($_REQUEST['description']);
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
$sql = "UPDATE wisdom SET image_title='$image_title',image='$filename',video_link='$video_link',date='$date',description='$description',shortdescription='$shortdescription' WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    header("Location: wisdom.php");
} else {
  echo "Error updating record: " . $conn->error;
}

?>