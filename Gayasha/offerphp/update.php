<?php
//insert DB connection

require_once "connection.php";

 if($_SERVER['REQUEST_METHOD'] == 'POST'){

  $id = $_POST['id'];
   $Name = $_POST['name'];
   $Descript= $_POST['descript'];
   $startDate  = $_POST['start'];
   $endDate = $_POST['end'];
   $discount = $_POST['disc'];
   $oCode = $_POST['code'];

   //UPDATE DATA IN THE DB

   $sql = "UPDATE offer SET offerName='$Name' ,descp='$Descript',startDate='$startDate',endDate='$endDate',discount='$discount',code='$oCode' WHERE id ='$id'";

   //check updation

   if($conn->query($sql) === TRUE){

    echo "<script>alert('User details updated successfully');</script>";
    echo "<script>window.location.href='DisplayF.php';</script>";

    exit();

   }else{

    echo "Details Update Failed :" .$conn->error;
   }
 
}

 //close connection//

 $conn->close();

?>