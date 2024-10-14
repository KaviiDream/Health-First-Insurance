<?php
require 'config.php';

$userID = $_POST['uID'];
$userName = $_POST['uName'];
$pass = $_POST['password'];
$Name = $_POST['name'];
$typeA = $_POST['admin'];
$deptID = $_POST['dID'];
$deptName = $_POST['dName'];
$Email=$_POST['email'];
$contact=$_POST['cont'];

if(empty($userName)||empty($pass)||empty($deptID)||empty($deptName)||empty($contact))
{
    echo "all required";
}
else
{
    $sql = "UPDATE login SET user_name ='$userName',password ='$pass',name='$Name',userType='$typeA',Dept_ID='$deptID',Dept_Name='$deptName',email='$Email',Contact='$contact' WHERE UserID ='$userID'";
    if($conn->query($sql))
    {
        echo "<script>
        alert('UPDATED SUCCESSFULL');
        alert('Please login again');
        window.location.href = 'login.html';
        </script>";
    }
    else{
        echo "not updated successfully";
    }


}

?>