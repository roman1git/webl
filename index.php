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
    <title>Home | Rexes Lab</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php include('header.php'); ?>

    <section class="home-main">
        <div class="container">
            <h1>Welcome to Rexes Lab!</h1>
            <p>Explore the world of AI, Art, and Travel with our curated content and insightful blogs.</p>
        </div>
    </section>

    <?php include('footer.php'); ?>
</body>
</html>
