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
        <nav>
            <a href="index.html"><img src="images/logo.png"></a>
            <div class="nav-links" id="navLinks">  
                <i class="fa fa-close" onclick="hideMenu()"></i>
                <ul>
                     <li><a href="index.php">HOME</a></li>
                    <li><a href="About.php">ABOUT</a></li>
                    <li><a href="Service.php">SERVICE</a></li>
                    <li><a href="Blog.php">BLOG</a></li>
                    <li><a href="Contact.php">CONTACT</a></li>
                    <li><a href="Login.php">LOGIN</a></li>
                     <li><a href="Login.php">BOOK</a></li>
                </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
        </nav>
            <h1>Log In Page</h1>
    </section>
    
    <h1 id="main-header">
 
    
        <div class="header">
<p align = "Center"> Login Name&nbsp;=
<input type="text" name="adminN" class="search-field name" placeholder="Enter username">
<br>
    <br>
Password&nbsp; &nbsp; &nbsp;=
<input type="password" name="adminP" class="search-field name" placeholder="Enter password">
</p>
<p align = "Center">
    <button type="Login" name="save">
    Log In

            </button>
<button>
    <a href="Cust_reg.html">
    Sign Up
    </a>
</button>
    </p>
        </div>
    
    

    
    
    
    
    
    
    
    
    
   
    
    
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