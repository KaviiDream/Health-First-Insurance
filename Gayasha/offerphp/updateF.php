<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Update Offers Details</title>
  <link rel="stylesheet" href="AddOffer.css">
</head>
<body>
  



<?php
//insert DB connection
//

require_once "connection.php";

 if(isset($_GET['id'])){
    $id= $_GET['id'];

    //Retrive data using id

    $sql="SELECT * FROM offer WHERE id='$id'";
    $result = $conn->query($sql);

    if($result->num_rows >0 ){
        $row=$result->fetch_assoc();
        $Name = $row['offerName'];
        $Descript= $row['descp'];
        $startDate  = $row['startDate'];
        $endDate = $row['endDate'];
        $discount = $row['discount'];
        $oCode = $row['code'];
     
        //Display the Update Form
        echo "<div>";
         echo "<h1>Update Offer</h1>";
        echo "<form method='post' action='./update.php'>";
         
          echo "<input type='hidden' name='id' value='".$id."'><br>";

          echo " <label for='offerName'>Offer Name:</label>";
          echo " <input type='text' id='ofName' name='name' value='".htmlspecialchars($Name)."'required><br>";
          
          echo "<label for='description'>Description:</label>";
          echo " <input type='textarea' id='descript' name='descript' value='".htmlspecialchars($Descript)."'required><br>";
          
          echo " <label for='startD'>Start Date:</label>";
          echo "  <input type='date' id='sDate' name='start' value='".htmlspecialchars($startDate)."'required><br>";
          echo " <label for='endD'>End Date:</label>";
          echo " <input type='date' id='eDate' name='end' value='".htmlspecialchars($endDate)."'required><br>";
        
          echo " <label for='discount'>Discount:</label>";
          echo " <input type='text' id='discount' name='disc' value='".htmlspecialchars($discount)."'required><br>";
        
          echo " <label for='code'>Offer Code:</label>";
          echo " <input type='text' id='code' name='code' value='".htmlspecialchars($oCode)."'required><br>";
       
          echo " <input type='submit' id='submit' value='Update'>";
   
        echo " </form>";
        echo "</div>";

    }else{
        echo "No record available";
   
    }
    
 }else{
    echo "Id parameter is missing";
 }

?>

</body>
</html>