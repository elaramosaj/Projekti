<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>
   Products
  </title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Lora:wght@400;500;700&display=swap" rel="stylesheet"/>
  <link rel="stylesheet" href="flowers.css">

 </head>
 <body>
  <header>
    <div class="logo">
      <span>Stems & <span class="highlight">Petals</span></span>
  </div>
   <div class="search-bar">
    <input placeholder="Search our store" type="text"/>
    <button>
     <i class="fas fa-search">
     </i>
    </button>
   </div>
   <div class="user-info">   
    <a href="cart.php">
     <i class="fas fa-shopping-cart">
     </i></a>
   </div>
  </header>
  <nav class="nav-bar">
    <ul>
        <a href="faqja1.php" class="green">Home</a>
        <a href="flowers.php" class="pink">Flowers</a>
        <a href="faqja1.php" class="pink">About us</a>
        <a href="login.php" id="login-button" class="green">Log in</a>
</nav>

<div class="BigButt">
    <?php if (isset($_SESSION['username'])): ?>
        <a href="faqja1.php?logout=true" class="LogButt">Logout</a>
    <?php else: ?>
        <a href="Login.php" class="LogButt">Login</a>
    <?php endif; ?>
  </div>


  <div class="container">
   
   <main class="main-content">
    <div class="top-bar">
     <div class="view-options">
      <button>
       <i class="fas fa-th">
       </i>
      </button>
      <button>
       <i class="fas fa-list">
       </i>
      </button>
     </div>
     <div class="result-count">Showing 9 out of 16 result</div>
    </div>
    <div class="product-grid">
     <div class="product-card">
      <img alt="lule" height="300" src="https://png.pngtree.com/png-clipart/20220616/original/pngtree-pink-flower-bouquet-png-image_8090839.png" width="225"/>
      <div class="product-info">
        <a href="lulja1.php">Pink Roses</a>
        <p class="price">$45</p>
      </div>
     </div>
     <div class="product-card">
      <img alt="lule" height="300" src="https://cdn.fleur.hk/media/cache/09/b0/09b0328be49e4d78f37ac1fff4a589e9.jpg" width="225"/>
      <div class="product-info">
        <a href="lulja2.php">White roses</a>
        <p class="price">$35</p>
      </div>
     </div>
     <div class="product-card">
      <img alt="lule" height="300" src="https://losangelesblooms.com/cdn/shop/products/PinkParadiseTulipbouquet3_600x.jpg?v=1705868444" width="255"/>
      <div class="product-info">
        <a href="lulja3.php">Tulips</a>
        <p class="price">$30</p>
      </div>
     </div>
     <div class="product-card">
      <img alt="lule" height="300" src="https://newjerseyblooms.com/cdn/shop/products/JAN-03-22-16523-m_1_2000x.jpg?v=1644850120" width="225"/>
      <div class="product-info">
        <a href="lulja4.php">Red Roses</a>
        <p class="price">$45</p>
      </div>
     </div>
     <div class="product-card">
      <img alt="lule" height="300" src="https://torontoblooms.ca/cdn/shop/products/DSC6619_6693b9fc-fcc6-4630-820f-0134a531c728_2000x.jpg?v=1696436205" width="225"/>
      <div class="product-info">
        <a href="lulja5.php">Garden Roses</a>
        <p class="price">$39</p>
      </div>
     </div>
     <div class="product-card">
      <img alt="lule" height="300" src="https://hochiminh24hrsflorist.com/wp-content/uploads/2021/04/orchids.jpg" width="225"/>
      <div class="product-info">
        <a href="lulja6.php">Orchids</a>
        <p class="price">$56</p>
      </div>
     </div>
     <div class="product-card">
      <img alt="lule" height="300" src="https://ninainvalentin.si/wp-content/uploads/2022/07/Back-to-You_Bucket-of-Love_4.jpg" width="225"/>
      <div class="product-info">
        <a href="lulja7.php">Barbie Box</a>
        <p class="price">$33</p>
      </div>
     </div>
     <div class="product-card">
      <img alt="lule" height="300" src="https://bucketoflove.eu/wp-content/uploads/2022/07/Coco-Chanel_Bucket-of-Love_4.jpg" width="225"/>
      <div class="product-info">
        <a href="lulja8.php">Wedding Roses</a>
        <p class="price">$23
        <span class="old-price">$56</span>
       </p>
      </div>
     </div>
     <div class="product-card">
      <img alt="lule" height="300" src="https://bucketoflove.eu/wp-content/uploads/2019/02/17-6.jpg" width="225"/>
      <div class="product-info">
        <a href="lulja9.php">Red Roses Box</a>
        <p class="price">$73</p>
      </div>
     </div>
    </div>
    <div class="pagination">
     <button>
      <i class="fas fa-chevron-left">
      </i>
     </button>
     <button>1</button>
     <button>2</button>
     <button>
      <a href="flowers2.php"><i class="fas fa-chevron-right"></i></a>
     </button>
    </div>
   </main>
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
      <p>
       Email: stemsandpetals@company.com
      </p>
      <p>
       Phone: +38348704274
      </p>
      <div>
       <a href="#">
        <i class="fab fa-facebook-f">
        </i>
       </a>
       <a href="#">
        <i class="fab fa-twitter">
        </i>
       </a>
       <a href="#">
        <i class="fab fa-instagram">
        </i>
       </a>
       <a href="#">
        <i class="fab fa-linkedin-in">
        </i>
       </a>
      </div>
     </div>
    </div>
    <div class="footer-bottom">
     <p>
      Dorearta & Ela All Rights Reserved @ 
     </p>
     