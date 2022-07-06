<?php

require_once('logics/dbconnection.php');

$querUser = mysqli_query($conn, "SELECT *FROM enrollment WHERE no='".$_GET['id']."' ");

while($fetchUser =mysqli_fetch_array($querUser))
{
    $fullname =$fetchUser['fullname'];
    $phonenumber=$fetchUser['phonenumber'];
    $emailaddress=$fetchUser['emailaddress'];
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
                    <div class="card">
                        <div class="card-header text-center text-white bg-dark">
                            <h4>Edit Student: <?php echo $fullname .' '. $phonenumber.'    '. $emailaddress?></h4>
                        </div>
                    </div>
                </div>
            </div>
		</div>

	</div>

	<?php   require_once('includes/scripts.php')?>
</body>
</html>