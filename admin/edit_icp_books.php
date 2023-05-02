<?php 
include 'header.php' ;
include 'config.php';
$id=$_GET['id'];
$sql = "SELECT * FROM books where id=$id";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        $books=$row['books'];
        $title=$row['title'];
        $thumbnil=$row['thumbnil'];
        $description=$row['description'];
        $price=$row['price'];
         $writer=$row['writer'];
          $publisher=$row['publisher'];

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
                        <h4>Form: Books</h4>
                    </div>


                    <!-- ############################## Form ############################## -->
                    <form action="update_icp_books.php?id=<?php echo $id?>" method="post" enctype="multipart/form-data">

                        <div class="card-body">

                        <div class="form-group row">
                                <label class="col-sm-3 col-form-label"><strong>Upload an Book</strong></label>
                                <div class="col-sm-9">
                                    <input type="file" class="default" value="<?php echo $books?>" name="choosefile">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label"><strong>Upload an Thumbnil image of the book</strong></label>
                                <div class="col-sm-9">
                                    <input type="file" class="default" value="<?php echo $thumbnil?>" name="choosefile1">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label"><strong>Title</strong></label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="Title" value="<?php echo $title?>" name="title" required>
                                </div>
                            </div>
                            
                                <div class="form-group row">
                                <label class="col-sm-3 col-form-label"><strong>Title</strong></label>
                                <div class="col-sm-9">
                                    <input type="number" class="form-control" placeholder="Title" value="<?php echo $title?>" name="price" required>
                                </div>
                            </div>
                            
                             <div class="form-group row">
                                <label class="col-sm-3 col-form-label"><strong>Publisher</strong></label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="Publisher" value="<?php echo $publisher?>" name="publisher" required>
                                </div>
                            </div>
                            
                              <div class="form-group row">
                                <label class="col-sm-3 col-form-label"><strong>Writer</strong></label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="Writer" value="<?php echo $writer?>" name="writer" required>
                                </div>
                            </div>

                            
                            
                            
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label"><strong>Description</strong></label>
                                <div class="col-sm-9">
                                    <textarea class="summernote" name="description" value="<?php echo $row['description']?>"><?php echo $row['description']?></textarea>
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