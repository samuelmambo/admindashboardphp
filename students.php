<!DOCTYPE html>
<html>
<head>
	<title>Bootstrap Admin Template</title>
	<meta charset="UTF-8">
	<meta name="description" content="Creating admin dashboard">
	<meta name="keywords" content="HTML,CSS,Zalego,Technology,Zalego institute,JavaScript">
	<meta name="author" content="Your name">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="styles.css">
</head>
<body>
	<!-- All our code. write here   -->
	<div class="header">
		<img src="zalego.jfif" alt="Zalego" height="50" width="50" class="rounded-circle" >

	</div>
	<div class="sidebar">
		<nav>
			<ul>
				<li>
					<a href="index.php">
						<span> <i class="fa fa-group"></i></span>
						<span>Students</span>
					</a>
				</li>
				<li>
					<a href="">
						<span> <i class="fa fa-folder-open"></i></span>
						<span>Courses</span>
					</a>
				</li>
				<li>
					<a href="">
						<span> <i class="fa fa-graduation-cap"></i></span>
						<span>Campus</span>
					</a>
				</li>
			</ul>
		</nav>

	</div>
	<div class="main-content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<div class="card-header bg-dark text-white text-center">
						<span>students</span>
                      
					</div>
					<div class="card-body">
						<table class="table table-striped table-hover teble-responsive">
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
								<tr>
									<td>1.</td>
									<td>Sam Mambo</td>
									<td>0710406320</td>
									<td>samuel@yahoo.com</td>
									<td>Male</td>
									<td> Web Design</td>
									<td>23 jul 2022</td>
									<td>
										<a href="#" class="btn btn-primary  btn-sm">
											<i class="fa fa-edit"></i>
										</a>
										<a href="#" class="btn btn-info  btn-sm">
										<i class="fa fa-eye"></i>
										</a>
										<a href="#" class="btn btn-danger  btn-sm">
										<i class="fa fa-trash"></i>
										</a>
									</td>
								</tr>
							</tbody>
							
						</table>
					</div>
					<div class="card-footer"></div>
				</div>
			</div>
			
		</div>

	</div>















 <script src="jquery.min.js"></script>
 <script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>