<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String Manipulation</title>
</head>
<body>
    <h1>String Manipulation - Reverse Words in Sentences</h1>
    <form action="./StringManiptlate.php" method="post">
        <label for="paragraph">Enter a paragraph:</label><br>
        <textarea id="paragraph" name="paragraph" rows="6" cols="60" required></textarea><br><br>
        
        <input type="submit" value="Reverse Words">
    </form>
</body>
</html>


<?php
// Check if the form data was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the paragraph from the form
    $paragraph = $_POST['paragraph'];

    // Function to reverse words in each sentence
    function reverseWordsInSentences($paragraph) {
        // Split paragraph into sentences
        $sentences = explode('.', $paragraph);
        $reversedSentences = [];

        foreach ($sentences as $sentence) {
            // Split each sentence into words and reverse them
            $words = explode(' ', trim($sentence));
            $reversedWords = array_reverse($words);
            $reversedSentences[] = implode(' ', $reversedWords);
        }

        // Rebuild paragraph from reversed sentences
        return implode('. ', $reversedSentences) . '.';
    }

    // Output the result
    $result = reverseWordsInSentences($paragraph);
    echo "<h2>Reversed Words in Sentences:</h2>";
    echo "<p>" . htmlspecialchars($result) . "</p>";
} else {
    echo "Invalid request method.";
}
?>
