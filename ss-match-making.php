<?php
include('session.php');
if (!isset($_SESSION['login_user'])) {
    header("location: signin.php"); // Redirecting To Home Page
}
?>
<!-- ############################## Header Section ############################## -->
<?php include 'header.php';
include 'admin/config.php' ?>


<!-- Page Header Start -->
<div class="page-header" style="background: linear-gradient(rgba(0, 0, 0, .5), rgba(0, 0, 0, .5)), url(../img/new/demo.png);">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Match-Making</h2>
            </div>
            <style>
                .custom_a:hover {
                    color: white !important;
                    cursor: default;
                }
            </style>
            <div class="col-12">
                <a href="index.php">Home</a>
                <a href="#" class="custom_a">Match Making</a>
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
            $sql = "SELECT * FROM 	matchmaking  order by id desc limit 1";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                // output data of each row
                while ($row = $result->fetch_assoc()) {

            ?>

                    <div class="col-lg-4">
                        <a href="match-making-details.php?id=<?php echo $row['id'] ?>">
                            <div class="blog-item">
                                <div class="blog-img">
                                    <img src="admin/assets/cv/<?php echo $row['image'] ?>" alt="Image">
                                </div>
                                <div class="blog-text">
                                    <h3 style="color: white;"><?php echo $row['name'] ?></h3>
                                </div>
                                <div style="color: black; padding: 5% 3% 0;">
                                    <?php echo $row['description'] ?>
                                </div>
                            </div>
                        </a>
                    </div>

            <?php }
            } ?>

        </div>
    </div>
</div>









<!-- ############################## Footer Section ############################## -->
<?php include 'footer.php' ?>