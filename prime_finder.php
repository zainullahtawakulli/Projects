<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prime Number Finder</title>
</head>
<body>
    <h1>Prime Number Finder</h1>
    <form action="prime_finder.php" method="post">
        <label for="limit">Enter a number to find primes up to:</label>
        <input type="number" id="limit" name="limit" required><br><br>
        <input type="submit" value="Find Primes">
    </form>
</body>
</html>


<?php
function isPrime($num) {
    if ($num < 2) return false;
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) {
            return false;
        }
    }
    return true;
}

function findPrimes($limit) {
    $primes = [];
    for ($i = 1; $i <= $limit; $i++) {
        if (isPrime($i)) {
            $primes[] = $i;
        }
    }
    return implode(", ", $primes);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $limit = intval($_POST['limit']);
    echo "Prime Numbers: " . findPrimes($limit);
}
?>
