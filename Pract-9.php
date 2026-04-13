<?php
// Set timezone (change if needed)
date_default_timezone_set("Asia/Kolkata");

// Get current date and time
$currentDateTime = date("d-m-Y H:i:s");

// Display output
echo "<!DOCTYPE html>";
echo "<html>";
echo "<head>";
echo "<title>Practical 9</title>";
echo "<style>
        body {
            font-family: Arial;
            text-align: center;
            margin-top: 100px;
            background-color: #f2f2f2;
        }
        .box {
            background: white;
            padding: 20px;
            display: inline-block;
            border-radius: 10px;
            box-shadow: 0px 0px 10px #aaa;
        }
      </style>";
echo "</head>";

echo "<body>";
echo "<div class='box'>";
echo "<h1>Welcome to PHP Programming</h1>";
echo "<h3>Current Date & Time:</h3>";
echo "<p>" . $currentDateTime . "</p>";
echo "</div>";
echo "</body>";
echo "</html>";
?>