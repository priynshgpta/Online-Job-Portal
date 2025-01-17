<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="icon" type="image/x-icon" href="../images/favicon.png" />
	<title>Dashboard | Job PORTAL</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="icon" type="image/x-icon" href="../images/favicon.png" />
	<link rel="stylesheet" href="../css/jobseekerstyle.css">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<nav class="navbar navbar-expand-lg navbar">
		<a class="navbar-brand"><img src="../images/jobportal.png" alt="" class="img-fluid" width="80px">JOB PORTAL</a>

		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
		  <span class="navbar-toggler-icon"></span>
		</button>
	  
		<div class="collapse navbar-collapse" id="navbarTogglerDemo02">
		  <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
		  </ul>
		
		  <form class="form-inline my-2 my-lg-0">
		  <ul class="navbar-nav mr-auto mt-5 mt-lg-0">
		  <div class="nav-item active mr-3 mt-2" >
        <a  href="jobseekerdashboard.php" style="color:black"><span class="fa fa-dashboard"></span> Dashboard </a></div>
		
		<div class="nav-item active mr-3 mt-2">
		<a href="#" style="color:black"><span class="fa fa-user"></span> Profile</a>
		</div>
		<div class="nav-item active mr-3 mt-2">
		<a href="jobseekerdashboard.php	" style="color:black"><span class="fa fa-book"></span> Recents Job Posts</a>
		</div>
		<div class="nav-item active mr-3 mt-2">
		<a href="jobseekerlogout.php" style="color:black"><span class="fa fa-sign-out"></span> Logout</a></div>
		<div class="nav-item active mr-3">
		 
		<?php
				session_start();
				if(!isset($_SESSION['jobseekerlogin'])){
					echo '<script>alert ("You are not logged in. Please login to enter the main page.")</script>';
					echo '<script>window.location.href="jobseekerlogin.php"</script>';
				}
			$conn = mysqli_connect('localhost:3306', 'root', '', 'jobportal');

			if (mysqli_connect_error()){
				die ('Connection ERROR');
			}  
			$sql = 'SELECT * FROM login WHERE email = "'.$_SESSION['jobseekerlogin'].'"';
			$result = mysqli_query($conn, $sql);
			if(mysqli_affected_rows($conn)>0) {
				for($i = 0; $i < mysqli_num_rows($result); $i++){
					$row = mysqli_fetch_assoc($result);
					$stdid=$row['email'];
				}
			}
			?>
			<h6 class="mt-2"><span class="glyphicon glyphicon-user"></span> EmailId: <?php 
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
		<h3><a href="../index.html"><span>Job Portal</span></a></h3>
		<hr>
			<h2>Recents Job</h2>

			<p>Select the Recents job below to view the relevent job role.</p>
			<?php
				$conn = mysqli_connect('localhost:3306', 'root', '', 'jobportal');

				if (mysqli_connect_error()){
					die ('Connection ERROR');
				}      
				
				$sql = "SELECT company_name,jobid,eid,title, jobdesc, vacno, experience, location, industry from jobs";
				$result = mysqli_query($conn, $sql);
				
				if(mysqli_affected_rows($conn)>0) {
					for($i = 0; $i < mysqli_num_rows($result); $i++){
						$row = mysqli_fetch_assoc($result);
						echo '<a href="jobviewpost.php?id='.$row['jobid'].'"><div class="card">';
						echo '<h4><b>'.$row['company_name'].'</b></h4>';
						echo '<p><b>Vacancy: </b>'.$row['vacno'].'<b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Experience: </b>'.$row['experience'].'yr&nbsp;&nbsp;&nbsp;<p><b>Role: '.$row['title'].'</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a style="float:right;" href="jobviewpost.php?id='.$row['jobid'].'"><b>Apply Here</b></p>';
						echo '</a></div><br>';
					}
				}
			?>
			
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