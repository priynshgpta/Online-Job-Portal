<?php
session_start();
$conn = mysqli_connect('localhost:3306', 'root', '', 'jobportal');

if (mysqli_connect_error()){
	die ('Connection ERROR');
}
$user = "jobseeker";
$sql = 'SELECT * FROM login WHERE email = "'.$_POST['email'].'" AND usertype = "'.$user.'"AND password = "'.$_POST['password'].'"';

$loginfo = mysqli_query($conn, $sql);

if( mysqli_num_rows($loginfo)==1){
	$row = mysqli_fetch_assoc($loginfo);
	$_SESSION['jobseekerlogin'] = $row['email'];
	echo '<script>alert("Login SUCCESSFUL!")</script>';
	echo '<script>window.location.href = "jobseekerdashboard.php";</script>';
}
else {
	echo '<script> alert("The Email ID and Password is incorrect. Please type again.")</script>';
	echo '<script>window.location.href = "jobseekerlogin.php";</script>';
}

?>