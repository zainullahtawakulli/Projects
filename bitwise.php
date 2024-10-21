<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bitwise Equality Checker</title>
</head>
<body>
    <h1>Bitwise Equality</h1>
    <form action="bitwise.php" method="post">
        <label for="num1">Enter First Number:</label>
        <input type="number" id="num1" name="num1" required><br>
        <label for="num2">Enter Second Number:</label>
        <input type="number" id="num2" name="num2" required><br><br>
        <input type="submit" value="Check Bitwise Equality">
    </form>
</body>
</html>


<?php
function bitwiseEqual($num1, $num2) {
    return ($num1 ^ $num2) === 0 ? "Equal" : "Not Equal";
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = intval($_POST['num1']);
    $num2 = intval($_POST['num2']);
    echo "<p>Result: " . bitwiseEqual($num1, $num2) . "</p>";
}
?>
