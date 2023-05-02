<!-- ############################## Header Section ############################## -->
<?php include 'header.php';
include 'config.php' ?>



<section class="section">

    <div class="section-body">

        <div class="row">

            <div class="col-12">

                <div class="card">

                    <!-- ############################## Table Name ############################## -->
                    <div class="card-header">
                        <h4>Table:Slider</h4>
                    </div>


                    <div class="card-body">

                        <div class="table-responsive">

                            <!-- ############################## Add New ############################## -->
                            <!-- <div class="text-right">
                                <a href="create_slider.php" class="btn btn-icon icon-left btn-primary"><i class="fa-solid fa-plus"></i> Add New</a>
                            </div> -->


                            <!-- ############################## Table ############################## -->
                            <table class="table table-striped table-hover" id="tableExport" style="width:100%;">

                                <thead>

                                    <tr>

                                        <th>Id</th>
                                        <th>Image</th>
                                        <th>Title</th>
                                        <th>Action</th>

                                    </tr>

                                </thead>


                                <tbody>
                                <?php

$sql = "SELECT * FROM 	slider  order by id desc";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {

?>
                                    <tr>

                                        <td><?php echo $row['id']?></td>
                                        <td><img src="assets/image/<?php echo $row['image']?>" alt="Girl in a jacket" width="70" height="60"></td>
                                        <td><?php echo $row['title']?></td>
                                        <td style="display: inline-flex;">
                                            <a href="edit_slider.php?id=<?php echo $row['id']?>" class="btn btn-icon btn-primary">Edit</a>
                                            <!-- <form action="delete_slider.php?id=<?php echo $row['id']?>" method="post">
                                                <button type="submit" class="btn btn-icon btn-danger" style="margin-left: 5px">Delete</button>
                                            </form> -->
                                        </td>

                                    </tr><?php } }?>

                                </tbody>

                            </table>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>



<!-- ############################## Footer Section ############################## -->
<?php include 'footer.php' ?>