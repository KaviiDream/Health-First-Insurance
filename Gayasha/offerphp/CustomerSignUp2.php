<?php
//include connection php
require_once "connection.php";


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $FName = $_POST['fullName'];
    $Date = $_POST['DOB'];
    $Age = $_POST['age'];
    $NIC = $_POST['nic'];
    $Email = $_POST['email'];
    $uName = $_POST['userName'];
    $password = $_POST['pswd']; 

    $checkQuery = "SELECT * FROM customer WHERE email='$Email'";
    $result = $conn->query($checkQuery);

    if($result->num_rows >0){
        echo "<script>alert ('This Gmail already registered.please use differenet email')</script>";
        echo "<script>window.location.href='SignUp2.php'</script>";
    
    }else{

    //modified code

    //INSERT DATA IN TO DB

    $sql = "INSERT INTO customer(fullName, DOB, age,nic,email, userName, pswd)VALUES('$FName','$Date','$Age','$NIC','$Email','$uName','$password')";


    //check whwther the data inserted

    if ($conn->query($sql) === TRUE){

        echo "<script>alert('Data Added Successfuly')</script>";

    }else{
        echo "Error : " .$sql."<br>". $conn->error;
    }
}
}

//close the connection
$conn->close();

?>