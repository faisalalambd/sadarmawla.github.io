<!-- ############################## Header Section ############################## -->
<?php include 'header.php';
include 'admin/config.php' ?>





<?php
$sql = "SELECT * FROM 	dorbar_exclusive  order by id desc limit 1";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {

?>


        <!-- Single Post Start-->
        <div class="single" style="margin-top:50px">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="single-content">
                            <img src="admin/assets/image/<?php echo $row['image'] ?>" alt="Girl in a jacket" width="50" height="600">
                            <h2><?php echo $row['title'] ?></h2>
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