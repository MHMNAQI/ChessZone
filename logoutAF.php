<?php
session_start();
unset($_SESSION["adminN"]);
header("location:Login.php")
?>