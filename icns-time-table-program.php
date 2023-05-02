<!-- ############################## Header Section ############################## -->
<?php include 'header.php';
include 'admin/config.php' ?>


<!-- Page Header Start -->
<div class="page-header" style="background: linear-gradient(rgba(0, 0, 0, .5), rgba(0, 0, 0, .5)), url(../img/new/demo.png);">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Our Programs</h2>
            </div>
            <div class="col-12">
                <a href="">Home</a>
                <a href="">Our Programs</a>
            </div>
        </div>
    </div>
</div>
<!-- Page Header End -->

<!-- Event Start -->
<div class="event">
    <div class="container">

        <div class="row">
            <?php

            $sql = "SELECT * FROM 	icns_time_table_of_program  order by id ASC";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                // output data of each row
                while ($row = $result->fetch_assoc()) {

            ?>



                    <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                        <div class="event-item">
                            <img src="admin/assets/image/<?php echo $row['image'] ?>" alt="Image">
                            <div class="event-content">
                                <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                    <p><i class="fa fa-calendar-alt"></i> <?php echo $row['date'] ?></p>
                                    <p><i class="far fa-clock"></i> <?php echo $row['time'] ?></p>
                                    <p><i class="fa fa-map-marker-alt"></i> <?php echo $row['place'] ?></p>
                                </div>

                                <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                    <div class="event-text" style="margin-left: -5%;">
                                        <h3><?php echo $row['title'] ?></h3>
                                        <p>
                                            <?php echo $row['description'] ?>
                                        </p>
                                        <a class="btn btn-custom" href="">Join Now</a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

            <?php }
            } ?>
        </div>
    </div>
</div>
<!-- Event End -->








<!-- ############################## Footer Section ############################## -->
<?php include 'footer.php' ?>