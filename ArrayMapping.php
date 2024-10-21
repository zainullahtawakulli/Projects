<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filter and Reverse Words</title>
    <style>
        body { font-family: Arial, sans-serif; }
        .container { width: 300px; margin: 50px auto; text-align: center; }
        button { padding: 10px 20px; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Filter and Reverse Words</h1>
        <button onclick="window.location.href='filter_words.php'">Filter Words</button>
    </div>
</body>
</html>


<?php
function filterAndReverseWords($words) {
    $filtered = array_filter($words, function($word) {
        return !preg_match('/[aeiouAEIOU]/', $word);
    });

    $reversed = array_map(function($word) {
        return strrev($word);
    }, $filtered);

    return $reversed;
}

$words = ["apple", "sky", "fly", "orange", "cry"];
$modifiedWords = filterAndReverseWords($words);

echo "<h1>Modified words:</h1>";
echo implode(", ", $modifiedWords) . "<br>";
?>
