<?php
session_start();

if (!isset($_SESSION['user_type']) || $_SESSION['user_type'] !== 'admin') {
    header('Location: ../auth/login.php');
    exit;
}

$user_name = $_SESSION['user_name'] ?? 'Admin';
?>

<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Dashboard Admin</title>

<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@600&family=Playfair+Display:wght@400;600&display=swap" rel="stylesheet">

<style>
body {
    margin: 0;
    font-family: 'Playfair Display', serif;
    background: linear-gradient(135deg,#f8e1e7,#fbeff2);
}

/* HEADER */
.header {
    display: flex;
    justify-content: space-between;
    padding: 20px 40px;
    background: rgba(255,255,255,0.7);
    backdrop-filter: blur(10px);
}

.logo {
    font-family: 'Dancing Script', cursive;
    font-size: 28px;
    color: #e91e63;
}

/* NAV */
.nav a {
    margin-left: 15px;
    text-decoration: none;
    color: black;
}

.btn-admin {
    background: #ff4b7d;
    color: white;
    padding: 8px 15px;
    border-radius: 20px;
}

/* TITLE */
.container {
    padding: 40px;
}

h1 {
    font-size: 40px;
}

.sub {
    color: #666;
}

/* CARDS */
.cards {
    display: flex;
    gap: 20px;
    margin-top: 20px;
}

.card {
    flex: 1;
    background: white;
    padding: 20px;
    border-radius: 15px;
    box-shadow: 0 10px 20px rgba(0,0,0,0.05);
}

/* TABS */
.tabs {
    margin-top: 30px;
    display: flex;
    gap: 30px;
}

.tabs a {
    text-decoration: none;
    color: #555;
}

.tabs .active {
    color: #e91e63;
    border-bottom: 2px solid #e91e63;
}

/* TABLE */
.table-box {
    margin-top: 30px;
    background: white;
    padding: 20px;
    border-radius: 15px;
}

table {
    width: 100%;
    border-collapse: collapse;
}

td, th {
    padding: 15px;
    border-bottom: 1px solid #eee;
}

/* BUTTON */
.btn-add {
    float: right;
    background: #ff4b7d;
    color: white;
    padding: 10px 20px;
    border-radius: 20px;
    border: none;
}

/* BADGE */
.badge {
    padding: 5px 10px;
    border-radius: 15px;
    font-size: 12px;
}

.green { background: #c8f7d2; }
.yellow { background: #fff3c4; }
.red { background: #ffd6d6; }
</style>
</head>

<body>

<!-- HEADER -->
<div class="header">
    <div class="logo">🌷 Blossom Heaven Admin</div>
    <div class="nav">
        <a href="../index.php">🏠 Beranda</a>
        <span class="btn-admin"><?= $user_name ?></span>
        <a href="../auth/logout.php">⎋</a>
    </div>
</div>

<!-- CONTENT -->
<div class="container">
    <h1>Dashboard Admin</h1>
    <p class="sub">Kelola toko bunga Anda</p>

    <!-- CARDS -->
    <div class="cards">
        <div class="card">📦 Total Produk <h2>4</h2></div>
        <div class="card">🛍️ Pesanan <h2>3</h2></div>
        <div class="card">👥 User <h2>4</h2></div>
        <div class="card">⏰ Pending <h2>2</h2></div>
    </div>

    <!-- TABS -->
    <div class="tabs">
        <a href="#" class="active">Manajemen Stok</a>
        <a href="#">Daftar Pesanan</a>
        <a href="#">Manajemen User</a>
    </div>

    <!-- TABLE -->
    <div class="table-box">
        <h3>Stok Bunga</h3>
        <button class="btn-add">+ Tambah Produk</button>

        <table>
            <tr>
                <th>Produk</th>
                <th>Kategori</th>
                <th>Harga</th>
                <th>Stok</th>
            </tr>

            <tr>
                <td>Forever Only Love</td>
                <td>Bouquet</td>
                <td>Rp 135.000</td>
                <td><span class="badge green">25 unit</span></td>
            </tr>

            <tr>
                <td>Pink roses and white lilys</td>
                <td>Single</td>
                <td>Rp 142.000</td>
                <td><span class="badge green">18 unit</span></td>
            </tr>

            <tr>
                <td>Chamomile Spring Bouquet</td>
                <td>Bouquet</td>
                <td>Rp 142.000</td>
                <td><span class="badge yellow">12 unit</span></td>
            </tr>

            <tr>
                <td>Rylie Bouquet</td>
                <td>Single</td>
                <td>Rp 130.000</td>
                <td><span class="badge red">8 unit</span></td>
            </tr>
        </table>
    </div>

</div>

</body>
</html>