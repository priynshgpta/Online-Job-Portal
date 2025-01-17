<?php
/**

 */
 include_once('../config.php');
// Data retreived  begins here
$email=$_POST['useremail'];
//echo $email;
$password=$_POST['pass1'];
$hash = $_POST['pass1'];
//echo $password;
$name=$_POST['uname'];
$mobile=$_POST['mobno'];
$experience=$_POST['experience'];
$skills=$_POST['skills'];
$ug=$_POST['ugcourse'];
$pg=$_POST['pgcourse'];
$location= $_POST['city'];
$type="jobseeker";
// data retreived ends here

// // now wants to fetch data from location db
// echo $email;
// echo $password;
// echo $hash;
// echo $name;
// echo $mobile;
// echo $experience;
// echo $skills;
// echo $ug;
// echo $pg;
// echo $cityid;
// echo $location;
// echo $type;



$query4="INSERT INTO login (email,password,usertype,status) VALUES ('$email','$hash','$type',1)";
    $result1 = mysqli_query($db1,$query4) or die("Cant Register , The user email may be already existing");
    if($result1){
        echo '<script>alert("You Successfully Registered! Please Login Here!")</script>';
	echo '<script>window.location.href = "jobseekerlogin.php";</script>';
    }
    else{
        
    header('location:jobseekerlogin.php');
    }
$query5 =  "INSERT INTO jobseeker (log_id,name,phone,location,experience,skills,basic_edu,master_edu)
                VALUES ((SELECT log_id FROM login WHERE email='$email'),'$name','$mobile','$location','$experience','$skills','$ug','$pg')";

 //$result2 = mysqli_query($db1,$query5);
if (!mysqli_query($db1,$query5))
{
 echo("Error description: " . mysqli_error($db1));
}
else{
    echo '<script>alert("You Successfully Registered!")</script>';
	echo '<script>window.location.href = "jobseekerlogin.php";</script>';
}

?>