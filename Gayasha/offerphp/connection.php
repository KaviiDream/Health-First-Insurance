<?php
 $servername ="localhost";
 $username ="root";
 $password ="";
 $dbname ="health-first-insurance";


 //Create connection

 $conn = new mysqli ( $servername,$username, $password,$dbname);

 //check the connection

   if ($conn -> connect_error){

    die ("connection Failed:".$conn->connect_error);

   }
   else{
    //echo "connection succeeded";

   }
?>