<?php
include 'config.php';
echo  $title = ($_REQUEST['title']);
echo  $description = ($_REQUEST['description']);
echo  $price = ($_REQUEST['price']);
echo  $publisher = ($_REQUEST['publisher']);
echo  $writer = ($_REQUEST['writer']);

$msg = "";

// check if the user has clicked the button "UPLOAD" 

if (isset($_POST['uploadfile'])) {

    $filename = $_FILES["choosefile"]["name"];

    $tempname = $_FILES["choosefile"]["tmp_name"];  

        $folder = "assets/books/".$filename;

           

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

        $folder = "assets/image/".$filename1;

           

        // Add the image to the "image" folder"

        if (move_uploaded_file($tempname, $folder)) {

            $msg = "Image uploaded successfully";

        }else{

            $msg = "Failed to upload image";

    }

}

$sql = "INSERT INTO books (books,thumbnil,title,description,price,writer,publisher) VALUES ('$filename','$filename1','$title','$description','$price''$writer','$publisher')";
 if (mysqli_query($conn, $sql)) {
    header("Location: icp-books.php");
 }else {
 $error = mysqli_error($conn);
 echo "ERROR: Could not able to execute  $error";
 }
?>