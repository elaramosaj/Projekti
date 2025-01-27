<?php
include 'databaza.php';
session_start();

if (isset($_SESSION['user_id'])) {
    $isLoggedIn = true;
    $userEmail = $_SESSION['user_email'];
} else {
    $isLoggedIn = false;
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
    <link rel="stylesheet" href="login.css">
  </head>
  <body>
    <header>
      <div class="logo">
        <span>Stems & <span class="highlight">Petals</span></span>
      </div>
      <div class="search-bar">
        <input placeholder="Search our store" type="text"/>
        <button>
          <i class="fas fa-search"></i>
        </button>
      </div>
      <div class="user-info">
        <a href="cart.php">
          <i class="fas fa-shopping-cart"></i>
        </a>
      </div>
    </header>
    <nav class="nav-bar">
      <ul>
        <a href="faqja1.php" class="green">Home</a>
        <a href="flowers.php" class="pink">Flowers</a>
        <a href="faqja1.php" class="pink">About us</a>
        <a href="login.php" id="login-button" class="green">Log in</a>
      </ul>
    </nav>

    <div class="container">
      <h1>Log in</h1>
      <form action="login.php" method="POST">
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" id="email" name="email" placeholder="Enter your email" required>
          <label for="password">Password</label>
          <input type="password" id="password" name="password" placeholder="Enter your password" required 
            pattern=".{8,}" title="Password must be at least 8 characters">
        </div>
        <button type="submit" class="btn">Login</button>
        <p id="message">Don't have an account? <a href="register.php" style="color: var(--pink);">Register here</a>.</p>
        <p id="message">Admin? <a href="admin.php" style="color: var(--pink);">Login here</a>.</p>

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
          <p>
            Whether you’re celebrating life’s special moments or adding a touch of elegance, explore our wide selection of seasonal blooms. Experience the joy of flowers, delivered with love.
          </p>
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

    <script>
      document.getElementById('loginForm').addEventListener('submit', function(event) {
        event.preventDefault();
        const email = document.getElementById('email').value;
        const password = document.getElementById('password').value;

        if (email && password) {
          window.location.href = 'flowers.php';
        } else {
          alert('Please enter both email and password!');
        }
      });
    </script>
  </body>
</html>
