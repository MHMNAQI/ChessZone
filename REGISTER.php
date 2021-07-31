<?php
    include 'Connecttophp.php';

    session_start();
    $RegID=$_GET['regid'];
    $name=$_SESSION['Login_name'];
    $result = mysqli_query($conn,"SELECT c.Cust_id, b.Booking_id FROM cust_log c, booking b WHERE Booking_id = '$RegID' AND login = '$name'");
    while($row = mysqli_fetch_array($result))
    {
    $cust_id = $row['Cust_id'];
    $bookid = $row['Booking_id'];
         
        
   

    }
 $add_result=mysqli_query($conn,"INSERT INTO reservation(Cust_id, Booking_id) VALUES ('$cust_id', '$bookid')") or die(mysqli_error($conn));


$update = mysqli_query($conn, "UPDATE booking SET status = 'BOOKED' WHERE Booking_id = '$RegID'");

   


    header('location:Toura.php');
?>