<div class="w-100 h-100 post_modal pb-md-3">
    <div class="row align-items-center p-3 ">
        <!-- close post modal -->
        <div class="col-4">
            <i class="bi bi-x-lg close_post_popup" style="cursor: pointer;"></i>
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
    <form action="../pages/data_base/mk_post.php" 1 method="POST" class="h-100 w-auto" enctype="multipart/form-data">
        <div class="px-4 d-flex flex-column justify-content-between position-relative" style="height: 80%;">
            <div class="d-flex align-items-start gap-3">
                <div class="d-flex flex-column align-items-center gap-3">
                    <!-- user dp -->
                    <div>
                        <img src="../assets/img/72f3228a91ee.png" alt="" width="40px" height="40px" style="object-fit: cover;">
                    </div>
                    <div class="bg-secondary rounded-pill" style="width: 2px; height:40px;"></div>
                </div>

                <div class="d-flex flex-column w-100">
                    <h5 class="fs-6 ms-1">
                        <?php echo htmlspecialchars($_SESSION["users"]["username"]); ?>
                    </h5>

                    <!-- caption -->
                    <input type="text" name="caption" id="caption" class=" border-0 text-white p-0 fs-6 mt-1 pstm_caption" style="outline: none; background:none;" placeholder="What's new? <?php echo htmlspecialchars($_SESSION["users"]["username"]); ?>">



                    <!-- temporary image  -->

                    <div class="w-100 rounded-3 temp_img d-none position-relative d-flex align-items-center justify-content-center flex-column gap-1 p-1" style="height: 200px; border:1px solid rgb(73, 73, 73); max-height: 500px;">
                        <div class="close_temp_img position-absolute rounded-circle" style="padding: 3px 6px; right: 5px; top: 5px; background-color: #0d0d0d; cursor: pointer; z-index: 10;">
                            <i class="bi bi-x-lg text-white"></i>
                        </div>
                        <label for="up_load_file" class="d-flex align-items-center justify-content-center flex-column w-100 h-100 position-relative" style="cursor: pointer;">
                            <input type="file" id="up_load_file" name="up_load_file" class="position-absolute w-100 h-100 opacity-0 upload_imag" style="top: 0; left: 0; cursor: pointer;">
                            <i class="bi bi-file-earmark-plus fs-3 text-secondary"></i>
                            <h5 class="text-secondary fw-semibold">Upload images and video</h5>
                        </label>
                        <img src="" class="pstm_preview_img d-none w-100 h-100  position-absolute top-0 rounded-2" alt="Preview" style="z-index: 9; object-fit: cover;">
                    </div>

                    <!-- upload files or emojis from icons -->
                    <div class="form-group d-flex mt-2 align-items-center gap-4">
                        <!-- upload files -->
                        <div class="pstm_upload_image">

                            <i class="bi bi-file-earmark-plus fs-5 text-secondary" style="cursor: pointer;"></i>

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
            <div class="d-flex align-items-center justify-content-between ">
                <!-- choose who can see your post -->
                <div>
                    <h6 class="text-secondary">Anyone can reply & quote</h6>
                </div>

                <button class="btn rounded-3 px-2 py-1 text-secondary pstm_btn " style="border:1px solid gray; font-size: 14px;" disabled>Post</button>
            </div>
        </div>
    </form>

</div>