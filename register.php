<?php
include_once 'UserRepository.php';
include_once 'User.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST['email']) || empty($_POST['password']) || empty($_POST['username']) || empty($_POST['confirm-password'])) {
        echo "<script>alert('Fill all fields!');</script>";
    } else {
        $email = trim($_POST['email']);
        $password = trim($_POST['password']);
        $confirmPassword = trim($_POST['confirm-password']);
        $username = trim($_POST['username']);

        if ($password !== $confirmPassword) {
            echo "<script>alert('Passwords do not match!');</script>";
        } else {
            // Hash the password
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

            // Create User object
            $user = new User(null, $email, $hashedPassword, $username);

            // Use UserRepository to insert the user
            $userRepository = new UserRepository();
            if ($userRepository->insertUser($user)) {
                echo "<script>
                        alert('Registration successful!');
                        window.location.href='login.php';
                      </script>";
                exit();
            } else {
                echo "<script>alert('Error during registration. Try again!');</script>";
            }
        }
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Lora:wght@400;500;700&display=swap" rel="stylesheet"/>
    <link rel="stylesheet" href="register.css">
  </head>
  <body>
    <header>
      <div class="logo">
        <span>Stems & <span class="highlight">Petals</span></span>
      </div>
    </header>
    
    <div class="container">
      <h1>Register</h1>
      <form action="register.php" method="POST">
        <div class="form-group">
          <label for="username">Username</label>
          <input type="text" id="username" name="username" placeholder="Enter your username" required>
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" id="email" name="email" placeholder="Enter your email" required>
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" id="password" name="password" placeholder="Enter your password" 
          required pattern="^[A-Z][A-Za-z0-9]{7,}$" 
          title="Password must start with a capital letter, be at least 8 characters long, and contain at least one number.">
        </div>
        <div class="form-group">
          <label for="confirm-password">Confirm Password</label>
          <input type="password" id="confirm-password" name="confirm-password" placeholder="Confirm your password" required>
        </div>
        <p>Have an account already? <a href="login.php" style="color: var(--pink);">Login here</a>.</p>
        <button type="submit" class="btn">Register</button>
      </form>
    </div>
    <footer>
      <div class="footer-links">
        <div>
          <h4>My Account</h4>
          <a href="#">My account</a>
          <a href="#">Checkout</a>
          <a href="#">Cart</a>
          <a href="#">Wishlist</a>
          <a href="#">Shopping Cart</a>
        </div>
        <div>
          <h4>Quick Links</h4>
          <a href="#">Store Location</a>
          <a href="#">Order Tracking</a>
          <a href="#">Size Guide</a>
          <a href="#">FAQs</a>
          <a href="#">Help</a>
        </div>
        <div>
          <h4>Information</h4>
          <a href="#">Privacy Policy</a>
          <a href="#">Terms &amp; Conditions</a>
          <a href="#">Return Policy</a>
          <a href="#">Shipping Policy</a>
          <a href="#">Contact Us</a>
        </div>
        <div>
          <h4>Company</h4>
          <a href="#">About Us</a>
          <a href="#">Careers</a>
          <a href="#">Press</a>
          <a href="#">Affiliates</a>
          <a href="#">Blog</a>
        </div>
        <div>
          <h4>About Our Shop</h4>
          <p>Whether you’re celebrating life’s special moments or adding a touch of elegance, explore our wide selection of seasonal blooms. Experience the joy of flowers, delivered with love.</p>
          <p>Email: stemsandpetals@company.com</p>
          <p>Phone: +38348704274</p>
          <div>
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-linkedin-in"></i></a>
          </div>
        </div>
      </div>
      <div class="footer-bottom">
        <p>Dorearta & Ela All Rights Reserved</p>
      </div>
    </footer>
  </body>
</html>