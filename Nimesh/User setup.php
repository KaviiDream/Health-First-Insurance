<?php

    session_start();

    require 'config.php';

    $Fname = $_POST["firstName"];
    $Lname = $_POST["lastName"];
    $NIC = $_POST["nic"];
    $age = $_POST["age"];
    $dob = $_POST["dob"];
    $mail = $_POST["email"];
    $contact = $_POST["contact"];
    $description = $_POST["bio"];

    $_SESSION['NIC'] = $NIC;
    $_SESSION['Lname'] = $Lname;

    $sql = "INSERT INTO `user-profiles` (AccountID,FirstName,LastName,NIC,Age,DOB,Email,ContactNO,Bio)
	VALUES('','$Fname','$Lname','$NIC','$age','$dob','$mail','$contact','$description')" ;

    if($conn->query($sql)){
            
        echo "<script>
                alert('Profile Setup Successfully');
                window.location.href = 'User Profile.php';
              </script>";
    }

    else{
        
        echo "error".$con->error;
    }


    $conn->close();

?>