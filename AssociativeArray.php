<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Merge Student Scores</title>
    <style>
        body { font-family: Arial, sans-serif; }
        .container { width: 300px; margin: 50px auto; text-align: center; }
        button { padding: 10px 20px; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Merge Student Scores</h1>
        <button onclick="window.location.href='merge_scores.php'">Merge Scores</button>
    </div>
</body>
</html>


<?php
$studentScores1 = [
    "John" => 85,
    "Jane" => 90,
    "Doe" => 75
];

$studentScores2 = [
    "John" => 88,
    "Jane" => 92,
    "Smith" => 80
];

$mergedScores = $studentScores1;

foreach ($studentScores2 as $student => $score) {
    if (isset($mergedScores[$student])) {
        $mergedScores[$student] = max($mergedScores[$student], $score);
    } else {
        $mergedScores[$student] = $score;
    }
}

echo "<h1>Merged Scores</h1>";
foreach ($mergedScores as $student => $score) {
    echo "$student: $score<br>";
}
?>
