<?php
include 'includes/header.php';
include 'includes/db.php';

// Handle Add to Cart
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['add_to_cart'])) {
    $product_id = (int) $_POST['product_id'];
    $title = $_POST['title'];
    $price = (float) $_POST['price'];

    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = [];
    }

    // Prevent duplicates in cart
    $already_in_cart = false;
    foreach ($_SESSION['cart'] as $item) {
        if ($item['id'] == $product_id) {
            $already_in_cart = true;
            break;
        }
    }

    if (!$already_in_cart) {
        $_SESSION['cart'][] = [
            'id' => $product_id,
            'title' => $title,
            'price' => $price
        ];
        $success = "✅ " . htmlspecialchars($title) . " added to cart!";
    } else {
        $success = "⚠️ Already in cart!";
    }
}

$result = $conn->query("SELECT * FROM products ORDER BY (price > 0) DESC, created_at DESC");
?>

<div class="container my-5">
    <h1 class="text-center mb-4 display-5 fw-bold text-dark">Ancient Greece Educational Series</h1>
    <p class="text-center lead mb-5 text-muted">Interactive Video Episodes — Instant Digital Download</p>

    <?php if (isset($success)): ?>
        <div class="alert alert-success text-center"><?= $success ?></div>
    <?php endif; ?>

    <div class="text-center mb-4">
        <button onclick="toggleFilter()" id="filter-btn" class="btn btn-outline-danger btn-lg">
            Show Available Episodes Only
        </button>
    </div>
    
    <div class="row g-4" id="products-container">
        <?php while ($product = $result->fetch_assoc()):
            $previewVideo = str_replace('.png', '-preview.mp4', strtolower($product['image']));
            ?>
            <div class="col-lg-4 col-md-6 product-item" data-available="<?= $product['price'] > 0 ? '1' : '0' ?>">
                <div class="product-card">
                    <div class="preview-wrapper">
                        <img src="images/<?= htmlspecialchars($product['image']) ?>" 
                             class="product-image" 
                             alt="<?= htmlspecialchars($product['title']) ?>">
                        <video class="product-video" muted loop playsinline>
                            <source src="images/<?= htmlspecialchars($previewVideo) ?>" type="video/mp4">
                        </video>
                    </div>
                    
                    <div class="card-body">
                        <h5 class="card-title"><?= htmlspecialchars($product['title']) ?></h5>
                        <p class="card-text text-muted"><?= htmlspecialchars($product['description']) ?></p>
                        
                        <div class="d-flex justify-content-between align-items-end mt-4">
                            <?php if ($product['price'] > 0): ?>
                                <div>
                                    <span class="price">£<?= number_format($product['price'], 2) ?></span>
                                </div>
                                <form method="POST" class="d-inline">
                                    <input type="hidden" name="product_id" value="<?= $product['id'] ?>">
                                    <input type="hidden" name="title" value="<?= htmlspecialchars($product['title']) ?>">
                                    <input type="hidden" name="price" value="<?= $product['price'] ?>">
                                    <button type="submit" name="add_to_cart" class="btn btn-primary btn-sm">Add to Cart</button>
                                </form>
                            <?php else: ?>
                                <div>
                                    <span class="text-muted fst-italic">Coming Soon</span>
                                </div>
                                <button class="btn btn-secondary btn-sm" disabled>Coming Soon</button>
                            <?php endif; ?>
                        </div>
                        <?php if ($product['price'] > 0): ?>
                            <small class="text-success d-block mt-2">✓ Instant Digital Download</small>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
    </div>
</div>

<script>
// preview when you hover - Shop page
document.querySelectorAll('.product-card').forEach(card => {
    const img = card.querySelector('.product-image');
    const video = card.querySelector('.product-video');

    card.addEventListener('mouseenter', () => {
        if (video) {
            img.style.opacity = '0';
            video.style.opacity = '1';
            video.play();
        }
    });

    card.addEventListener('mouseleave', () => {
        if (video) {
            video.pause();
            video.currentTime = 0;
            video.style.opacity = '0';
            img.style.opacity = '1';
        }
    });
});

// Filter toggle
let showOnlyAvailable = false;
function toggleFilter() {
    showOnlyAvailable = !showOnlyAvailable;
    const btn = document.getElementById('filter-btn');
    btn.textContent = showOnlyAvailable ? "Show All Episodes" : "Show Available Episodes Only";
    filterProducts();
}

function filterProducts() {
    const items = document.querySelectorAll('.product-item');
    items.forEach(item => {
        item.style.display = (showOnlyAvailable && item.getAttribute('data-available') === '0') ? 'none' : 'block';
    });
}
</script>

<?php include 'includes/footer.php'; ?>