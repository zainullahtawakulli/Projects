<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Higher-Order Function</title>
    <style>
        body { font-family: Arial, sans-serif; text-align: center; }
        button { padding: 10px 20px; margin-top: 20px; }
    </style>
</head>
<body>
    <h1>Higher-Order Function</h1>
    <button onclick="window.location.href='higher_order_function.php'">Apply to 2D Array</button>
</body>
</html>


<?php
function applyTo2DArray($array, $callback) {
    foreach ($array as &$subArray) {
        $subArray = array_map($callback, $subArray);
    }
    return $array;
}

$array = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9]
];

$callback = function($num) {
    return $num * 2;
};

$transformedArray = applyTo2DArray($array, $callback);

echo "<h1>Transformed 2D Array:</h1>";
foreach ($transformedArray as $row) {
    echo implode(", ", $row) . "<br>";
}
?>
