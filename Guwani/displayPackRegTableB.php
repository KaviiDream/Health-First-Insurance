<?php
require_once 'connection.php';

 //Check if the form has been submitted and "searchId" exists
 
if (isset($_POST["searchId"])) {
   $search = $_POST["searchId"];

    // Sanitize the input to prevent SQL injection2
    $search = mysqli_real_escape_string($con, $search);

    // Corrected SQL query
    $sql = "SELECT * FROM pack_register  WHERE UId = '$search' ";
   
    $result = $con->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["RId"] . "</td>";
            echo "<td>" . $row["UId"] . "</td>";
            echo "<td>" . $row["Name"] . "</td>";
            echo "<td>" . $row["Address"] . "</td>";
            echo "<td>" . $row["PNo"] . "</td>";
            echo "<td>" . $row["Email"] . "</td>";
            echo "<td>" . $row["DOB"] . "</td>";
            echo "<td>" . $row["Age"] . "</td>";
            echo "<td>" . $row["Gender"] . "</td>";
            echo "<td>" . $row["PackName"] . "</td>";
            echo "<td>" . $row["MedCon"] . "</td>";
            echo "<td>";
            echo "<button onClick=\"redirectTOUpdateForm(" . $row["RId"] . ")\" style='padding: 10px 20px; margin-right: 10px; margin-bottom: 10px; background-color: #0066cc; width: 80px; color: white; border: none; border-radius: 5px; cursor: pointer;'>Update</button>";

            echo "<button style='padding: 10px 20px; background-color: #e74c3c; color: white; border: none; width: 80px; border-radius: 5px; cursor: pointer;'>
        <a href='deleteB.php?delete_id=" . $row["RId"] . "' style='color: white; text-decoration: none;'>Delete</a>
      </button>";
            echo "</td>";
            echo "</tr>";
        }
    } else {
        echo "No Data Available";
    }
}
 else {
    echo "Please enter a User ID to search for packages.";
}

$con->close();
