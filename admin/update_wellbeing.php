<?php
include 'config.php';
echo $id=$_GET['id'];
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
$sql = "UPDATE wellbeing SET text='$text',image='$filename',button_name='$button_name',link='$link' WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    header("Location: wellbeing.php");
} else {
  echo "Error updating record: " . $conn->error;
}

?>