<?php
session_start();
include 'databaza.php';

session_start();

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
    <title>Profile - <?php echo htmlspecialchars($user['username']); ?></title>
    <link rel="stylesheet" href="styles.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>
<body>

<header>
    <div class="logo">
        <span>Stems & <span class="highlight">Petals</span></span>
    </div>

    <div class="user-info">
        <a href="cart.php"><i class="fas fa-shopping-cart"></i></a>
        &nbsp;&nbsp;&nbsp;&nbsp;
        <a href="profili.php"><i class="fas fa-user"></i> <?php echo htmlspecialchars($user['username']); ?></a>
        <a href="profili.php?logout=true" class="logout-btn">Logout</a>
    </div>
</header>

<main>
    <div class="profile-container">
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
