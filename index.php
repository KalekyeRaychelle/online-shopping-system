<?php

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign Up</title>
  <style>
    body {
      font-family: 'Arial', sans-serif;
      background: linear-gradient(to right, #f9b4ab, #f7e8a1);
      margin: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .signup-container {
      background: #fff;
      padding: 20px 30px;
      border-radius: 15px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
      text-align: center;
      width: 300px;
    }

    .signup-container h2 {
      color: #428042;
      font-size: 24px;
      margin-bottom: 15px;
    }

    .signup-container input[type="text"],
    .signup-container input[type="email"],
    .signup-container input[type="password"] {
      width: 100%;
      padding: 10px;
      margin-bottom: 15px;
      border: 1px solid #ccc;
      border-radius: 5px;
      font-size: 14px;
    }

    .signup-container button {
      background: #428042;
      color: #fff;
      border: none;
      padding: 10px 20px;
      border-radius: 25px;
      cursor: pointer;
      font-size: 16px;
      transition: background 0.3s ease;
    }

    .signup-container button:hover {
      background: #356933;
    }

    .signup-container p {
      font-size: 12px;
      margin-top: 10px;
      color: #888;
    }
  </style>
</head>
<body>
  <div class="signup-container">
    <h2>Create Account</h2>
    <form>
      <input type="text" placeholder="Full Name" required>
      <input type="email" placeholder="Email Address" required>
      <input type="password" placeholder="Password" required>
      <button type="submit">Sign Up</button>
    </form>
    <p>Already have an account? <a href="#">Log in</a></p>
  </div>
</body>
</html>

?>
		
		
