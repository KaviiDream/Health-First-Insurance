<?php


    require 'config.php';

    $pid = $_POST["packageID"];

   


        
        $sql = "DELETE FROM package WHERE packageID = '$pid'";

       if($conn->query($sql)){
           
           echo "<script>
                alert('Package Deleted');
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