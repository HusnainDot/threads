<?php
include "../config.php";

$post_id = $_GET["post_id"];

$showComments = "SELECT users.u_name,comments.comment FROM comments JOIN users ON comments.uc_id = users.id WHERE comments.pc_id = $post_id";

$result = mysqli_query($connection, $showComments);


foreach ($result as $item) {

?>

    <div class="comment my-3">
        <div class="d-flex  gap-2">
            <img src="../assets/img/72f3228a91ee.png" alt="" width="40px" height="40px" style="object-fit: cover;">

            <div class="d-flex flex-column gap-2 ">
                <div class="d-flex gap-2 align-items-center">
                    <h5 class="fs-6  text-capitalize">

                         <?php echo htmlspecialchars($item["u_name"]); ?>
                    </h5>

                    <!-- actual time when post was posted -->
                    <span class="text-secondary fw-bold">9h</span>

                </div>


                <p class="text-start">
              <?php  echo $item["comment"]?>
                </p>
            </div>
        </div>
        <div class=" my-3 w-100 " style=" border-bottom: 0.1px solid rgb(121, 120, 120);"></div>
    </div>

<?php }; ?>