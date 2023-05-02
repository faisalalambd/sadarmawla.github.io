<!-- ############################## Header Section ############################## -->
<?php include 'header.php';
include 'admin/config.php' ?>


<!-- Page Header Start -->
<div class="page-header" style="background: linear-gradient(rgba(0, 0, 0, .5), rgba(0, 0, 0, .5)), url(../img/new/demo.png);">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Nizamia Sangha</h2>
            </div>
            <style>
                .custom_a:hover {
                    color: white !important;
                    cursor: default;
                }
            </style>
            <div class="col-12">
                <a href="index.php">Home</a>
                <a href="#" class="custom_a">Nizamia Sangha</a>
            </div>
        </div>
    </div>
</div>
<!-- Page Header End -->




<!-- About Start -->
<div class="about">
    <div class="container">
        <?php

        $sql = "SELECT * FROM 	nizamia_sangha order by id ASC";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {

        ?>
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="about-img" data-parallax="scroll" data-image-src="admin/assets/image/<?php echo $row['image'] ?>"></div>
                    </div>
                    <div class="col-lg-6">

                        <div class="about-tab">
                            <ul class="nav nav-pills nav-justified">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="pill" href="#tab-content-1">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="pill" href="#tab-content-2">Mission</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="pill" href="#tab-content-3">Vision</a>
                                </li>
                            </ul>

                            <div class="tab-content">
                                <div id="tab-content-1" class="container tab-pane active">
                                    <?php echo $row['about'] ?>
                                </div>
                                <div id="tab-content-2" class="container tab-pane fade">
                                    <?php echo $row['mission'] ?>
                                </div>
                                <div id="tab-content-3" class="container tab-pane fade">
                                    <?php echo $row['vission'] ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        <?php }
        } ?>
    </div>
</div>
<!-- About End -->



















<!-- ############################## Footer Section ############################## -->
<?php include 'footer.php' ?>