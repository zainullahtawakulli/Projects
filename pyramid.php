<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pyramid Pattern</title>
</head>
<body>
    <h1>Pyramid Pattern</h1>
    <form action="pyramid.php" method="post">
        <label for="size">Enter the size of the pyramid:</label>
        <input type="number" id="size" name="size" required><br><br>
        <input type="submit" value="Generate Pyramid">
    </form>
</body>
</html>


<?php
function printPyramid($size) {
    for ($i = 1; $i <= $size; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo $j . " ";
        }
        echo "<br>";
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $size = intval($_POST['size']);
    printPyramid($size);
}
?>
