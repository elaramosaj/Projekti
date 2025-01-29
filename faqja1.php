<?php
session_start();

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
    </div>
  </header>
  
  <nav class="nav-bar">  
    <ul>
        <a href="faqja1.php" class="green">Home</a>
        <a href="flowers.php" class="pink">Flowers</a>
        <a href="aboutUs.php" class="green">About us</a>
    </ul>
  </nav>

  <div class="BigButton">
    <?php if (isset($_SESSION['username'])): ?>
        <a href="faqja1.php?logout=true" class="LogButton">Logout</a>
    <?php else: ?>
        <a href="Login.php" class="LogButton">Login</a>
    <?php endif; ?>
  </div>

  <section class="container"> 
    <div class="slider-wrapper">
      <div class="slider">
        <div class="slide">
          <img id="slide1" src="https://images.alphacoders.com/711/711187.jpg" alt="foto1">
          <h5>Thank you for choosing us!</h5>
          <a href="flowers.php" class="shop-button">Shop Now</a>
        </div>
        <div class="slide">
          <img id="slide2" src="https://c4.wallpaperflare.com/wallpaper/653/837/100/field-flowers-sunrise-dawn-wallpaper-preview.jpg" alt="foto2">
          <h5>The best quality for your favorite person</h5>
          <a href="flowers.php" class="shop-button">Shop Now</a>
        </div>
        <div class="slide">
          <img id="slide3" src="https://img.freepik.com/premium-photo/pink-flowers-field-pink-flowers_865967-382645.jpg" alt="foto3">
          <h5>Personalize your gift through us</h5>
          <a href="flowers.php" class="shop-button">Shop Now</a>
        </div>
        <div class="slide">
          <img id="slide4" src="https://images.alphacoders.com/771/771048.jpg" alt="foto4">
          <h5>We are the best</h5>
          <a href="flowers.php" class="shop-button">Shop Now</a>
        </div>
      </div>
      <div class="slider-nav">
        <a href="#slide1"></a>
        <a href="#slide2"></a>
        <a href="#slide3"></a>
        <a href="#slide4"></a>
      </div>
    </div>
  </section>

  <div class="container py-16">
    <p class="trending-categories">Trending Categories</p> 
    <div class="categories">
      <div class="category">
        <img alt="Pink flower in a vase" src="https://png.pngtree.com/png-clipart/20220616/original/pngtree-pink-flower-bouquet-png-image_8090839.png" width="350" height="350">
        <a href="lulja1.php"><p>Pink Roses</p></a>
      </div>
      <div class="category">
        <img alt="White flower in a vase" src="https://cdn.fleur.hk/media/cache/09/b0/09b0328be49e4d78f37ac1fff4a589e9.jpg" width="350" height="350">
        <a href="lulja2.php"><p>White Roses</p></a> 
      </div>
      <div class="category">
        <img alt="Pink flower bouquet" src="https://losangelesblooms.com/cdn/shop/products/PinkParadiseTulipbouquet3_600x.jpg?v=1705868444" width="350" height="350">
        <a href="lulja3.php"><p>Tulips</p></a>
      </div>
      <div class="category">
        <img alt="Pink flower bouquet" src="https://torontoblooms.ca/cdn/shop/products/DSC6619_6693b9fc-fcc6-4630-820f-0134a531c728_2000x.jpg?v=1696436205" width="350" height="350">
        <a href="lulja5.php"><p>Garden Roses</p></a>
      </div>
    </div>
  </div>

  <div class="about">
    <h2>About Us</h2>
    <img alt="A beautiful bouquet of mixed flowers in vibrant colors" src="https://fyf.tac-cdn.net/images/products/large/FYF-120.jpg?auto=webp&quality=60&width=690" width="400" height="400">
    <p>Welcome to Stems & Petals, your number one source for all things flowers. We're dedicated to providing you the very best of floral arrangements, customer service, and uniqueness.</p>
    <p>Founded in 2020 by Dorearta & Ela, Stems & Petals has come a long way from its beginnings in a small garage. When Dorearta & Ela first started out, their passion for eco-friendly and locally sourced flowers drove them to start their own business.</p>
    <p>We hope you enjoy our products as much as we enjoy offering them to you. If you have any questions or comments, please don't hesitate to contact us.</p>
    <br>
    <p>Sincerely,</p>
    <p>Dorearta & Ela</p>
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
</body>
</html>