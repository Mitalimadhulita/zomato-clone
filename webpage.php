<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>my webpage</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <?php
$products = [
    ['id' => 1, 'name' => 'Product 1', 'price' => 100, 'image' => 'product1.jpg'],
    ['id' => 2, 'name' => 'Product 2', 'price' => 200, 'image' => 'product2.jpg'],
    ['id' => 3, 'name' => 'Product 3', 'price' => 300, 'image' => 'product3.jpg'],
];

session_start();

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

?>
<header>
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="cart.php">Cart (<?= count($_SESSION['cart']) ?>)</a></li>
            </ul>
        </nav>
    </header>
</body>
</html>