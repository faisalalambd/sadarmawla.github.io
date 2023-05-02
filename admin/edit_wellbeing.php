<?php
include 'config.php';
echo $id=$_GET['id'];
$sql = "SELECT * FROM 	wellbeing where id=$id";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        $image=$row['image'];
        $text=$row['text'];
        $button_name=$row['button_name'];
        $link=$row['link'];

    }}
?>

<!-- ############################## Header Section ############################## -->
<?php include 'header.php' ?>



<section class="section">

    <div class="section-body">

        <div class="row">

            <div class="col-12 col-md-12 col-lg-12">

                <div class="card">

                    <!-- ############################## Form Name ############################## -->
                    <div class="card-header">
                        <h4>Form: Wellbeing</h4>
                    </div>


                    <!-- ############################## Form ############################## -->
                    <form action="update_wellbeing.php?id=<?php echo $id?>" method="post" enctype="multipart/form-data">

                        <div class="card-body">

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label"><strong>Upload an image</strong></label>
                                <div class="col-sm-9">
                                    <input type="file" class="default" value="" name="choosefile" required>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label"><strong>Image Title</strong></label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="Image Title" value="<?php echo $text?>" name="text" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label"><strong>Button Title</strong></label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="Button Title" value="<?php echo $button_name?>" name="button_name" >
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label"><strong>Link</strong></label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="Button Title" value="<?php echo $link?>" name="link" >
                                </div>
                            </div>


                           

                        </div>


                        <div class="card-footer">
                        <button type="submit" name="uploadfile">submit</button>
                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>

</section>



<!-- ############################## Footer Section ############################## -->
<?php include 'footer.php' ?>