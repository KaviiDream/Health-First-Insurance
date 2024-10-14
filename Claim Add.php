<?php

    require 'config.php';

    
    $pName = $_POST["packageName"];
    $coverage = $_POST["coverage"];
    $report = $_POST["report"];
    $desc = $_POST["description"];
    $mail = $_POST["email"];
    $amount = $_POST["amount"];

    if(empty($report)){

        $report = "Not Submitted";
    }
    else{
        $report = "Submitted";
    }

    if(empty($desc)){
        $desc = "-";
    }


    $sql = "INSERT INTO claimrequest (ClaimID,UserID,PackageName,Coverage,MedicalReport,Note,Amount,Email)
	VALUES('','','$pName','$coverage','$report','$desc','$amount','$mail')" ;

    if($conn->query($sql)){
            
        echo "<script>
                alert('Claim Submitted Successfully');
                window.location.href = 'User Profile.php';
              </script>";
    }

    else{
        
        echo "error".$con->error;
    }


    $conn->close();

echo " <script>


    </script>";
?>