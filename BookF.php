<?php 
session_start();
include 'Connecttophp.php';

if(!$conn){

    die("Connection Failed:".mysqli_connect_error());
}

mysqli_select_db($conn,$dBName);

if(isset($_POST["Book"])){
    
   
    $Tourdate           = $_POST['Bookd'];
    $Tourtime           = $_POST['Bookt'];
    $Tournamentname     = $_POST['t_n'];
    $State              = $_POST['state'];
   
   
    

   

    mysqli_query($conn, "INSERT INTO booking (Tour_time,Tour_date, state,t_n, status ) VALUES ('$Tourtime', '$Tourdate','$State','$Tournamentname','available')"  );
    
    header('location:Booking.php');

}
?>