<!-- ############################## Header Section ############################## -->
<?php include 'header.php';
include 'admin/config.php' ?>


<!-- Page Header Start -->
<div class="page-header" style="background: linear-gradient(rgba(0, 0, 0, .5), rgba(0, 0, 0, .5)), url(../img/new/demo.png);">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Upcomming Events</h2>
            </div>
            <div class="col-12">
                <a href="">Home</a>
                <a href="">Upcomming Events</a>
            </div>
        </div>
    </div>
</div>
<!-- Page Header End -->

<!-- Service Start -->
<div class="service">
    <div class="container">

        <div class="row">

            <?php

            $sql = "SELECT * FROM icns_program_schedule  order by id ASC";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                // output data of each row
                while ($row = $result->fetch_assoc()) {

            ?>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item">
                            <div class="service-icon">

                            </div>
                            <div class="service-text">
                                <h3><?php echo $row['title'] ?></h3>
                                <p><?php echo $row['description'] ?></p>
                            </div>
                        </div>
                    </div>

            <?php }
            } ?>


        </div>
    </div>
</div>
</div>
</div>
<!-- Service End -->










<!-- ############################## Footer Section ############################## -->
<?php include 'footer.php' ?>