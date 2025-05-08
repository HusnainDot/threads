<?php
session_start();
include '../config.php';



$f_name = $_POST["f_name"];
$l_name = $_POST["l_name"];
$u_name = $_POST["u_name"];
$e_mail = $_POST["m_mail"];
$password = $_POST["password"];



// inster quury

$add_data = "INSERT INTO users (f_name, l_name, u_name, m_mail, password) VALUES ('$f_name','$l_name','$u_name','$e_mail', '$password')" or die();




 mysqli_query($connection, $add_data) or die();


$_SESSION["username"] = $f_name;


header("Location: $base_url/pages/home.php");
