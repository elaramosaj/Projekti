<?php
include_once 'UserRepository.php';
include_once 'Database.php';
include_once 'SessionManager.php';

class UserLogin {
    private $userRepo;
    private $session;

    public function __construct(UserRepository $userRepo, SessionManager $session) {
        $this->userRepo = $userRepo;
        $this->session = $session;
    }

    public function authenticate($username, $password) {
        $user = $this->userRepo->getUserByUsername($username);

        if ($user && password_verify($password, $user->getPassword())) {
            $this->session->set('username', $user->getUsername());
            $this->session->set('role', $user->getRole());
            session_regenerate_id(true);

            return $user->getRole();
        }
        return false;
    }
}

$db = Database::getInstance()->getConnection();
$userRepo = new UserRepository($db);
$session = new SessionManager();
$login = new UserLogin($userRepo, $session);

