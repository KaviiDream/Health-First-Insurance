<?php


    require 'config.php';

    $rid = $_POST["reportID"];

        
        $sql = "DELETE FROM report WHERE reportID = '$rid'";

       if($conn->query($sql)){
           
           echo "<script>
                alert('Report Deleted');
                window.location.href = 'Analytic Page.php';

              </script>";
       }
       else{
           
           echo "<script>
                    alert('not updated');
                </script>";
       }
    
    
    
    $conn->close();

?>