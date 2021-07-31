<?php
if(isset($_SESSION['Login_name'])){
?>
<link rel="stylesheet" href="style.css">
    
        <nav>
            <a href="index.html"><img src="images/logo.png"></a>
            <div class="nav-links" id="navLinks">  
                <i class="fa fa-close" onclick="hideMenu()"></i>
                <ul>
                     <li><a href="index.php">HOME</a></li>
                    <li><a href="About.php">ABOUT</a></li>
                    <li><a href="Blog.php">BLOG</a></li>
                    <li><a href="Contact.php">CONTACT</a></li>
                     <li><a href="Toura.php">SCHEDULE</a></li>
                    <li><a href="DETAIL.php">TOURNAMENT DETAIL</a></li>
                    <li><a href="Logout.php">LOGOUT</a></li>
                    
                     
                </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
        </nav>
            
    
  
<?php
}
else{
   ?>
<link rel="stylesheet" href="style.css">
    
        <nav>
            <a href="index.html"><img src="images/logo.png"></a>
            <div class="nav-links" id="navLinks">  
                <i class="fa fa-close" onclick="hideMenu()"></i>
                <ul>
                     <li><a href="index.php">HOME</a></li>
                    <li><a href="About.php">ABOUT</a></li>
                    <li><a href="Blog.php">BLOG</a></li>
                    <li><a href="Contact.php">CONTACT</a></li>
                     <li><a href="Login.php">LOGIN</a></li>
                     
                </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
        </nav>
   
<?php
}
?>