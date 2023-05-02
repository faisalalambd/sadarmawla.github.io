<?php
include 'config.php';
echo $id=$_GET['id'];
echo  $title = ($_REQUEST['title']);

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
$sql = "UPDATE outreach_image SET image='$filename', title='$title' WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    header("Location: outreach.php");
} else {
  echo "Error updating record: " . $conn->error;
}

?>