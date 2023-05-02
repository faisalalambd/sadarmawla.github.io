<!-- ############################## Header Section ############################## -->
<?php 
include 'header.php' ;
include 'config.php';
$id=$_GET['id'];
$sql = "SELECT * FROM nizamia_sangha where id=$id";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        $image=$row['image'];
        $about=$row['about'];
        $mission=$row['mission'];
        $vission=$row['vission'];
    }}
?>


<section class="section">

    <div class="section-body">

        <div class="row">

            <div class="col-12 col-md-12 col-lg-12">

                <div class="card">

                    <!-- ############################## Form Name ############################## -->
                    <div class="card-header">
                        <h4>Form: Nizamia Sangha</h4>
                    </div>


                    <!-- ############################## Form ############################## -->
                    <form action="update_nizamia_sangha.php?id=<?php echo $id?>" method="post" enctype="multipart/form-data">

                        <div class="card-body">

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label"><strong>Upload an image</strong></label>
                                <div class="col-sm-9">
                                    <input type="file" class="default" value="" name="choosefile" required>
                                </div>
                            </div>

                          <div class="form-group row">
                                <label class="col-sm-3 col-form-label"><strong>About</strong></label>
                                <div class="col-sm-9">
                                    <textarea class="summernote" name="about" value="<?php echo $about?>"><?php echo $about?></textarea>
                                </div>
                            </div>
                           <div class="form-group row">
                                <label class="col-sm-3 col-form-label"><strong>Mission</strong></label>
                                <div class="col-sm-9">
                                    <textarea class="summernote" name="mission" value="<?php echo $mission?>"><?php echo $mission?></textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label"><strong>Vission</strong></label>
                                <div class="col-sm-9">
                                    <textarea class="summernote" name="vission" value="<?php echo $vission?>"><?php echo $vission?></textarea>
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