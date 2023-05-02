<!-- ############################## Header Section ############################## -->
<?php include 'header.php';
include 'admin/config.php';
$id = $_GET['id'] ?>

<?php
$sql = "SELECT * FROM 	wisdom  where id=$id";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
?>


        <!-- Page Header Start -->
        <div class="page-header" style="background: linear-gradient(rgba(0, 0, 0, .5), rgba(0, 0, 0, .5)), url(../img/new/demo.png);">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2><?php echo $row['image_title'] ?></h2>
                    </div>
                    <style>
                        .custom_a:hover {
                            color: white !important;
                            cursor: default;
                        }
                    </style>
                    <div class="col-12">
                        <a href="index.php">Home</a>
                        <a href="#" class="custom_a">Books</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Header End -->





        <!-- Single Post Start-->
        <div class="single">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="single-content">
                            <img src="admin/assets/image/<?php echo $row['image'] ?>" />
                            <h2< /h2>
                                <?php echo $row['description'] ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Single Post End-->
<?php }
} ?>





<!-- ############################## Footer Section ############################## -->
<?php include 'footer.php' ?>