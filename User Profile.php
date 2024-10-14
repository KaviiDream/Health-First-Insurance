
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
            <li><a href="Nimesh/about us1.html">About Us</a></li>
            <li><a href="Gayasha/InsurancePlan2.html">Insurance Plans</a></li>
            <li><a id="profileLink" href="User Profile.php">Profile</a></li>
            <li><a href="Gayasha/contact us.html">Contact Us</a></li>
            <li><a href="Guwani/privacypolicy.html">Privacy Policy</a></li>
            <li><a href="Nimesh/FAQ&reviewsNEW.html">FAQ</a></li>

        </ul>

        <div class="box3">
            <form>
                <input id="searchBox" type="text" placeholder="search...">
                <button id="searchBtn">Go</button>
            </form>
        </div>
    </div>

    <div class="content-container">

        <div class="detail-box">

            <h2 id="acc_details">Account Details</h2>
            
            


<?php require 'config.php'; ?>


<div id="right">
            <!--create admin profile card-->  
                <div id='adminDetails'>
                    <?php 

                        session_start();

                            if(isset($_GET['i'])){
                                $_SESSION['adminName'] = $_GET['m'];
                                
                               
                                $_SESSION['email'] = $_GET['n'];
                                $_SESSION['contact'] = $_GET['c'];
                                $_SESSION['adminID'] = $_GET['i'];
                                $_SESSION['NIC'] = $_GET['o'];
                                $_SESSION['DOB'] = $_GET['p'];
                                



                            }

                                // Display  data
                                if (isset($_SESSION['adminName'])) {
                                   

                                    echo "<b>"."User Name :"."</b>"."<br>".$_SESSION['adminName']."<br>";
                                    echo"<br>"."<b>"."E-Mail : "."</b>"."<br>".$_SESSION['email']."<br>";
                                    echo"<br>"."<b>"."Contact :"."</b>"."<br>".$_SESSION['contact']."<br>";
                                  
                                    echo"<br>"."<b>"."NIC :"."</b>"."<br>".$_SESSION['NIC']."<br>";
                                    
                                    echo"<br>"."<b>"."Date of birth :"."</b>"."<br>".$_SESSION['DOB']."<br>";
                                }
                                ?>
                   
                </div>
                <div id ='img'>
                        <!--<h1 style="text-align: center;">Number of users </h1>
                        <img src="barchartAdmin.png" alt="barchart" style="width: 50%;padding-left: 70px;">-->
                </div>
        </div>


             
            <br><br>
            
            
        </div>

        <div class="image-box">

            <div id="userId">
            <?php
            if (isset($_SESSION['adminName'])) {
                                    echo "Welcome "."<b>".$_SESSION['adminName']."..!"."</b>";
                                    
                                }
                ?>

            </div>
            <img src="R.png" id="user-image">
            
            <br>
            
        </div>

        <div class="package-box">

        <?php

            require 'config.php';

            $sql = "SELECT PackageID,PackageName,Coverage,PaymentPeriod, PaymentMethod FROM package";

            $result = $conn->query($sql);

            if($result->num_rows>0)
            {
                echo "<table border='1'>";
                
                echo "<tr style='background-color:rgb(144, 203, 144)'>
                        <th>Package ID</th>
                        <th>Package Name</th>
                        <th>Coverage</th> 
                        <th>Payment Period</th>
                        <th>Payment Method</th>";

                while($row = $result->fetch_assoc()){
                    
                    echo "<tr>";
                    
                    echo "<td>".$row["PackageID"]."<td>".$row["PackageName"]."<td>".$row["Coverage"]."<td>".$row["PaymentPeriod"]."<td>".$row["PaymentMethod"]."<td>"
                    ."<button style='background-color:yellow; border-radius:30px;'><a href='Gayasha/Insuranceplan2.html'>Visit</a></button>"."<td>"
                    ."<button style='background-color:rgb(27, 157, 27); border-radius:30px;'><a href='Payment.html'>pay</a></button>"
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
                    
                    echo "<tr style='background-color:rgb(144, 203, 144)'>
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

    

    <script src="Home Page.js"></script>

    <footer class="footer">
        <div>
            <br>
            <a href="https://www.facebook.com/"><i class="fa-brands fa-facebook"></i></a>
            <a href="https://www.instagram.com/"><i class="fa-brands fa-square-instagram"></i></a>
            <a href="https://www.youtube.com/"><i class="fa-brands fa-youtube"></i></a>
            <a href="https://x.com/?mx=2"><i class="fa-brands fa-square-twitter"></i></a>
            <a href="https://www.linkedin.com/"><i class="fa-brands fa-linkedin"></i></a>
            
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
            <a href="Gayasha/Terms&con.html">Terms & Conditions</a> | <a href="Nimesh/FAQ&reviewsNEW.html">Reviews & Feedbacks</a>
        </div>

    </footer>


</body>

</html>

