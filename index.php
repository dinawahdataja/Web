<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blossom Heaven - Toko Bunga Online</title>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!-- Floating Flowers Animation -->
    <div class="floating-flowers" id="floatingFlowers"></div>

    <!-- Header -->
    <header class="header">
        <div class="container">
            <div class="header-content">
                <div class="logo">
                    <span class="logo-icon">🌹</span>
                    <h1>Blossom Heaven</h1>
                </div>
                <nav class="nav">
                    <a href="catalog.php">Katalog</a>
                    <a href="auth/login.php">Login</a>
                </nav>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <main class="hero">
        <div class="container">
            <div class="hero-grid">
                <div class="hero-text">
                    <p class="hero-subtitle">Florist Terbaik</p>
                    <h2 class="hero-title">
                        Fresh Your Mind<br>& Feeling Love
                    </h2>
                    <p class="hero-description">
                       
                    </p>
                    <div class="hero-buttons">
                        <a href="catalog.php" class="btn btn-primary">
                            🛒 Belanja Sekarang
                        </a>
                        <a href="catalog.php" class="btn btn-outline">
                            Lihat Koleksi
                        </a>
                    </div>

                    <!-- Features -->
                    <div class="features-grid">
                        <div class="feature-item">
                            <div class="feature-icon">⭐</div>
                            <div>
                                <h3>100% Fresh Guarantee</h3>
                                <p>Bunga segar setiap hari</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <div class="feature-icon">💌</div>
                            <div>
                                <h3>Custom Note Card</h3>
                                <p>Pesan khusus untuk orang tersayang</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="hero-image">
                    <div class="image-wrapper">
                        <img src="images/buket bunga.jpg" alt="Beautiful Flower Bouquet">
                        <div class="floating-emoji">💐</div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Featured Products -->
    <section class="featured-products">
        <div class="container">
            <h3 class="section-title">Koleksi Terpopuler</h3>
            <div class="products-grid">
                <?php
                $products = [
                    [
                        'name' => 'Forever Only Love',
                        'price' => 'Rp 135.000',
                        'image' => 'images/buket 1.jpg',
                        'rating' => 5
                    ],
                    [
                        'name' => 'Pink roses and white lilys',
                        'price' => 'Rp 142.000',
                        'image' => 'images/buket 2.jpg',
                        'rating' => 5
                    ],
                    [
                        'name' => 'Chamomile Spring Bouquet',
                        'price' => 'Rp 142.000',
                        'image' => 'images/buket 3.jpg',
                        'rating' => 5
                    ],
                    [
                        'name' => 'Rylie Bouquet',
                        'price' => 'Rp 130.000',
                        'image' => 'images/buket 4.jpg',
                        'rating' => 5
                    ]
                ];

                foreach ($products as $product): ?>
                    <div class="product-card">
                        <div class="product-image">
                            <img src="<?= $product['image'] ?>" alt="<?= $product['name'] ?>">
                            <button class="wishlist-btn">❤️</button>
                        </div>
                        <div class="product-rating">
                            <?php for ($i = 0; $i < $product['rating']; $i++): ?>
                                ⭐
                            <?php endfor; ?>
                        </div>
                        <h4><?= $product['name'] ?></h4>
                        <p class="product-price"><?= $product['price'] ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <p class="footer-brand">Blossom Heaven</p>
            <p>© 2026 Blossom Heaven. All rights reserved.</p>
        </div>
    </footer>

    <script src="js/script.js"></script>
</body>
</html>
