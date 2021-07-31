<?php 

include 'Connecttophp.php';

if(!$conn){

    die("Connection Failed:".mysqli_connect_error());
}

mysqli_select_db($conn,$dBName);

if(isset($_POST["save"])){
    
    $firstname  = $_POST['c_n'];
    $icnumber  = $_POST['ic'];
    $phonenumber = $_POST['pn'];
    $gender = $_POST['g'];
    $race  = $_POST['race'];
    $email  = $_POST['email'];
    $loginname  = $_POST['Login'];
    $password  = $_POST['Password'];
    $membership  = $_POST['membership'];
   

    $sql_query = mysqli_query($conn, "INSERT INTO cust_log ( c_n , ic , pn , g , race , email , Login , password , membership ) VALUES ('$firstname','$icnumber','$phonenumber','$gender','$race','$email','$loginname','$password','$membership')");
    header('location:Login.php');

}
?>