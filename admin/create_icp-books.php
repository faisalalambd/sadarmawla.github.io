<?php
	include('session.php');
	if(!isset($_SESSION['login_user'])){
	header("location: index.php"); // Redirecting To Home Page
	}
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
                        <h4>Form: Books</h4>
                    </div>


                    <!-- ############################## Form ############################## -->
                    <form action="store_icp_books.php" method="post" enctype="multipart/form-data">

                        <div class="card-body">

                        <div class="form-group row">
                                <label class="col-sm-3 col-form-label"><strong>Upload an Book</strong></label>
                                <div class="col-sm-9">
                                    <input type="file" class="default" value="" name="choosefile" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label"><strong>Upload an Thumbnil image of the book</strong></label>
                                <div class="col-sm-9">
                                    <input type="file" class="default" value="" name="choosefile1" required>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label"><strong>Title</strong></label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="Title" value="" name="title" required>
                                </div>
                            </div>
                            
                             <div class="form-group row">
                                <label class="col-sm-3 col-form-label"><strong>Price</strong></label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="price" value="" name="price" required>
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label"><strong>Publisher</strong></label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="Publisher" value="" name="publisher" required>
                                </div>
                            </div>
                            
                              <div class="form-group row">
                                <label class="col-sm-3 col-form-label"><strong>Writer</strong></label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="Writer" value="" name="writer" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label"><strong>Description</strong></label>
                                <div class="col-sm-9">
                                    <textarea class="summernote" name="description"></textarea>
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