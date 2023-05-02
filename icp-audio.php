<!-- ############################## Header Section ############################## -->
<?php include 'header.php';
include 'admin/config.php' ?>


<!-- Page Header Start -->
<div class="page-header" style="background: linear-gradient(rgba(0, 0, 0, .5), rgba(0, 0, 0, .5)), url(../img/new/demo.png);">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Our Audios</h2>
            </div>
            <style>
                .custom_a:hover {
                    color: white !important;
                    cursor: default;
                }
            </style>
            <div class="col-12">
                <a href="index.php">Home</a>
                <a href="#" class="custom_a">Audios</a>
            </div>
        </div>
    </div>
</div>
<!-- Page Header End -->




<!-- Blog Start -->
<div class="blog">
    <div class="container">
        <!-- <div class="section-header text-center">

            <h2>Our Books</h2>
        </div> -->
        <div class="row">
            <?php

            $sql = "SELECT * FROM 	icp_audio  order by id ASC";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                // output data of each row
                while ($row = $result->fetch_assoc()) {

            ?>
                    <div class="col-lg-4">
                        <div class="blog-item" style="border: 1px solid #ccc;">
                            <div class="blog-img">
                                <img src="admin/assets/audio/<?php echo $row['image'] ?>" alt="Image">
                            </div>
                            <div class="blog-text">
                                <h3><a href="#"><?php echo $row['title'] ?></a></h3>
                                <p>
                                    <?php echo $row['description'] ?>
                                </p>
                            </div>
                            <div class="blog-meta">
                                <!-- <p><i class="fa fa-book"></i><a href="read.php?id=<?php echo $row['id'] ?>">Read</a></p> -->
                                <p><i class="fa fa-download"></i><a href="audio.php?id=<?php echo $row['id'] ?>">Listen</a></p>
                            </div>
                        </div>
                    </div>

            <?php }
            } ?>


        </div>
        <!-- <div class="row">
            <div class="col-12">
                <ul class="pagination justify-content-center">
                    <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item active"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                </ul>
            </div>
        </div> -->
    </div>
</div>
<!-- Blog End -->



<!-- ############################## Footer Section ############################## -->
<?php include 'footer.php' ?>