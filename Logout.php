<?php
session_start();
unset($_SESSION["Login_name"]);
header("location:Login.php")
?>