<?php
//Insert DB connection

require_once "connection.php";

//check the delete id parameter exist
if (isset ($_GET['delete_id'])){
    $deleteID= $_GET['delete_id'];

    $sql ="DELETE FROM offer WHERE id='$deleteID'";
    if($conn->query($sql)===TRUE){
        echo "<script>alert ('offer Deleted');</script>";
        echo "<script>window.location.href='DisplayF.php';</script>";
    }else{
        echo "Account deleted Failed";
    }
}else{
    echo "delete id parameter not found";
}

$conn->close();
?>