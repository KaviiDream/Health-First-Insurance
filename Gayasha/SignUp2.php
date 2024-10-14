<html>
<head>
<title>Sign up</title>
<link rel="stylesheet" href="SignUp.css" >

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<script src="SignUp.js"></script>

</head>

<body>

   
 <div class="Containers">
 <br>
 <h1>Sign Up</h1>
 
  <form id="signupF" method="post" action="CustomerSignUp2.php">
  
   <input type="text" id="fname" placeholder="Full Name" name="fullName" required><br><br>
    <label id="backd">Date Of Birth :</label><input type="date" id="dob" name="DOB" required><br><br>
    <input type="text" id="age" placeholder="Age" name="age" required> <br><br>
    <input type="text" id="nic" placeholder="NIC" name="nic" pattern="^[0-9]{9}[vVxX]$|^[0-9]{12}$" required> <br><br>
      <input type="email" id="Email" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2, 4}$"  name="email"required><br><br>
        <input type="text" id="userName" placeholder="Username" name="userName" required> <br><br>
           <input type="password" id="pwd" placeholder="Password" name="pswd" required><br><br>
              <input type="password" id="cpwd" placeholder="Confirm Password" required><br><br>
 
   
   <br>
   <!--check box--> 
   <!--modified-->
	 <input type="checkbox" id="checkbox">
	 <label for ="checkbox"> Accepting<a href="Terms&con.html">Terms & Conditions</a></label>
   <br><br>
   
   <input type="submit" id="Cancel" value="Cancel" href="#">
   <input type="submit" id="signup" value="Sign Up" onclick="checkpassword()" disabled><br>
	
   
   <div class="socialsign">
   <a href="https://web.facebook.com/facebook/?_rdc=1&_rdr" class="fbbtn">
      <i class="fa fa-facebook fa-fw"></i>Sign up with Facebook</a>

	  <br><br>
    <a href="https://www.google.com/" class="gglebtn">
	<i class="fa fa-google fa-fw"></i> Sign up with Google </a>
		  <br><br>
    <p>Already have an Account?<a href="#">Login</a> </p>
	
	</div>
</div>
</form>
</body>
</html>