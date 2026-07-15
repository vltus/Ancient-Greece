<?php
include 'includes/header.php';
include 'includes/db.php';

if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit;
}

$user_id = $_SESSION['user']['id'];

// checkout system
if (isset($_POST['checkout'])) {
    $cart = json_decode($_POST['cart_data'], true);

    if (!empty($cart)) {
        $stmt = $conn->prepare("INSERT INTO purchases (user_id, product_id) VALUES (?, ?)");

        foreach ($cart as $item) {
            $stmt->bind_param("ii", $user_id, $item['id']);
            $stmt->execute();
        }

        // clear cart
        unset($_SESSION['cart']);
        echo "<div class='alert alert-success text-center my-5'>✅ Purchase successful! Episodes added to your library.</div>";
    }
}
?>

<div class="container my-5">
    <h1 class="mb-4">Your Cart</h1>

    <?php if (empty($_SESSION['cart'])): ?>
        <div class="alert alert-info text-center p-5">
            <h4>Your cart is empty</h4>
            <a href="shop.php" class="btn btn-primary">Browse Episodes</a>
        </div>
    <?php else: ?>
        <form method="POST">
            <input type="hidden" name="cart_data" value='<?= json_encode($_SESSION['cart']) ?>'>
            
            <div class="row">
                <div class="col-lg-8">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Episode</th>
                                <th>Price</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($_SESSION['cart'] as $item): ?>
                            <tr>
                                <td><?= htmlspecialchars($item['title']) ?></td>
                                <td>£<?= number_format($item['price'], 2) ?></td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
                
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <h5>Total: £<?= number_format(array_sum(array_column($_SESSION['cart'], 'price')), 2) ?></h5>
                            <button type="submit" name="checkout" class="btn btn-success btn-lg w-100 mt-4">
                                ✅ Complete Purchase
                            </button>
                            <a href="shop.php" class="btn btn-secondary w-100 mt-2">Continue Shopping</a>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    <?php endif; ?>
</div>

<?php include 'includes/footer.php'; ?>