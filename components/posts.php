<!-- posts  -->

<div class="w-100 ">
    <div class="px-4 py-3 w-100"  >
        <!-- user -->
        <div class="d-flex align-items-start gap-2 ">
            <!-- user dp -->
            <img src="../assets/img/72f3228a91ee.png" alt="" width="40px" height="40px" style="object-fit: cover;">
            <!-- user post -->
            <div class="w-100">
                <!-- user name  -->
                <div class="d-flex flex-column  ">
                    <div class="d-flex align-items-center  gap-2">
                        <h5 class="fs-6  text-capitalize">

                            <?php echo htmlspecialchars($_SESSION["users"]["username"]); ?>
                        </h5>

                        <!-- actual time when post was posted -->
                        <span class="text-secondary fw-bold">9h</span>
                    </div>

                    <!-- caption -->
                    <p>
                        Hi, I’m a website designer
                    </p>

                </div>
                <!-- user post img -->
                <div class="py-2 w-100">
                    <img src="../assets/img/496972644_17845613220473820_8228180245122087258_n.jpg" alt="" class="rounded-2 user-posts w-100" style="object-fit: contain;">
                </div>



                <!-- user like comnets shars and repost -->
                <div class="pt-2 ">
                    <div class="d-flex align-items-center gap-3">

                        <!-- likes -->
                        <div class="d-flex align-items-center gap-2 likes">
                            <i class="bi bi-heart text-white-50 fs-6"></i>
                            <!--likes count  -->
                            <span style="font-size: 12px;" class="text-white-50">651</span>
                        </div>

                        <!-- comments -->
                        <div class="d-flex align-items-center gap-2 comments">
                            <i class="bi bi-chat text-white-50 fs-6"></i>
                            <!--comments count  -->
                            <span style="font-size: 12px;" class="text-white-50">651</span>
                        </div>

                        <!-- repost -->
                        <div class="d-flex align-items-center gap-2 repost">
                            <i class="bi bi-arrow-repeat text-white-50 fs-6"></i>
                            <!--repost count  -->
                            <span style="font-size: 12px;" class="text-white-50">651</span>
                        </div>
                        <!-- share -->
                        <div class="d-flex align-items-center gap-2 share">
                            <i class="bi bi-send text-white-50 fs-6"></i>
                            <!--share count  -->
                            <span style="font-size: 12px;" class="text-white-50">651</span>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>

    <div class="my-1 w-100 d-none d-md-block " style="border-bottom: 0.1px solid rgb(66, 66, 66);"></div>

</div>

