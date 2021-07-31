<?php

include 'Connecttophp.php';
?>
<html>
<style>
    h1{
        margin-top: 100px;
    }
    
    td{
        color: darkblue;
    }
     tr{
        color: azure;
    }
    .content-table {
    background-color: #ffffff;
    border-collapse: collapse;
    margin-left: auto;
    margin-right: auto;
    margin-top: 30px;
    font-size: 0.9em;
    min-width: 400px;
    border-radius: 5px 5px 0 0;
    overflow: hidden;
    box-shadow: 0 0 20px rgba(255, 255, 255, 0.15);
  }

  .content-table thead tr {
    background-color: #00008B;
    color: #ffffff;
    text-align: left;
    font-weight: bold;
  }

  .content-table th,
  .content-table td {
    padding: 12px 15px;
  }

  .content-table tbody tr {
    border-bottom: 1px solid #dddddd;
  }

  .content-table tbody tr:nth-of-type(even) {
    background-color: #f3f3f3;
  }

  .content-table tbody tr:last-of-type {
    border-bottom: 2px solid #3b6df8;
  }
    
    </style>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>CHESS ZONE</title>
<link rel="stylesheet" href="style.css">
<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,600,700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> 
</head>
<body>
    
     <section class="sub-header">
         <br><link rel="stylesheet" href="style.css">
    
        <nav>
            <a href="index.html"><img src="images/logo.png"></a>
            <div class="nav-links" id="navLinks">  
                <i class="fa fa-close" onclick="hideMenu()"></i>
                <ul>
                     <li><a href="logoutAF.php">Logout</a></li>
                    
                     
                </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
        </nav>
    
    
         <h1>BOOKING PAGE</h1>
   
    </section>
    
    
     
    <h2>
    <p align = "Center">
ORGANIZER TOURNAMENT
        </p>
         </h2>

         
    <div class="header">
        
       
    <form action="BookF.php" method="post">  
    <p align = "Center">
<label>Tour Date</label>
<input type="date" class="field" name="Bookd" >
<p> <strong> Tournament Name = </strong></p>
<input type="text" name="t_n" class="field" placeholder="Enter name"></p>
            
    
  

   
<label>STATE</label>
  <select  name="state">
    <option value="">-- Select state --</option>
    <option value="JOHOR">JOHOR</option>
    <option value="KEDAH">KEDAH</option>
    <option value="KELANTAN">KELANTAN</option>
    <option value="MALACCA">MALACCA</option>
    <option value="NEGERI SEMBILAN">NEGERI SEMBILAN</option>
    <option value="PAHANG">PAHANG</option>
    <option value="PENANG">PENANG</option>
    <option value="PERAK">PERAK</option>
    <option value="PERLIS">PERLIS</option>
    <option value="SABAH">SABAH</option>
    <option value="SARAWAK">SARAWAK</option>
    <option value="SELANGOR">SELANGOR</option>
    <option value="TERENGGANU">TERENGGANU</option>
  </select>
        

<label>Tour Time</label>
  <select  name="Bookt">
    <option value="">-- Select time --</option>
    <option value="10:00 AM">10:00 AM</option>
    <option value="11:00 AM">11:00 AM</option>
    <option value="12:00 PM">12:00 PM</option>
    <option value="02:00 PM">02:00 PM</option>
    <option value="03:00 PM">03:00 PM</option>
    <option value="04:00 PM">04:00 PM</option>
    <option value="05:00 PM">05:00 PM</option>
    <option value="06:00 PM">06:00 PM</option>
    <option value="07:00 PM">07:00 PM</option>
    <option value="08:00 PM">08:00 PM</option>
    <option value="09:00 PM">09:00 PM</option>
    <option value="10:00 PM">10:00 PM</option>
  </select>

    
        
        <button type ="submit" name ="Book" >
        Book
            </button>
    
    </form>
    
    <table align = 'center' class="content-table" >
        
        <thead>
            <tr>
                <th>Booking id</th>
                <th>Time</th>
                <th>Date</th>
                <th>State</th>
                <th>Tournament Name</th>
                 <th>Status</th>
                <th>DELETE</th>
               
                
            </tr>
        </thead>
         <?php
        $result = mysqli_query($conn, "SELECT * from booking ");
        while($rows = mysqli_fetch_array($result))
        {

           echo "<tbody align='center'>";
           echo "<tr>";
           echo "<td>"; echo $rows['Booking_id']; echo "</td>";
           echo "<td>"; echo $rows['Tour_time']; echo "</td>";
           echo "<td>"; echo $rows['Tour_date']; echo "</td>";
           echo "<td>"; echo $rows['state']; echo "</td>";
           echo "<td>"; echo $rows['t_n']; echo "</td>";
            echo "<td>"; echo $rows['status']; echo "</td>";
            echo "<td>";?> <a href="DELETE.php?bookid=<?php echo $rows['Booking_id'];?>"> <button name="button" class = "hero-btn" type="submit">Delete</button></a><?php ; echo "</td>";
          
           echo "</tr>";
           echo"</tbody>";
        }
      ?>
    </table>
       
    
    
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