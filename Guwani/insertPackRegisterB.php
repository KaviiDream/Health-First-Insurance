<?php
require "connection.php";

//if($_SERVER["REQUEST_METHOD"]=="POST")


        $cUId=$_POST["userId"];
        $cName=$_POST["fname"];
        $cAddress=$_POST["address"];
        $cPNo=$_POST["phone"];
        $cEmail=$_POST["email"];
        $cDOB=$_POST["dob"];
        $cAge=$_POST["age"];
        $cGender=$_POST["gender"];
        $cPackName=$_POST["details"];
        $cMedCon=$_POST["medical"];

        $sql="INSERT INTO  pack_register (UId,Name,Address,PNo,Email,DOB,Age,Gender,PackName,MedCon)
         VALUES ('$cUId', '$cName' ,'$cAddress', '$cPNo', '$cEmail',  '$cDOB', '$cAge',' $cGender', '$cPackName', '$cMedCon')";


if($con->query($sql)==TRUE)
{
    
    echo"<script>alert ('Data  Added  Succsessfuly!')</script>";
    echo"<script>window.location.href='displayPackRegTableF.php' </script>";
}

else{
    echo"Error:".$sql. "<br>".$con->error;
}
$con->close();

?>

