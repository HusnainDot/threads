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

    if (!isset($_SESSION["users"])) {
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



        <div class="position-fixed mk-post-opner rounded-4 d-none d-lg-flex align-items-center justify-content-center ">
            <i class="bi bi-plus-lg fs-3 "></i>

            <div class="mk-post_popup position-absolute rounded-4">
                <div class="w-100">
                    <div class="row align-items-center p-3 ">

                        <div class="col-4">
                            <i class="bi bi-x-lg  close_post_popup"></i>
                        </div>
                        <div class="col-4">
                            <h5 class="text-capitalize text-white fw-semibold text-center ">new threads</h5>
                        </div>

                        <div class="col-4 d-flex justify-content-end align-items-center gap-4">
                            <i class="bi bi-chat-left-text-fill fs-5"></i>
                            <i class="bi bi-three-dots rounded-circle fs-4 border-1 border-black border-dark"></i>
                        </div>
                    </div>

                    <hr class="mt-0">

                </div>
            </div>
        </div>
    </div>
    <?php
    include '../components/bootstrap_js.php'
    ?>
</body>

</html>