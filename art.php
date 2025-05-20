<?php
session_start();
if (!isset($_SESSION['loggedIn']) || $_SESSION['loggedIn'] !== true) {
    header('Location: login.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Art | Rexes Lab</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php include('header.php'); ?>

    <section class="art-main">
        <div class="container">
            <h1>Art Gallery and Insights</h1>
            <!-- Add Art content here -->
        </div>
    </section>

    <?php include('footer.php'); ?>
</body>
</html>
