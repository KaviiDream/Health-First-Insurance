<!DOCTYPE html>

<html>

<head>

    <link rel="stylesheet" type="text/css" href="Insurance.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="Claim Request.css">
    <link rel="stylesheet" href="User Profile.css">

    <link rel="stylesheet" href="Analytic page.css">
</head>

<body>

    <div class="header">

        <div class="name">
             <h1 id="name">Health First Insurance</h1>
        </div>

        
        <div id="logo"></div>

        <i class="fa-solid fa-user" id="userIcon"></i>
        
        <button id="button2"><a href="Home Page.html">Logout</a></button>

        
        
        <ul class="menu" >
            <li><a href="Home Page.html">Home</a></li>
            <li><a href="Nimesh/about us2.html">About Us</a></li>
            <li><a href="Gayasha/InsurancePlan2.html">Insurance Plans</a></li>
            <li><a id="profileLink" href="Nimesh/admintest.php">Profile</a></li>
            <li><a href="Gayasha/contact us.html">Contact Us</a></li>
            <li><a href="Guwani/privacypolicy.html">Privacy Policy</a></li>
            <li><a href="Nimesh/FAQ&reviewsNEW2.html">FAQ</a></li>

        </ul>

        <div class="box3">
            <form>
                <input id="searchBox" type="text" placeholder="search...">
                <button id="searchBtn">Go</button>
            </form>
        </div>
    </div>

    <!--Content-->
