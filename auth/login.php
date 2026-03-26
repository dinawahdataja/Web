<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';

    if ($email === 'admin@blossom.com' && $password === 'admin123') {
        $_SESSION['user_type'] = 'admin';
        $_SESSION['user_name'] = 'Admin';
        header('Location: ../admin/dashboard.php');
        exit;
    } elseif ($email === 'user@blossom.com' && $password === 'user123') {
        $_SESSION['user_type'] = 'user';
        $_SESSION['user_name'] = 'User';
        header('Location: ../user/userdashboard.php');
        exit;
    } else {
        $error = "Email atau password salah!";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Login</title>

<link href="https://fonts.googleapis.com/css2?family=Playfair+Display&family=Poppins&display=swap" rel="stylesheet">

<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

body {
    display: flex;
    height: 100vh;
}

/* LEFT SIDE */
.left {
    width: 50%;
    background: #f5e9eb;
    padding: 60px;
}

.left h1 {
    font-family: 'Playfair Display', serif;
    font-size: 50px;
}

.left span {
    color: crimson;
    font-style: italic;
}

.left p {
    margin-top: 20px;
    color: #555;
}

.left img {
    margin-top: 40px;
    width: 100%;
    border-radius: 20px;
}

/* RIGHT SIDE */
.right {
    width: 50%;
    display: flex;
    justify-content: center;
    align-items: center;
}

.form-box {
    width: 350px;
}

.form-box h2 {
    font-family: 'Playfair Display', serif;
    margin-bottom: 10px;
}

.form-box p {
    margin-bottom: 20px;
    color: #777;
}

.input-group {
    margin-bottom: 15px;
}

.input-group input {
    width: 100%;
    padding: 12px;
    border-radius: 10px;
    border: 1px solid #ccc;
}

button {
    width: 100%;
    padding: 12px;
    border: none;
    background: crimson;
    color: white;
    border-radius: 10px;
    cursor: pointer;
    font-weight: bold;
}

button:hover {
    background: darkred;
}

.error {
    color: red;
    margin-bottom: 10px;
}
</style>
</head>

<body>

<!-- LEFT -->
<div class="left">
    <h1>Welcome to <br><span>Blossom Heaven</span></h1>
    <p>Masuk untuk melihat koleksi bunga segar kami dan kelola pesanan Anda</p>

    <img src="https://images.unsplash.com/photo-1563241527-3004b7be0ffd" alt="">
</div>

<!-- RIGHT -->
<div class="right">
    <div class="form-box">
        <h2>Selamat Datang Kembali</h2>
        <p>Masuk ke akun Anda</p>

        <?php if(isset($error)): ?>
            <div class="error"><?= $error ?></div>
        <?php endif; ?>

        <form method="POST">
            <div class="input-group">
                <input type="email" name="email" placeholder="Email" required>
            </div>

            <div class="input-group">
                <input type="password" name="password" placeholder="Password" required>
            </div>

            <button type="submit">Masuk</button>
        </form>

        <br>
        <a href="../index.php">← Kembali ke Beranda</a>
    </div>
</div>

</body>
</html