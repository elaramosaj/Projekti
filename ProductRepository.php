<?php
include_once 'Product.php';

class ProductRepository {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function getAllProducts() {
        $stmt = $this->db->query("SELECT * FROM products");
        return $stmt->fetch_all(MYSQLI_ASSOC);
    }
}
?>
