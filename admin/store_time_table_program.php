store_soil.php<?php
include 'config.php';
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

$sql = "INSERT INTO icns_time_table_of_program (image,title,description,date,time,place) VALUES ('$filename','$title','$description','$date','$time','$place')";
 if (mysqli_query($conn, $sql)) {
    header("Location: icns-time-table-of-program.php");
 }else {
 $error = mysqli_error($conn);
 echo "ERROR: Could not able to execute  $error";
 }
?>