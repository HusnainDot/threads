<div class="w-100">
    <div class="row align-items-center p-3 ">
        <!-- close post modal -->
        <div class="col-4">
            <i class="bi bi-x-lg close_post_popup"  style="cursor: pointer;"></i>
        </div>
        <!-- heading -->
        <div class="col-4">
            <h5 class="text-capitalize text-white fw-semibold text-center ">new threads</h5>
        </div>
<!-- option and menu -->
        <div class="col-4 d-flex justify-content-end align-items-center gap-4">
            <i class="bi bi-chat-left-text-fill fs-5"></i>
            <i class="bi bi-three-dots rounded-circle fs-4 border-1 border-black border-dark"></i>
        </div>
    </div>

    <hr class="mt-0">

    <!-- user -->
    <div class="px-4">
        <form action="" 1 method="POST">
            <div class="d-flex align-items-start gap-3">
                <div class="d-flex flex-column align-items-center gap-3">
                    <div>
                        <img src="../assets/img/72f3228a91ee.png" alt="" width="40px" height="40px" style="object-fit: cover;">
                    </div>
                    <div class="bg-secondary rounded-pill" style="width: 2px; height:40px;"></div>
                </div>

                <div class="d-flex flex-column">
                    <h5 class="fs-6 ms-1">
                        <?php echo htmlspecialchars($_SESSION["users"]["username"]); ?>
                    </h5>

                    <!-- caption -->
                    <input type="text" name="caption" id="caption" class=" border-0 text-white p-0 fs-6 mt-1" style="outline: none; background:none;" placeholder="What's new? <?php echo htmlspecialchars($_SESSION["users"]["username"]); ?>">

                    <!-- upload files or emojis from icons -->
                    <div class="form-group d-flex mt-2 align-items-center gap-4">
                        <!-- upload files -->
                        <div>
                            <label for="up_load_file">
                                <input type="file" id="up_load_file" name="up_load_file" class="d-none">
                                <i class="bi bi-file-earmark-plus fs-5 text-secondary" style="cursor: pointer;"></i>
                            </label>
                        </div>

                        <!-- upload gifs -->
                        <div>
                            <i class="bi bi-filetype-gif fs-5 text-secondary" style="cursor: pointer;"></i>
                        </div>

                        <!-- upload emojis -->
                        <div>
                            <i class="bi bi-emoji-sunglasses text-secondary" style="cursor: pointer;"></i>
                        </div>

                        <!-- menu -->
                        <div>
                            <i class="bi bi-menu-button text-secondary" style="cursor: pointer;"></i>
                        </div>

                        <!-- location -->
                        <div>
                            <i class="bi bi-geo-alt text-secondary" style="cursor: pointer;"></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="d-flex align-items-center justify-content-between mt-3">
                <!-- choose who can see your post -->
                <div>
                    <h6 class="text-secondary">Anyone can reply & quote</h6>
                </div>

                <button class="btn rounded-3 px-2 py-1 text-secondary" style="border:1px solid gray; font-size: 14px;">Post</button>
            </div>
        </form>
    </div>

</div>