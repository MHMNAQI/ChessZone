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
        echo "<h1>REGISTRATION</h1>";
    ?>
    </section>
    
    
    <h1>
 <p align = "Center">
Registration Form
  </p>
</h1>

     <form action="RegF.php" method="post">
  <div class="header">
     <p><strong> Name =
       <input type="text" name="c_n" class="field" placeholder="Enter name">
       <br>
       IC Number =
  <input type="text" name="ic" class="field" placeholder="Enter IC Number without (-)">
  <br>
  Phone Number =
<input type="text" name="pn" class="field" placeholder="Enter phone number">
  <br>
       Gender =
  <input type="radio" name="g" value="male" >
       Male
  <input type="radio" name="g" value="female" >
         Female <br> 
       Race =
  
   &emsp;
  <input type="text" name="race" class="field" placeholder="Enter other race">
  <br>
       Email =
 <input type="text" name="email" class="field" placeholder="Enter email">

  <br>
   Login Name =
   <input type="text" name="Login" class="field" placeholder="Enter name">
 <br>
    Password =
   <input type="password" name="Password" class="field" placeholder="Enter password">
  <br>

     MEMBERSHIP TYPER (MONTHLY/ANUALLY) =
  
   &emsp;
  <input type="text" name="membership" class="field" placeholder="Enter other race">
 <p align = "Center">
<button>
reset
</button>
<button type="submit" name="save">
 <a>
    submit
    </a>
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