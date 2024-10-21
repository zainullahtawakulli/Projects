<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Calculator</title>
</head>
<body>
    <h1>Simple Calculator</h1>
    <form action="simple_calculator.php" method="post">
        <label for="expression">Enter a math expression (e.g., 5 + 2):</label>
        <input type="text" id="expression" name="expression" required><br><br>

        <input type="submit" value="Calculate">
    </form>
</body>
</html>


<?php
function simpleCalculator($input) {
    $parts = explode(' ', $input);
    $num1 = floatval($parts[0]);
    $operator = $parts[1];
    $num2 = floatval($parts[2]);

    switch ($operator) {
        case '+':
            return $num1 + $num2;
        case '-':
            return $num1 - $num2;
        case '*':
            return $num1 * $num2;
        case '/':
            return $num2 != 0 ? $num1 / $num2 : "Cannot divide by zero";
        default:
            return "Unsupported operation";
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $expression = $_POST['expression'];
    echo "<p>Result: " . simpleCalculator($expression) . "</p>";
}
?>
