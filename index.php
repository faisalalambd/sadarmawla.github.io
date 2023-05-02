<!-- ############################## Header Section ############################## -->
<?php include 'header.php';
include 'admin/config.php' ?>

<div class="margin_top_class"></div>




<!-- ############################## Slider Section ############################## -->
<div class="carousel">
    <div class="container-fluid">
        <div class="owl-carousel">
            <?php

            $sql = "SELECT * FROM 	slider  order by id desc";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                // output data of each row
                while ($row = $result->fetch_assoc()) {

            ?>
                    <div class="carousel-item">
                        <div class="carousel-img">
                            <img src="admin/assets/image/<?php echo $row['image'] ?>" alt="Image">
                        </div>
                    </div>
            <?php }
            } ?>

        </div>
    </div>
</div>
<!-- Carousel End -->




<!-- ############################## Slider ############################## -->
<div class="blog related_programs slider" style="padding-top:0;">
    <div class="container">
        <div class="section-header text-left">
            <h2>Technologies for Wellbeing</h2>
        </div>
        <div class="row">
            <?php

            $sql = "SELECT * FROM 	wellbeing  order by id desc";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                // output data of each row
                while ($row = $result->fetch_assoc()) {

            ?>

                    <div class="col-12 col-sm-12 col-md-3 col-lg-3">
                        <div class="blog-item">
                            <div class="blog-img">
                                <img src="admin/assets/image/<?php echo $row['image'] ?>" alt="Image">
                            </div>
                            <div class="blog-meta">
                                <div class="row">
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 text-center">
                                        <p><?php echo $row['text'] ?></p>
                                        <a href="#" class="btn"><?php echo $row['button_name'] ?></a>
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







<!-- ############################## Of Yoga ############################## -->
<!-- <div class="blog of_yoga">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-3 col-lg-3 of_yoga_top text-center">
                <img src="img/new/sg-ex-logo.svg" alt="Image" />
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 of_yoga_middle text-center">
                <h3>Of Yoga, Yogi and Mysticism</h3>
                <p>Unseen Videos • Weekly Releases • Watch Anytime</p>
                <div>
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 know_more">
                            <a href="" class="btn">Know More</a>
                        </div>
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 subscribe">
                            <a href="" class="btn">Subscribe</a>
                        </div>
                    </div>
                </div>
                <div>
                    <h6>
                        Already Subscribed? <a href="">Log In</a>
                    </h6>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-3 col-lg-3 of_yoga_down text-center">
                <img src="img/new/catalog-image.avif" alt="Image" />
            </div>
        </div>
    </div>
</div> -->

<style>
    .text {
        overflow: hidden;
        text-overflow: ellipsis;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        /* number of lines to show */
        line-clamp: 2;
        -webkit-box-orient: vertical;
    }
</style>


<!-- ############################## Latest Wisdom ############################## -->
<div class="blog related_articles latest_wisdom">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="custom_blog-item">
                    <div class="blog-text">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                <h2>Latest Wisdom from Sadar Uddin Ahmad Chisty</h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 text-right custom_sell_all">
                                <a href="all_article.php">see all articles</a>
                            </div>
                        </div>
                    </div>
                    <div class="custom_blog-meta">
                        <img src="img/new/illustration-wisdom-landing-2.svg" alt="Image">
                    </div>
                </div>
            </div>
            <?php

            $sql = "SELECT * FROM 	wisdom  order by id DESC limit 2";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                // output data of each row
                while ($row = $result->fetch_assoc()) {

            ?>
                    <div class="col-lg-4">
                        <div class="blog-item">
                            <div class="blog-img">
                                <a href="article_details.php?id=<?php echo $row['id'] ?>"> <img src="admin/assets/image/<?php echo $row['image'] ?>" alt="Image"></a>
                            </div>
                            <!--<div class="blog-meta">-->
                            <!--    <p>video <i class="fa fa-video ml-2"></i></p>-->
                            <!--</div>-->
                            <div class="blog-text">
                                <h3><a href="article_details.php?id=<?php echo $row['id'] ?>"><?php echo $row['image_title'] ?></a></h3>
                                <p class="text">
                                    <?php echo $row['shortdescription'] ?>
                                </p>
                            </div>
                            <div class="blog-meta text-left">
                                <p><?php echo $row['date'] ?></p>
                            </div>
                        </div>
                    </div>
            <?php }
            } ?>

        </div>
    </div>
</div>




<!-- ############################## Inner Engineering ############################## -->
<div class="blog mission isha_outreach related_programs meet_sadhguru inner_engineering">
    <div class="container" style="background-color: #eceae3;">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12">


                <?php
                $sql = "SELECT * FROM inner_engineering  order by id desc";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                ?>
                        <div class="row inner_eng_row">
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 inner_img">
                                <div class="blog-item">
                                    <div class="blog-img">
                                        <img src="admin/assets/image/<?php echo $row['image'] ?>" alt="Image">
                                    </div>
                                    <div class="blog-text">
                                        <h3><?php echo $row['image_title'] ?></h3>
                                    </div>


                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 inner_now ">
                                <p class="text"><?php echo $row['shortdescription'] ?></p>
                                <div class="blog-meta">
                                    <div class="row">
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">-->
                                            <a href="innerengineer.php?id=<?php echo $row['id'] ?>" class="btn">Learn More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                <?php }
                } ?>



                <?php
                $sql = "SELECT * FROM 	soil  order by id desc limit 1";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {

                ?>
                        <div class="row volunteering contribution inner_save">
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 mobile">
                                <img src="admin/assets/image/<?php echo $row['image'] ?>" alt="">
                            </div>
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                <h2><?php echo $row['title'] ?></h2>
                                <p>
                                    <?php echo $row['shortdescription'] ?> </p>
                                <div class="row">
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 contribution_a">
                                        <a href="save_soil.php?id=<?php echo $row['id'] ?>">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 desktop">
                                <img src="admin/assets/image/<?php echo $row['image'] ?>" alt="">
                            </div>
                        </div>
                <?php }
                } ?>

            </div>
        </div>
    </div>
