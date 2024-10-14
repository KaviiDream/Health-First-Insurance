
<!DOCTYPE html>

<html>

<head>

    <link rel="stylesheet" type="text/css" href="Insurance.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="User Profile.css">

    <link rel="stylesheet" href="Claim Request.css">

    <script src="User profile.js"></script>
</head>

<body>

    <div class="header">

        <div class="name">
             <h1 id="name">Health First Insurance</h1>
        </div>

        
        <div id="logo"></div>

        
        <i class="fa-solid fa-user" id="userIcon"></i>
        <button id="button2"><a href="login.html">Log Out</a></button>
        
        
        <ul class="menu" >
            <li><a href="Home Page.html">Home</a></li>
            <li>About Us</li>
            <li>Insurance Plans</li>
            <li>Profile</li>
            <li>Contact Us</li>
            <li>Privacy Policy</li>
            <li>FAQ</li>

        </ul>

        <div class="box3">
            <form>
                <input id="searchBox" type="text" placeholder="🔎 search...">
                <button id="searchBtn">Go</button>
            </form>
        </div>
    </div>

    <div class="content-container">

        <div class="detail-box">

            <h2 id="acc_details">Account Details</h2>
            
            <?php
                
                require 'config.php';

                    $userName = $_POST["uname"];
                    $pw = $_POST["password"];
            
                    $sql = "SELECT AccountID,FullName,DOB,Age,NIC,Email,Username,Password
                            FROM usersignup
                            Where Username='$userName' AND Password='$pw'";

                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        $row = $result->fetch_assoc();
                        echo "<b>Account ID: </b> " . htmlspecialchars($row["AccountID"]) . "<br><br>";
                        echo "<b>Full Name: </b> " . htmlspecialchars($row["FullName"]) . "<br><br>";
                        echo "<b>Date Of Birth : </b> " . htmlspecialchars($row["DOB"]) . "<br><br>";
                        echo "<b>Age : </b> " . htmlspecialchars($row["Age"]) . "<br><br>";
                        echo "<b>NIC : </b> " . htmlspecialchars($row["NIC"]) . "<br><br>";
                        echo "<b>Email: </b> " . htmlspecialchars($row["Email"]) . "<br><br>";
                    }
                    
                 else {
                    echo "No user information found in session. Please Set Up the Profile.";
                }
            ?>
             
            <br><br>
            
            <div class="crudBtns">
                
                <!--<button id="setupBtn"><a href="User profile setup.html">Setup Profile</a></button>-->
                <button id="editBtn"><a href="User Profile Edit.html">Edit Profile</a></button>
                <button id="deleteBtn"><a href = "User Delete.html">Delete Profile</a></button>

            </div>

        </div>

        <div class="image-box">

            <div id="userId">

            <?php
                
                require 'config.php';

                    $userName = $_POST["userName"];
                    $pw = $_POST["password"];
            
                    $sql = "SELECT Username
                            FROM usersignup
                            Where Username='$userName' AND Password='$pw'";

                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        $row = $result->fetch_assoc();
                        echo "<b>User Name: </b> " . htmlspecialchars($row["Username"]) . "<br><br>";
                    }
                 
                ?>

            </div>
            <img src="logoNew.jpeg" id="user-image">
            
            <br>
            <div class="bio">
                <p style="color: rgb(16, 62, 1); font-size: larger;"><b>Bio</b></p>
                <p id="bio">

                </p>
            </div>
        </div>

        <div class="package-box">

        <?php

            require 'config.php';

            $sql = "SELECT PackageID,PackageName,Coverage,PaymentPeriod, PaymentMethod FROM package";

            $result = $conn->query($sql);

            if($result->num_rows>0)
            {
                echo "<table border='1'>";
                
                echo "<tr>
                        <th>Package ID</th>
                        <th>Package Name</th>
                        <th>Coverage</th> 
                        <th>Payment Period</th>
                        <th>Payment Method</th>";

                while($row = $result->fetch_assoc()){
                    
                    echo "<tr>";
                    
                    echo "<td>".$row["PackageID"]."<td>".$row["PackageName"]."<td>".$row["Coverage"]."<td>".$row["PaymentPeriod"]."<td>".$row["PaymentMethod"]."<td>"
                    ."<button style='background-color:yellow; border-radius:30px;'>Visit</button>"."<td>"
                    ."<button style='background-color:rgb(27, 157, 27); border-radius:30px;'>pay</button>"
                    ."<br>";

                    echo "<tr>";

                }
                
                echo "</table>";
            }

            else{
                
                echo "No results";
            }


            $conn->close();


            ?>

            <div class="package-buttons">
                <button id="addBtn"><a href="Package Add.html" >Add Package</a></button>
                <button id="addBtn"><a href="Package Edit.html">Edit Package</a></button>
                <button id="removeBtn"><a href="Package Delete.html">Remove Package</a></button>
               
            </div>

        </div>


        <div class="claim-request">

            <p id="claim-request">Claim Requests</p>

            <div>
            <?php

                require 'config.php';

                $sql = "SELECT ClaimID,PackageName,Coverage,MedicalReport,Note,Amount,Email FROM claimrequest";

                $result = $conn->query($sql);

                if($result->num_rows>0)
                {
                    echo "<table border='1'>";
                    
                    echo "<tr>
                            <th>Claim ID</th>
                            <th>PackageName</th> 
                            <th>Coverage</th>
                            <th>Medical Report</th>
                            <th>Note</th>
                            <th>Amount</th>
                            <th>Email</th>";
                            

                    while($row = $result->fetch_assoc()){
                        
                        echo "<tr>";
                        
                        echo "<td>".$row["ClaimID"]."<td>".$row["PackageName"]."<td>".$row["Coverage"]."<td>".$row["MedicalReport"]."<td>"
                        .$row["Note"]."<td>".$row["Amount"]."<td>".$row["Email"]."<br>";
                        

                        echo "<tr>";

                    }
                    
                    echo "</table>";
                }

                else{
                    
                    echo "No results";
                }


                $conn->close();


?>

            </div>

            <div class="package-buttons">
                <button id="addBtn"><a href="Claim Request.html" >Request Claim</a></button>
                <button id="addBtn"><a href="Claim Edit.html">Edit Claim Request</a></button>
                <button id="removeBtn"><a href="Claim Delete.html">Remove Claim Request</a></button>
               
            </div>
        </div>



    </div>

    </div>

    

   

    <footer class="footer">
        <div>
            <br>
            <i class="fa-brands fa-facebook"></i>
            <i class="fa-brands fa-square-instagram"></i>
            <i class="fa-brands fa-youtube"></i>
            <i class="fa-brands fa-square-twitter"></i>
            <i class="fa-brands fa-linkedin"></i>
            
        </div>
        
        <p id="cpyright">HealthFirstInsurance.com ©2024 All rights reserved</p>

        <div class="box1">
            <i class="fa-solid fa-phone"></i>
            0112345678 / 0703881351 <br>
            <i class="fa-brands fa-whatsapp"></i>
            0703881351 <br>
            <i class="fa-regular fa-envelope"></i>
            healthfirst@gmail.com
        </div>

        <div class="box2">
            Terms & Conditions | Reviews & Feedbacks
        </div>

    </footer>


</body>

</html>

