<?php
session_start();

// check session user
if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}

$name = $_SESSION['name'];
?>

<h2>Selamat datang, <?= htmlspecialchars($name) ?>!</h2>
<p>Ini adalah halaman dashboard.</p>