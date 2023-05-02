<?php
include 'config.php';
echo $id=$_GET['id'];
$sql = "SELECT * FROM icns_time_table_of_program where id=$id";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        $image=$row['image'];
        $title=$row['title'];
        $description=$row['description'];
        $date=$row['date'];
        $time=$row['time'];
        $place=$row['place'];
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
                        <h4>Update: Time table of Program</h4> 
                    </div>


                    <!-- ############################## Form ############################## -->
                    <form action="update_time_table_program.php?id=<?php echo $id?>" method="post" enctype="multipart/form-data">

                        <div class="card-body">

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label"><strong>Upload an image</strong></label>
                                <div class="col-sm-9">
                                    <input type="file" class="default" value="" name="choosefile" required>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label"><strong>Title</strong></label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="Title" value="<?php echo $title?>" name="title" required>
                                </div>
                            </div>

                            
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label"><strong>Date</strong></label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="Date" value="<?php echo $date?>" name="date" required>
                                </div>
                            </div>

                            
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label"><strong>Time</strong></label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="Time" value="<?php echo $time?>" name="time" >
                                </div>
                            </div>

                            
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label"><strong>Place</strong></label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="Place" value="<?php echo $place?>" name="place" required>
                                </div>
                            </div>



                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label"><strong>Description</strong></label>
                                <div class="col-sm-9">
                                    <textarea class="summernote" name="description" value="<?php echo $description?>"><?php echo $description?></textarea>
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