</div>



<!-- ############################## Sadhguru Quote ############################## -->
<!-- <div class="event sadhguru_quote">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-8 col-lg-8">
                <div class="event-item">
                    <img src="img/event-1.jpg" alt="Image">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 text-center">
                            <h3>
                                You do not have to ‘raise’ children. You have to give them space, love, and support to grow. Every human being is capable of a unique possibility.
                            </h3>
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 text-center">
                            <h5>
                                Sadhguru Quote - June 16, 2022
                            </h5>
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 text-center">
                            <h6>
                                Receive Sadhguru’s quote, every day, at a time of your choosing.
                            </h6>
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 text-center">
                            <form action="" method="post">
                                <div class="card-body">
                                    <div class="form-group row">
                                        <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                                            <input type="text" class="form-control" placeholder="Full Name" value="" name="full_name" required>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                                            <input type="email" class="form-control" id="inputEmail3" placeholder="Email Address" value="" name="email" required>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                                            <select class="form-control selectric">
                                                <option>Country</option>
                                                <option>Bangladesh</option>
                                                <option>India</option>
                                            </select>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn">Subscribe</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                    <p><a href="#">Tweets by Sadhguru</a></p>
            </div>
        </div>
    </div>
</div> -->




<!-- ############################## Isha Outreach ############################## -->
<div class="blog mission isha_outreach">
    <div class="container" style="background-color: #450302;">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12" style="padding: 0 5%;">
                <div class="team">
                    <div class="row one_life">
                        <?php
                        $sql = "SELECT * FROM 	outreach_image  order by id asc";
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                            // output data of each row
                            while ($row = $result->fetch_assoc()) {

                        ?>
                                <div class="col-12 col-sm-12 col-md-4 col-lg-4" style="padding: 0;">
                                    <div class="team-item">
                                        <div class="team-img">
                                            <img src="admin/assets/image/<?php echo $row['image'] ?>" alt="Team Image">
                                        </div>
                                        <div class="team-text">
                                            <h2><?php echo $row['title'] ?></h2>
                                        </div>
                                    </div>
                                </div>
                        <?php }
                        } ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="row pera">
            <?php
            $sql = "SELECT * FROM 	outreach  order by id desc";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                // output data of each row
                while ($row = $result->fetch_assoc()) {

            ?>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                        <p>
                            <?php echo $row['small_title'] ?> </p>
                    </div>
            <?php }
            } ?>
        </div>
        <div class="row volunteering">
            <?php
            $sql = "SELECT * FROM 	voluntary  where id=1";
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
                        <h3><?php echo $row['small_title'] ?></h3>
                        <p><?php echo $row['description'] ?></p>
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 volunteering_a">
                                <a href="#">Volunteer Now</a>
                            </div>
                        </div>
                    </div>
            <?php }
            } ?>
        </div>
        <div class="row volunteering contribution">
            <?php
            $sql = "SELECT * FROM 	voluntary  where id=2";
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
                        <h3><?php echo $row['small_title'] ?></h3>
                        <p><?php echo $row['description'] ?></p>
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 contribution_a">
                                <a href="#">Donate Now</a>
                            </div>
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




<!-- ############################## Meet Sadhguru ############################## -->
<div class="blog related_programs meet_sadhguru">
    <div class="container">
        <div class="section-header text-left">
            <h2>Meet The Present Personalities form guru family</h2>
        </div>
        <div class="row">
            <?php
            $sql = "SELECT * FROM 	meet  order by id desc";
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
                            <div class="text" style="padding: 5% 5% 0;">
                                <?php echo $row['shortdescription'] ?>
                            </div>
                            <div class="blog-meta">
                                <a href="#" class="btn text-center">See more</a>
                            </div>
                        </div>
                    </div>
            <?php }
            } ?>
        </div>
    </div>
</div>





<!-- ############################## Latest From Blog ############################## -->
<div class="blog related_articles" style="background-color: #cec5b2;">
    <div class="container">
        <div class="section-header text-center">
            <h2>Latest From Blog</h2>
        </div>
        <div class="row">

            <?php
            $sql = "SELECT * FROM 	blog  order by id desc";
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
                                <p><?php echo $row['category'] ?> <i class="fa fa-video ml-2"></i></p>
                            </div>
                            <div class="blog-text">
                                <h3><a href="blog_details.php?id=<?php echo $row['id'] ?>"><?php echo $row['title'] ?></a></h3>
                                <p>
                                    <?php echo $row['short_description'] ?>
                                </p>
                            </div>
                            <div class="blog-meta text-left">
                                <!-- <p>Aug 30, 2017</p> -->
                            </div>
                        </div>
                    </div>

            <?php }
            } ?>

        </div>
    </div>
</div>




<!-- ############################## Footer Section ############################## -->
<?php include 'footer.php' ?>