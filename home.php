<?php
// Start session
session_start();

// Check if user is logged in, otherwise redirect to login page
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

// Retrieve the user's username from the session
$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(to right, #f9b4ab, #f7e8a1);
            margin: 0;
            padding: 0;
        }

        .home-container {
            max-width: 600px;
            margin: auto;
            background: #fff;
            padding: 20px;
            border-radius: 15px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .home-container h1 {
            color: #428042;
            font-size: 32px;
            margin-bottom: 15px;
        }

        .welcome-message {
            font-size: 18px;
            color: #333;
            margin-bottom: 20px;
        }

        .logout-btn {
            padding: 10px 20px;
            background: #428042;
            color: white;
            border: none;
            border-radius: 25px;
            font-size: 16px;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        .logout-btn:hover {
            background: #356933;
        }

        .footer {
            margin-top: 30px;
            font-size: 14px;
            color: #888;
        }

        .footer a {
            color: #428042;
            text-decoration: none;
        }

        .footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<div class="home-container">
    <h1>Welcome, <?php echo htmlspecialchars($username); ?>!</h1>
    <p class="welcome-message">You are successfully logged in. Feel free to explore your dashboard and manage your tasks!</p>
    <form action="logout.php" method="post">
        <button type="submit" class="logout-btn">Log Out</button>
    </form>
</div>

<div class="footer">
    <p>Want to return to the <a href="login.php">Login page</a>?</p>
</div>

</body>
</html>
