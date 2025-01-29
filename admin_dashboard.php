<?php
include('databaza.php');

session_start();

if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("Location: login.php");
    exit;
}


if (isset($_POST['add_product'])) {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $image_url = $_POST['image_url'];

    $sql = "INSERT INTO products (name, price, image_url) 
            VALUES ('$name', '$price', '$image_url')";
    
    if ($conn->query($sql) === TRUE) {
        echo "New product added successfully.";
    } else {
        echo "Error: " . $conn->error;
    }
}

if (isset($_POST['update_product'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $image_url = $_POST['image_url'];

    $sql = "UPDATE products SET name='$name', price='$price', image_url='$image_url' WHERE id=$id";
    
    if ($conn->query($sql) === TRUE) {
        echo "Product updated successfully.";
    } else {
        echo "Error: " . $conn->error;
    }
}

if (isset($_GET['delete_id'])) {
    $id = $_GET['delete_id'];

    $sql = "DELETE FROM products WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Product deleted successfully.";
    } else {
        echo "Error: " . $conn->error;
    }
}

$sql = "SELECT * FROM products";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Lora:wght@400;700&display=swap" rel="stylesheet"/>
    <link rel="stylesheet" href="faqja1.css">
    <link rel="stylesheet" href="admin_dashboard.css">

</head>
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
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <!--Hapsira mes ikonave--> <a href="profile.php"><i class="fas fa-user"></i></a>
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

  <div class="BigButton">
    <?php if (isset($_SESSION['username'])): ?>
        <a href="faqja1.php?logout=true" class="LogButton">Logout</a>
    <?php else: ?>
        <a href="Login.php" class="LogButton">Login</a>
    <?php endif; ?>
  </div>
    <h1>Admin Dashboard</h1>

    <h2>Add New Product</h2>
    <form method="POST">
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" required><br><br>
        
        <label for="price">Price:</label><br>
        <input type="number" id="price" name="price" step="0.01" required><br><br>

        <label for="image_url">Image URL:</label><br>
        <input type="text" id="image_url" name="image_url" required><br><br>

        <button type="submit" name="add_product">Add Product</button>
    </form>

    <h2>Product List</h2>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Price</th>
                <th>Image</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>" . $row['id'] . "</td>
                            <td>" . $row['name'] . "</td>
                            <td>" . $row['price'] . "</td>
                            <td><img src='" . $row['image_url'] . "' width='100'></td>
                            <td>
                                <!-- Update Form -->
                                <form method='POST' style='display:inline;'>
                                    <input type='hidden' name='id' value='" . $row['id'] . "'>
                                    <input type='text' name='name' value='" . $row['name'] . "' required>
                                    <input type='number' name='price' value='" . $row['price'] . "' required>
                                    <input type='text' name='image_url' value='" . $row['image_url'] . "' required>
                                    <button type='submit' name='update_product'>Update</button>
                                </form>
                                
                                <!-- Delete Link -->
                                <a href='admin_dashboard.php?delete_id=" . $row['id'] . "' onclick='return confirm(\"Are you sure you want to delete?\")'>Delete</a>
                            </td>
                        </tr>";
                }
            } else {
                echo "<tr><td colspan='5'>No products found</td></tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>
