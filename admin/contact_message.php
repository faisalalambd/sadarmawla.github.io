<?php
	include('session.php');
	if(!isset($_SESSION['login_user'])){
	header("location: index.php"); // Redirecting To Home Page
	}
	?><!-- ############################## Header Section ############################## -->
<?php include 'header.php';
include 'config.php' ?>



<section class="section">

    <div class="section-body">

        <div class="row">

            <div class="col-12">

                <div class="card">

                    <!-- ############################## Table Name ############################## -->
                    <div class="card-header">
                        <h4>Table: Different Shrines</h4>
                    </div>


                    <div class="card-body">

                        <div class="table-responsive">

                            <!-- ############################## Add New ############################## -->
                            <div class="text-right">
                                <a href="create_icns_different_shrines.php" class="btn btn-icon icon-left btn-primary"><i class="fa-solid fa-plus"></i> Add New</a>
                            </div>


                            <!-- ############################## Table ############################## -->
                            <table class="table table-striped table-hover" id="tableExport" style="width:100%;">

                                <thead>

                                    <tr>
 
                                        <th>Id</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Subject</th>
                                         <th>Message</th>
                                       

                                    </tr>

                                </thead>


                                <tbody>
                                <?php

$sql = "SELECT * FROM contact  order by id desc";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {

?>
                                    <tr>
                                        <td><?php echo $row['id']?></td>
                                         <td><?php echo $row['name']?></td>
                                          <td><?php echo $row['email']?></td>
                                           <td><?php echo $row['phone']?></td>
                                            <td><?php echo $row['subject']?></td>
                                             <td><?php echo $row['message']?></td>
                                        
                                      
                                       
                                    </tr>
                                    <?php }}?>

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