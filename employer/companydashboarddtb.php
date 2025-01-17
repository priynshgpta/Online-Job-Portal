<?php
include_once('../config.php');
// Data retreived  begins here

$cname=$_POST['cname'];
$pname=$_POST['postname'];
//echo $email;
$jdesc=$_POST['jdesc'];
//echo $password;
$vno=$_POST['vno'];
$experience = $_POST['experience'];
$location = $_POST['location'];
$bpay = $_POST['bpay'];
$eid = "1";
$query2 = "INSERT INTO jobs(eid,company_name, title, jobdesc, vacno, experience, basicpay, location) VALUES($eid,'$cname', '$pname', '$jdesc', '$vno', '$experience', '$bpay', '$location')";
$result1 = mysqli_query($db1,$query2);
if($result1){
    echo '<script>alert("Your Job Post Successfully Published!")</script>';
echo '<script>window.location.href = "companydashboard.php";</script>';
}
else{
    
header('location:companydashboard.php');
}

?>