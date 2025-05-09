<?php
session_start();
include '../config.php';



$u_mail = $_POST["u_mail"];
$password = $_POST["password"];



$check = "SELECT * FROM users Where m_mail = '$u_mail' AND password = '$password'" or die();


$result = mysqli_query($connection, $check);


$rows = mysqli_num_rows($result);


$convert = mysqli_fetch_assoc($result);


if ($rows > 0) {
    $_SESSION["user"] = [
        "username" => $convert["u_name"],
        "firstname" => $convert["f_name"]
    ];
header("Location: $base_url/pages/home.php");

} else {
    $_SESSION['noUser'] = "invalid_cardentials";
    header("Location: {$_SERVER['HTTP_REFERER']}");
};
