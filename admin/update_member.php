<?php
include 'config.php';
echo $id=$_GET['id'];
echo  $name = ($_REQUEST['name']);
echo  $designation = ($_REQUEST['designation']);

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
$sql = "UPDATE members SET image='$filename',name='$name',designation='$designation' WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    header("Location: ss-member-list.php");
} else {
  echo "Error updating record: " . $conn->error;
}

?>