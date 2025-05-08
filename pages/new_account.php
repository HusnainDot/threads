<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "../components/bootstrap_css.php" ?>
    <link rel="stylesheet" href="../assets/js_css/style.css">
    <title>Rigester New Account</title>
</head>
<style>
    .dashes {
        width: 40px;
        height: 1px;
        background-color: white;
    }

    .login-bg {
        background-image: url(../assets/img/suYRpvQuylX.avif);
        background-repeat: no-repeat;
        background-size: contain;
    }



    @media (max-width:980px) {
        .login-bg {
            background-image: none;

        }

    }
</style>

<body class="bg_main_black">
    <div class="container-fluid min-vh-100 d-flex flex-column align-items-center justify-content-center login-bg position-relative">

        <div class=" p-3 card bg_main_black border-1 rounded-2 border-dark form-wrapper">
            <p class="text-white  my-2 text-center fw-bold " style="font-size: 18px;">Create a New Account on Threads</p>
            <!-- login form -->
            <form action="./data_base/rigester.php" method="POST">


                <div class="w-100 p-0 my-2 d-flex align-items-center gap-2">
                    <input type="text" name="f_name" id="f_name" placeholder="First name" class="   rounded-3 login-input  w-50 py-3 px-3 text-white border-0 " required>


                    <input type="text" name="l_name" id="l_name" placeholder="Last name" class="  rounded-3 login-input w-50 py-3 px-3 text-white border-0 " required>
                </div>
                <div class="w-100 p-0 my-1 ">
                    <input type="text" name="u_name" id="u_name" placeholder="User name" class="  my-1 rounded-3 login-input  w-100 py-3 px-3 text-white border-0 " required>
                </div>
                <div class="w-100 p-0 my-1 ">

                    <input type="text" name="m_mail" id="e-mail" placeholder="Phone number or Email" class=" my-1 rounded-3 login-input w-100 py-3 px-3 text-white border-0 " required>
                </div>
                <div class="w-100 p-0 my-1 position-relative">

                    <input type="password" name="password" id="password" placeholder="password" class=" new-acc-password my-1 rounded-3 login-input w-100 py-3 px-3 text-white border-0 " required>
                    <i class="bi bi-eye-slash  fs-5 position-absolute eye text-white" style="right:10px; top:50%; transform:translateY(-50%) ;cursor: pointer;"></i>
                </div>

                <button class="my-1 rounded-3 login-btn w-100 py-3 px-2 text-black border-0 fw-bold my-2">Create new account</button>

            </form>


            <div class="d-flex align-items-center justify-content-center  gap-3 my-3">
                <span class="dashes"></span>
                <p class="text-white fw-bolder fs-5">or</p>
                <span class="dashes"></span>
            </div>


            <a href="../index.php" class="text-center text-white text-decoration-none mt-1 new-account">already have account</a>
            <div class="d-flex align-items-center justify-content-center gap-2">
                <span style="width: 30px; height: 2px; background-color: gray;"></span>
                <span style="width: 30px; height: 2px; background-color: gray;"></span>
                <span style="width: 30px; height: 2px; background-color: gray;"></span>
            </div>
        </div>

        <p class="text-secondary text-center position-absolute mb-2 bottom-0">© 2025 Threads Terms Privacy Policy Cookies Policy
        </p>
    </div>

    <?php include "../components/bootstrap_js.php" ?>

    <script>
        let eye = document.querySelector(".eye");
        let password = document.querySelector(".new-acc-password");

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