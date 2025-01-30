<?php
class User {
    private $id;
    private $email;
    private $password;
    private $username;

    public function __construct($id, $email, $password, $username) {
        $this->id = $id;
        $this->email = $email;
        $this->password = $password;
        $this->username = $username;
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
}
?>
