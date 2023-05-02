<!-- ############################## Header Section ############################## -->
<?php include 'header.php';
include 'admin/config.php';
$id = $_GET['id'] ?>

<?php
$sql = "SELECT * FROM 	inner_engineering  where id=$id";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
?>
        <!-- Page Header Start -->
        <div class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2><?php echo $row['image_title'] ?></h2>
                    </div>


                </div>
            </div>
        </div>
        <!-- Page Header End -->





        <!-- Single Post Start-->
        <div class="single" style="padding: 0;">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-2 col-lg-2"></div>
                    <div class="col-12 col-sm-12 col-md-8 col-lg-8">
                        <div class="single-content">
                            <img src="admin/assets/image/<?php echo $row['image'] ?>" />
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-2 col-lg-2"></div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                        <?php echo $row['description'] ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- Single Post End-->
<?php }
} ?>





<!-- ############################## Footer Section ############################## -->
<?php include 'footer.php' ?>