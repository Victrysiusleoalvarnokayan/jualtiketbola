<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
}
echo "Selamat datang, " . $_SESSION['user'];
?>

<a href="logout.php">Logout</a>
hvvjbj