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
        echo "<h1>OUR LOCATION</h1>";
    ?>
    </section>
    
    
<!------- Contact Us ------->

    
    <section class="location">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.560401836262!2d100.19823021527488!3d6.450438325796741!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x304c99b912841bcf%3A0x81ef6c4111417ed7!2sKangar%20Stadium!5e0!3m2!1sen!2smy!4v1624384031307!5m2!1sen!2smy" width="720" height="445" frameborder="0" style="border:0" allowfullscreen></iframe>
    </section>
    
    <section class="contact-us">
            <div class="row">
                <div class="contact-col">
                    <div>
                        <i class="fa fa-home"></i>
                        <span>
                            <h5>Kompleks Sukan Negeri Perlis, </h5>
                            <p>01000 Kangar, Perlis</p>
                        </span>
                    </div>
                    <div>
                        <i class="fa fa-phone"></i>
                        <span>
                            <h5>+60182731413</h5>
                            <p>Monday to Saturday 10 Am to 6 Pm</p>
                        </span>
                    </div>
                    <div>
                        <i class="fa fa-envelope-o"></i>
                        <span>
                            <h5>NAqiuddin847@gmail.com</h5>
                            <p>Email us your query</p>
                        </span>
                    </div>
                </div>
                <div class="contact-col">
                    <form method="post" action="contact-form-handler.php">
                    <input type="text" name="name" placeholder="Enter your name" required>
                    <input type="email" name="email" placeholder="Enter email address" required>
                    <input type="text" name="subject" placeholder="Enter your subject" required>
                    <textarea rows="8" name="message" placeholder="Message" required></textarea>
                    <button type="submit" class="hero-btn red-btn">Send Message</button>
                    </form> 
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