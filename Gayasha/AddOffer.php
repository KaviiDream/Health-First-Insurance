<?php
   //include connection php file

   require_once "connection.php";

   if ($_SERVER["REQUEST_METHOD"] == "POST")
{

   $Name = $_POST['name'];
   $Descript= $_POST['descript'];
   $startDate  = $_POST['start'];
   $endDate = $_POST['end'];
   $discount = $_POST['disc'];
   $oCode = $_POST['code'];

   //INSERT DATA IN TO DATABSE

   $sql= "INSERT INTO offer (offerName,descp,startDate,endDate,discount,code) 
    VALUES( '$Name','$Descript','$startDate', '$endDate','$discount','$oCode')";
   

   //check if the data insret was successful

     if ($conn->query($sql) === TRUE){

    echo "<script>alert('Data Added Successfully')</script>";
    echo "<script>window.location.href='DisplayF.php';</script>";
   
    }else{
      echo "Error : ".$sql. "<br>". $conn->error;
    }
}   
   $conn->close();

?>