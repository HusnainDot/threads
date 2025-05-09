<?php
session_start();
include './config.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Threads home</title>
    <?php
    include '../components/bootstrap_css.php'
    ?>

    <link rel="stylesheet" href="../assets/js_css/style.css">
</head>

<body class="bg_main_black text-white ">

    <?php

    if (!isset($_SESSION["username"])) {
        header("Location: $base_url/index.php");
    }
    ?>
    <!-- main home page -->

    <div class="container-fluid h-100 w-100 row home-bg position-relative min-vh-100 position-relative p-0 m-0">

        <!-- sider_bar   -->

        <div class="position-absolute start-0 top-0 d-none d-md-block " style="min-height: 100vh;  width: 100px;">
            <?php

            include '../components/bar.php';
            ?>
        </div>
        <!-- main content  -->
        <div class="col-12 col-md-8 col-lg-6 col-xl-4 mx-auto min-vh-100 p-0  ">

            <?php include '../components/main_content.php' ?>
        </div>
    </div>
    <?php
    include '../components/bootstrap_js.php'
    ?>
</body>

</html>