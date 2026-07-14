<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ancient Greece Educational Series</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<nav class="navbar navbar-expand-lg">
    <div class="container">
        <!-- Logo -->
        <a class="navbar-brand d-flex align-items-center" href="index.php">
            <img src="images/logo.png" alt="VLTUS" height="55" class="me-3">
        </a>

        <!-- Consistent Navigation Buttons -->
        <div class="d-flex align-items-center gap-2">
            <a href="index.php" class="btn btn-outline-dark">Home</a>
            <a href="shop.php" class="btn btn-outline-dark">Episodes</a>
            <a href="cart.php" class="btn btn-outline-dark">Cart</a>
            
            <?php if (isset($_SESSION['user'])): ?>
                <a href="my-library.php" class="btn btn-outline-dark">My Library</a>
                <a href="logout.php" class="btn btn-outline-dark">Logout</a>
            <?php else: ?>
                <a href="login.php" class="btn btn-outline-dark">Login</a>
                <a href="register.php" class="btn btn-outline-dark">Register</a>
            <?php endif; ?>
        </div>
    </div>
</nav>