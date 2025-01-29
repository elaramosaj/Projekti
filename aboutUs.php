<html lang="en">
 <head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
  <title>
   About Us - Stems &amp; Petals
  </title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Lora:wght@400;700&amp;display=swap" rel="stylesheet"/>
 <link rel="stylesheet" href="AboutUs.css">
 </head>
 <body>
  <header>
   <div class="logo">
    <span>
     Stems &amp;
     <span class="highlight">
      Petals
     </span>
    </span>
   </div>
   <div class="search-bar">
    <input placeholder="Search our store" type="text"/>
    <button>
     <i class="fas fa-search">
     </i>
    </button>
   </div>
   <div class="user-info">
    <a href="cart.php"><i class="fas fa-shopping-cart"></i> </a>
  </a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <!--Haprisa mes ikonave--> <a href="profile.php">
   <i class="fas fa-user">
   </i>
  </a>
  </div>
  </header>
  <nav class="nav-bar">
   <ul>
    <a class="green" href="faqja1.php">
     Home
    </a>
    <a class="pink" href="flowers.php">
     Flowers
    </a>
    <a class="pink" href="aboutUs.php">
     About us
    </a>
    <a class="green" href="login.php" id="login-button">
     Log in
    </a>
   </ul>
  </nav>

  <div class="BigButt">
    <?php if (isset($_SESSION['username'])): ?>
        <a href="faqja1.php?logout=true" class="LogButt">Logout</a>
    <?php else: ?>
        <a href="Login.php" class="LogButt">Login</a>
    <?php endif; ?>
  </div>

  <div class="container">
   <div class="header">
    <h1>
     About Us
    </h1>
    <p>
     Welcome to Stems &amp; Petals, the best.
    </p>
   </div>
   <div class="content">
    <img alt="A beautiful arrangement of various colorful flowers in a rustic setting" src="https://floranext.com/wp-content/uploads/2023/03/iStock-603859820-1024x681.jpg"/>
    <div>
     <p>
      We're dedicated to providing you the very best of floral arrangements, customer service, and uniqueness.
     </p>
     <p>
      Founded in 2020 by Dorearta &amp; Ela, Stems &amp; Petals has come a long way from its beginnings in a small garage. When Dorearta &amp; Ela first started out, their passion for eco-friendly and locally sourced flowers drove them to start their own business.
     </p>
     <p>
      We hope you enjoy our products as much as we enjoy offering them to you. If you have any questions or comments, please don't hesitate to contact us.
     </p>
    </div>
   </div>
   <div class="journey">
    <h2>
     Our Journey
    </h2>
    <div class="story">
     <img alt="Dorearta and Ela working in their small garage surrounded by flowers and gardening tools" src="https://img.freepik.com/premium-photo/flower-shop-with-variety-colorful-blooms-including-tulips-daffodils_124507-140392.jpg"/>
     <div>
      <p>
       It all started in the spring of 2020. Dorearta and Ela, two lifelong friends with a shared passion for flowers, decided to turn their dream into reality. They began by growing flowers in Dorearta's small garage, experimenting with different arrangements and styles.
      </p>
      <p>
       Their first big break came when they were asked to provide floral arrangements for a local wedding. The feedback was overwhelmingly positive, and word quickly spread about their unique and eco-friendly designs. This initial success gave them the confidence to officially launch Stems &amp; Petals.
      </p>
     </div>
    </div>
    <div class="story">
     <img alt="A bustling flower shop with customers browsing and purchasing floral arrangements" src="https://media.timeout.com/images/100639381/750/422/image.jpg"/>
     <div>
      <p>
       As their reputation grew, so did their business. They moved from the garage to a small storefront in the heart of the city. The new location allowed them to reach a wider audience and offer a greater variety of flowers and arrangements.
      </p>
      <p>
       Despite the challenges of running a small business, Dorearta and Ela remained committed to their core values: sustainability, quality, and customer satisfaction. They sourced their flowers from local growers and used eco-friendly packaging, ensuring that every bouquet was as kind to the planet as it was beautiful.
      </p>
     </div>
    </div>
    <div class="story">
     <img alt="Dorearta and Ela smiling and holding a large bouquet of flowers in front of their shop" src="https://img.freepik.com/premium-photo/background-image-beautiful-flowers-table-flower-shop-with-two-unrecognizable-florists-arranging-bouquets-copy-space_236854-29717.jpg"/>
     <div>
      <p>
       Today, Stems &amp; Petals is a beloved part of the community. Dorearta and Ela continue to innovate and expand their offerings, always staying true to their mission of providing beautiful, sustainable floral arrangements. They are grateful for the support of their customers and look forward to many more years of bringing joy through flowers.
      </p>
     </div>
    </div>
   </div>
   <div class="signature">
    <p>
     Sincerely,
    </p>
    <p>
     Dorearta &amp; Ela
    </p>
   </div>
  </div>
  <footer>
   <div class="footer-links">
    <div>
     <h4>
      My Account
     </h4>
     <a href="#">
      My account
     </a>
     <a href="#">
      Checkout
     </a>
     <a href="#">
      Cart
     </a>
     <a href="#">
      Wishlist
     </a>
     <a href="#">
      Shopping Cart
     </a>
    </div>
    <div>
     <h4>
      Quick Links
     </h4>
     <a href="#">
      Store Location
     </a>
     <a href="#">
      Order Tracking
     </a>
     <a href="#">
      Size Guide
     </a>
     <a href="#">
      FAQs
     </a>
     <a href="#">
      Help
     </a>
    </div>
    <div>
     <h4>
      Information
     </h4>
     <a href="#">
      Privacy Policy
     </a>
     <a href="#">
      Terms &amp; Conditions
     </a>
     <a href="#">
      Return Policy
     </a>
     <a href="#">
      Shipping Policy
     </a>
     <a href="#">
      Contact Us
     </a>
    </div>
    <div>
     <h4>
      Company
     </h4>
     <a href="#">
      About Us
     </a>
     <a href="#">
      Careers
     </a>
     <a href="#">
      Press
     </a>
     <a href="#">
      Affiliates
     </a>
     <a href="#">
      Blog
     </a>
    </div>
    <div>
     <h4>
      About Our Shop
     </h4>
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
     Dorearta &amp; Ela All Rights Reserved
    </p>
   </div>
  </footer>
 </body>
</html>