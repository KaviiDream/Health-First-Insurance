<?php

    require 'config.php';

    $pName = $_POST["packageName"];
    $coverage = $_POST["coverage"];
    $period = $_POST["pPeriod"];
    $method = $_POST["pMethod"];


    $sql = "INSERT INTO package (PackageID,PackageName,Coverage,PaymentPeriod,PaymentMethod)
	VALUES('','$pName','$coverage','$period','$method')" ;

    if($conn->query($sql)){
            
        echo "<script>
                alert('Package Added Successfully');
                window.location.href = 'User Profile.php';
              </script>";
    }

    else{
        
        echo "error".$con->error;
    }


    $conn->close();

?>