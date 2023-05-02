<?php
include 'config.php';
$id=$_GET['id'];
echo  $title = ($_REQUEST['title']);
echo  $description = ($_REQUEST['description']);

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


$msg = "";

// check if the user has clicked the button "UPLOAD" 

if (isset($_POST['uploadfile'])) {

    $filename1 = $_FILES["choosefile1"]["name"];

    $tempname = $_FILES["choosefile1"]["tmp_name"];  

        $folder = "assets/image/thumbnil/".$filename1;

           

        // Add the image to the "image" folder"

        if (move_uploaded_file($tempname, $folder)) {

            $msg = "Image uploaded successfully";

        }else{

            $msg = "Failed to upload image";

    }

}

$sql = "UPDATE icp_audio SET image='$filename', thumbnil='$filename1', title='$title',description='$description' WHERE id=$id";
if ($conn->query($sql) === TRUE) {
    header("Location: icp-audio.php");
} else {
  echo "Error updating record: " . $conn->error;
}
?>