<?php
include 'config.php';
echo $id=$_GET['id'];
echo  $name = ($_REQUEST['name']);
echo  $description = ($_REQUEST['description']);
$msg = "";

// check if the user has clicked the button "UPLOAD" 

if (isset($_POST['uploadfile'])) {

    $filename = $_FILES["choosefile"]["name"];

    $tempname = $_FILES["choosefile"]["tmp_name"];  

        $folder = "assets/cv/".$filename;

           

        // Add the image to the "image" folder"

        if (move_uploaded_file($tempname, $folder)) {

            $msg = "Image uploaded successfully";

        }else{

            $msg = "Failed to upload image";

    }

}


echo $filename;
$sql = "UPDATE matchmaking SET file='$filename', name='$name',description='$description' WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    header("Location: ss-match-making.php");
} else {
  echo "Error updating record: " . $conn->error;
}

?>