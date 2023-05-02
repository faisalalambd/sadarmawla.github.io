<?php
include 'config.php';
echo $id=$_GET['id'];
echo  $title = ($_REQUEST['title']);
echo  $books = ($_REQUEST['books']);
echo  $thumbnil = ($_REQUEST['thumbnil']);
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
echo $filename;
$sql = "UPDATE books SET books='$filename', thumbnil='$filename1', title='$title',description='$description', price='$price',publisher='$publisher',writer='$writer' WHERE id=$id";
if ($conn->query($sql) === TRUE) {
    header("Location: icp-books.php");
} else {
  echo "Error updating record: " . $conn->error;
}
?>