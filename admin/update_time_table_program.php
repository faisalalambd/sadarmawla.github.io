<?php
include 'config.php';
echo $id=$_GET['id'];
echo  $title = ($_REQUEST['title']);
echo  $description = ($_REQUEST['description']);
echo  $date = ($_REQUEST['date']);
echo  $time = ($_REQUEST['time']);
echo  $place = ($_REQUEST['place']);
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
$sql = "UPDATE icns_time_table_of_program SET image='$filename',title='$title',description='$description',time='$time',date='$date',place='$place' WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    header("Location: icns-time-table-of-program.php");
} else {
  echo "Error updating record: " . $conn->error;
}
?>