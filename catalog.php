<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Katalog Bunga - Blossom Heaven</title>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!-- Header -->
    <header class="header sticky">
        <div class="container">
            <div class="header-content">
                <div class="logo">
                    <span class="logo-icon">🌹</span>
                    <h1>Blossom Heaven</h1>
                </div>
                <nav class="nav">
                    <a href="index.php">🏠 Beranda</a>
                    <a href="#" class="cart-icon">
                        ❤️
                        <span class="cart-badge">0</span>
                    </a>
                    <a href="#" class="cart-icon">
                        🛒
                    </a>
                    <a href="login.php" class="btn-login">Login</a>
                </nav>
            </div>
        </div>
    </header>

    <div class="catalog-container">
        <div class="container">
            <!-- Hero -->
            <div class="catalog-hero">
                <h2 class="section-title large">Katalog Bunga Segar</h2>
                <p class="catalog-subtitle">Pilih bunga favorit Anda dan tambahkan pesan khusus untuk orang tersayang</p>
            </div>

            <!-- Category Filter -->
            <div class="category-filter">
                <button class="filter-btn active" onclick="filterCategory('all')">Semua</button>
                <button class="filter-btn" onclick="filterCategory('bouquet')">Bouquet</button>
                <button class="filter-btn" onclick="filterCategory('single')">Single Stem</button>
                <button class="filter-btn" onclick="filterCategory('arrangement')">Arrangement</button>
            </div>

            <!-- Products Grid -->
            <div class="products-grid products-grid-4">
                <?php
                $products = [
                    [
                        'id' => 1,
                        'name' => 'Forever Only Love',
                        'price' => 'Rp 135.000',
                        'image' => 'images/buket 1.jpg',
                        'rating' => 5,
                        'category' => 'bouquet',
                        'description' => 'Rangkaian bunga mawar pink yang cantik, sempurna untuk mengekspresikan cinta'
                    ],
                    [
                        'id' => 2,
                        'name' => 'Pink roses and white lilys',
                        'price' => 'Rp 142.000',
                        'image' => 'images/buket 2.jpg',
                        'rating' => 5,
                        'category' => 'single',
                        'description' => 'Bunga lily putih  dan mawar pink yang elegan dengan aroma menenangkan'
                    ],
                    [
                        'id' => 3,
                        'name' => 'Chamomile Spring Bouquet',
                        'price' => 'Rp 142.000',
                        'image' => 'images/buket 3.jpg',
                        'rating' => 5,
                        'category' => 'bouquet',
                        'description' => 'Bouquet bunga musim semi yang segar dan berwarna-warni'
                    ],
                    [
                        'id' => 4,
                        'name' => 'Rylie Buquet',
                        'price' => 'Rp 130.000',
                        'image' => 'images/buket 4.jpg',
                        'rating' => 5,
                        'category' => 'single',
                        'description' => 'Bunga Matahari dengan batang panjang yang anggun'
                    ],
                    [
                        'id' => 5,
                        'name' => 'Tulip Romance',
                        'price' => 'Rp 165.000',
                        'image' => 'images/buket 5.jpg',
                         'rating' => 5,
                        'category' => 'bouquet',
                        'description' => 'Bouquet mawar merah klasik untuk momen romantis'
                    ],
                    [
                        'id' => 6,
                        'name' => 'Lavender Meadow',
                        'price' => 'Rp 125.000',
                        'image' => 'images/buket 6.jpg',
                        'rating' => 5,
                        'category' => 'bouquet',
                        'description' => 'Bunga lavender yang membawa ketenangan dan keindahan alami'
                    ],
                    [
                        'id' => 7,
                        'name' => 'A Hole of Happiness',
                        'price' => 'Rp 155.000',
                        'image' => 'images/buket 7.jpg',
                        'rating' => 5,
                        'category' => 'arrangement',
                        'description' => 'Rangkaian tulip warna-warni dalam vas cantik'
                    ],
                    [
                        'id' => 8,
                        'name' => 'Rose Elegance',
                        'price' => 'Rp 180.000',
                        'image' => 'images/buket 8.jpg',
                        'rating' => 5,
                        'category' => 'single',
                        'description' => 'Mawar eksotis yang mewah dan tahan lama'
                    ]
                ];

                foreach ($products as $product): ?>
                    <div class="product-card" data-category="<?= $product['category'] ?>">
                        <div class="product-image">
                            <img src="<?= $product['image'] ?>" alt="<?= $product['name'] ?>">
                            <button class="wishlist-btn" onclick="toggleWishlist(this)">❤️</button>
                            <div class="product-overlay">
                                <button class="btn btn-white" onclick="openProductModal(<?= $product['id'] ?>, '<?= addslashes($product['name']) ?>', '<?= $product['price'] ?>', '<?= $product['image'] ?>', '<?= addslashes($product['description']) ?>')">
                                    Lihat Detail
                                </button>
                            </div>
                        </div>
                        <div class="product-rating">
                            <?php for ($i = 0; $i < $product['rating']; $i++): ?>⭐<?php endfor; ?>
                        </div>
                        <h4><?= $product['name'] ?></h4>
                        <p class="product-price"><?= $product['price'] ?></p>
                        <button class="btn btn-primary btn-block" onclick="openProductModal(<?= $product['id'] ?>, '<?= addslashes($product['name']) ?>', '<?= $product['price'] ?>', '<?= $product['image'] ?>', '<?= addslashes($product['description']) ?>')">
                            🛒 Beli Sekarang
                        </button>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

    <!-- Product Detail Modal -->
    <div id="productModal" class="modal">
        <div class="modal-content modal-large">
            <div class="modal-header">
                <h3>Detail Produk</h3>
                <button class="modal-close" onclick="closeProductModal()">✕</button>
            </div>
            <div class="modal-body">
                <div class="product-detail-grid">
                    <div class="product-detail-image">
                        <img id="modalProductImage" src="" alt="Product">
                    </div>
                    <div class="product-detail-info">
                        <h2 id="modalProductName" class="product-detail-title"></h2>
                        <div class="product-rating">⭐⭐⭐⭐⭐ <span>(128 ulasan)</span></div>
                        <p id="modalProductPrice" class="product-detail-price"></p>
                        <p id="modalProductDescription" class="product-detail-description"></p>

                        <!-- Custom Note Feature -->
                        <div class="custom-note-section">
                            <div class="custom-note-header">
                                <span class="icon">💌</span>
                                <h4>Tambahkan Pesan Khusus</h4>
                            </div>
                            <p class="custom-note-desc">Tulis pesan untuk kartu ucapan yang akan disertakan dengan bunga</p>
                            <textarea id="customNote" class="custom-note-textarea" placeholder="Contoh: Happy Birthday! Semoga hari ini penuh kebahagiaan. Love, Sarah ❤️" maxlength="200"></textarea>
                            <p class="char-counter"><span id="charCount">0</span>/200 karakter</p>
                        </div>

                        <!-- Quantity Selector -->
                        <div class="quantity-selector">
                            <span>Jumlah:</span>
                            <div class="quantity-controls">
                                <button onclick="decreaseQuantity()">-</button>
                                <span id="quantity">1</span>
                                <button onclick="increaseQuantity()">+</button>
                            </div>
                        </div>

                        <!-- Action Buttons -->
                        <div class="product-actions">
                            <button class="btn btn-primary btn-large">
                                🛒 Tambah ke Keranjang
                            </button>
                            <button class="btn-icon-large" onclick="toggleWishlist(this)">
                                ❤️
                            </button>
                        </div>

                        <!-- Additional Info -->
                        <div class="product-features">
                            <div class="feature">✓ 100% Bunga segar</div>
                            <div class="feature">✓ Gratis kartu ucapan custom</div>
                            <div class="feature">✓ Pengiriman same-day tersedia</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="js/script.js"></script>
</body>
</html>
