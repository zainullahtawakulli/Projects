<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dynamic Loop and Sum</title>
</head>
<body>
    <h1>Dynamic Loop and Sum</h1>
    <form action="dynamic_loop.php" method="post">
        <label for="size">Enter the size of the array:</label>
        <input type="number" id="size" name="size" required><br><br>
        <input type="submit" value="Generate and Calculate">
    </form>
</body>
</html>


<?php
function generateArrayAndSum($size) {
    $array = [];
    $sum = 0;

    for ($i = 0; $i < $size; $i++) {
        $array[$i] = rand(1, 100);
    }

    foreach ($array as $index => $value) {
        if ($index % 2 == 1) {
            continue; // Skip every second element
        }
        $sum += $value;
    }

    echo "Generated Array: " . implode(", ", $array) . "<br>";
    echo "Sum (skipping every second element): " . $sum;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $size = intval($_POST['size']);
    generateArrayAndSum($size);
}
?>

