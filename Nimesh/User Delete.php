<?php

  //  session_start();

    require 'config.php';

    $id = $_POST["accID"];

   /* $_SESSION['NIC'] = $NIC;
    $_SESSION['Lname'] = $Lname; */


        
        $sql = "DELETE FROM usersignup WHERE AccountID = '$id'";

       if($conn->query($sql)){
           
           echo "<script>
                alert('Profile Deleted');
                window.location.href = 'User Profile.html';

                var link = document.getElementById('profileLink');
            
                link.href = 'User Profile.html';

              </script>";
       }
       else{
           
           echo "<script>
                    alert('not updated');
                </script>";
       }
    
    
    
    $conn->close();

?>