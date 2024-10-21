<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fibonacci with Memoization</title>
    <style>
        body { font-family: Arial, sans-serif; text-align: center; }
        button { padding: 10px 20px; margin-top: 20px; }
    </style>
</head>
<body>
    <h1>Fibonacci with Memoization</h1>
    <button onclick="window.location.href='fibonacci_memo.php'">Calculate Fibonacci</button>
</body>
</html>


<?php
function fibonacci($n, &$memo = []) {
    if ($n <= 1) {
        return $n;
    }

    if (!isset($memo[$n])) {
        $memo[$n] = fibonacci($n - 1, $memo) + fibonacci($n - 2, $memo);
    }

    return $memo[$n];
}

$n = 10; // Change to any number to test
echo "Fibonacci number for $n is: " . fibonacci($n) . "<br>";
?>
