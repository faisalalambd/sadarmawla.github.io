<!-- ############################## Header Section ############################## -->
<?php include 'header.php';
include 'admin/config.php' ?>


<style>
    .page-header {
        position: relative;
        margin-bottom: 45px;
        padding: 210px 0 90px 0;
        text-align: center;
        background: url(img/new/Website-Header-About-Isha_0.avif);
        background-position: left;
        background-repeat: no-repeat;
        background-size: inherit;
        min-height: 500px;
    }

    @media (max-width: 575.98px) {
        .page-header {
            background-position: right;
        }
    }
</style>

<!-- Page Header Start -->
<div class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>About Us</h2>
            </div>
            <style>
                .custom_a:hover {
                    color: white !important;
                    cursor: default;
                }
            </style>
            <div class="col-12">
                <a href="index.php">Home</a>
                <a href="#" class="custom_a">About Us</a>
            </div>
        </div>
    </div>
</div>
<!-- Page Header End -->




<!-- ############################## Mission ############################## -->
<div class="blog mission">
    <div class="container">
        <div class="row">
            <?php

            $sql = "SELECT * FROM about  where used='mission'";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                // output data of each row
                while ($row = $result->fetch_assoc()) {

            ?>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 mobile">
                        <img src="admin/assets/image/<?php echo $row['image'] ?>" alt="">
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                        <h2><?php echo $row['title'] ?></h2>
                        <p>
                            <?php echo $row['description'] ?>
                        </p>
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 desktop">
                        <img src="admin/assets/image/<?php echo $row['image'] ?>" alt="">
                    </div>
            <?php }
            } ?>
        </div>
    </div>
</div>



<!-- ############################## Activities ############################## -->
<div class="blog mission" style="background-color: #fbf4ea;">
    <div class="container">
        <div class="row">
            <?php

            $sql = "SELECT * FROM about  where used='activities'";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                // output data of each row
                while ($row = $result->fetch_assoc()) {

            ?>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                        <!-- Carousel Start -->
                        <div class="carousel">
                            <div class="container-fluid">
                                <div class="owl-carousel">
                                    <div class="carousel-item">
                                        <div class="carousel-img">
                                            <img src="img/carousel-1.jpg" alt="Image">
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="carousel-img">
                                            <img src="img/carousel-2.jpg" alt="Image">
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="carousel-img">
                                            <img src="img/carousel-3.jpg" alt="Image">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Carousel End -->
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                        <h2><?php echo $row['title'] ?></h2>
                        <p>
                            <?php echo $row['description'] ?>
                        </p>
                    </div>
            <?php }
            } ?>
        </div>
    </div>
</div>




<!-- ############################## Programs ############################## -->
<div class="blog mission">
    <div class="container">
        <div class="row">
            <?php

            $sql = "SELECT * FROM about  where used='programs'";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                // output data of each row
                while ($row = $result->fetch_assoc()) {

            ?>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 mobile">
                        <img src="admin/assets/image/<?php echo $row['image'] ?>" alt="">
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                        <h2><?php echo $row['title'] ?></h2>
                        <p>
                            <?php echo $row['description'] ?>
                        </p>
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 desktop">
                        <img src="admin/assets/image/<?php echo $row['image'] ?>" alt="">
                    </div>
            <?php }
            } ?>
        </div>
    </div>
</div>



<!-- ############################## Projects ############################## -->
<div class="blog mission" style="background-color: #fbf4ea;">
    <div class="container">
        <div class="row">
            <?php

            $sql = "SELECT * FROM about  where used='projects'";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                // output data of each row
                while ($row = $result->fetch_assoc()) {

            ?>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                        <img src="admin/assets/image/<?php echo $row['image'] ?>" alt="">
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                        <h2><?php echo $row['title'] ?></h2>
                        <p>
                            <?php echo $row['description'] ?>
                        </p>
                    </div>
            <?php }
            } ?>
        </div>
    </div>
</div>
</div>



<!-- ############################## Dorbar Outreach ############################## -->
<div class="blog dorbar_outreach" style="background-color: #daded5;">
    <div class="container">
        <div class="section-header text-center">
            <h2>Dorbar Outreach</h2>
        </div>
        <div class="row">
            <?php

            $sql = "SELECT * FROM 	about_outreach  order by id ASC";
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
                                <h3><a href="#"><?php echo $row['title'] ?></a></h3>
                                <p>
                                    <?php echo $row['description'] ?>
                                </p>
                            </div>
                            <div class="blog-meta">
                                <a href="#" class="btn">Take me to the site</a>
                            </div>
                        </div>
                    </div>
            <?php }
            } ?>
        </div>
    </div>
