<!-- ############################## Header Section ############################## -->
<?php include 'header.php';
include 'admin/config.php';
$id = $_GET['id'];
?>


<!-- Page Header Start -->
<div class="page-header" style="background: linear-gradient(rgba(0, 0, 0, .5), rgba(0, 0, 0, .5)), url(../img/new/demo.png);">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Buy Books</h2>
            </div>
            <style>
                .custom_a:hover {
                    color: white !important;
                    cursor: default;
                }
            </style>
            <div class="col-12">
                <a href="index.php">Home</a>
                <a href="#" class="custom_a">Buy</a>
            </div>
        </div>
    </div>
</div>
<!-- Page Header End -->





<!-- ############################## Projects ############################## -->
<div class="blog mission">
    <div class="container">
        <div class="row">
            <?php

            $sql = "SELECT * FROM books  where id=$id";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                // output data of each row
                while ($row = $result->fetch_assoc()) {

            ?>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                        <img src="admin/assets/image/<?php echo $row['thumbnil'] ?>" alt="">
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                        <h4><strong><?php echo $row['title'] ?></strong></h4>
                        <h5>By <?php echo $row['writer'] ?></h5>
                        <h5>TK. <?php echo $row['price'] ?>/=</h5>
                        <h4>Publisher: <?php echo $row['publisher'] ?></h4>
                        <div class="blog-meta" style="margin-top:60px">
                            <p><i class="fa fa-book"></i><a href="read.php?id=<?php echo $row['id'] ?>" data-toggle="modal" data-target="#exampleModal1">Read</a></p>
                            <p><i class="fa fa-download"></i><a href="buy_books.php?id=<?php echo $row['id'] ?>" data-toggle="modal" data-target="#exampleModal">Buy Now</a></p>
                        </div>

                    </div>
            <?php }
            } ?>
        </div>

        <!-- Modal1 -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <form action="store_order.php?id=<?php echo $id ?>" method="post">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Fill up the form</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="inputAddress">Name</label>
                                <input type="text" class="form-control" id="inputAddress" name="name" placeholder="Your Name">
                            </div>
                            <div class="form-group">
                                <label for="inputEmail4">Email</label>
                                <input type="email" class="form-control" id="inputEmail4" name="email" placeholder="Your Email">
                            </div>
                            <div class="form-group">
                                <label for="inputPassword4">Phone</label>
                                <input type="text" class="form-control" id="inputPassword4" name="phone" placeholder="Your Password">
                            </div>
                            <div class="form-group">
                                <label for="inputAddress">Address</label>
                                <input type="text" class="form-control" id="inputAddress" name="address" placeholder="Your Address">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Confirm</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>




        <!-- Modal2 -->
        <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content" style="text-align:center !important">
                    <?php

                    $sql = "SELECT * FROM books  where id=$id";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        // output data of each row
                        while ($row = $result->fetch_assoc()) {

                    ?>
                            <?php echo $row['description'] ?>
                    <?php }
                    } ?>
                </div>
            </div>
        </div>




        <h5>More Books</h5>
        <hr>

        <div class="row">

            <?php

            $sql = "SELECT * FROM 	books  order by id ASC";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                // output data of each row
                while ($row = $result->fetch_assoc()) {

            ?>
                    <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                        <div class="blog-item" style="border: 1px solid #ccc;">
                            <div class="blog-book">
                                <img src="admin/assets/image/<?php echo $row['thumbnil'] ?>" alt="Image">
                            </div>
                            <div class="blog-text text-center">
                                <h3><a href="#"><?php echo $row['title'] ?></a></h3>
                                <h3>Price: BDT <?php echo $row['price'] ?>/=</a></h3>
                                <p>
                                    <?php echo $row['description'] ?>
                                </p>
                            </div>
                            <div class="blog-meta">
                                <p><i class="fa fa-book"></i><a href="read.php?id=<?php echo $row['id'] ?>">Read</a></p>
                                <p><i class="fa fa-download"></i><a href="buy_books.php?id=<?php echo $row['id'] ?>">Buy Book</a></p>
                            </div>
                        </div>
                    </div>

            <?php }
            } ?>


        </div>
    </div>
</div>
</div>





<!-- ############################## Footer Section ############################## -->
<?php include 'footer.php' ?>