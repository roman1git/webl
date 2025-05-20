<?php
// Include database connection
include('db.php');

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm-password'];

    // Basic form validation
    if (empty($username) || empty($email) || empty($password) || empty($confirm_password)) {
        echo "All fields are required.";
    } elseif ($password !== $confirm_password) {
        echo "Passwords do not match.";
    } else {
        // Hash the password before storing it
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // Check if the email already exists
        $stmt = $pdo->prepare("SELECT * FROM users WHERE email = ?");
        $stmt->execute([$email]);
        if ($stmt->rowCount() > 0) {
            echo "Email is already registered.";
        } else {
            // Insert the new user into the database
            $stmt = $pdo->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
            $stmt->execute([$username, $email, $hashed_password]);
            echo "Registration successful! You can now log in.";
        }
    }
}
?>

<!-- HTML Form for Sign-Up -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
</head>
<body>
    <h2>Sign Up</h2>
    <form method="POST">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required placeholder="Enter your username"><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required placeholder="Enter your email"><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required placeholder="Enter your password"><br>

        <label for="confirm-password">Confirm Password:</label>
        <input type="password" id="confirm-password" name="confirm-password" required placeholder="Confirm your password"><br>

        <button type="submit">Sign Up</button>
    </form>
</body>
</html>
