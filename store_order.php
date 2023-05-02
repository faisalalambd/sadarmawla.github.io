<?php
include 'admin/config.php';
echo $id=$_GET['id'];
echo  $name = ($_REQUEST['name']);
echo  $email = ($_REQUEST['email']);
echo  $phone = ($_REQUEST['phone']);
echo  $address = ($_REQUEST['address']);

            $sql = "SELECT * FROM 	books  where id=$id";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                // output data of each row
                while ($row = $result->fetch_assoc()) {
                    $book=$row['title'];
                    $price=$row['price'];
                }}
$sql = "INSERT INTO order_books (book,price,name,email,phone,address) VALUES ('$book','$price','$name','$email','$phone','$address')";
 if (mysqli_query($conn, $sql)) {
    header("Location: success_order.php");
 }else {
 $error = mysqli_error($conn);
 echo "ERROR: Could not able to execute  $error";
 }
