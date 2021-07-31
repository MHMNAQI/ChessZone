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
    <section class="header">
        

    <?php
    include 'Head.php';
    ?>
    
    
        
        <div class="text-box">
            <h1>World's Biggest Chess Online Organizer </h1>
            <p>Experienced The Tense of Tournament and The Satisfaction That Chess Can Offers in Kangar Chess Tournament <br> GO REGISTER NOW </p>
            <a href="Login.php" class="hero-btn">Join Our Member Now</a>
        </div>
    </section>
    
<!---------- course ----------->
    
    <section class="service">
        <h1>In-house Services</h1>
        <p>We Provide The Service At The Highest</p>
        <div class="row">
            <div class="service-col">
                <h3>Locker Room</h3>
                <p>Locker is provided for each person that registered <br> under online booking</p>
            </div>
            <div class="service-col">
                <h3>Foot Massage</h3>
                <p>Foot massage by professional for highest satisfaction</p>
            </div>
            <div class="service-col">
                <h3>Shower Room</h3>
                <p>Shower room without hidden fee is provided.</p>
            </div>
        </div>
    </section>
    
<!---------- campus ---------->
    
    <section class="campus">
    <h1>TOURNAMENT STATE AROUND MALAYSIA</h1>
    <p>.</p>
    <div class="row">
        <div class="campus-col">
            <img src="images/perlis.jpg">
            <div class="layer">
                <h3>PERLIS</h3>
            </div>
        </div>
        <div class="campus-col">
            <img src="images/kedah.jpg">
            <div class="layer">
                <h3>KEDAH</h3>
            </div>
        </div>
        <div class="campus-col">
            <img src="images/perak.jpg">
            <div class="layer">
                <h3>PERAK</h3>
            </div>
        </div>
        <div class="campus-col">
            <img src="images/kelantan.jpg">
            <div class="layer">
                <h3>KELANTAN</h3>
            </div>
        </div>
        <div class="campus-col">
            <img src="images/terengganu.jpg">
            <div class="layer">
                <h3>TERENGGANU</h3>
            </div>
        </div>
    </div>
       <div class="row">

        <div class="campus-col">
            <img src="images/penang.jpg">
            <div class="layer">
                <h3>PULAU PINANG</h3>
            </div>
        </div>
        <div class="campus-col">
            <img src="images/SELANGOR.png">
            <div class="layer">
                <h3>SELANGOR</h3>
            </div>
        </div>
        <div class="campus-col">
            <img src="images/pahang.jpg">
            <div class="layer">
                <h3>PAHANG</h3>
            </div>
        </div>
        <div class="campus-col">
            <img src="images/sabah.jpg">
            <div class="layer">
                <h3>SABAH</h3>
            </div>
        </div>
        </div>
    <div class="row">
        <div class="campus-col">
            <img src="images/sembilan.jpg">
            <div class="layer">
                <h3>NEGERI SEMBILAN</h3>
            </div>
        </div>
        <div class="campus-col">
            <img src="images/melaka.jpg">
            <div class="layer">
                <h3>MELAKA</h3>
            </div>
        </div>
        <div class="campus-col">
            <img src="images/johor.jpg">
            <div class="layer">
                <h3>JOHOR</h3>
            </div>
        </div>
        <div class="campus-col">
            <img src="images/sarawak.jpg">
            <div class="layer">
                <h3>SARAWAK</h3>
            </div>
        </div>
                
                
                
            </div>
         <div class="campus-col">
            <img src="images/malaysia.png">
             <div class="layer">
                <h3>MALAYSIA</h3>
            </div>
        </div>
         <p> lets join us and get to know the chess tournament around you</p>
            <a href="index.php" class="hero-btn red-btn">JOIN MEMBERSHIP</a>
    </section>
    
<!---------- Facilities ---------->
    
    
    
    
<!---------- testimonials ---------->
    
   
    
<!------ Call To Action ------>

 
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







