<?php
	$conn = mysqli_connect('localhost:3306', 'root', '', 'jobportal');

	if (mysqli_connect_error()){
		die ('Connection ERROR');
	}
    $id = $_GET['id'];
    
	$sql = "SELECT * FROM application WHERE job_id =$id";
	$result = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	
    <link rel="icon" type="image/x-icon" href="../images/favicon.png" />
	<title>Applications | JobPortal</title>
	<link rel="stylesheet" href="../css/jobseekerstyle.css">
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
		<a href="companyjobpost.php" style="color:black"><span class="fa fa-book"></span> Add Job Posts</a>
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
<div class="container">
    
		<div id="content" class="pt-4">
<center class="pb-2"><h3>Job Applications</h3></center>
			
            </div>
			<table class="table table-sm table-sm">
				<tr>
					<th width="8%">Email-ID</th>
					<th width="15%">Name</th>
					<th width="12%">Company Name</th>
					<th width="11%">Resume/CV</th>
					<th width="8%">Mobno</th>
					<th width="5%">Experience</th>
					<th width="8%">Location</th>
					<th width="12%">Prev-Employer</th>
                    <th width="8%">Status</th>
                    <th width="8%">Action</th>
				</tr>
                <?php
                $conn = mysqli_connect('localhost:3306', 'root', '', 'jobportal');

				if (mysqli_connect_error()){
					die ('Connection ERROR');
				}      
				
                $sql = "SELECT * FROM application INNER JOIN jobs ON application.job_id = jobs.jobid WHERE application.job_id = '$id'";
                $result = mysqli_query($conn, $sql);

                if(mysqli_affected_rows($conn)>0) {
                for($i = 0; $i < mysqli_num_rows($result); $i++){
                $row = mysqli_fetch_assoc($result);
                echo '<tr>';
                echo '<td>'.$row['emailid'].'</td>';
                echo '<td>'.$row['name'].'</td>';
                echo '<td>'.$row['company_name'].'</td>';
                
                echo '<td><a href="../jobseeker/uploads/'.$row['asg_file'].'" target="_blank">'.$row['asg_file'].'</a></td>';
                echo '<td>'.$row['mobno'].'</td>';
                echo '<td><center>'.$row['experience'].'yr</center></td>';
                echo '<td>'.$row['location_city'].'</td>';
                echo '<td>'.$row['prev_employer'].'</td>';
                echo '<td>'.$row['status'].'</td>';
                echo '<td><a href="companyapplicationaction.php?id='.$id.'">click here</a></td>';
                echo '</tr>';
                }
            }
                ?>
                </table>
        </div>
	</div>
</body>
    <footer class="container-fluid text-center pt-4" style="
    background-color: #cdd6eb;">
	<div class="container d-flex justify-content-center" >
		<div class="row pb-1" style="color: black; ">

			<div class="copyright clearfix">
				<p>Copyright &copy; 2024 JobPortal Group. All Right Reserved</p>

				<p> Designed and Developed by Priyanshu Gupta</p>

			</div>

		</div>
	</div>
</footer>
</html>