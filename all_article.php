<!-- ############################## Header Section ############################## -->
<?php include 'header.php';
include 'admin/config.php' ?>



<!-- Page Header Start -->
<div class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>All Article</h2>
            </div>
            <style>
                .custom_a:hover {
                    color: white !important;
                    cursor: default;
                }
            </style>
            <div class="col-12">
                <a href="index.php">Home</a>
                <a href="#" class="custom_a">Article</a>
            </div>
        </div>
    </div>
</div>
<!-- Page Header End -->






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




<!-- ############################## Latest Wisdom ############################## -->
<div class="blog related_articles latest_wisdom">
    <div class="container">
        <div class="row">

            <?php

            $sql = "SELECT * FROM 	wisdom  order by id DESC ";
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
                                <p>video <i class="fa fa-video ml-2"></i></p>
                            </div>
                            <div class="blog-text">
                                <h3><a href="article_details.php?id=<?php echo $row['id'] ?>"><?php echo $row['image_title'] ?></a></h3>
                                <p>
                                    <?php echo $row['description'] ?>
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




<!-- ############################## Footer Section ############################## -->
<?php include 'footer.php' ?>