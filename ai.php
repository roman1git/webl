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
    <title>AI | Rexes Lab</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php include('header.php'); ?>

    <section class="ai-main">
        <div class="container">
            <h1>AI Insights and Articles</h1>
            <!-- Add AI content here -->
        </div>
    </section>

    <?php include('footer.php'); ?>
</body>
</html>
