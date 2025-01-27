<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Stems & Petals</title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Lora:wght@400;700&display=swap" rel="stylesheet"/>
  <link rel="stylesheet" href="faqja3.css">
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
  <div class="container">
    <div class="image-section">
      <img alt="A beautiful bouquet of mixed flowers in a glass vase" height="500" src="https://torontoblooms.ca/cdn/shop/products/DSC6619_6693b9fc-fcc6-4630-820f-0134a531c728_2000x.jpg?v=1696436205" width="500"/>
    </div>
    <div class="details-section">
      <h1>Garden Roses</h1>
      <div class="price"> $39</div>
      <div class="size-options">
        <button>Small $39</button>
        <button class="active">Medium $48</button>
        <button>Large $57</button>
      </div>
      <div class="delivery-info">
        <label for="zip-code">Where would you like to send this item?</label>
        <input id="zip-code" placeholder="Delivery Zip Code" type="text"/>
        <label for="delivery-date">Select a delivery date</label> <br>
        <div class="calendar-icon">
          <input id="delivery-date" type="date"/>
          <i class="fas fa-calendar-alt"></i>
        </div>
      </div>
      <a href="cart.php"><div class="add-to-cart">ADD TO CART - $39</div></a>
    </div>
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
      <p>Dorearta & Ela All Rights Reserved @ </p>
    </div>
  </footer>
</body>
</html>