<?php
session_start();
include 'Connecttophp.php';
?> 
    
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>CHESS ZONE</title>
<link rel="stylesheet" href="style.css">
<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,600,700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> 
</head>
<body>
     <section class="sub-header">
    <?php
    include 'Head.php';
        echo "<h1>ABOUT</h1>";
    ?>
    </section>
    
    
    
<!------- about us content -------->
    
<section class="about-us">
    <div class="row">
        <div class="about-col">
            <h1>We are the world's largest Chess Online Organizer</h1>
            <p>Chess Zone was created with the intention of providing an online place for chess enthusiast and organizers alike. we are located in Kangar, Perlis and offer a space for youngsters and athletes to train their chess skills or just have fun playing chess. Our mission is to be a world largest chess tournament organizer. Our vision is to make chess a leading global sport accessible to all - giving every child a chance to play for life</p>
            <p> 
Our mision is to expand our branch within the next 5 years. In order to fulfill this goal of ours, we will improve our service in each and every aspect including system, facilities and many more.</p>
            <a href="Cust_reg.php" class="hero-btn red-btn">EXPLORE NOW</a>
        </div>
        <div class="about-col">
            <img src="images/about.jpg">
        </div>
    </div>    
</section>
    
<!-------- footer ---------->

<section class="footer">
        <h4>About Us</h4>
        <p>Please visit our social page to take a look about our smartest court in the world </p>
        <div class="icons">
            <a href="https://www.instagram.com/fiqnajmi/"><i class="fa fa-facebook"></i></a>
            <a href="https://www.instagram.com/fiqnajmi/"><i class="fa fa-twitter"></i></a>
            <a href="https://www.instagram.com/fiqnajmi/"><i class="fa fa-instagram"></i></a>
           
            
        </div>
        <a href="https://www.instagram.com/fiqnajmi/" class="footer-link"><p>made by <i class="fa fa-heart-o"></i> Megah Holding</p></a>
</section>       
  
  
<!----JavaScript for toggle menu---->
<script>
    var navLinks = document.getElementById("navLinks");

    function showMenu() {
        navLinks.style.right = "0";
    }

    function hideMenu() {
        navLinks.style.right = "-200px";
    }
</script> 
    
</body>
</html>    