<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dynamic Function Creation</title>
    <style>
        body { font-family: Arial, sans-serif; text-align: center; }
        button { padding: 10px 20px; margin-top: 20px; }
    </style>
</head>
<body>
    <h1>Dynamic Function Creation</h1>
    <button onclick="window.location.href='dynamic_function.php'">Run Dynamic Function</button>
</body>
</html>


<?php
function createMathFunction($operation) {
    switch ($operation) {
        case 'add':
            return function($a, $b) { return $a + $b; };
        case 'subtract':
            return function($a, $b) { return $a - $b; };
        case 'multiply':
            return function($a, $b) { return $a * $b; };
        case 'divide':
            return function($a, $b) { return $a / $b; };
        default:
            return null;
    }
}

$operation = 'add'; // Change to subtract, multiply, or divide
$mathFunc = createMathFunction($operation);
echo "Result: " . $mathFunc(10, 5) . "<br>";
?>
