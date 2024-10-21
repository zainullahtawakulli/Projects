<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Type Detection</title>
</head>
<body>
    <h1>Detect Data Types</h1>
    <form action="./DateTypeError.php" method="post">
        <label for="input1">Enter First Value (number or text):</label><br>
        <input type="text" id="input1" name="input1" required><br><br>

        <label for="input2">Enter Second Value (number or text):</label><br>
        <input type="text" id="input2" name="input2"><br><br>

        <label for="input3">Enter Third Value (optional):</label><br>
        <input type="text" id="input3" name="input3"><br><br>

        <input type="submit" value="Detect Data Types">
    </form>
</body>
</html>


<?php
// Function to detect and return data type
function detectDataType($variable) {
    $type = gettype($variable);
    
    // Handle invalid resource type (for demonstration, we just check for string "resource")
    if ($type === "resource") {
        throw new Exception("Invalid resource type encountered");
    }

    return "The data type is: " . $type;
}

// Check if form data was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve inputs from form
    $input1 = $_POST['input1'];
    $input2 = isset($_POST['input2']) ? $_POST['input2'] : null;
    $input3 = isset($_POST['input3']) ? $_POST['input3'] : null;

    try {
        // Detect and display data types
        echo "<h2>Data Type Detection Results:</h2>";
        echo "<p>Input 1: " . detectDataType($input1) . "</p>";
        
        if (!empty($input2)) {
            echo "<p>Input 2: " . detectDataType($input2) . "</p>";
        }
        
        if (!empty($input3)) {
            echo "<p>Input 3: " . detectDataType($input3) . "</p>";
        }
    } catch (Exception $e) {
        // Handle any errors
        echo "Error: " . $e->getMessage();
    }
} else {
    echo "Invalid request method.";
}
?>
