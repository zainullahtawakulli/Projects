<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Closure and Callback Function</title>
    <style>
        body { font-family: Arial, sans-serif; text-align: center; }
        button { padding: 10px 20px; margin-top: 20px; }
    </style>
</head>
<body>
    <h1>Closure and Callback Function</h1>
    <button onclick="window.location.href='closure_callback.php'">Apply Callback</button>
</body>
</html>



<?php
function applyCallback($numbers, $callback) {
    return array_map($callback, $numbers);
}

$numbers = [2, 4, 6, 8, 10];

$callback = function($num) {
    return $num * 2;
};

$transformed = applyCallback($numbers, $callback);

echo "<h1>Transformed Numbers:</h1>";
echo implode(", ", $transformed) . "<br>";
?>
