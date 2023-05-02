<?php 
include 'header.php' ;
include 'config.php';
$id=$_GET['id'];
$sql = "SELECT * FROM blog where id=$id";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        $image=$row['image'];
        $title=$row['title'];
        $category=$row['category'];
        $short_description=$row['short_description'];
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
                        <h4>Form: Latest Blogs</h4>
                    </div>


                    <!-- ############################## Form ############################## -->
                    <form action="update_blog.php?id=<?php echo $id?>" method="post" enctype="multipart/form-data">

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
                                <label class="col-sm-3 col-form-label"><strong>Category</strong></label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="Category" value="<?php echo $category?>" name="category" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label"><strong>Short Description</strong></label>
                                <div class="col-sm-9" >
                                    <textarea class="summernote" name="short_description" value="<?php echo $short_description?>"><?php echo $short_description?></textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label"><strong>Description</strong></label>
                                <div class="col-sm-9" >
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