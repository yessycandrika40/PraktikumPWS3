<?php
session_start();

//Proteksi Halaman: Cek apakah session aktif
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <tittle>Dashboard Inventaris</title>
</head>
<body>
    <h1>Selamat Datang, <?= htmlspecialchars($_SESSION['username']) ?>!</h1>
    <p>Role Anda: <strong><?= htmlspecialchars($_SESSION['role']) ?></strong></p>

    <hr>
    <ul>
        <li><a href="update_stock.php">Update Stok Alat Lab</a></li>
        <li><a href="api_alat.php" target="_blank">Lihat Output API (JSON)</a></li>
        <li><a href="logout.php">Logout</a></li>
    </ul>
</body>
</html>