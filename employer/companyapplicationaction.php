<?php
	$conn = mysqli_connect('localhost:3306', 'root', '', 'jobportal');

	if (mysqli_connect_error()){
		die ('Connection ERROR');
	}
	$id = $_GET['id'];
	$status = "Accepted";
	$sql="UPDATE application SET status='$status' WHERE jobid = '$id'";
	
	mysqli_query($conn, $sql);
	
	if ($conn->query($sql) === TRUE) {
		echo "<script>alert('Application Accepted Successfully!');</script>";
		echo "<script>window.location.href='companyresponse.php?id=$id';</script>";
	} else {
		echo "<script>alert('Cannot update data!');</script>";
		die ("<script>window.location.href='javascript:history.go(-1)';</script>");
	}

?>