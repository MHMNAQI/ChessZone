
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
        echo "<h1>BLOG</h1>";
    ?>
    </section>
    
    
<!---------- Blog Page Content ---------->
    
    <section class="blog-content">
    <div class="row">
    <div class="blog-left">
        <img src="images/certificate.jpg">
        <h2>Our Certificate & Online Programs For 2021</h2>
        
        <p>Badminton is an astoundingly dynamic sport enjoyed by millions around the world. To play Badminton at the highest level, athletes are not only required to have great physical capabilities, but also a refined technical skill accompanied by an astute mind for strategy.</p>
        <br>
        <p>At the professional level, Badminton is a multi-sprint sport consisting rallies lasting an average of 6-8 seconds, with rest periods of about 15 seconds between. Each rally can consist of great bursts of speed, or long slow rallies, usually dictated by the abilities and strategies of opposing players. Yet, badminton has seen rallies lasting longer than two minutes, or even as short as a second. The shortest and longest badminton match ever recorded is 6 minutes, and 2 hours and 4 minutes respectively.</p>
        <br>
        <p>Yet, regardless of whether you are recreational badminton player or a professional athlete, it is easy to understand how dynamic the game can be, and the diverse capabilities that are required of badminton players looking to advance their game.Badminton requires speed, power, agility, endurance, flexibility, finesse and intellect of both players, where an advantage in either of these attributes can tip the game in one’s favour.</p>
        <br>
        <p>As such, in our Online Badminton Training Section. We hope to be able to equip you with the knowledge to be able to become well-versed in the game of Badminton by providing you concise, comprehensive yet user-friendly guides that will be useful and used by badminton players all around the world in the conquest of better badminton.Not only do we hope to equip you with the knowledge to develop your badminton game, we also hope to impart the understanding of how each component of training will fit into your training and progress, such that you are able to define and dictate the pace and direction of your training.</p>
        
        <div class="comment-box">
            <h3>Leave a comment</h3>
            <form class="comment-form">
                    <input type="text" placeholder="Enter Name">
                    <input type="email" placeholder="Enter email">
                    <textarea rows="5" placeholder="Your Comment"></textarea>
                    <button type="submit" class="hero-btn red-btn">POST COMMENT</button>
            </form>
        </div>
    </div>
        
    <div class="blog-right">
        
        
            <h3>Our Coach</h3>
            <div>
                <span>Pullela Gopicland</span>
                <span>35</span>
            </div>
            <div>
                <span>Misbun Sidek</span>
                <span>39</span>
            </div>
            <div>
                <span>Li Yongbo</span>
                <span>41</span>
            </div>
            <div>
                <span>Tony Gunawan</span>
                <span>34</span>
            </div>
            <div>
                <span>Rexy Mainaky</span>
                <span>42</span>
            </div>
            <div>
                <span>Rashid sidek</span>
                <span>50</span>
            </div>
            <div>
                <span>Jalani Sidek</span>
                <span>39</span>
            </div>
           
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