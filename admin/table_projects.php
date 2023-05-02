<!-- ############################## Header Section ############################## -->
<?php include 'header.php' ?>



<section class="section">

    <div class="section-body">

        <div class="row">

            <div class="col-12">

                <div class="card">

                    <!-- ############################## Table Name ############################## -->
                    <div class="card-header">
                        <h4>Table: Projects</h4>
                    </div>


                    <div class="card-body">

                        <div class="table-responsive">

                            <!-- ############################## Add New ############################## -->
                            <div class="text-right">
                                <a href="form_projects.php" class="btn btn-icon icon-left btn-primary"><i class="fa-solid fa-plus"></i> Add New</a>
                            </div>


                            <!-- ############################## Table ############################## -->
                            <table class="table table-striped table-hover" id="tableExport" style="width:100%;">

                                <thead>

                                    <tr>

                                        <th>Id</th>
                                        <th>Image</th>
                                        <th>Image Title</th>
                                        <th>Description</th>
                                        <th>Action</th>

                                    </tr>

                                </thead>


                                <tbody>

                                    <tr>

                                        <td>001</td>
                                        <td>....</td>
                                        <td>System Architect</td>
                                        <td>System Architect shfahsf fsaghgf</td>
                                      
                                        <td style="display: inline-flex;">
                                            <a href="#" class="btn btn-icon btn-primary">Edit</a>
                                            <form action="#" method="post">
                                                <button type="submit" class="btn btn-icon btn-danger" style="margin-left: 5px">Delete</button>
                                            </form>
                                        </td>

                                    </tr>

                                </tbody>

                            </table>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>



<!-- ############################## Footer Section ############################## -->
<?php include 'footer.php' ?>