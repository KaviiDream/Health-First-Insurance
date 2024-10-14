<?php

$severname = "localhost";
$username = "root";
$password = "";
$db = "health-first-insurance";

$conn = new mysqli($severname,$username,$password,$db );

if($conn->connect_error){
    die("Connection failed : ".$conn->connect_error);
}
else{
   // echo "connect successfull"."<br>";
}

?>