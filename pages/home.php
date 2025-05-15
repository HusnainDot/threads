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

<body class="bg_main_black text-white w-100 ">

    <?php
    if (isset($_SESSION["posted"])) {
        echo "
    <div class='position-absolute text-success invalid_popup d-flex align-items-center gap-2 border border-dark  rounded-3 p-2 ' style='bottom:90%;'>
<i class='bi bi-check-circle fs-4'></i>
<h5 class='text-capitalize '>invalid Cardentials</h5>
</div>";
    }
    if (!isset($_SESSION["users"])) {
        header("Location: $base_url/index.php");
    }
    ?>
    <!-- main home page -->

    <div class="container-fluid h-100 w-100 row home-bg position-relative min-vh-100 position-relative p-0 m-0">

        <!-- post modal -->
        <div class="mk_post_modal_2  rounded-4 ">
            <?php include '../components/post_modal.php'
            ?>
        </div>



        <!-- sider_bar   -->

        <div class="position-absolute start-0 top-0 d-none d-md-block " style="min-height: 100vh;  width: 100px;">
            <?php

            include '../components/bar.php';
            ?>
        </div>
        <!-- main content  -->
        <div class="col-12 col-md-8 col-lg-6 col-xl-4 mx-auto h-100 p-0 main-content">

            <?php include '../components/main_content.php' ?>
        </div>


        <!-- make post popup opner -->
        <div class="position-fixed mk-post-opner rounded-4 d-none d-lg-flex align-items-center justify-content-center ">
            <i class="bi bi-plus-lg fs-3 "></i>

            <div class="mk-post_popup rounded-4 ">
                <?php include '../components/post_modal.php'
                ?>
            </div>
        </div>



    </div>
    <?php
    unset($_SESSION["posted"]);


    include '../components/bootstrap_js.php'
    ?>
</body>

</html>