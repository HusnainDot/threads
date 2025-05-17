<!-- posts  -->
<?php
include '../pages/config.php';

$select = "SELECT posts.id as post_id,posts.caption,posts.image,users.id as us_id,users.u_name From posts join users on posts.user_id = users.id ORDER BY post_id DESC ";
$result = mysqli_query($connection, $select);

foreach ($result as $item) {

?>

    <div class="w-100">
        <div class="px-4 py-3 w-100">
            <!-- user -->
            <div class="d-flex align-items-start gap-2 ">
                <!-- user dp -->
                <img src="../assets/img/72f3228a91ee.png" alt="" width="40px" height="40px" style="object-fit: cover;">
                <!-- user post -->
                <div class="w-100">
                    <!-- user name  -->
                    <div class="d-flex flex-column  ">
                        <div class="d-flex align-items-center justify-content-between  gap-2">
                            <div class="d-flex align-items-center gap-2">
                                <h5 class="fs-6  text-capitalize">

                                    <?php echo htmlspecialchars($item["u_name"]); ?>
                                </h5>

                                <!-- actual time when post was posted -->
                                <span class="text-secondary fw-bold">9h</span>
                            </div>
                            <!-- post setting -->
                            <div class="">
                                <i class="bi bi-three-dots fs-3 text-secondary"> </i>
                            </div>
                        </div>

                        <!-- caption -->
                        <p>

                            <?php echo $item["caption"] ?>

                        </p>

                    </div>
                    <!-- user post img -->
                    <div class="py-2 w-100">
                        <img src="../assets/posted_images/<?php echo $item["image"] ?>" alt="" class="rounded-2 user-posts w-100" style="object-fit: contain;">
                    </div>



                    <!-- user like comnets shars and repost -->
                    <div class="pt-2 ">
                        <div class="d-flex align-items-center gap-3 post-bar " id="">

                            <!-- likes -->
                            <div class="d-flex align-items-center gap-2 px-2 py-1  rounded-pill " id="likes">
                                <i class="bi bi-heart text-white-50 fs-6"></i>
                                <!--likes count  -->
                                <span style="font-size: 12px;" class="text-white-50">651</span>
                            </div>

                            <!-- comments -->

                            <div class="d-flex align-items-center gap-2 px-2 py-1 rounded-pill position-relative comment-trigger">
                                <i class="bi bi-chat text-white-50 fs-6"></i>
                                <!-- comments count -->
                                <span style="font-size: 12px;" class="text-white-50">651</span>
                                <!-- comment modal -->
                                <div class="comment-modal">
                                    <div class="col-12 col-md-8 col-lg-6 col-xl-4 mx-auto comment-modal-wrapper py-4 min-vh-100 d-flex">
                                        <div class="card rounded-4 border-1 border-dark mt-3 py-5 px-1 flex-grow-1 text-white bg-dark position-relative" style="background-color: #212529;">
                                            <!-- close modal btn  -->
                                            <button class="close-comment-modal position-absolute top-0 end-0 m-3"><i class="bi bi-x-lg"></i></button>
                                            <div class="card-body text-center">
                                                <!-- close modal card body -->



                                                <!-- comment inner post  -->

                                                <div class="d-flex align-items-start gap-2 ">
                                                    <!-- user dp -->
                                                    <img src="../assets/img/72f3228a91ee.png" alt="" width="40px" height="40px" style="object-fit: cover;">
                                                    <!-- user post -->
                                                    <div class="w-100">
                                                        <!-- user name  -->
                                                        <div class="d-flex flex-column  ">
                                                            <div class="d-flex align-items-center justify-content-between  gap-2">
                                                                <div class="d-flex align-items-center gap-2">
                                                                    <h5 class="fs-6  text-capitalize">

                                                                        <?php echo htmlspecialchars($item["u_name"]); ?>
                                                                    </h5>

                                                                    <!-- actual time when post was posted -->
                                                                    <span class="text-secondary fw-bold">9h</span>
                                                                </div>
                                                                <!-- post setting -->
                                                                <div class="">
                                                                    <i class="bi bi-three-dots fs-3 text-secondary"> </i>
                                                                </div>
                                                            </div>

                                                            <!-- caption -->
                                                            <p>

                                                                <?php echo $item["caption"] ?>

                                                            </p>

                                                        </div>
                                                        <!-- user post img -->
                                                        <div class="py-2 w-100">
                                                            <img src="../assets/posted_images/<?php echo $item["image"] ?>" alt="" class="rounded-2 user-posts w-100" style="object-fit: contain;">
                                                        </div>



                                                        <!-- user like comnets shars and repost -->
                                                        <div class="pt-2 ">
                                                            <div class="d-flex align-items-center gap-3 post-bar " id="">

                                                                <!-- likes -->
                                                                <div class="d-flex align-items-center gap-2 px-2 py-1  rounded-pill " id="likes">
                                                                    <i class="bi bi-heart text-white-50 fs-6"></i>
                                                                    <!--likes count  -->
                                                                    <span style="font-size: 12px;" class="text-white-50">651</span>
                                                                </div>

                                                                <!-- comments -->

                                                                <div class="d-flex align-items-center gap-2 px-2 py-1 rounded-pill position-relative comment-trigger">
                                                                    <i class="bi bi-chat text-white-50 fs-6"></i>
                                                                    <!-- comments count -->
                                                                    <span style="font-size: 12px;" class="text-white-50">651</span>
                                                                    <!-- comment modal -->

                                                                </div>

                                                                <!-- repost -->
                                                                <div class="d-flex align-items-center gap-2 px-2 py-1 rounded-pill  " id="repost">
                                                                    <i class="bi bi-arrow-repeat text-white-50 fs-6"></i>
                                                                    <!--repost count  -->
                                                                    <span style="font-size: 12px;" class="text-white-50">651</span>

                                                                </div>
                                                                <!-- share -->
                                                                <div class="d-flex align-items-center gap-2 px-2 py-1 rounded-pill " id="share">
                                                                    <i class="bi bi-send text-white-50 fs-6"></i>
                                                                    <!--share count  -->
                                                                    <span style="font-size: 12px;" class="text-white-50">651</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="my-3 w-100 " style="border-bottom: 0.1px solid rgb(121, 120, 120);"></div>




                                                <div class="d-flex gap-2 w-100">
                                                    <img src="../assets/img/72f3228a91ee.png" alt="" width="40px" height="40px" style="object-fit: cover;">
                                                    <div class="d-flex flex-column  w-100">
                                                        <div class="d-flex align-items-center justify-content-between ">
                                                            <div class="d-flex gap-2 align-items-center ">
                                                                <h5 class="fs-6  text-capitalize">

                                                                    <?php echo htmlspecialchars($item["u_name"]); ?>
                                                                </h5>

                                                                <!-- actual time when post was posted -->
                                                                <span class="text-secondary fw-bold">9h</span>
                                                            </div>
                                                            <!-- post setting -->
                                                            <div class="">
                                                                <i class="bi bi-three-dots fs-3 text-secondary"> </i>
                                                            </div>
                                                        </div>
                                                        <!--do comment  -->
                                                        <form action="">
                                                            <textarea name="post_comment" id="" rows="1" placeholder="Replay to <?php echo htmlspecialchars($item["u_name"]); ?> " class="w-100 text-white border-0" style="background: none; resize: none; outline: none;"></textarea>

                                                        </form>


                                                    </div>


                                                </div>
                                                <div class="my-3 w-100 " style="border-bottom: 0.1px solid rgb(121, 120, 120);"></div>



                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- repost -->
                            <div class="d-flex align-items-center gap-2 px-2 py-1 rounded-pill  " id="repost">
                                <i class="bi bi-arrow-repeat text-white-50 fs-6"></i>
                                <!--repost count  -->
                                <span style="font-size: 12px;" class="text-white-50">651</span>

                            </div>
                            <!-- share -->
                            <div class="d-flex align-items-center gap-2 px-2 py-1 rounded-pill " id="share">
                                <i class="bi bi-send text-white-50 fs-6"></i>
                                <!--share count  -->
                                <span style="font-size: 12px;" class="text-white-50">651</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="my-1 w-100 " style="border-bottom: 0.1px solid rgb(43, 43, 43);"></div>

    </div>


<?php
};

?>