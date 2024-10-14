<?php


    require 'config.php';

    $cid = $_POST["claimID"];

        
        $sql = "DELETE FROM claimrequest WHERE ClaimID = '$cid'";

       if($conn->query($sql)){
           
           echo "<script>
                alert('Claim Deleted');
                window.location.href = 'User Profile.php';

              </script>";
       }
       else{
           
           echo "<script>
                    alert('not updated');
                </script>";
       }
    
    
    
    $conn->close();

?>