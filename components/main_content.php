<div class="w-100  position-relative  ">


    <div class="d-md-none d-flex w-100 align-items-center mx-auto px-3" style="height: 8%;">
        <!-- menu icone -->
        <div class="col-4">
            <div class="text-secondary position-relative ">

                <i class="bi bi-list fs-3 " id="sm-nav-menu-icone"></i>



                <div class="position-absolute nav-menu ">
                    <div class="custom-menu ">
                        <div class="list-group">
                            <a href="#" class="list-group-item">Appearance</a>
                            <a href="#" class="list-group-item">Insights</a>
                            <a href="#" class="list-group-item">Settings</a>
                            <a href="#" class="list-group-item">Feeds</a>
                            <a href="#" class="list-group-item">Saved</a>
                            <a href="#" class="list-group-item">Liked</a>
                            <a href="#" class="list-group-item">Report a problem</a>
                            <a href="../pages/logout.php" class="list-group-item red">Log out</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-4 d-flex align-items-center justify-content-center">
            <a href="../pages/home.php">
                <svg xmlns="http://www.w3.org/2000/svg" aria-label="Threads" fill="white" viewBox="0 0 192 192" width="30px" height="30px" role="img">
                    <path d="M141.537 88.9883C140.71 88.5919 139.87 88.2104 139.019 87.8451C137.537 60.5382 122.616 44.905 97.5619 44.745C97.4484 44.7443 97.3355 44.7443 97.222 44.7443C82.2364 44.7443 69.7731 51.1409 62.102 62.7807L75.881 72.2328C81.6116 63.5383 90.6052 61.6848 97.2286 61.6848C97.3051 61.6848 97.3819 61.6848 97.4576 61.6855C105.707 61.7381 111.932 64.1366 115.961 68.814C118.893 72.2193 120.854 76.925 121.825 82.8638C114.511 81.6207 106.601 81.2385 98.145 81.7233C74.3247 83.0954 59.0111 96.9879 60.0396 116.292C60.5615 126.084 65.4397 134.508 73.775 140.011C80.8224 144.663 89.899 146.938 99.3323 146.423C111.79 145.74 121.563 140.987 128.381 132.296C133.559 125.696 136.834 117.143 138.28 106.366C144.217 109.949 148.617 114.664 151.047 120.332C155.179 129.967 155.42 145.8 142.501 158.708C131.182 170.016 117.576 174.908 97.0135 175.059C74.2042 174.89 56.9538 167.575 45.7381 153.317C35.2355 139.966 29.8077 120.682 29.6052 96C29.8077 71.3178 35.2355 52.0336 45.7381 38.6827C56.9538 24.4249 74.2039 17.11 97.0132 16.9405C119.988 17.1113 137.539 24.4614 149.184 38.788C154.894 45.8136 159.199 54.6488 162.037 64.9503L178.184 60.6422C174.744 47.9622 169.331 37.0357 161.965 27.974C147.036 9.60668 125.202 0.195148 97.0695 0H96.9569C68.8816 0.19447 47.2921 9.6418 32.7883 28.0793C19.8819 44.4864 13.2244 67.3157 13.0007 95.9325L13 96L13.0007 96.0675C13.2244 124.684 19.8819 147.514 32.7883 163.921C47.2921 182.358 68.8816 191.806 96.9569 192H97.0695C122.03 191.827 139.624 185.292 154.118 170.811C173.081 151.866 172.51 128.119 166.26 113.541C161.776 103.087 153.227 94.5962 141.537 88.9883ZM98.4405 129.507C88.0005 130.095 77.1544 125.409 76.6196 115.372C76.2232 107.93 81.9158 99.626 99.0812 98.6368C101.047 98.5234 102.976 98.468 104.871 98.468C111.106 98.468 116.939 99.0737 122.242 100.233C120.264 124.935 108.662 128.946 98.4405 129.507Z" />
                </svg>
            </a>
        </div>

        <div class="col-4 d-flex align-items-center justify-content-end">
            <a href="./" class="btn px-2  bg-white rounded-3">Open app</a>

        </div>

    </div>

    <!-- refreh button -->
    <div class=" align-items-center justify-content-center gap-2 d-none d-md-flex md_nav py-3" style="height: 8%;">
        <h6 class="text-canter"> For you </h6><i class="bi bi-chevron-down border border-secondary rounded-circle " style="padding: 3px 6px; font-size:12px;"></i>

    </div>

    <!-- main content -->


    <div class="card rounded-4 border-1 border-dark pb-5 post_main_content w-100">
        <!-- post modal opner -->
        <div class="px-4 py-3  align-items-center justify-content-between post_modal_opner_3 d-none d-md-flex" style="cursor: pointer;">
            <div class="d-flex align-items-center gap-2 ">

                <img src="../assets/img/72f3228a91ee.png" alt="" width="40px" height="40px" style="object-fit: cover;">

                <h5 class="fs-6 text-secondary text-capitalize mt-2">
                    what on you mind?
                    <?php echo htmlspecialchars($_SESSION["users"]["username"]); ?>
                </h5>
            </div>

            <button class="btn rounded-3 px-2 py-1 text-secondary" style="border:1px solid gray; font-size: 14px;">Post</button>
        </div>

        <!-- sm btns  -->
        <div class="px-4 align-items-center row d-flex d-md-none">
            <div class="col-6  py-3" style="border-bottom:1px solid white;">
                <span class="text-white text-center d-block fw-bold "> For you</span>
            </div>
            <div class="col-6  py-3" style="border-bottom:1px solid gray;">

                <span class="text-secondary text-center d-block fw-bold"> Following</span>
            </div>

        </div>

        <!-- line -->
        <div class="my-1 w-100 d-none d-md-block " style="border-bottom: 0.1px solid rgb(66, 66, 66);"></div>


        <!-- include posts -->
        <div class="w-100 text-white ">

            <?php
            include __DIR__ . '/posts.php';
            ?>
        </div>

    </div>






    <div class="d-md-none d-block position-fixed bottom-0 w-100 align-items-center mb-0" style="background-color: rgba(0, 0, 0, 0.98);height: 40px;">
        <?php
        include __DIR__ . '/bar.php';
        ?>
    </div>

</div>