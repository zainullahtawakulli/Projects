<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anonymous Function with Array Filter</title>
    <style>
        body { font-family: Arial, sans-serif; text-align: center; }
        button { padding: 10px 20px; margin-top: 20px; }
    </style>
</head>
<body>
    <h1>Anonymous Function with Array Filter</h1>
    <button onclick="window.location.href='array_filter.php'">Filter Numbers</button>
</body>
</html>


<?php
$numbers = [21, 42, 63, 84, 105, 126];

$filtered = array_filter($numbers, function($number) {
    return $number % 3 == 0 && $number % 7 == 0;
});

echo "<h1>Filtered Numbers:</h1>";
echo implode(", ", $filtered) . "<br>";
?>
