<?php
session_start();
include_once 'Database.php';
include_once 'UserRepository.php';
include_once 'ProductRepository.php';

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

$productRepo = new ProductRepository($db);
$products = $productRepo->getAllProducts();
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
  <div class="about">
            <h2>Welcome,</h2>
            <img alt="A beautiful bouquet of mixed flowers in vibrant colors" src="https://fyf.tac-cdn.net/images/products/large/FYF-120.jpg?auto=webp&quality=60&width=690" width="400" height="400">
            <p>Welcome to Stems & Petals, your number one source for all things flowers. We're dedicated to providing you the very best of floral arrangements, customer service, and uniqueness.</p>
            <p>Founded in 2020 by Dorearta & Ela, Stems & Petals has come a long way from its beginnings in a small garage. When Dorearta & Ela first started out, their passion for eco-friendly and locally sourced flowers drove them to start their own business.</p>
            <p>We hope you enjoy our products as much as we enjoy offering them to you. If you have any questions or comments, please don't hesitate to contact us.</p>
            <br>
            <p>Sincerely,</p>
            <p>Dorearta & Ela</p>
          </div>
  <footer>
    <div class="footer-bottom">
      <p>Dorearta & Ela All Rights Reserved</p>
    </div>
  </footer>
</body>
</html>
