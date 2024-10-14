
<!DOCTYPE html>

<html>

<head>

    <link rel="stylesheet" type="text/css" href="Insurance.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!--<link rel="stylesheet" type="text/css" href="claimsAdmin.css">-->
    <style>
        .t2
        {
            font-size:32px;
            text-align:center;
        }
         .form
         {
            font-size: 24px;
            border:2px solid black;
            text-align:center;
            background-color:lightgrey;
            
            margin-left:5%;
        }
        .claimdetail
        {
            float:right;
            width:45%;
            
            font-size:28px;
            
        }
        .formdetail
        {
            margin-top:-40%;
            float:left;
            width:45%;
            font-size:24px;
            padding-bottom:5%;
            
         
        }
        .status{
            margin-bottom:5%;
            margin-top:-10%;
            margin-right:5%;
            
          

        }

        a{
            text-decoration: none;
            color: black;
        }
        
    </style>
</head>

<body>

    <div class="header">

        <div class="name">
             <h1 id="name">Health First Insurance</h1>
        </div>

        
        <div id="logo"></div>

        
        
        
        <button id="button2"><a href="../login.html">Log Out</a></button>
        
        
        <ul class="menu" >
            <li><a href="../Home Page.html">Home</a></li>
            <li><a href="about us1.html">About Us</a></li>
            <li><a href="../Gayasha/InsurancePlan2.html">Insurance Plans</a></li>
            <li><a id="profileLink" href="admintest.php">Profile</a></li>
            <li><a href="../Gayasha/contact us.html">Contact Us</a></li>
            <li><a href="../Guwani/privacypolicy.html">Privacy Policy</a></li>
            <li><a href="FAQ&reviewsNEW.html">FAQ</a></li>

        </ul>

        <div class="box3">
            <form>
                <input id="searchBox" type="text" placeholder="🔎 search...">
                <button id="searchBtn">Go</button>
            </form>
        </div>
    </div>

    <div class="content-container">
    
        <div class="claimdetail">
        <h2> Claim requests Data</h2>
        <?php
            require 'config.php';

            $sql ="SELECT claimID,userID,userName,details FROM claimrequests";

            $result =$conn->query($sql);
            if($result->num_rows > 0)
            {

                echo "<table border ='4'>";
                echo "<th style='color:blue;'>";
                echo "claimID";
                echo "</th>";
                echo "<th style='color:blue;'>";
                echo "userID";
                echo "</th>";
                echo "<th style='color:blue;'>";
                echo "userName";
                echo "</th>";
                echo "<th style='color:blue;'>";
                echo "details";
                echo "</th>";
                while($row=$result->fetch_assoc())
                {
                    echo "<tr>";
                    echo "<td>".$row["claimID"]."</td>"."<td>".$row["userID"]."</td>"."<td>".$row["userName"]."</td>"."<td>".$row["details"]."</td>";
                    echo "</tr>";
                }
                echo "</table>";
            }
            else{
                echo "no results";
            }

            //claim status table......
            $sql ="SELECT claimID,userID,status FROM claimstatus";

            $result =$conn->query($sql);
            if($result->num_rows > 0)
            {
                echo"<h2>"."Claim STATUS"."</h2>"."<br>";
                echo "<table border ='4'class='status'>";
                echo "<th style='color:blue;'>";
                echo "claimID";
                echo "</th>";
                echo "<th style='color:blue;'>";
                echo "userID";
                echo "</th>";
                echo "<th style='color:blue;'>";
                echo "status";
                echo "</th>";
                
                while($row=$result->fetch_assoc())
                {
                    if($row["status"]=='Reject')
                    {
                    echo "<tr style='color:red;'>";
                    echo "<td width='15%'>".$row["claimID"]."</td>"."<td width='15%'>".$row["userID"]."</td>"."<td width='15%'>"."<b>".$row["status"]."</b>"."</td>";
                    echo "</tr>";
                    }
                    else
                    {
                    echo "<tr style='color:green;'>";
                    echo "<td width='15%'>".$row["claimID"]."</td>"."<td width='15%'>".$row["userID"]."</td>"."<td width='15%'>"."<b>".$row["status"]."</b>"."</td>";
                    echo "</tr>";

                    }
                 
                }
                echo "</table>";
            }
            else{
                echo "no results";
            }
            $conn->close();

            ?>

        </div>

    </div>
    <div class ="formdetail" >
        <h3 class="t2"><b>Approve Claims</b></h3>
        <form class="form" method="post" action="claimstatus.php"><br>
                   User ID   :<input type ="text" name="UserID"><br><br>
                   Claim ID:<input type ="text" name="claimID"><br><br>
                   Status : <input type ="radio" name="status" value="Approve">Approve
                   <input type ="radio" name="status" value="Reject">Reject<br><br>
                   <input type ="submit" name="submit" style='background-color:lightblue; border-radius:5px;'>
                   <input type ="submit" name="update" value="update" style='background-color:lightblue; border-radius:5px;'>
                   <input type ="submit" name="delete" value="delete" style='background-color:lightblue; border-radius:5px;'><br><br>
        </form>
    </div>

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

