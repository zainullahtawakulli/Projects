<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logical Operators</title>
</head>
<body>
    <h1>Logical Operators</h1>
    <form action="logical.php" method="post">
        <label for="bool1">Condition 1 (True/False):</label>
        <input type="checkbox" id="bool1" name="bool1"><br>
        <label for="bool2">Condition 2 (True/False):</label>
        <input type="checkbox" id="bool2" name="bool2"><br>
        <label for="bool3">Condition 3 (True/False):</label>
        <input type="checkbox" id="bool3" name="bool3"><br><br>
        <input type="submit" value="Evaluate Logical Operation">
    </form>
</body>
</html>


<?php
function logicalOperations($bool1, $bool2, $bool3) {
    $result = ($bool1 && $bool2) || (!$bool3 && $bool2);
    return $result ? "True" : "False";
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $bool1 = isset($_POST['bool1']) ? true : false;
    $bool2 = isset($_POST['bool2']) ? true : false;
    $bool3 = isset($_POST['bool3']) ? true : false;
    echo "<p>Result: " . logicalOperations($bool1, $bool2, $bool3) . "</p>";
}
?>
