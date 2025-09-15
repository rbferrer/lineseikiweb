<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Database connection
    $host = "localhost";
    $user = "root";   // default XAMPP user
    $pass = "";       // default XAMPP password is empty
    $db   = "login_system";

    $conn = new mysqli($host, $user, $pass, $db);

    if ($conn->connect_error) {
        die("❌ Connection failed: " . $conn->connect_error);
    }

    // Collect inputs
    $firstname = $conn->real_escape_string($_POST['firstname']);
    $lastname  = $conn->real_escape_string($_POST['lastname']);
    $birthday  = $conn->real_escape_string($_POST['birthday']);
    $gender    = $conn->real_escape_string($_POST['gender']);
    $contact   = $conn->real_escape_string($_POST['contact']);
    $email     = $conn->real_escape_string($_POST['email']);
    $username  = $conn->real_escape_string($_POST['username']);
    $password  = $conn->real_escape_string($_POST['password']);

    // Check if username or email already exists
    $check = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
    $result = $conn->query($check);

    if ($result->num_rows > 0) {
        echo "<script>alert('⚠️ Username or Email already taken. Please try another.'); window.location='register.php';</script>";
    } else {
        // Insert new user
        $sql = "INSERT INTO users (firstname, lastname, birthday, gender, contact, email, username, password) 
                VALUES ('$firstname','$lastname','$birthday','$gender','$contact','$email','$username','$password')";

        if ($conn->query($sql) === TRUE) {
            echo "<script>alert('✅ Registration successful! You can now login.'); window.location='login.php';</script>";
        } else {
            echo "<script>alert('❌ Error: " . $conn->error . "'); window.location='register.php';</script>";
        }
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Register Form</title>
  <link rel="stylesheet" href="assets_system/style.css">
</head>
<body>
  <div class="session">
    <div class="left"></div>
    <form action="register.php" method="POST" class="log-in" autocomplete="off"> 
      <h4>Join <span>Lineseiki</span></h4>
      <p>Create your account below:</p>

      <div class="floating-label">
        <input placeholder="First Name" type="text" name="firstname" required>
        <label for="firstname">First Name</label>
      </div>

      <div class="floating-label">
        <input placeholder="Last Name" type="text" name="lastname" required>
        <label for="lastname">Last Name</label>
      </div>

      <div class="floating-label">
        <input placeholder="Birthday" type="date" name="birthday" required>
        <label for="birthday">Birthday</label>
      </div>

      <div class="floating-label">
        <select name="gender" required>
          <option value="">-- Select Gender --</option>
          <option value="Male">Male</option>
          <option value="Female">Female</option>
          <option value="Other">Other</option>
        </select>
        <label for="gender">Gender</label>
      </div>

      <div class="floating-label">
        <input placeholder="Contact No" type="text" name="contact" required>
        <label for="contact">Contact Number</label>
      </div>

      <div class="floating-label">
        <input placeholder="Email" type="email" name="email" required>
        <label for="email">Email</label>
      </div>

      <div class="floating-label">
        <input placeholder="Username" type="text" name="username" required>
        <label for="username">Username</label>
      </div>

      <div class="floating-label">
        <input placeholder="Password" type="password" name="password" required>
        <label for="password">Password</label>
      </div>

      <button type="submit">Register</button>
      <p style="margin-top:15px;">Already have an account? <a href="login.php">Login here</a></p>
    </form>
  </div>
</body>
</html>
