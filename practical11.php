<!DOCTYPE html>
<html>
<head>
    <title>Practical 11 - String Manipulation</title>
    <style>
        body {
            font-family: Arial;
            background-color: #f2f2f2;
            text-align: center;
            margin-top: 60px;
        }
        .box {
            background: white;
            padding: 20px;
            width: 350px;
            margin: auto;
            border-radius: 10px;
            box-shadow: 0px 0px 10px gray;
        }
        input {
            width: 90%;
            padding: 8px;
            margin: 10px 0;
        }
        button {
            padding: 10px 15px;
            background: blue;
            color: white;
            border: none;
            cursor: pointer;
        }
        .result {
            margin-top: 20px;
            background: #e8f0fe;
            padding: 10px;
            border-radius: 8px;
        }
    </style>
</head>

<body>

<div class="box">
    <h2>String Manipulation</h2>

    <form method="POST">
        <input type="text" name="text" placeholder="Enter a string" required>
        <button type="submit">Process</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $text = $_POST['text'];

        $length = strlen($text);
        $reverse = strrev($text);
        $substring = substr($text, 0, 5); // first 5 characters

        echo "<div class='result'>";
        echo "<h3>Results</h3>";
        echo "<p><b>Original String:</b> $text</p>";
        echo "<p><b>Length:</b> $length</p>";
        echo "<p><b>Reverse:</b> $reverse</p>";
        echo "<p><b>Substring (first 5 chars):</b> $substring</p>";
        echo "</div>";
    }
    ?>

</div>

</body>
</html>