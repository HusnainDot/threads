<?php
session_start();
include '../config.php';


$comment = $_POST["post_comment"];
$post_id = $_POST["post_id"];
$user_id = $_SESSION["users"]["userId"];



$add_comments = "INSERT INTO comments (comment , uc_id , pc_id) VALUES ('$comment', $user_id , $post_id)";


mysqli_query($connection, $add_comments) or die();


// header("Location: {$_SERVER['HTTP_REFERER']}");