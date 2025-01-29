<?php
include 'databaza.php'; 
session_start();

if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flower Shop Checkout</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&family=Nunito+Sans:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="checkout.css">
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
        <a href="cart.php"><i class="fas fa-shopping-cart"></i></a>
            &nbsp;&nbsp;&nbsp;&nbsp;
        
            <?php 
            if (isset($_SESSION['username'])): ?>
                <a href="profile.php"><i class="fas fa-user"></i> <?php echo $_SESSION['username']; ?></a>
                <a href="cart.php?logout=true" class="logout-btn">Logout</a>
            <?php else: ?> <a href="login.php"><i class="fas fa-user"></i> Login</a>  <?php endif;
             ?>
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
        <h1>Checkout</h1>
        <form id="checkout-form">
            <div class="form-group">
                <label for="name">Full Name</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="address">Shipping Address</label>
                <input type="text" id="address" name="address" required>
            </div>
            <div class="form-group">
                <label for="city">City</label>
                <input type="text" id="city" name="city" required>
            </div>
            <div class="form-group">
                <label for="state">State</label>
                <input type="text" id="state" name="state" required>
            </div>
            <div class="form-group">
                <label for="zip">Zip Code</label>
                <input type="text" id="zip" name="zip" required>
            </div>
            
            <div class="form-group">
                <label for="card">Credit Card Number</label>
                <input type="text" id="card" name="card" required>
            </div>
            <div class="form-group">
                <label for="exp">Expiration Date</label>
                <input type="text" id="exp" name="exp" required>
            </div>
            <div class="form-group">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" required>
            </div>
            <div class="form-group">
                <input type="checkbox" id="terms" name="terms" required>
                <label for="terms" class="checkbox-label">I agree to the terms and conditions</label>
            </div>
            <button type="submit" class="btn">Place Order</button>
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
            <p>Dorearta & Ela All Rights Reserved @</p>
        </div>
    </footer>
    <div class="overlay"></div>
    <div class="order-confirmation">
        <h2>Order Confirmed!</h2>
        <p>Your order has been placed successfully.</p>
        <p>Thank you for purchasing from Stems & Petals. Your setup is complete and your order will be processed shortly.</p>
        <button class="btn" onclick="closeConfirmation()">Close</button>
    </div>
    <script>
        document.getElementById('checkout-form').addEventListener('submit', function(event) {
            event.preventDefault();
            document.querySelector('.overlay').style.display = 'block';
            document.querySelector('.order-confirmation').style.display = 'block';
        });

        function closeConfirmation() {
            document.querySelector('.overlay').style.display = 'none';
            document.querySelector('.order-confirmation').style.display = 'none';
        }
    </script>
</body>
</html>