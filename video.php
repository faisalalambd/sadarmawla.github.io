<?php $link = $_GET['link'] ?>
<!-- ############################## Header Section ############################## -->
<?php include 'header.php';
include 'admin/config.php' ?>


<!-- Page Header Start -->
<!--<div class="page-header">-->
<!--    <div class="container">-->
<!--        <div class="row">-->
<!--            <div class="col-12">-->
<!--                <h2>Our Books</h2>-->
<!--            </div>-->
<!--            <div class="col-12">-->
<!--                <a href="">Home</a>-->
<!--                <a href="">Books</a>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
<!-- Page Header End -->





<!-- Blog Start -->
<div class="blog">
    <div class="container">
        <!--<div class="section-header text-center">-->

        <!--    <h2>Our Books</h2>-->
        <!--</div>-->
        <div class="row">

            <div class="col-lg-12" style="margin-top:50px">
                <div class="blog-item">
                    <div class="blog-img text-center">
                        <img src="admin/assets/audio/<?php echo $row['thumbnil'] ?>" alt="Image" width="500" height="500">
                    </div>
                    <div class="blog-text text center">
                        <iframe width="560" height="315" src="<?php echo $link ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div class="blog-meta">
                        <!--<p><i class="fa fa-user"></i><a href="read.php?id=<?php echo $row['id'] ?>">Read</a></p>-->
                        <!--<p><i class="fa fa-comments"></i><a href="">Download</a></p>-->
                    </div>
                </div>
            </div>



        </div>
        <!--<div class="row">-->
        <!--    <div class="col-12">-->
        <!--        <ul class="pagination justify-content-center">-->
        <!--            <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>-->
        <!--            <li class="page-item"><a class="page-link" href="#">1</a></li>-->
        <!--            <li class="page-item active"><a class="page-link" href="#">2</a></li>-->
        <!--            <li class="page-item"><a class="page-link" href="#">3</a></li>-->
        <!--            <li class="page-item"><a class="page-link" href="#">Next</a></li>-->
        <!--        </ul>-->
        <!--    </div>-->
        <!--</div>-->
    </div>
</div>
<!-- Blog End -->









<!-- ############################## Footer Section ############################## -->
<?php include 'footer.php' ?>