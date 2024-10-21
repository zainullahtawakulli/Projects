<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Palindrome Checker</title>
    <style>
        body { font-family: Arial, sans-serif; text-align: center; }
        button { padding: 10px 20px; margin-top: 20px; }
    </style>
</head>
<body>
    <h1>Palindrome Checker</h1>
    <button onclick="window.location.href='palindrome.php'">Check Palindrome</button>
</body>
</html>


<?php
function isPalindrome($string) {
    if (strlen($string) <= 1) {
        return true;
    }

    if ($string[0] == $string[strlen($string) - 1]) {
        return isPalindrome(substr($string, 1, strlen($string) - 2));
    }

    return false;
}

$word = "madam"; // You can change this value to test other strings

if (isPalindrome($word)) {
    echo "$word is a palindrome.<br>";
} else {
    echo "$word is not a palindrome.<br>";
}
?>
