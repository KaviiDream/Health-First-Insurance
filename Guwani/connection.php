<?php
 $servername ="localhost";
 $username ="root";
 $password ="";
 $dbname ="health-first-insurance";
 // Specify the custom port number

// Create connection
$con = new mysqli ( $servername,$username, $password,$dbname);

//check the connection

  if ($con -> connect_error){

   die ("connection Failed:".$con->connect_error);

  }
  else{
   //echo "connection succeeded";

  }


echo "success";
?> 
 
