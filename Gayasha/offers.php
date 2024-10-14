<?php
// Insert DB connection//
require_once 'connection.php';

$sql= "SELECT * FROM offer";
$result = $conn->query($sql);

if ($result) {
    $offers = [];
    while ($row = $result->fetch_assoc()) {
        $offers[] = $row;
    }
} else {
    $offers = [];
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Offers</title>

    <link rel="stylesheet" type="text/css" href="Insurance.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="offers.css?v=1">
</head>
<body>
<div class="header">

<div class="name">
     <h1 id="name">Health First Insurance</h1>
</div>


<div id="logo"></div>


<button onclick="window.location.href='SignUp2.php';"id="button1">Sign Up</button>

<button id="button2">Login</button>


<ul class="menu" >
            <li><a href="../Home Page.html">Home</a></li>
            <li><a href="../Nimesh/about us1.html">About Us</a></li>
            <li><a href="InsurancePlan2.html">Insurance Plans</a></li>
            <li><a id="profileLink" href="../User Profile.php">Profile</a></li>
            <li><a href="contact us.html">Contact Us</a></li>
            <li><a href="../Guwani/privacypolicy.html">Privacy Policy</a></li>
            <li><a href="../Nimesh/FAQ&reviewsNEW.html">FAQ</a></li>


</ul>

<div class="box3">
    <form>
        <input id="searchBox" type="text" placeholder="🔎 search...">
        <button id="searchBtn">Go</button>
    </form>
</div>
</div>

<div class="content-container">
    <h1>Available Offers</h1>

    <div class="cardC">
        <?php if (count($offers) > 0): ?>
            <?php foreach ($offers as $offer): ?>
                <div class="card">
                    <h3><?php echo htmlspecialchars($offer['offerName']); ?></h3>
                    <p><strong>Description:</strong> <?php echo htmlspecialchars($offer['descp']); ?></p>
                    <p><strong>Start Date:</strong> <?php echo htmlspecialchars($offer['startDate']); ?></p>
                    <p><strong>End Date:</strong> <?php echo htmlspecialchars($offer['endDate']); ?></p>
                    <p><strong>Discount:</strong> <?php echo htmlspecialchars($offer['discount']); ?>%</p>
                    <p><strong>Code:</strong> <?php echo htmlspecialchars($offer['code']); ?></p>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <p>No offers available.</p>
        <?php endif; ?>
    </div>
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
        <a href="Terms&con.html">Terms & Conditions</a> | <a href="../Nimesh/FAQ&reviewsNEW.html">Reviews & Feedbacks</a>
    </div>

</footer>


</body>
</html>
