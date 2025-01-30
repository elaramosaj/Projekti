<?php
include_once 'Database.php';
include_once 'User.php';

class UserRepository {
    private $conn;

    public function __construct() {
        $this->conn = Database::getInstance()->getConnection();
    }

    public function getUserByUsername($username) {
        $sql = "SELECT id, email, password, username, role FROM users WHERE username = ?";
        $stmt = $this->conn->prepare($sql);

        if ($stmt) {
            $stmt->bind_param("s", $username);
            $stmt->execute();
            $stmt->store_result();

            if ($stmt->num_rows > 0) {
                $stmt->bind_result($id, $email, $hashedPassword, $username, $role);
                $stmt->fetch();
                return new User($id, $email, $hashedPassword, $username, $role);
            }
        }
        return null; // No user found
    }
}
?>
