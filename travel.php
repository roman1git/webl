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
    <title>Travel | Rexes Lab</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php include('header.php'); ?>

    <!-- Travel Section -->
    <section class="travel-main" id="travel">
        <div class="container">
            <div class="travel-header">
                <h1>Travel Experiences - Explore the World</h1>
                <p>Join us as we discover the beauty of various travel destinations, with captivating visuals and immersive experiences.</p>
            </div>

            <!-- Travel Destinations -->
            <div class="travel-content">
                <div class="travel-item">
                    <h2>The Enchanting Beaches of Bali</h2>
                    <div class="travel-images">
                        <img src="images/bali-beach1.jpg" alt="Bali Beach 1" class="travel-image">
                        <img src="images/bali-beach2.jpg" alt="Bali Beach 2" class="travel-image">
                        <img src="images/bali-beach3.jpg" alt="Bali Beach 3" class="travel-image">
                    </div>
                    <p>Bali, known for its vibrant culture and stunning beaches, offers an unforgettable experience for all travelers. The beaches of Bali are perfect for relaxation and adventure alike.</p>
                </div>

                <div class="travel-item">
                    <h2>Exploring the Historical Wonders of Rome</h2>
                    <div class="travel-images">
                        <img src="images/rome-colosseum1.jpg" alt="Rome Colosseum 1" class="travel-image">
                        <img src="images/rome-colosseum2.jpg" alt="Rome Colosseum 2" class="travel-image">
                        <img src="images/rome-colosseum3.jpg" alt="Rome Colosseum 3" class="travel-image">
                    </div>
                    <p>Rome is a city where history comes to life. From the ancient Colosseum to the Vatican, the city offers a rich tapestry of historical landmarks to explore.</p>
                </div>

                <div class="travel-item">
                    <h2>Adventures in the Swiss Alps</h2>
                    <div class="travel-images">
                        <img src="images/swiss-alps1.jpg" alt="Swiss Alps 1" class="travel-image">
                        <img src="images/swiss-alps2.jpg" alt="Swiss Alps 2" class="travel-image">
                        <img src="images/swiss-alps3.jpg" alt="Swiss Alps 3" class="travel-image">
                    </div>
                    <p>The Swiss Alps are a paradise for adventure seekers. Whether you love skiing, hiking, or simply enjoying the majestic views, this destination has it all.</p>
                </div>
            </div>

            <!-- Centered Button to Back to Home -->
            <div class="button-container">
                <a href="index.php#home" class="btn">Back to Home</a>
            </div>
        </div>
    </section>

    <?php include('footer.php'); ?>
</body>
</html>
