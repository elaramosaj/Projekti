<?php
session_start();
include_once 'Database.php';
include_once 'UserRepository.php';

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

if (isset($_GET['logout'])) {
    session_unset();
    session_destroy();
    header("Location: login.php");
    exit();
}

$db = Database::getInstance()->getConnection();
$userRepo = new UserRepository($db);
$user = $userRepo->getUserByUsername($_SESSION['username']);

if ($user) {
    $_SESSION['role'] = $user->getRole();
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stems & Petals</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Lora:wght@400;700&display=swap" rel="stylesheet"/>
    <link rel="stylesheet" href="faqja1.css">
</head>
<body>
  <header>
    <div class="logo">
      <span>Stems & <span class="highlight">Petals</span></span>
    </div>
    <div class="search-bar">
      <input placeholder="Search our store" type="text"/>
      <button><i class="fas fa-search"></i></button>
    </div>
    <div class="user-info">
      <a href="cart.php"><i class="fas fa-shopping-cart"></i> </a>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <a href="profili.php"><i class="fas fa-user"></i></a>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <?php if (isset($_SESSION['username'])): ?>
          <a href="faqja1.php?logout=true" class="LogButton">Logout</a>
      <?php else: ?>
          <a href="Login.php" class="LogButton">Login</a>
      <?php endif; ?>
    </div>
  </header>
  
  <nav class="nav-bar">  
    <ul>
        <a href="faqja1.php" class="green">Home</a>
        <a href="flowers.php" class="pink">Flowers</a>
        <a href="aboutUs.php" class="pink">About us</a>
        <?php if (isset($_SESSION['role']) && $_SESSION['role'] == 'admin'): ?>
            <a href="admin_dashboard.php" class="green">Dashboard</a>
        <?php endif; ?>
    </ul>
  </nav>
  
  <section class="container"> 
    <div class="slider-wrapper">
      <div class="slider">
        <div class="slide">
          <img src="https://images.alphacoders.com/711/711187.jpg" alt="foto1">
          <h5>Thank you for choosing us!</h5>
          <a href="flowers.php" class="shop-button">Shop Now</a>
        </div>
      </div>
    </div>
  </section>

  <main>
        <section class="hero">
            <div class="content">
                <h1>Fresh Flowers</h1>
                <p>Whether you’re celebrating life’s special moments or adding a touch of elegance, explore our wide selection of seasonal blooms. Experience the joy of flowers, delivered with love.</p>
                <button>shop now</button>
            </div>
            <div class="image">
                <img src="—Pngtree—pink rose decoration_13081230.png" alt="Pink Roses">
            </div>
        </section>
    </main>
    
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
                    <a href="#">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="#">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <p>Dorearta & Ela All Rights Reserved @</p>
        </div>
    </footer>
</body>
</html>
