<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Sorting by Price</title>
    <style>
        body { font-family: Arial, sans-serif; }
        .container { width: 300px; margin: 50px auto; text-align: center; }
        button { padding: 10px 20px; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Sorted Products</h1>
        <button onclick="window.location.href='sort_products.php'">Sort by Price</button>
    </div>
</body>
</html>


<?php
$products = [
    "Laptop" => 1200,
    "Mouse" => 25,
    "Keyboard" => 100,
    "Monitor" => 300,
];

arsort($products);

echo "<h1>Products Sorted by Price</h1>";
foreach ($products as $product => $price) {
    echo "$product: $$price<br>";
}
?>
