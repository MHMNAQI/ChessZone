<?php
session_start();
include 'Connecttophp.php';

if(!$conn){

    die("Connection Failed:".mysqli_connect_error());
}

mysqli_select_db($conn,$dBName);

if(isset($_POST["logadmin"])){

$login = $_POST['adminN'];
$password = $_POST['adminP'];

$sql_query = mysqli_query($conn, "SELECT * FROM admin_log where Admin_name  = '$login' and Admin_pass = '$password'");
$result = mysqli_num_rows($sql_query);

if($result > 0)
{
    while($row = mysqli_fetch_array($sql_query))
    {
        $_SESSION['adminN'] =  $row['Admin_name']
        ?>
        <script type = "text/javascript">
        alert("Log in successful!");
        window.location.href = "Booking.php";
        </script>
        <?php

    }

}
else
{
    ?> 
    <script type = "text/javascript">
        alert("Log in failed!");
        window.location.href = "AdminP.php";
    </script>
    <?php
}
}
?>