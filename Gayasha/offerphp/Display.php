
   

<?php


//Insert DB connection

require_once 'connection.php';

$sql= "SELECT * FROM offer";
$result = $conn->query($sql);

 if ($result->num_rows>0){

    while ($row=$result -> fetch_assoc()){
    
    echo "<tr>";
    echo "<td>". $row["id"]."</td>";
    echo "<td>". $row["offerName"]."</td>";
    echo "<td>". $row["descp"]."</td>";
    echo "<td>". $row["startDate"]."</td>";
    echo "<td>". $row["endDate"]."</td>";
    echo "<td>". $row["discount"]."</td>";
    echo "<td>". $row["code"]."</td>";
    echo "<td id='btn'>";
    echo "<button onClick=\"redirectToUpdateForm(". $row["id"] .")\">Update</button>";
    echo "<button> <a href=\"delete.php?delete_id=".$row["id"] . "\">Delete</a></button>";
    echo "</td>";
    echo "</tr>";

   }
 }else {
    echo "No data available";
 }

 $conn->close();


?>

