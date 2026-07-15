<?php
include 'includes/header.php';
include 'includes/db.php';

if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit;
}

$user_id = $_SESSION['user']['id'];

// Get only purchased episodes
$result = $conn->query("SELECT p.* FROM products p 
                        JOIN purchases pur ON p.id = pur.product_id 
                        WHERE pur.user_id = $user_id 
                        ORDER BY p.title");
?>

<div class="container my-5">
    <h1 class="text-center mb-2">My Library</h1>
    <p class="text-center text-muted mb-5">Welcome back, <?= htmlspecialchars($_SESSION['user']['fullname']) ?>!</p>

    <?php if ($result->num_rows == 0): ?>
        <div class="alert alert-info text-center p-5">
            <h4>You haven't purchased any episodes yet</h4>
            <a href="shop.php" class="btn btn-primary">Browse Episodes</a>
        </div>
    <?php else: ?>
        <div class="row g-4">
            <?php while ($product = $result->fetch_assoc()):
                $previewVideo = str_replace('.png', '-preview.mp4', strtolower($product['image']));
                $fullVideo = str_replace('.png', '-full.mp4', strtolower($product['image']));
                ?>
                <div class="col-lg-4 col-md-6">
                    <div class="product-card" onclick="watchEpisode(<?= $product['id'] ?>, '<?= addslashes($product['title']) ?>', 'images/<?= htmlspecialchars($fullVideo) ?>')">
                        <div class="preview-wrapper">
                            <img src="images/<?= htmlspecialchars($product['image']) ?>" class="product-image" alt="<?= htmlspecialchars($product['title']) ?>">
                            <video class="product-video" muted loop playsinline>
                                <source src="images/<?= htmlspecialchars($previewVideo) ?>" type="video/mp4">
                            </video>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><?= htmlspecialchars($product['title']) ?></h5>
                            <p class="card-text text-muted"><?= htmlspecialchars($product['description']) ?></p>
                            <button class="btn btn-primary w-100 mt-3">▶ Watch Now</button>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    <?php endif; ?>
</div>

<!-- Video Player Modal -->
<div class="modal fade" id="videoModal" tabindex="-1">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalTitle"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body p-0">
                <video id="fullVideo" class="w-100" controls autoplay>
                    <source id="videoSource" src="" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
        </div>
    </div>
</div>

<script>
// Open full episode in modal
function watchEpisode(id, title, videoSrc) {
    document.getElementById('modalTitle').textContent = title;
    document.getElementById('videoSource').src = videoSrc;
    document.getElementById('fullVideo').load();
    
    const modal = new bootstrap.Modal(document.getElementById('videoModal'));
    modal.show();
}

// Hover preview (same as shop)
document.querySelectorAll('.product-card').forEach(card => {
    const img = card.querySelector('.product-image');
    const video = card.querySelector('.product-video');
    if (video) {
        card.addEventListener('mouseenter', () => { img.style.opacity = '0'; video.style.opacity = '1'; video.play(); });
        card.addEventListener('mouseleave', () => { video.pause(); video.currentTime = 0; video.style.opacity = '0'; img.style.opacity = '1'; });
    }
});
</script>

<?php include 'includes/footer.php'; ?>