<?php
 include_once('../config.php');
// Data retreived  begins here
$email=$_POST['useremail'];
//echo $email;
$password=$_POST['pass1'];
//echo $password;
$name=$_POST['uname'];
$company_type = $_POST['comtype'];
$indtype = $_POST['indtype'];
$address = $_POST['address'];
$pincode = $_POST['pin'];
$cperson = $_POST['contact_person'];
$location= $_POST['city'];
$mobile = $_POST['mobno'];
$about = $_POST['about'];

$type="employer";
// data retreived ends here

// now wants to fetch data from location db


$status = "1";

$query4="INSERT INTO login (email, password, usertype,status) VALUES ('$email', '$password','$type',$status)";
    $result1 = mysqli_query($db1,$query4) or die("Cant Register , The user email may be already existing");
    if($result1){
        echo '<script>alert("You Company Successfully Registered! Please Login Here!")</script>';
	echo '<script>window.location.href = "companylogin.php";</script>';
    }
    else{
        
    header('location:companylogin.php');
    }
$query5 =  "INSERT INTO employer (ename, etype, industry, address, pincode, executive, phone, location, profile) VALUES ('$name','$company_type','$indtype','$address', '$pincode', '$cperson','$mobile', '$location','$about')";

 $result2 = mysqli_query($db1,$query5);
if (!mysqli_query($db1,$query5))
{
 echo("Error description: " . mysqli_error($db1));
}
else{
    echo '<script>alert("You Successfully Registered!")</script>';
	echo '<script>window.location.href = "companylogin.php";</script>';
}


?>