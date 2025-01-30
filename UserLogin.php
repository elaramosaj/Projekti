<?php
include_once 'UserRepository.php';

class UserLogin {
    private $userRepo;

    public function __construct() {
        $this->userRepo = new UserRepository();
    }

    public function authenticate($username, $password) {
        $user = $this->userRepo->getUserByUsername($username);

        if ($user && password_verify($password, $user->getPassword())) {
            if (session_status() === PHP_SESSION_NONE) { // ✅ Check if session is already started
                session_start();
            }
            $_SESSION['username'] = $user->getUsername();
            $_SESSION['role'] = $user->getRole(); // 🔴 This causes error if `getRole()` is missing
            session_regenerate_id(true);

            return $user->getRole(); // Returns 'admin' or 'user'
        }
        return false;
    }
}
?>
