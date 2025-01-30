<?php 
include_once 'UserRepository.php';
include_once 'user.php';

if (isset($_POST['signupbutton'])) {
    if (empty($_POST['email']) || empty($_POST['password']) || empty($_POST['username']) || empty($_POST['confirm-password'])) {
        echo "Fill all fields!";
    } else {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirmPassword = $_POST['confirm-password'];
        $username = $_POST['username'];

        if ($password !== $confirmPassword) {
            echo "Passwords do not match!";
        } else {
            $user = new User(null, $email, $password, $username);
            $userRepository = new UserRepository();
            $userRepository->insertUser($user);

            echo "<script>alert('Registration successful!'); window.location.href='login.php';</script>";
        }
    }
}
?>