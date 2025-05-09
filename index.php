<?php
session_start();
include './pages/config.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "./components/bootstrap_css.php" ?>
    <link rel="stylesheet" href="./assets/js_css/style.css">
    <title>Threads Login</title>
</head>

<style>
    .dashes {
        width: 40px;
        height: 1px;
        background-color: white;
    }

    .login-bg {
        background-image: url(./assets/img/suYRpvQuylX.avif);
        background-repeat: no-repeat;
        background-size: contain;
    }



    @media (max-width:980px) {
        .login-bg {
            background-image: none;

        }

    }

    .invalid {
        right: 40px;
        bottom: 5%;
        animation: invlid 5s forwards;
        transform: translateX(150%);
    }

    @keyframes invlid {
        0% {
            transform: translateX(150%);
        }

        20% {
            transform: translateX(0%);
        }

        60% {
            transform: translateX(0%);
        }

        100% {
            transform: translateX(150%);
        }
    }
</style>

<body class="bg_main_black overflow-x-hidden">

    <?php
    if (isset($_SESSION["users"])) {
        header("Location: $base_url/pages/home.php");
    };



    if (isset($_SESSION["noUser"])) {
        echo "
               <div class='position-absolute text-danger invalid d-flex align-items-center gap-2 border border-dark  rounded-3 p-2 '>
        <i class='fa-solid fa-exclamation fs-3'></i>
        <h5 class='text-capitalize '>invalid Cardentials</h5>
    </div>";
    };



    ?>



    <div class="container-fluid min-vh-100 d-flex flex-column align-items-center justify-content-center login-bg position-relative ">

        <div class=" p-3 card bg_main_black border-1 rounded-2 border-dark form-wrapper">
            <p class="text-white  my-3 text-center fw-bold " style="font-size: 18px;">Log in with your Threads account</p>
            <!-- login form -->
            <form action="./pages/data_base/login.php" class=" " method="POST">


                <div class="w-100 p-0 my-2 ">
                    <input type="text" name="u_mail" id="u-mail" placeholder="Phone number or email" class="  rounded-3 login-input  w-100 py-3 px-3 text-white border-0 mail" required>
                </div>

                <div class="w-100 p-0 my-2 position-relative">

                    <input type="password" name="password" id="password" placeholder="password" class="login-password rounded-3 login-input w-100 py-3 px-3 text-white border-0 " required>

                    <i class="bi bi-eye-slash  fs-5 position-absolute eye text-white" style="right:10px; top:50%; transform:translateY(-50%);cursor: pointer;"></i>
                </div>

                <button class="my-1 rounded-3 login-btn w-100 py-3 px-2 text-white border-0 fw-bold my-2 submit-btn" disabled>Login</button>

            </form>

            <a href="./" class="text-center text-secondary text-decoration-none my-2">Forgot password?</a>

            <div class="d-flex align-items-center justify-content-center  gap-3 my-3">
                <span class="dashes"></span>
                <p class="text-white fw-bolder fs-5">or</p>
                <span class="dashes"></span>
            </div>


            <a href="./pages/new_account.php" class="text-center text-white text-decoration-none mt-1 new-account">Create a new account</a>
            <div class="d-flex align-items-center justify-content-center gap-2">
                <span style="width: 30px; height: 2px; background-color: gray;"></span>
                <span style="width: 30px; height: 2px; background-color: gray;"></span>
                <span style="width: 30px; height: 2px; background-color: gray;"></span>
            </div>
        </div>




        <p class="text-secondary text-center position-absolute mb-2 bottom-0">© 2025 Threads Terms Privacy Policy Cookies Policy
        </p>
    </div>

    <?php include "./components/bootstrap_js.php";
    unset($_SESSION['noUser']);


    ?>

    <script>
        let eye = document.querySelector(".eye");
        let password = document.querySelector(".login-password");
        let mail = document.querySelector(".mail");
        let submit_btn = document.querySelector(".submit-btn");
        let invalid = document.querySelector(".invalid");



        mail.addEventListener("input", () => {
            if (mail.value.trim() !== "" && password.value.trim() !== "") {
                submit_btn.disabled = false;
                submit_btn.classList.remove("text-white");
                submit_btn.classList.add("text-black");
            }
        });

        password.addEventListener("input", () => {
            if (mail.value.trim() !== "" && password.value.trim() !== "") {
                submit_btn.disabled = false;
                submit_btn.classList.remove("text-white");
                submit_btn.classList.add("text-black");
            }
        });



        eye.addEventListener("click", () => {
            if (eye.classList.contains("bi-eye-slash")) {
                password.type = "text";
                eye.classList.remove("bi-eye-slash")
                eye.classList.add("bi-eye")
            } else {
                password.type = "password";
                eye.classList.remove("bi-eye")
                eye.classList.add("bi-eye-slash")

            }

        })
    </script>
</body>

</html>