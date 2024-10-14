
<!DOCTYPE html>

<html>

<head>

    <link rel="stylesheet" type="text/css" href="Insurance.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="Admin.css">

</head>

<body>

    <div class="header">

        <div class="name">
             <h1 id="name">Health First Insurance</h1>
        </div>

        
        <div id="logo"></div>

    
        
        <button id="button2"><a href="../Home Page.html">Logout</a></button>

        
        
        <ul class="menu" >
            <li><a href="../Home Page.html">Home</a></li>
            <li><a href="about us2.html">About Us</a></li>
            <li><a href="InsurancePlan2.html">Insurance Plans</a></li>
            <li><a id="profileLink" href="admintest.php">Profile</a></li>
            <li><a href="contact us.html">Contact Us</a></li>
            <li><a href="privacypolicy.html">Privacy Policy</a></li>
            <li><a href="FAQ&reviewsNEW2.html">FAQ</a></li>

        </ul>

        <div class="box3">
            <form>
                <input id="searchBox" type="text" placeholder="search...">
                <button id="searchBtn">Go</button>
            </form>
        </div>
    </div>

    <div class="content-container">

        <div id="right">
            <!--create admin profile card-->  
            <h1 id="adminProfile">ADMIN PROFILE</h1>
                <div id='adminDetails'>
                    <?php 

                        session_start();

                            if(isset($_GET['i'])){
                                $_SESSION['adminName'] = $_GET['i'];
                                $_SESSION['departmentID'] = $_GET['m'];
                                $_SESSION['departmentName'] = $_GET['n'];
                                $_SESSION['email'] = $_GET['o'];
                                $_SESSION['contact'] = $_GET['p'];
                                $_SESSION['adminID'] = $_GET['q'];
                            }

                                // Display  data
                                if (isset($_SESSION['adminName'])) {
                                    echo "<b>"."Admin Name :"."</b>"."<br>".$_SESSION['adminName']."<br>";
                                    echo"<br>"."<b>"."Department ID : "."</b>"."<br>".$_SESSION['departmentID']."<br>";
                                    echo"<br>"."<b>"."Department Name : "."</b>"."<br>".$_SESSION['departmentName']."<br>";
                                    echo"<br>"."<b>"."E-Mail : "."</b>"."<br>".$_SESSION['email']."<br>";
                                    echo"<br>"."<b>"."Contact :"."</b>"."<br>".$_SESSION['contact']."<br>";
                                }
                    ?>
                    <button id="Adminbtn"><a href="Admin_Setup.php"> EDIT </a></button><br>
                </div>
                <div id ='img'>
                        <!--<h1 style="text-align: center;">Number of users </h1>
                        <img src="barchartAdmin.png" alt="barchart" style="width: 50%;padding-left: 70px;">-->
                </div>
        </div>
        


        <div id="left">

        <div id="directors">
            <button id="offers"><a href="../Gayasha/AddOfferF.php">Offers</a></button>
            <button id="analytic"><a href="../Analytic Page.php">Analytic Page</a></button>
        </div>

        <br><br>
        
            <div id="claimReq">
                <h3 id="claimTopic">Claim requests</h3>
                <P>
                    <ul>
                        <li>Navigate to the "View Claims" section 
                            and APPROVE the claim request with all required information.</li>  
                        <li>Please ensure that all details are accurate and complete.</li>
                        <li>Customer will receive an email notification 
                            once a decision has been made on the claim.</li>
                        <li>If the claim is approved, marketing manager will also receive details about the process.</li>  
                        <li>In case of a denial, employee will provide the reason for the decision and guidance on how to appeal if applicable.</li>
                    </ul>


                </P>
                <buttton id="claim"><a href="viewclaim.php">View Claims</a> </buttton>
            </div>  
        </div> 

       
        
        
        
        <div id="left"> 
            <br><br><br><br>
            <div id="staffMang">
                    <h1 id="staffheading">Customer Details </h1>
                        <?php
                            require 'config.php';

                            $sql="SELECT * FROM usersignup";
                            $results=$conn->query($sql);

                            if($results->num_rows > 0)
                            {
                                echo "<table id='emp'>";
                                echo "<th>";
                                echo "Customer ID";
                                echo "</th>";
                                echo "<th>";
                                echo "Full Name";
                                echo "</th>";
                                echo "<th>";
                                echo "NIC";
                                echo "</th>";
                                echo "<th>";
                                echo "Email";
                                echo "</th>"; 
                                echo "<th>";
                                echo "Age";
                                echo "</th>";
                        
                                while($row=$results->fetch_assoc())
                                {
                                    echo "<tr>";
                                    echo "<td>".$row["AccountID"]."</td>"."<td>".$row["FullName"]."</td>"."<td>".$row["NIC"]."</td>"."<td>".$row["Email"]."</td>"."<td>".$row["Age"]."</td>";
                                    echo "</tr>";
                                }
                                echo "</table>";

                            }
                            else{
                                echo "No Results";
                            }
                            
                        ?>
                        <!--<div id="empBtns">
                            <input type="submit" name="insert" value="Insert">
                            <input type="submit" name="update" value="Update">
                            <input type="submit" name="delete" value="Delete">
                        </div>-->

                </div>
                
            <br><br>
        </div>

    </div>

    <script src="Home Page.js"></script>

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