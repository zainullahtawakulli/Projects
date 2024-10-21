<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FizzBuzz and Prime Checker</title>
</head>
<body>
    <h1>FizzBuzz or Prime</h1>
    <form action="fizzbuzz.php" method="post">
        <label for="number">Enter a Number:</label>
        <input type="number" id="number" name="number" required><br><br>
        <input type="submit" value="Check FizzBuzz or Prime">
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

function fizzBuzzOrPrime($num) {
    if (isPrime($num)) {
        return "Prime";
    } elseif ($num % 3 == 0 && $num % 5 == 0) {
        return "FizzBuzz";
    } elseif ($num % 3 == 0) {
        return "Fizz";
    } elseif ($num % 5 == 0) {
        return "Buzz";
    } else {
        return "Neither FizzBuzz nor Prime";
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $number = intval($_POST['number']);
    echo "<p>Result: " . fizzBuzzOrPrime($number) . "</p>";
}
?>
