<?php
include "../config.php";

$post_id = $_GET["post_id"];

$showComments = "SELECT COUNT(id) AS total FROM comments  WHERE comments.pc_id = $post_id";

$result = mysqli_query($connection, $showComments);


foreach ($result as $item) {

?>

    <span class="text"><?php echo $item["total"]?></span>
<?php }; ?>