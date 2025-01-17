<?php
	$conn = mysqli_connect('localhost:3306', 'root', '', 'jobportal');

	if (mysqli_connect_error()){
		die ('Connection ERROR');
	}
    $id = $_GET['id'];
    
	$sql = "SELECT * FROM application WHERE job_id =$id";
	$result = mysqli_query($conn, $sql);
?>


<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "jobportal";
$target = "uploads/".basename($_FILES['subfile']['name']);
$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
  }


 // Data retreived  begins here
 $email=$_POST['email'];
 //echo $email;
 $name=$_POST['uname'];
 $location= $_POST['city'];
 $skills = $_POST['skills'];
 $prev_employer = $_POST['prev_employer_name'];
 //echo $password;
 $mobile=$_POST['mobno'];
 $experience=$_POST['experience'];
 $ug=$_POST['ugcourse'];
 $pg=$_POST['pgcourse'];



$subfile = $_FILES['subfile']['name'];
$asgfile_loc = $_FILES['subfile']['tmp_name'];
$subfile_size = $_FILES['subfile']['size'];
$subfile_type = $_FILES['subfile']['type'];
$folder="uploads/";

$sql = "INSERT INTO application( job_id, name, emailid, mobno, asg_file, asg_file_size, asg_file_type, skills, experience, ug_education, pg_education, location_city, prev_employer) VALUES ('$id','$name','$email','$mobile','$subfile', '$subfile_size', '$subfile_type','$skills', $experience, '$ug', '$pg','$location','$prev_employer')";
mysqli_query($conn, $sql);



if (move_uploaded_file($_FILES['subfile']['tmp_name'], $target)){
	echo "<script>alert('Your application Successfully Submited! We will get back to you soon  shortly');</script>";
echo "<script>window.location.href='jobseekerdashboard.php';</script>";
} else {
echo "<script>alert('Record exist!');</script>";
die ("<script>window.location.href='jobseekerdashboard.php';</script>");
}
?>


