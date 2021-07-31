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
        echo "<h1>LOG IN PAGE</h1>";
    ?>
    </section>
    
    
    
    
    <body>


    <form action="LogF.php" method="post">
    
    
        <div class="header">
<p align = "Center"> Login Name&nbsp;=
<input type="text" name="Login_name" class="search-field name" placeholder="Enter username">
<br>
    <br>
Password&nbsp; &nbsp; &nbsp;=
<input type="password" name="Password" class="search-field name" placeholder="Enter password">
</p>
<p align = "Center">
<button type="Login" name="login">
    <a>
    Log In
    </a>
</button>
<button>
    <a href="Cust_reg.php">
    Sign Up
    </a>
</button>
<button>
    <a href="AdminP.php">
    Admin
        </a>
</button>
</p>
<p align = "Center">
    For further inquiries, your can click the button below to fulfill your queries.
</p>
<p align = "Center">
<button>
<strong>
    <a href="About.php">

    About
        </a>
</strong>
</button>
</p>
            </div>
    </form>
    
    
    
    
    
    
    
    
    
   
    
    
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