<div class="content-container">
    
    <div class="reports">
      
        <u><p id="Reports">Reports</p></u> 

        <style>
            .reports{

                border:1px solid black;
                min-height: 450px;
                margin-top: 20px;
                margin-left: 10px;
                width: 700px;
                text-indent: 10px;
                padding: 10px;
                }

                #Reports{

                font-size: 25px;
                font-weight: bold;
                font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
                color: rgb(7, 132, 7);
                text-shadow: 5px 5px 10px;
                }
        </style>

                <?php

                        require 'config.php';

                        $sql = "SELECT ReportID,ReportName,ReportCategory,CreatedDate,Report FROM report";

                        $result = $conn->query($sql);

                        if($result->num_rows>0)
                        {
                            echo "<table border='1'>";
                            
                            echo "<tr  style='background-color:rgb(144, 203, 144)';>
                                    <th width='150px'>Report ID</th>
                                    <th width='150px'>Report Name</th> 
                                    <th width='150px'>Category</th>
                                    <th width='150px'>Created Date</th>
                                    <th width='150px'>Report</th>";
                                    

                            while($row = $result->fetch_assoc()){
                                
                                echo "<tr>";
                                
                                echo "<td>".$row["ReportID"]."<td>".$row["ReportName"]."<td>".$row["ReportCategory"]."<td>".$row["CreatedDate"]."<td>"
                                .$row["Report"]."<br>";
                                

                                echo "<tr>";

                            }
                            
                            echo "</table>";
                        }

                        else{
                            
                            echo "No results";
                        }


                        $conn->close();


            ?>

        <br><br><br>

        <div class="package-buttons">
            <button id="addBtn"><a href="Report Add.html" >Add Report</a></button>
            <button id="addBtn"><a href="Report Edit.html">Edit Report</a></button>
            <button id="removeBtn"><a href="Report Delete.html">Delete Report</a></button>
            
        </div>

    </div>

   <br>

   <u><h2 style="text-indent: 10px; color: red; font-weight: bold;">User Behaviors</u></h2>
   <img src="graph.jpg" id="graph">

   <br><br><br>

   <h2 style="text-indent: 10px; display: inline;">User Ratings: </h2> 
    <p id="ratings" style="text-indent: 10px; display: inline;"> ⭐  ⭐  ⭐  ⭐</p>
   
   <br><br><br>

   <div id="plans-chart">

    <table style="border:2px solid green; width: 700px; height: 300px; text-align: center;">

        <tr style="background-color: rgb(144, 203, 144);">
            <th class="column">Package Id</th>
            <th class="column">Insurance Plans</th>
            <th class="column">Total Sales</th>
        </tr>

        <tr>
            <td class="column">1001</td>
            <td class="column">Personal Plan</td>
            <td class="column">1489</td>

        </tr>

        <tr>
            <td class="column">1002</td>
            <td class="column">Family Plan</td>
            <td class="column">2000</td>

        </tr>

        <tr>
            <td class="column">1003</td>
            <td class="column">Complete Coverage</td>
            <td class="column">2680</td>

        </tr>

        <tr>
            <td class="column">1004</td>
            <td class="column">Children Plan</td>
            <td class="column">1900</td>

        </tr>

    </table>
   </div>

   <div id="user-questions">

    <h2><u><b style="color: rgb(24, 100, 19);">User Questions</b></u></h2>

    <b><p style="font-size: 17px;"><u>Frequently Asked Questions (FAQs):</u></p></b>

    <p class="questions"> ◼ What is covered under the Family Plan? <br></p>

        <p>▪ The Family Plan typically covers health expenses for all family members, including hospital stays, outpatient treatments, and prescription medications. Specific benefits may vary depending on the policy.</p>

    <p class="questions">◼ Can I upgrade from a Personal Plan to a Complete Coverage Plan? <br></p>
    
       <p> ▪ Yes, upgrading from a Personal Plan to a Complete Coverage Plan is usually possible, but it may require a review of your current policy and could result in additional premiums.</p>

    <b><p style="font-size: 17px;"><u>New Questions:</u></p></b>

    <p class="questions">◼ Does the Children Plan include dental and vision care for kids? </p>
    <p>▪ This varies by insurer, but some Children Plans offer additional coverage options for dental and vision care. It's important to review the specific policy details to confirm.</p>

    <p class="questions">◼ Are pre-existing conditions covered in the Complete Coverage Plan?</p>
    <p>▪ Pre-existing condition coverage depends on the terms of the Complete Coverage Plan. Some plans may have waiting periods or exclusions, so it's crucial to check the policy conditions before enrolling.</p>

    <button id="faqBtn"><a href="">FAQ Page</a></button>
   </div>


   <div class="reviews">

    <h2><u><b style="color: rgb(24, 100, 19);">Reviews and Feedbacks</b></u></h2>

    <br>

    <b><p style="font-size: 17px;"><u>User Reviews:</u></p></b>

    <p>▪ "The Family Plan has been a lifesaver for us. It covers not only regular doctor visits but also emergency situations for all of us. The premium is a bit high, but the coverage is extensive, which gives us peace of mind."
        — Sarah M.</p>

    <p>▪ "I’ve been using the Personal Plan for over two years now, and it fits my individual needs perfectly. It's affordable, and I’ve never had any issues with claims. The customer service is always prompt and helpful."
        — Kevin L.</p>

    <p>▪ The Complete Coverage Plan has been worth every penny. It covers all aspects of healthcare, from routine visits to major surgeries. I never have to worry about out-of-pocket expenses. The claim process is seamless."
        — Laura D.</p>


    <br>

    <b><p style="font-size: 17px;"><u>Feedbacks:</u></p></b>

    <p>▪ "While the Family Plan covers most of our needs, I wish there were more customizable options for adding additional family members. Overall, the claim process is smooth, but there’s room for improvement in customer service response times."
        — John P.</p>

    <p>▪ "The Personal Plan is good for routine checkups, but I found the coverage lacking when I needed specialized treatment. I would recommend this plan for someone with minimal medical needs."
        — Emily R.</p>

    <p>▪ "The Children Plan is decent for basic care, but I was disappointed that dental and vision are not included automatically. You have to add them as extras, which increases the cost."
        — Mark H.</p>
    
    <button id="reviewBtn"><a href="">Reviews and Feedbacks</a></button>

   </div>

</div>

<script src="Home Page.js"></script>

    <!--Content-->
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
            <a href="../Gayasha/Terms&con.html">Terms & Conditions</a> | <a href="FAQ&reviewsNEW.html">Reviews & Feedbacks</a>

        </div>

    </footer>


</body>
</html>