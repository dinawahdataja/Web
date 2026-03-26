// Floating Flowers Animation
function createFloatingFlowers() {
    const container = document.getElementById('floatingFlowers');
    if (!container) return;

    const flowerCount = 15;
    const flowers = ['🌸', '🌺', '🌼', '🌻', '🌷', '🏵️', '💐'];

    for (let i = 0; i < flowerCount; i++) {
        const flower = document.createElement('div');
        flower.className = 'flower';
        flower.textContent = flowers[Math.floor(Math.random() * flowers.length)];

        // Random starting position
        flower.style.left = Math.random() * 100 + '%';

        // Random animation duration (10-20 seconds)
        const duration = 10 + Math.random() * 10;
        flower.style.animationDuration = duration + 's';

        // Random delay
        flower.style.animationDelay = Math.random() * 5 + 's';

        container.appendChild(flower);
    }
}

// Call on page load
document.addEventListener('DOMContentLoaded', function() {
    createFloatingFlowers();

    // Custom note character counter
    const customNote = document.getElementById('customNote');
    const charCount = document.getElementById('charCount');

    if (customNote && charCount) {
        customNote.addEventListener('input', function() {
            charCount.textContent = this.value.length;
        });
    }
});

// Toggle Wishlist
function toggleWishlist(btn) {
    btn.classList.toggle('active');

    // Get current count
    const badge = document.querySelector('.cart-badge');
    if (badge) {
        let count = parseInt(badge.textContent);
        if (btn.classList.contains('active')) {
            count++;
        } else {
            count = Math.max(0, count - 1);
        }
        badge.textContent = count;
    }
}

// Category Filter
function filterCategory(category) {
    // Update active button
    document.querySelectorAll('.filter-btn').forEach(btn => {
        btn.classList.remove('active');
    });
    event.target.classList.add('active');

    // Filter products
    const products = document.querySelectorAll('.product-card');
    products.forEach(product => {
        if (category === 'all' || product.dataset.category === category) {
            product.style.display = 'block';
        } else {
            product.style.display = 'none';
        }
    });
}

// Product Modal
function openProductModal(id, name, price, image, description) {
    const modal = document.getElementById('productModal');

    document.getElementById('modalProductName').textContent = name;
    document.getElementById('modalProductPrice').textContent = price;
    document.getElementById('modalProductImage').src = image;
    document.getElementById('modalProductDescription').textContent = description;

    modal.classList.add('active');
}

function closeProductModal() {
    const modal = document.getElementById('productModal');
    modal.classList.remove('active');

    // Reset custom note
    const customNote = document.getElementById('customNote');
    const charCount = document.getElementById('charCount');
    if (customNote) {
        customNote.value = '';
        charCount.textContent = '0';
    }

    // Reset quantity
    document.getElementById('quantity').textContent = '1';
}

// Quantity Controls
let quantity = 1;

function increaseQuantity() {
    quantity++;
    document.getElementById('quantity').textContent = quantity;
}

function decreaseQuantity() {
    if (quantity > 1) {
        quantity--;
        document.getElementById('quantity').textContent = quantity;
    }
}

// Add Product Modal
function openAddProductModal() {
    const modal = document.getElementById('addProductModal');
    modal.classList.add('active');
}

function closeAddProductModal() {
    const modal = document.getElementById('addProductModal');
    modal.classList.remove('active');
}

// Confirm Delete
function confirmDelete(productId) {
    if (confirm('Apakah Anda yakin ingin menghapus produk ini?')) {
        // In real application, send AJAX request to delete
        const form = document.createElement('form');
        form.method = 'POST';
        form.innerHTML = `
            <input type="hidden" name="action" value="delete_product">
            <input type="hidden" name="product_id" value="${productId}">
        `;
        document.body.appendChild(form);
        form.submit();
    }
}

// Close modal when clicking outside
window.addEventListener('click', function(event) {
    if (event.target.classList.contains('modal')) {
        event.target.classList.remove('active');
    }
});

// Close modal on ESC key
document.addEventListener('keydown', function(event) {
    if (event.key === 'Escape') {
        document.querySelectorAll('.modal').forEach(modal => {
            modal.classList.remove('active');
        });
    }
});
