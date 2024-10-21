<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function Chaining</title>
    <style>
        body { font-family: Arial, sans-serif; text-align: center; }
        button { padding: 10px 20px; margin-top: 20px; }
    </style>
</head>
<body>
    <h1>Function Chaining</h1>
    <button onclick="window.location.href='function_chaining.php'">Run Function Chain</button>
</body>
</html>


<?php
class StringManipulator {
    private $string;

    public function __construct($string) {
        $this->string = $string;
    }

    public function uppercase() {
        $this->string = strtoupper($this->string);
        return $this;
    }

    public function reverse() {
        $this->string = strrev($this->string);
        return $this;
    }

    public function addPrefix($prefix) {
        $this->string = $prefix . $this->string;
        return $this;
    }

    public function getString() {
        return $this->string;
    }
}

$string = new StringManipulator("hello");
echo $string->uppercase()->reverse()->addPrefix("Reversed: ")->getString();
?>
