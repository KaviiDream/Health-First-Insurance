<?php

// Include connection PHP file
require_once "connection.php";

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    
    $FName = $_POST['fullName'];
    $Date = $_POST['DOB'];
    $Email = $_POST['email'];
    $uName = $_POST['userName'];
    $password = $_POST['pswd']; 

    // Validate 
    if (!empty($FName) && !empty($Date) && !empty($Email) && !empty($uName) && !empty($password)) {

        
        $stmt = $conn->prepare("INSERT INTO customer (fullName, DOB, email, userName, pswd) VALUES ('$FName', '$Date ','$Email', '$uName',' $password')");
        $stmt->bind_param("sssss", $FName, $Date, $Email, $uName, $password);

       
        if ($stmt->execute()) {
            echo "<script>alert('Data Added Successfully')</script>";
        } else {
            echo "Error: " . $stmt->error;
        }

       
        $stmt->close();

    } else {
        echo "<script>alert('Please fill in all the required fields')</script>";
    }
}


$conn->close();
?>