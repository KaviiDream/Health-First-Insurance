<?php

    //session_start();

    require 'config.php';

    $id = $_POST["accID"];
    $name = $_POST["fullName"];
    $NIC = $_POST["nic"];
    $age = $_POST["age"];
    $dob = $_POST["dob"];
    $mail = $_POST["email"];

 /*   $_SESSION['NIC'] = $NIC;
    $_SESSION['Lname'] = $Lname; */

    if(empty($id)||empty($name)||empty($NIC)||empty($age)||empty($dob)||empty($mail))
    {
        echo "<script>
                alert('All Required.');
              </script>";   
    }
    
    else{
        
        $sql = "UPDATE usersignup set FullName = '$name',DOB='$dob',
                Age='$age',NIC='$NIC', Email='$mail'  WHERE AccountID = '$id' ";
        
       if($conn->query($sql)){
           
           echo "<script>
                alert('Profile Updated Successfully');
                window.location.href = 'User Profile.php';
              </script>";
       }
       else{
           
           echo "<script>
                    alert('not updated');
                </script>";
       }
    }
    
    
    $conn->close();

?>