<?php
session_start();

if (!isset($_SESSION['user_type']) || $_SESSION['user_type'] !== 'user') {
    header('Location: ../auth/login.php');
    exit;
}

$user_name = $_SESSION['user_name'] ?? 'User';
?>

<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Dashboard User</title>

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

.user-badge {
    background: #ff4b7d;
    color: white;
    padding: 8px 15px;
    border-radius: 20px;
}

/* CONTAINER */
.container {
    padding: 40px;
}

h1 {
    font-size: 40px;
}

.sub {
    color: #666;
}

/* TABS */
.tabs {
    margin-top: 20px;
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
    transition: 0.3s;
}

.card:hover {
    transform: translateY(-5px);
}

/* ORDER BOX */
.order-box {
    margin-top: 30px;
    background: white;
    padding: 20px;
    border-radius: 15px;
}

.order-item {
    display: flex;
    align-items: center;
    gap: 15px;
    background: #fbeff2;
    padding: 15px;
    border-radius: 15px;
}

.order-item img {
    width: 60px;
    border-radius: 10px;
}

.price {
    margin-left: auto;
    color: #e91e63;
    font-weight: bold;
}

.status {
    margin-left: 10px;
    background: #cce5ff;
    padding: 5px 10px;
    border-radius: 15px;
}
</style>
</head>

<body>

<!-- HEADER -->
<div class="header">
    <div class="logo">🌸 Blossom Heaven</div>
    <div class="nav">
        <a href="../index.php">🏠 Beranda</a>
        <a href="../catalog.php">🛍️ Katalog</a>
        <span class="user-badge"><?= $user_name ?></span>
        <a href="../auth/logout.php">⎋</a>
    </div>
</div>

<!-- CONTENT -->
<div class="container">
    <h1>Dashboard Saya</h1>
    <p class="sub">Kelola pesanan dan wishlist bunga favorit Anda</p>

    <!-- TABS -->
    <div class="tabs">
        <a class="active">Ringkasan</a>
        <a>Riwayat Pembelian</a>
        <a>Wishlist</a>
        <a>Tracking Status</a>
    </div>

    <!-- CARDS -->
    <div class="cards">
        <div class="card">
            ⏰ Pesanan Diproses
            <h2>1</h2>
            <small>Sedang dalam pengiriman</small>
        </div>

        <div class="card">
            ✅ Pesanan Selesai
            <h2>1</h2>
            <small>Bulan ini</small>
        </div>

        <div class="card">
            ❤️ Wishlist
            <h2>3</h2>
            <small>Bunga favorit</small>
        </div>
    </div>

    <!-- ORDER -->
    <div class="order-box">
        <h3>Pesanan Terbaru</h3>

        <div class="order-item">
            <img src="https://images.unsplash.com/photo-1522075469751-3a6694fb2f61" alt="">
            <div>
                <b>Forever Only Love</b><br>
                <small>#ORD-2026-001</small><br>
                <small>24 Mar 2026</small>
            </div>

            <div class="price">Rp 135.000</div>
            <div class="status">Dalam Pengiriman</div>
        </div>

    </div>

</div>

</body>
</html>