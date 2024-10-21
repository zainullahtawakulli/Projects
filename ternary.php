<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ternary Challenges</title>
</head>
<body>
    <h1>Personalized Message</h1>
    <form action="ternary.php" method="post">
        <label for="age">Enter your age:</label>
        <input type="number" id="age" name="age" required><br><br>

        <label for="membership">Membership type:</label>
        <select id="membership" name="membership">
            <option value="regular">Regular</option>
            <option value="premium">Premium</option>
        </select><br><br>

        <label for="purchaseAmount">Enter purchase amount:</label>
        <input type="number" step="0.01" id="purchaseAmount" name="purchaseAmount" required><br><br>

        <input type="submit" value="Get Message">
    </form>
</body>
</html>



<?php
function personalizedMessage($age, $membership, $purchaseAmount) {
    $message = ($age > 60) ? "Senior discount applied. " : "No senior discount. ";
    $message .= ($membership == "premium") ? "Premium membership: " : "Regular membership: ";
    $message .= ($purchaseAmount > 100) ? "Free shipping available." : "No free shipping.";
    return $message;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $age = intval($_POST['age']);
    $membership = $_POST['membership'];
    $purchaseAmount = floatval($_POST['purchaseAmount']);
    echo "<p>" . personalizedMessage($age, $membership, $purchaseAmount) . "</p>";
}
?>
