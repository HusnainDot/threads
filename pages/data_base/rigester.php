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





if (mysqli_query($connection, $add_data)) {
    // Get the last inserted user ID
    $last_id = mysqli_insert_id($connection);

    // Fetch the newly inserted user record
    $query = "SELECT * FROM users WHERE id = $last_id";
    $result = mysqli_query($connection, $query);
    $convert = mysqli_fetch_assoc($result);

    // Store user data in session
    $_SESSION["users"] = [
        "userId" => $convert["id"],
        "firstname" => $convert["f_name"],
        "username" => $convert["u_name"]
    ];

    header("Location: $base_url/pages/home.php");
    exit;
} else {
    echo "Error: " . mysqli_error($connection);
};