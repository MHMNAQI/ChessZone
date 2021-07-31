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
        echo "<h1>SCHEDULE</h1>";
    ?>
    </section>
    
    
    
<!------- about us content -------->
    
<section class="about-us">
   <div class="wrap">
   <div class="search">
      <input type="text" class="searchTerm" placeholder="please enter your state">
      <button type="submit" class="searchButton">
        <i class="fa fa-search"></i>
     </button>
   </div>
</div>
    
     <table align = 'center' class="content-table" >
        
        <thead>
            <tr>
                
                <th>Time</th>
                <th>Date</th>
                <th>State</th>
                <th>Tournament Name</th>
                <th>REGISTER</th>
               
                
            </tr>
        </thead>
         <?php
        $result = mysqli_query($conn, "SELECT * from booking where status = 'available' ");
        while($rows = mysqli_fetch_array($result))
        {

           echo "<tbody align='center'>";
           echo "<tr>";
           echo "<td>"; echo $rows['Tour_time']; echo "</td>";
           echo "<td>"; echo $rows['Tour_date']; echo "</td>";
           echo "<td>"; echo $rows['state']; echo "</td>";
           echo "<td>"; echo $rows['t_n']; echo "</td>";
            echo "<td>";?> <a href="REGISTER.php?regid=<?php echo $rows['Booking_id'];?>"> <button name="button" class = "hero-btn" type="submit">REGISTER</button></a><?php ; echo "</td>";
          
           echo "</tr>";
           echo"</tbody>";
        }
      ?>
    </table>

       
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