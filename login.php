<?php
// Include database connection
include('db.php');

// Start the session to track login state
session_start();

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Basic validation
    if (empty($email) || empty($password)) {
        echo "Both fields are required.";
    } else {
        // Check if the user exists in the database
        $stmt = $pdo->prepare("SELECT * FROM users WHERE email = ?");
        $stmt->execute([$email]);
        $user = $stmt->fetch();

        if ($user && password_verify($password, $user['password'])) {
            // Password is correct, set session variables
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            $_SESSION['email'] = $user['email'];

            // Redirect to the homepage or a dashboard page
            header("Location: index.php");
            exit();
        } else {
            echo "Invalid email or password.";
        }
    }
}
?>

<!-- HTML Form for Login -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <form method="POST">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required placeholder="Enter your email"><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required placeholder="Enter your password"><br>

        <button type="submit">Login</button>
    </form>
</body>
</html>
