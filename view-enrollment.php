<?php

require_once('logics/dbconnection.php');

$querUser = mysqli_query($conn, "SELECT *FROM enrollment WHERE no='".$_GET['id']."' ");

while($fetchUser =mysqli_fetch_array($querUser))
{
    $fullname =$fetchUser['fullname'];
    $phonenumber =$fetchUser['phonenumber'];
    $emailaddress =$fetchUser['emailaddress'];
    $gender =$fetchUser['gender'];
    $course =$fetchUser['course'];
    
}

?>

<!DOCTYPE html>
<html>
<?php   require_once('includes/headers.php')?>

<body>
    <!-- All our code. write here   -->
    <div class="header">
        <?php require_once('includes/navbar.php') ?>

    </div>

    <div class="sidebar">
        <?php   require_once('includes/sidebar.php')?>

    </div>
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card shadow">
                        <div class="card-header bg-dark text-white text-center">
                            <h4>
                                Student Details:
                            </h4>

                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table  teble-responsive  table table-sm card shadow" >
                        <th>
								<tr>
									<th>No.</th>
									<th>Full Name</th>
									<th> Phone number</th>
									<th>Email</th>
									<th>Gender</th>
									<th>Course</th>
									<th>Enrolled On</th>
									<th>Actions</th>
								</tr>
							</th>
                            <tbody>
								<?php while($fetchRecords=mysqli_fetch_array($sqlQuery)) { ?>
									<tr>
										<td><?php echo  $fetchRecords['no']?> </td>
										
										<td><?php echo  $fetchRecords['fullname']?> </td>
										<td><?php echo  $fetchRecords['phonenumber']?> </td>
										<td><?php echo  $fetchRecords['emailaddress']?> </td>
										<td><?php echo  $fetchRecords['gender']?> </td>
										<td><?php echo  $fetchRecords['course']?> </td>
										<td><?php echo  $fetchRecords['created-at']?> </td>
										<td>
										<a href="edit-enrollment.php?id=<?php echo  $fetchRecords['no']?>" class="btn btn-primary">
											<i class="fa fa-edit"></i>
									    </a>
										<a href="" class="btn btn-info">
											<i class="fa fa-eye"></i>
									    </a>
										<a href="" class="btn btn-danger">
											<i class="fa fa-trash"></i>
									    </a>

										</td>
										</a>
										</td>
									</tr>

								<?php } ?>
							</tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>







    <?php   require_once('includes/scripts.php')?>
</body>

</html>