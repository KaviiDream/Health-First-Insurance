


<?php

require_once 'connection.php';

if($_SERVER["REQUEST_METHOD"]=="POST")
$cRId=$_POST["RId"];
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


$sql="UPDATE pack_register set UId= '$cUId' , Name='$cName' ,Address='$cAddress', PNo='$cPNo',Email='$cEmail',DOB='$cDOB',Age='$cAge',Gender='$cGender',PackName='$cPackName',Medcon='$cMedCon'
WHERE RId='$cRId'";

if($con->query($sql)==TRUE){
    echo"<script>alert('User  Details Update  sucsess');</script>";
    echo"<script>window.location.href='displayPackRegTableF.php';</script>";
}

else{
    echo"Details updated Failed".$con->error;
}
$con->close();
?>