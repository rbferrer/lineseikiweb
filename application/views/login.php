<?php
session_start();

// Database connection
$host = "localhost";
$user = "root"; // XAMPP default
$pass = "";     // XAMPP default password is empty
$db   = "login_system";

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("❌ Connection failed: " . $conn->connect_error);
}

// Process login if form submitted
$message = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = isset($_POST['username']) ? $_POST['username'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';

    $username = $conn->real_escape_string($username);
    $password = $conn->real_escape_string($password);

    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password' LIMIT 1";
    $result = $conn->query($sql);

    if ($result->num_rows === 1) {
        $_SESSION['username'] = $username;
        $message = "<p style='color:green'>✅ Login successful! Welcome, $username.</p>";
    } else {
        $message = "<p style='color:red'>❌ Invalid username or password.</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Login Form</title>
  <link rel="stylesheet" href="assets_system/style.css">
</head>
<body>
  <div class="session">
    <div class="left">
      <!-- Logo SVG -->
      <svg enable-background="new 0 0 300 302.5" viewBox="0 0 300 302.5" xmlns="http://www.w3.org/2000/svg">
      </svg>
    </div>
    <form action="login.php" method="POST" class="log-in" autocomplete="off"> 
      <h4>We are Lineseiki</h4>
      <p>Welcome back! Log in to your account:</p>

      <div class="floating-label">
        <input placeholder="Email" type="text" name="username" id="username" required>
        <label for="username">Username</label>
      </div>

      <div class="floating-label">
        <input placeholder="Password" type="password" name="password" id="password" required>
        <label for="password">Password</label>
      </div>

      <a href="Home.php">Login</a></button>
      <p style="margin-top:15px;">Don’t have an account? <a href="register.php">Register here</a></p>
    </form>
  </div>
</body>
</html>
