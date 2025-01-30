<?php
include_once 'UserLogin.php';

session_start();
if (isset($_SESSION['username'])) {
    header("Location: faqja1.php");
    exit;
}

$error = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST['username']);
    $password = $_POST['password'];

    if (!empty($username) && !empty($password)) {
        $login = new UserLogin();
        $role = $login->authenticate($username, $password);

        if ($role) {
            header("Location: " . ($role == 'admin' ? "admin_dashboard.php" : "faqja1.php"));
            exit();
        } else {
            $error = "Invalid username or password.";
        }
    } else {
        $error = "Please fill in both fields.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>
    <header>
        <div class="logo">
            <span>Stems & <span class="highlight">Petals</span></span>
        </div>
    </header>

    <div class="container">
        <h1>Log in</h1>
        <?php if (isset($error)) echo "<p style='color:red;'>$error</p>"; ?>
        <form id="Login" method="POST" action="">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" placeholder="Enter your username" required>
                
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Enter your password" required 
                    pattern=".{8,}" title="Password must be at least 8 characters">
            </div>
            <button type="submit" class="btn">Login</button>
            <p>Don't have an account? <a href="register.php" style="color: var(--pink);">Register here</a>.</p>
        </form>
    </div>

    <footer>
        <div class="footer-links">
            <div>
                <h4>My Account</h4>
                <a href="#">My account</a>
                <a href="#">Checkout</a>
                <a href="#">Cart</a>
            </div>
            <div>
                <h4>Quick Links</h4>
                <a href="#">Store Location</a>
                <a href="#">Order Tracking</a>
                <a href="#">FAQs</a>
            </div>
            <div>
                <h4>Company</h4>
                <a href="#">About Us</a>
                <a href="#">Careers</a>
                <a href="#">Blog</a>
            </div>
        </div>
        <div class="footer-bottom">
            <p>Dorearta & Ela All Rights Reserved</p>
        </div>
    </footer>
</body>
</html>
