<!-- ############################## Header Section ############################## -->
<?php include 'header.php';
include 'admin/config.php' ?>


<!-- Page Header Start -->
<div class="page-header" style="background: linear-gradient(rgba(0, 0, 0, .5), rgba(0, 0, 0, .5)), url(../img/new/demo.png);">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Our Members</h2>
            </div>
            <style>
                .custom_a:hover {
                    color: white !important;
                    cursor: default;
                }
            </style>
            <div class="col-12">
                <a href="index.php">Home</a>
                <a href="#" class="custom_a">Members</a>
            </div>
        </div>
    </div>
</div>
<!-- Page Header End -->



<!-- Team Start -->
<div class="team">
    <div class="container">
        <!-- <div class="section-header text-center">
            <p>Our Member List</p>
            <h2>Awesome guys behind our charity activities</h2>
        </div> -->
        <div class="row">

            <?php

            $sql = "SELECT * FROM 	members  order by id ASC";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                // output data of each row
                while ($row = $result->fetch_assoc()) {

            ?>


                    <div class="col-lg-3 col-md-6">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="admin/assets/image/<?php echo $row['image'] ?>" alt="Team Image">
                            </div>
                            <div class="team-text">
                                <h2><?php echo $row['name'] ?></h2>
                                <p><?php echo $row['designation'] ?></p>
                                <div class="team-social">
                                    <a href=""><i class="fab fa-twitter"></i></a>
                                    <a href=""><i class="fab fa-facebook-f"></i></a>
                                    <a href=""><i class="fab fa-linkedin-in"></i></a>
                                    <a href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>


            <?php }
            } ?>


        </div>
    </div>
</div>
<!-- Team End -->









<!-- ############################## Footer Section ############################## -->
<?php include 'footer.php' ?>