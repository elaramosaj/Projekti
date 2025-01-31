<?php
include_once 'SessionManager.php';

$session = new SessionManager();
$session->destroy();

header("Location: login.php");
exit;

?>