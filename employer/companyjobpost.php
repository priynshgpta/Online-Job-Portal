<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="icon" type="image/x-icon" href="../images/favicon.png" />
	<title>Recent Jobs | Job Portal</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="../css/indexstyle.css">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<nav class="navbar navbar-expand-lg navbar">
		<a class="navbar-brand" ><img src="../images/jobportal.png" alt="" class="img-fluid" width="80px">JOB PORTAL</a>

		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
		  <span class="navbar-toggler-icon"></span>
		</button>
	  
		<div class="collapse navbar-collapse" id="navbarTogglerDemo02">
		  <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
		  </ul>
		
		  <form class="form-inline my-2 my-lg-0">
		  <ul class="navbar-nav mr-auto mt-5 mt-lg-0">
		  <div class="nav-item active mr-3 mt-2" >
        <a  href="companydashboard.php" style="color:black"><span class="fa fa-dashboard"></span> Dashboard </a></div>
		
		<div class="nav-item active mr-3 mt-2">
		<a href="#" style="color:black"><span class="fa fa-user"></span> Profile</a>
		</div>
		<div class="nav-item active mr-3 mt-2">
		<a href="#" style="color:black"><span class="fa fa-book"></span> Recents Job Posts</a>
		</div>
		<div class="nav-item active mr-3 mt-2">
		<a href="companylogout.php" style="color:black"><span class="fa fa-sign-out"></span> Logout</a></div>
		<div class="nav-item active mr-3">
		 
		<?php
				session_start();
				if(!isset($_SESSION['companylogin'])){
					echo '<script>alert ("You are not logged in. Please login to enter the main page.")</script>';
					echo '<script>window.location.href="companylogin.php"</script>';
				}
			$conn = mysqli_connect('localhost:3306', 'root', '', 'jobportal');

			if (mysqli_connect_error()){
				die ('Connection ERROR');
			}  
			$sql = 'SELECT * FROM login WHERE email = "'.$_SESSION['companylogin'].'"';
			$result = mysqli_query($conn, $sql);
			if(mysqli_affected_rows($conn)>0) {
				for($i = 0; $i < mysqli_num_rows($result); $i++){
					$row = mysqli_fetch_assoc($result);
					$stdid=$row['email'];
				}
			}
			?>
			<h6 class="mt-2"><span class="glyphicon glyphicon-user"></span> Employer Id: <?php 
	echo $stdid; 
      ?></h6>
	  
		</div>
		  </ul>


		  </form>
		</div>
	  </nav>

</head>

<body>
	
<div class="container mt-4">
		<h3><a href="../index.html">Job Portal</a></h3>
		<hr>
			<center><h4>Add Job Post</h4></center>
			<hr>
			
			<div class="container">
				<form method="POST" action="companydashboarddtb.php" enctype="multipart/form-data">
                <div class="form-group">
					<label for="jbname">Enter Company Name:</label>
					<input type="text" id="cname" class="form-control"name="cname" placeholder="enter your company" required></div>
				<div class="form-group">
					<label for="jbname">Enter Job Title:</label>
					<input type="text" id="postname" class="form-control"name="postname" placeholder="enter job role" required></div>
					<div class="form-group">
					<label for="jdesc">Enter Job Description:</label>
					<textarea name="jdesc" id ="jdesc"class="form-control" placeholder="Enter job description" required></textarea></div>
					<div class="form-group">
					<label for="vno">Enter Vacancy:</label>
					<input type="number" id="vno" class="form-control"name="vno" placeholder="enter no. of vacancy" required></div>
					<div class="form-group">
					<label for="vno">Enter Experience:</label>
					<input type="number" id="experience" class="form-control"name="experience" placeholder="enter no. of experience" required></div>
					<div class="form-group">
					<label for="vno">Enter Location:</label>
					<input type="text" id="location" class="form-control"name="location" placeholder="enter location" required></div>
					<div class="form-group">
					
					<label for="asgdes">Basic Pay</label>
					<input type="number" id="bpay" class="form-control" name="bpay" placeholder="Enter the basic salary" required></div>
					

					<center><input type="submit" name="upload" value="Submit" class="btn btn-primary mb-2">
					<h6><a href="companydashboard.php">Back to Previous Page</a></h6></center>
				</form>
			</div>
			</div>
</body>
    <footer class="container-fluid text-center pt-4" style="
    background-color: #cdd6eb;">
	<div class="container d-flex justify-content-center">
		<div class="row pb-1" style="color: black; ">

			<div class="copyright clearfix">
				<p>Copyright &copy; 2024 JobPortal Group. All Right Reserved</p>

				<p> Designed and Developed by Priyanshu Gupta</p>

			</div>

		</div>
	</div>
</footer>

</html>