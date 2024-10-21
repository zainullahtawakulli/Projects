<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Currency Conversion</title>
</head>
<body>
    <h1>Currency Conversion (USD <-> EUR)</h1>
    <form action="Contast_Rate.php" method="post">
        <label for="amounts">Enter Amounts (comma-separated):</label>
        <input type="text" id="amounts" name="amounts" required><br><br>

        <label for="conversion">Convert:</label>
        <input type="radio" id="toEUR" name="conversion" value="toEUR" checked>
        <label for="toEUR">USD to EUR</label>
        <input type="radio" id="toUSD" name="conversion" value="toUSD">
        <label for="toUSD">EUR to USD</label><br><br>

        <input type="submit" value="Convert">
    </form>
</body>
</html>


<?php
// Define the constant exchange rate
define("EXCHANGE_RATE", 0.9); // Example: 1 USD = 0.9 EUR

// Check if the form data was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the inputs from the form
    $amounts = $_POST['amounts'];
    $conversion = $_POST['conversion'];

    // Convert the input string of amounts into an array
    $amountsArray = array_map('floatval', explode(',', $amounts));

    // Function to handle currency conversion
    function convertCurrency($amounts, $convertToEUR = true) {
        $convertedAmounts = [];
        foreach ($amounts as $amount) {
            if ($convertToEUR) {
                $convertedAmounts[] = $amount * EXCHANGE_RATE; // USD to EUR
            } else {
                $convertedAmounts[] = $amount / EXCHANGE_RATE; // EUR to USD
            }
        }
        return $convertedAmounts;
    }

    // Perform the conversion
    if ($conversion == "toEUR") {
        $result = convertCurrency($amountsArray, true);
    } else {
        $result = convertCurrency($amountsArray, false);
    }

    // Display the results
    echo "<h2>Converted Amounts:</h2>";
    echo "<ul>";
    foreach ($result as $converted) {
        echo "<li>" . number_format($converted, 2) . "</li>";
    }
    echo "</ul>";
} else {
    echo "Invalid request method.";
}
?>
