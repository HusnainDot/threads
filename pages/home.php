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

<body>

<?php

if (!isset($_SESSION["username"])) {
    header("Location: $base_url/index.php");
}
?>



<h5>
    <?php echo $_SESSION["username"]; ?>
</h5>


<a href="./logout.php" class="btn btn-danger rounded-4">Logout</a>
<?php
    include '../components/bootstrap_js.php'
    ?>
</body>

</html>