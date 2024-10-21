<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dynamic Type Conversion</title>
</head>
<body>
    <h1>Dynamic Type Conversion</h1>
    <form action="DynamicType.php" method="post">
        <label for="input1">Enter First Value:</label>
        <input type="text" id="input1" name="input1" required><br><br>
        
        <label for="input2">Enter Second Value:</label>
        <input type="text" id="input2" name="input2" required><br><br>
        
        <input type="submit" value="Submit">
    </form>
</body>
</html>



<?php
// Check if the form data was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the inputs from the form
    $input1 = $_POST['input1'];
    $input2 = $_POST['input2'];

    // Function to handle dynamic type conversion
    function dynamicTypeConversion($input1, $input2) {
        if (is_numeric($input1) && is_numeric($input2)) {
            // Both are numbers, multiply
            return "Result: " . ($input1 * $input2);
        } 
        elseif (is_string($input1) && is_string($input2)) {
            // Both are strings, sort alphabetically
            $arr = [$input1, $input2];
            sort($arr);
            return "Result: " . implode(", ", $arr);
        } 
        else {
            // One is a string, concatenate
            return "Result: " . $input1 . $input2;
        }
    }

    // Display the result
    echo dynamicTypeConversion($input1, $input2);
} else {
    echo "Invalid request method.";
}
?>
