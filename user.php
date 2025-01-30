<?php
class User {
    private $conn;
    private $table_name = 'users';
    
    public function __construct($db) {
        $this->conn = $db;
    }

    public function register($username, $email, $password) {
        $query = "INSERT INTO {$this->table_name} (username, email, password, role) VALUES (:username, :email, :password, :role)";
        $stmt = $this->conn->prepare($query);
        
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        $role = 'user';
        
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $hashed_password);
        $stmt->bindParam(':role', $role);
        
        return $stmt->execute();
    }

    public function login($email, $password) {
        $query = "SELECT id, username, email, password, role FROM {$this->table_name} WHERE email = :email";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        
        if ($stmt->rowCount() > 0) {
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            if (password_verify($password, $row['password'])) {
                session_start();
                $_SESSION['user_id'] = $row['id'];
                $_SESSION['username'] = $row['username'];
                $_SESSION['email'] = $row['email'];
                $_SESSION['role'] = $row['role'];
                return true;
            }
        }
        return false;
    }
}
