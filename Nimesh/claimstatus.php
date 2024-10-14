<?php

require 'config.php';
//insert claim status-------------------------------------------
if(isset($_POST['submit']))
{
    $cID = $_POST['claimID'];
    $uID = $_POST['UserID'];
    $status = $_POST['status'];

    $sql = "INSERT INTO claimstatus VALUES ('$cID','$uID ','$status')";

if($conn->query($sql))
{
    echo "<script>
            alert('STATUS INSERTED SUCCESSFULL');
            window.location.href = 'viewclaim.php';
            </script>";
}
else{
    echo"ERROR".$con->error;
}
}
//upadted claim status--------------------------------

if(isset($_POST['update']))
{
$cID1 = $_POST['claimID'];
$uID1 = $_POST['UserID'];
$status1 = $_POST['status'];

if(empty($cID1)||empty($uID1)||empty($status1))
{
    echo "all required";
}
else
{
    $sql1 = "UPDATE claimstatus set userID='$uID1',status='$status1' WHERE claimID='$cID1' ";

    if($conn->query($sql1))
    {
        echo "<script>
            alert('STATUS UPDATED SUCCESSFULL');
            window.location.href = 'viewclaim.php';
            </script>";
    }
    else{
        echo "not updated";
    }
    $conn->close();
}
}

//delete claim status -------------------------------------------------------------------------------------------------

require 'config.php';

if(isset($_POST['delete']))
{
$cID2 = $_POST['claimID'];

$sql2="DELETE FROM claimstatus WHERE claimID='$cID2' ";

if($conn->query($sql2))
{
    echo "<script>
    alert('STATUS DELETED SUCCESSFULL');
    window.location.href = 'viewclaim.php';
    </script>";
}
else
{
    echo "not success";
}

$conn->close();
}
?>


