<?php
session_start();
include 'Connecttophp.php';

if(!$conn){

    die("Connection Failed:".mysqli_connect_error());
}

mysqli_select_db($conn,$dBName);

if(isset($_POST["login"])){

$login = $_POST['Login_name'];
$password = $_POST['Password'];

$sql_query = mysqli_query($conn, "SELECT * FROM cust_log where login  = '$login' and password = '$password'");
$result = mysqli_num_rows($sql_query);

if($result > 0)
{
    while($row = mysqli_fetch_array($sql_query))
    {
        $_SESSION['Login_name'] =  $row['login']
        ?>
        <script type = "text/javascript">
        alert("Log in successful!");
        window.location.href = "index.php";
        </script>
        <?php

    }

}
else
{
    ?> 
    <script type = "text/javascript">
        alert("Log in failed!");
        window.location.href = "Login.php";
    </script>
    <?php
}
}
?>