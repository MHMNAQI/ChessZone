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
        echo "<h1>OUR SERVICES</h1>";
    ?>
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
    
<!---------- Facilities ---------->
    
    <section class="facility">
        <h1>World Class Facilities</h1>
        <p></p>
            <div class="row">
                <div class="facility-col">
                    <img src="images/library.png">
                    <h3>Massage Room</h3>
                    <p></p>
                </div>
                <div class="facility-col">
                    <img src="images/basketball.png">
                    <h3>Shower Room</h3>
                    <p></p>
                </div>
                <div class="facility-col">
                    <img src="images/cafeteria.png">
                    <h3>Healthy Cafeteria</h3>
                    <p></p>
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