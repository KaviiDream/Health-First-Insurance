<?php
require 'config.php';

?>
<html>

<head>

    <link rel="stylesheet" type="text/css" href="Insurance.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        .adminform{
            margin-top:15px;
            padding:20px;
            font-size:24px;
            text-align:center;
            border:2px solid black;
            margin-left:20%;
            margin-right:20%;

            
        }

        input[type="text"],
        input[type="password"],
        input[type="email"] {
            width: 40%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid red;
            border-radius: 4px;
            box-sizing: border-box;
           
        }
                input[type="submit"]:hover{
            color:blue;
        }
        input[type="submit"]
        {
            width:20%;
        }
    </style>
</head>

<body>

    <div class="header">

        <div class="name">
             <h1 id="name">Health First Insurance</h1>
        </div>

        
        <div id="logo"></div>

        
        <button id="button1">Sign Up</button>
        
        <button id="button2">Login</button>
        
        
        <ul class="menu" >
            <li>Home</li>
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
        <form class="adminform" method="post" action="adminEdit.php" onsubmit=" return validate();">
            User ID : <br>
            <input type="text" name ="uID" required><br>
            User Name :<br>
            <input type="text" name ="uName" required><br>
            password : <br>
            <input type= "password" name="password" required> <br>
            retype password : <br>
            <input type="password" name="retype_password"required > <br>   
            Name : <br>
            <input type="text" name ="name" ><br>
            User Type (admin) : <br>
            <input type="text" name ="admin" required><br>
            Department ID :<br>
            <input type="text" name ="dID"><br>
            Department Name :<br>
            <input type="text" name ="dName"><br>
            E-Mail :<br>
            <input type="text" name ="email"><br>
            contact : <br>
            <input type="text" name="cont"><br>
            <br><input type="submit" name="update" value="Update" onsubmit="validate()"><br><br>

        </form>
    <!--JAVASCRIPT part for password validation------------------------------------------------------------------------------------------->        
        <script>  
            function validate() {
            var x = document.getElementsByName("password")[0].value; // Accessing the first element's value
            var y = document.getElementsByName("retype_password")[0].value; // Accessing the first element's value

            if (x === y) {
            return true; // Allow form submission
            } else {
            alert("Passwords do not match");
             // Prevent form submission
            window.location.href = 'Admin_Setup.php';
            return false;
            }
            }
        </script>
            
        
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