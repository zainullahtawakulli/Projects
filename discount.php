<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dynamic Discount Calculator</title>
</head>
<body>
    <h1>Dynamic Discount Calculator</h1>
    <form action="discount.php" method="post">
        <label for="years">Enter number of years as a member:</label>
        <input type="number" id="years" name="years" required><br><br>

        <label for="isPremium">Are you a premium member?</label>
        <input type="checkbox" id="isPremium" name="isPremium"><br><br>

        <input type="submit" value="Calculate Discount">
    </form>
</body>
</html>








<?php
function calculateDiscount($years, $isPremium) {
    if ($years > 5) {
        $discount = 30;
    } elseif ($years >= 3) {
        $discount = 20;
    } else {
        $discount = 10;
    }

    if ($isPremium) {
        $discount += 10;
    }

    return "Discount: " . $discount . "%";
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $years = intval($_POST['years']);
    $isPremium = isset($_POST['isPremium']) ? true : false;
    echo "<p>" . calculateDiscount($years, $isPremium) . "</p>";
}
?>
