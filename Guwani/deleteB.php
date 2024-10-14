<?php
require_once 'connection.php';

if(isset($_GET['delete_id'])){
    $deleteID=$_GET['delete_id'];

    $sql="DELETE FROM pack_register  WHERE   RId='$deleteID'";
    if($con->query($sql)==TRUE)
    {
     echo"<script> alert ('User Account Deleted')</script>" ;  
     echo"<script>window.location.href='displayPackRegTableF.php' </script>";
    }
    else{
        echo"Package Register  Account   delete  failed";
    }
}
    else{
        echo"delete id   parameter  not   found";
    }
$con->close();


?>