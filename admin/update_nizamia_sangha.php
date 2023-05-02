<?php
include 'config.php';
$id=$_GET['id'];
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



$sql = "UPDATE nizamia_sangha SET image='$filename',about='$about',mission='$mission',vission='$vission' WHERE id=$id";
if ($conn->query($sql) === TRUE) {
    header("Location: nizamia_sangha.php");
} else {
  echo "Error updating record: " . $conn->error;
}
?>