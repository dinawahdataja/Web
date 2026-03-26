# Blossom Heaven - Toko Bunga Online

Website toko bunga lengkap dengan sistem login, dashboard admin, dan dashboard user menggunakan HTML, CSS, dan PHP.

## 🌟 Fitur

### Landing Page
- ✨ Animasi bunga berjatuhan yang indah
- 📱 Responsive design
- 🎨 Font estetik (Dancing Script & Playfair Display)
- 🌸 Koleksi produk unggulan

### Sistem Login
- 👤 Login untuk User dan Admin
- 🔐 Redirect otomatis berdasarkan role
  - Admin → Dashboard Admin
  - User → Dashboard User

### Dashboard User
1. **Ringkasan**
   - Jumlah pesanan yang sedang diproses
   - Total pesanan selesai
   - Total wishlist items

2. **Riwayat Pembelian**
   - Daftar semua pesanan
   - Status pesanan
   - Detail transaksi

3. **Wishlist**
   - Bunga favorit yang disimpan
   - Tambah ke keranjang langsung

4. **Tracking Status**
   - Visualisasi progres pesanan
   - Timeline pengiriman
   - Estimasi pengiriman

### Dashboard Admin
1. **Manajemen Stok**
   - Tabel produk dengan gambar
   - Tambah, edit, hapus produk
   - Indikator stok (warna berdasarkan jumlah)

2. **Daftar Pesanan**
   - Pesanan masuk dengan detail
   - Status pesanan (pending, processing, completed)
   - **Custom Note** dari pelanggan

3. **Manajemen User**
   - Daftar pelanggan terdaftar
   - Total pesanan per pelanggan
   - Informasi akun

### Katalog Bunga
- 🌺 Filter berdasarkan kategori (Bouquet, Single Stem, Arrangement)
- 💝 Fitur Wishlist
- 🛒 Detail produk dengan modal
- 📝 **Fitur Custom Note** - Pelanggan bisa menulis pesan kartu ucapan
- 🔢 Quantity selector
- ⭐ Rating produk

## 📋 Persyaratan

- PHP 7.4 atau lebih baru
- Web Server (Apache/Nginx)
- Browser modern (Chrome, Firefox, Safari, Edge)

## 🚀 Cara Menjalankan

### Metode 1: Menggunakan XAMPP/WAMP/MAMP

1. **Install XAMPP/WAMP/MAMP** (jika belum)
   - Download dari website resmi
   - Install sesuai sistem operasi Anda

2. **Copy folder project**
   ```bash
   # Copy folder php-website ke htdocs (XAMPP) atau www (WAMP)
   # Lokasi default:
   # XAMPP: C:\xampp\htdocs\
   # WAMP: C:\wamp64\www\
   # MAMP: /Applications/MAMP/htdocs/
   ```

3. **Start Apache Server**
   - Buka XAMPP/WAMP Control Panel
   - Start Apache

4. **Akses website**
   ```
   http://localhost/php-website/
   ```

### Metode 2: Menggunakan PHP Built-in Server

1. **Buka terminal/command prompt**

2. **Navigate ke folder project**
   ```bash
   cd php-website
   ```

3. **Jalankan PHP server**
   ```bash
   php -S localhost:8000
   ```

4. **Akses website**
   ```
   http://localhost:8000
   ```

## 🔑 Login Credentials (Demo)

### Admin
- Email: `admin@blossom.com`
- Password: `admin123`

### User
- Email: `user@blossom.com`
- Password: `user123`

## 📁 Struktur Folder

```
php-website/
├── index.php              # Landing page
├── login.php              # Halaman login
├── logout.php             # Logout handler
├── catalog.php            # Halaman katalog
├── user-dashboard.php     # Dashboard user
├── admin-dashboard.php    # Dashboard admin
├── css/
│   └── style.css         # Stylesheet utama
├── js/
│   └── script.js         # JavaScript untuk animasi & interaktivitas
├── images/               # Folder untuk gambar (opsional)
└── README.md             # Dokumentasi
```

## 🎨 Fitur Custom Note

Fitur khusus florist yang memungkinkan pelanggan menulis pesan kartu ucapan yang akan disertakan dengan bunga:

1. Maksimal 200 karakter
2. Real-time character counter
3. Preview langsung di detail produk
4. Admin dapat melihat catatan di dashboard pesanan

## 🎯 Fitur Tracking Status

Visualisasi timeline pengiriman pesanan:
- ✅ Pesanan Diterima
- ✅ Pembayaran Berhasil
- ✅ Pesanan Dikemas
- ✅ Pesanan Dikirim
- ⏳ Pesanan Diterima

## 🔧 Kustomisasi

### Mengubah Warna Tema
Edit file `css/style.css`, cari dan ubah:
```css
/* Warna utama pink/rose */
#e91e63  /* Ubah ke warna pilihan Anda */
```

### Menambah Produk
Edit file PHP yang sesuai, tambahkan item di array `$products`:
```php
[
    'id' => 9,
    'name' => 'Nama Bunga',
    'price' => 'Rp 150.000',
    'image' => 'URL_GAMBAR',
    'rating' => 5,
    'category' => 'bouquet',
    'description' => 'Deskripsi produk'
]
```

## 🌐 Integrasi Database (Opsional)

Untuk versi production, Anda bisa mengintegrasikan dengan database MySQL:

1. Buat database `blossom_heaven`
2. Buat tabel: `users`, `products`, `orders`, `wishlist`
3. Update file PHP untuk menggunakan PDO/MySQLi
4. Ganti array hardcoded dengan query database

Contoh struktur tabel:
```sql
CREATE TABLE products (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255),
    price DECIMAL(10,2),
    stock INT,
    category VARCHAR(50),
    description TEXT,
    image_url VARCHAR(500),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
```

## 📱 Responsive Design

Website sudah responsive dan akan menyesuaikan tampilan di:
- 💻 Desktop (1200px+)
- 📱 Tablet (768px - 1199px)
- 📱 Mobile (< 768px)

## 🎉 Font yang Digunakan

- **Dancing Script** - Untuk logo dan aksen
- **Playfair Display** - Untuk heading besar
- **Segoe UI** - Untuk teks body

## 📝 Catatan

- Website ini menggunakan session PHP untuk autentikasi
- Data saat ini disimpan dalam array (untuk demo)
- Untuk production, gunakan database MySQL/PostgreSQL
- Password harus di-hash menggunakan `password_hash()` untuk keamanan

## 🔒 Keamanan

Untuk production, implementasikan:
- ✅ Password hashing dengan `password_hash()`
- ✅ Prepared statements untuk SQL queries
- ✅ Input validation dan sanitization
- ✅ CSRF protection
- ✅ XSS prevention
- ✅ HTTPS/SSL

## 🚧 Pengembangan Selanjutnya

Fitur yang bisa ditambahkan:
- 🛒 Shopping cart yang berfungsi
- 💳 Payment gateway integration
- 📧 Email notifications
- 📊 Sales reports untuk admin
- 🔍 Search functionality
- 📷 Image upload untuk produk
- ⭐ Review dan rating dari pelanggan
- 📱 Progressive Web App (PWA)

## 📄 License

Free to use untuk pembelajaran dan proyek personal.

## 👨‍💻 Support

Jika ada pertanyaan atau issue, silakan hubungi developer.

---

Dibuat dengan ❤️ menggunakan HTML, CSS, dan PHP
