<?php
require_once __DIR__ . '/config/config.php';
header("Location: " . BASE_URL . (isset($_SESSION['user_id']) ? "/modules/dashboard" : "/modules/auth/login.php"));
exit;
?>