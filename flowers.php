<?php
session_start(); 
include('databaza.php');

if (isset($_GET['logout']) && $_GET['logout'] == 'true') {
    session_unset();
    session_destroy(); 
    header("Location: faqja1.php"); 
    exit();
}


if (!isset($_SESSION['username'])) {
    header("Location: Login.php"); 
    exit();
}

$sql = "SELECT * FROM products";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
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
                <i class="fas fa-search"></i>
            </button>
        </div>
        <div class="user-info">
    <a href="cart.php"><i class="fas fa-shopping-cart"></i> </a>
   <a href="profili.php"><i class="fas fa-user"></i></a>
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
        <?php if ($_SESSION['role'] == 'admin'): ?>
        <a href="admin_dashboard.php" class="green">Dashboard</a>
        <?php endif; ?>
    </ul>
</nav>


    <div class="container">
        <main class="main-content">
            <div class="top-bar">
                <div class="view-options">
                    <button>
                        <i class="fas fa-th"></i>
                    </button>
                    <button>
                        <i class="fas fa-list"></i>
                    </button>
                </div>
                <div class="result-count">Showing <?php echo $result->num_rows; ?> result(s)</div>
            </div>

            <div class="product-grid">
                <?php
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<div class='product-card'>
                                <img alt='flower' height='300' src='" . $row['image_url'] . "' width='225'/>
                                <div class='product-info'>
                                    <a href='product_details.php?id=" . $row['id'] . "'>" . $row['name'] . "</a>
                                    <p class='price'>$" . $row['price'] . "</p>
                                </div>
                              </div>";
                    }
                } else {
                    echo "<p>No products found</p>";
                }
                ?>
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
