<?php

    require 'config.php';

    $cID = $_POST["claimID"];
    $pName = $_POST["packageName"];
    $coverage = $_POST["coverage"];
    $report= $_POST["report"];
    $note = $_POST["description"];
    $amount = $_POST["amount"];
    $mail = $_POST["email"];


    if(empty($report)){

        $report = "Not Submitted";
    }
    else{
        $report = "Submitted";
    }

    if(empty($desc)){
        $desc = "-";
    }
    

        
        $sql = "UPDATE claimrequest set PackageName='$pName', Coverage='$coverage',MedicalReport='$report'
                ,Note='$note',Amount='$amount',Email='$mail'  WHERE ClaimID = '$cID' ";
        
       if($conn->query($sql)){
           
           echo "<script>
                alert('Claim Request Updated Successfully');
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