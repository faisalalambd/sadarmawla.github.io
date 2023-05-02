<?php 
include 'header.php' ;
include 'config.php';
$id=$_GET['id'];
$sql = "SELECT * FROM wisdom where id=$id";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        $image=$row['image'];
        $image_title=$row['image_title'];
        $description=$row['description'];
        $video_link=$row['video_link'];
        $date=$row['date'];
         $shortdescription=$row['shortdescription'];

    }}
?>

<!-- ############################## Header Section ############################## -->

<section class="section">

    <div class="section-body">

        <div class="row">

            <div class="col-12 col-md-12 col-lg-12">

                <div class="card">

                    <!-- ############################## Form Name ############################## -->
                    <div class="card-header">
                        <h4>Form: Latest Wisdom</h4>
                    </div>


                    <!-- ############################## Form ############################## -->
                    <form action="update_wisdom.php?id=<?php echo $id?>" method="post" enctype="multipart/form-data">

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
                                    <input type="text" class="form-control" placeholder="Image Title" value="<?php echo $image_title?>" name="image_title" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label"><strong>Video Link</strong></label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="Video Link" value="<?php echo $video_link?>" name="video_link" required>
                                </div>
                            </div>
                            
                             <div class="form-group row">
                                <label class="col-sm-3 col-form-label"><strong>Short Description</strong></label>
                                <div class="col-sm-9">
                                    <textarea class="summernote" name="shortdescription" value="description"><?php echo $shortdescription?></textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label"><strong>Description</strong></label>
                                <div class="col-sm-9">
                                    <textarea class="summernote" name="description" value="description"><?php echo $description?></textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label"><strong>Date</strong></label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="Date" value="<?php echo $date?>" name="date" required>
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