</div>



<!-- ############################## Educational Initiatives ############################## -->
<div class="blog dorbar_outreach" style="background-color: #fbf4ea;">
    <div class="container">
        <div class="section-header text-center">
            <h2>Educational Initiatives</h2>

        </div>
        <div class="row">
            <?php

            $sql = "SELECT * FROM 	educational_initiative  order by id ASC";
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
                                <h3><a href="#"><?php echo $row['title'] ?></a></h3>
                                <p>
                                    <?php echo $row['description'] ?>
                                </p>
                            </div>
                            <div class="blog-meta">
                                <a href="#" class="btn">Take me to the site</a>
                            </div>
                        </div>
                    </div>
            <?php }
            } ?>
        </div>
    </div>
</div>



<!-- ############################## Economic Initiatives ############################## -->
<div class="blog dorbar_outreach">
    <div class="container">
        <div class="section-header text-center">
            <h2>Economic Initiatives</h2>
        </div>
        <div class="row">
            <div class="blog mission">
                <div class="container">
                    <div class="row">
                        <?php

                        $sql = "SELECT * FROM about  where used='crafts'";
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                            // output data of each row
                            while ($row = $result->fetch_assoc()) {

                        ?>
                                <div class="col-12 col-sm-12 col-md-6 col-lg-6 mobile">
                                    <img src="admin/assets/image/<?php echo $row['image'] ?>" alt="">
                                </div>
                                <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                    <h2><?php echo $row['title'] ?></h2>
                                    <p>
                                        <?php echo $row['description'] ?>
                                    </p>
                                    <div class="blog-meta" style="margin: 0;">
                                        <a href="#" class="btn">Take me to the site</a>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-6 col-lg-6 desktop">
                                    <img src="admin/assets/image/<?php echo $row['image'] ?>" alt="">
                                </div>
                        <?php }
                        } ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="blog mission">
                <div class="container">
                    <div class="row">
                        <?php

                        $sql = "SELECT * FROM about  where used='business'";
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                            // output data of each row
                            while ($row = $result->fetch_assoc()) {

                        ?>
                                <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                    <img src="admin/assets/image/<?php echo $row['image'] ?>" alt="">
                                </div>
                                <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                    <h2><?php echo $row['title'] ?></h2>
                                    <p>
                                        <?php echo $row['description'] ?>
                                    </p>
                                    <div class="blog-meta" style="margin: 0;">
                                        <a href="#" class="btn">Take me to the site</a>
                                    </div>
                                </div>
                        <?php }
                        } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- ############################## Related Programs ############################## -->
<div class="blog related_programs" style="background-color: #0b055f;">
    <div class="container">
        <div class="section-header text-center">
            <h2>Related Programs</h2>
        </div>
        <div class="row">
            <?php

            $sql = "SELECT * FROM 	related_programs  order by id ASC";
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
                                <h3><a href="#"><?php echo $row['title'] ?></a></h3>
                            </div>
                            <div style="padding: 0 4%;">
                                <?php echo $row['description'] ?>
                            </div>
                        </div>
                    </div>
            <?php }
            } ?>
        </div>
    </div>
</div>



<!-- ############################## Related Articles ############################## -->
<div class="blog related_articles" style="background-color: #cec5b2;">
    <div class="container">
        <div class="section-header text-center">
            <h2>Related Articles</h2>
        </div>
        <div class="row">

            <?php

            $sql = "SELECT * FROM 	related_articles  order by id ASC";
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
                            <div class="blog-meta">
                                <p>Article <i class="fa fa-book-open ml-2"></i></p>
                            </div>
                            <div class="blog-text">
                                <h3><a href="#"><?php echo $row['title'] ?></a></h3>
                                <p>
                                    <?php echo $row['description'] ?>
                                </p>
                            </div>
                            <!-- <div class="blog-meta text-left">
                        <p>Aug 30, 2017</p>
                    </div> -->
                        </div>
                    </div>

            <?php }
            } ?>
        </div>
    </div>
</div>



<!-- ############################## Footer Section ############################## -->
<?php include 'footer.php' ?>