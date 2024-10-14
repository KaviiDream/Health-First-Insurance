<?php

    //session_start();

    require 'config.php';

    $id = $_POST["accID"];
    $fname = $_POST["firstName"];
    $lname = $_POST["lastName"];
    $NIC = $_POST["nic"];
    $age = $_POST["age"];
    $dob = $_POST["dob"];
    $mail = $_POST["email"];

   /*$_SESSION['NIC'] = $NIC;
    $_SESSION['Lastname'] = $Lname; */

    if(empty($id)||empty($fname)||empty($lname)||empty($NIC)||empty($age)||empty($dob)||empty($mail))
    {
        echo "<script>
                alert('All Required.');
              </script>";   
    }
    
    else{
        
        $sql = "UPDATE `user-profiles` set FirstName = '$fname',LastName='$lname',DOB='$dob',
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