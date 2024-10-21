<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fibonacci Sequence</title>
</head>
<body>
    <h1>Fibonacci Sequence</h1>
    <form action="fibonacci.php" method="post">
        <label for="n">Enter the number of terms for Fibonacci sequence:</label>
        <input type="number" id="n" name="n" required><br><br>
        <input type="submit" value="Generate Fibonacci">
    </form>
</body>
</html>


<?php
function generateFibonacci($n) {
    $fib = [0, 1];
    $i = 2;
    while ($i < $n) {
        $fib[$i] = $fib[$i - 1] + $fib[$i - 2];
        $i++;
    }
    return implode(", ", array_slice($fib, 0, $n));
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $n = intval($_POST['n']);
    echo "Fibonacci Sequence: " . generateFibonacci($n);
}
?>
