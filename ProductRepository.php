<?php
class ProductRepository {
    private $conn;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function getAllProducts($category = null) {
        $sql = "SELECT * FROM products";
        
        if ($category) {
            $sql .= " WHERE category = ?";
        }

        $stmt = $this->conn->prepare($sql);

        if ($category) {
            $stmt->bind_param("s", $category);
        }

        $stmt->execute();
        $result = $stmt->get_result();
        
        $products = [];
        while ($row = $result->fetch_assoc()) {
            $products[] = $row;
        }

        $stmt->close();
        return $products;
    }
}
