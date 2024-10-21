<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Highest Average Score</title>
    <style>
        body { font-family: Arial, sans-serif; }
        .container { width: 300px; margin: 50px auto; text-align: center; }
        button { padding: 10px 20px; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Find Top Student</h1>
        <button onclick="window.location.href='top_student.php'">Find Top Student</button>
    </div>
</body>
</html>


<?php
$students = [
    "John" => [90, 85, 78],
    "Jane" => [92, 88, 80],
    "Doe" => [85, 80, 90]
];

$highest_avg = 0;
$top_student = "";

foreach ($students as $student => $scores) {
    $average = array_sum($scores) / count($scores);
    if ($average > $highest_avg) {
        $highest_avg = $average;
        $top_student = $student;
    }
}

echo "<h1>Top student: $top_student</h1>";
echo "With an average score of $highest_avg<br>";
?>
