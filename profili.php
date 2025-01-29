<?php
session_start();
include 'databaza.php';

if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("Location: login.php");
    exit;
}

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

$username = $_SESSION['username'];
$sql = "SELECT * FROM users WHERE username = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $username);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();
} else {
    echo "User not found.";
    exit();
}

$stmt->close();
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>profili - <?php echo htmlspecialchars($user['username']); ?></title>
    <link rel="stylesheet" href="styles.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Lora:wght@400;700&display=swap" rel="stylesheet"/>
    <link rel="stylesheet" href="profili.css">
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
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <!--Hapsira mes ikonave--> 
   <a href="profili.php"><i class="fas fa-user"></i></a>
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <!--Hapsira mes ikonave--> 
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
</header>

<main>
    <div class="profili-container">
        <h1>Welcome, <?php echo htmlspecialchars($user['username']); ?></h1>
        <p><strong>Email:</strong> <?php echo htmlspecialchars($user['email']); ?></p>
        <p><strong>Username:</strong> <?php echo htmlspecialchars($user['username']); ?></p>
        <p><strong>Joined on:</strong> <?php echo date("F j, Y", strtotime($user['created_at'])); ?></p>
    </div>
</main>

<?php
if (isset($_GET['logout']) && $_GET['logout'] == "true") {
    session_destroy();
    header("Location: login.php");
    exit();
}
?>

</body>
</html>
