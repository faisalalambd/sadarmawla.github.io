<?php 
include 'header.php' ;
include 'config.php';
$id=$_GET['id'];
$sql = "SELECT * FROM outreach where id=$id";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        $title=$row['title'];
        $small_title=$row['small_title'];
        $description=$row['description'];
       
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
                        <h4>Form: Outreach</h4>
                    </div>


                    <!-- ############################## Form ############################## -->
                    <form action="update_outreach_text.php?id=<?php echo $id?>" method="post">

                        <div class="card-body">

                         


                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label"><strong>Title</strong></label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="Title" value="<?php echo $title?>" name="title" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label"><strong>Small Title</strong></label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="Small Title" value="<?php echo $small_title?>" name="small_title" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label"><strong>Content</strong></label>
                                <div class="col-sm-9">
                                    <textarea class="summernote" name="description" value="<?php echo $description?>"> <?php echo $description?></textarea>
                                </div>
                            </div>

                        </div>


                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>

</section>



<!-- ############################## Footer Section ############################## -->
<?php include 'footer.php' ?>