<?php
// Start session
session_start();

// Destroy all session data
session_unset();
session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Logout</title>
  <link rel="stylesheet" href="assets_system/style.css">
  <style>
    body {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      background: #666A6D;
    }
    .logout-box {
      background: #fff;
      padding: 40px 30px;
      border-radius: 20px;
      box-shadow: 0px 4px 12px rgba(0,0,0,.15);
      text-align: center;
      max-width: 400px;
      width: 100%;
    }
    h2 {
      color: #333;
      margin-bottom: 15px;
    }
    p {
      margin-bottom: 20px;
      color: #555;
    }
    a.button {
      display: inline-block;
      padding: 12px 30px;
      border-radius: 24px;
      background: rgb(182,157,230);
      color: #fff;
      font-weight: 500;
      text-decoration: none;
      transition: all .3s ease;
    }
    a.button:hover {
      transform: translateY(-3px);
      background: rgb(162,137,210);
    }
  </style>
</head>
<body>
  <div class="logout-box">
    <h2>✅ You have been logged out</h2>
    <p>Thank you for visiting. You will be redirected to the login page shortly.</p>
    <a href="login.php" class="button">Go to Login</a>
  </div>

  <!-- Auto-redirect after 3 seconds -->
  <script>
    setTimeout(function(){
      window.location.href = "login.php";
    }, 3000);
  </script>
</body>
</html>
