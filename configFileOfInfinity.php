<?php
/**
This will connecet Website to Database
 */
$host = "sql204.infinityfree.com";
$user  = "if0_37645199";
$password =  "pg432004";
$database = "if0_37645199_jobportal";
$database2 = "if0_37645199_location";
$db1 = new mysqli($host, $user, $password, $database);
if($db1->connect_errno > 0){
    die('Unable to connect to database' . $db1->connect_error);
}else{
    echo "Database jobportal is connected.";
}

$db2 = new mysqli($host, $user, $password, $database2);
if($db2->connect_errno > 0){
    die('Unable to connect to database' . $db2->connect_error);
}else{
    echo "Database location is connected.";
}
?>
