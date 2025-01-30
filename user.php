<?php
class User {
    private $id;
    private $email;
    private $password;
    private $username;
    private $role; 

    public function __construct($id, $email, $password, $username, $role) {
        $this->id = $id;
        $this->email = $email;
        $this->password = $password;
        $this->username = $username;
        $this->role = $role;
    }

    public function getId() {
        return $this->id;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getPassword() {
        return $this->password;
    }

    public function getUsername() {
        return $this->username;
    }

    public function getRole() {
        return $this->role;
    }
}
?>
