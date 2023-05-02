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
                        <h4>Form: Nizamia Sangha</h4>
                    </div>


                    <!-- ############################## Form ############################## -->
                    <form action="store_nizamia_sangha.php" method="post" enctype="multipart/form-data">

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
                                    <textarea class="summernote" name="about"></textarea>
                                </div>
                            </div>
                           <div class="form-group row">
                                <label class="col-sm-3 col-form-label"><strong>Mission</strong></label>
                                <div class="col-sm-9">
                                    <textarea class="summernote" name="mission"></textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label"><strong>Vission</strong></label>
                                <div class="col-sm-9">
                                    <textarea class="summernote" name="vission"></textarea>
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