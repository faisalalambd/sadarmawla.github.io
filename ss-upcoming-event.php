<!-- ############################## Header Section ############################## -->
<?php include 'header.php';
include 'admin/config.php' ?>


<!-- Page Header Start -->
<div class="page-header" style="background: linear-gradient(rgba(0, 0, 0, .5), rgba(0, 0, 0, .5)), url(../img/new/demo.png);">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Upcoming Event or Program</h2>
            </div>
            <style>
                .custom_a:hover {
                    color: white !important;
                    cursor: default;
                }
            </style>
            <div class="col-12">
                <a href="index.php">Home</a>
                <a href="#" class="custom_a">Event or Program</a>
            </div>
        </div>
    </div>
</div>
<!-- Page Header End -->




<!-- ############################## Meet Sadhguru ############################## -->
<div class="blog related_programs meet_sadhguru">
    <div class="container">
        <div class="row">

            <?php

            $sql = "SELECT * FROM 	ss_upcomming_event  order by id ASC";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                // output data of each row
                while ($row = $result->fetch_assoc()) {

            ?>
                    <div class="col-lg-4">
                        <div class="blog-item">
                            <div class="blog-img">
                                <img src="admin/assets/image/<?php echo $row['image'] ?>" alt="Image">
                            </div>
                            <div class="blog-text">
                                <h3 style="color:white;"><?php echo $row['title'] ?></h3>
                            </div>
                            <div style="padding: 5% 5% 0;">
                                <?php echo $row['description'] ?>
                            </div>
                            <!--<div class="blog-meta">-->
                            <!--    <a href="#" class="btn">Register Now</a>-->
                            <!--</div>-->
                        </div>
                    </div>
            <?php }
            } ?>



        </div>
    </div>
</div>









<!-- ############################## Footer Section ############################## -->
<?php include 'footer.php' ?>