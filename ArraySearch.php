<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Numbers Greater Than Threshold</title>
    <style>
        body { font-family: Arial, sans-serif; }
        .container { width: 300px; margin: 50px auto; text-align: center; }
        button { padding: 10px 20px; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Find Numbers Above Threshold</h1>
        <button onclick="window.location.href='find_numbers.php'">Show Numbers</button>
    </div>
</body>
</html>


<?php
function findGreaterThan($numbers, $threshold) {
    $result = [];
    foreach ($numbers as $number) {
        if ($number > $threshold) {
            $result[] = $number;
        }
    }
    return $result;
}

$numbers = [10, 23, 45, 5, 90, 12];
$threshold = 20;

$filtered = findGreaterThan($numbers, $threshold);

echo "<h1>Numbers greater than $threshold</h1>";
echo implode(", ", $filtered) . "<br>";
?>
