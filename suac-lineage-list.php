<!-- ############################## Header Section ############################## -->
<?php include 'header.php';
include 'admin/config.php' ?>


<!-- Page Header Start -->
<div class="page-header" style="background: linear-gradient(rgba(0, 0, 0, .5), rgba(0, 0, 0, .5)), url(../img/new/demo.png);">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Lineage List</h2>
            </div>
            <div class="col-12">
                <a href="">Home</a>
                <a href="">List</a>
            </div>
        </div>
    </div>
</div>
<!-- Page Header End -->


<!-- Blog Start -->
<div class="blog">
    <div class="container">

        <div class="row">

            <?php

            $sql = "SELECT * FROM 	suac_lineage_list order by id ASC";
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
                            <!--<div class="blog-meta">-->
                            <!--    <p><i class="fa fa-user"></i><a href="">Admin</a></p>-->
                            <!--    <p><i class="fa fa-comments"></i><a href="">15 Comments</a></p>-->
                            <!--</div>-->
                        </div>
                    </div>

            <?php }
            } ?>

        </div>
    </div>
</div>
<!-- Blog End -->



<!-- ############################## Footer Section ############################## -->
<?php include 'footer.php' ?>