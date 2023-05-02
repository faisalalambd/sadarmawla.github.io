<!-- ############################## Header Section ############################## -->
<?php include 'header.php';
include 'admin/config.php';
$id = $_GET['id']; ?>



<!-- Page Header Start -->
<!-- <div class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>News</h2>
            </div>
            <div class="col-12">
                <a href="">Home</a>
                <a href="">News</a>
            </div>
        </div>
    </div>
</div> -->
<!-- Page Header End -->
<?php

$sql = "SELECT * FROM 	books  where id=$id";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {

?>

        <embed src="admin/assets/books/<?php echo $row['books'] ?>" type="application/pdf" width="100%" height="600px">
<?php }
} ?>


<!-- ############################## Footer Section ############################## -->
<?php include 'footer.php' ?>