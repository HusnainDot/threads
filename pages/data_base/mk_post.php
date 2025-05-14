<?php
session_start();
include '../config.php';

$caption = $_POST["caption"];

$fileName = $_FILES["up_load_file"]["name"];
$filetmpName = $_FILES["up_load_file"]["tmp_name"];

$userId = $_SESSION["users"]["userId"];
move_uploaded_file($filetmpName, "../../assets/posted_images/" . $fileName);





$addPost = "INSERT INTO posts (caption, image, user_id) VALUES ('$caption', '$fileName', $userId)";

mysqli_query($connection, $addPost) or die();


header("Location: {$_SERVER['HTTP_REFERER']}");
