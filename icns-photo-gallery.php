<!-- ############################## Header Section ############################## -->
<?php include 'header.php';
include 'admin/config.php' ?>


<!-- Page Header Start -->
<div class="page-header" style="background: linear-gradient(rgba(0, 0, 0, .5), rgba(0, 0, 0, .5)), url(../img/new/demo.png);">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Photo Gallery</h2>
            </div>
            <style>
                .custom_a:hover {
                    color: white !important;
                    cursor: default;
                }
            </style>
            <div class="col-12">
                <a href="index.php">Home</a>
                <a href="#" class="custom_a">Gallery</a>
            </div>
        </div>
    </div>
</div>
<!-- Page Header End -->





<!-- ############################## Isha Outreach ############################## -->
<div class="blog mission isha_outreach">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                <div class="team">
                    <div class="row one_life">
                        <?php
                        $sql = "SELECT * FROM 	icns_photo_gallery  order by id asc";
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                            // output data of each row
                            while ($row = $result->fetch_assoc()) {

                        ?>
                                <div class="col-12 col-sm-12 col-md-4 col-lg-4 ">
                                    <div class="team-item">
                                        <div class="team-img">
                                            <img src="admin/assets/image/<?php echo $row['image'] ?>" data-toggle="modal" data-target="#exampleModal<?php echo $row['id'] ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="modal fade" id="exampleModal<?php echo $row['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">
                                                        ×
                                                    </span>
                                                </button>
                                            </div>
                                            <!--Modal body with image-->
                                            <div class="modal-body">
                                                <img src="admin/assets/image/<?php echo $row['image'] ?>" />
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">
                                                    Close
                                                </button>
                                            </div>
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
</div>








<!-- ############################## Footer Section ############################## -->
<?php include 'footer.php' ?>