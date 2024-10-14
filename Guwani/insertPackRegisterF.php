<!DOCTYPE html>
<html>

<head>
    
    <style>
        
        .form-container {
            width: 500px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }

        h1.p1 {
            text-align: center;
            color: #333;
            font-size: 24px;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            font-size: 14px;
            color: #555;
            margin-bottom: 5px;
        }

        .form-group input,
        .form-group select {
            width: 100%;
            padding: 10px;
            font-size: 14px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            transition: all 0.3s ease;
        }

        .form-group input:focus,
        .form-group select:focus {
            border-color: #0066cc;
            outline: none;
        }

        .gender-options {
            display: flex;
            gap: 20px;
        }

        .gender-options label {
            font-size: 14px;
            color: #333;
        }

        
        .form-group-checkbox {
            display: flex;
            align-items: center;
            margin-top: 15px;
        }

        .form-group-checkbox input[type="checkbox"] {
            margin-right: 20px;
            font-size: small;
            transform: scale(1.0);
            
        }

        
        button.button {
            width: 40%;
            padding: 12px;
            background-color: #0066cc;
            color: white;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            margin: 20px auto;
            
            display: block;
            
        }

        button.button:hover {
            background-color: #004999;
        }

        .form-group .select-container {
            width: 100%;
        }

        a{
            text-decoration: none;
            color: black;
        }
    </style>
   
   

    <link rel="stylesheet" type="text/css" href="Insurance.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    
</head>


<body>

    <div class="header">

        <div class="name">
             <h1 id="name">Health First Insurance</h1>
        </div>

        
        <div id="logo"></div>

        <i class="fa-solid fa-user" id="userIcon"></i>
        <button id="button2"><a href="../Nimesh/login.html">Log Out</a></button>
        
        
        <ul class="menu" >
            <li><a href="../Home Page.html">Home</a></li>
            <li><a href="../Nimesh/about us1.html">About Us</a></li>
            <li><a href="../Gayasha/InsurancePlan2.html">Insurance Plans</a></li>
            <li><a id="profileLink" href="../User Profile.php">Profile</a></li>
            <li><a href="../Gayasha/contact us.html">Contact Us</a></li>
            <li><a href="privacypolicy.html">Privacy Policy</a></li>
            <li><a href="../Nimesh/FAQ&reviewsNEW.html">FAQ</a></li>

        </ul>

        <div class="box3">
            <form>
                <input id="searchBox" type="text" placeholder="🔎 search...">
                <button id="searchBtn">Go</button>
            </form>
        </div>
    </div>


   

    <script src="packageRegistation.js"></script>
    <div>
        <div class="form-container">
            <form id="form" method="POST" action="insertPackRegisterB.php"   > <!--onsubmit="event.preventDefault(); submitRegistration();-->
                <h1 class="p1">Package Registration Form</h1>

                <div class="form-group">
                    <label for="reg">User ID:</label>
                    <input type="text" id="reg" name="userId" required>
                </div>

                <div class="form-group">
                    <label for="fname">Full name:</label>
                    <input type="text" id="fname" name="fname" placeholder="Hewagamage Kasun Bandara" required>
                </div>

                <div class="form-group">
                    <label for="address">Address:</label>
                    <input type="text" id="address" name="address" placeholder="23/2 Samagi Mawatha Colombo 7" required>
                </div>

                <div class="form-group">
                    <label for="phone">Phone Number:</label>
                    <input type="tel" id="phone" name="phone" placeholder="0XX-XXX-XX-XX" required>
                </div>

                <div class="form-group">
                    <label for="email">Enter your email:</label>
                    <input type="email" id="email" name="email" placeholder="kasun@gmail.com" required>
                </div>

                <div class="form-group">
                    <label for="dob">Date of Birth:</label>
                    <input type="date" id="dob" name="dob" required>
                </div>

                <div class="form-group">
                    <label for="age">Age:</label>
                    <input type="text" id="age" name="age" required>
                </div>

                <div class="form-group">
                    <label>Gender:</label>
                    <div class="gender-options">
                        <label>
                            <input type="radio" id="male" name="gender" value="Male">
                            Male
                        </label>
                        <label>
                            <input type="radio" id="female" name="gender" value="Female">
                            Female
                        </label>
                    </div>
                </div>

                <div class="form-group">
                    <label for="details">Select Your Insurance Plan:</label>
                    <select id="details" name="details" required>
                        <option value="personal">Personal plan</option>
                        <option value="family">Family plan</option>
                        <option value="children">Children plan</option>
                        <option value="complete">Complete Coverage plan</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="medical">Pre-existing Medical Conditions:</label>
                    <div class="select-container">
                        <select id="medical" name="medical" required>
                            <option value="good">Good</option>
                            <option value="bad">Bad</option>
                        </select>
                    </div>
                </div>

                <div class="form-group-checkbox">
                    <input type="checkbox" id="checkbox" required>
                    <label for="checkbox" style="font-size: 13px; margin-top: 10px;">Confirm the details of the above form</label>
                    </div>
                <div style="display: flex; justify-content: center;">
    <button class="button" type="submit">Submit</button>
</div>


            </form>
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