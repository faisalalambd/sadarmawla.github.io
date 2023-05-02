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
                        <h4>Form: Outreach</h4>
                    </div>


                    <!-- ############################## Form ############################## -->
                    <form action="store_outreach_text.php" method="post">

                        <div class="card-body">

                         


                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label"><strong>Title</strong></label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="Title" value="" name="title" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label"><strong>Small Title</strong></label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="Small Title" value="" name="small_title" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label"><strong>Content</strong></label>
                                <div class="col-sm-9">
                                    <textarea class="summernote" name="description"></textarea>
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