<?php

    session_start();

    require 'config.php';

    $pid = $_POST["packageID"];
    $pname = $_POST["packageName"];
    $coverage = $_POST["coverage"];
    $period = $_POST["pPeriod"];
    $method = $_POST["pMethod"];


    if(empty($pid)||empty($pname)||empty($coverage)||empty($period)||empty($method))
    {
        echo "<script>
                alert('All Required.');
              </script>";
        
    }
    
    else{
        
        $sql = "UPDATE package set PackageName='$pname', Coverage='$coverage', PaymentPeriod ='$period', PaymentMethod='$method' WHERE PackageID = '$pid' ";
        
       if($conn->query($sql)){
           
           echo "<script>
                alert('Package Updated Successfully');

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