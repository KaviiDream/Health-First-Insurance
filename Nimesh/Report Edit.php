<?php

    session_start();

    require 'config.php';

    $rid = $_POST["reportID"];
    $rName = $_POST["Rname"];
    $category= $_POST["category"];
    $date = $_POST["date"];
    $report = $_POST["report"];


    if(empty($rid)||empty($rName)||empty($category)||empty($date)||empty($report))
    {
        echo "<script>
                alert('All Required.');
              </script>";
        
    }
    
    else{
        
        $sql = "UPDATE report set ReportName='$rName', ReportCategory='$category', CreatedDate ='$date', Report='$report' WHERE ReportID = '$rid' ";
        
       if($conn->query($sql)){
           
           echo "<script>
                alert('Report Updated Successfully');

                window.location.href = 'Analytic Page.php';
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