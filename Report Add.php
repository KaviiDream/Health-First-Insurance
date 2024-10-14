<?php

    require 'config.php';

    $rName = $_POST["Rname"];
    $category= $_POST["category"];
    $date = $_POST["date"];
    $report = $_POST["report"];


    $sql = "INSERT INTO report (ReportID,ReportName,ReportCategory,CreatedDate,Report)
	VALUES('','$rName','$category','$date','$report')" ;

    if($conn->query($sql)){
            
        echo "<script>
                alert('Report Added Successfully');
                window.location.href = 'Analytic Page.php';
              </script>";
    }

    else{
        
        echo "error".$con->error;
    }


    $conn->close();

?>