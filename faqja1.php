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
  
  <div class="container py-16">
    <p class="trending-categories">Trending Categories</p> 
    <div class="categories">
      <?php foreach ($products as $product): ?>
        <div class="category">
          <img alt="Flower" src="<?= htmlspecialchars($product['url']); ?>" width="350" height="350">
          <a href="product.php?id=<?= htmlspecialchars($product['name']); ?>">
            <p><?= htmlspecialchars($product['name']); ?> - $<?= htmlspecialchars($product['price']); ?></p>
          </a>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
  
  <footer>
    <div class="footer-bottom">
      <p>Dorearta & Ela All Rights Reserved</p>
    </div>
  </footer>
</body>
</html>
